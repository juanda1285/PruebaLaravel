<?php

namespace App\Http\Controllers;

use App\Models\ProProceso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProProcesoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $proProcesos = ProProceso::paginate();

        return view('pro-proceso.index', compact('proProcesos'))
            ->with('i', ($request->input('page', 1) - 1) * $proProcesos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $proProceso = new ProProceso();

        return view('pro-proceso.create', compact('proProceso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProProcesoRequest $request): RedirectResponse
    {
        ProProceso::create($request->validated());

        return Redirect::route('pro_procesos.index')
            ->with('success', 'ProProceso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $proProceso = ProProceso::find($id);

        return view('pro-proceso.show', compact('proProceso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $proProceso = ProProceso::find($id);

        return view('pro-proceso.edit', compact('proProceso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProProcesoRequest $request, ProProceso $proProceso): RedirectResponse
    {
        $proProceso->update($request->validated());

        return Redirect::route('pro_procesos.index')
            ->with('success', 'ProProceso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ProProceso::find($id)->delete();

        return Redirect::route('pro_procesos.index')
            ->with('success', 'ProProceso deleted successfully');
    }
}
