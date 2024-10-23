
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a  href="{{ route('admin.dashboard') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li>
            <li class="nav-label">Banner</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-images"></i><span class="nav-text">Banner</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.banner.index') }}">Banners</a></li>
                    <li><a href="{{ route('admin.banner.create') }}">Add Banner</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
