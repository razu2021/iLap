
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('contents/backend/assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span class="font-sans-serif text-primary">iLap</span></div>
       
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                    </a>
                    <ul class="nav collapse show" id="dashboard">
                        <li class="nav-item">
                            <a class="nav-link active" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <!-- ======================================================-->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">User Management </div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   
                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">System users </span></div>
                    </a>
                    <ul class="nav collapse" id="email">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Students</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Agents / Partners</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">University Admins</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Staff / Employees</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Role & Permissions</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Partner / Branch System </div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   
                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">System users </span></div>
                    </a>
                    <ul class="nav collapse" id="email">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Students</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Agents / Partners</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">University Admins</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Staff / Employees</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Role & Permissions</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                {{-- ===================================================  list end here ======================= --}}


        
                
          










               
            </ul>
            <div class="settings my-3">
                <div class="card shadow-none">
                    <div class="card-body alert mb-0" role="alert">
                        <div class="btn-close-falcon-container">  
                            <button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert">  </button>
                        </div>
                        <div class="text-center"><img src="{{asset('contents/backend/assets')}}/assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                            <p class="fs-11 mt-2">Would you like to  <br />Visit of your<a href="https://ulcbd.org">Site</a></p>
                            <div class="d-grid"><a class="btn btn-sm btn-primary" href="https://ulcbd.org/" target="_blank">Visit Site</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>