<header class="site-header-1 site-header">
<!-- Main bar start -->
<div id="sticked-menu" class="main-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- logo begin -->
                <div id="logo" class="pull-left">
                    <a href="{{route('frontend.index')}}">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="" class="logo">
                    </a>
                </div>
                <!-- logo close -->

                <!-- btn-mobile menu begin -->
                <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                <!-- btn-mobile menu close -->

                <!-- mobile menu begin -->
                <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
                    <ul></ul>
                </nav>
                <!-- mobile menu close -->

                <!-- desktop menu begin -->
                <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                    <ul class="clearfix">
                        <li class="active"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li ><a href="#" onclick="return false;">About</a>
                            <ul>
                                <li><a href="{{route('frontend.aim')}}">Aim</a></li>
                                <li><a href="{{route('frontend.projectSite')}}">Project Site</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.schedule')}}">Schedule</a></li>
                        <li><a href="{{route('frontend.brief')}}">Brief</a></li>
                        <li><a href="#" onclick="return false;">Documents</a>
                            <ul>
                                <li><a href="{{route('frontend.document')}}">Competition Documents</a></li>
                                <li><a href="{{route('frontend.qA')}}">Q&A</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.jury')}}">Jury</a></li>
                        <li><a href="{{route('frontend.prizes')}}">Prizes</a></li>
                        <li><a href="#" onclick="return false;">Register</a>
                            <ul>
                                <li><a href="{{route('frontend.register')}}">Register</a></li>
                                <li><a href="{{route('frontend.uploadProject')}}">Upload Project</a></li>

                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact')}}">Contact</a></li>

                    </ul>
                </nav>
                <!-- desktop menu close -->

                <!-- Header Group Button Right begin -->
                <div class="header-buttons pull-right hidden-xs hidden-sm">

                    <div class="header-contact">
                        <ul class="clearfix">
                            <li class="phone"><i class="fa fa-phone"></i> <span>+90 245 00 00</span></li>
                        </ul>
                    </div>


                </div>
                <!-- Header Group Button Right close -->

            </div>
        </div>
    </div>
</div>
</header>
