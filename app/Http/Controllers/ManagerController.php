<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Traits\ImageUploadTraits;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Str;

class ManagerController extends Controller
{
    use ImageUploadTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manager = Manager::all();
        // dd($manager);
        return view('room.manager', compact('manager'));
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
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'name_room' => ['required', 'string', 'max:255'],
            'description_room' => ['required', 'string', 'max:255'],
            'price_room' => ['required', 'string', 'max:255'],
        ]);

        $image = $this->uploadImage($request, 'image', 'uploads');
        $manager = new Manager();

        $manager->image = $image;
        $manager->name = $request->name_room;
        $manager->description = $request->description_room;
        $manager->price = $request->price_room;

        $manager->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $manager = Manager::all();
        return view('room.show-manager', compact('manager'));
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
