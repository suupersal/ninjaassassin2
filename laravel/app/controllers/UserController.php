<?php 
class UserController extends BaseController{
	//public $restful = true;
	public function index(){
		
		return View::make('users.index');
		
	}
	
	public function showAllUsers(){
		
		$users = User::all();
	return View::make('users.index')
	->with('title','Users List Page')
	->with('users',$users);
	}
	
	public function viewUser($id){
		$user = User::find($id);
			return View::make('users.view')
			->with('title','Individual User Page')
			->with('user',$user);
			
		
	}
}

?>