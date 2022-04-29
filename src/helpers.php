<?php


// get pages dynamically
function get_pages($fileName = 'dashboard')
{

    global $_PATH;

    //  pages dir
    $dir = $_PATH['admin']['pages'] . '/';
    // php file extention 
    $extention = '.php';

    $path = $dir . $fileName . $extention;

    // check if the file exist in page dir and include it 
    if (file_exists($path)) {

        return $path;
    }

    //else return the default home destination
    return "{$dir}error{$extention}";
}

// redirect page 

function goLocation($location)
{
    header('Location: ' . $location);
    exit();
}
