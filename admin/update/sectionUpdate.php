<?php
    require_once '../core/sectionController.php';
    if(isset($_POST['nomi'])){

        $obj = new Section();
        $back = $obj->update($_POST);

        if($back == 200){
            ?>
                <script>
                    alert('Tahrirlandi')
                    window.location.href="../section.php";
                </script>
            <?
        }else{
           
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../section.php";
                </script>
            <?
        }
        
    }

?>