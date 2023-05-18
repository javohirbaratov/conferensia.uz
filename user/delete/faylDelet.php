<?php
    require_once '../core/faylController.php';
    $id = intval($_GET['id']);
    $obj = new Fayl();

    $back = $obj->delete($id);

    if($back == 200){
        ?>
            <script>
                alert('O`chirildi')
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
?>