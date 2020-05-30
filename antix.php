<?php 
set_time_limit(0);
  error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "
{$putih}[=]{$green2}============={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======================{$putih}[=]
\r{$red}                      
       HHHHH                                   HHHH     H        {$putih}1     3     3      7{$red}                                     
       H        HHH     HHHH    HHH   H HHHH  H    H   H       HHHH    H    HHHH   HHHH  
       HHHHH   H   H   H       H   H  HH   H   HHHHH  H HHH   H____H  HHHH   __H  H      
{$putih}           H   H   H   H       H   H  H    H       H  H    H  H        H    H  H  H      
       HHHHH    HHH    H        HHH   H    H   HHHHH   HHHH    HHHH    HHH  HHHH  H      

{$putih}[=]{$green2}============={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======================{$putih}[=]
{$putih}\n";

echo $banner;

function visitor($green2, $putih, $red){
 
 function parsing($respon){
                        $one = explode('<span class="red_bold">', $respon);
                        $two = explode('</span>', $one[2]);
  return $two[0];
 };
          function mengambil($url, $header){
                        $ch = curl_init();
                              curl_setopt($ch, CURLOPT_URL, $url);
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                              curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
              $result = curl_exec($ch);
                        curl_close($ch);
  return $result;
}
   


   
  $fn = file_get_contents('xxx.txt');

        for ($i=0; $i <= 2000; $i++) { 
        $ex = explode("\n", $fn);
        $one = $ex[$i];
          if ( $one == null ) break;


         
    $exp = array($one);
   foreach ($exp as $domain) {

                          $url = "https://www.statshow.com/www/.'$domain'";
                          $res = mengambil($url, array());
                          $suc = (parsing($res));
  echo "{$green2}  Domain {$putih}$domain \n  {$red}Visitor {$putih}$suc\n";



        }
 
}

};
 


                          $to = readline("  [x] Welcome To Visitor Checker [ Enter ]: ");
                          $key = strtolower($to);  

if ($key == "n" ) {
          echo "{$green2} [=] Okky Bye Bye,Good Job\n{$putih}";die;
}

                    $string = readline("    Your File: ");
                    $baris = fopen($string, "r");
                    $membuka = fopen('xxx.txt', 'w');

      while (true) {
               $line = fgets($baris);
        if($line == null )break;
                $str_arr =  explode ("/", $line);
                $line = "$str_arr[2]";

  echo "{$green2}".$line."{$putih}\n";;
  fwrite($membuka, $line."\n");

}

  fclose($line);

              $to2 = readline(" [x] Apakah Anda Ingin Melanjutkannya? Y/N: ");
              $key2 = strtolower($to2);  

    if ($key2 == "n") {
            echo "{$green2} [=] Okky Bye Bye,Good Job\n{$putih}";die;
    }

    visitor($green2, $putih, $red);



 ?>
