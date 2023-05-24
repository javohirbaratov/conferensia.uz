<?php 
    include_once 'parts/head.php';
?>
<body>
  <div class="container-scroller">
    <?php 
    include_once 'ximoya.php';
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
                    <h4 class="card-title">Speaker</h4>
                    <form action="send/sendSpeaker.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">F.I.O</label>
                            <input required name="fio" type="text" class="form-control" id="exampleInputUsername1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Rasm</label>
                            <input required name="file" type="file" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Davlat</label>
                            <input required name="davlat" type="txt" class="form-control" id="exampleInputtxt1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmtxt1">OTM</label>
                            <input required name="otm" type="txt" class="form-control" id="exampleInputConfirmtxt1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmtxt1">Mavzusi</label>
                            <input required name="mavzu" type="txt" class="form-control" id="exampleInputConfirmPassword1">
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