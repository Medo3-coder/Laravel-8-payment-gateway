<?php
return [
    'client_id' => 'AT9Ghcl64HC3kvoYvwEocVacZWW02ei9TWfXAouPJ2ydwuZoe9DtjDGtFzklQXtqXLv84I2QUXn90JTt',
	'secret' => 'EMyP7pntvm2JMNkvtTcVt_biG3BezMWIy7vlK0amLlDe1GSbaqu8BaFxJSt3nog-lqYtefGq6Uns4t_B',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
