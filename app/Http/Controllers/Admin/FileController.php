<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::paginate();

        return view('admin.file.index', compact('files'))
            ->with('i', (request()->input('page', 1) - 1) * $files->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $file = new File();
        return view('admin.file.create', compact('file'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     ['file' => 'required']
        // );
        // dd($request);
        foreach ($request['file'] as $file) {

            // $nombre = Str::random(10) . '-' . $request->file('file')->getClientOriginalName();
            // $ruta = storage_path() . '\app\public\imagenes/' . $nombre;
            // Image::make($request->file('file'))->save($ruta);
            $nombre = Str::random(10) . '-' . $file->getClientOriginalName();
            $ruta = storage_path() . '\app\public\imagenes/' . $nombre;
            Image::make($file)->save($ruta);

            // $imagen = $request->file('file')->store('public/imagenes');

            // $url = Storage::url($imagen);

            File::create([
                'url' => '/storage/imagenes/' . $nombre,
                'user_id' => auth()->user()->id,
                'tipo' => 1,

            ]);
        }

        // $file = File::create([
        //     'url' =>  $url,
        //     'tipo'=>1,
        //     'user_id' => auth()->user()->id
        // ]);
    }
    public function storeVideo(Request $request)
    {
        $imagen = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagen);
        $file = File::create([
            'url' =>  $url,
            'tipo' => 2,
            'user_id' => auth()->user()->id
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::find($id);

        return view('admin.file.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = File::find($id);

        return view('admin.file.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  File $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        request()->validate(File::$rules);

        $file->update($request->all());

        return redirect()->route('admin.files.index')
            ->with('success', 'File updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $file = File::find($id)->delete();

        return redirect()->route('admin.files.index')
            ->with('success', 'File deleted successfully');
    }
}
