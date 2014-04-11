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
		


		return View::make('register.index');

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
		Auth::login($user);
		return Redirect::route('home');



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
			//return "Chesss";
			if(Auth::check()){
				$score = Auth::user()->score;
				return Response::json(array(
					'error' => false,
					'score'=>$score,
					200
					));
			}
			else{

				return Response::json(array(
					'error' => true,
					'message'=> 'not loged in',
					'score'=> "NA",
					200
					));
			}

		}

		else if ($id=='email')
		{
			$email = Auth::user()->email;
			
			return Response::json(array(
				'error' => false,
				'email'=>$email,
				200
				));

		}

		else if ($id=='top')
		{
			$users = DB::table('users')
			->orderBy('score', 'desc')->get();

			return Response::json(array(
				'error' => false,
				'user1'=>$users[0]->username,
				'score1'=> $users[0]->score,

				'user2'=>$users[1]->username,
				'score2'=> $users[1]->score,

				'user3'=>$users[2]->username,
				'score3'=> $users[2]->score,

				'user4'=>$users[3]->username,
				'score4'=> $users[3]->score,

			    'user5'=>$users[4]->username,
				'score5'=> $users[4]->score,

				200
				));

		}
		else{
			
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
			
			if($Auth::check())
			{
				$user = Auth::user();
				$user->score=Request::get('score');
				$user->update();


				return Response::json(array(
					'error' => false,
					'message' => "successfully updated user score",
					200
					));

			}
			else{
				return Response::json(array(
					'error' => true,
					'message' => "Not loged in",
					200
					));

			}
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