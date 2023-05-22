<?php
    require_once 'parts/head.php';
	require_once 'admin/core/spkearController.php';
	$obj = new Speaker();
	$speaker = $obj->select();
?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>

		<section class="rev_slider_wrapper">
			<div id="slider1" class="rev_slider"  data-version="5.0">
				<ul>
					
					<li data-transition="fade">
						<img src="images/slider/1.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
						
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="190" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
							</div>
						</div>
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="280" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<h2>Conferensiya</h2>
							</div>
						</div>
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="340" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<p>Axborot-kommunikatsiya texnologiyalarini qo'llash bo'yicha 17 - IEEE xalqaro konferentsiyasi</p>
							</div>
						</div>
						<div class="tp-caption tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="430" 
							data-transform_idle="o:1;"                         
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
							data-splitin="none" 
							data-splitout="none" 
							data-responsive_offset="on"
							data-start="2300">
							<div class="slide-content-box">
								<div class="button">
									<a class="thm-btn yellow-bg" href="registr.php">Ro'yhatdan o'tish</a>     
								</div>
							</div>
						</div>
						
					</li>
					<!-- <li data-transition="fade">
						<img src="images/slider/2.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
						
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="190" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<h1>We are creative business</h1>
							</div>
						</div>
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="280" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<h2>to find Business Solutions</h2>
							</div>
						</div>
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="340" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<p>Excepteur sint occaecat cupidatat non proident, culpa qui officia deserunt mollit<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti cum consectetur odit.</p>
							</div>
						</div>
						<div class="tp-caption tp-resizeme" 
							data-x="left" data-hoffset="55" 
							data-y="top" data-voffset="430" 
							data-transform_idle="o:1;"                         
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
							data-splitin="none" 
							data-splitout="none" 
							data-responsive_offset="on"
							data-start="2300">
							<div class="slide-content-box">
								<div class="button">
									<a class="thm-btn yellow-bg"  href="contact.html">contact us</a>     
								</div>
							</div>
						</div>
						
					</li> -->
				
				</ul>
			</div>
		</section>

		<section class="about more">
			<div class="container">
				<div class="item-list">
					<div class="row">
						
						<div class="col-md-7 col-sm-12 col-xs-12">
			                <div class="sec-title">
								<h2 class="left">AICT2023 konferentsiyasi haqida</h2>
								<p>
                                    Tashkiliy va boshqaruv qo'mitalari nomidan sizni 17-2023 oktyabr kunlari gibrid rejimda bo'lib o'tadigan axborot-kommunikatsiya texnologiyalarini 
                                    qo'llash bo'yicha 28-IEEE xalqaro konferentsiyasiga (AICT20) 2023-ga taqdim etishingizni xush kelibsiz.
                                    AICT2023 ADA universiteti, Jorj Vashington universiteti, Politecnico di Torino va IEEE Ozarbayjon Qo'shma bo'limi tomonidan tashkil etilgan 
                                    va texnik jihatdan elektrotexnika va elektronika muhandislari instituti (IEEE) tomonidan homiylik qilingan. AICT2023 asosiy ma'ruzalar, o'quv 
                                    qo'llanmalari va tadqiqot taqdimotlarini taqdim etadi. Taqdim etilgan hujjatlarda zamonaviy texnologiyalar, nazariy tushunchalar, standartlar, 
                                    mahsulotlarni joriy etish, amalga oshirilayotgan ilmiy loyihalar, shuningdek, AKTni qo'llash masalalari qamrab olinishi kutilmoqda. Avvalgi AICT-da 70 dan ortiq
                                     okruglardan yuzlab ishtirokchilar qatnashgan.
                                </p>
							</div>
			                <ul class="about-links text-left">
							</ul>

			              </div>
						<div class="col-md-5 col-sm-10 col-xs-12">
							<div class="item">
								<figure class="image-box">
									<img src="images/about/1.jpg" alt="" />
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="countup-section bg-image" style=" background-attachment: fixed;">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-6">
						<div class="text-center single_block">
							<div class="icon-box">
								<img class="counter-icon" src="images/icons/count-1.png" alt="">
							</div>
							<div class="counter" data-speed="3000" data-stop="1650">342</div><span class="count">+</span>
							<h3>Experienced Consultants</h3>
						</div>
					</div>
					<div class="col-sm-3 col-6">
						<div class="text-center single_block">
							<div class="icon-box">
								<img class="counter-icon" src="images/icons/count-2.png" alt="">
							</div>
							<div class="counter">1256</div><span class="count">+</span>
							<h3>Successfull Projects</h3>
						</div>
					</div>
					<div class="col-sm-3 col-6">
						<div class="text-center single_block">
							<div class="icon-box">
								<img class="counter-icon" src="images/icons/count-3.png" alt="">
							</div>
							<div class="counter">50</div><span class="count">+</span>
							<h3>Awards Winning</h3>
						</div>
					</div>
					<div class="col-sm-3 col-6">
						<div class="text-center single_block">
							<div class="icon-box">
								<img class="counter-icon" src="images/icons/count-4.png" alt="">
							</div>
							<div class="counter">3675</div><span class="count">+</span>
							<h3>Satisfied Customers</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="our-team">
			<div class="container">
				<div class="sec-title">
					<h2 class="left">Speakerlar</h2>
				</div>
				<div class="team-carousel">
					<?php 
						foreach($speaker as $key => $val){
					?>
					<div class="single-team">
	                    <img src="admin/userimg/<?=$val['rasm']?>"  alt="">
	                        <div class="team-content">
	                            <h3 class="title"><?=$val['fio']?></h3>
	                        <span class="post"><?=$val['otm']?></span>
	                    </div>
                    </div>
					<?php } ?>  
				</div>
			</div>
		</section>	

<?php
    require_once 'parts/script.php';
?>