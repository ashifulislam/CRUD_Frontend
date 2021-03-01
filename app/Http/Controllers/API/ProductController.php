<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $this->validate($request,[
            'Title' => 'required|string|max:191',
            'Description' => 'required|string|max:190',
            'Price' => 'required',

        ]);

        if($request->image)
        {
            //To convert string to image
            $name = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/').$name);

        }
        return Product::create([

            'Title'=>$request['Title'],
            'Description'=>$request['Description'],
            'Price'=>$request['Price'],
            'Image'=>$name,
        ]);
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

        if($request->image)
        {
            //To convert string to image
            $name = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/').$name);
            return Product::where('id',$id)->update(array('Title'=>$request['Title'],'Description'=>$request['Description'],'Price'=>$request['Price'],'Image'=>$name));


        }
        else {
            return response()->json(['error'=>'resource not found'],200);
        }

//        else{
//
//            return response()->json(['error'=>'you have to choose a file'],200);
//
//        }



//        return Product::create([
//
//            'Title'=>$request['Title'],
//            'Description'=>$request['Description'],
//            'Price'=>$request['Price'],
//            'Image'=>$name,
//        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $products = Product::find($id);
        $image_path = "images/".$products->Image;
        if(file_exists($image_path))
        {
            @unlink($image_path);
        }
        $products->delete();

    }
}
