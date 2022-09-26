<?php

namespace App\Http\Controllers;

use App\Models\Autocomplete;
use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autocomplete  $autocomplete
     * @return \Illuminate\Http\Response
     */
    public function show(Autocomplete $autocomplete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autocomplete  $autocomplete
     * @return \Illuminate\Http\Response
     */
    public function edit(Autocomplete $autocomplete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autocomplete  $autocomplete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autocomplete $autocomplete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autocomplete  $autocomplete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autocomplete $autocomplete)
    {
        //
    }



    
    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('posts')
                ->where('country_name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->country_name.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    






}
