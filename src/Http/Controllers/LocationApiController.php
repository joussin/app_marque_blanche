<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LocationApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\LocationResource::collection(\SJoussin\Models\Location::all()->loadMissing(['user']));
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\LocationValidationRules::RULES);

        $model = \SJoussin\Models\Location::create([
//            "name"          => $request->post('name'),
            'user_id' => $request->post('user_id'),

'lat' => $request->post('lat'),

'long' => $request->post('long'),

'address' => $request->post('address'),


    ]);

        return new \SJoussin\Http\Resources\LocationResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\Location $model)
    {
        $model = \SJoussin\Models\Location::find($id);

        $model = $model->loadMissing(['user']);

        return new \SJoussin\Http\Resources\LocationResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\Location $model)
    {
        $model = \SJoussin\Models\Location::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\LocationValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'user_id',

'lat',

'long',

'address',


            ]
        ));

        return new \SJoussin\Http\Resources\LocationResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\Location $model)
    {
        $model = \SJoussin\Models\Location::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
