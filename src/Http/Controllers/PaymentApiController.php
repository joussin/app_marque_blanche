<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PaymentApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\PaymentResource::collection(\SJoussin\Models\Payment::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\PaymentValidationRules::RULES);

        $model = \SJoussin\Models\Payment::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'type' => $request->post('type'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\Http\Resources\PaymentResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\Payment $model)
    {
        $model = \SJoussin\Models\Payment::find($id);

        return new \SJoussin\Http\Resources\PaymentResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\Payment $model)
    {
        $model = \SJoussin\Models\Payment::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\PaymentValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'command_id',

'type',

'status',


            ]
        ));

        return new \SJoussin\Http\Resources\PaymentResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\Payment $model)
    {
        $model = \SJoussin\Models\Payment::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
