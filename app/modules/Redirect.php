<?php

class Redirect
{
    public static function go($url = null)
    {
        if (header("Location:" . $url)) {
            header("Location:" . $url);
        } else {
            echo '<script>location.href="' . $url . '";</script>';
        }
    }
}

