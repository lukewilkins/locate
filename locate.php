<?php

class Locate
{
	public static function get($key)
	{
		if ( ! Session::has('locate')) self::refresh();
		
		$locate = Session::get('locate');
		if (isset($locate[$key])) return $locate[$key];

		return null;
	}

	public static function refresh()
	{
		// Base structure
		$locate_data = array(
			'ip' => Request::ip() == '127.0.0.1' ? '184.152.10.138' : Request::ip(),
			'city' => null,
			'state' => null,
			'country' => null,
			'lat' => null,
			'lng' => null,
		);

		// We'll start with IPInfoDB
		$options = array(
			'key' => 'dfed82baa036daea52ee8ce49ac60923416bd0a267a3a2ac0a88b471c96c1c76',
			'ip' => $locate_data['ip'],
			'format' => 'json',
		);

		$request = Requests::get('http://api.ipinfodb.com/v3/ip-city?' . http_build_query($options));

		if ($request->success)
		{
			$response = json_decode($request->body, true);
			
			if ($response['statusCode'] == 'OK')
			{
				$locate_data['city'] = ucwords(strtolower($response['cityName']));
				$locate_data['state'] = ucwords(strtolower($response['regionName']));
				$locate_data['country'] = ucwords(strtolower($response['countryName']));
				$locate_data['lat'] = $response['latitude'];
				$locate_data['lng'] = $response['longitude'];

				Session::put('locate', $locate_data);
			}
		}
	}
}