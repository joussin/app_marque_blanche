<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DeliveryApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\DeliveryResource::collection(\SJoussin\Models\Delivery::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\DeliveryValidationRules::RULES);

        $model = \SJoussin\Models\Delivery::create([
//            "name"          => $request->post('name'),
            'command_id' => $request->post('command_id'),

'delivery_user_id' => $request->post('delivery_user_id'),

'date_start' => $request->post('date_start'),

'date_finish_estimation' => $request->post('date_finish_estimation'),

'date_finish' => $request->post('date_finish'),

'status' => $request->post('status'),


    ]);

        return new \SJoussin\Http\Resources\DeliveryResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\Delivery $model)
    {
        $model = \SJoussin\Models\Delivery::find($id);
        $model = $model->loadMissing(["command"]);
        return new \SJoussin\Http\Resources\DeliveryResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\Delivery $model)
    {
        $model = \SJoussin\Models\Delivery::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\DeliveryValidationRules::RULES));

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

        return new \SJoussin\Http\Resources\DeliveryResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\Delivery $model)
    {
        $model = \SJoussin\Models\Delivery::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
