<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Multi Purpose Html5 Landing Page">    
    <meta name="author" content="ParExcellence">
    <!-- Site Title -->
    <title>@yield('title')</title>
    <!-- Site Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <!-- Material Icon -->
    <link rel="stylesheet" href="{{URL::to('css/materialdesignicons.min.css')}}">
    <!-- Carousel Slider -->
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.css')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&amp;display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
    <!-- Custom  CSS -->
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
</head>

<body>
    <header>
    
    <!--Start Navbar-->
        <nav class="navbar navbar-expand-lg navbar-inner fixed-top custom-nav one-page-scroll sticky w-100 rounded-0 mb-0">
            <div class="menu-overlay"></div>
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand brand-logo mr-4" href="{{url('/')}}">
                    <img src="images/logo-dark.png" class="img-fluid logo-light" alt=""> 
                    &nbsp;
                    <span class='logo-light text-uppercase' style="color:white;font-weight:bold; text-align:center !important;"> University Of Calabar <br/><span style='font-size:1.2em !important;'>Alumni</span></span>
                    <img src="images/logo-dark.png" class="img-fluid logo-dark" alt=""> 
                    &nbsp; 
                    <span class='logo-dark text-uppercase' style="color:#07294d;font-weight:bold;text-align:center !important;"> University Of Calabar <br/><span style='font-size:1.2em !important;'>Alumni</span></span>
                </a> 
                <div class="navbar-collapse collapse justify-content-end mr-3" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center">
                        <li class="nav-item active">
                            <a href="{{url('/')}}" class="nav-link text-white text-uppercase">UniCal</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white transition text-uppercase" data-toggle="dropdown">Our community </a>
                                <ul class="nav-bar submenu dropdown-menu list-unstyled p-0">-->
                                <li class="nav-item">
                            <a href="community" class="nav-link text-white transition text-uppercase">Our community </a>
                        </li>
                       <!-- <li class="nav-item">
                            <a href="{{url('trustfund')}}" class="nav-link">Trust Fund</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('endowmentfund')}}" class="nav-link">Endowment Fund</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('investment')}}" class="nav-link">Investments</a>
                        </li>
                        <li class="nav-item">
                            <a href="board" class="nav-link">Board of Directors</a>
                        </li>
                        <li class="nav-item">
                            <a href="management" class="nav-link">Management Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="management" class="nav-link">Volunteer /Career</a>
                        </li>
                       
                                   
                                </ul>
                            </li> --> 
                       
                            <li class="nav-item">
                            <a href="{{url('partner')}}" class="nav-link text-white transition text-uppercase">Partners</a>
                        </li>
                     
                       
                        <li class="nav-item">
                            <a href="#Clients" class="nav-link text-white transition text-uppercase"></a>
                        </li>
                        <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white transition text-uppercase" data-toggle="dropdown">Events & Programme</a>
                                <ul class="nav-bar submenu dropdown-menu list-unstyled p-0">
                                <li class="nav-item">
                            <a href="{{url('event')}}" class="nav-link">Event</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('programme')}}" class="nav-link">Programme</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('giving')}}" class="nav-link">Giving</a>
                        </li>
     
                       
                                   
                                </ul>
                            </li> 
                        <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white transition text-uppercase" data-toggle="dropdown">Alumni</a>
                                <ul class="nav-bar submenu dropdown-menu list-unstyled p-0">
                                <li class="nav-item">
                            <a href="{{ route('alumni') }}" target="_blank" class="nav-link text-white transition text-uppercase">Alumni</a>
                        </li>
                                <li class="nav-item">
                            <a href="{{ route('createAlumni') }}" target="_blank" class="nav-link text-white transition text-uppercase">New Alumni</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('giving')}}" class="nav-link">Donate</a>
                        </li>
                                   
                                </ul>
                            </li> 
                       
                       
                        <li class="nav-item">
                            <a href="contact" class="nav-link text-white transition text-uppercase">Contact</a>
                        </li>
                    
                    </ul>
                </div>
               
           

            </div>
        </nav>
  </header>
  @yield('content')
  <footer class="section footer position-relative">
        <div class="container">
            <div class="row"> 
                    <div class="col-lg-3 col-sm-3 mt-sm-0">  
                    <h5 class="text-white">Information For Alumni</h5>                 
                        <ul class="list-unstyled mb-0">                        
                            <li><a href="{{url('createAlumni')}}" target="_blank" class="text-white transition">Register</a></li>
                            <li><a href="" class="text-white transition">Update Your Detail</a></li> 
                            <li><a href="https://transcript.unical.edu.ng/" target="_blank" class="text-white transition">Apply for Transcript</a></li>            
                        </ul>
                    </div>
                    
                        
                        
                            <div class="col-lg-3 col-sm-3">
                            <h5 class="footer-title text-white">Links</h5>
                                <ul class="footer_menu_list list-unstyled mb-0">
                                    <li> 
                                        <a href="{{url('/')}}" class="text-white f-14 d-inline-block transition">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{('community')}}" class="text-white f-14 d-inline-block transition">Community</a>
                                    </li>
                                    <li> 
                                        <a href="{{url('event')}}" class="text-white f-14 d-inline-block transition">Event</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="col-lg-4 col-sm-4">
                            <h5 class="footer-title text-white">Alumni Office</h5>
                                <ul class="footer_menu_list list-unstyled mb-0">                                
                                   <li class="text-white f-14 d-inline-block transition">New Senate Chambers Building, University of Calabar, Calabar<li>
                                    <li> 
                                    <a href="info.alumnidesk@unical .edu.ng" class="text-white f-14 d-inline-block transition">info.alumnidesk@unical .edu.ng </a>,
                    </li>
                                    <li> 
                                        <a href="+2349132761182" class="text-white f-14 d-inline-block transition">+2349132761182</a>
                                    </li>
                                    
                                    
           
                                  
                                </ul>
                            </div>
                                              
                
                    <div class="col-lg-2 col-sm-2 my-sm-0">
                        <h5 class="footer-title text-white text-sm-right text-left">Follow Us</h5>
                        <div class="footer_menu_list list-unstyled mb-0 text-sm-right text-left">
                            <a href="#" class="transition icn-block d-inline-block transition">
                                <i class="icon pr-2 mdi mdi-facebook text-white f-34 d-inline-block"></i> 
                            </a>
                            <a href="#" class="transition icn-block d-inline-block transition">
                                <i class="icon pr-2 mdi mdi-twitter text-white  f-34 d-inline-block"></i> 
                            </a>
                            <a href="#" class="transition icn-block d-inline-block transition">
                                <i class="icon pr-2 mdi mdi-google-plus text-white f-34 d-inline-block"></i>
                            </a>
                        </div>
                        
                    </div>               
                
            </div>
            <div class="row" style="padding-top:2em;">
            <div class="col-sm-6 col-lg-6">
                <p>
                            <a href="{{url('privacy_policy')}}" class="mb-0 text-sm-right text-left text-white">Privacy Policy</a>
                            | <a href="{{url('data_protection_policy')}}" class="mb-0 text-sm-right text-left text-white"> Data Protection Policy.</a>
                            @auth
                        <a href="{{ url('/dashboard') }}" class="text-white f-14 d-inline-block transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" type="button"  class="text-white f-14 d-inline-block transition">Log in</a>

                      
                    @endauth
                    <p>
                        </div>
                        
            <div class="col-lg-6 col-sm-">
                            <p class="mb-0 text-sm-right text-left text-white"> &copy; 2022 University Of Calabar.</p>
                        </div>
            </div>
        </div>
    </footer>
    <!-- Back To Top -->    
    <a href="#" class="back_top rounded-circle text-center transition"><i class="mdi mdi-monitor-dashboard d-block text-white"></i></a>
    <!-- Javascript -->
    <script src="{{URL::to('js1/jquery.min.js')}}"></script>
    <script src="{{URL::to('js1/popper.min.js')}}"></script>
    <script src="{{URL::to('js1/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('js1/jquery.easing.min.js')}}"></script>
    <script src="{{URL::to('js1/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('js1/wow.min.js')}}"></script>
    <!-- Main Js   -->
    <script src="{{URL::to('js1/main.js')}}"></script>

</body>


</html>