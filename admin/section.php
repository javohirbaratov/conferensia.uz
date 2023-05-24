<?php 
    session_start();
    include_once 'ximoya.php';
    include_once 'parts/head.php';
    include_once 'core/sectionController.php';

    $obj = new Section();

    $section = $obj -> select();
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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Foydalanuvchi</h4>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Nomi</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            foreach ($section as $key => $value) {
                          ?>
                            <tr>
                                <td>
                                  <?=$value['nomi']?>
                                </td>
                                <td>
                                    <a href="section_update.php?id=<?=$value['id']?>">
                                        <button type="button" class="btn btn-warning">Tahrirlash</button>
                                    </a>
                                    <a href="delete/sectionDelet.php?id=<?=$value['id']?>">
                                        <button type="button" class="btn btn-danger">O'chirish</button>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
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


