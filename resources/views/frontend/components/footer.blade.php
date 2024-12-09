
<div class="container" style="margin-top: 80px; margin-bottom: 80px">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="title text-center">Our Sponsors</h4>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="https://antalya.edu.tr/tr" target="_blank">
                    <img src="{{asset('frontend/my-image/1.png')}}" width="180px" alt="about image">
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://www.akdenizsmd.org.tr/w" target="_blank">
                    <img src="{{asset('frontend/my-image/2.png')}}" width="180px" alt="about image">
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://www.intbau.org/" target="_blank">
                    <img src="{{asset('frontend/my-image/3.png')}}" width="180px" alt="about image">
                </a>
            </div>
        </div>
    </div>


</div>
<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="compact-widget">
                        <div class="widget-inner">
                            <img class="logo-footer" src="{{ asset('frontend/images/my-image/footerlogo_TR.png') }}" alt="compact company" width="250px">
                            <p>Çıplaklı Mah. Akdeniz Bulvarı No:290 A Döşemealtı/Antalya</p>
                            <div class="social-icons clearfix">
                                <a href="https://www.facebook.com/antalyauniversitesi/?locale=tr_TR" class="facebook tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/antalyauniversitesi/" class="instagram tipped" data-title="instagram"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@AntalyaUniversitesi" class="youtube tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Quick Access</h3>
                        <div class="widget-inner">
                            <ul>
                                <li><a href="{{route('frontend.index')}}">Home</a></li>
                                <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                                <li><a href="{{route('frontend.register')}}">Register</a></li>
                                <li><a href="{{route('frontend.uploadProject')}}">Upload Project</a></li>
                                <li><a href="{{route('frontend.projectSite')}}">Project Site</a></li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="widget-inner">
                            <p>Address: Çıplaklı Mah. Akdeniz Bulvarı No:290 A Döşemealtı/Antalya</p>
                            <p>Phone: +(242) 245 00 00</p>
                            <p>Email: rtc@antalya.edu.tr</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- main footer close -->

    <!-- sub footer begin -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Copyright &copy; 2024 Antalya Bilim University. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- sub footer close -->

</footer>
