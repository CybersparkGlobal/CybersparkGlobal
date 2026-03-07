<div>
    <div class="position-fixed" style="bottom: 20px; right: 20px; z-index: 9999;">
        @if(!$isOpen)
            <div class="chat-popup-msg bg-white shadow-sm border p-2 mb-2 text-center rounded-pill">
                <span>Hi <span class="wave-hand">👋</span></span>
                <div class="popup-arrow"></div>
            </div>
        @endif

        <button wire:click="toggleChat" class="btn btn-primary rounded-circle shadow-lg floating-chat-btn d-flex align-items-center justify-content-center">
            @if($isOpen)
                <span style="font-size: 22px; color: white;">✕</span>
            @else
                <span style="font-size: 28px; color: white;">💬</span>
            @endif
        </button>
    </div>

    @if($isOpen)
        <div class="card shadow-lg position-fixed border-0 chat-window-card">
            <div class="card-header chat-header-main border-0 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="position-relative me-3">
                            <div class="bot-avatar-circle d-flex align-items-center justify-content-center shadow-sm">
                                <span style="font-size: 18px;">🤖</span>
                            </div>
                            <div class="online-indicator-new">
                                <span class="dot-new"></span>
                                <span class="pulse-new"></span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center gap-1">
                                <h6 class="chat-title mb-0 fw-bold text-white">CSG AI</h6>
                                <span class="badge rounded-pill bg-white text-primary fw-bold" style="font-size: 7px; padding: 2px 5px; letter-spacing: 0.5px;">AI</span>
                            </div>
                            <small class="chat-subtitle text-white-50">Active Now • Support Agent</small>
                        </div>
                    </div>

                    <button wire:click="toggleChat" class="btn-close-custom d-flex align-items-center justify-content-center shadow-sm" aria-label="Close">
                        <span style="font-size: 14px; color: white;">✕</span>
                    </button>
                </div>
            </div>

            <div class="bg-white border-bottom p-2 px-3">
                <div class="quick-btn-container d-flex gap-2 overflow-auto pb-1">
                    <button wire:click="sendQuickMessage('ইনস্টিটিউট ম্যানেজমেন্ট সফটওয়্যার সম্পর্কে জানতে চাই')" class="btn btn-sm quick-btn">🏫 Institute Software</button>
                    <button wire:click="sendQuickMessage('একটি ওয়েবসাইট বানাতে চাই')" class="btn btn-sm quick-btn">🌐 Web Dev</button>
                    <button wire:click="sendQuickMessage('সফটওয়্যারটি নিতে চাই, কি করতে হবে?')" class="btn btn-sm quick-btn btn-get-software">🚀 Get Software</button>
                </div>
            </div>

            <div id="chat-body" class="card-body bg-light chat-body-custom">
                <div class="d-flex flex-row justify-content-start mb-3">
                    <div class="chat-bubble chat-bubble-bot shadow-sm">
                        আসসালামু আলাইকুম! 👋 **CyberSpark Global Ai**-এ আপনাকে স্বাগতম। আমি আপনাকে কীভাবে সাহায্য করতে পারি?
                    </div>
                </div>

                @foreach($chatHistory as $chat)
                    <div class="d-flex flex-row {{ $chat['role'] == 'user' ? 'justify-content-end' : 'justify-content-start' }} mb-3">
                        <div class="chat-bubble {{ $chat['role'] == 'user' ? 'chat-bubble-user shadow' : 'chat-bubble-bot shadow-sm' }} shadow-sm">
                            {!! nl2br(preg_replace(['/\*\*(.*?)\*\*/','/\[(.*?)\]\((.*?)\)/','/^\* (.*?)$/m',],['<strong>$1</strong>','<a href="$2" target="_blank" class="chat-link">$1</a>','• $1',],e($chat['content']))) !!}
                        </div>
                    </div>
                @endforeach

                <div wire:loading.flex wire:target="sendMessage" class="justify-content-start mb-3" style="display: none;">
                    <div class="typing-container d-flex align-items-center gap-2 shadow-sm">
                        <div class="typing-indicator d-flex align-items-center"><span></span><span></span><span></span></div>
                        <small class="text-muted" style="font-size: 11px;">Typing...</small>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white border-top-0 p-3">
                <form wire:submit.prevent="sendMessage">
                    <div class="input-group bg-light rounded-pill p-1 border d-flex align-items-center">
                        <input type="text" wire:model.defer="message" class="form-control border-0 bg-transparent shadow-none px-3 chat-input-field" placeholder="আপনার বার্তাটি লিখুন...">
                        <button class="btn btn-primary rounded-circle send-btn-circle" type="submit">
                            <span>➤</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <style>
        /* Main Animations */
        @keyframes slideUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes pulse-animation { 0% { transform: scale(0.5); opacity: 0.8; } 100% { transform: scale(2.5); opacity: 0; } }
        @keyframes typing { 0%, 100% { transform: translateY(0); opacity: 0.4; } 50% { transform: translateY(-4px); opacity: 1; } }
        @keyframes popup-fade { 0%, 10%, 90%, 100% { opacity: 0; transform: translateY(10px); } 15%, 85% { opacity: 1; transform: translateY(0); } }
        @keyframes chat-bounce { 0%, 80%, 100% { transform: scale(1); } 85% { transform: scale(1.1) translateY(-5px); } }

        /* Window & Layout */
        .chat-window-card { bottom: 90px; right: 20px; width: 350px; z-index: 9999; border-radius: 16px; overflow: hidden; animation: slideUp 0.3s ease-out; }
        .chat-body-custom { height: 320px; overflow-y: auto; padding: 15px; scrollbar-width: none; }
        .chat-body-custom::-webkit-scrollbar { display: none; }

        /* Header & Labels */
        .chat-header-main { background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%) !important; }
        .chat-title { font-size: 11px; line-height: 1.2; }
        .chat-subtitle { font-size: 8px; opacity: 0.8; line-height: 1; }

        /* Floating Button */
        .floating-chat-btn { width: 60px; height: 60px; border: none; background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%); transition: 0.3s; animation: chat-bounce 5s infinite; }
        .chat-popup-msg { position: absolute; bottom: 70px; right: 0; width: 140px; font-size: 12px; font-weight: 500; animation: popup-fade 8s infinite; }
        .popup-arrow { position: absolute; bottom: -6px; right: 25px; width: 12px; height: 12px; background: white; transform: rotate(45deg); border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; }

        /* Bubbles */
        .chat-bubble { padding: 10px 15px; font-size: 13.5px; max-width: 85%; }
        .chat-bubble-bot { background-color: #ffffff; border: 1px solid #dee2e6; color: #212529; border-radius: 4px 15px 15px 15px !important; }
        .chat-bubble-user { background-color: #0d6efd; color: #ffffff; border-radius: 15px 15px 4px 15px !important; }
        .chat-link { color: inherit; text-decoration: underline; font-weight: bold; }

        /* Quick Buttons */
        .quick-btn-container { scrollbar-width: none; -ms-overflow-style: none; }
        .quick-btn-container::-webkit-scrollbar { display: none; }
        .quick-btn { white-space: nowrap; font-size: 11px; border-radius: 20px; padding: 4px 12px; transition: 0.3s; border: 1px solid #0d6efd !important; color: #0d6efd !important; background: transparent; }
        .quick-btn:hover { background-color: #0d6efd !important; color: #fff !important; }
        .btn-get-software { border-color: #2ecc71 !important; color: #2ecc71 !important; }
        .btn-get-software:hover { background-color: #2ecc71 !important; border-color: #2ecc71 !important; }

        /* Indicators */
        .online-indicator { position: relative; display: flex; align-items: center; justify-content: center; width: 10px; height: 10px; }
        .online-indicator .dot { width: 8px; height: 8px; background-color: #2ecc71; border-radius: 50%; z-index: 2; }
        .online-indicator .pulse { position: absolute; width: 16px; height: 16px; top: -3px; left: -3px; background-color: #2ecc71; border-radius: 50%; opacity: 0.6; animation: pulse-animation 2s infinite; z-index: 1; }

        /* Typing */
        .typing-container { padding: 8px 12px; background: white; border: 1px solid #dee2e6; border-radius: 4px 15px 15px 15px !important; width: fit-content; }
        .typing-indicator span { height: 6px; width: 6px; background-color: #0d6efd; border-radius: 50%; display: inline-block; margin-right: 3px; animation: typing 1s infinite; }

        /* Footer & Input */
        .chat-input-field { font-size: 14px; height: 35px; }
        .send-btn-circle { width: 35px; height: 35px; padding: 0; border: none; flex-shrink: 0; display: flex; align-items: center; justify-content: center; }
        .send-btn-circle span { font-size: 14px; line-height: 1; }

        /* Premium Header Styling */
        .chat-header-main {
            background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%) !important;
            border-radius: 16px 16px 0 0 !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .bot-avatar-circle {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .chat-title {
            font-size: 13px !important;
            letter-spacing: 0.3px;
        }

        .chat-subtitle {
            font-size: 9px !important;
            margin-top: 2px;
        }

        /* Updated Online Indicator for Header */
        .online-indicator-new {
            position: absolute;
            bottom: 2px;
            right: 2px;
        }
        .dot-new {
            width: 8px;
            height: 8px;
            background-color: #2ecc71;
            border-radius: 50%;
            display: block;
            border: 1.5px solid #0d6efd; /* Header background color matching */
        }
        .pulse-new {
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 8px;
            background-color: #2ecc71;
            border-radius: 50%;
            animation: pulse-animation 2s infinite;
        }

        /* Custom Close Button */
        .btn-close-custom {
            width: 26px;
            height: 26px;
            background: rgba(255, 255, 255, 0.15);
            border: none;
            border-radius: 50%;
            transition: 0.3s;
            cursor: pointer;
        }
        .btn-close-custom:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        /* Existing Animation Pulse Fix */
        @keyframes pulse-animation {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }

         .wave-hand {
             display: inline-block;
             animation: wave-animation 2.5s infinite;
             transform-origin: 70% 70%;
         }

        @keyframes wave-animation {
            0% { transform: rotate( 0.0deg) }
            10% { transform: rotate(14.0deg) }
            20% { transform: rotate(-8.0deg) }
            30% { transform: rotate(14.0deg) }
            40% { transform: rotate(-4.0deg) }
            50% { transform: rotate(10.0deg) }
            60% { transform: rotate( 0.0deg) }
            100% { transform: rotate( 0.0deg) }
        }

    </style>

    <script>
        document.addEventListener('livewire:initialized', () => {
            const playSound = () => { new Audio('https://assets.mixkit.co/active_storage/sfx/2358/2358-preview.mp3').play().catch(e => {}); };
            const scroll = () => { const b = document.getElementById('chat-body'); if(b) b.scrollTo({ top: b.scrollHeight, behavior: 'smooth' }); };
            Livewire.on('scroll-bottom', () => { playSound(); setTimeout(scroll, 150); });
        });
    </script>
</div>
