<?php
/**
 * Colored Output for PHP command line scripts
 *
 * contains classes ColoredOutput and Colors.
 *
 * @author Ashwini Dhekane <ashwini@ashwinidhekae.com>
 * @package phpcoloredcli
 * @copyright Copyright (c) 2012, Ashwini Dhekane
 * @license http://www.apache.org/licenses/LICENSE-2.0
*/


/**
 * ColoredOutput class
 *
 * Implements colored output on terminal.
 *
 * @author Ashwini Dhekane <ashwini@aswinidhekane.com>
 * @see Colors
 * @package phpcoloredcli
*/
class ColoredOutput {

    private $fgColor;
    private $bgColor;

    public function __construct() {
        $this->fgColor = Colors::FG_RED;
        $this->bgColor = Colors::BG_BLACK;
    }

    // Returns colored string
    public static function getString($string, $fgColor = null, $bgColor = null) {
        $coloredString = "";

        if ($fgColor)
            $coloredString .= "\033[" . $fgColor . "m";
        if ($bgColor)
            $coloredString .= "\033[" . $bgColor . "m";

        $coloredString .=  $string . "\033[0m";

        return $coloredString;
    }

    public function on($bgColor) {
        $this->bgColor = $bgColor;
        return $this;
    }

    public function with($fbColor) {
        $this->fgColor = $fbColor;
        return $this;
    }

    public function write($string) {
        echo(self::getString($string, $this->fgColor, $this->bgColor));
    }
}

?>
