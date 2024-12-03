@extends('frontend.components.master')

@section('title', 'Brief')

@section('content')

    <div id="content" class="no-padding">

        <section class="content shortcodes">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="title">Brief</h5>
                        <div class="feature-box">
                            <div class="feature">
                                <i class="fa fa-download"></i>
                                <h3>PDF</h3>
                                <a href="{{asset('frontend/abupdf/Brief.pdf')}}" target="_blank">Download</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>

    </div>

@endsection
