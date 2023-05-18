<?php
    require_once '../core/userController.php';
    if(isset($_POST['fio']) and isset($_FILES)){

        $obj = new User();
        $back = $obj->insert($_POST);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../../registr.php";
                </script>
            <?
        }else{
           
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../../registr.php";
                </script>
            <?
        }
        
    }

?>