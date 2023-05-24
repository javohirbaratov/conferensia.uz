<?php 
    include_once 'ximoya.php';
    include_once 'parts/head.php';

    if(!isset($_GET['id'])){
        echo "Notug'ri so'rov";
        exit;
    }
    include_once 'core/spkearController.php';
    $obj = new Speaker();
    $id = $_GET['id'];

    $speaker = $obj->selectBitta($id);
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
                    <h4 class="card-title">Speaker Tahrirlash</h4>
                    <form action="update/speakerUpdate.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">F.I.O</label>
                            <input required name="fio" type="text" class="form-control" id="exampleInputUsername1" value="<?=$speaker['fio']?>">
                            <input  name="id" type="hidden" value="<?=$speaker['id']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?=$speaker['email']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Davlat</label>
                            <input required name="davlat" type="txt" class="form-control" id="exampleInputtxt1" value="<?=$speaker['davlat']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmtxt1">OTM</label>
                            <input required name="otm" type="txt" class="form-control" id="exampleInputConfirmtxt1" value="<?=$speaker['otm']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmtxt1">Mavzusi</label>
                            <input required name="mavzu" type="txt" class="form-control" id="exampleInputConfirmPassword1" value="<?=$speaker['mavzu']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmtxt1">Batafsil</label>
                            <textarea name="txt">
                                <?=$speaker['batafsil']?>
                            </textarea>
                            <script>
                                    CKEDITOR.replace( 'txt' );
                            </script>
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