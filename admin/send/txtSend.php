<?php
    require_once '../core/txtController.php';
    
    if(isset($_POST['category'])){
        $obj = new Txt();
        $back = $obj->insert($_POST);
        if($_POST['category']=="qumita"){
            if($back == 200){
                ?>
                    <script>
                        alert('Yozildi')
                        window.location.href="../qumita.php";
                    </script>
                <?
            }else{
                ?>
                    <script>
                        alert('Hatolik yuz berdi')
                        window.location.href="../qumita.php";
                    </script>
                <?
            }
        }else{
            if($back == 200){
                ?>
                    <script>
                        alert('Yozildi')
                        window.location.href="../mualif.php";
                    </script>
                <?
            }else{
                ?>
                    <script>
                        alert('Hatolik yuz berdi')
                        window.location.href="../mualif.php";
                    </script>
                <?
            }
        }
        
    }

?>