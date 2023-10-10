<html>
    <body>
        <?php 
            if($_COOKIE['lang']=='en'){
                echo "Welcome";
            }elseif($_COOKIE['lang']=='th') {
                echo "Incorrect Username or Password";
            }
        ?>
    </body>
</html>