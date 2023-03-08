<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class CategoryController extends Controller
{
    public function show()
    {
        $categories = CategoryResource::collection(Category::get());

            return response()->json([
                'success'   => true,
                'data'      => CategoryResource::collection($categories),
                'code'      => 200
            ]);
    }
    public function index($id)
    {
       $categories = Category::where('id',$id)->with('carousel')->first();
       if (!isset($categories)){
           return response()->json([
               'success'   => true,
               'message'   => 'Sorry, Invalid Id',
               'code'      => 204
           ]);
       }else{
           return response()->json([
               'success'   => true,
               'data'      => new CategoryResource($categories),
               'code'      => 200
           ]);
       }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'media' => 'required|string|max:255',
        ]);

        $category = Category::create($validatedData);

        return response()->json([
            'success'   => true,
            'data'      => new CategoryResource($category),
            'code'      => 200
        ]);
    }
    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        if (!isset($category)){
            return response()->json([
                'success'   => true,
                'message'   => 'Sorry, Invalid Id',
                'code'      => 204
            ]);
        }else{
            $category->update($request->all());
            return response()->json([
                'success'   => true,
                'data'      => new CategoryResource($category),
                'code'      => 200
            ]);
        }

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!isset($category)){
            return response()->json([
                'success'   => true,
                'message'   => 'Sorry, Invalid Id',
                'code'      => 204
            ]);
        }else{
            $category->delete();
            return response()->json([
                'success'   => true,
                'message'   => 'Congratulations, Category deleted successfully',
                'code'      => 200
            ]);
        }
    }


}
