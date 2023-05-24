<?php 

    session_start();
    include_once 'parts/head.php';
    include_once 'core/faylController.php';

    $obj = new Fayl();

    $fayles = $obj -> select('user_id',$_SESSION['id']);

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
                    <h4 class="card-title">Articles</h4>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>status</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            foreach ($fayles as $key => $value) {
                          ?>
                            <tr>
                                <td>
                                  <a href="../admin/fayl/<?=$value['nomi']?>">File see</a>
                                  
                                </td>
                                <td>
                                    <?php
                                      if($value['status'] == 0){
                                        echo "Under review";
                                      }
                                      if($value['status'] == 1){
                                        echo "Accepted";
                                      }
                                      
                                      if($value['status'] == -1){
                                        echo "Rejected";
                                      }
                                    ?>
                                </td>
                                <td>
                                  <?php
                                    if($value['status'] == 1){
                                      echo "You can no longer edit this file";
                                    }else{
                                      ?>
                                        <a href="fayl_update.php?id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-warning">Update</button>
                                        </a>
                                    <?php } ?>
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


