@extends('frontend.components.master')

@section('title', 'Home')

@section('css')

    <style>
        .btn-slider{
            background: #36312B!important;
            font-size:13px!important;
            padding: 10px!important;
        }
        .btn-slider:hover{
            background: #834B26!important;
        }

    </style>

    @endsection


@section('content')
    @php
        $time = '2025-04-14 00:00:00';
    @endphp


        <!-- slider -->
    <div id="slider">
        <!-- revolution slider begin -->
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="{{asset('frontend/img-rev-slider/bg-new.png')}}" alt="">


                        <div class="tp-caption sfb custom-font-2"
                             data-x="center"
                             data-y="250"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeInOutCubic" style="width: 100%; color:#38332D; text-align: center; font-size: 22px">
                            Contemporary Insights Towards Buttoned Houses'
                            Technique
                        </div>

                        <div class="tp-caption lft"
                             data-x="center"
                             data-y="320"
                             data-speed="800"
                             data-start="1600"
                             data-easing="easeInOutCubic" id="countdown-timer"  style="width: 100%; color:#38332D; font-weight: bold;  text-align: center; font-size: 22px">

                        </div>

                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="390"
                             data-speed="800"
                             data-start="1800"
                             data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{route('frontend.register')}}">REGISTER</a>
                            <a class="btn btn-slider" href="{{route('frontend.brief')}}">BRIEF</a>
                            <a class="btn btn-slider" href="{{route('frontend.register')}}">UPLOAD</a>
                        </div>
                    </li>
                </ul>
            </div>
            <script>
                var targetDate = new Date('<?php echo $time; ?>').getTime();;

                // Geri sayım
                var countdown = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = targetDate - now;

                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("countdown-timer").innerHTML =
                        days + " Days " +  " / " +  hours + " Hrs " +   " / " + minutes + " Mins " + " / " + seconds + " Sec ";

                    if (distance < 0) {
                        clearInterval(countdown);
                        document.getElementById("countdown-timer").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>
        </div>
    </div>

    <!-- slider close -->

    <div class="clearfix"></div>





@endsection
