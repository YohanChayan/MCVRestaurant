<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File as FFile;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        return view('img_files.files-index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('img_files.files-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('FileLoaded') && $request->file('FileLoaded')->isValid() ){
            $path = $request->FileLoaded->store('img_platillos');

            // dd($path);
            $file = new File();
            $file->name_platillo = $request->name_platillo;
            $file->original_name = $request->FileLoaded->getClientOriginalName();
            $file->path = $path;
            $file->mime = $request->FileLoaded->getMimeType();
            $file->save();
            return redirect()->route('jefemeseroR.files.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function download(File $file)
    {
        return Storage::download($file->path, $file->original_name);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        // $trimmed = str_replace('img_platillos/', '', $file->path) ;
        // dd($trimmed);
        // $path = '/app/' .'public/' . $file->path;
        // $hashed_name = '';

        // if(FFile::exists(public_path($file->path))){
        //     FFile::delete(public_path('upload/bio.png'));
        //     }else{
        //     dd('File does not exists.');
        //     }
        return redirect()->route('jefemeseroR.files.index');
    }
}
