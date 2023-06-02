<?php

namespace SJoussin\LaravelScaffolder\dist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\LaravelScaffolder\dist\Http\Resources\UserResource::collection(\SJoussin\LaravelScaffolder\dist\Models\User::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\LaravelScaffolder\dist\ValidationRules\UserValidationRules::RULES);

        $model = \SJoussin\LaravelScaffolder\dist\Models\User::create([
//            "name"          => $request->post('name'),
            'phone' => $request->post('phone'),

'username' => $request->post('username'),

'password' => $request->post('password'),

'role' => $request->post('role'),


    ]);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\UserResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\LaravelScaffolder\dist\Models\User $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\User::find($id);

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\UserResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\LaravelScaffolder\dist\Models\User $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\User::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\LaravelScaffolder\dist\ValidationRules\UserValidationRules::RULES));

        $model->update($request->only(
            [

//                "name",
                'phone',

'username',

'password',

'role',


            ]
        ));

        return new \SJoussin\LaravelScaffolder\dist\Http\Resources\UserResource($model);
    }


    public function destroy( $id) //\SJoussin\LaravelScaffolder\dist\Models\User $model)
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\User::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
