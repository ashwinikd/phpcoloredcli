<?php

if(! defined(AKD_PHPCOLCLI_ROOT)) {
    define("AKD_PHPCOLCLI_ROOT", dirname(__FILE__));
    define("AKD_PHPCOLCLI_LIB", AKD_PHPCOLCLI_ROOT . "/lib");
    define("AKD_PHPCOLCLI_SCHEME", AKD_PHPCOLCLI_ROOT . "/schemes");
}

require_once AKD_PHPCOLCLI_LIB . "/Utils.php";
require_once AKD_PHPCOLCLI_LIB . "/Colors.php";
require_once AKD_PHPCOLCLI_LIB . "/ColoredOutput.php";

?>
