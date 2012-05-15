<?php

return array(

	// Number of minutes before location data should be refreshed
	// Set to "0" to not automatically refresh
	'refresh_rate' => 0,

	// IPInfoDB API Key (http://ipinfodb.com/register.php)
	'ipinfodb_key' => 'dfed82baa036daea52ee8ce49ac60923416bd0a267a3a2ac0a88b471c96c1c76',

	// Service priority
	// Options: 'IPInfoDB', 'FreeGeoIP'
	'service_priority' => array(
		'IPInfoDB',
		'FreeGeoIP',
	),

	// Fallback IP Address
	// Allows you to use a fallback IP address when the user's IP
	// is 127.0.0.1 or cannot be determined
	'fallback_ip' => '64.90.182.55',

);