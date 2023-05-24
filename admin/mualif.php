<?php 
    include_once 'parts/head.php';
    include_once 'ximoya.php';
    include_once 'core/txtController.php';

    $obj = new Txt();
    $txt = $obj->selectOne('category','mualif');
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
                    <h4 class="card-title">Qumita</h4>
                    <form action="send/txtSend.php" method="POST" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Matn</label>
                            <textarea name="txt">
                              <?=$txt['txt']?>
                            </textarea>
                            <script>
                                    CKEDITOR.replace( 'txt' );
                            </script>
                            <input type="hidden" name="category" value="mualif">
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