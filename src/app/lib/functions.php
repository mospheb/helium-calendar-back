
<?php
    //logout 
    if(isset($_POST["logout"])){

        unset($_SESSION["reg_category"]);
        unset($_SESSION["reg_name"]);
        unset($_SESSION["reg_email"]);

        echo '<script>window.location.replace("https://helium-front.herokuapp.com/?page=index")</script>';
    }


    function get($name, $def=''){
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def; 
    }

    function form_process($data) {
        $data = strip_tags($data);
        //$data = mysql_real_escape_string($data);
        //$data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

    