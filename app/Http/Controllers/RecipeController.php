<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 

class RecipeController extends Controller
{
    //
        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_recipe' => 'nullable|image_recipe',
        ]);

        $imagePath = $request->file('image_recipe') ? $request->file('image_recipe')->store('images_recipe', 'public') : null;

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles.index');
    }
}
