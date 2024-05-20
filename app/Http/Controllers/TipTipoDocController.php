<?php

namespace App\Http\Controllers;

use App\Models\TipTipoDoc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipTipoDocRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipTipoDocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipTipoDocs = TipTipoDoc::paginate();

        return view('tip-tipo-doc.index', compact('tipTipoDocs'))
            ->with('i', ($request->input('page', 1) - 1) * $tipTipoDocs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipTipoDoc = new TipTipoDoc();

        return view('tip-tipo-doc.create', compact('tipTipoDoc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipTipoDocRequest $request): RedirectResponse
    {
        TipTipoDoc::create($request->validated());

        return Redirect::route('tip_tipo_docs.index')
            ->with('success', 'TipTipoDoc created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipTipoDoc = TipTipoDoc::find($id);

        return view('tip-tipo-doc.show', compact('tipTipoDoc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipTipoDoc = TipTipoDoc::find($id);

        return view('tip-tipo-doc.edit', compact('tipTipoDoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipTipoDocRequest $request, TipTipoDoc $tipTipoDoc): RedirectResponse
    {
        $tipTipoDoc->update($request->validated());

        return Redirect::route('tip_tipo_docs.index')
            ->with('success', 'TipTipoDoc updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipTipoDoc::find($id)->delete();

        return Redirect::route('tip_tipo_docs.index')
            ->with('success', 'TipTipoDoc deleted successfully');
    }
}
