<?php

function dd($value)
{
    echo '<pre style="background-color:black; color:#ef4444; padding:20px; line-height: 2; font-size:16px; letter-spacing:1px">';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}