<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appications = Application::orderBy('created_at', 'desc')->get();

        return \view('index', [
            'applications' => $appications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,$for = null)
    {
         $check = Application::find($id,);

        if($check != null){

           if($for == 'design'){
                return \view('applications.design', [
                    'application' => $check
                ]);
            }else if($for == 'text'){
                 // Apply custom logic to the body content
        // $check->body = $this->applyCustomLogic($check->body);
                return \view('applications.content', [
                    'application' => $check
                ]);
            }else{
                return redirect()->route('index')->with('error', 'something went wrong,try again.');
            }
        }

        else{
            return redirect()->route('index')->with('error', 'Application not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    private function applyCustomLogic($body)
    {
        // Highlight text within curly braces
        $body = preg_replace('/\{([^}]+)\}/', '<span class="highlight">{$1}</span>', $body);

        // Add warning color to the word "warning"
        // $body = preg_replace('/\bwarning\b/i', '<span class="warning">warning</span>', $body);

        return $body;
    }
}
