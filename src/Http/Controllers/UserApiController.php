<?php

namespace SJoussin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserApiController extends Controller
{

    public function index(Request $request)
    {
        return \SJoussin\Http\Resources\UserResource::collection(\SJoussin\Models\User::all());
    }


    public function store(Request $request)
    {
        $validated = $this->validate($request, \SJoussin\ValidationRules\UserValidationRules::RULES);

        $model = \SJoussin\Models\User::create([
            'phone' => $request->post('phone'),
            'role' => $request->post('role'),
    ]);

        return new \SJoussin\Http\Resources\UserResource($model);
    }


    public function show(Request $request, $id) //\SJoussin\Models\User $model)
    {
        $model = \SJoussin\Models\User::find($id);

        return new \SJoussin\Http\Resources\UserResource($model);
    }


    public function update(Request $request,  $id) //\SJoussin\Models\User $model)
    {
        $model = \SJoussin\Models\User::find($id);
        $validated = $this->validate($request, str_replace('required|', '', \SJoussin\ValidationRules\UserValidationRules::RULES));

        $model->update($request->only(
            [
                'phone',
                'role',
            ]
        ));

        return new \SJoussin\Http\Resources\UserResource($model);
    }


    public function destroy( $id) //\SJoussin\Models\User $model)
    {
        $model = \SJoussin\Models\User::find($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
