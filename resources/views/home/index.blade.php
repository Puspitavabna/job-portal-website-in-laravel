@extends('layout.master')
@section('content')
@include('include.header')

    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec">
                        <ul class="main-slider-sec ">
                            <li class="slideHome"><img src="image/slider1.jpg" alt="" /></li>
                            <li class="slideHome"><img src="image/slider2.jpg" alt="" /></li>
                            <li class="slideHome"><img src="image/slider3.jpg" alt="" /></li>
                        </ul>
                        <div class="job-search-sec">
                            <div class="job-search">
                                <h3>The Easiest Way to Get Your New Job</h3>
                                <span>Find Jobs, Employment & Career Opportunities</span>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <input type="text" placeholder="Job title, keywords or company name" />
                                                <i class="fa fa-keyboard-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <select data-placeholder="City, province or region" class="chosen-city">
                                                    <option>Istanbul</option>
                                                    <option>New York</option>
                                                    <option>London</option>
                                                    <option>Russia</option>
                                                </select>
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="scroll-to">
                            <a href="#scroll-here" title=""><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section id="scroll-here">
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Popular Categories</h2>
                        <span>37 jobs live - 0 added today.</span>
                    </div><!-- Heading -->
                    <div class="cat-sec">
                        <div class="row no-gape">
                            @foreach($categories as $category)
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#"  title="">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span><a href="{{ route('category.post',['slug' => $category->slug ])}}">{{ $category->category_name }}</a></span>
                                        <p>(22 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="#" title="">Browse All Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1" style="background: url(image/img1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text-block">
                        <h3>Make a Difference with Your Online Resume!</h3>
                        <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                        <a href="#" title="">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Featured Jobs</h2>
                        <span>Leading Employers already using job and talent.</span>
                    </div><!-- Heading -->
                    <div class="job-listings-sec">
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l1.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Sacramento, California</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is ft">FULL TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l2.png" alt="" /> </div>
                                <h3><a href="#" title="">Marketing Director</a></h3>
                                <span>Tix Dog</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Rennes, France</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is pt">PART TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l3.png" alt="" /> </div>
                                <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                <span>StarHealth</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>London, United Kingdom</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is ft">FULL TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l4.png" alt="" /> </div>
                                <h3><a href="#" title="">Application Developer For Android</a></h3>
                                <span>Altes Bank</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Istanbul, Turkey</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is fl">FREELANCE</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l5.png" alt="" /> </div>
                                <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                <span>Vincent</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Ajax, Ontario</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is tp">TEMPORARY</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="image/l6.png" alt="" /> </div>
                                <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                <span>MediaLab</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Ankara / Turkey</span>
                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                            <span class="job-is ft">FULL TIME</span>
                        </div><!-- Job -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="#" title="">Load more listings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(image/img1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Kind Words From Happy Candidates</h2>
                            <span>What other people thought about the service provided by JobHunt</span>
                        </div><!-- Heading -->
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="image/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="image/r1.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="image/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="image/r1.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Companies We've Helped</h2>
                            <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="image/cc1.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="image/cc2.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="image/cc3.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="image/cc4.jpg" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="image//cc5.jpg" alt="" /></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(image/back.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Quick Career Tips</h2>
                            <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="image/b1.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="image/b1.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="image/b1.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Gat a question?</h3>
                            <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('include.footer')
@endsection
