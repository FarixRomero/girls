<?php

namespace App\Http\Controllers;

use App\Models\AtributosUsuario;
use Illuminate\Http\Request;

/**
 * Class AtributosUsuarioController
 * @package App\Http\Controllers
 */
class AtributosUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atributosUsuarios = AtributosUsuario::paginate();

        return view('atributos-usuario.index', compact('atributosUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $atributosUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atributosUsuario = new AtributosUsuario();
        return view('atributos-usuario.create', compact('atributosUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AtributosUsuario::$rules);

        $atributosUsuario = AtributosUsuario::create($request->all());

        return redirect()->route('atributos-usuarios.index')
            ->with('success', 'AtributosUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atributosUsuario = AtributosUsuario::find($id);

        return view('atributos-usuario.show', compact('atributosUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atributosUsuario = AtributosUsuario::find($id);

        return view('atributos-usuario.edit', compact('atributosUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AtributosUsuario $atributosUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtributosUsuario $atributosUsuario)
    {
        request()->validate(AtributosUsuario::$rules);

        $atributosUsuario->update($request->all());

        return redirect()->route('atributos-usuarios.index')
            ->with('success', 'AtributosUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $atributosUsuario = AtributosUsuario::find($id)->delete();

        return redirect()->route('atributos-usuarios.index')
            ->with('success', 'AtributosUsuario deleted successfully');
    }
}
