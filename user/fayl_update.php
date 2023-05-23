<?php 
    include_once 'parts/head.php';
    session_start();

    if(!isset($_GET['id'])){
        echo "Notug'ri so'rov";
        exit;
    }

    include_once 'core/faylController.php';
    
    $obj = new Fayl();
    
    $id = $_GET['id'];

    $fayl = $obj->selectBitta($id);

    $section = $obj->selectTableOne('section');

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
                    <h4 class="card-title">Maqola yuklash</h4>
                    <form action="update/updateFayl.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Nomi</label>
                            <input required name="mavzu" type="text" class="form-control" value="<?=$fayl['mavzu']?>">
                            <input required name="id" type="hidden" value="<?=$id?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Section</label>
                            <select name="section_id" class="form-control" id="exampleSelectGender">
                                <option>Tanlang</option>
                                <?php 
                                   foreach($section as $key => $val){
                                ?>
                                <option value="<?=$val['id']?>"><?=$val['nomi']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Maqola</label>
                            <input required name="file" type="file" class="form-control" accept=".doc, .docx" >
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