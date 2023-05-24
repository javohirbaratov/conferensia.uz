<?php
    session_start();
    require_once '../core/userController.php';
    if(isset($_POST['login']) and $_POST['_crf'] == $_SESSION['_crf']){

        $obj = new User();
        $back = $obj->check($_POST);
        
        if($back['code'] == 200){
            ?>
                <script>
                    window.location.href="../index.php";
                </script>
            <?
        }else{
            
            ?>
                <script>
                    alert('Login yoki parol xato')
                    window.location.href="../login.php";
                </script>
            <?
        }
        
    }else{
        
        $_SESSION['_crf'] = md5(time());
        ?>
            <script>
                alert('Login yoki parol xato')
                window.location.href="../login.php";
            </script>
        <?
    }

?>