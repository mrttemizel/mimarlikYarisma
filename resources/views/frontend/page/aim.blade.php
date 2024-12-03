@extends('frontend.components.master')

@section('title', 'Aim')

@section('content')

    <div id="content" class="no-padding">

        <section class="content shortcodes">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- TEXT ELEMENTS -->
                        <h5 class="title">Aim</h5>
                        <p>The primary aim of this international architectural competition is to embrace the traditional building
                            techniques of 'Düğmeli Evler' (Buttoned Houses) of Antalya, Turkey. This competition seeks to integrate
                            the cultural heritage of this unique construction method into contemporary architectural practice,
                            fostering a deeper understanding of vernacular architecture among future architects. Participants will
                            engage in a comprehensive exploration of the buttoned construction system, proposing innovative
                            small-scale designs that blend traditional techniques with contemporary architectural needs and
                            approaches. The competition aims to highlight the sustainability, efficiency, and cultural significance of
                            these traditional practices, encouraging their preservation and adaptation in current and future
                            projects.
                        </p>
                        <p>
                            This competition is an integral part of the INTBAU Grassroots programme and aims to embrace
                            traditional construction techniques while fostering contemporary architectural innovations. The INTBAU
                            Grassroot project “Sustainable Building Techniques: A Scholarly Exploration of Historical Practices” seeks
                            to explore the traditional buttoned house construction method and reinterpret it for contemporary use.
                            Initially, participants will engage in a design competition that challenges them to reinterpret the
                            buttoned construction technique. The winning designs will then be constructed, bringing the theoretical
                            concepts to life in a tangible, real-world project. This competition not only celebrates cultural heritage
                            but also actively contributes to its preservation and adaptation for future generations.
                        </p>
                        <p>
                            The INTBAU project is aligned with UIA Sustainable Development Goals. The competition process
                            supports “Goal 4: Quality Education” by enabling participants to gain in-depth knowledge of sustainable
                            building techniques, merging traditional and contemporary architectural practices, and providing them
                            with the opportunity to apply this knowledge in the field, thereby contributing to their professional
                            development. The project also supports Goal 11: Sustainable Cities and Communities by integrating the
                            traditional construction technique of the Buttoned Houses, with contemporary needs, aiming to
                            enhance environmental sustainability while preserving the cultural heritage of cities. By participating in
                            INTBAU’s project, participants gain experience in sustainable architectural design and implementation,
                            allowing them to use this knowledge and experience in their future projects, thus supporting both Goal
                            4 and Goal 11.
                        </p>
                    </div>
                </div>
                <div class="spacing-30"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('frontend/abuimages/aim.JPG')}}" height="400px" alt="about image" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('frontend/abuimages/aim2.JPG')}}" height="400px" alt="about image" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
