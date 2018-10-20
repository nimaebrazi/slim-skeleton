<?php

function get_dir_contents($path)
{
    return array_diff(scandir($path), ['..', '.']);
}

function remove_file_extension($str, $extension)
{
    return str_replace($extension, "", $str);
}