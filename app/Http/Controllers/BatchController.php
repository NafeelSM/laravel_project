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
    public function create()
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**Store function */
    public function store(Request $request)
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
        $courses = course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $courses = course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('course')->with('flash_message', 'Courses Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        course::destroy($id);
        return redirect('course')->with('flash_message', 'Course Deleted!');
    }
}
