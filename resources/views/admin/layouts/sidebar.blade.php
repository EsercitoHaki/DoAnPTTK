<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('admin//assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Chào mừng trở lại</span>
      </a>
    </div>
  
  
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'bg-gradient-primary active' : '' }} " 
          href="{{route('dashboard')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
      
      <span class="nav-link-text ms-1">Bảng điều khiển</span>
    </a>
  </li>
  
    
  <li class="nav-item">
    <a class="nav-link text-white {{ request()->routeIs('roles.*') ? 'bg-gradient-primary active' : '' }} " 
      href="{{route('roles.index')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">table_view</i>
        </div>
      
      <span class="nav-link-text ms-1">Quản lí vai trò</span>
    </a>
  </li>
  
    
  <li class="nav-item">
    <a class="nav-link text-white " href="./billing.html">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">receipt_long</i>
        </div>
      
      <span class="nav-link-text ms-1">Quản lí thành viên</span>
    </a>
  </li>
  
    
  <li class="nav-item">
    <a class="nav-link text-white " href="./virtual-reality.html">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">view_in_ar</i>
        </div>
      
      <span class="nav-link-text ms-1">Quản lí sản phẩm</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="./rtl.html">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
        </div>
      
      <span class="nav-link-text ms-1">Quản lí danh mục</span>
    </a>
  </li>
  </aside>