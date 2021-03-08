<?php

namespace App\Http\Controllers\Profile;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    
    public function index()
    {

        $profiles = Profile::all();


        return view('profile.index', compact('profiles'));

    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $profile = Profile::create([

            'name' => $request->name,

            'usia' => $request->usia,

            'tempat_lahir' => $request->tempat_lahir,

            'tanggal_lahir' => $request->tanggal_lahir,

            'jenis_kelamin' => $request->jenis_kelamin,

            'hobby' => $request->hobby,
            
        ]);

        flash()->success('Data Profile berhasil dibuat');

        return redirect()->back();
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);


        return view('profile.edit',compact('profile'));
    }
    
    public function update(Request $request,$id)
    {
        $profile = Profile::where('id', $id)->first();

        $profile->name = $request->input('name');
        $profile->usia = $request->input('usia');
        $profile->tempat_lahir = $request->input('tempat_lahir');
        $profile->tanggal_lahir = $request->input('tanggal_lahir');
        $profile->jenis_kelamin = $request->input('jenis_kelamin');
        $profile->hobby = $request->input('hobby');

        $profile->save();

        flash()->success('Profile Berhasil di ubah');

        return redirect()->back();
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);


        return view('profile.detail', compact('profile'));
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);

        $profile->delete();

        flash()->success('Profile berhasil di hapus');

        return redirect()->back();

    }
}

