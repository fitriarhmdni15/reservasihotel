<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HOTEL CERIA</div> <!-- Close the <sup> tag properly or remove it if not needed -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.tipekamar.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tipe Kamar</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.fasilitashotel.index')}}"> <!-- Update route name here -->
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Fasilitas Hotel</span></a>
    </li>
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
