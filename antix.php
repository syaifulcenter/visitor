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
{$putih}[=]{$green2}====={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======{$putih}[=]
\r{$red}                      
                 █████╗ ███╗   ██╗████████╗██╗██╗  ██╗     
                ██╔══██╗████╗  ██║╚══██╔══╝██║╚██╗██╔╝  {$putih}||thanks to {$red}
                ███████║██╔██╗ ██║   ██║   ██║ ╚███╔╝   {$putih}||my friends
 {$putih}               ██╔══██║██║╚██╗██║   ██║   ██║ ██╔██╗   {$putih}||Author
                ██║  ██║██║ ╚████║   ██║   ██║██╔╝ ██╗  {$putih}||by Kemet_ID
                ╚═╝  ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝╚═╝  ╚═╝    
          {$purple}[ LINK: https://github.com/km37id/antix-visitor ]
{$putih}[=]{$green2}====={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======{$putih}[=]
{$putih}\n";

echo $banner;

function visitor($green2, $putih, $red, $suc, $vis, $data){
 
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
                              curl_setopt($ch,CURLOPT_TIMEOUT,10);
              $result = curl_exec($ch);
                        curl_close($ch);
  return $result;
}

  $fn = file_get_contents($data);

          mkdir("Result");
          mkdir("Result/UP");
          mkdir("Result/DOWN");
          $dateup = "Result/UP/UP-".date("d-m-Y")."_@Antix";
          $datedown = "Result/DOWN/DOWN-".date("d-m-Y")."_@Antix";
         $up = fopen($dateup.".txt", 'w+');
         $down = fopen($datedown.".txt", 'w+');

        for ($i=0; $i <= 2000; $i++) { 
        $ex = explode("\n", $fn);
        $one = $ex[$i];
          if ( $one == null ) break;
    $exp = array($one);
   foreach ($exp as $domain) {

                          $url = "https://www.statshow.com/www/.'$domain'";
                          $res = mengambil($url, array());
                          $suc = (parsing($res));

                          if ($suc <= $vis){
         echo "{$red}         Domain {$putih}$domain \n         {$red}Visitor {$putih}$suc\n";
                          fwrite($down, $domain."\n");

                          }else{
        echo "{$green2}         Domain {$putih}$domain \n         {$green2}Visitor {$putih}$suc\n";
                          fwrite($up, $domain."\n");
                          }
        }
}
} 
  echo "{$green2} [ 1 ] Explode Site\n";
  echo " [ 2 ] Single Check Visitor\n";
  echo " [ 3 ] Mass Check List Visitor{$putih}\n";
  $pass = readline(" [x] SELECT BOT [ 1/2/3 ]: ");sleep(1);


if ($pass == 1) {

//input
  $string = readline("    [-] File Explode: ");
  $wfile = readline("    [-] Save: ");
  mkdir("Result");
  mkdir("Result/Explode");
  $baris = fopen($string, "r");
  $datex = "Result/Explode/EPD-".date("d-m-Y")."_@Antix";
         $membuka = fopen($datex.".txt", 'w+');
  echo "\n{$red2}        Loading Explode Your List{$putih}";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo " Done\n\n{$putih}";
  while (true) {
  $line = fgets($baris);
  if($line == null )break;

  $str_arr =  explode ("/", $line);
  $line = "$str_arr[2]";
  echo "\n{$green2} ".$line;
  fwrite($membuka, $line."\n");


  // echo $line;
}
echo "{$putih}.";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo "Done\n";

  fclose($line);die;

}elseif ($pass == 2) {
    $domain = readline("  ╚═ [-] Your Single Site: ");

           function parsing($respon){
                        $one = explode('<span class="red_bold">', $respon);
                        $two = explode('</span>', $one[2]);
  return $two[0];
}
          function mengambil($url, $header){
                        $ch = curl_init();
                              curl_setopt($ch, CURLOPT_URL, $url);
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                              curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                              curl_setopt($ch,CURLOPT_TIMEOUT,10);
              $result = curl_exec($ch);
                        curl_close($ch);
                        sleep(3);
  return $result;
}
            echo "\n{$red2}        Loading Check Your Visitor Site{$putih}";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo " Done\n\n{$putih}";

                          $url = "https://www.statshow.com/www/.'$domain'";
                          $res = mengambil($url, array());
                          $suc = (parsing($res));

        echo "{$green2}         Domain {$putih}$domain \n         {$green2}Visitor {$putih}$suc\n\n";die;
  }else{


    $keydat1 = readline("  ╚═ [x] Continue OR Don't Explode File:[ Y/N ] ");sleep(1);
    $keydat2 = strtolower($keydat1);  
    if ($keydat2 == "n") {
                    $string = readline("      ╚═ [x] Your File: ");sleep(1);
                    $vis = readline("         [x] Target Visitor: ");
                    echo "\n{$red2}         Loading Read Your List Site{$putih}";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo " Done\n\n{$putih}";
                    sleep(2);
                    $data = $string;
    visitor($green2, $putih, $red, $suc, $vis, $data);die;

    }else{



                    $string = readline("      ╚═ [+] Your Explode File: ");
                    $baris = fopen($string, "r");
                    $membuka = fopen('_tmp_.txt', 'w');
                echo "\n{$red2}         Loading Explode Your List Site{$putih}";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo " Done\n\n";
                sleep(2);

      while (true) {
               $line = fgets($baris);
        if($line == null )break;
                $str_arr =  explode ("/", $line);
                $line = "$str_arr[2]";

  // echo "{$green2}".$line."{$putih}\n";
  fwrite($membuka, $line."\n");

}

  fclose($line);

              $to2 = readline(" [x] continue to check site visitors:[ Y/N ]: ");sleep(1);
              $key2 = strtolower($to2);  

    if ($key2 == "n") {
            echo "\n{$red2}        https://github.com/km37id/{$putih}";sleep(1);echo ".";sleep(1);echo "Close Program";sleep(1);die;
    }
    $vis = readline("  ╚═ [x] Target Visitor: ");
    $data = "_tmp_.txt";
    visitor($green2, $putih, $red, $suc, $vis, $data);die;

    }

  }

 ?>
