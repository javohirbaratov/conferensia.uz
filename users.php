<?php
    require_once 'parts/head.php';
    require_once 'admin/core/userController.php';
	$obj = new User();
	$user = $obj->select();
	?>

<body>
	<div class="boxed_wrapper">
		
        <?php
            require_once 'parts/header.php';
        ?>
		<section class="about">
            <div class="container">
                <h1>PARTICIPANTS</h1> <br>
                <div class="item-list">
					<div class="row">
						
						<div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Institutum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($user as $key => $val){
                                    ?>
                                    <tr>
                                        <td><?=$val['fio']?></td>
                                        <td><?=$val['davlat']?></td>
                                        <td><?=$val['otm']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

			            </div>
					</div>
				</div>
			</div>
		</section>


<?php
    require_once 'parts/script.php';
?>