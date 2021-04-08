<?php

return [
    'url'           => 'https://www.digicert.com/services/v2',
    'api_key'       => env('DIGICERT_APIKEY', ''), // https://www.digicert.com/secure/automation/api-keys/
    'rate_limit'    => 950,
    'rate_interval' => 300,
];
