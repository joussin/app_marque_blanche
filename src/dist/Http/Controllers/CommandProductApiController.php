<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommandProductApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandProductResource::collection(\SJoussin\LaravelScaffolder\dist\Models\CommandProduct::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\CommandProductValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\CommandProduct::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'product_id' => $request->post('product_id'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandProductResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\CommandProduct $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\CommandProduct::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandProductResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\CommandProduct $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\CommandProduct::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\CommandProductValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'command_id',

'product_id',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandProductResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\CommandProduct $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\CommandProduct::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
