<?php
/**
 * Colors.php
 *
 * contains class Colors
 *
 * @author Ashwini Dhekane <ashwini@ashwinidhekane.com>
 * @package ashwinikd
 * @subpackage phpcoloredcli
 * @version 0.1
 * @copyright Copyright (c) 2012, Ashwini Dhekane
 * @license http://www.apache.org/licenses/LICENSE-2.0
*/

/**
 * Colors
 *
 * Colors Enumeration. Maps foreground and background colors to appropriate
 * string values for terminal colors
 *
 * @author Ashwini Dhekane <ashwini@ashwinidhekane.com>
 * @see ColoredOutput
*/
class Colors {
    /**
     * Foreground Color Black
     * @var string
    */
    const FG_BLACK        = '0;30';

    /**
     * Foreground color Dark Grey
     * @var string
    */
    const FG_DARK_GREY    = '1;30';

    /**
     * Foreground color Blue
     * @var string
    */
    const FG_BLUE         = '0;34';

    /**
     * Foreground color Light Blue
     * @var string
    */
    const FG_LIGHT_BLUE   = '1;34';

    /**
     * Foreground color Green
     * @var string
    */
    const FG_GREEN        = '0;32';

    /**
     * Foreground color Light Green
     * @var string
    */
    const FG_LIGHT_GREEN  = '1;32';

    /**
     * Foreground color Cyan
     * @var string
    */
    const FG_CYAN         = '0;36';

    /**
     * Foreground color Light Cyan
     * @var string
    */
    const FG_LIGHT_CYAN   = '1;36';

    /**
     * Foreground color Red
     * @var string
    */
    const FG_RED          = '0;31';

    /**
     * Foreground color Light Red
     * @var string
    */
    const FG_LIGHT_RED    = '1;31';

    /**
     * Foreground color Purple
     * @var string
    */
    const FG_PURPLE       = '0;35';

    /**
     * Foreground color Light Purple
     * @var string
    */
    const FG_LIGHT_PURPLE = '1;35';

    /**
     * Foreground color Brown
     * @var string
    */
    const FG_BROWN        = '0;33';

    /**
     * Foreground color Yellow
     * @var string
    */
    const FG_YELLOW       = '1;33';

    /**
     * Foreground color Light Grey
     * @var string
    */
    const FG_LIGHT_GREY   = '0;37';

    /**
     * Foreground color White
     * @var string
     */
    const FG_WHITE        = '1;37';

    /**
     * Background color Black
     * @var string
    */
    const BG_BLACK      = '40';

    /**
     * Background color Red
     * @var string
    */
    const BG_RED        = '41';

    /**
     * Background color Green
     * @var string
    */
    const BG_GREEN      = '42';

    /**
     * Background color Yellow
     * @var string
    */
    const BG_YELLOW     = '43';

    /**
     * Background color Blue
     * @var string
    */
    const BG_BLUE       = '44';

    /**
     * Background color Magenta
     * @var string
    */
    const BG_MAGENTA    = '45';

    /**
     * Background color Cyan
     * @var string
    */
    const BG_CYAN       = '46';

    /**
     * Background color Light Grey
    */
    const BG_LIGHT_GREY = '47';
}

?>
