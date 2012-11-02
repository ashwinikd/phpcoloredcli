phpcoloredcli
=============

Colored output for PHP command line script

How to Use
==========
//will print red text on blue background
echo ColoredOutput::getString("Red on Blue", Colors::FB_RED, Colors::BG_BLUE);

$writer = new ColoredOutput();

//write text with default settings. Default is green on black
$writer->write("Green on Black");

//writes white text on red background
$writer->on(Colors::BG_RED)->with(Colors::FG_WHITE)->write("White on Red");
