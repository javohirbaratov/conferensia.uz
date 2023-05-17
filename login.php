<?php
    require_once 'parts/head.php';
?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
       
		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>Kirish</h2>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="col-md-10 col-md-offset-1 default-form" action="https://shr-business.netlify.app/php/form-to-email.php" method="post">
						<div class="row clearfix">
							<div class="col-md-12 col-sm-12 col-xs-12">
												
								<div class="form-group style-two">
									<input type="text" name="form_name" class="form-control" value="" placeholder="email" required="">
								</div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
												
								<div class="form-group style-two">
									<input type="password" name="form_name" class="form-control" value="" placeholder="parol" required="">
								</div>
							</div>							 											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Kirish</button>
							</div>
						</div> 
                        <a href="registr.php">RUYHATDAN O'TISH</a>
					</form>
				</div>          
			</div>
		</section>

<?php
    require_once 'parts/script.php';
?>