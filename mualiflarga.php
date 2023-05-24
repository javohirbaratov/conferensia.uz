<?php
    require_once 'parts/head.php';
    require_once 'admin/core/txtController.php';
	$obj = new Txt();
	$mualif = $obj->selectOne("category","mualif");
	?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
        
		<section class="about">
			<div class="container">
				<div class="item-list">
					<div class="row">
						
						<div class="col-md-12 col-sm-12 col-xs-12">
			                <div class="sec-title">
								<h2 class="left">TO THE AUTHORS</h2>
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