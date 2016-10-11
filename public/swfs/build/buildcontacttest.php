<?php
require_once("../contact/dealer.php");

$dealer = str_replace(chr(38), "_", str_replace('"', '', $values[0]));
$rep = htmlspecialchars(str_replace('"', '', $values[1]));

function request_var($varName, $alt='') {
	global ${$varName};
	if(isset($_REQUEST["{$varName}"])) {
		$trans = array(
			"&" => "and",
			"é" => "e"
		);
		${$varName} = trim(strtr($_REQUEST["{$varName}"], $trans));
		return ${$varName};
	} else {
		${$varName} = $alt;
		return ${$varName};
	}
}

//----------------------<flashform>------------------------\\
request_var('fname');
request_var('lname');
request_var('city');
request_var('state');
request_var('zip');
request_var('country');
request_var('phone');
request_var('email');
request_var('model');
request_var('deck');
request_var('deckAccent');
request_var('hull');
request_var('mainPanel');
request_var('secondPanel');
request_var('swimPlatform');
request_var('graphic');
request_var('freerideAft');
request_var('freerideBow');
request_var('intPkg');
request_var('accentVinyl');
request_var('accentTexture');
request_var('dashAccent');
$WEB_FROM = "BUILD";
//----------------------</flashform>------------------------\\

/*echo $model."<br />";
echo $deck."<br />";
if(isset($_GET["deckAccent"])) {
	echo $deckAccent."<br />";
}
echo $hull."<br />";
echo $mainPanel."<br />";
if(isset($_GET["secondPanel"])) {
	echo $secondPanel."<br />";
}
echo $swimPlatform."<br />";
echo $graphic."<br />";
if(isset($_GET["freerideAft"])) {
	echo $freerideAft."<br />";
}
if(isset($_GET["freerideBow"])) {
	echo $freerideBow."<br />";
}
echo $intPkg."<br />";
echo $accentVinyl."<br />";
echo $accentTexture."<br />";
if(isset($_GET["dashAccent"])) {
	echo $dashAccent."<br />";
}
echo $fname."<br />";
echo $lname."<br />";
echo $email."<br />";
echo $zip."<br />";
if(isset($_GET["phone"])) {
	echo $phone."<br />";
}
if(isset($_GET["city"])) {
	echo $city."<br />";
}
if(isset($_GET["_state"])) {
	echo $_state."<br />";
}*/

