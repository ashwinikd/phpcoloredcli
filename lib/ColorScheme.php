<?php

class CledCliColorScheme {
    private $bg;
    private $fg;

    public function __construct($fgColor = NULL, $bgColor = NULL) {
        $this->bg = $bgColor;
        $this->fg = $fgColor;
    }

    public function bg() {
        return $this->bg;
    }

    public function fg() {
        return $this->fg;
    }
}

?>
