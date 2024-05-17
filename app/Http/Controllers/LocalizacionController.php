<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;

/**
 * Class LocalizacionController
 * @package App\Http\Controllers
 */
class LocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localizacions = Localizacion::paginate(10);

        return view('localizacion.index', compact('localizacions'))
            ->with('i', (request()->input('page', 1) - 1) * $localizacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localizacion = new Localizacion();
        return view('localizacion.create', compact('localizacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Localizacion::$rules);

        $localizacion = Localizacion::create($request->all());

        return redirect()->route('localizacion.index')
            ->with('success', 'Localizacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $localizacion = Localizacion::find($id);

        return view('localizacion.show', compact('localizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localizacion = Localizacion::find($id);

        return view('localizacion.edit', compact('localizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Localizacion $localizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacion $localizacion)
    {
        request()->validate(Localizacion::$rules);

        $localizacion->update($request->all());

        return redirect()->route('localizacion.index')
            ->with('success', 'Localizacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $localizacion = Localizacion::find($id)->delete();

        return redirect()->route('localizacions.index')
            ->with('success', 'Localizacion deleted successfully');
    }
}
