<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Repositories\CustomizedForm\CustomizedFormRepository;

class CustomizedFormController extends Controller
{
    protected $model;

    function __construct(CustomizedFormRepository $model)
    {
        $this->model  =$model;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->model->all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());
		return $this->model->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->model->byId($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $this->model->update($id,$request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->model->destroy($id);
	}
}
