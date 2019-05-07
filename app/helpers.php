<?php

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

function clearString($string){
    $conversions = [
        'ae' => '/ä|æ|ǽ/',
        'oe' => '/ö|œ/',
        'ue' => '/ü/',
        'Ae' => '/Ä/',
        'Ue' => '/Ü/',
        'Oe' => '/Ö/',
        'A' => '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ/',
        'a' => '/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/',
        'C' => '/Ç|Ć|Ĉ|Ċ|Č/',
        'c' => '/ç|ć|ĉ|ċ|č/',
        'D' => '/Ð|Ď|Đ/',
        'd' => '/ð|ď|đ/',
        'E' => '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/',
        'e' => '/è|é|ê|ë|ē|ĕ|ė|ę|ě/',
        'G' => '/Ĝ|Ğ|Ġ|Ģ/',
        'g' => '/ĝ|ğ|ġ|ģ/',
        'H' => '/Ĥ|Ħ/',
        'h' => '/ĥ|ħ/',
        'I' => '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/',
        'i' => '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/',
        'J' => '/Ĵ/',
        'j' => '/ĵ/',
        'K' => '/Ķ/',
        'k' => '/ķ/',
        'L' => '/Ĺ|Ļ|Ľ|Ŀ|Ł/',
        'l' => '/ĺ|ļ|ľ|ŀ|ł/',
        'N' => '/Ñ|Ń|Ņ|Ň/',
        'n' => '/ñ|ń|ņ|ň|ŉ/',
        'O' => '/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/',
        'o' => '/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/',
        'R' => '/Ŕ|Ŗ|Ř/',
        'r' => '/ŕ|ŗ|ř/',
        'S' => '/Ś|Ŝ|Ş|Š/',
        's' => '/ś|ŝ|ş|š|ſ/',
        'T' => '/Ţ|Ť|Ŧ/',
        't' => '/ţ|ť|ŧ/',
        'U' => '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/',
        'u' => '/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/',
        'Y' => '/Ý|Ÿ|Ŷ/',
        'y' => '/ý|ÿ|ŷ/',
        'W' => '/Ŵ/',
        'w' => '/ŵ/',
        'Z' => '/Ź|Ż|Ž/',
        'z' => '/ź|ż|ž/',
        'AE' => '/Æ|Ǽ/',
        'ss' => '/ß/',
        'IJ' => '/Ĳ/',
        'ij' => '/ĳ/',
        'OE' => '/Œ/',
        'f' => '/ƒ/',
        '_' => '/\\s|\\_+/',
        '-' => '/\\W|-+$/',
    ];

    return preg_replace($conversions, array_keys($conversions), $string);
}