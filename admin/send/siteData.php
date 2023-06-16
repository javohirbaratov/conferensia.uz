<?php
    require_once '../core/saytDataController.php';
    if(isset($_POST['nomi'])){

        $obj = new Sayt();
        $back = $obj->insert($_POST,$_FILES);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../sitedata.php";
                </script>
            <?
        }else{
            
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../sitedata.php";
                </script>
            <?
        }
        
    }

?>