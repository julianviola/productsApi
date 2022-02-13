<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse  $products
     */
    public function index(): JsonResponse
    {
        $products = Product::simplePaginate(10);

        return response()->json($products)->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse $product
     */
    public function store(Request $request): JsonResponse
    {
       $validator = $this->validateDataStore($request);
       
        if ($validator->fails()) 
        {
            return response()
                    ->json(["status" => "ERROR", "message" => $validator->messages()])
                    ->setStatusCode(400);
        }
        
        $product = Product::create($request->all());
       
        return response()->json($product)->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return JsonResponse $product
     */
    public function show($id): JsonResponse
    {
        $product = Product::find($id);
        
        if(!$product)
        {
            return $this->errorProductNotFound();
        }
        
        return response()->json($product)->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return JsonResponse $product
     */
    public function update(Request $request, $id): JsonResponse
    {
        if(!Product::find($id))
        { 
            return $this->errorProductNotFound();
        }

        $validator = $this->validateDataUpdate($request);
        if ($validator->fails()) 
        {
            return response()
                    ->json(["status" => "ERROR", "message" => $validator->messages()])
                    ->setStatusCode(400);
        }
        
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json($product)->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return JsonResponse 
     */
    public function destroy($id): JsonResponse
    {
        if(!Product::find($id))
        { 
            return $this->errorProductNotFound();
        }
        
        $product = Product::find($id);
        $product->delete();
        return response()->json(["status" => "OK", "message" => "Product deleted"])->setStatusCode(200);
    }
    
    /**
     * Search Products by name
     *
     * @param  string  $name
     * @return Product $products
     */
    public function search($name)
    {
        $products = Product::where('name', 'like', '%' . $name . '%' )->simplePaginate(10);
         
       return response()->json($products)->setStatusCode(200);
    }
    
    
    /**
     * Validate data on Update action
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Object $validator
     */
    protected function validateDataUpdate(Request $request): Object
    {
        $validator = Validator::make($request->all(), [
                'name' => 'string|max:255',
                'description' => 'nullable|string',
                'image' => 'string|max:255',
                'brand' => 'string|max:255',
                'price' => 'numeric',
                'price_sale' => 'numeric',
                'category' => 'string|max:255',
                'stock' => 'integer'
        ]);
              
        return $validator;
    }
    
    /**
     * Validate data on Store action
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Object $validator
     */
    protected function validateDataStore(Request $request): Object
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'price_sale' => 'required|numeric',
            'category' => 'required|string|max:255',
            'stock' => 'required|integer'
        ]);
        
        return $validator;
    }
    
    /**
     * Return an Error when the Product is not found
     * 
     * @return JsonResponse $response
     */
    protected function errorProductNotFound(): JsonResponse
    {
        $response = response()->json(
            ["status" => "ERROR", 
            "message" => "Product not found"
            ])->setStatusCode(404);
        
        return $response;
    }
}
