<?php
    require_once '../core/faylController.php';
    $id = intval($_GET['id']);
    $obj = new Fayl();

    $back = $obj->rejection($id);

    if($back == 200){
        ?>
            <script>
                alert('Bajarildi')
                window.location.href="../users.php";
            </script>
        <?
    }else{
        ?>
        <script>
            alert('Hatolik yuz berdi')
            window.location.href="../users.php";
        </script>
        <?
    }
?>