<?php 
    session_start();
    include_once 'parts/head.php';
    include_once 'core/faylController.php';

    $obj = new Fayl();

    $fayles = $obj -> select();
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
                                <th>User</th>
                                <th>Otm</th>
                                <th>Davlat</th>
                                <th>Fayl</th>
                                <th>Status</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            foreach ($fayles as $key => $value) {
                              $sql = "SELECT * FROM user WHERE id=".$value['user_id'];
                              $back = $obj->query($sql);
			                        $user = mysqli_fetch_assoc($back);                              
                          ?>
                            <tr>
                                <td>
                                  <?=$user['fio']?>
                                </td>
                                <td>
                                  <?=$user['otm']?>
                                </td>
                                <td>
                                  <?=$user['davlat']?>
                                </td>
                                <td>
                                  <a href="../admin/fayl/<?=$value['nomi']?>">FAYLNI KO'RISH</a>
                                </td>
                                <td>
                                  <?php
                                    if($value['status'] == 0){
                                      echo "Ko'rib chiqilmoqda";
                                    }
                                    if($value['status'] == 1){
                                      echo "Qabul qilindi";
                                    }
                                    if($value['status'] == 0){
                                      echo "Ko'rib chiqilmoqda";
                                    }
                                    if($value['status'] == -1){
                                      echo "Rad qilindi";
                                    }
                                  ?>
                                </td>
                                <td>
                                  <?php 
                                   if($value['status'] != 1){
                                    ?>
                                        <a href="send/accept.php?id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-info">Qabul qilish</button>
                                        </a>
                                    <?php
                                   }
                                    ?>
                                    <a href="send/rejection.php?id=<?=$value['id']?>">
                                        <button type="button" class="btn btn-danger">Rad etish</button>
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


