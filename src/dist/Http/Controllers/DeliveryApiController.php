<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DeliveryApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\DeliveryResource::collection(\SJoussin\LaravelScaffolder\dist\Models\Delivery::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\DeliveryValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\Delivery::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'delivery_user_id' => $request->post('delivery_user_id'),

'date_start' => $request->post('date_start'),

'date_finish_estimation' => $request->post('date_finish_estimation'),

'date_finish' => $request->post('date_finish'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\DeliveryResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\Delivery $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Delivery::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\DeliveryResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\Delivery $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Delivery::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\DeliveryValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'command_id',

'delivery_user_id',

'date_start',

'date_finish_estimation',

'date_finish',

'status',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\DeliveryResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\Delivery $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Delivery::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
