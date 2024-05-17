<?php

namespace App\Http\Controllers;

use App\Models\MetodoDePago;
use Illuminate\Http\Request;

/**
 * Class MetodoDePagoController
 * @package App\Http\Controllers
 */
class MetodoDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodoDePagos = MetodoDePago::paginate(10);

        return view('metodo-de-pago.index', compact('metodoDePagos'))
            ->with('i', (request()->input('page', 1) - 1) * $metodoDePagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $metodoDePago = new MetodoDePago();
            return view('metodo-de-pago.create', compact('metodoDePago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MetodoDePago::$rules);

        $metodoDePago = MetodoDePago::create($request->all());

        return redirect()->route('metodo-de-pagos.index')
            ->with('success', 'MetodoDePago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $metodoDePago = MetodoDePago::find($id);

        return view('metodo-de-pago.show', compact('metodoDePago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodoDePago = MetodoDePago::find($id);

        return view('metodo-de-pago.edit', compact('metodoDePago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MetodoDePago $metodoDePago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MetodoDePago $metodoDePago)
    {
        request()->validate(MetodoDePago::$rules);

        $metodoDePago->update($request->all());

        return redirect()->route('metodo-de-pagos.index')
            ->with('success', 'MetodoDePago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $metodoDePago = MetodoDePago::find($id)->delete();

        return redirect()->route('metodo-de-pagos.index')
            ->with('success', 'MetodoDePago deleted successfully');
    }
}
