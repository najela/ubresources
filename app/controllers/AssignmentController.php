<?php

class AssignmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /assignment
	 *
	 * @return Response
	 */
	public function index()
	{
		$assignments = Assignment::whereLevel('300');
		return View::make('assignment.index')
		->with('title', 'Latest news in the University of Buea')
		->with('assignments', $assignments);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /assignment/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /assignment
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /assignment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /assignment/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /assignment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /assignment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}