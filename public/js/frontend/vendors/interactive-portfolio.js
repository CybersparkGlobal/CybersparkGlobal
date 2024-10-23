/*!
    Carto - Interactive portfolio
    Created by ThemeZaa
!*/

$(function() {
  "use strict";
    const container = document.getElementById("stickyImgContainer");

if (typeof (container) != 'undefined' && container != null) {

  const sliders = document.querySelector(".slides").querySelectorAll(".slide")
  const slidesData = Array.from(sliders).map(item => {
    return {
      image: "",
      title: "title1",
      meta: ""
    }
  })
  const createEleWithClass = (tag, className) => {
    const ele = document.createElement(tag);
    ele.className = className;
    return ele;
  };

  class Slides {
    constructor(data) {
      this.data = document.querySelectorAll(".slide");
      this.container = document.querySelector(".slides");
      this.currentIdx = 0;
      this.slides = document.querySelectorAll(".slide");
    }
    mount(container) {
      container.appendChild(this.container);
      let activeIndex = 0;
      for (let i = 0; i < this.slides.length; i++) {
        if (activeIndex === i) {
          this.slides[i].classList.remove("next");
          this.slides[i].classList.remove("prev");
          this.slides[i].classList.add("show-meta");
          document.querySelector(".bg-overlay").style.backgroundImage = `url("${this.slides[i].dataset.bg}")`
        } else {
          if (activeIndex > i) {
            this.slides[i].classList.remove("next");
            this.slides[i].classList.add("prev");
          } else {
            this.slides[i].classList.add("next");
            this.slides[i].classList.remove("prev");
          }
        }
      }
    }
    onActiveIndexChange(activeIndex) {
      this.currentIdx = activeIndex;
      for (let i = 0; i < this.slides.length; i++) {
        if (activeIndex === i) {
          this.slides[i].classList.remove("next");
          this.slides[i].classList.remove("prev");
          document.querySelector(".bg-overlay").style.backgroundImage = `url("${this.slides[i].dataset.bg}")`
        } else {
          if (activeIndex > i) {
            this.slides[i].classList.remove("next");
            this.slides[i].classList.add("prev");
          } else {
            this.slides[i].classList.add("next");
            this.slides[i].classList.remove("prev");
          }
        }
      }
    }
    onMove(indexFloat) {
      this.container.style.transform = `translateY(${(indexFloat * 100) /
        this.slides.length}%)`;
    }
    appear() {
      this.container.classList.add("scrolling");
      container.classList.add("scrolling");
      this.slides[this.currentIdx].classList.remove("show-meta");
    }
    disperse(activeIndex) {
      this.currentIdx = activeIndex;
      this.slides[this.currentIdx].classList.add("show-meta");
      this.container.classList.remove("scrolling");
      container.classList.remove("scrolling");
      for (let index = 0; index < this.data.length; index++) {
        if (index > activeIndex) {
          this.slides[index].classList.add("next");
          this.slides[index].classList.remove("prev");
        } else if (index < activeIndex) {
          this.slides[index].classList.remove("next");
          this.slides[index].classList.add("prev");
        } else {
          this.slides[index].classList.remove("next");
          this.slides[index].classList.remove("prev");
        }
      }
    }
  }

  class Grab {
    constructor({
      indexSize,
      onIndexChange,
      onGrabStart,
      onGrabMove,
      onGrabEnd
    }) {
      this.onGrabEnd = onGrabEnd;
      this.onGrabStart = onGrabStart;
      this.onGrabMove = onGrabMove;
      
      this.scroll = {
        start: 0,
        current: 0,
        initial: 0
      };

      this.listen("mousedown", this.onMouseDown.bind(this));
      this.listen("mousemove", this.onMouseMove.bind(this));
      this.listen("mouseup", this.onMouseUp.bind(this));

      this.listen("touchstart", this.onMouseDown.bind(this), true);
      this.listen("touchmove", this.onMouseMove.bind(this), true);
      this.listen(["touchend", "touchcancel"], this.onMouseUp.bind(this), true);
    }
    listen(events, grabListener, isTouch) {
      const _this = this;
      let mouseListener = function (ev) {
        if (ev.type === "mouseout" && ev.relatedTarget != null) return;
        grabListener({
          y: ev.clientY
        });
      };

      let touchListener = function (ev) {
        grabListener({
          y: ev.targetTouches[0] ? ev.targetTouches[0].clientY : null
        });
      };
      let listener = mouseListener;
      if (isTouch) {
        listener = touchListener;
      }
      if (Array.isArray(events)) {
        for (let i = 0; i < events.length; i++) {
          window.addEventListener(events[i], listener, false);
        }
      } else {
        window.addEventListener(events, function (event) {
          if (event.target.closest(".stickyImageContainer") === container) {
            listener(event);
          } else {
            _this.onMouseUp()
          }
        }, false);
      }
    }

    onMouseDown(position) {
      this.scroll.inital = this.scroll.current;

      this.scroll.start = position.y;
      this.scroll.current = position.y;
      this.scroll.delta = this.scroll.current - this.scroll.start;

      this.onGrabStart({
        delta: this.scroll.delta,
        direction: Math.abs(this.scroll.delta),
        current: this.scroll.current,
        start: this.scroll.start
      });
    }
    onMouseMove(position) {
      if (this.scroll.start) {
        this.scroll.current = position.y;
        this.scroll.delta = this.scroll.current - this.scroll.start;

        this.onGrabMove({
          delta: this.scroll.delta,
          direction: Math.abs(this.scroll.delta),
          current: this.scroll.current,
          start: this.scroll.start
        });
      }
    }
    onMouseUp() {
      if (this.scroll.start) {
        this.onGrabEnd({
          delta: this.scroll.delta,
          direction: Math.abs(this.scroll.delta),
          current: this.scroll.current,
          start: this.scroll.start
        });

        this.scroll.start = null;
        this.scroll.current = null;
        this.scroll.delta = null;
      }
    }
  }

  const reach = function ({ from, to, restDelta = 0.01 }) {

    let current = Object.assign({}, from);
    let keys = Object.keys(from);

    let raf = {
      current: null
    };

    let _update = function (update, complete) {
      if (keys.length === 0) {
        cancelAnimationFrame(raf.current);
        raf.current = null;

        complete(current);
        return;
      }

      let cacheKeys = keys.slice();
      for (var i = keys.length, val, key; i >= 0; i--) {
        key = keys[i];
        val = current[key] + (to[key] - current[key]) * 0.1;
        if (Math.abs(to[key] - val) < restDelta) {
          current[key] = to[key];
          // Remove key
          keys.splice(i, 1);
          // Move i down by pne
          i--;
        } else {
          current[key] = val;
        }
      }

      update(current);
      raf.current = requestAnimationFrame(_update);
    };
    return {
      start: function ({
        update,
        complete
      }) {
        _update = _update.bind(null, update, complete);
        raf.current = requestAnimationFrame(_update);
        return {
          stop: function () {
            cancelAnimationFrame(raf.current);
            raf.current = null;
          }
        };
      }
    };
  };

  function Showcase(data, options = {}) {
    
    this.data = data;
    this.progress = 0;
    this.direction = 1;
    this.waveIntensity = 0;
    this.options = options;

    this.index = {
      target: 0,
      current: 0,
      initial: 0,
      scrollSize: window.innerHeight / 6,
      active: 0
    };

    this.follower = {
      x: 0,
      y: 0
    };

    this.followerSpring = null;

    this.slidesSpring = null;

    this.grab = new Grab({
      onGrabStart: this.onGrabStart.bind(this),
      onGrabMove: this.onGrabMove.bind(this),
      onGrabEnd: this.onGrabEnd.bind(this)
    });
  }

  function clamp(num, min, max) {
    return Math.max(min, Math.min(num, max));
  }

  Showcase.prototype.onGrabMove = function (scroll) {
    this.index.target = clamp(
      this.index.initial + scroll.delta / this.index.scrollSize,
      -this.data.length + 0.51,
      0.49
    );

    const index = clamp(Math.round(-this.index.target), 0, this.data.length - 1);

    if (this.index.active !== index) {
      this.index.active = index;
      if (this.options.onActiveIndexChange) {
        this.options.onActiveIndexChange(this.index.active);
      }
    }

    if (this.slidesPop) {
      this.slidesPop.stop();
    }
    this.slidesPop = reach({
      from: {
        index: this.index.current
      },
      to: {
        index: this.index.target
      },
      restDelta: 0.001
    }).start({
      update: val => {
        if (this.options.onIndexChange) {
          this.options.onIndexChange(val.index);
        }
        this.index.current = val.index;
      },
      complete: val => {
        if (this.options.onIndexChange) {
          this.options.onIndexChange(val.index);
        }
        this.index.current = val.index;
      }
    });
  };

  Showcase.prototype.onGrabStart = function () {
    if (this.options.onZoomOutStart) {
      this.options.onZoomOutStart({
        activeIndex: this.index.active
      });
    }
    this.index.initial = this.index.current;
  };

  Showcase.prototype.snapCurrentToActiveIndex = function () {
    if (this.slidesPop) {
      this.slidesPop.stop();
    }
    this.slidesPop = reach({
      from: {
        index: this.index.current
      },
      to: {
        index: Math.round(this.index.target)
      },
      restDelta: 0.001
    }).start({
      complete: () => { },
      update: val => {
        // this.slides.onMove(val);
        if (this.options.onIndexChange) {
          this.options.onIndexChange(val.index);
        }
        this.index.current = val.index;
      }
    });
  };

  Showcase.prototype.onGrabEnd = function () {
    if (this.options.onFullscreenStart) {
      this.options.onFullscreenStart({
        activeIndex: this.index.active
      });
      this.snapCurrentToActiveIndex();
    }
  };

  Showcase.prototype.onResize = function () {
  };
  
  const slides = new Slides();
  const showcase = new Showcase(slidesData, {
    onActiveIndexChange: activeIndex => {
      slides.onActiveIndexChange(activeIndex);
    },
    onIndexChange: index => {
      slides.onMove(index);
    },
    onZoomOutStart: ({ activeIndex }) => {
      slides.appear();
    },
    onZoomOutFinish: ({ activeIndex }) => { },
    onFullscreenStart: ({ activeIndex }) => {
      slides.disperse(activeIndex);
    },
    onFullscreenFinish: ({ activeIndex }) => { }
  });
  
  slides.mount(container);
}
});

