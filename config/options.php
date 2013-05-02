<?php

return array(

	// Number of minutes before location data should be refreshed
	// Set to "0" to not automatically refresh
	'refresh_rate' => 0,

	// MaxMind API Key (http://www.maxmind.com/app/web_services#city)
	'maxmind_key' => '',

	// IPInfoDB API Key (http://ipinfodb.com/register.php)
	'ipinfodb_key' => '',

	// Service priority
	// Options: 'MaxMind', 'IPInfoDB', 'FreeGeoIP'
	'service_priority' => array(
        'FreeGeoIP',
		'IPInfoDB',
		//'MaxMind',
	),

	// Fallback IP Address
	// Allows you to use a fallback IP address when the user's IP
	// is 127.0.0.1 or cannot be determined
	'fallback_ip' => '108.168.252.214',
	
    // Trust Proxy Data
    // When running in the cloud behind a load balancer, enable this
    // option to get the proper end user IP via the "HTTP_X_FORWARDED_FOR"
    // header rather than the "REMOTE_ADDR" server var
    'trustproxydata'    => true,

);