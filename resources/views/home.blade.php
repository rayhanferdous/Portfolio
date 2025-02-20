@extends('layouts.app')

@section('content')
    {{-- hero start --}}
    <section style="margin-top: 100px;">
        <div class="container">
            <div class="banner rounded-4 p-5"
                style="background-image: url({{ asset($heroSection->hero_image) }}); background-size: cover ; background-repeat: no-repeat; background-position: center;">
                <div class="text-content text-white py-5 my-5">
                    <p class="fs-4">
                        {{ $heroSection->hero_small_title }}
                    </p>
                    <h1 class="display-1">
                        {!! implode('<br>', explode(' ', $heroSection->hero_title)) !!}
                    </h1>
                </div>
                <div class="row text-uppercase bg-black rounded-4 p-3 mt-5">
                    <div class="col-md-3">
                        <div class="d-flex align-items-center gap-4">
                            <h2 class="display-2 text-light">
                                {{ $heroSection->years_of_experience }}
                            </h2>
                            <p class="text-light-emphasis justify-content-center m-0 ls-4">
                                Years of <br> experience
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center gap-4">
                            <h2 class="display-2 text-light">
                                {{ $heroSection->number_of_awards }}
                            </h2>
                            <p class="text-light-emphasis justify-content-center m-0 ls-4">
                                Number of <br> awards
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center gap-4">
                            <h2 class="display-2 text-light">
                                {{ $heroSection->number_of_pubs }}
                            </h2>
                            <p class="text-light-emphasis justify-content-center m-0 ls-4">
                                Number of <br> publications
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center gap-4">
                            <h2 class="display-2 text-light">
                                {{ $heroSection->number_of_published_news }}
                            </h2>
                            <p class="text-light-emphasis justify-content-center m-0 ls-4">
                                Number of <br> published news
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- hero end --}}
    {{-- info card start --}}
    <section class="p-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="d-flex gap-4 align-items-start">
                        <div class="icon">
                            <svg class="text-primary monitor" width="50" height="50">
                                <use xlink:href="#monitor"></use>
                            </svg>
                        </div>
                        <div class="text-md-start">
                            <h5>
                                UI/UX Design
                            </h5>
                            <p class="postf">
                                At in proin consequat ut cursus venenatis sapien.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex gap-4 align-items-start">
                        <div class="icon">
                            <svg class="text-primary notes" width="50" height="50">
                                <use xlink:href="#notes"></use>
                            </svg>
                        </div>
                        <div class="text-md-start">
                            <h5>
                                Illustration
                            </h5>
                            <p class="postf">
                                At in proin consequat ut cursus venenatis sapien.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex gap-4 align-items-start">
                        <div class="icon">
                            <svg class="text-primary laptop" width="50" height="50">
                                <use xlink:href="#laptop"></use>
                            </svg>
                        </div>
                        <div class="text-md-start">
                            <h5>
                                Graphic Design
                            </h5>
                            <p class="postf">
                                At in proin consequat ut cursus venenatis sapien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- info card end --}}
    <section>
        <div class="container">
            <div class="row">
                {{-- education start --}}
                <div class="col-lg-4">
                    <div class="h-100 bg-yellow p-4 rounded-4">
                        <h3>
                            Education
                        </h3>
                        @foreach ($educations as $education)
                            <div class="py-4">
                                <p class="text-dark-emphasis">
                                    {{ $education->to }} - {{ $education->from }}
                                </p>
                                <h5>
                                    {{ $education->title }}
                                </h5>
                                <p class="text-dark-emphasis">
                                    {{ $education->association }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Experiences start --}}
                <div class="col-lg-4">
                    <div class="h-100 bg-green p-4 rounded-4">
                        <h3>
                            Experiences
                        </h3>
                        @foreach ($experiences as $experience)
                            <div class="py-4">
                                <p class="text-dark-emphasis">
                                    {{ $experience->to }} - {{ $experience->from }}
                                </p>
                                <h5>
                                    {{ $experience->association }} .: {{ $experience->title }}
                                </h5>
                                <p class="text-dark-emphasis">
                                    {{ $experience->description }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Publications start --}}
                <div class="col-lg-4">
                    <div class="h-100 bg-teal p-4 rounded-4">
                        <h3>
                            Publications
                        </h3>
                        <div class="py-4">
                            <p class="text-dark-emphasis">
                                1998 - 2004
                            </p>
                            <h5>
                                Bachelors in Engineering in Information Technology
                            </h5>
                            <p class="text-dark-emphasis">
                                Bachelors in Engineering in Information Technology
                            </p>
                        </div>
                        <p class="text-dark-emphasis">
                            2004 - 2006
                        </p>
                        <h5>
                            Masters in Data Analysis
                        </h5>
                        <p class="text-dark-emphasis">
                            Harvard School of Science and management
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- referance section --}}
    <section class="py-5">
        <div class="container">
            <div class="rounded-4 p-5"
                style="background-image: url(import/assets/images/section-banner.png); background-size: cover ; background-repeat: no-repeat; background-position: center;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="h-100 bg-black text-white p-4 rounded-4">
                            <h3>
                                References
                            </h3>
                            <div class="py-4">
                                <p class="text-light-emphasis">
                                    1998 - 2004
                                </p>
                                <h5>
                                    Dr. Stephen H. King
                                </h5>
                                <p class="text-light-emphasis">
                                    Harvard School of Science and management
                                </p>
                            </div>
                            <p class="text-light-emphasis">
                                2004 - 2006
                            </p>
                            <h5>
                                Dr. David Howard
                            </h5>
                            <p class="text-light-emphasis">
                                Harvard School of Science and management
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- image/video --}}
    <section class="portfolio py-5">
        <div class="container">
            <div class="justify-content-center">

                <div class="row justify-content-center">

                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="section-header text-center">
                            <h4 class="fw-bold fs-2 txt-fx slide-up">
                                Awards Video/Image
                            </h4>
                        </div><!--section-header-->
                    </div>

                    <div id="filters" class="button-group d-flex flex-wrap gap-3 justify-content-center py-5"
                        data-aos="fade-up">
                        <a href="#" class="btn btn-primary text-decoration-none text-uppercase is-checked"
                            data-filter=".photography">Images</a>
                        <a href="#" class="btn btn-primary text-decoration-none text-uppercase"
                            data-filter=".graphicdesign">Video
                            Design</a>
                        <a href="#" class="btn btn-primary text-decoration-none text-uppercase"
                            data-filter=".illustrations">Illustrations</a>
                        <a href="#" class="btn btn-primary text-decoration-none text-uppercase"
                            data-filter=".branding">Branding</a>
                    </div>
                </div>

                <div class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-4" data-aos="fade-up">
                    <div class="col mb-4 portfolio-item photography">
                        <a href="import/assets/images/illustration-1.jpg" data-lightbox="illustration-1"
                            data-title="illustration-1" title="Sample Caption goes here for Portfolio Item 1."><img
                                src="{{ asset('import/assets/images/illustration-1.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item photography graphicdesign illustrations">
                        <a href="import/assets/images/illustration-2.jpg" data-lightbox="illustration-2"
                            data-title="illustration-2" title="Sample Caption goes here for Portfolio Item 2."><img
                                src="{{ asset('import/assets/images/illustration-2.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item branding graphicdesign">
                        <a href="import/assets/images/illustration-3.jpg" data-lightbox="illustration-3"
                            data-title="illustration-3" title="Sample Caption goes here for Portfolio Item 3."><img
                                src="{{ asset('import/assets/images/illustration-3.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item graphicdesign">
                        <a href="import/assets/images/illustration-4.jpg" data-lightbox="illustration-4"
                            data-title="illustration-4" title="Sample Caption goes here for Portfolio Item 4."><img
                                src="{{ asset('import/assets/images/illustration-4.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item photography illustrations">
                        <a href="import/assets/images/illustration-5.jpg" data-lightbox="illustration-5"
                            data-title="illustration-5" title="Sample Caption goes here for Portfolio Item 5."><img
                                src="{{ asset('import/assets/images/illustration-5.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item graphicdesign">
                        <a href="import/assets/images/illustration-1.jpg" data-lightbox="illustration-1"
                            data-title="illustration-1" title="Sample Caption goes here for Portfolio Item 6."><img
                                src="{{ asset('import/assets/images/illustration-1.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item graphicdesign photography">
                        <a href="import/assets/images/illustration-2.jpg" data-lightbox="illustration-2"
                            data-title="illustration-2" title="Sample Caption goes here for Portfolio Item 7."><img
                                src="{{ asset('import/assets/images/illustration-2.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item illustrations graphicdesign">
                        <a href="import/assets/images/illustration-3.jpg" data-lightbox="illustration-3"
                            data-title="illustration-3" title="Sample Caption goes here for Portfolio Item 8."><img
                                src="{{ asset('import/assets/images/illustration-3.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item branding photography graphicdesign">
                        <a href="import/assets/images/illustration-4.jpg" data-lightbox="illustration-4"
                            data-title="illustration-4" title="Sample Caption goes here for Portfolio Item 9."><img
                                src="{{ asset('import/assets/images/illustration-4.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item illustrations graphicdesign branding">
                        <a href="import/assets/images/illustration-5.jpg" data-lightbox="illustration-5"
                            data-title="illustration-5" title="Sample Caption goes here for Portfolio Item1 0."><img
                                src="{{ asset('import/assets/images/illustration-5.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item photography">
                        <a href="import/assets/images/illustration-1.jpg" data-lightbox="illustration-1"
                            data-title="illustration-1" title="Sample Caption goes here for Portfolio Item1 1."><img
                                src="{{ asset('import/assets/images/illustration-1.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>
                    <div class="col mb-4 portfolio-item photography">
                        <a href="import/assets/images/illustration-2.jpg" data-lightbox="illustration-2"
                            data-title="illustration-2" title="Sample Caption goes here for Portfolio Item1 2."><img
                                src="{{ asset('import/assets/images/illustration-2.jpg') }}" class="img-fluid rounded-4"
                                alt="portfolio"></a>
                    </div>

                </div>

                <div class="text-center p-3">
                    <a href="index.html" class="btn btn-outline-dark btn-lg mt-3 text-uppercase text-decoration-none">
                        View All Works
                    </a>
                </div>

            </div>
    </section>
    {{-- news --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="display-3">
                    Latest News
                </h2>
                <p>
                    Accusan maiores alias conseaut equatur aut perferendi.
                </p>
            </div>
            <div class="row py-4">
                @foreach ($news as $newsItem)
                    <a href="{{ $newsItem->published_link }}" target="_blank" class="col-lg-6 p-3">
                        <div class="post-item p-3 border rounded-5">
                            <div class="row g-md-5">
                                <div class="col-lg-5">
                                    <img src="{{ asset($newsItem->thumbnail) }}" class="img-fluid rounded-4">
                                </div>
                                <div class="col-lg-7">
                                    <p class="text-uppercase text-muted mt-3">
                                        {{ $newsItem->type }} / {{ date('M d, Y', strtotime($newsItem->published_at)) }}
                                    </p>
                                    <h3>
                                        {{ $newsItem->title }}
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
            <div class="text-center">
                <button type="button" class="btn btn-outline-dark btn-lg mt-3 btn-color text-uppercase">
                    View All Blogs
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="display-3 mb-5">
                    Testimonials
                </h2>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper ">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-card rounded-3 py-4 px-4 swiper-slide">
                            <div class="text-start ">
                                <p>
                                    {{ $testimonial->content }}
                                </p>
                                <h5>
                                    {{ $testimonial->name }}
                                </h5>
                                <p class="postd">
                                    {{ date('M d, Y', strtotime($testimonial->date)) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="testimonial-swiper-pagination position-relative mt-5 text-center"></div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center pt-5">
                <h2 class="display-3">
                    FAQs
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <img src="{{ asset('import/assets/images/illustration-6.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="accordion-flush">
                        @foreach ($faq as $item)
                            <div class="accordion-item border mb-3 rounded-3">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" style="font-weight:bold;" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}"
                                        aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h5>
                                <div id="collapse{{ $item->id }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    data-bs-parent="#accordion-flush">
                                    <div class=" accordion-body">
                                        <p>{{ $item->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="p-5 bg-yellow py-5">
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-md-5">
                    <h6>
                        Quick Contact
                    </h6>
                    <h2 class="display-3">
                        Leave a Message
                    </h2>
                    <p>
                        Labore accusam in modo compungi, iacentem substantiales um se sed esse haec.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="mb-3">
                        <input type="name" class="form-control p-3 rounded-4" name="name" id="name"
                            aria-describedby="nameHelpId" placeholder="your name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control p-3 rounded-4" name="email" id="email"
                            aria-describedby="emailHelpId" placeholder="your email" />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control p-3 rounded-4" name="your message" placeholder="your message" id="message"
                            rows="3"></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-dark btn-lg text-uppercase rounded-4">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
