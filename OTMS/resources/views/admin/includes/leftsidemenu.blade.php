<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="{{asset('admin')}}/images/logo.png" alt="" height="16">
            </span>
        <span class="logo-sm">
                <img src="{{asset('admin')}}/images/logo_sm.png" alt="" height="16">
            </span>
    </a>

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('admin')}}/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('admin')}}/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">New</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">OPTIONS</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Course Module</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Course Category</a>
                        </li>
                        <li>
                            <a href="">Course Sub Category</a>
                        </li>
                        <li>
                            <a href="">Course</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-sliders-v"></i>
                    <span> Slider Module</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Add Slider</a>
                        </li>
                        <li>
                            <a href="">Manage Slider</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Contact Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Manage Contact</a>
                        </li>
                        <li>
                            <a href="">Send Email</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-wifi-router"></i>
                    <span> Enroll Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">

                    </ul>
                </div>
            </li>

        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{asset('admin')}}/images/help-icon.svg" height="90" alt="Helper Icon Image" />
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
