<?php
    require_once '../core/sectionController.php';
    if(isset($_POST['nomi'])){

        $obj = new Section();
        $back = $obj->insert($_POST);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../add-section.php";
                </script>
            <?
        }else{
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../add-section.php";
                </script>
            <?
        }
        
    }

?>