@extends('layout.app')
@section('content')
<div class="bg">
<div class="container">

    <div class="row">

        <!-- start: Page section -->
        <div class="col-lg-8">
        <section id="page-sidebar" class="pull-left span8">

            <!-- start: Wrapper -->
            <div class="wrapper">

                <!-- start: Page header / Breadcrumbs -->
                <section class="breadcrumbs">
                    <div class="table">
                        <div class="page-header table-cell">
                            <h1>Blog</h1>
                        </div>
                        <div class="breadcrumbs table-cell">
                            <div>You are here: <a href="#">Home</a> &nbsp;&rsaquo;&nbsp; Portfolio</div>
                        </div>
                    </div>
                </section>
                <!-- end: Page header / Breadcrumbs -->

                <!-- start: posts-->

                <article class="blog-post">
                    <div class="row">
                    	<div class="col-lg-2">
                        <div class="span2">
                            <a href="#" class="post-meta-date">
                                <span class="line1">Oct 20</span>
                                <span class="line2">2018</span>
                            </a>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="span10">
                            <h3 class="post-title"><a href="blog-single.html">Desktop Automation – Video Frame Merger</a></h3>
                            <ul class="post-meta" style="padding-left:0px;">
                                <li><span class="post-meta-label">Categories:</span> <a href="#">News</a>, <a href="#">Web Design</a></li>
                                <li><span class="post-meta-label">Tags:</span> <a href="#">CSS3</a>, <a href="#">HTML5</a>, <a href="#">Responsive</a></li>
                                <li><span class="post-meta-label">Comments:</span> <a href="#">12 Comments</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-12">
                        	<div class="post-media">
                                <img src="images/reflection.jpg" alt=""/>
                            </div>
                    		<div class="post-content">
                        <p>
                           Green Grapez is a Complete Web, Mobile & Software Development agency with its Competitive customers in the USA, UK, Canada, and in the European Region. We are providing an array of digital media approach & commitment with a unique style for expertise.Our digital solutions provide customers complete control over their Product Or Businesses.Green Grapez Solutions are Offering Their Services Such as Web design, 3D Design, Logo Design, E-Commerce Store, Custom Development, Android & IOS Mobile Apps With Latest Frameworks and Technology.

                        </p>
                        <p>
                            Our Digital Marketing Consultants and Specialist heading In content and inbound marketing, search engine optimization and a wide range of social media services & campaigns to help our clients their Valuable Organisations, Our Enterprise dynamic manage and facilitate their web presence to help increase revenue.

                        </p>
                        <p>
                           We make sure you get the biggest bang for your buck. We just don’t do websites or Digital marketing for you, but we build your online businesses presence. We make sure you Generate ROI From your Business, and you can scale its enough to have a big impact in your industry, and you will become the right Leader.<a href="blog-single.html" class="read-more">read more</a>
                        </p>
                    </div>
                        </div>
                    </div>
                </article>

                <!-- end: posts-->

            </div>
            <!-- end: Wrapper -->

        </section>
        <!-- end: Page section -->
		</div>
        <div class="col-lg-4">
        <!-- start: Sidebar -->
        <aside id="sidebar" class="pull-right span4">
			
            <section class="widget categories-widget">
                <div class="wrapper">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li><a href="#">Nam Interdum Tellus Nisi</a></li>
                        <li><a href="#">Nullam Pharetra Velit Quam</a></li>
                        <li><a href="#">Phasellus Blandit Cursus </a></li>
                        <li><a href="#">Donec Vulputate Justo </a></li>
                        <li><a href="#">Nulla Commodo Leo </a></li>
                    </ul>
                </div>
            </section>

            <!-- start: Search widget -->
            <section class="widget search">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="wrapper">
                        <div id="imaginary_container "> 
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Search" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="fas fa-search"></span>
                                    </button>  
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: Search widget -->

        </aside>
        <!-- end: Sidebar -->
		</div>
    </div>
</div>
</div>
@endsection