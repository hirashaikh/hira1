<?php
date_default_timezone_set('Asia/Islamabad');
$yx=opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;
$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=02&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a'); 
fwrite($y,$x); fclose($y);
$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$half ='@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';
$me = ' '.$me[name].' ';
$me= json_decode(auto('https://graph.facebook.com/me?fields=id,name&access_token='.$token),true);
$nam=$me[name]; $ama= explode(' ',$nam); $nama=$ama[0];
$user ='@['.$me[id].':'.$ama[0].']';
$kata= array('
cinta.php',
'motivasi.php',
'motto.php','
bijak.php'
,); 

$jam= array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array('',);

$ucapan = gmdate('H',time()+7*3600);
$ucapan = str_replace($jam,$sapa,$ucapan);

$emo=array ('🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',);
$emoticon=$emo[rand(0,count($emo)-1)];

$hari=array(1=>
"Monday",
   "Tuesday",
      "Wednesday",
        "Thursday",
      "Friday",
   "Saturday",
"Sunday"
);

$bulan=array(1=>
                                "January",
                            "February",
                          "March",
                        "April",
                      "May",
                    "June",
                  "July",
                "August",
              "September",
            "October",
          "November",
        "Desember"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bln = $bulan[gmdate('n',time()+60*60*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
$TimeZone="+05:00";
	$hour=gmdate("H", time() + ($TimeZone * 60 * 60));
	if ($hour > 20) $greetings = "gσσ∂ иιgнт 😗 ";
	else if ($hour > 17) $greetings = "gσσ∂ єνєиιиg 😗";
	elseif ($hour > 11) $greetings = "gσσ∂ αfтєяиσσи 😗 ";
	elseif ($hour < 12) $greetings = "gσσ∂ мσяиιиg 😗 "; 

$pesan= array('
'.$emoticon.' '.$greetings.' '.$mr.' '.$emoticon.'

💙 OWNER 💙 @[100011173993731:Hira] 💙 '.$user.' 💙

❤ SITE =>> HIRA-BOT,TK ❤ '
,);
$pesan=$pesan[rand(0,count($pesan)-1)];
$message=$pesan;

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($message).'&access_token='.$token.'&method=POST');
echo '<center><hr>COMMENTED TO => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}
function auto($url){ 
$data = curl_init(); 
curl_setopt($data,CURLOPT_RETURNTRANSFER,1); 
curl_setopt($data,CURLOPT_URL, $url); 
$hasil = curl_exec($data); 
curl_close($data); 
return $hasil;
}
?>