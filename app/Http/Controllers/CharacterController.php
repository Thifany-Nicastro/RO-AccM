<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Requests\CharacterRequest;
use Illuminate\Support\Facades\Storage;
use App\Traits\FileUploadTrait;

class CharacterController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {
        $validated = $request->validated();

        $validated['picture'] = $this->storeFile($request);

        auth()->user()->characters()->create($validated);

        notify()->success('Character created!');
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterRequest $request, Character $character)
    {
        $validated = $request->validated();

        Storage::disk('public')->delete("uploads/$character->picture");
        $validated['picture'] = $this->storeFile($request);

        $character->update($validated);

        notify()->success('Character updated!');
        return redirect()->route('characters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();

        Storage::disk('public')->delete("uploads/$character->picture");

        notify()->success('Character deleted!');
        return back();
    }
}
