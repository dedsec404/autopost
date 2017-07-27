<?php
$access_token= "EAAAAAYsX7TsBAKFb9JDLEImd946w4PeT2gi1gAlBYrQDgaU7uWQrd8IKHpKtYokmBCsMB9XtKzZBG1ai7Ww1u0jBSKjDUs1kZA0hSZBs1M1ZCrlSOdXUS6c2p6cEiNAOimdTVZBEuZA9j0MMKYqAmOGZB24wlWGZARS6imCRiZCNRTJqGBEZAHT3iKU3BP8GVHotTa2ZBS5S5nYNaepLGeQvjO2";

$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$dg = json_decode(auto('https://graph.facebook.com/me/groups?access_token='.$access_token.'&method=GET&limit=49'),true); //Limit Bisa diubah Sesuka Kalian

$message= ("
Tutorial Carding Dari dari 0
From Zero to Hero
Biar Di Bilang Master :V
http://bit.ly/2uC9IPE
"); //Pesan Yang Mau diPost

for($i=1;$i<=count($dg[data]);$i++){
if(!ereg($dg[data][$i-1][id])){
echo auto('https://graph.facebook.com/'.$dg[data][$i-1][id].'/feed?message='.urlencode($message).'&access_token='.$access_token.'&method=post').'<hr/>';
   }
}


function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }
?>