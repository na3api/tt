<?php

/**
 * @param $data
 */
function dd($data){
    echo '<pre>';
    print_r($data);
    echo '<pre>';
    die();
}


/**
 * @param $data
 */
if (!function_exists('dd')) {
    function dd(...$args)
    {
        if (function_exists('dump')) {
            dump(...$args);
        } else {
            var_dump(...$args);
        }
        die;
    }
}

/**
 * @param string $path
 * @return string
 */
function full_path($path = ''){
    static $full_path = null;

    if ($full_path === null) {
        $full_path = str_replace('/public', '/', $_SERVER['DOCUMENT_ROOT']);
    }

    return preg_replace('/\/\//', '/', $full_path . $path);
}

/**
 * @param string $path
 * @return string
 */
function image_path($path = ''){
    static $image_path = null;

    if ($image_path === null) {
        $image_path = str_replace('/public', '/resources/assets/images/', $_SERVER['DOCUMENT_ROOT']);
    }

    $full_path = preg_replace('/\/\//', '/', $image_path . $path);

    if(file_exists($full_path)){
        return $full_path;
    }
}

/**
 * @param $path
 * @return string
 */
function extension($path) : string {
    return preg_replace('/(.+)\./', '', $path);
}

function array_dot($array, $prepend = '')
{
    $results = [];

    foreach ($array as $key => $value) {
        if (is_array($value) && ! empty($value)) {
            $results = array_merge($results, array_dot($value, $prepend.$key.'.'));
        } else {
            if(!is_array($value) || !empty($value)){
                $results[$prepend.$key] = $value;
            }
        }
    }

    return $results;
}

function exists($array, $key)
{
    if ($array instanceof ArrayAccess) {
        return $array->offsetExists($key);
    }

    return array_key_exists($key, $array);
}


function array_except(&$array, $keys)
{
    $original = &$array;

    $keys = (array) $keys;

    if (count($keys) === 0) {
        return;
    }

    foreach ($keys as $key) {
        // if the exact key exists in the top-level, remove it
        if (exists($array, $key)) {
            unset($array[$key]);

            continue;
        }

        $parts = explode('.', $key);

        // clean up before each pass
        $array = &$original;

        while (count($parts) > 1) {
            $part = array_shift($parts);

            if (isset($array[$part]) && is_array($array[$part])) {
                $array = &$array[$part];
            } else {
                continue 2;
            }
        }

        unset($array[array_shift($parts)]);
    }
}

function clear_list($array){
    $result = [];

    foreach ($array as $key => $item){
        if(is_array($item)){
            $result[$key] = clear_list($item);
        }else{
            if(is_numeric($key) && !is_numeric($item)){
                $result[$item] = true;
            }elseif($item){
                $result[$key] = true;
            }
        }
    }
    return $result;
}

/**
 * @param $number
 * @return string
 */
function money($number){
    return number_format((float) $number, 2, ",", ".");
}

/**
 * @param $number
 * @param int $numbersAfterDot
 * @return string
 */
function number($number, $numbersAfterDot = 0){
    return number_format((float) $number, $numbersAfterDot, ",", ".");
}

/**
 * @param string $method
 * @return null|string|string[]
 */
function method(string $method){
    return preg_replace('/^.+::/','' , $method);
}

function addPrefixToKeys($key){
    return $key;
}

function t($key){
    return $key;
}


