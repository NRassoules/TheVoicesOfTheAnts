<?php
$config = array(
/**
 * Path where Opauth is accessed.
 *  - Begins and ends with /
 *  - eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
 *  - if Opauth is reached via http://auth.example.org/, path is '/'
 */
        'path' => '/views/opauth.php',

/**
 * Callback URL: redirected to after authentication, successful or otherwise
 */
        'callback_url' => '/views/done.php',

/**
 * A random string used for signing of $auth response.
 */
        'security_salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',

/**
 * Strategy
 * Refer to individual strategy's documentation on configuration requirements.
 *
 * eg.
 * 'Strategy' => array(
 *
 *   'Facebook' => array(
 *      'app_id' => 'APP ID',
 *      'app_secret' => 'APP_SECRET'
 *    ),
 *
 * )
 *
 */
        'Strategy' => array(
                // Define strategies and their respective configs here
                'Facebook' => array(
                   'app_id' => '1491810687801852',
                   'app_secret' => '266a83dbaa7bf3540ade542ed858a9b0'
                )
        ),
);