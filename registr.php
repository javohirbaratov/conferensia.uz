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
                    <h2>Ro'yhatdan o'tish</h2>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="col-md-10 col-md-offset-1 default-form" action="user/send/registr.php" method="post">
						<div class="row clearfix">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input name="fio" type="text" name="form_name" class="form-control" value="" placeholder="F.I.O" required="">
								</div>
							</div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input name="davlat" type="text" name="form_name" class="form-control" value="" placeholder="Davlat" required="">
								</div>
							</div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input name="otm" type="text" name="form_name" class="form-control" value="" placeholder="OTM" required="">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input name="email" type="text" name="form_name" class="form-control" value="" placeholder="email" required="">
								</div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
												
								<div class="form-group style-two">
									<input name="parol" type="password" name="form_name" class="form-control" value="" placeholder="parol" required="">
								</div>
							</div>							 											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Kirish</button>
							</div>
						</div>
                        <a href="login.php">LOGIN</a>
					</form>
				</div>          
			</div>
		</section>

<?php
    require_once 'parts/script.php';
?>