<?php

namespace App\Http\Controllers\Api;



class SeriesController
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Greys Anatomy'
        ];

        return $series;
    }

}