@extends('frontend.components.master')

@section('title', 'Contact')

@section('content')

    <div id="content" class="no-padding">

        <!-- section begin -->
        <section id="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session()->get('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        @if (session()->get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                        @endif
                        <div class="intro-text text-center">
                            <h2>Contact Us</h2>
                            <h3>RAPPORTEURS</h3>
                            <p>Merve Artkan |
                                Serim Aygen Kiştin |
                                Zeynep Ceren Durgut</p>
                        </div>
                        <form action="{{route('contact.send')}}" method="POST" class="wpcf7-form">
                            @csrf
                            <div class="col-one-third">
                                <label for="email" class="form-label"><span class="text-danger">*</span> Name :</label>
                                <input type="text" name="name" placeholder="Your Name">
                                <span class="text-danger">
                                                @error('name')
                                    {{ $message }}
                                    @enderror
                                            </span>
                            </div>

                            <div class="col-one-third margin-one-third">
                                <label for="email" class="form-label"><span class="text-danger">*</span> Email :</label>

                                <input type="email"  name="email" placeholder="Your Email">
                                <span class="text-danger">
                                                @error('email')
                                    {{ $message }}
                                    @enderror
                                            </span>
                            </div>
                            <div class="col-one-third">
                                <label for="email" class="form-label"><span class="text-danger">*</span> Phone :</label>

                                <input type="text"  name="phone" placeholder="Your Phone">
                                <span class="text-danger">
                                                @error('phone')
                                    {{ $message }}
                                    @enderror
                                            </span>
                            </div>

                            <div class="col-full">
                                <label for="email" class="form-label"><span class="text-danger">*</span> Message :</label>
                                <textarea name="message" placeholder="Your Message"></textarea></div>
                            <span class="text-danger">
                                                @error('message')
                                {{ $message }}
                                @enderror
                                            </span>
                            <div class="clearfix"></div>

                            <div id="recaptcha_form"></div>
                            <span class="text-danger">
                        @error('g-recaptcha-response')
                        {{ $message }}
                        @enderror

                    </div>

                            <div class="text-center">
                                <div class="divider-single"></div>
                                <button class="btn btn-primary btn-big" type="submit" id="send_button">Send Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


    </div>

@endsection
@section('js')


    <script>
        $(document).on('click', '#send_button', function () {
            $('#send_button').html('Sending...');
            $('#send_button').addClass("disabled");
        });
    </script>

    {!!  GoogleReCaptchaV2::render('recaptcha_form') !!}

@endsection
