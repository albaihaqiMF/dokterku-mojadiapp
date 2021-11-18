<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Tinker Tailwind HTML Admin Template" class="w-6" src="/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Dokter<span class="font-medium">ku</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="{{request()->routeIs('dashboard') ? " side-menu side-menu--active"
                : "side-menu" }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="{{request()->routeIs('user.*') ? " side-menu side-menu--active" : "side-menu"
                }}">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title">
                    Users
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('user.doctor') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Dokter </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.pasien') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Pasien </div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
