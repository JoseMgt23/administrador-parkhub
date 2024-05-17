<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use Illuminate\Http\Request;

/**
 * Class ParqueaderoController
 * @package App\Http\Controllers
 */
class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqueaderos = Parqueadero::paginate(10);

        return view('parqueadero.index', compact('parqueaderos'))
            ->with('i', (request()->input('page', 1) - 1) * $parqueaderos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parqueadero = new Parqueadero();
        return view('parqueadero.create', compact('parqueadero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Parqueadero::$rules);

        $parqueadero = Parqueadero::create($request->all());

        return redirect()->route('parqueaderos.index')
            ->with('success', 'Parqueadero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parqueadero = Parqueadero::find($id);

        return view('parqueadero.show', compact('parqueadero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parqueadero = Parqueadero::find($id);

        return view('parqueadero.edit', compact('parqueadero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parqueadero $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parqueadero $parqueadero)
    {
        request()->validate(Parqueadero::$rules);

        $parqueadero->update($request->all());

        return redirect()->route('parqueaderos.index')
            ->with('success', 'Parqueadero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parqueadero = Parqueadero::find($id)->delete();

        return redirect()->route('parqueaderos.index')
            ->with('success', 'Parqueadero deleted successfully');
    }
}
