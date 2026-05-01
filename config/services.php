<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'recaptcha' => [
        'site' => env('RECAPTCHA_SITE_KEY'),
        'secret' => env('RECAPTCHA_SECRET_KEY'),
    ],

    /*
    |--------------------------------------------------------------------------
    | GNG Finance Services (Content)
    |--------------------------------------------------------------------------
    | Used for CMS-like service listing without database.
    | Access via: config('services.gng_finance_services')
    */

    // 'gng_finance_services' => [
    //     [
    //         'title' => 'Clean Energy Project Finance',
    //         'slug' => 'clean-energy-project-finance',
    //         'image' => 'assets/images/service/09.jpg',
    //         'summary' => 'GNG Finance provides structured financing for bankable clean energy projects—from development through construction and operation.',
    //         'description' => 'Our solutions cover feasibility support, SPV-based structures, debt arrangement, refinancing, and transaction advisory—helping sponsors reach financial close efficiently.',
    //     ],
    //     [
    //         'title' => 'Capital Structuring & Investment Advisory',
    //         'slug' => 'capital-structuring-investment-advisory',
    //         'image' => 'assets/images/service/09.jpg',
    //         'summary' => 'We design efficient capital stacks that align investor expectations with project performance and sustainability outcomes.',
    //         'description' => 'Our advisory covers blended finance structuring, PPP advisory, financial modelling, investor readiness, and transaction support for scalable energy investments.',
    //     ],
    //     [
    //         'title' => 'Solar, Wind & Storage Financing',
    //         'slug' => 'solar-wind-storage-financing',
    //         'image' => 'assets/images/service/09.jpg',
    //         'summary' => 'Specialized financing for solar PV, wind power, and battery storage solutions across utility, C&I, and hybrid deployments.',
    //         'description' => 'We structure facilities to match cashflows and performance—supporting procurement, installation, expansion, and asset refinancing.',
    //     ],
    //     [
    //         'title' => 'Off-Grid & Rural Electrification',
    //         'slug' => 'off-grid-rural-electrification',
    //         'image' => 'assets/images/service/09.jpg',
    //         'summary' => 'Tailored financing for mini-grids, solar home systems, and productive-use energy solutions that expand access sustainably.',
    //         'description' => 'We support community electrification models, developer programs, and impact-aligned capital structures designed for scale.',
    //     ],
    //     [
    //         'title' => 'Energy Efficiency Financing',
    //         'slug' => 'energy-efficiency-financing',
    //         'image' => 'assets/images/service/09.jpg',
    //         'summary' => 'Performance-driven funding for energy efficiency upgrades across industrial, commercial, and institutional facilities.',
    //         'description' => 'We finance retrofits and efficiency programs structured around measurable savings and long-term operational value.',
    //     ],
    // ],


    'gng_finance_services' => [
        'clean-energy-project-finance' => [
            'title' => 'Clean Energy Project Finance',
            'slug' => 'clean-energy-project-finance',
            'image' => 'assets/images/service/09.jpg',
            'summary' => 'GNG Finance provides structured financing for bankable clean energy projects—from development through construction and operation.',
            'description' => 'Our solutions cover feasibility support, SPV-based structures, debt arrangement, refinancing, and transaction advisory—helping sponsors reach financial close efficiently.',
        ],

        'capital-structuring-investment-advisory' => [
            'title' => 'Capital Structuring & Investment Advisory',
            'slug' => 'capital-structuring-investment-advisory',
            'image' => 'assets/images/service/09.jpg',
            'summary' => 'We design efficient capital stacks that align investor expectations with project performance and sustainability outcomes.',
            'description' => 'Our advisory covers blended finance structuring, PPP advisory, financial modelling, investor readiness, and transaction support for scalable energy investments.',
        ],

        'solar-wind-storage-financing' => [
            'title' => 'Solar, Wind & Storage Financing',
            'slug' => 'solar-wind-storage-financing',
            'image' => 'assets/images/service/09.jpg',
            'summary' => 'Specialized financing for solar PV, wind power, and battery storage solutions across utility, C&I, and hybrid deployments.',
            'description' => 'We structure facilities to match cashflows and performance—supporting procurement, installation, expansion, and asset refinancing.',
        ],


    ],

];
