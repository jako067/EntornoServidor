<?php
/**PHP DOC
 *@author: Diego Rivera
 *@version: 1.0
 *
 */

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        $subject['name'] = $request->input('name');
        $subject['code'] = $request->input('code');
        $subject['cycle'] = $request->input('cycle');
        $subject['year'] = $request->input('year');

        return view('subjects.store', compact('subject'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $subject)
    {
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //
    // }

    /**
     * Update the specified resource in storage.
     */
    //  public function update(Request $request, string $id)
    // {
    //
    //  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $subject)
    {
        //
    }
}
