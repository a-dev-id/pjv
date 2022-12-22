@section('accommodation_active', 'active')
@push('css')
<style type="text/css">
    .room-view .panel-body .room-amn ul {
        column-gap: unset;
        column-count: unset;
        width: 100%;
    }

    .room-view .panel-body .room-amn ul li {
        display: inline;
    }

    .amenities--icon--room {
        width: 20px !important;
    }

    .fa-angle-right {
        transform: rotate(0deg);
        transition: transform 0.25s linear;
    }

    .fa-angle-right.active {
        transform: rotate(90deg);
        transition: transform 0.25s linear;
    }

    .mdi-room-info-btn {
        border: 2px solid;
        font-size: 9px;
        padding: 5px 10px;
        width: 90px;
    }

    .panel.panel-default {
        border: .5px solid transparent;
    }

    .mdi-room-title {
        font-size: 20px;
    }

</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<script type="text/javascript">
    $(".carousel-inner").swipe({
            swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical" 
        });
</script>
<script type="text/javascript">
    $('a').on('click', function(e) {
    	  $(this).find('[class*="angle"]').toggleClass('fa-angle-down fa-angle-up')
    	});
    
    	$('.go').on('click', function(e) {
    	  $(this).css({
    	    transform: 'rotate(0deg)',
    	    transition: 'transform .5s'
    	  });
    	});
</script>
<script type="text/javascript">
    $('.read-more-mobile').click(function(event) {
        $('.intro-less-box').hide();
        $('.intro-more-box').show();
      });
    
      $('.read-less-mobile').click(function(event) {
        $('.intro-more-box').hide();
        $('.intro-less-box').show();
      });
</script>
<script type="text/javascript">
    $('#contact-us-menu').click(function(event) {
    		$('.contact-us-box').toggle();
    	});
    	$('.items-contact-us').click(function(event) {
    		$('.contact-us-box').toggle();
    	});
    	$('.tawk-btn').click(function(event) {
    		$('.container-fixed-menu').css('z-index', 10);
    	});
