<?php
require_once AKD_PHPCOLCLI_LIB . "/ColorScheme.php";

abstract class CledCliScheme {
    protected $def;
    protected $success;
    protected $warn;
    protected $error;
    protected $name;

    protected abstract function init();

    public final function __construct() {
        $this->init();
    }

    public final function getErrorScheme() {
        return $this->error;
    }

    public final function getWarningScheme() {
        return $this->warn;
    }

    public final function getDefaultScheme() {
        return $this->def;
    }

    public final function getSuccessScheme() {
        return $this->success;
    }

    public function getName() {
        return "PHP Colored CLI Sceme " . $this->name;
    }

}

?>
