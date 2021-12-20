<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('priyanshu/p1.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">Priyanshu</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->image}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{{ Auth::user()->email}}}
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/graph" class="nav-link">   
        <i class="fas fa-chart-pie" style="font-size:18px; color:rgb(0, 161, 22)"></i>
              <p>
                GRAPH
                
              </p>
            </a>
          </li>

          <li class="nav-header m-auto">ASSET MANAGEMENT</li>
         
          <li class="nav-item">
            <a href="/addasert" class="nav-link">
             
        <i class="fa fa-plus-circle " style="font-size:18px; color:red"></i>   
              <p>
                Add Asset Type
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/showasset" class="nav-link">
              {{-- <i class="nav-icon fas fa-th"></i> --}}
              <i class="fas fa-globe-americas" style="color:rgb(0, 225, 255)"></i> 
              <p>
                Show Types of Asset
                
              </p>
            </a>
          </li>


    
          <li class="nav-header m-auto">  ASSET </li>
         
          <li class="nav-item">
            <a href="/addasetitems" class="nav-link">
              <i class="fas fa-folder-plus"  style="color:#ffc609"></i>
              <p>
                Add Assets
                <span class="right">
                  {{-- <i class="fas fa-plus-square" style="color:#ffda08"></i> --}}
                </span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/showassetdata" class="nav-link">
              {{-- <i class="far fa-hourglass"></i> --}}
              <i class="far fa-eye" style="color:#C9FF94"></i>  
              <p>
                Show Assets
              </p>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="/changepassword" class="nav-link" >
              <i class="fas fa-key text-primary"></i>
              <p>Change Password</p>
          
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>



          
          <li class="nav-item">
            <a href="/changeimage" class="nav-link" >
              <i class="far fa-image" style="color: rgb(8, 255, 255)"></i>
              <p>Change Profile</p>
          
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>



          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt text-light"></i>
              <p>{{ __('Logout') }}</p>
          
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


