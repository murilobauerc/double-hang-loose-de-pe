<?php
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    if(isMobile()){
        header("Location: http://dhldp-site.herokuapp.com/home.php", true, 301); /* Redirect browser */
        exit();
    }
    else{
        header("Location: http://dhldp-site.herokuapp.com/homeM.php", true, 301); /* Redirect browser */
        exit();
    }


?>