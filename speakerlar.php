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
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
				<h1>Speakerlar</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="index.php">Asosiy</a></li>
					<li><a class="inner" href="#">Speakerlar</a></li>
				</ul>
			</div>
		</section>
        <!--Page Title Ends-->
        <section class="our-team style-two">
			<div class="container">
				<div class="row">
					<?php 
						foreach($speaker as $key => $val){
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single-team">
		                    <img src="admin/userimg/<?=$val['rasm']?>" alt="">
		                        <div class="team-content">
		                            <h3 class="title"><?=$val['fio']?></h3>
		                        <span class="post"><?=$val['otm']?></span>
		                    </div>
	                    </div>
					</div>
					<?}?>
				</div>		
			</div>
		</section>

<?php
    require_once 'parts/script.php';
?>