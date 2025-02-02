<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NormalUserController extends Controller
{
    //Home route function
    public function home() {
        return view ('home');
    }

    // contact route function
    public function contact() {
        $title = 'Contact us';
        $cardOneTitle = [
            'Office',
            'Blue transport',
            'P.O.Box 73, Dododma',
            'Nanename Dodoma'
        ];
        $cardTwoTitle = [
            'Office Hrs',
            'Mon - Fri 08:00 05:00',
            'Sat 08:00 02:00',
        ];
        $cardThreeTitle = [
            'Office Hrs',
            'Mon - Fri 08:00 05:00',
            'Sat 08:00 02:00',
        ];

        return view ('contact', compact('title', 'cardOneTitle', 'cardTwoTitle', 'cardThreeTitle'));
    }
}
