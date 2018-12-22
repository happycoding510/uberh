<?php

return array(

    'IOSUser'     => array(
        'environment' =>'development',
        'certificate' => app_path().'/apns/user/xuber_user.pem',
        'passPhrase'  =>'appoets123$',
        'service'     =>'apns'
    ),
    'IOSProvider' => array(
        'environment' =>'development',
        'certificate' => app_path().'/apns/provider/xuber_provider.pem',
        'passPhrase'  =>'appoets123$',
        'service'     =>'apns'
    ),
    'AndroidUser' => array(
        'environment' =>'development',
        'apiKey'      => env('ANDROID_PROVIDER_PUSH_KEY','yourAPIKey'),
        'service'     =>'gcm'
    ),
    'AndroidProvider' => array(
        'environment' =>'development',
        'apiKey'      => env('ANDROID_USER_PUSH_KEY','yourAPIKey'),
        'service'     =>'gcm'
    )

);