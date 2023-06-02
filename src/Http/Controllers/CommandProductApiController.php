<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommandProductApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\CommandProductResource::collection(\SJoussin\Models\CommandProduct::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\CommandProductValidationRules::RULES);

        $model = \SJoussin\Models\CommandProduct::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'product_id' => $request->post('product_id'),


    ]);

        return new \SJoussin\Http\Resources\CommandProductResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\CommandProduct $model)
    {
        $model = \SJoussin\Models\CommandProduct::find($id);

        return new \SJoussin\Http\Resources\CommandProductResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\CommandProduct $model)
    {
        $model = \SJoussin\Models\CommandProduct::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\CommandProductValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'command_id',

'product_id',


            ]
        ));

        return new \SJoussin\Http\Resources\CommandProductResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\CommandProduct $model)
    {
        $model = \SJoussin\Models\CommandProduct::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
