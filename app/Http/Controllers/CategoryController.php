<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Exception;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categories.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $categorie = new Category;
            $categorie->title = $request->title;
            $categorie->description = $request->description;
            $categorie->save();

        } catch (Exception $e) {
            session()->flash('error', "Merci de compléter le formulaire correctement !");
            return back();
        }
       
        session()->flash('success', 'Enregistrement effectué');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        dd($category->articles);
        
        //$articles = Article::where('category_id','=' ,$id)->get();
        //return view('articles.index', compact('articles'));
    }

    //TODO Ecrire une route qui prend un paramètre dynamique
    //TODO Definir une méthode dans le  controleur CategoryController qui recupera ce paramètre
    //TODO effectuer un where sur la colonne category_id 
    //TODO retourner la vue index des articles avec le resultat du where

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
