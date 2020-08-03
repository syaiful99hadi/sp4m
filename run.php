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
          {$purple}       [ LINK: https://github.com/km37id/ ]
{$putih}[=]{$green2}====={$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}======{$putih}[=]
{$putih}\n";

echo $banner; 
echo "[ 1 ] Lock Mail \n";
echo "[ 2 ] Mass Mail \n";

$key = readline("[ * ] Select[ 1/2 ]: ");

	function curl( $email, $nick ){
$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://texale.com/spm.php');
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'mail='.$email.'&nick='.$nick.'&submit=Submit Query');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
							print_r($out);
							return $out;

};


if ( $key == 2 ) {

	$data = readline(" List Mail: ");
  $nick = readline(" Nick: ");
  $fn = file_get_contents($data);

        for ($i=0; $i <= 9999999; $i++) { 
        $ex = explode("\n", $fn);
        $one = $ex[$i];
          if ( $one == null ) break;
    $exp = array($one);
   foreach ($exp as $domain) {
		curl( $domain, $nick );
		echo "[{$green2} $i {$putih}]{$green2} Successfully Sended to {$lblue2}".$domain." {$green2}Mantap Bro{$putih}\n";
                          
        }

}
} else{
  $email = readline(" Lock Mail: ");
  $nick = readline(" Nick: ");
  $sleep = readline(" Jeda: ");
  for ($i=1; $i <= 50 ; $i++) { 
   curl( $email, $nick );
   echo "[{$green2} $i {$putih}]{$green2} Successfully Sended to {$lblue2}".$email." {$green2}Mantap Bro{$putih}\n";
   sleep($sleep);
    }
  }
    






?>
