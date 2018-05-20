@extends('layout.app')
@section('content')

<div class="bg">
<div class="container">

    <div class="row">
		<div class="col-lg-8">
        <!-- start: Page section -->
        <section id="page-sidebar" class="pull-left span8">

            <!-- start: Wrapper -->
            <div class="wrapper">

                <!-- start: Page header / Breadcrumbs -->
                <section class="breadcrumbs">
                    <div class="table">
                        <div class="page-header table-cell">
                            <h1>Desktop Automation – Video Frame Merger</h1>
                        </div>
                        <div class="breadcrumbs table-cell">
                            <div>You are here: <a href="#">Home</a> &nbsp;&rsaquo;&nbsp; <a href="#">Blog</a></div>
                        </div>
                    </div>
                </section>
                <!-- end: Page header / Breadcrumbs -->

                <!-- start: posts-->
                <article class="blog-post">
                    <div class="post-media"><img src="images/reflection.jpg" alt=""/></div>
                    <div class="post-content">
                         <p>
                           Green Grapez is a Complete Web, Mobile & Software Development agency with its Competitive customers in the USA, UK, Canada, and in the European Region. We are providing an array of digital media approach & commitment with a unique style for expertise.Our digital solutions provide customers complete control over their Product Or Businesses.Green Grapez Solutions are Offering Their Services Such as Web design, 3D Design, Logo Design, E-Commerce Store, Custom Development, Android & IOS Mobile Apps With Latest Frameworks and Technology.

                        </p>
                        <p>
                            Our Digital Marketing Consultants and Specialist heading In content and inbound marketing, search engine optimization and a wide range of social media services & campaigns to help our clients their Valuable Organisations, Our Enterprise dynamic manage and facilitate their web presence to help increase revenue.

                        </p>                        
                        <blockquote>
                            Maecenas non nisl et erat tincidunt lobortis. Sed tempus feugiat sem sed auctor. Praesent id leo nec felis tempor viverra. Praesent metus augue, porttitor at bibendum vel, adipiscing consectetur tortor. Phasellus eu ligula turpis. Nulla porta, tortor pulvinar tincidunt tristique, metus nunc vestibulum magna, vel dictum odio tellus ut nisl. Nullam euismod tristique velit at pulvinar.
                        </blockquote>
                        <p>
                           We make sure you get the biggest bang for your buck. We just don’t do websites or Digital marketing for you, but we build your online businesses presence. We make sure you Generate ROI From your Business, and you can scale its enough to have a big impact in your industry, and you will become the right Leader.
                        </p>
                        
                        
                    </div>
                    <div class="spacer"></div>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="span12">
                            <ul class="post-meta" style="padding-left:0px;">
                                <li>October 30 2012</li>
                                <li><span class="post-meta-label">By:</span> <a href="#">DXThemes</a></li>
                                <li><span class="post-meta-label">Categories:</span> <a href="#">News</a>, <a href="#">Web Design</a></li>
                                <li><span class="post-meta-label">Tags:</span> <a href="#">CSS3</a>, <a href="#">HTML5</a>, <a href="#">Responsive</a></li>
                                <li><span class="post-meta-label">Comments:</span> <a href="#">12 Comments</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </article>
                <!-- end: posts-->

                <!-- start: Comments -->
                <h3>4 Comments</h3>
                <div class="comments">
                    <ul class="comments-list">
                        <li class="comments_li">
                            <div class="comment clearfix">
                                <img src="images/avatar.png" alt="avatar" class="avatar"/>
                                <p class="meta">Designmd says:<br/><small>May 18, 2012 </small></p>
                                <div class="textarea">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet </p>
                                </div>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <div class="comment clearfix">
                                        <img src="images/avatar.png" alt="avatar" class="avatar"/>
                                        <p class="meta">bingumd says:<br/><small>May 17, 2012 </small></p>
                                        <div class="textarea">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <ul class="clearfix">
                                        <li>
                                            <div class="comment clearfix">
                                                <img src="images/avatar.png" alt="avatar" class="avatar"/>
                                                <p class="meta">bingumd says:<br/><small>May 17, 2012</small> </p>
                                                <div class="textarea">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment clearfix">
                                <img src="images/avatar.png" alt="avatar" class="avatar"/>
                                <p class="meta">Designmd says:<br/><small>May 16, 2012</small></p>
                                <div class="textarea lastbt">
                                    <p>Scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat malesuada. Ut in diam et metus facilisis venenatis sit amet vel enim. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end: Comments -->

                <hr/>

                <!-- start: Comments form -->
                <h3>Leave A Reply</h3>
                <form name="comment" method="post" action="" class="af-form" id="af-form">
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="af-outer af-required">
                                <div class="af-inner">
                                    <label for="name" id="name_label">Your Name:</label>
                                    <input type="text" name="name" id="name" size="30" value="" class="text-input span12"/>
                                    <label class="error" for="name" id="name_error">Name is required.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="af-outer af-required">
                                <div class="af-inner">
                                    <label for="email" id="email_label">Your Email:</label>
                                    <input type="text" name="email" id="email" size="30" value="" class="text-input span12"/>
                                    <label class="error" for="email" id="email_error">Email is required.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="af-outer af-required">
                                <div class="af-inner">
                                    <label for="input-message" id="message_label">Your Message:</label>
                                    <textarea name="message" id="input-message" cols="30" class="text-input span12"></textarea>
                                    <label class="error" for="input-message" id="message_error">Message is required.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="af-outer af-required">
                                <div class="af-inner">
                                    <button class="btn btn-succ" type="submit" name="button">Submit
          </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end: Comments form -->

            </div>
            <!-- end: Wrapper -->

        </section>
        </div>
        <!-- end: Page section -->
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