<?php
    require_once '../core/sectionController.php';
    $id = intval($_GET['id']);
    $obj = new Section();

    $back = $obj->delete($id);

    if($back == 200){
        ?>
            <script>
                alert('O`chirildi')
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
?>