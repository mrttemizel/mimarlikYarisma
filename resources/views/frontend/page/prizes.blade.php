@extends('frontend.components.master')

@section('title', 'Prizes')

@section('content')

    <div id="content" class="no-padding">

        <section class="content shortcodes">
            <div class="container">

                    <div class="row">
                        <h5 class="title" style="margin-bottom: 30px">Prizes</h5>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{asset('frontend/number/1.png')}}" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>First Prize</h3>
                                     <p>1200 Euro</p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{asset('frontend/number/2.png')}}" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>Second Prize</h3>
                                    <p>800 Euro</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box">
                                <img src="{{asset('frontend/number/3.png')}}" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>Third Prize</h3>
                                    <p>400 Euro</p>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-box">
                            <div class="feature">
                                <h3>Mentions</h3>
                                <p>3 x 200 Euro</p>
                            </div>
                            <div class="feature">
                                <h3>**Taxes are excluded</h3>
                                <p></p>
                            </div>
                            <div class="feature no-margin-bottom">
                                <p>Awarded projects will be published on the website of the competition and INTBAU
                                    Grassroots Projects. Awards will be paid within one month after the announcement</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </div>

@endsection



