<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getReport()
    {
       
        $categories=Category::all();
        return view('report')->with(compact('categories'));
    }
    public function postReport(Request $request)
    {
       
        // si category_id es = 0 toma valor de null
        //dd ($request->input('category_id') ?: null);


        $rules=[
            'category_id' => 'sometimes|exists:categories,id',
            'severity' => 'required|in:M,N,A',
            'title' => 'required|min:5',
            'description' => 'required|min:15'
        ];

        $messages=[
            'category_id.exists'=>'La categoria seleccionada no existe en la base de datos',
            'title.required'=>'El titulo no puede estar vacio',
            'title.min'=>'El titulo debe tener al menos 5 caracteres',
            'description.required'=>'La descripcion no puede estar vacia',
            'description.min'=>'La descripcion debe tener al menos 15 caracteres'

        ];


        $this->validate($request, $rules, $messages);


        $incident= new Incident();
        $incident->category_id = $request->input('category_id') ?: null;
        $incident->severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
        $incident->client_id = auth()->user()->id;
        $incident->save();

        return back();


    }

}
