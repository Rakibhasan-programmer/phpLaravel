<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{asset('/')}}admin/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('/')}}admin/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{route('dashboard')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>

            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm" class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span> Category </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCrm">
                    <ul class="side-nav-second-level">
                        <li>
                            <span class="badge bg-danger text-white float-end">New</span>
                            <a href="{{route('add-category')}}">Add Category</a>
                        </li>
                        <li>
                            <a href="{{route('manage-category')}}">Manage Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Brand </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-brand')}}">Add Brand</a>
                        </li>
                        <li>
                            <a href="{{route('manage-brand')}}">Manage Brand</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Products </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <span class="badge rounded-pill bg-light text-dark font-10 float-end">New</span>
                            <a href="{{route('add-product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{route('manage-product')}}">Manage Product</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{asset('/')}}admin/assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
