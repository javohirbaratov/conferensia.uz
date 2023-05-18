<?php
    require_once '../core/spkearController.php';
    $id = intval($_GET['id']);
    $obj = new Speaker();

    $back = $obj->delete($id);

    if($back == 200){
        ?>
            <script>
                alert('O`chirildi')
                window.location.href="../speaker.php";
            </script>
        <?
    }else{
        ?>
        <script>
            alert('Hatolik yuz berdi')
            window.location.href="../speaker.php";
        </script>
        <?
    }
?>