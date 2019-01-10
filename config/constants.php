<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    */




    'profile_upload' => 'uploads/profile_photos',

     'admin' => [
         'email' => 'puspitagit77@gmail.com'
     ],
    'jobs' => [
        'hired' => 'You have not accepted any job offers yet.',
        'completed' => 'You have not completed any job offers yet.',
        'applied' => 'You have not applied to any job offers yet.',

    ],
    'send_interval_email' => [
        1 => 'Everyday',
        2 => 'Once every 2 days',
        3 => 'Once every 3 days',
        7 => 'Once a week'
    ]

];