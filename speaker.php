<?php 
    include_once 'parts/head.php';
    include_once 'core/spkearController.php';

    $obj = new Speaker();
    $speakers = $obj->select();
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
                        <h4 class="card-title">Speakerlar</h4>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>FIO</th>
                                    <th>OTM</th>
                                    <th>Mavzusi</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($speakers as $key => $value){
                                ?>
                                <tr>
                                    <td><?=$value['fio']?></td>
                                    <td><?=$value['otm']?></td>
                                    <td><?=$value['mavzu']?></td>
                                    <td>
                                        <a onclick=delet(<?=$value['id']?>)>
                                            <button type="button" class="btn btn-danger">O'chirish</button>
                                        </a>
                                        <a href="speaker_update.php?id=<?=$value['id']?>">
                                            <button type="button" class="btn btn-warning">Tahrirlash</button>
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
    <?php 
        include_once 'parts/script.php';
    ?>