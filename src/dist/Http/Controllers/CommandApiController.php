<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommandApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandResource::collection(\SJoussin\LaravelScaffolder\dist\Models\Command::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\CommandValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\Command::create([
//            "name"          => $request->post('name'),
            'user_id' => $request->post('user_id'),

'date' => $request->post('date'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\Command $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Command::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\Command $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Command::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\CommandValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'user_id',

'date',

'status',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\CommandResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\Command $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Command::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
