<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Category.addCategory');
    }
    public function viewupdate($id){
        return view('Category.updateCategory',[
            'id' => $id
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate
        $validation = $request->validate([
            'name' => 'required|unique:categories',
        ]);
        //form request
        // $input = $request->all();
        Category::create($validation);
        return redirect()->route('category.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role_id;
            $name = Auth::user()->name;
        }
        else{
            $role = '3';
            $name = 'Guest';
        }
        return view('Category.manageCategory',[
            compact('categories'),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required|unique:categories'
        ]);
        $NewCategory = Category::find($id);
        $NewCategory->name = $validation['name'];
        if ($NewCategory->save()) {
            return redirect()->route('category.edit');
        } 
        else {
            return redirect()->back()->with('error', 'Category updated failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::find($id);
        $games = $Category->game;
        foreach ($games as $game) { 
            Storage::delete('/public/assets/'.$game->thumbnail);
            foreach ($game->slides as $slide) {
            Storage::delete('/public/assets/'.$slide->name);
            }
        }
        $deleted = $Category->delete();
        if($deleted)
        {
            return redirect()->route('category.edit');
        }
        else{
            return redirect()->back()->with('error', 'Category deleted failed!');
        }
    }
}
