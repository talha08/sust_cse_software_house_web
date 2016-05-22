<div id="k-head" class="container"><!-- container + head wrapper -->

    <div class="row"><!-- row -->

        <div class="col-lg-12">

            <div id="k-site-logo" class="pull-left"><!-- site logo -->

                <h1 class="k-logo">
                    <a href="{!! route('labfront.index') !!}" title="Home Page">

                        <img src="{!! asset('labfront/img/front.png') !!}" alt="Site Logo" class="img-responsive" />
                    </a>
                </h1>

                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->

            </div><!-- site logo end -->

            <nav id="k-menu" class="k-main-navig"><!-- main navig -->

                <ul id="drop-down-left" class="k-dropdown-menu">

                    <li>
                        <a href="{!!  route('labfront.index') !!}" title="home">Home</a>
                    </li>


                    <li>
                        <a href="{!! route('labfront.news') !!}" title="News">News</a>
                    </li>

                    <li>
                        <a href="{!! route('labfront.events') !!}" title="Events">Events</a>
                    </li>

                    <li>
                        <a href="#" class="Pages Collection" title="People">People</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.supervisor') !!}">Teachers</a></li>
                            <li><a href="{!! route('labfront.student') !!}">Students</a></li>
                            <li><a href="{!! route('labfront.alumni') !!}">Allumni</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="#" title="Project List">Projects & Paper</a>
                        <ul class="sub-menu">
                            <li><a href="#">Complete Projects</a></li>
                            <li><a href="#">Running Projects</a></li>
                            <li><a href="#">Paper</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="{!! route('labfront.blog') !!}" title="Blog">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.blog') !!}">Blogs</a></li>
                            <li><a href="{!! route('labfront.archive_blog') !!}">Archive</a></li>

                        </ul>
                    </li>



                    <li>
                        <a href="{!!  route('labfront.contact') !!}" title="Contacts">Contact</a>
                    </li>

                    @if(Auth::user())
                        <li>
                            <a href="{!!  route('dashboard') !!}" title="Dashboard">Dashboard</a>
                        </li>

                    @endif
                </ul>

            </nav><!-- main navig end -->

        </div>

    </div><!-- row end -->

</div><!-- container + head wrapper end -->