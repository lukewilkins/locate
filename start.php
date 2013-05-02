<?php

if(Config::get('locate::options.trustproxydata',false)) Symfony\Component\HttpFoundation\Request::trustProxyData();

Autoloader::map(array(
	'Locate' => Bundle::path('locate') . '/locate.php',
));