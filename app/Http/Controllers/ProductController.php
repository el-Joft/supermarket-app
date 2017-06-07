<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;
use App\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $products = Product::all();


        return view('superuser.dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('superuser.create');
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
            $this->validate(request(),[
                'name'=>'required|max:20',
                'measurement'=>'required',
                'cost_price'=>'required',
                'percent_markup',
                'selling_price'=>'required',
                're_order'=>'required',
                'barcode'=>'required|max:200',
                'description'=>'required',

        ]);



            Product::create(request([
            'name',
            'measurement',
            'cost_price',
            'percent_markup',
            'selling_price',
            're_order',
            'barcode',
            'description'

            ]));



        return redirect('/');
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
        $product = Product::where('id', $id)->first();

        return view('superuser.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $product = Product::where('id', $id)->first();
                //dd($articles->body);
        return view('superuser.edit', compact('product'));


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

        $product = Product::find($id);
        //$product = Product::where('id', $id)->first();



             $this->validate(request(),[
                'name'=>'required|max:20',
                'measurement'=>'required',
                'cost_price'=>'required',
                'percent_markup',
                'selling_price'=>'required',
                're_order'=>'required',
                'barcode'=>'required|max:200',
                'description'=>'required',

        ]);

        $product->name = $request->name;
        $product->measurement = $request->measurement;
        $product->cost_price = $request->cost_price;
        $product->percent_markup = $request->percent_markup;
        $product->selling_price = $request->selling_price;
        $product->re_order = $request->re_order;
        $product->barcode = $request->barcode;
        $product->description = $request->description;
        $product->save();





        return redirect()->to('/product/search');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function view_stock(){
         $product = Product::all()->latest();


        return view('superuser.stock', compact('product'));
     }


     public function create_stock(Request $request, $id)
     {
         # code...
        $product = Product::find($id);

         $this->validate(request(),[
            'stock'=>'required|max:50',
        ]);

        $product->stock = $request->stock;
        $product->save();

        return redirect()->to('/product/search');

     }








    public function destroy($id)
    {
        //
        $product = Product::where('id',$id)->first();

        $product->delete();

        return redirect()->to('product/search');

    }


    public function search(Request $request)
    {



        $keyword = $request->get('name');

        //$searchterm = Input::get('search');

        if (!empty($keyword)){

        $products = Product::where('name', 'LIKE', "%$keyword%")
        ->orWhere('barcode', 'LIKE', "%$keyword%")
        ->orWhere('selling_price', 'LIKE', "%$keyword%")->get();

        } else {
            $error = "sorry no product matched the search input ";
        }

        return view('superuser.search', compact('products'));
}

        public function make_sales(Request $request)
        {
            # code...
            $product = "this is nice";
            return view('invoice.sales', compact('product'));
        }

        public function execute(Request $request){
            $keyword = $request->get('search_text');

        //$searchterm = Input::get('search');

            if(!empty($keyword)){


            $products = Product::where('name', 'LIKE', "%%$keyword%%")
           ->orWhere('barcode', 'LIKE', "%%$keyword%%")
            ->orWhere('selling_price', 'LIKE', "%%$keyword%%")->get();

            } else {
                $error = "sorry no product matched the search input ";
            }

            return view('invoice.sales', compact('products'));


        }








}

