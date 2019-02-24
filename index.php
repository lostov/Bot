<?php
function RequestSend($method,$datas=[])
	{
		$url = "https://api.telegram.org/bot672927107:AAEx1phGMwfhdn9ufNOCaLGsMzj5BXwkP58/".$method;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
		$res = curl_exec($ch);
		if(curl_error($ch))
			{ 
				var_dump(curl_error($ch));
			}
		else
			{ 
				return json_decode($res);
			} 
	}
date_default_timezone_set('Asia/Tashkent');
$desc = date('d.m.Y H:i') . "\n📞 +998 97 420 9008\n☎️ +998 95 196 9008\n📨  telegram orqali: @internationalStudyService\n_______________________\n📌Manzil: Yunusobod tumani, (Oldingi Toshkent Moliya Instituti binosi hozirgi Toshkent Arxitektura instituti)";
$method = 'setChatDescription';
$datas = ['chat_id' => -1001175758497,'description' => $desc ];
var_dump(RequestSend($method,$datas));
?>
