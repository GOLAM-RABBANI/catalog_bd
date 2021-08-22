<?php

namespace App\Http\Controllers;

use App\Imports\ProjectsImport;
use App\Models\Category;
use App\Models\MasterProduct;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $posts = Post::where('created_by',$user_id)->paginate(30);
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    public function category_product(Request $request)
    {
        $user_id = auth()->id();
        $categories = Category::get();
       
        $posts = Post::where('category_id', $request->id)->where('created_by',$user_id)->paginate(20);
        // dd($posts);
        if(count($posts)>0){
        return view('category_product', compact('posts', 'categories'))->with('menu_bar', $categories);
        }else{
            abort(404);
        }
    }

    function import(Request $request)
    {
        Excel::import(new ProjectsImport, \request()->file('select_file'));
        return back()->with('success', 'Excel Data Imported successfully.');
    }


    public function delete_all()
    {
        $user_id = auth()->id();
        $post = Post::where('created_by', '=', $user_id);
        $post->delete();
        $category = Category::where('created_by', '=', $user_id);
        $category->delete();
        $MasterProduct = MasterProduct::where('created_by', '=', $user_id);
        $MasterProduct->delete();
        return back()->with('success', 'Deleted all data successfully.');
    }

    public function store(Request $request)
    {
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
        if ($data->count() > 0) {
            foreach ($data->toArray() as $key => $value) {
                foreach ($value as $row) {
                    $insert_data[] = array(
                        'CustomerName' => $row['customer_name'],
                        'Gender' => $row['gender'],
                        'Address' => $row['address'],
                        'City' => $row['city'],
                        'PostalCode' => $row['postal_code'],
                        'Country' => $row['country']
                    );
                }
            }
            if (!empty($insert_data)) {
                DB::table('tbl_customer')->insert($insert_data);
            }
        }
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
