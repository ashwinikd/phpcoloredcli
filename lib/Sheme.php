<?php
require_once AKD_PHPCOLCLI_LIB . "/ColorScheme.php";

abstract class CledCliScheme {
    protected $def;
    protected $success;
    protected $warn;
    protected $error;
    protected $name;
    protected $scheme;

    protected abstract function init();

    protected final function __construct() {
        $this->init();
    }

    public final function getErrorSheme() {
        return $this->error;
    }

    public final function getWarningScheme() {
        return $this->warn;
    }

    public final function getDefaultSheme() {
        return $this->def;
    }

    public final function getSuccessScheme() {
        return $this->success;
    }

    public function getName() {
        return "PHP Colored CLI Sceme " . $this->name;
    }

    public final function getInstance() {
        if(! $this->scheme) {
            $this->scheme = new CledCliScheme();
        }

        return $this->scheme;
    }
}

?>
