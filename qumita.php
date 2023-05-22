<?php
    require_once 'parts/head.php';
	require_once 'admin/core/txtController.php';
	$obj = new Txt();
	$mualif = $obj->selectOne("category","qumita");
?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
				<h1>Qumita</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="index.php">Asosiy</a></li>
					<li><a class="inner" href="#">Qumita</a></li>
				</ul>
			</div>
		</section>
		
		<section class="about">
			<div class="container">
				<div class="item-list">
					<div class="row">
						
						<div class="col-md-12 col-sm-12 col-xs-12">
			                <div class="sec-title">
								<h2 class="left">Qumita a'zolari</h2>
								<p>
									<?=$mualif['txt']?>
                                    
                                </p>
							</div>

			              </div>
					</div>
				</div>
			</div>
		</section>

<?php
    require_once 'parts/script.php';
?>