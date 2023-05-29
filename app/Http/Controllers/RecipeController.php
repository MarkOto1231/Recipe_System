<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $recipe = Recipe::latest();
        if (request()->has('search')) {
        $recipe -> where('Recipe_name', 'Like', '%' . request () -> input('search') . '%');
    }

        $recipe = $recipe->paginate(3);
        return view('recipe.index',compact('recipe'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $recipe = new Recipe;
       $recipe -> Recipe_name = $request -> input ('Recipe_name');
       $recipe -> Recipe_steps = $request -> input ('Recipe_steps');
       $recipe -> Recipe_maker = $request -> input ('Recipe_maker');
       $recipe -> Recipe_details = $request -> input ('Recipe_details');
       $recipe -> Recipe_ingredients = $request -> input ('Recipe_ingredients');

       if($request->hasfile('Recipe_image'))
       {
           $file = $request->file('Recipe_image');
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('uploads/recipe/', $filename);
           $recipe -> Recipe_image = $filename;
       }

        $recipe->save();    
        return redirect ('/check/recipe-list/')->with('flash_message','Recipe Added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::find($id);
        return view ('recipe.show')-> with ('recipe',$recipe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $recipe = Recipe::find($id);
        $recipe -> Recipe_name = $request -> Recipe_name;
        $recipe -> Recipe_steps = $request -> Recipe_steps;
        $recipe -> Recipe_maker = $request -> Recipe_maker;
        $recipe -> Recipe_details = $request -> Recipe_details;
        $recipe -> Recipe_ingredients = $request -> Recipe_ingredients;

        if($request->hasfile('Recipe_image'))
        {
            $destination = 'uploads/recipe/'.$recipe->Recipe_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            $file = $request->file('Recipe_image');

            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/recipe/', $filename);
            $recipe -> Recipe_image = $filename;
        }
 
        $recipe->update();    
        return redirect('/check/recipe-list')->with('flash_message', 'student Updated!'); 
    }

    /**
     * For delete
     */
    public function destroy(string $id)
    {
        Recipe::destroy($id);
        return redirect('/check/recipe-list/')-> with('flash_message', 'Student deleted!');  
    }

    public function dashboard()
    {
        
        $recipe = Recipe::latest();
        if (request()->has('search')) {
        $recipe -> where('Recipe_name', 'Like', '%' . request () -> input('search') . '%');
    }

        $recipe = $recipe->paginate(3);
        return view('recipe.dashboard',compact('recipe'));
        
    }
}
