<?php
    include_once("_headers.php");
    // json
    header('Content-type:application/json;charset=utf-8');

    // function for shell script
    function reboot() {
        shell_exec("sudo reboot");
    }

    reboot();

?>
