<?php namespace Galdan\Tour\Classes;

/**
 * Tour Markdown tag processor.
 *
 * @package Galdan\Tour
 * @author Alexey Bobkov, Samuel Georges
 */
class UidGenerator
{
    

    public function generate($length)
    {
        $d=date ("d");
        $m=date ("m");
        $y=date ("Y");
        $t=time();
        $dmt=$d+$m+$y+$t;    
        $ran= rand(0,10000000);
        $dmtran= $dmt+$ran;
        $un=  uniqid();
        $dmtun = $dmt.$un;
        $mdun = md5($dmtran.$un);
        $sort=substr($mdun, $length);

        return $sort;
    }

    function generateRandomString($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

    }


    /* 
    *The random code generator is mainly a program which helps to create random code in every time. It helps you to create a different code for session or confirmation code.
    */
    function rand_code($len)
    {
     $min_lenght= 0;
     $max_lenght = 100;
     $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     $smallL = "abcdefghijklmnopqrstuvwxyz";
     $number = "0123456789";
     $bigB = str_shuffle($bigL);
     $smallS = str_shuffle($smallL);
     $numberS = str_shuffle($number);
     $subA = substr($bigB,0,5);
     $subB = substr($bigB,6,5);
     $subC = substr($bigB,10,5);
     $subD = substr($smallS,0,5);
     $subE = substr($smallS,6,5);
     $subF = substr($smallS,10,5);
     $subG = substr($numberS,0,5);
     $subH = substr($numberS,6,5);
     $subI = substr($numberS,10,5);
     $RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
     $RandCode2 = str_shuffle($RandCode1);
     $RandCode = $RandCode1.$RandCode2;
     if ($len>$min_lenght && $len<$max_lenght)
     {
     $CodeEX = substr($RandCode,0,$len);
     }
     else
     {
     $CodeEX = $RandCode;
     }
     return $CodeEX;
    }


    // generate a random string
        public static function randstring($len = 10) {
            $len = $len / 2;
            
        $timestring = microtime();
        $secondsSinceEpoch=(integer) substr($timestring, strrpos($timestring, " "), 100);
        $microseconds=(double) $timestring;
        $seed = mt_rand(0,1000000000) + 10000000 * $microseconds + $secondsSinceEpoch;
        mt_srand($seed);
        $randstring = "";
        for($i=0; $i < $len; $i++) {
          $randstring .= mt_rand(0, 9);
          $randstring .= chr(ord('A') + mt_rand(0, 24));
        }
        return($randstring);
      }


      // ------------------------------------------------------------------------------
        // encode scripts for trans numbers
        // ------------------------------------------------------------------------------
        function encode($enc_text, $iv_len = 16) {
            $var = base64_encode($enc_text);
            return str_replace("=", "", base64_encode($var.'|'.$var));
        }
    
        function decode($enc_text, $iv_len = 16) {
            $var = base64_decode($enc_text.'=');
            $var = explode("|", $var);
            return base64_decode($var[0]);
        }


}