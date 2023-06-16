<?php 
    include_once 'parts/head.php';
    include_once 'ximoya.php';
    include_once 'core/contactController.php';

    $obj = new Contact();
    $txt = $obj->selectOne();

    error_reporting(0)
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
                    <h4 class="card-title">Contact</h4>
                    <form action="send/contact.php" method="POST" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Manzil</label>
                            <input required name="manzil" type="text" class="form-control" id="exampleInputUsername1" value="<?=$txt['manzil']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tel raqam</label>
                            <input required name="telraqam" type="text" class="form-control" id="exampleInputUsername1" value="<?=$txt['telraqam']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tel raqam 2 (Hotline)</label>
                            <input required name="telraqam2" type="text" class="form-control" id="exampleInputUsername1" value="<?=$txt['telraqam2']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">email</label>
                            <input required name="email" type="email" class="form-control" id="exampleInputUsername1" value="<?=$txt['email']?>">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary me-2" value="Submit">
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