<?php

function debug($v){
    $enabled_debug = false;
    $debug_file = "/tmp/php.log";

    if($enabled_debug){
        file_put_contents($debug_file,$v . "\n",FILE_APPEND);
    }
}

?>