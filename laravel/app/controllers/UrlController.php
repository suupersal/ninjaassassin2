<?php

class UrlController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
			// Make sure current user owns the requested resource
		

       Auth::logout();
		return "You are in the index method";

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		

		return Request::get('username');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->username=Request::get('username');
		$user->email=Request::get('email');
		$user->password=Hash::make(Request::get('password'));
		//create a user
		$user->save();

		return Response::json(array(
			'error' => false,
			'message' => "User added successfully",
			200
			));



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		if ($id=='score')
		{
			$score = Auth::user()->score;
			Auth::logout();
			return Response::json(array(
				'error' => false,
				'score'=>$score,
				200
				));

		}

		else if ($id=='email')
		{
			$email = Auth::user()->email;
			Auth::logout();
			return Response::json(array(
				'error' => false,
				'email'=>$email,
				200
				));

		}
		else{
			Auth::logout();
			return Response::json(array(
				'error' => true,
				'score'=> "no such method",
				200
				));
		}
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		if($id=='score'){
			$user = Auth::user();
			$user->score=Request::get('score');
			$user->update();
		

		return Response::json(array(
			'error' => false,
			'message' => "successfully updated user score",
			200
			));
		}
else if($id=='email'){
			$user = Auth::user();
			$user->email=Request::get('email');
			$user->update();
		

		return Response::json(array(
			'error' => false,
			'message' => "successfully updated user email",
			200
			));
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}