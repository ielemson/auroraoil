<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        return view('services', compact('services'));
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        // sidebar list
        $services = Service::where('is_active', 1)
            ->orderBy('sort_order')
            ->get(['title', 'slug']);

        return view('service-details', compact('service', 'services'));
    }
}
