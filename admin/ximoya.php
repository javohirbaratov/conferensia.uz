<?php
    session_start();
    if(!isset($_SESSION['id'])){
        ?>
            <script>
                window.location.href="login.php"
            </script>

        <?php
    }