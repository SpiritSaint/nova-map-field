<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Latitude
    |--------------------------------------------------------------------------
    |
    | Using this item, you can specify default latitude for map fields
    |
    */

    'default-latitude' => 0,

    /*
    |--------------------------------------------------------------------------
    | Default Longitude
    |--------------------------------------------------------------------------
    |
    | Using this item, you can specify default longitude for map fields
    |
    */

    'default-longitude' => 0,

    /*
    |--------------------------------------------------------------------------
    | Zoom
    |--------------------------------------------------------------------------
    |
    | Using this item, you can specify default zoom for map fields
    |
    */

    'zoom' => 12,

    'controls' => [
        /*
        |--------------------------------------------------------------------------
        | Zoom Control
        |--------------------------------------------------------------------------
        |
        | Using this item, you can toggle displaying zoom buttons on maps
        |
        */

        'zoom-control' => true,

        /*
        |--------------------------------------------------------------------------
        | Zoom Slider
        |--------------------------------------------------------------------------
        |
        | Using this item, you can toggle displaying zoom slider on maps
        |
        */

        'zoom-slider' => true,

        /*
        |--------------------------------------------------------------------------
        | Full Screen Control
        |--------------------------------------------------------------------------
        |
        | Using this item, you can toggle displaying full-screen button on maps
        |
        */

        'full-screen-control' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Map Height
    |--------------------------------------------------------------------------
    |
    | Using this item, you can specify default height of maps
    |
    */

    'map-height' => 400,

    /*
    |--------------------------------------------------------------------------
    | Marker Icon
    |--------------------------------------------------------------------------
    |
    | Using this item, you can change marker icon
    | Available Icons: 1, 2, 3
    |
    */

    'icon' => 1,

    /*
    |--------------------------------------------------------------------------
    | Show Detail Button
    |--------------------------------------------------------------------------
    |
    | Using this item, you can show/hide detail button on detail pages
    |
    */

    'show-detail-button' => true,

    'search' => [
        /*
        |--------------------------------------------------------------------------
        | Enable/Disable Search Box
        |--------------------------------------------------------------------------
        |
        | Using this item, you can toggle displaying search box on maps
        |
        */

        'enable' => true,

        /*
        |--------------------------------------------------------------------------
        | Search Provider
        |--------------------------------------------------------------------------
        |
        | Using this item, you can specify search provider
        | Available providers: osm, mapquest, photon, pelias, bing, opencage
        |
        */

        'provider' => \Mostafaznv\NovaMapField\DTOs\MapSearchProvider::OSM(),

        /*
        |--------------------------------------------------------------------------
        | API Key
        |--------------------------------------------------------------------------
        |
        | Using this item, you can specify API Key if required
        |
        */

        'api-key' => '',

        /*
        |--------------------------------------------------------------------------
        | Enable/Disable Autocomplete
        |--------------------------------------------------------------------------
        |
        | Using this item, you can toggle autocomplete feature for search box
        |
        */

        'autocomplete' => false,

        /*
        |--------------------------------------------------------------------------
        | Autocomplete Min Length
        |--------------------------------------------------------------------------
        |
        | The minimum number of characters to trigger search
        |
        */

        'autocomplete-min-length' => 2,

        /*
        |--------------------------------------------------------------------------
        | Autocomplete Timeout
        |--------------------------------------------------------------------------
        |
        | The minimum number of ms to wait before triggering search action
        |
        */

        'autocomplete-timeout' => 200,

        /*
        |--------------------------------------------------------------------------
        | Language
        |--------------------------------------------------------------------------
        |
        | Preferable language
        |
        */

        'language' => 'en-US',

        /*
        |--------------------------------------------------------------------------
        | Placeholder
        |--------------------------------------------------------------------------
        |
        | Placeholder for text input
        |
        */

        'placeholder' => 'Search for an address',

        /*
        |--------------------------------------------------------------------------
        | Search Box Type
        |--------------------------------------------------------------------------
        |
        | Using this item, you can specify type of search box
        | Available types: button, text-field
        |
        */

        'box-type' => \Mostafaznv\NovaMapField\DTOs\MapSearchBoxType::TEXT_FIELD(),

        /*
        |--------------------------------------------------------------------------
        | Search Result Limit
        |--------------------------------------------------------------------------
        |
        | Limit of results
        |
        */

        'limit' => 5,

        /*
        |--------------------------------------------------------------------------
        | Search Result Limit
        |--------------------------------------------------------------------------
        |
        | Whether the results keep opened
        |
        */

        'keep-open' => false,
    ],
];
