<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\ProductResource::collection(\SJoussin\LaravelScaffolder\dist\Models\Product::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\ProductValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\Product::create([
//            "name"          => $request->post('name'),
            'name' => $request->post('name'),

'description' => $request->post('description'),

'price' => $request->post('price'),

'image' => $request->post('image'),

'available' => $request->post('available'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\ProductResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\Product $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Product::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\ProductResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\Product $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Product::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\ProductValidationRules::RULES));

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

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\ProductResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\Product $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Product::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
