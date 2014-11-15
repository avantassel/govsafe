<?php

//http://www.govsafe.org/oauth/?code=Y2Mk%21IAAAAHpQpiaHpxOSsV0TBL6EkjH8fzj2P3RUy0mJZptfWMrjEQEAAAFubHvGbfSowgZrYDtpG_1RyYG0lXiCaj15CaOzTBz3eJTVC5GrBpW92aAWVrwUWluyoabY4K3bxrZ1SNHv2IdO6JgEcrOp3KZXAq4ytmqXLg1sGn026xbqzvboIGNkE4nwhVPpSPbAgWa7cwQV-DC2QCPr6hm7RwAE6m1BKcCQkuGT4SztPq8ELfC3pOmFQPqPQBdHiCZmridtQUx309Iptbi8vEyUNUGyIhCFa3saZJGBZIOhWOAL9NuXJryOU8dKSzW_pxA-ACpd0U2SDLj0yfQLw5nMYLXMUc9_LRqsEGnBUb_xx5ThI5kZP4fNvPbwFjwIfzrGxoZMAVGpSBuXBXP88WAC-gXFBvyWTpNJYQ&agency_name=&environment=TEST#_=_
//{"access_token":"yF6H-BtiiMuW5huUqIUCqEF-X4477KrAmeADM2fCpEilp0o8No2gma7nsGuBIeubnS3g1Qq0H-WR9KLFbhpcsyNudG6HwdzbDMtnINrliKBofZi2hFYhUA5Kvzvv9ghVORJo7EBp61sIUE-wgaKizvofwrBzB39vXxSdQ-YFenpC-e8bSLkQwFFt281lCqpAb1p3k75QQs8-PSVWuG2pEFupSA0hqVde2ff-14H2sRnBm9MDQsTBTZOOEKW67B_VBZyBb6gfSV3iXofjkUwyHPBqJpaq8AxnjQ0Ed1fOt2QPjxlBOeSATWPngMxPsgq3xiNh9yEWIz2DKJ0c9qjtfVCUs6SJXaVFG6vvyAb-u_XJlpf2MDEzmyJ6OVdYBnpEOBpTkAhgzyHzhKKOQYF8cQ2","token_type":"bearer","expires_in":"86400","refresh_token":"drO6!IAAAAEgX5TmEnw-yxVfXHBMPXr24l9rfWteGjvXVwPyCgKDDwQAAAAFhD7Px57R7rVla0-cA7n9KbvYafgndRj7XTcm5V_eOEmtKXaLgCslKTOhMiJBbJgZKr4WBrz_iRI3lk4HeVJKaQTRG9BpTU5x8_9cRUPvpfX-TTg1eXI-PuHWLabhmxRMxKv4v9rUsMNCFigNt443u9h1rJU_Fes9mxCNkw82183AFgekx44d0pxAJW3lw8b3HT0k58SnRYJr1oBLz2dOcqdhVrlJYLyBqHO75ogbSUDNmqN0SX4joLYyEV2jhgQA","scope":"get_civicid_profile"}

$appId = isset($_GET['appId'])?$_GET['appId']:'635496269291675545';
$appSecret = isset($_GET['appSecret'])?$_GET['appSecret']:'2b74d010c6384f7f9dc3452904dfc3c9';
$redirectUri = 'http://www.govsafe.org/oauth';

if(!isset($_GET['code'])){
	$params = array('client_id'=>$appId
		,'response_type'=>'code'
		,'environment'=>'TEST'
		,'redirect_uri'=>$redirectUri);

	header("Location: https://auth.accela.com/oauth2/authorize?".http_build_query($params));
	exit;

} else {

	$params = array('client_id'=>$appId
		,'client_secret'=>$appSecret
		,'redirect_uri'=>$redirectUri
		,'grant_type'=>'authorization_code'
		,'code'=>$_GET['code']);

	//open connection
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, "https://apis.accela.com/oauth2/token");
	curl_setopt($ch,CURLOPT_POST, count($params));
	curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    	'Content-Type: application/x-www-form-urlencoded',
    	'x-accela-appid: '.$appId
    ));

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);

	//TODO: save result in the DB

	header("Access-Control-Allow-Origin: *");
	header("Content-type: application/json");
	if(isset($_GET['callback']))
		echo $_GET['callback'] . ' (' . json_encode($result) . ');';	
	else
		echo json_encode($result);
	
}

?>