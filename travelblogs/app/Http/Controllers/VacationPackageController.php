<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationPackageController extends Controller
{
    public function index()
    {
        // Примерни данни за ваканционни пакети
        $vacationPackages = [
            [
                'title' => 'Paris Getaway',
                'description' => 'Enjoy a luxurious stay in the heart of Paris. Explore the Eiffel Tower, Louvre Museum, and more.',
                'price' => '$1,200',
                'discount' => '10% off if booked before June',
                'accommodation' => '5-star hotel near the Champs-Elysées',
                'image' => 'build/assets/Paris Getaway.jpg',
            ],
            [
                'title' => 'Tropical Maldives',
                'description' => 'Experience paradise with overwater villas, crystal-clear waters, and stunning coral reefs.',
                'price' => '$2,500',
                'discount' => '15% off for honeymooners',
                'accommodation' => 'Luxury beachfront resort',
                'image' => 'build/assets/Tropical Maldives.jpg',
            ],
            [
                'title' => 'New York Adventure',
                'description' => 'Explore the city that never sleeps with Broadway shows, Central Park, and world-class dining.',
                'price' => '$1,800',
                'discount' => '5% off for early booking',
                'accommodation' => 'Central Park view hotel',
                'image' => 'build/assets/New York Adventure.jpg',
            ],
        ];

        return view('vacation-packages.index', compact('vacationPackages'));
    }
}
