<?php


// extract 2 chars locale
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
    $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}


// redirect to french if found
if ($locale == "fr")
{
    header("location: /fr");
    exit();
}


// default to english
header("location: /en");
exit();
