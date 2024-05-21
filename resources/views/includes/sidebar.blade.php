@php
    $showmenuadmin = $showmenuadmin ?? false;
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-basket"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Event Blaze</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @if ($showmenuadmin)
        <!-- Admin Only Links -->
        <hr class="sidebar-divider">
        <li class="nav-item active">
            <a class="nav-link" href="/pelanggan">
                <i class="fas fa-fw fa-users"></i>
                <span>Peserta</span>
            </a>
        </li>
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/barang">
                <i class="fas fa-fw fa-gift"></i>
                <span>Tiket</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/transaksi">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Transaksi</span>
            </a>
        </li>
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="/kategori">
                <i class="fas fa-fw fa-th-list"></i>
                <span>Event Acara</span>
            </a>
        </li>
    @else
        <!-- User Only Links -->
        <li class="nav-item active">
            <a class="nav-link" href="/transaksi">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Transaksi</span>
            </a>
        </li>
    @endif
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
</ul>
