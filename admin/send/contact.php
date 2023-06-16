<?php
    require_once '../core/contactController.php';

    if(isset($_POST['manzil'])){

        $obj = new Contact();
        $back = $obj->insert($_POST);
        
        if($back == 200){
            ?>
                <script>
                    alert('Yozildi')
                    window.location.href="../contact.php";
                </script>
            <?
        }else{
            
            ?>
                <script>
                    alert('Hatolik yuz berdi')
                    window.location.href="../contact.php";
                </script>
            <?
        }
        
    }

?>