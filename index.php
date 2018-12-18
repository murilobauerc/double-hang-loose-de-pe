<?php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
                    '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
                    '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );

    if($isMobile){
        header("Location: http://dhldp-site.herokuapp.com/homeM.php", true, 301); /* Redirect browser */
    }
    else{
        header("Location: http://dhldp-site.herokuapp.com/home.php", true, 301); /* Redirect browser */
    }

?>