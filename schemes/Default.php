<?php
require_once AKD_PHPCOLCLI_LIB . "/Scheme.php";

class CledCliDefaultScheme extends CledCliScheme {
    protected function init() {
        $this->name    = "Default";
        $this->def     = new CledCliColorScheme(NULL, NULL);
        $this->success = new CledCliColorScheme(Colors::FG_GREEN, NULL);
        $this->warn    = new CledCliColorScheme(Colors::FG_YELLOW, NULL);
        $this->error   = new CledCliColorScheme(Colors::FG_RED, NULL);
    }
}

?>
