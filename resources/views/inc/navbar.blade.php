<nav class="navbar navbar-expand-lg text-xs" style="background-color: #1F1F1F !important;">
    <div class="container" style="padding-left: 3em; padding-right: 3em;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg> 
        </button>
        
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold text-uppercase" href="#" data-bs-toggle="dropdown" style="color: white !important; font-weight: lighter">
                        <img src="/images/user.jpg" class="rounded-circle me-2" style="width: 30px">
                        {{ $LoggedUserInfo['name'] }}
                        <svg class="pb-1" style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start shadow p-3 bg-body rounded border-0 text-xs animateFast" style="width: max !important">
                        
                        <li><a class="dropdown-item" href="/profile">
                                Signed in as
                                <h6 class="fw-bold text-xs text-capitalize">{{ $LoggedUserInfo['name'] }}</h6>
                            </a>
                        </li>
                        <hr>
                        <li><a class="dropdown-item" href="/profile">My Profile</a></li>

     

                        <li><a class="dropdown-item" href="/signupcode">Sign up Code</a></li>

          
                        <hr>
                        <li>
                            <a class="dropdown-item" href="{{ route('auth.signout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path></svg>
                                Sign out
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item">
                    <a class="nav-link" href="/user" style="color: white !important; font-weight: lighter">
                        <svg style="fill: white; margin-right: 5px; margin-bottom: 1px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M8.156 1.835a.25.25 0 00-.312 0l-5.25 4.2a.25.25 0 00-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 01.75-.75h3.5a.75.75 0 01.75.75v5.25h2.75a.25.25 0 00.25-.25V6.23a.25.25 0 00-.094-.195l-5.25-4.2zM6.906.664a1.75 1.75 0 012.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0113.25 15h-3.5a.75.75 0 01-.75-.75V9H7v5.25a.75.75 0 01-.75.75h-3.5A1.75 1.75 0 011 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2h-.001z"></path></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white !important; font-weight: lighter">
                        <svg style="fill: white; margin-right: 5px; margin-bottom: 1px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>
                        Dropped
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white !important; font-weight: lighter">
                        <svg style="fill: white; margin-right: 5px; margin-bottom: 1px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="14" height="14"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
                        Reports
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown ">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" style="color: white !important; font-weight: lighter">
                        <svg class="pb-1" style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 16c.9 0 1.7-.6 1.9-1.5.1-.3-.1-.5-.4-.5h-3c-.3 0-.5.2-.4.5.2.9 1 1.5 1.9 1.5zM3 5c0-2.8 2.2-5 5-5s5 2.2 5 5v3l1.7 2.6c.2.2.3.5.3.8 0 .8-.7 1.5-1.5 1.5h-11c-.8.1-1.5-.6-1.5-1.4 0-.3.1-.6.3-.8L3 8.1V5z"></path></svg>
                        Notifications
                        <span class="badge rounded-pill bg-primary ms-1">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start shadow p-3 mb-1 bg-body rounded border-0 text-xs animateFast" style="width: max !important">
                        <li>
                            <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2.8 2.06A1.75 1.75 0 014.41 1h7.18c.7 0 1.333.417 1.61 1.06l2.74 6.395a.75.75 0 01.06.295v4.5A1.75 1.75 0 0114.25 15H1.75A1.75 1.75 0 010 13.25v-4.5a.75.75 0 01.06-.295L2.8 2.06zm1.61.44a.25.25 0 00-.23.152L1.887 8H4.75a.75.75 0 01.6.3L6.625 10h2.75l1.275-1.7a.75.75 0 01.6-.3h2.863L11.82 2.652a.25.25 0 00-.23-.152H4.41zm10.09 7h-2.875l-1.275 1.7a.75.75 0 01-.6.3h-3.5a.75.75 0 01-.6-.3L4.375 9.5H1.5v3.75c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V9.5z"></path></svg>
                                Inbox
                                <span class="badge rounded-pill bg-primary ms-1">1</span>
                            </a>
                        </li>
                       

                        <li>
                            <a class="dropdown-item border-bottom pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.75 2.5a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25H1.75zM0 2.75C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75v1.5A1.75 1.75 0 0114.25 6H1.75A1.75 1.75 0 010 4.25v-1.5zM1.75 7a.75.75 0 01.75.75v5.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25v-5.5a.75.75 0 111.5 0v5.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25v-5.5A.75.75 0 011.75 7zm4.5 1a.75.75 0 000 1.5h3.5a.75.75 0 100-1.5h-3.5z"></path></svg>
                                Archive
                            </a>
                        </li>
                        

                        <li>
                            <a class="dropdown-item pt-3 pb-3" href="#">
                                <svg style="margin-right: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M4.75 2.5a.25.25 0 00-.25.25v9.91l3.023-2.489a.75.75 0 01.954 0l3.023 2.49V2.75a.25.25 0 00-.25-.25h-6.5zM3 2.75C3 1.784 3.784 1 4.75 1h6.5c.966 0 1.75.784 1.75 1.75v11.5a.75.75 0 01-1.227.579L8 11.722l-3.773 3.107A.75.75 0 013 14.25V2.75z"></path></svg>
                                Saved
                            </a>
                        </li>
                        
                    </ul>
                </li>

               
            </ul>
        </div> 
        
        <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
    </nav>