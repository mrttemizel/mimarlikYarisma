<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
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

                <div class="col-md-3 col-sm-6">
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


                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-inner">
                            <div class="newsletter newsletter-widget">
                                <p>Stay informed about our news and events</p>
                                <form action="" method="post">
                                    <p><input class="newsletter-email" type="email" name="email" placeholder="Your email"><i class="fa fa-envelope-o"></i></p>
                                    <p><input class="newsletter-submit" type="submit" value="Subscribe"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="widget-inner">
                            <p>Address: Çıplaklı Mah. Akdeniz Bulvarı No:290 A Döşemealtı/Antalya</p>
                            <p>Phone: +(242) 245 00 00</p>
                            <p>Email: info@antalya.edu.tr</p>
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
