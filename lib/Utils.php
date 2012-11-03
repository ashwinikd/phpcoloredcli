<?php

class CledCliUtils {

    public static function loadScheme($schemeName) {
        if (! $schemeName) return False;

        require_once AKD_PHPCOLCLI_SCHEME . "/$schemeName.php";
        $schemeClass = "CledCli" . $schemeName . "Scheme";
        $scheme = new ReflectionClass($schemeClass);
        return $scheme->newInstance();
    }

}

?>
