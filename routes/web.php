<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/place/{place}', function ($place) {
    $data = [];

    // Define data for each place
    if ($place === 'munnar') {
        $properties = collect([
            ['name' => 'Cloud bed view cottage', 'img' => 'md1.jpg', 'price' => 'unknown', 'rating' => '4.5'],
            ['name' => 'forest bungalow kanthallor', 'img' => 'fbk2.jpg', 'price' => '1650', 'rating' => '4.5'],
            ['name' => 'water fall view resort', 'img' => 'wfvr1.jpg', 'price' => '1650', 'rating' => '4.5'],
            ['name' => 'Private pool villa', 'img' => 'ex1.jpg', 'price' => '$120', 'rating' => '4.5'],
            ['name' => 'Tea Valley Private pool and cottages', 'img' => 'ex2.jpg', 'price' => '$150', 'rating' => '4.8'],
            ['name' => '2 bedroom pool villa, Rajakkad', 'img' => 'af2.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => 'Tent stay Kanthalloor', 'img' => 'af1.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => '⁠Open view cottage in Kanthalloor, Rajakkad', 'img' => 'af2.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => '⁠Bungalow stay in Kanthalloor', 'img' => 'ex3.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => '⁠Mamalakandam forest stay', 'img' => 'md2.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => 'Budget pool resort munnar', 'img' => 'md3.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => 'Budget plantation view resort', 'img' => 'af4.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => 'Marayoor forest stay', 'img' => 'af2.jpg', 'price' => '$100', 'rating' => '4.2'],
            ['name' => 'Kanthalloor mud house', 'img' => 'af1.jpg', 'price' => '$100', 'rating' => '4.2'],
        ]);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5;
        $currentPageItems = $properties->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginatedProperties = new LengthAwarePaginator(
            $currentPageItems,
            $properties->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        $data = [
            'title' => 'Munnar',
            'img' => 'munnar3.jpg',
            'properties' => $paginatedProperties,
        ];
    } elseif ($place === 'idukki') {
        $data = [
            'title' => 'Idukki',
            'description' => 'Idukki is known for its dams and lush greenery.',
            'properties' => [
                ['name' => 'Hill View Resort', 'price' => '$90', 'rating' => '4.3'],
                ['name' => 'River Side Stay', 'price' => '$110', 'rating' => '4.7'],
            ],
        ];
    } else {
        // Redirect to a 404 page if the place is not found
        abort(404, 'Place not found');
    }
    return view('place-detail', compact('data'));
})->name('place');


Route::get('/place/{place}/{hotel}', function ($place, $hotel) {
    // Example: Fetch the details of the selected hotel
    $properties = [
        'munnar' => [
            'cloud-bed-view-cottage' => [
                'name' => 'Cloud Bed View Resort',
                'main_images' => [
                    'cbv1.jpeg',  
                    'cbv2.jpeg',  
                    'cbv3.jpeg',  
                    'cbv4.jpeg'   
                ],
                'categories' => [
                    'Mud-House' => [
                        'name' => 'Mud House',
                        'price' => '$100',
                        'images' => [
                            'md1.jpg', 
                            'md2.jpg', 
                            'md3.jpg', 
                            'md4.jpg'  
                        ]
                    ],
                    'a-Frame-Vategot' => [
                        'name' => 'A Frame Vategot',
                        'price' => '$150',
                        'images' => [
                            'af1.jpg', 
                            'af2.jpg', 
                            'af3.jpg', 
                            'af4.jpg'  
                        ]
                    ],
                    'executive-category' => [
                        'name' => 'Executive Category',
                        'price' => '$180',
                        'images' => [
                            'ex1.jpg', 
                            'ex2.jpg', 
                            'ex3.jpg', 
                            'ex4.jpg'  
                        ]
                    ],
                ]
                ],
            'forest-bungalow-kanthallor' => [
                'name' => 'Forest Bungalow Kanthallor',
                'main_images' => [
                    'fbk1.jpg',  
                    'fbk2.jpg',  
                    'fbk3.jpg',  
                    'fbk4.jpg'   
                ],
                'categories'=>[]
            ],
            'water-fall-view-resort' => [
                'name' => 'water fall view resort',
                'main_images' => [
                    'wfvth1.jpg',  
                    'wfvr1.jpg',  
                    'wfvth3.jpg',  
                    'wfvr4.jpg'   
                ],
                'categories'=>[
                    'Mud-House' => [
                        'name' => 'Mountain View Rooms',
                        'price' => '$100',
                        'images' => [
                            'wfvr1.jpg', 
                            'wfvr2.jpg', 
                            'wfvr3.jpg', 
                            'wfvr4.jpg'  
                        ]
                    ],
                    'a-Frame-Vategot' => [
                        'name' => 'Tree House',
                        'price' => '$150',
                        'images' => [
                            'wfvth1.jpg', 
                            'wfvth2.jpg', 
                            'wfvth3.jpg', 
                            'wfvth4.jpg'  
                        ]
                    ],
                    ]
            ]
        ]
    ];

    if (!isset($properties[$place][$hotel])) {
        abort(404, 'Hotel not found');
    }

    $hotelData = $properties[$place][$hotel];
    return view('hotel-detail', compact('hotelData'));
})->name('hotel');



Route::get('/room1', function () {
    return view('rooms-1');
})->name('room1');

Route::get('/room2', function () {
    return view('rooms-2');
})->name('room2');

Route::get('/error', function () {
    return view('404page');
})->name('404page');


Route::get('/blog-item', function () {
    return view('blog-item');
})->name('blog-item');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/gallery-boxed', function () {
    return view('gallery-boxed');
})->name('gallery-boxed');

Route::get('/gallery-fullwidth', function () {
    return view('gallery-fullwidth');
})->name('gallery-fullwidth');

Route::get('/index-parallax', function () {
    return view('index-parallax');
})->name('index-parallax');

Route::get('/index-slider', function () {
    return view('index-slider');
})->name('index-slider');

Route::get('/index-video', function () {
    return view('index-video');
})->name('index-video');

Route::get('/layouts', function () {
    return view('layouts');
})->name('layouts');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');





Route::get('/room-detail', function () {
    return view('room-detail');
})->name('room-detail');

Route::get('/about', function () {
    return view('about');
})->name('about');