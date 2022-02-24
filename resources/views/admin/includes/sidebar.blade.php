 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('webpanel.dashboard') }}" class="brand-link navbar-light">
         <img src="{{ url('dashboard') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light text-dark">mnrSewa Admin </span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ url('/defaultUser.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div> -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item has-treeview menu-open">
                     <a href="{{ route('webpanel.dashboard') }}"
                         class="nav-link  {{ Route::is('webpanel.dashboard') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             {{ trans('general.dashboard') }}
                         </p>
                     </a>

                 </li>
                 <li class="nav-item has-treeview menu-open">
                     <a href="{{ route('servicecategory.index') }}"
                         class="nav-link  {{ Route::is('servicecategory.*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Service Category
                         </p>
                     </a>

                 </li>

                 @if (Auth::user()->role_id == 1)
                     <li class="nav-item has-treeview {{ Route::is('user.*') ? ' menu-open' : '' }}">
                         <a href="#" class="nav-link {{ Route::is('user.*') ? ' active' : '' }}">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 {{ trans('general.user') }}
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="" class="nav-link ">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p> {{ trans('general.all-user') }}</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @endif

                 @if (Auth::user()->role_id == 2)

                 @endif
             </ul>
             </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
