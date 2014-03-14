<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$kelloNyt= date('H:i');

header("Content-type: text/xml");
if ( $kelloNyt >= "09:30" and $kelloNyt <= "10:00" ){
	/*Ohjataan eteenpäin jos kello on 9:30-10:00 https://www.twilio.com/docs/api/twiml/dial*/
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Response>';
	echo    '<Dial timeout="10" record="true"></Dial>';
	echo '</Response>';


}
else {
	/*Tietokannasta sanotaan sanoma https://www.twilio.com/docs/api/twiml*/
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Response>';
	echo    '<Say voice="woman">Our customer support is not open at the moment. Please call again later.</Say>';
	echo '</Response>';
}


















