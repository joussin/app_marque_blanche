<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LocationApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\LocationResource::collection(\SJoussin\LaravelScaffolder\dist\Models\Location::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\LocationValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\Location::create([
//            "name"          => $request->post('name'),
            'user_id' => $request->post('user_id'),

'lat' => $request->post('lat'),

'long' => $request->post('long'),

'address' => $request->post('address'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\LocationResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\Location $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Location::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\LocationResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\Location $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Location::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\LocationValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'user_id',

'lat',

'long',

'address',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\LocationResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\Location $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Location::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
