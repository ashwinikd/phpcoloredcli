PHP Colored Output
==================
Colored output for PHP command line scripts.

Usage
=====
    require_once "/path/to/phpcoloredcli.php";
    //will print red text on blue background
    echo ColoredOutput::getString("Red on Blue", Colors::FG_RED, Colors::BG_BLUE);

    $writer = new ColoredOutput("Default");

    //write text with default settings. Default is green on black
    $writer->write("Green on Black");

    //writes white text on red background
    $writer->on(Colors::BG_RED)->with(Colors::FG_WHITE)->write("White on Red");

    //writes without new line at the end
    $writer->write("Default on Default", FALSE);

Schemes
=======
Schemes are a way to specify foreground and background colors for different
outputs eg. Error, Warning, Info etc. You can specify the scheme to use while
constructing the `ColoredOutput` object.

Adding New Schemes
==================
To create new scheme add new class to schemes directory. Name of the file should
be the name of scheme and class name should be `"CledCli" + SCHEME_NAME + "Scheme"`.
Scheme classes should extend Base Scheme class and define init method.

Following is a sample init method:

    protected function init() {
        $this->name    = "Default";
        $this->def     = new CledCliColorScheme(NULL, NULL);
        $this->success = new CledCliColorScheme(Colors::FG_GREEN, NULL);
        $this->warn    = new CledCliColorScheme(Colors::FG_YELLOW, NULL);
        $this->error   = new CledCliColorScheme(Colors::FG_RED, NULL);
    }

License
=======
Apache License Version 2.0
