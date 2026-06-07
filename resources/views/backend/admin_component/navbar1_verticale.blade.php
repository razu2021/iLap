
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
                        <div class="col-auto navbar-vertical-label">Global Management</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   
                    {{-- item groups start  --}}
                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Global Management </span></div>
                    </a>
                    <ul class="nav collapse" id="email">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countries</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Campuses / Branches</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Franchise / Partners</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">University Partners</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Awarding Bodies</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- item groups end here --}}
                    
                    <a class="nav-link dropdown-indicator" href="#user_role" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user_role">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">User & Role </span></div>
                    </a>
                    <ul class="nav collapse" id="user_role">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Users</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Roles & Permissions</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Staff Management</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Agent / Partner Users</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Student Accounts</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forced Login</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- item groups end here --}}


                </li>




                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Course & Academic</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#ilap_course" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ilap_course">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">iLAP Own Courses </span></div>
                    </a>
                    <ul class="nav collapse" id="ilap_course">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course List</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modules</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fees Structure</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#university" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="university">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Univesity & Programs </span></div>
                    </a>
                    <ul class="nav collapse" id="university">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All University</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Depertment</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Programs</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Session/Intak</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Requirments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fees Structure</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#academic" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="academic">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Academic Results </span></div>
                    </a>
                    <ul class="nav collapse" id="academic">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Results</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Greading System</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Transcript Generator</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Certificate Generator</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        
                    </ul>
                    {{-- --------------------------------------------------------- --}}


                </li>
                {{-- ===================================================  list end here ======================= --}}


                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Students & Enrolments</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#students" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="students">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Enrolment Details</span></div>
                    </a>
                    <ul class="nav collapse" id="students">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#letter_certificate" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="letter_certificate">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Letters & Certificate</span></div>
                    </a>
                    <ul class="nav collapse" id="letter_certificate">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offer Latters</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Certificates</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                       
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                   
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Accounts Management</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#accounts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="accounts">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Accounts</span></div>
                    </a>
                    <ul class="nav collapse" id="accounts">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">HR Management</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#hr" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="hr">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">HR Management</span></div>
                    </a>
                    <ul class="nav collapse" id="hr">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Support & Communications</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#support" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Support </span></div>
                    </a>
                    <ul class="nav collapse" id="support">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Marketing & Campaigns</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#support" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Marketing</span></div>
                    </a>
                    <ul class="nav collapse" id="support">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Report & Analytics</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#support" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Report & Analytics </span></div>
                    </a>
                    <ul class="nav collapse" id="support">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
                </li>
                {{-- ===================================================  list end here ======================= --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">System & Settings</div>
                        <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                   
                   {{-- --------------------------- --}}
                    <a class="nav-link dropdown-indicator" href="#support" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">System & Settings </span></div>
                    </a>
                    <ul class="nav collapse" id="support">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Enrolments</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Applications</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Enrolment Pipline</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    {{-- --------------------------------------------------------- --}}
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