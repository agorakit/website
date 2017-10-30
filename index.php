<?php
$lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);

// extract 2 chars locale
$lc = substr($lang, 0, 2);

// redirect if not english
if ($lc == "fr")
{
    header("location: /fr");
    exit();
}


// deffault to english
header("location: /en");
exit();
