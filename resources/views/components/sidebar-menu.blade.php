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
    </ul>
</nav>
<!-- END: Side Menu -->
