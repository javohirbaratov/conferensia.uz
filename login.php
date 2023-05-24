<?php
	session_start();
    require_once 'parts/head.php';
	
	if(!isset($_SESSION['_crf']))
		$_SESSION['_crf'] = md5(time());

		
	if(isset($_SESSION['login'])){
		?>
			<script>
				window.location.href="user/index.php"
			</script>

		<?php
	}
?> 

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
       
		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>LOG IN</h2>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="col-md-10 col-md-offset-1 default-form" action="user/send/login.php" method="post">
						<div class="row clearfix">
							<div class="col-md-12 col-sm-12 col-xs-12">
												
								<div class="form-group style-two">
									<input name="login" type="text" name="form_name" class="form-control" value="" placeholder="email" required="">
								</div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
												
								<div class="form-group style-two">
									<input name="parol" type="password" name="form_name" class="form-control" value="" placeholder="password" required="">
									<input name="_crf" type="hidden" value="<?=$_SESSION['_crf']?>" >
								</div>
							</div>							 											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Kirish</button>
							</div>
						</div> 
                        <a href="registr.php">REGISTRATION</a>
					</form>
				</div>          
			</div>
		</section>

<?php
    require_once 'parts/script.php';
?>