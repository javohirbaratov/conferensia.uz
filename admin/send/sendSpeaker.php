<?php
    require_once '../core/spkearController.php';
    if(isset($_POST['fio']) and isset($_FILES)){

        $obj = new Speaker();
        $back = $obj->insert($_POST,$_FILES);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../add-speaker.php";
                </script>
            <?
        }else{
            echo $back;
            exit;
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../add-speaker.php";
                </script>
            <?
        }
        
    }

?>