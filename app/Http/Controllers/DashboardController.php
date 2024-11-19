<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Traits\ImageUploadTraits;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use ImageUploadTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = Dashboard::all();
        return view('room.dashboard', compact('dashboard'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product' => ['required'],
            'information' => ['required'],
            'name_product' => ['required', 'string', 'max:255'],
            'price_product' => ['required', 'string', 'max:255'],
            'old_product' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $image = $this->uploadImage($request, 'image', 'uploads');
        $dashboard = new Dashboard();
        $dashboard->dashboard = $request->product;
        $dashboard->information = $request->information;
        $dashboard->name_product = $request->name_product;
        $dashboard->price_product = $request->price_product;
        $dashboard->old_product = $request->old_product;
        $dashboard->image = $image;
        $dashboard->save();

        return redirect()->route('room.show-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dashboard = Dashboard::all();
        return view('room.show-dashboard', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
