<?php
include 'header.php';
?>

<style>

.homee
{
	width: 100%;
	height: 80vh;
}
.home_slider_containerr
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 10;
}

.home_slider_itemm
{
	width: 100%;
	height: 80%;
}
.home_slider_backgroundd
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-position: center;
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-size: cover;
}
.home_slider_contentt
{
	position: absolute;
	top: 60%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	z-index: 11;
}

#headerstyle{
	color: rgb(255, 255, 255);
	font-family: "Indie Flower", cursive;
	font-size: 72px;
	font-weight: 400;
	line-height: 86.4px;
	margin-bottom: 16px;
	margin-top: 0px;
	text-align: center;
	visibility: visible;
}

.intro_contentt{
	padding-left: 60px;
}

/*============ blog_left_sidebar css ==============*/
.blog_item {
  margin-bottom: 40px; }

.blog_info {
  padding-top: 30px; }
  .blog_info .post_tag {
    padding-bottom: 20px; }
    .blog_info .post_tag a {
      font: 300 14px/21px "Roboto", sans-serif;
      color: #000000; }
      .blog_info .post_tag a:hover {
        color: #777777; }
      .blog_info .post_tag a.active {
        color: #ff2f8b; }
  .blog_info .blog_meta li a {
    font: 300 14px/20px "Roboto", sans-serif;
    color: #777777;
    vertical-align: middle;
    padding-bottom: 12px;
    display: inline-block; }
    .blog_info .blog_meta li a i {
      color: #000000;
      font-size: 16px;
      font-weight: 600;
      padding-left: 15px;
      line-height: 20px;
      vertical-align: middle; }
    .blog_info .blog_meta li a:hover {
      color: #ff2f8b; }

.blog_post img {
  max-width: 100%; }

.blog_details {
  padding-top: 20px; }
  .blog_details h2 {
    font-size: 24px;
    line-height: 36px;
    color: #000000;
    font-weight: 600;
    transition: all 0.3s linear; }
    .blog_details h2:hover {
      color: #ff2f8b; }
  .blog_details p {
    margin-bottom: 26px; }

.view_btn {
  font-size: 14px;
  line-height: 36px;
  display: inline-block;
  color: #000000;
  font-weight: 500;
  padding: 0px 30px;
  background: #fff; }

.blog_btn {
  border: 1px solid #eeeeee;
  background: #f9f9ff;
  padding: 0px 32px;
  font-size: 13px;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
  color: #000000;
  line-height: 34px;
  display: inline-block; }
  
  .blog_btn:hover {
    background: #ff2f8b;
    border-color: #ff2f8b;
    color: #fff; }

</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<div class="container">
	<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2" style="text-align: center; margin-top: -100px;">
				<a href="#">
					<img src="images/travel4.png" width="170px" height="170px" class="img-responsive">
				</a>
				</div>
				<div class="col-md-5"></div>
	</div>
</div>

<!-- Start Part 2 -->

<!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <div class="">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-2.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Basics Of Buying A Telescope</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Glossary Of Telescopes</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Night Sky</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-5.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Telescopes 101</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="fa fa-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">05</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="fa fa-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3"></div>
                
                
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
	
<br><br>
<!-- End Part 2 -->


<?php
include 'footer.php';
?>