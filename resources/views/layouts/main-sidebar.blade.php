<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="#"><img src="{{ URL::asset('assets/images/logoo.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active"
            href="#><img
                src="{{ URL::asset('assets/images/logoo.png') }}"
            class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="#"><img
                src="{{ URL::asset('assets/images/logoo.png') }}" class="logo-icon"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="#"><img
                src="{{ URL::asset('assets/images/logoo.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu pt-4">
        @if (Auth('web')->check())
            @include('layouts.main-sidebar.admin')
        @endif

        @if (Auth('student')->check())
            @include('layouts.main-sidebar.student')
        @endif

        @if (Auth('teacher')->check())
            @include('layouts.main-sidebar.teacher')
        @endif

        @if (Auth('guardian')->check())
            @include('layouts.main-sidebar.guardian')
        @endif

    </div>
</aside>
<!-- main-sidebar -->
