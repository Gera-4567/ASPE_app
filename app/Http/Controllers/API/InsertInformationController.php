<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// import from Model
use App\Models\InsertInformationModel;
// import from Requests
use App\Http\Requests\SaveInsertInformationRequest;
use App\Http\Requests\UpdateInsertInformationRequest;
use App\Http\Resources\InsertInformationResource;

class InsertInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InsertInformationResource::collection(InsertInformationModel::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveInsertInformationRequest $request)
    {
        InsertInformationModel::create($request->all());

        return response()->json([
            'response' => true,
            'message' => 'Information created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsertInformationRequest $request, InsertInformationModel $information)
    {
        $information->name = $request->has('name') ? $request->get('name') : $information->name;
        $information->email = $request->has('email') ? $request->get('email') : $information->email;
        $information->agent = $request->has('agent') ? $request->get('agent') : $information->agent;
        $information->activity = $request->has('activity') ? $request->get('activity') : $information->activity;
        $information->comments = $request->has('comments') ? $request->get('comments') : $information->comments;
        $information->save();

        return response()->json([
            'response' => true,
            'message' => 'Information updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsertInformationModel $information)
    {
        $information->delete();
        return response()->json([
            'response' => true,
            'message' => 'User deleted successfully'
        ], 200);
    }
}
