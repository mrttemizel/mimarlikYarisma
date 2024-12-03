@extends('frontend.components.master')

@section('title', 'Project Site')

@section('content')

    <div id="content" class="no-padding">

        <section class="content shortcodes">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- TEXT ELEMENTS -->
                        <h5 class="title">Project Site</h5>
                        <p>The competition project site will be located on the campus of Antalya Bilim University. Detailed
                            information, including location data, aerial drone videos, photographs, and a dwg file site plan is
                            provided in the attachments. Participants are encouraged to review these materials thoroughly to gain a
                            comprehensive understanding of the site. This will enable them to develop contextually appropriate and
                            innovative designs that align with the competition’s objectives.
                        </p>
                    </div>
                </div>
                <div class="spacing-30"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('frontend/abuimages/project site.jpg')}}"  alt="about image" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('frontend/abuimages/project site2.jpg')}}"  alt="about image" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
