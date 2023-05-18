<?php
    require_once '../core/spkearController.php';
    if(isset($_POST['fio'])){

        $obj = new Speaker();
        $back = $obj->update($_POST);

        if($back == 200){
            ?>
                <script>
                    alert('Tahrirlandi')
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
        
    }

?>