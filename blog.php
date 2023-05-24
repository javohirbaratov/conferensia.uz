<?php
    require_once 'parts/head.php';
    
    if(!isset($_GET['id'])){
        echo "Notug'ri so'rov";
        exit;
    }
    include_once 'admin/core/spkearController.php';
    $obj = new Speaker();
    $id = $_GET['id'];

    $speaker = $obj->selectBitta($id);
	?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
        
		<div class="sidebar-page">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="col-md-12 col-sm-12 col-xs-12">
						<section class="blog-container news">  
							<div class="news-post">
								<div class="news-post-image">
									<img width="40%" src="admin/userimg/<?=$speaker['rasm']?>" alt="Image" class="img-responsive">
								</div>
								<div class="news-post-text">
									<h3><?=$speaker['fio']?></h3>
									<p><?=$speaker['batafsil']?></p>
								</div>
							</div>
						</section> 
					</div>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
					<!--Content Side-->
					
					<!--Sidebar-->	
					
					<!--Sidebar-->                           
				</div>
			</div>
		</div>


<?php
    require_once 'parts/script.php';
?>