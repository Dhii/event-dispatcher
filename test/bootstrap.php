<?php

call_user_func_array(function () {
    $root = dirname(dirname(__FILE__));
    $autoload = "$root/vendor/autoload.php";

    if (file_exists($autoload)) {
        require_once $autoload;
    }
}, [__FILE__]);
