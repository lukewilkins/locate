Locate
======

Locate is a Laravel bundle for easily accessing visitor geolocation data.

Installation via Artisan
-------
    php artisan bundle:install locate

Configuration
-------
*   Open /bundles/locate/config/options.php
*   From here you can manage the **refresh rate**, **service priority**, **service API information**, and **fallback details**

Usage
-------
    echo 'Service Used: ' . Locate::get('service') . '<br/>';
    echo 'Timestamp: ' . Locate::get('timestamp') . '<br/>';
    echo 'IP: ' . Locate::get('ip') . '<br/>';
    echo 'City: ' . Locate::get('city') . '<br/>';
    echo 'State: ' . Locate::get('state') . '<br/>';
    echo 'State Acronym: ' . Locate::get('state_code') . '<br/>';
    echo 'Country: ' . Locate::get('country') . '<br/>';
    echo 'Country Acronym: ' . Locate::get('country_code') . '<br/>';
    echo 'Zipcode: ' . Locate::get('zipcode') . '<br/>';
    echo 'Latitude: ' . Locate::get('lat') . '<br/>';
    echo 'Longitude: ' . Locate::get('lng') . '<br/>';

Services Currently Supported
-------
*   **IPInfoDB** - Requires API key: http://ipinfodb.com/register.php
*   **FreeGeoIP**
*   _... more on the way_