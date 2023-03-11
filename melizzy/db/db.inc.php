<?php
/* HIDE ERRORS */
error_reporting(0);

/* COMMENT OUT THE FIRST LINE, AND UNCOMMENT 3 LINES BELOW TO ENABLE ERROR REPORTING */
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Set the Timezone
date_default_timezone_set('America/Toronto');

// Load database credentials from file
$dbConfig = parse_ini_file("db.ini");

$GLOBALS['emoji1'] = '';
$GLOBALS['emoji2'] = '';
generateUniqueEmojis();

// Connect to the database
// $conn = new mysqli($dbConfig["SERVER"], $dbConfig["USER"], $dbConfig["PASS"], $dbConfig["DATABASE"]);
// if ($conn->connect_error) {
//     die("Database Connection Failed!<br>Site may be undergoing maintenance...");
// }

// function getAllMessages($conn)
// {
//     $sql = "SELECT * FROM messages";
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_assoc($result);
//     $text = $row["message_text"];
//     return ($text);
// }

function getToday()
{
    $returnMsg = '';
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("D, M j");
    $returnMsg = $time;
    return $returnMsg;
}

function getTimeBasedWelcomeMsg()
{
    $returnMsg = '';
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        $returnMsg = "Good morning, beautiful" . $GLOBALS['emoji1'];
    } else
        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "12" && $time < "17") {
            $returnMsg = "Good afternoon, my lady " . $GLOBALS['emoji1'];
        } else
            /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
            if ($time >= "17" && $time < "19") {
                $returnMsg = "Good evening, my sweet " . $GLOBALS['emoji1'];
            } else
                /* Finally, show good night if the time is greater than or equal to 1900 hours */
                if ($time >= "19") {
                    $returnMsg = "Good night, my love &#127769;" . $GLOBALS['emoji1'];
                }
    return $returnMsg;
}

function getTuesday()
{
    $returnMsg = '';
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $weekday = date("D");
    /* If the time is less than 1200 hours, show good morning */
    if ($weekday == "Tue") {
        $returnMsg = "Innit Tuesday! &#9829;&#65039;";
    } else {
        $returnMsg = $GLOBALS['emoji2'];
    }
    return $returnMsg;
}

function generateUniqueEmojis()
{
    $emojis = [
        "&#127806;",
        "&#129392;",
        "&#9829;&#65039;",
        "&#128536;"
    ];
    $GLOBALS['emoji1']  = $emojis[array_rand($emojis)];
    $GLOBALS['emoji2'] = $emojis[array_rand($emojis)];
    while ($GLOBALS['emoji1'] == $GLOBALS['emoji2']) {
        $GLOBALS['emoji2'] = $emojis[array_rand($emojis)];
    }
}


// Call using put_ini_file($configArray, “path/to/config.ini”, true);
function put_ini_file($config, $file, $has_section = false, $write_to_file = true)
{
    $fileContent = '';
    if (!empty($config)) {
        foreach ($config as $i => $v) {
            if ($has_section) {
                $fileContent .= "[$i]" . PHP_EOL . put_ini_file($v, $file, false, false);
            } else {
                if (is_array($v)) {
                    foreach ($v as $t => $m) {
                        $fileContent .= "$i[$t] = " . (is_numeric($m) ? $m : '"' . $m . '"') . PHP_EOL;
                    }
                } else $fileContent .= "$i = " . (is_numeric($v) ? $v : '"' . $v . '"') . PHP_EOL;
            }
        }
    }

    if ($write_to_file && strlen($fileContent)) return file_put_contents($file, $fileContent, LOCK_EX);
    else return $fileContent;
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function getDeviceAgent()
{
    if (!empty($_SERVER["HTTP_USER_AGENT"])) {
        $agent = $_SERVER["HTTP_USER_AGENT"];
    }
    return $agent;
}

function generateUUID($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function convert_filesize($bytes, $decimals = 2)
{
    $size = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$size[$factor];
}

function IsNullOrEmptyString($str)
{
    return (!isset($str) || trim($str) === '');
}

function pickRandomLine()
{
    $file = './public/sayings.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $line = $lines[array_rand($lines)];
    $config = parse_ini_file("./db/config.ini");
    while ($config["line"] == $line) {
        $line = $lines[array_rand($lines)];
    }
    $arr = array("line" => $line);
    put_ini_file($arr, './db/config.ini');
    return $line;
}

function pickRandomImage()
{
    // Get a list of all image files in the specified folder
    $files = glob('./public/*.PNG');

    // Return a random image file from the list
    return $files[array_rand($files)];
}
