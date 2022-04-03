<?php

$fls = "";

if (isset($_GET["fls"])) {
    $fls = $_GET["fls"];
}

$project = "Portfolio/";

$url = "http://" . $_SERVER["HTTP_HOST"] . "/" . $project;