</script>
@endpush
<x-mobile>

    <section class="slider relative">
        <div class="mdi-header-carousel owl-carousel owl-theme">
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/248/6294892483e3e767060187.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/248/62948924894a5804539231.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/25d/62948925d7857710753313.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/267/629489267a275681246185.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <div class="header-bg relative" style="background: linear-gradient(180deg, transparent 90%, #fff), url(https://hanginggardensofbali.com/storage/app/uploads/public/629/489/270/6294892702481298017608.jpg) no-repeat;background-size: cover;background-position: bottom;"></div>
            <!--<div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url('http://192.232.245.124/~hanginggarden/storage/app/uploads/public/613/051/a0c/613051a0c4174243205494.jpg') no-repeat;background-size: cover;background-position: bottom;"></div>-->
            <!--<div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url('http://192.232.245.124/~hanginggarden/storage/app/uploads/public/613/052/b3b/613052b3b21c6573181726.jpg') no-repeat;background-size: cover;background-position: bottom;"></div>-->
            <!--<div class="header-bg relative" style="background: linear-gradient(180deg, transparent 60%, #fff), url('http://192.232.245.124/~hanginggarden/storage/app/uploads/public/613/052/b46/613052b467015654965026.jpg') no-repeat;background-size: cover;background-position: bottom;"></div>-->
        </div>
        <a target="_blank" class="mdi-map-btn" href="https://g.page/hanginggardensofbali?share"><i class="fa fa-map-marker"></i> MAP</a>
        <a class="mdi-share-btn" href="javascript:void(0)" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-alt"></i></a>
        <img src="" class="logo-invert logo-header-mobile">
    </section>

    <div class="container visible-xs visible-sm">
        <div class="bck-room">
            <div class="room-generate">
                <div class="row">
                    <div class="col-xs-12 slide-room">

                        <div id="riverside-pool-villa-target" class="carousel-fade slide carousel" data-ride="carousel" data-interval="7000">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner text-center">
                                <div class="item active">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c15/638b20c159d41753781515.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c54/638b20c540e13374689043.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c65/638b20c65e70c328459924.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c69/638b20c69afc1435152063.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c7c/638b20c7cbe10569218022.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c90/638b20c903a6d859529262.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/c99/638b20c9999be327877061.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/cb7/638b20cb78835300548632.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                                <div class="item ">
                                    <div style="background:url(https://hanginggardensofbali.com/storage/app/uploads/public/638/b20/cc2/638b20cc25f2e049179134.jpg) no-repeat; background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;background-position: center;height: 100%;"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#riverside-pool-villa-target" data-slide="prev">
                                <span class="glyphicon glyphicon-menu-left im-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#riverside-pool-villa-target" data-slide="next">
                                <span class="glyphicon glyphicon-menu-right im-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <h3 class="m-t-10 mdi-room-title">Riverside Pool Villa</h3>
                    </div>
                    <div class="col-xs-4">
                        <a class="m-t-10 mdi-room-info-btn" data-toggle="collapse" data-parent="#accordion0" href="#collapse20">ROOM INFO <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="room-view">
                <div class="row">
                    <div style="padding: 0px 6px;" class="col-xs-12">
                        <div style="color: black;" class="panel-group" id="accordion0">
                            <!-- <div class="panel panel-default">
					      	<div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion0" href="#collapse10">VIEW ROOM <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div>
					      	<div id="collapse10" class="panel-collapse collapse in">
					        	<div class="panel-body">
					        							        	</div>
					      	</div>
					    </div> -->
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading">
					        	<h4 class="panel-title">
					          		<a data-toggle="collapse" data-parent="#accordion0" href="#collapse20">ROOM AMENITIES <span><i class="fa fa-angle-right" style="font-size: 25px;margin-top: -4px;" aria-hidden="true"></i></span></a>
					        	</h4>
					      	</div> -->
                                <div id="collapse20" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-xs-12 room-amn m-b-20">

                                            <h4>Villa Facilities</h4>
                                            <p></p>
                                            <ul style="padding-left: 0!important;">
                                                <li style="padding-right: 0;">&#8226; 100 sqm | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    2 Persons | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    1 Bed | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Infinity Private Pool | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Coffee Tea Making Facilities | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Home Audio &amp; Visual System | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Deluxe handmade terrazzo bathtub | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    King Size | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Minibar | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Safety Box | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Cotton Bathrobes &amp; Slippers | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Hair Dryer | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Luxurious Toiletries | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Outdoor Gazebo &amp; Sunbeds | </li>
                                                <li style="padding-right: 0;">&#8226;
                                                    Air Conditioner </li>
                                            </ul>

                                        </div>

                                        <!-- <div class="col-xs-12 room-amn">
					        			<h4>Villa Benefits</h4>
					        			<ul class="fa-ul">
					        									        		</ul>
					        		</div> -->

                                        <div class="clr-bth"></div>
                                        <hr>
                                        <div class="container-price">
                                            <a href="https://book-directonline.com/properties/hanginggardensofbalidirect" target="_blank" class="btn-default">BOOK THIS VILLAS</a>
                                            <div class="assis-home">
                                                <a style="border-bottom: 1px solid white;" data-toggle="modal" data-target="#myassist"><i class="fa fa-question-circle" aria-hidden="true"></i> CLICK HERE FOR MORE ASSISTANCE</a>
                                            </div>
                                            <div class="contain-asis">
                                                <div class="intro-less-box">
                                                    <!-- <div>
													<p>Villa Size:  | Bed Type:  | Occupancy: </p>
												</div>
												<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <!-- These luxurious villas take full advantage of the peace and tranquility of the surrounding jungle, combined with the rhythmic... <a href="javascript:void(0);" class="read-more-mobile">Read More</a> -->
                                                    <p>These luxurious villas take full advantage of the peace and tranquility of the surrounding jungle, combined with the rhythmic sound of Ayung river and its cascading waterfalls below.<br />Designed in an authentic Balinese style, Riverside Villas are perched high on wooden pillars. Their expansive decks feature a private infinity pool, poolside gazebo and dining table – the ideal place to unwind and soak up the sights and sounds of the surrounding jungle.</p>
                                                </div>
                                                <div class="intro-more-box" style="display: none;">
                                                    <!-- <div>
					        						<p>Villa Size:  | Bed Type:  | Occupancy: </p>
					        					</div>
					        					<div class="amenities__container--room" style="margin: 15px 0;">
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																										<div class="amenities__container--list-item">
														<img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/icon/.png" class="amenities--icon--room" />
														<span class="amenities--text heading2">
															
														</span>
													</div>
																									</div> -->
                                                    <p>These luxurious villas take full advantage of the peace and tranquility of the surrounding jungle, combined with the rhythmic sound of Ayung river and its cascading waterfalls below.<br />Designed in an authentic Balinese style, Riverside Villas are perched high on wooden pillars. Their expansive decks feature a private infinity pool, poolside gazebo and dining table – the ideal place to unwind and soak up the sights and sounds of the surrounding jungle.</p>
                                                    <a href="#" class="read-less-mobile">Read Less</a>
                                                </div>
                                            </div>
                                            <!-- <a href="https://hanginggardensofbali.com/m/enquire" class="btn-default">SUBMIT ENQUIRY</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr-bth"></div>

    </div>

</x-mobile>