# ip-location
Simpliest way to get user's location using their IP address.

The application takes an IP address as input and retrieves information such as country, city, region, ISP name (org), geolocation (latitude,longitude), postal code, timezone, response_time etc. This project demonstrate to do so using PHP. But you can implement in any language by using **curl** .

__How to use :__

Clone the repository
<pre>
git clone https://github.com/partho5/ip-location.git
</pre>

1. Open `index.php` file. There you replace the sample IP with your IP address for which you want to find location.
2. You need to get an API key from **https://api.iplocation.net** . It's free, though they have paid features. Anyway simply signup and you will get an API key. No card information required as of the time of writing this instruction (August 14, 2023).

Create a file named `config.php` and write :
```php
<?php

    define('IPINFO_API_KEY', 'API KEY obtained from api.iplocation.net');
```

Now host the project in your server or localhost. Visit index.php file.<br>Sample output I got : <br>

!['response screenshot'](https://i.ibb.co/PgpCwpr/response.png)
