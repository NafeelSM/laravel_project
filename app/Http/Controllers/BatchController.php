<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batch;
use Illuminate\View\View;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

     /**
     * Show the form for creating a new resource.
     */
    /**Create function */
    public function create(): View
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**Store function */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batch')->with('flash_message', 'Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = course::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batch')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return redirect('batch')->with('flash_message', 'Batch Deleted!');
    }
}
