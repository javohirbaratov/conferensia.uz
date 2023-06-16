<?php 
    include_once 'parts/head.php';
    include_once 'ximoya.php';
    include_once 'core/saytDataController.php';

    $obj = new Sayt();
    $txt = $obj->selectOne();
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
                    <h4 class="card-title">Ma'lumotlar</h4>
                    <form action="send/siteData.php" method="POST" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nomi</label>
                            <input required name="nomi" type="text" class="form-control" id="exampleInputUsername1" value="<?=$txt['nomi']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Qisqacha</label>
                            <input required name="qisqacha" type="text" class="form-control" id="exampleInputUsername1" value="<?=$txt['qisqacha']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Batafsil</label>
                            <textarea name="txt">
                              <?=$txt['batafsil']?>
                            </textarea>
                            <script>
                                    CKEDITOR.replace( 'txt' );
                            </script>
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