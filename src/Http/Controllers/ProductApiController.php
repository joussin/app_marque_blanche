<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\ProductResource::collection(\SJoussin\Models\Product::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\ProductValidationRules::RULES);

        $model = \SJoussin\Models\Product::create([
//            "name"          => $request->post('name'),
            'name' => $request->post('name'),

'description' => $request->post('description'),

'price' => $request->post('price'),

'image' => $request->post('image'),

'available' => $request->post('available'),


    ]);

        return new \SJoussin\Http\Resources\ProductResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\Product $model)
    {
        $model = \SJoussin\Models\Product::find($id);

        return new \SJoussin\Http\Resources\ProductResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\Product $model)
    {
        $model = \SJoussin\Models\Product::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\ProductValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'name',

'description',

'price',

'image',

'available',


            ]
        ));

        return new \SJoussin\Http\Resources\ProductResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\Product $model)
    {
        $model = \SJoussin\Models\Product::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
