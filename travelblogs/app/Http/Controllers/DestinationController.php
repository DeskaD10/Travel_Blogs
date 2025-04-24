<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        // Примерни данни за дестинации
        $destinations = [
            ['title' => 'Paris', 'image' => 'build/assets/Paris.jpg'],
            ['title' => 'New York', 'image' => 'build/assets/New York.jpg'],
            ['title' => 'Tokyo', 'image' => 'build/assets/Tokyo.jpg'],
            ['title' => 'London', 'image' => 'build/assets/London.jpg'],
            ['title' => 'Rome', 'image' => 'build/assets/Rome.jpg'],
            ['title' => 'Sydney', 'image' => 'build/assets/Sydney.jpg'],
            ['title' => 'Dubai', 'image' => 'build/assets/Dubai.jpg'],
            ['title' => 'Barcelona', 'image' => 'build/assets/Barcelona.jpg'],
            ['title' => 'Amsterdam', 'image' => 'build/assets/Amsterdam.jpg'],
            ['title' => 'Berlin', 'image' => 'build/assets/Berlin.jpg'],
            ['title' => 'Bangkok', 'image' => 'build/assets/Bangkok.jpg'],
            ['title' => 'Los Angeles', 'image' => 'build/assets/Los Angeles.jpg'],
            ['title' => 'Bali', 'image' => 'build/assets/Bali.jpg'],
            ['title' => 'Singapore', 'image' => 'build/assets/Singapore.jpg'],
            ['title' => 'Hong Kong', 'image' => 'build/assets/Hong Kong.jpg'],
        ];

        return view('destinations.index', compact('destinations'));
    }
}
