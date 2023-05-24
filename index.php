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
						<img src="https://www.samdu.uz/public/images/news/2020-10-06-12-22-42-r07lbl85sm.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
						
						
						<div class="tp-caption  tp-resizeme" 
							data-x="left" data-hoffset="15" 
							data-y="top" data-voffset="280" 
							data-transform_idle="o:1;"         
							data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
							data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
							data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
							data-splitin="none" 
							data-splitout="none"
							data-start="700">
							<div class="slide-content-box">
								<h2>International conference of actual problems of <br> artificial intelligence and information technologies</h2>
								<p>
									Samarkand State University named after Sharof Rashidov. <br>November 4-5, 2023
								</p>
							</div>
						</div>
					</li>
					
				
				</ul>
			</div>
		</section>

		<section class="about more">
			<div class="container">
				<div class="item-list">
					<div class="row">
						
						<div class="col-md-7 col-sm-12 col-xs-12">
			                <div class="sec-title">
								<h2 class="left">About the conference</h2>
								<p>
								Development of scientific relations with foreign higher education institutions, expansion of international cooperation, large-scale modern theoretical and scientific research on artificial intelligence and digital technologies within the framework of activities dedicated to the development and wide implementation of the field of artificial intelligence and digital technologies. In order to get acquainted with the scientific results of practical teaching methods, the conference "Actual problems of artificial intelligence and information technologies" was organized by the Samarkand State University named after Sharof Rashidov. Professors and teachers of prestigious foreign and Uzbek higher education institutions are scheduled to participate in the conference with lectures.
                                </p>
							</div>
			                <ul class="about-links text-left">
							</ul>

			              </div>
						<div class="col-md-5 col-sm-10 col-xs-12">
							<div class="item">
								<figure class="image-box">
									<img src="images/about/2.jpg" alt="" />
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


	
		<section class="our-team">
			<div class="container">
				<div class="sec-title">
					<h2 class="left">Speakers</h2>
				</div>
				<div class="team-carousel">
					<?php 
						foreach($speaker as $key => $val){
					?>
					<div class="single-team">
	                    <img src="admin/userimg/<?=$val['rasm']?>"  alt="">
						<a href="blog.php?id=<?=$val['id']?>">
	                        <div class="team-content">
								<h3 class="title"><?=$val['fio']?></h3>
								<span class="post"><?=$val['otm']?></span>
							</div>
						</a>
                    </div>
					<?php } ?>  
				</div>
			</div>
		</section>	

<?php
    require_once 'parts/script.php';
?>