//----------------------<slx>------------------------\\
$subject = "Tige.com/build ".$WEB_FROM."";
$headers = "From: Tige Website Build Application <build@tige.com>\r";
$message = "";
$message .= "<?xml version=\"1.0\"?>\n";
$message .= "<webData>\n";
$message .= "<first_name>".ucwords($fname)."</first_name>\n";
$message .= "<last_name>".ucwords($lname)."</last_name>\n";
$message .= "<city>$city</city>\n";
$message .= "<state>$_state</state>\n";
$message .= "<zip>$zip</zip>\n";
$message .= "<country>$country</country>\n";
$message .= "<othercountry>$otherc</othercountry>\n";
$message .= "<county>$county</county>\n";
$message .= "<phone>$phone</phone>\n";
$message .= "<email>$email</email>\n";
$message .= "<model>Boat Interest: $model</model>\n";
if($referral != "") {
	$message .= "<heard_of_tige_from>$referral</heard_of_tige_from>\n";
} else {
	$message .= "<heard_of_tige_from>Referred By: Internet</heard_of_tige_from>\n";
}
$message .= "<where>$where</where>\n";
$message .= "<which>$which</which>\n";
$message .= "<other>$other</other>\n";
if($WEB_FROM == "BROCHURE REQUEST") {
	$message .= "<yes_brochure>Yes</yes_brochure>\n";
} else {
	$message .= "<no_brochure>No</no_brochure>\n";
}
$message .= "<comments>{$comments}</comments>\n";
$message .= "<dealer>$dealer</dealer>\n";
$message .= "<rep>$rep</rep>\n";
$message .= "<address>N/A</address>\n";
$message .= "</webData>\n";
$to = 'slxleadstr@tige.com';
$to .= 'clint@tige.com';
//$to = 'clint@tige.com';
if (mail($to, $subject, $message, $headers)) {
//----------------------</slx>------------------------\\

//----------------------<info>------------------------\\
	$subject = "Tige.com/Build ".$WEB_FROM."";
	$headers = "From: Tige Website Build Application <build@tige.com>\r\n";
	$message = "You received an e-mail via your website. The user submitted the following message:\n\n";
	$message .= "DEALER: ".$dealer."\n";
	$message .= "REPRESENTATIVE: ".$rep."\n";	
	$message .= "FIRST NAME: ".ucwords($fname)."\n";	
	$message .= "LAST NAME: ".ucwords($lname)."\n";
	if(isset($_GET["city"])) {
		$message .= "CITY: $city\n";
	}
	if(isset($_GET["_state"])) {	
		$message .= "STATE/PROVINCE: $_state\n";
	}
	$message .= "ZIP/POSTAL: $zip\n";		
	if ($phone != '') {
		$message .= "PHONE: $phone\n";
	}	
	$message .= "E-MAIL: $email\n";	
	if ($model != '') {
		$message .= "Boat Interest: $model\n";
	}
	$message .= "MODEL: ".$model."\n";
	$message .= "DECK COLOR: ".$deck."\n";	
	if(isset($_GET["deckAccent"])) {
		$message .= "DECK ACCENT COLOR: ".$deckAccent."\n";	
	}
	$message .= "HULL COLOR: ".$hull."\n";
	$message .= "MAIN PANEL COLOR: ".$mainPanel."\n";
	if(isset($_GET["secondPanel"])) {
		$message .= "SECOND PANEL COLOR: ".$secondPanel."\n";	
	}
	$message .= "SWIM PLATFORM COLOR: ".$swimPlatform."\n";
	$message .= "GRAPHIC: ".$graphic."\n";
	if(isset($_GET["freerideAft"])) {
		$message .= "GRAPHIC AFT COLOR: ".$freerideAft."\n";	
	}
	if(isset($_GET["freerideBow"])) {
		$message .= "GRAPHIC BOW COLOR: ".$freerideBow."\n";	
	}
	$message .= "INTERIOR PACKAGE: ".$intPkg."\n";
	$message .= "ACCENT VINYL COLOR: ".$accentVinyl."\n";
	$message .= "ACCENT VINYL TEXTURE: ".$accentTexture."\n";
	if(isset($_GET["dashAccent"])) {
		$message .= "DASH ACCENT COLOR: ".$dashAccent."\n";	
	}
	$message = stripslashes($message);
	if(mail('info@tige.com', $subject, $message, $headers)) {
	//if(mail('clint@tige.com', $subject, $message, $headers)) {
//----------------------</info>------------------------\\
		// nothing
//----------------------<error>------------------------\\
	} else {
		$subject = "Tige.com/build ".$WEB_FROM."";
		$headers = "From: Tige Website info <build@tige.com>\r";
		$message = "slxleadstr was successful but info was not.";
		mail('clint@tige.com', $subject, $message, $headers);
	}
} else {
	//----------------------<info>------------------------\\
	$subject = "Tige.com/Build ".$WEB_FROM."";
	$headers = "From: Tige Website Build Application <build@tige.com>\r\n";
	$message = "You received an e-mail via your website. The user submitted the following message:\n\n";
	$message .= "DEALER: ".$dealer."\n";
	$message .= "REPRESENTATIVE: ".$rep."\n";	
	$message .= "FIRST NAME: ".ucwords($fname)."\n";	
	$message .= "LAST NAME: ".ucwords($lname)."\n";
	if(isset($_GET["city"])) {
		$message .= "CITY: $city\n";
	}
	if(isset($_GET["_state"])) {	
		$message .= "STATE/PROVINCE: $_state\n";
	}
	$message .= "ZIP/POSTAL: $zip\n";		
	if ($phone != '') {
		$message .= "PHONE: $phone\n";
	}	
	$message .= "E-MAIL: $email\n";	
	if ($model != '') {
		$message .= "Boat Interest: $model\n";
	}
	$message .= "MODEL: ".$model."\n";
	$message .= "DECK COLOR: ".$deck."\n";	
	if(isset($_GET["deckAccent"])) {
		$message .= "DECK ACCENT COLOR: ".$deckAccent."\n";	
	}
	$message .= "HULL COLOR: ".$hull."\n";
	$message .= "MAIN PANEL COLOR: ".$mainPanel."\n";
	if(isset($_GET["secondPanel"])) {
		$message .= "SECOND PANEL COLOR: ".$secondPanel."\n";	
	}
	$message .= "SWIM PLATFORM COLOR: ".$swimPlatform."\n";
	$message .= "GRAPHIC: ".$graphic."\n";
	if(isset($_GET["freerideAft"])) {
		$message .= "GRAPHIC AFT COLOR: ".$freerideAft."\n";	
	}
	if(isset($_GET["freerideBow"])) {
		$message .= "GRAPHIC BOW COLOR: ".$freerideBow."\n";	
	}
	$message .= "INTERIOR PACKAGE: ".$intPkg."\n";
	$message .= "ACCENT VINYL COLOR: ".$accentVinyl."\n";
	$message .= "ACCENT VINYL TEXTURE: ".$accentTexture."\n";
	if(isset($_GET["dashAccent"])) {
		$message .= "DASH ACCENT COLOR: ".$dashAccent."\n";	
	}
	$message = stripslashes($message);
	mail('info@tige.com, clint@tige.com', $subject, $message, $headers);
	$subject = "Tige.com/build ".$WEB_FROM."";
	$headers = "From: Tige Website slxleadstr <build@tige.com>\r";
	$message = "slxleadstr was not successful.";
	mail('clint@tige.com', $subject, $message, $headers);
}
//----------------------</error>------------------------\\

exit();
?>