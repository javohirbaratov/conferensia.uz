<?php 
    include_once 'ximoya.php';
    include_once 'parts/head.php';
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
                    <h4 class="card-title">Section</h4>
                    <form action="send/sectionSend.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">NOMI</label>
                            <input required name="nomi" type="text" class="form-control" id="exampleInputUsername1">
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