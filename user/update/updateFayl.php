<?php
    require_once '../core/faylController.php';
    if(isset($_POST['id'])){

        $obj = new Fayl();
        $back = $obj->update($_POST,$_FILES);

        if($back == 200){
            ?>
                <script>
                    alert('Tahrirlandi')
                    window.location.href="../index.php";
                </script>
            <?
        }else{
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../index.php";
                </script>
            <?
        }
        
    }

?>