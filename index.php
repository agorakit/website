<?php


// extract 2 chars locale
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}


// redirect if not english
if ($lc == "fr")
{
    header("location: /fr");
    exit();
}


// deffault to english
header("location: /en");
exit();
