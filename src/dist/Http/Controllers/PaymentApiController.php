<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PaymentApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\PaymentResource::collection(\SJoussin\LaravelScaffolder\dist\Models\Payment::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\PaymentValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\Payment::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'type' => $request->post('type'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\PaymentResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\Payment $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Payment::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\PaymentResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\Payment $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Payment::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\PaymentValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'command_id',

'type',

'status',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\PaymentResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\Payment $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Payment::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
