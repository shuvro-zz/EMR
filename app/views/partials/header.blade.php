 
    @if(Auth::user()->role == 'Administrator')
 <!--========================================================
                             Admin HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="/admin_home">
                                    <img src="/images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li @yield('current_admin_home')><a href="/admin_home">Home</a></li>
                                <li @yield('current_services')><a href="admin_services">Services</a></li>
                                <li @yield('current_about')><a href="admin_about">About</a></li>
                                <li @yield('current_contacts')><a href="admin_contacts">Contacts</a></li>
								<li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif(Auth::user()->role == "Accountant")

    <!--========================================================
                             Accountant HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="accountant_home">
                                    <img src="/images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li @yield('current_acc_home')><a href="/accountant_home">Home</a></li>
                                <li @yield('current_services')><a href="accountant_services">Services</a></li>
                                <li @yield('current_about')><a href="accountant_about">About</a></li>
                                <li @yield('current_contacts')><a href="accountant_contacts">Contacts</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

@elseif(Auth::user()->role=='Doctor')
     <!--========================================================
                             Doctor HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="doctor_home">
                                    <img src="/images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li @yield('current_doc_home')><a href="/doctor_home">Home</a></li>
                                <li @yield('current_services')><a href="doctor_services">Services</a></li>
                                <li @yield('current_about')><a href="doctor_about">About</a></li>
                                <li @yield('current_contacts')><a href="doctor_contacts">Contacts</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif(Auth::user()->role=='Lab Manager')
     <!--========================================================
                             Lab Manager HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="labmanager_home">
                                    <img src="/images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li @yield('current_lab_home')><a href="/labmanager_home">Home</a></li>
                                <li @yield('current_services')><a href="lab_services">Services</a></li>
                                <li @yield('current_about')><a href="lab_about">About</a></li>
                                <li @yield('current_contacts')><a href="lab_contacts">Contacts</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @elseif(Auth::user()->role=='Receptionist')
     <!--========================================================
                             Receptionist HEADER
    =========================================================-->
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <a href="receptionist_home">
                                    <img src="/images/logo_new1.jpg" alt="Logo"/>
                                </a>
                            </h1>
                        </div>
                        <nav class="nav put-right">
                            <ul class="sf-menu">
                                <li @yield('current_rec_home')><a href="/receptionist_home">Home</a></li>
                                <li @yield('current_services')><a href="receptionist_services">Services</a></li>
                                <li @yield('current_about')><a href="receptionist_about">About</a></li>
                                <li @yield('current_contacts')><a href="receptionist_contacts">Contacts</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endif