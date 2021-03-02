<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retrieving product information
       $products = Product::all();
       return $products;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Storing product information
        $this->validate($request,[
            'Title' => 'required|string|max:191',
            'Description' => 'required|string|max:190',
            'Price' => 'required',

        ]);
        //Checking whether image file is clicked or not
        if($request->image)
        {
            //To convert string to image
            $name = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/').$name);

             Product::create([

                'Title'=>$request['Title'],
                'Description'=>$request['Description'],
                'Price'=>$request['Price'],
                'Image'=>$name,
            ]);
            return response()->json(['error'=>'resource not found'],201);

        }
        else {
            return response()->json(['error'=>'resource not found'],200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $this->validate($request,[
            'Title' => 'required|string|max:191',
            'Description' => 'required|string|max:190',
            'Price' => 'required',

        ]);
        //Checking whether the file is checked or not
        if($request->image)
        {
            //To convert string to image
            $name = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/').$name);
             Product::where('id',$id)->update(array('Title'=>$request['Title'],'Description'=>$request['Description'],'Price'=>$request['Price'],'Image'=>$name));
            return response()->json(['success'=>'file has been choosen'],201);
        }
        else {
            return response()->json(['error'=>'resource not found'],200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deleting product information of the specific product
        $products = Product::find($id);
        $image_path = "images/".$products->Image;
        if(file_exists($image_path))
        {
            @unlink($image_path);
        }
        $products->delete();

    }
}
