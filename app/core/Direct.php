<?php

class Direct
{
    public static function directTo($path = "")
    {
        header("Location:" . BASEURL . ".php");
        exit;
    }
}