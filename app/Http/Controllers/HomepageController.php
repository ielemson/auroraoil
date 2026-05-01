<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
     
public function index()
{
    $services = Service::where('is_active', 1)
        ->orderBy('sort_order')
        ->take(6)
        ->get();

    return view('index', compact('services'));
}
public function about()
{
    $services = Service::where('is_active', 1)
        ->orderBy('sort_order')
        ->take(6)
        ->get();

    return view('about', compact('services'));
}
public function contact()
{
    $services = Service::where('is_active', 1)
        ->orderBy('sort_order')
        ->take(6)
        ->get();

    return view('contact', compact('services'));
}
}
