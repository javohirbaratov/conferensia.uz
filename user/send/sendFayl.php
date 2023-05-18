<?php
    require_once '../core/faylController.php';
    if(isset($_POST['user_id']) and isset($_FILES)){

        $obj = new Fayl();
        $back = $obj->insert($_POST,$_FILES);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../add-fayl.php";
                </script>
            <?
        }else{
            
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../add-fayl.php";
                </script>
            <?
        }
        
    }

?>