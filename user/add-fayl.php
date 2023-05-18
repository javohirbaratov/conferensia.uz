<?php 
    include_once 'parts/head.php';
    session_start();
?>
<body>
  <div class="container-scroller">
    <?php 
        include_once 'parts/navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <?php 
            include_once 'parts/saidebar.php';
        ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Maqola yuklash</h4>
                    <form action="send/sendFayl.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Maqola</label>
                            <input required name="file" type="file" class="form-control" accept="application/pdf" >
                            <input required name="user_id" type="hidden" value="<?=$_SESSION['id']?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    <?php 
        include_once 'parts/script.php';
    ?>