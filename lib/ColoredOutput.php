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

require_once AKD_PHPCOLCLI_LIB . "/Utils.php";

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

    /**
     * Scheme to use
     * @var CledCliScheme
    */
    private $scheme;

    public function __construct($scheme) {
        $this->scheme = CledCliUtils::loadScheme($scheme);
    }

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

    public function write($string, $newLine = True) {
        echo(self::getString($string, $this->fgColor, $this->bgColor));
        if($newLine) echo "\n";
    }

    public function info($string, $newLine = True) {
        $colorScheme = $this->scheme->getDefaultScheme();
        echo self::getString($string, $colorScheme->fg(), $colorScheme->bg());
        if($newLine) echo "\n";
    }

    public function error($string, $newLine = True) {
        $colorScheme = $this->scheme->getErrorScheme();
        echo self::getString($string, $colorScheme->fg(), $colorScheme->bg());
        if($newLine) echo "\n";
    }

    public function warn($string, $newLine = True) {
        $colorScheme = $this->scheme->getWarningScheme();
        echo self::getString($string, $colorScheme->fg(), $colorScheme->bg());
        if($newLine) echo "\n";
    }

    public function success($string, $newLine = True) {
        $colorScheme = $this->scheme->getSuccessScheme();
        echo self::getString($string, $colorScheme->fg(), $colorScheme->bg());
        if($newLine) echo "\n";
    }

}

?>
