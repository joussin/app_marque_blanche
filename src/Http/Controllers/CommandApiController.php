<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommandApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\CommandResource::collection(\SJoussin\Models\Command::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\CommandValidationRules::RULES);

        $model = \SJoussin\Models\Command::create([
//            "name"          => $request->post('name'),
            'user_id' => $request->post('user_id'),

'date' => $request->post('date'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\Http\Resources\CommandResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\Command $model)
    {
        $model = \SJoussin\Models\Command::find($id);

        return new \SJoussin\Http\Resources\CommandResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\Command $model)
    {
        $model = \SJoussin\Models\Command::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\CommandValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'user_id',

'date',

'status',


            ]
        ));

        return new \SJoussin\Http\Resources\CommandResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\Command $model)
    {
        $model = \SJoussin\Models\Command::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
