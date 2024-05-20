<?php

namespace App\Http\Controllers;

use App\Models\DocDocumento;
use App\Models\ProProceso;
use App\Models\TipTipoDoc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DocDocumentoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search= $request->get('search');
        $docDocumentos = DocDocumento::where('doc_nombre','like','%'.$search.'%')->paginate();
        
        return view('doc-documento.index', compact('docDocumentos','search'))
            ->with('i', ($request->input('page', 1) - 1) * $docDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $docDocumento = new DocDocumento();
        $tipos = TipTipoDoc::all();
        $procesos = ProProceso::all();
        return view('doc-documento.create', compact('docDocumento','tipos','procesos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocDocumentoRequest $request): RedirectResponse
    {
        DocDocumento::create($request->validated());

        return Redirect::route('doc_documentos.index')
            ->with('success', 'DocDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $docDocumento = DocDocumento::find($id);

        return view('doc-documento.show', compact('docDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $docDocumento = DocDocumento::find($id);
        $tipos = TipTipoDoc::all();
        $procesos = ProProceso::all();

        return view('doc-documento.edit', compact('docDocumento','tipos','procesos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocDocumentoRequest $request, DocDocumento $docDocumento): RedirectResponse
    {
        $docDocumento->update($request->validated());

        return Redirect::route('doc_documentos.index')
            ->with('success', 'DocDocumento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DocDocumento::find($id)->delete();

        return Redirect::route('doc_documentos.index')
            ->with('success', 'DocDocumento deleted successfully');
    }
}
