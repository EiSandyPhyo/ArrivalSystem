<?php 
include 'header.php';
include 'admin/connect.php';
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

.logo_container
{
	-webkit-transform: translateY(-6px);
	-moz-transform: translateY(-6px);
	-ms-transform: translateY(-6px);
	-o-transform: translateY(-6px);
	transform: translateY(-6px);
}

.form-control
{
	color: #db5246;
}
section
{
	display: block;
	position: relative;
	box-sizing: border-box;
}
.clear
{
	clear: both;
}
.clearfix::before, .clearfix::after
{
	content: "";
	display: table;
}
.clearfix::after
{
	clear: both;
}
.clearfix
{
	zoom: 1;
}
.float_left
{
	float: left;
}
.float_right
{
	float: right;
}
.trans_200
{
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.trans_300
{
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.trans_400
{
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.trans_500
{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
}
.fill_height
{
	height: 100%;
}
.super_container
{
	width: 100%;
	overflow: hidden;
}
.prlx_parent
{
	overflow: hidden;
}
.prlx
{
	height: 130% !important;
}
.nopadding
{
	padding: 0px !important;
}
.button
{
	display: inline-block;
	height: 53px;
	border-radius: 27px;
	overflow: hidden;
	z-index: 1;
}
.button_bcg
{
	position: absolute;
	top: 0;
	left: 0;
	width: 200%;
	height: 100%;
	background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
	z-index: -1;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.button:hover .button_bcg
{
	left: -100%;
}
.button a
{
	display: block;
	font-size: 13px;
	font-weight: 700;
	color: #fff;
	text-transform: uppercase;
	line-height: 53px;
	padding-left: 46px;
	padding-right: 46px;
	white-space: nowrap;
	z-index: 2;
}
.button span
{
	display: inline-block;
	vertical-align: middle;
	width: 5.75px;
	height: 5.63px;
	background: #FFFFFF;
	border-radius: 50%;
	margin-right: 2px;
}
.button span:first-child
{
	margin-left: 10px;
}
.button span:nth-child(2)
{
	opacity: 0.6;
}
.button span:last-child
{
	opacity: 0.4;
	margin-right: 0px;
}
.parallax-window
{
    min-height: 400px;
    background: transparent;
}

/*********************************
6. Section Title
*********************************/

.section_title
{
	font-size: 30px;
	font-weight: 700;
	color: #2d2c2c;
	margin-top: -8px;
	text-transform: uppercase;
}

/*********************************
7. Rating
*********************************/

.rating
{
	margin-top: 10px;
}
.rating i
{
	font-size: 19px;
	margin-right: 4px;
}
.rating i:last-child
{
	margin-right: 0px;
}
.rating_1 i:first-child{color: #ffeb8d;}
.rating_2 i:first-child{color: #ffeb8d;}
.rating_2 i:nth-child(2){color: #fed46b;}
.rating_3 i:first-child{color: #ffeb8d;}
.rating_3 i:nth-child(2){color: #fed46b;}
.rating_3 i:nth-child(3){color: #fbb53d;}
.rating_4 i:first-child{color: #ffeb8d;}
.rating_4 i:nth-child(2){color: #fed46b;}
.rating_4 i:nth-child(3){color: #fbb53d;}
.rating_4 i:nth-child(4){color: #fa9e1b;}
.rating_5 i:first-child{color: #ffeb8d;}
.rating_5 i:nth-child(2){color: #fed46b;}
.rating_5 i:nth-child(3){color: #fbb53d;}
.rating_5 i:nth-child(4){color: #fa9e1b;}
.rating_r i::before
{
	font-family: 'FontAwesome';
	content: "\f006";
	font-style: normal;
	font-size: 19px;
	margin-right: 4px;
}
.rating_r_1 i:first-child::before{color: #ffeb8d; content: "\f005";}
.rating_r_2 i:first-child::before{color: #ffeb8d; content: "\f005";}
.rating_r_2 i:nth-child(2)::before{color: #fed46b; content: "\f005";}
.rating_r_3 i:first-child::before{color: #ffeb8d; content: "\f005";}
.rating_r_3 i:nth-child(2)::before{color: #fed46b; content: "\f005";}
.rating_r_3 i:nth-child(3)::before{color: #fbb53d; content: "\f005";}
.rating_r_4 i:first-child::before{color: #ffeb8d; content: "\f005";}
.rating_r_4 i:nth-child(2)::before{color: #fed46b; content: "\f005";}
.rating_r_4 i:nth-child(3)::before{color: #fbb53d; content: "\f005";}
.rating_r_4 i:nth-child(4)::before{color: #fa9e1b; content: "\f005";}
.rating_r_5 i:first-child::before{color: #ffeb8d; content: "\f005";}
.rating_r_5 i:nth-child(2)::before{color: #fed46b; content: "\f005";}
.rating_r_5 i:nth-child(3)::before{color: #fbb53d; content: "\f005";}
.rating_r_5 i:nth-child(4)::before{color: #fa9e1b; content: "\f005";}
.rating_r_5 i:nth-child(5)::before{color: #ef910a; content: "\f005";}

/*********************************
8. Search
*********************************/

.search
{

	position: absolute;
	top: 0;
	left: 0;
	width: 370px;
	height: 100%;
	background: #fa9e1b;
	z-index: 10;
}
.no-padding
{
	padding-left: 0px;
	padding-right: 0px;
}
.no-margin
{
	margin-left: 0px;
	margin-right: 0px;
}
.search_tabs_container
{
	position: relative;
	top: -94px;
	width: 100%;
}
.search_tabs
{
	height: auto;
	flex-wrap: wrap;
}
.search_tab
{
	font-size: 14px;
	font-weight: 700;
	color: #2d2c2c;
	text-transform: uppercase;
	text-align: center;
	height: 94px;
	width: 50%;
	flex-grow: 1;
	background: #FFFFFF;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.search_tab:not(:first-child):not(:nth-child(2))
{
	border: solid 1px #ededed;
	margin-right: -1px;
	margin-bottom: -1px;
}
.search_tab img
{
	margin-right: 10px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.search_tab:first-child
{
	border-top-left-radius: 94px;
	padding-left: 7px;
}
.search_tab:nth-child(2)
{
	border-top-right-radius: 94px;
	padding-right: 7px;
}
.search_tab.active
{
	background: #fa9e1b;
	color: #FFFFFF;
}
.search_tab.active img
{
	-webkit-filter: brightness(200%) grayscale(100%);
	-moz-filter: brightness(200%) grayscale(100%);
	-ms-filter: brightness(200%) grayscale(100%);
	-o-filter: brightness(200%) grayscale(100%);
  	filter: brightness(200%) grayscale(100%);
}
.search_tab:hover
{
	background: #fa9e1b;
	color: #FFFFFF;
}
.search_tab:hover img
{
	-webkit-filter: brightness(200%) grayscale(100%);
	-moz-filter: brightness(200%) grayscale(100%);
	-ms-filter: brightness(200%) grayscale(100%);
	-o-filter: brightness(200%) grayscale(100%);
  	filter: brightness(200%) grayscale(100%);
}
.search_panel
{
	display: none !important;
	width: 100%;
	height: 100%;
	-webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
    padding-left: 54px;
    padding-right: 47px;
    margin-top: -25px;
}
.search_panel.active
{
	display: flex!important;
}
/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
.search_panel_content
{
	width: 100%;
	height: 100%;
	flex-wrap: wrap;
}
.search_input
{
	width: 100%;
	height: 46px;
	border: none;
	outline: none;
	padding-left: 15px;
	padding-right: 15px;
	font-size: 13px;
	font-weight: 600;
	color: #929191;
}
.search_item
{
	margin-bottom: 23px;
}
.search_item:first-child
{
	width: 100%;
}
.search_item:nth-child(2)
{
	width: 100%;
}
.search_item:nth-child(3)
{
	width: 100%;
}
.search_item:nth-child(4)
{
	width: calc(50% - 15px);
	margin-right: 30px;
}
.search_item:nth-child(5)
{
	width: calc(50% - 15px);
}
.search_item div
{
	font-size: 13px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
	margin-bottom: 14px;
}
.dropdown_item_select
{
	-webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
	-webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
	-webkit-user-select: none;
	background-image: url(../images/dropdown.png);
	background-position: center right;
	background-repeat: no-repeat;
	border: solid 1px #FFFFFF;
	margin: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
}
.dropdown_item_select::-ms-expand
{
    display: none;
}
.dropdown_item_select:hover
{
	border: solid 1px #fa9e1c;
}
.dropdown_item_select:focus
{
	outline-color: #fa9e1c;
}
.search_button
{
	font-size: 13px;
	font-weight: 700;
	color: #fff;
	text-transform: uppercase;
	line-height: 53px;
	padding-left: 46px;
	padding-right: 46px;
	background: #31124b;
	-webkit-transform: translateY(15px);
	-moz-transform: translateY(15px);
	-ms-transform: translateY(15px);
	-o-transform: translateY(15px);
	transform: translateY(15px);
	border: none;
	outline: none;
	cursor: pointer;
	margin-top: 40px;
}
.search_button:hover
{
	opacity: 0.8;
}

/*********************************
8.1 Search Extras
*********************************/

.extras
{
	width: 100%;
	margin-top: 42px;
}
.search_extras_item
{
	width: 50%;
	float: left;
	margin-bottom: 10px;
}
.search_extras_item:nth-child(even)
{
	padding-left: 20px;
}
.search_extras_item div
{
	display: inline-block;
	cursor: pointer;
}
.search_extras_item div:hover .search_features_cb
{
	border: 1px solid #fd784f;
}
.search_extras_checkbox
{
	cursor: pointer;
}
.search_extras_cb
{
	display: block;
	position: relative;
	width: 12px;
	height: 12px;
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	-o-appearance: none;
	appearance: none;
	background-color: #FFFFFF;
	border: 1px solid #FFFFFF;
	padding: 9px;
	margin-top: 2px;
	border-radius: 0px;
	display: inline-block;
	position: relative;
	cursor: pointer;
	float: left;
}
.search_extras_cb:focus
{
	outline: none;
	border: 1px solid #fd784f;
}
.search_extras_cb:checked::after
{
	display: block;
	position: absolute;
	top: 2px;
	left: 2px;
	width: calc(100% - 4px);
	height: calc(100% - 4px);
	content: '';
	background: #fa9e1b;
}
.search_extras label
{
	display: block;
	position: relative;
	font-size: 12px;
	font-weight: 400;
	padding-left: 31px;
	margin-bottom: 0px;
	cursor: pointer;
	color: #FFFFFF;
}

/*********************************
8.2 Search More Options
*********************************/

.more_options
{
	margin-top: 41px;
}
.more_options_trigger
{
	display: inline-block;
	width: auto;
}
.more_options_trigger a
{
	font-size: 14px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
	padding-left: 18px;
}
.more_options_trigger a::before
{
	display: block;
	position: absolute;
	top: 7px;
	left: 0;
	width: 10px;
	height: 10px;
	content: '+';
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	line-height: 8px;
	color: #FFFFFF;
	padding-left: 1px;
}
.more_options_trigger.active a::before
{
	content: '-';
	padding-left: 2px;
}
.more_options_list
{
	display: block;
	width: 100%;
	max-height: 0px;
	overflow: hidden;
	opacity: 0;
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
}
.more_options_list label
{
	display: block;
	position: relative;
	font-size: 12px;
	font-weight: 400;
	padding-left: 31px;
	margin-bottom: 0px;
	cursor: pointer;
	color: #FFFFFF;
}
.more_options_list li
{
	margin-bottom: 10px;
}
.more_options_list.active
{
	margin-top: 20px;
	opacity: 1;
}

/*********************************
9. Offers
*********************************/

/* .offers */
/* { */
/* 	width: 100%; */
/* 	padding-top: 20px; */
/* 	padding-bottom: 115px; */
/* } */

/*********************************
9.1 Sorting
*********************************/

.offers_sorting
{
	display: inline-block;
}
.offers_sorting > li
{
	display: inline-block;
	position: relative;
	width: 166px;
	height: 50px;
	font-size: 12px;
	font-weight: 700;
	color: #2d2c2c;
	text-transform: uppercase;
	line-height: 50px;
	cursor: pointer;
	border: solid 2px #dadada;
	padding-left: 25px;
	padding-right: 14px;
	margin-right: 16px;
}
.distance_item
{
	width: 234px !important;
}
.offers_sorting li i
{
	float: right;
	line-height: 48px;
	color: #929191;
}
.offers_sorting li ul
{
	display: block;
	position: absolute;
	right: 0;
	top: 120%;
	margin: 0;
	width: 100%;
	background: #FFFFFF;
	visibility: hidden;
	opacity: 0;
	z-index: 1;
	box-shadow: 0 15px 25px rgba(63, 78, 100, 0.15);
	-webkit-transition: opacity 0.3s ease;
	-moz-transition: opacity 0.3s ease;
	-ms-transition: opacity 0.3s ease;
	-o-transition: opacity 0.3s ease;
	transition: all 0.3s ease;
}
.offers_sorting > li:hover ul
{
	visibility: visible;
	opacity: 1;
	top: calc(100% + 1px);
}
.offers_sorting li ul li
{
	display: block;
	text-align: center;
	padding-left: 25px;
	padding-right: 25px;
}
.offers_sorting li ul li span
{
	display: block;
	height: 40px;
	line-height: 40px;
	border-bottom: solid 1px #dddddd;
	color: #51545f;
	text-align: left;
	-webkit-transition: opacity 0.3s ease;
	-moz-transition: opacity 0.3s ease;
	-ms-transition: opacity 0.3s ease;
	-o-transition: opacity 0.3s ease;
	transition: all 0.3s ease;
}
.offers_sorting li ul li span:hover
{
	color: #b5aec4;
}
.offers_sorting li ul li:last-child span
{
	border-bottom: none;
}
.offers_sorting li span:nth-child(2)
{
	margin-left: 71px;
}

/*********************************
9.2 Offers Grid
*********************************/

.offers_grid
{
	width: 100%;
	margin-top: 66px;
}
.offers_item
{
	width: 100%;
	margin-bottom: 46px;
}
.offers_item:last-child
{
	margin-bottom: 0px;
}
.offers_image img
{
	width: 100%;
}
.offers_image_container
{
	width: 100%;
	height: 100%;
}
.offers_image_background
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.offer_name
{
	position: absolute;
	left: 0;
	bottom: 27px;
	width: 180px;
	height: 33px;
	background: #fa9e1b;
	overflow: hidden;
}
.offer_name a
{
	display: block;
	font-size: 16px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
	line-height: 35px;
	padding-left: 22px;
}
.offers_content
{
	
}
.offers_price
{
    font-family: Comic Sans MS;
	display: inline-block;
	font-size: 36px;
	font-weight: 700;
	color: #eda84a;
	line-height: 25px;
}
.offers_price span
{
	font-size: 14px;
	font-weight: 400;
	color: #929191;
	margin-left: 12px;
}
.offers_rating
{

}
.offers_rating i::before
{
	font-size: 13px;
	margin-right: 2px;
}
.offers_text
{
    font-family: Comic Sans MS;
	font-size: 14px;
	font-weight: 400;
	color: #929191;
	margin-top: 16px;
	margin-bottom: 0px;
	text-align: left;
}
.offers_icons
{
	margin-top: 21px;
}
.offers_icons_item
{
	display: inline-block;
	margin-right: 15px;
}
.offers_icons_item:last-child
{
	margin-right: 0px;
}
.book_button
{
	background: #31124b;
	margin-top: 39px;
	margin-bottom: -5px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.book_button:hover
{
	opacity: 0.8;
}
.offer_reviews
{
	position: absolute;
	top: 0;
	right: 0;
}
.offer_reviews_content
{
	display: inline-block;
	vertical-align: middle;
	margin-right: 7px;
}
.offer_reviews_title
{
	font-size: 12px;
	font-weight: 700;
	color: #2d2c2c;
	text-transform: uppercase;
}
.offer_reviews_subtitle
{
	font-size: 12px;
	font-weight: 600;
	color: #929191;
	margin-top: 1px;
}
.offer_reviews_rating
{
	display: inline-block;
	width: 62px;
	height: 57px;
	font-size: 28px;
	font-weight: 700;
	color: #FFFFFF;
	line-height: 57px;
	background: #fa9e1b;
	vertical-align: middle;
	border-radius: 45%;
	-webkit-transform: translateY(-4px);
	-moz-transform: translateY(-4px);
	-ms-transform: translateY(-4px);
	-o-transform: translateY(-4px);
	transform: translateY(-4px);
}
#fontstyle{
    font-family:Ayuthaya;
    font-size: 15px;
    color: black;
}
#fontstylee{
font-family: Comic Sans MS;
    font-size: 14px;
    color: purple;
}

</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Bus Information</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<!-- Start Part 2 -->
	
	<div class="container">
    	<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2" style="text-align: center;">
				<a href="#">
					<img src="images/bus/bus.png" width="90px" height="90px" class="img-responsive wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>
    </div>
<!-- End Part 2 -->

<!-- Start Part 3 -->


		<!-- Offers -->

		<div class="container" style="padding-top: 5%;">
			<div class="row">
				<div class="col-lg-2 temp_col"></div>
				<div class="col-lg-10">
					
					<!-- Offers Sorting -->
					<div class="offers_sorting_container">
						<ul class="offers_sorting">
							<li>
								<span class="sorting_text" id="fontstylee">price</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>show all</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>ascending</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text" id="fontstylee">location</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text" id="fontstylee">stars</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="filter_btn" data-filter="*"><span>show all</span></li>
<!-- 									<li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>ascending</span></li> -->
									<li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
									<li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
									<li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
								</ul>
							</li>
							<li class="distance_item">
								<span class="sorting_text" id="fontstylee">City</span>
								<i class="fa fa-chevron-down"></i>
								
								<ul> 
								<li class="filter_btn" data-filter="*"><span>show all</span></li>
								<li class="filter_btn" data-filter=".ygn"><span>yangon</span></li>
								<li class="filter_btn" data-filter=".mdy"><span>mandalay</span></li>
								<li class="filter_btn" data-filter=".bgn"><span>bagan</span></li>

<!-- //                 						$viewquery="select * from customize_region"; -->
<!-- //                 						foreach ($db->query($viewquery) as $row) -->
<!-- //                 						{ -->
<!-- //                 						    $cregion_id=$row['cregion_id']; -->
<!-- //                 						    $cregion_name=$row['cregion_name']; -->
                						    
<!-- //                 						    echo "<li class='filter_btn'><span value='$cregion_id'>$cregion_name</span></li>"; -->
                						    
<!-- //                 						} -->

								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Yangon Item -->
						
						<div class="offers_item rating_5 ygn">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/flight/airkbz2.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Air KBZ</a></div>
									</div>
									
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$120<span>per person</span></div>
										<div class="rating_r rating_r_5 offers_rating" data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : No. 147, (5) Quarter, 8 Miles, Pyay Road Mayan Gone Township, Yangon<br>
										PhoneNo: : 01 967 0007
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

						<div class="offers_item rating_4 ygn">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/flight/yangonairways2.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Yangon Airways</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$80<span>per person</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : 8th Floor. MMB Tower, Upper Pansodan Rd, Yangon<br>
										PhoneNo: : 01 383 100
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<!-- Offers Yangon Item -->
						
						<!-- Offers Mandalay Item -->
						
											
						<div class="offers_item rating_4 mdy">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/flight/golden2.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Golden</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$70<span>per person</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : 83rd St, Mandalay<br>
										PhoneNo: : 02 30 720
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						<div class="offers_item rating_5 mdy">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/flight/mannyadanarpon2.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Mann Yadanarpon</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$130<span>per person</span></div>
										<div class="rating_r rating_r_5 offers_rating" data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : 77??78 st,30 st, Chan Aye Thar Zan Tsp, Mandalay<br>
										PhoneNo: : 09 40087 7008
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<!-- Offers Mandalay Item -->



						<!-- Offers Bagan Item -->

						<div class="offers_item rating_4 bgn">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mindaugas -->
										<div class="offers_image_background" style="background-image:url(images/flight/airbagan2.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Air Bagan</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$80<span>per person</span></div>
										<div class="rating_r rating_r_4 offers_rating"  data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : Shwe Taung Kyar St, Yangon<br>
										PhoneNo: : 01 513 322
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
										
						<div class="offers_item rating_5 bgn">
							<div class="row">
								<div class="col-md-1 temp_col"></div>
								<div class="col-md-4 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mindaugas -->
										<div class="offers_image_background" style="background-image:url(images/flight/balloonoverbagan.jpg)"></div>
										<div class="offer_name"><a href="busbooking.php">Balloons Over Bagan</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="offers_content">
										<div class="offers_price">$150<span>per person</span></div>
										<div class="rating_r rating_r_5 offers_rating"  data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
										Location: : Balloons Over Bagan Sales Office,Thiripyitsaya Block No(5), Nyaung-U<br>
										PhoneNo: : 09 44804 5716
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="busbooking.php">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Offers Bagan Item -->
						

					</div>
				</div>

			</div>
		</div>		
	

<!-- End Part 3 -->

	
    <br><br>




<?php 
include 'footer.php';
?>