


<header class="stick-top forsticky">
    <div class="menu-sec">
        <div class="container">
            <div class="logo">
                <a href="index.html" title=""><img class="hidesticky" src="image/logo.png" alt="" /><img class="showsticky" src="image/logo10.png" alt="" /></a>
            </div><!-- Logo -->
            <div class="btn-extars">
                <a href="#" title="" class="post-job-btn"><i class="fa fa-plus"></i>Post Jobs</a>
                <ul class="account-btns">
                    <li class="Sign up"><a href="{{ route('user.sign_up') }}"><i class="fa fa-key"></i> Sign Up</a></li>
                    <li class="Sign in"><a href="{{url('users/sign_in')}}"><i class="fa fa-external-link-square"></i> Login</a></li>
                </ul>
            </div><!-- Btn Extras -->
            <nav>
                <ul>
                    <li class=" menu-item-has-children">
                        <a href="{{ route('home.index') }}" title="">Home</a>


                        <ul>
                            <li><a href="index.html" title="">Home Layout 1</a></li>
                            <li><a href="index2.html" title="">Home Layout 2</a></li>
                            <li><a href="index3.html" title="">Home Layout 3</a></li>
                            <li><a href="index4.html" title="">Home Layout 4</a></li>
                            <li><a href="index5.html" title="">Home Layout 5</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Employers</a>
                        <ul>
                            <li><a href="employer_list1.html" title=""> Employer List 1</a></li>
                            <li><a href="employer_list2.html" title="">Employer List 2</a></li>
                            <li><a href="employer_list3.html" title="">Employer List 3</a></li>
                            <li><a href="employer_list4.html" title="">Employer List 4</a></li>
                            <li><a href="employer_single1.html" title="">Employer Single 1</a></li>
                            <li><a href="employer_single2.html" title="">Employer Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Employer Dashboard</a>
                                <ul>
                                    <li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
                                    <li><a href="employer_packages.html" title="">Employer Packages</a></li>
                                    <li><a href="employer_post_new.html" title="">Employer Post New</a></li>
                                    <li><a href="employer_profile.html" title="">Employer Profile</a></li>
                                    <li><a href="employer_resume.html" title="">Employer Resume</a></li>
                                    <li><a href="employer_transactions.html" title="">Employer Transaction</a></li>
                                    <li><a href="employer_job_alert.html" title="">Employer Job Alert</a></li>
                                    <li><a href="employer_change_password.html" title="">Employer Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Candidates</a>
                        <ul>
                            <li><a href="candidates_list.html" title="">Candidates List 1</a></li>
                            <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">Candidates Dashboard</a>
                                <ul>
                                    <li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
                                    <li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                                    <li><a href="candidates_profile.html" title="">Candidates Profile</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Blog</a>
                        <ul>
                            <li><a href="blog_list.html"> Blog List 1</a></li>
                            <li><a href="blog_list2.html">Blog List 2</a></li>
                            <li><a href="blog_list3.html">Blog List 3</a></li>
                            <li><a href="blog_single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Job</a>
                        <ul>
                            <li><a href="job_list_classic.html">Job List Classic</a></li>
                            <li><a href="job_list_grid.html">Job List Grid</a></li>
                            <li><a href="job_list_modern.html">Job List Modern</a></li>
                            <li><a href="job_single1.html">Job Single 1</a></li>
                            <li><a href="job_single2.html">Job Single 2</a></li>
                            <li><a href="job-single3.html">Job Single 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Pages</a>
                        <ul>
                            <li><a href="about.html" title="">About Us</a></li>
                            <li><a href="404.html" title="">404 Error</a></li>
                            <li><a href="contact.html" title="">Contact Us 1</a></li>
                            <li><a href="contact2.html" title="">Contact Us 2</a></li>
                            <li><a href="faq.html" title="">FAQ's</a></li>
                            <li><a href="how_it_works.html" title="">How it works</a></li>
                            <li><a href="login.html" title="">Login</a></li>
                            <li><a href="pricing.html" title="">Pricing Plans</a></li>
                            <li><a href="register.html" title="">Register</a></li>
                            <li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Menus -->
        </div>
    </div>
</header>



















{{--<nav class="navbar navbar-expand-sm navbar-dark bg-dark">--}}
    {{--<a class="navbar-brand" href="{{ route('home.index') }}">JOb portal website</a>--}}
    {{--<ul class="navbar-nav mr-auto">--}}
        {{--<li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="{{ route('user.sign_up') }}">Sign up</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="{{url('users/sign_in')}}">Login</a></li>--}}
    {{--</ul>--}}

    {{--<form class="form-inline my-2 my-lg-0">--}}
        {{--<input class="form-control" type="text" placeholder="Search">--}}
        {{--<button class="btn btn-success" style="border: 1px dotted white" type="button">Submit</button>--}}

        {{--<span class="our-social pleft20">--}}
            {{--<a href="#" target="_blank" class="fa fa-facebook"></a>--}}
            {{--<a href="#" target="_blank" class="fa fa-twitter"></a>--}}
            {{--<a href="#" target="_blank" class="fa fa-google"></a>--}}
            {{--<a href="#" target="_blank" class="fa fa-linkedin"></a>--}}
            {{--<a href="#" target="_blank" class="fa fa-youtube"></a>--}}
        {{--</span>--}}
    {{--</form>--}}
{{--</nav>--}}