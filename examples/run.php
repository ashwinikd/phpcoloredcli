#!/usr/bin/php
<?php
ini_set("display_errors", 1);
require_once dirname(dirname(__FILE__)) . "/phpcoloredcli.php";
echo ColoredOutput::getString("red on black", Colors::FG_RED, Colors::BG_BLACK);

$writer = new ColoredOutput("Default");
$writer->on(Colors::BG_BLUE)->with(Colors::FG_PURPLE)->write("Purple on Blue");
$writer->info("info");
$writer->error("error");
$writer->warn("Warning");
$writer->success("Success");
?>
