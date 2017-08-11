<?php

class Controller_Home extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		//return Response::forge(View::forge('welcome/index'));
		die('Ini halaman home');
	}

	public function action_add()
	{
		// return Response::forge(View::forge('home/add'));

		$data = array();
		$this -> template -> title = 'Home';
		$this -> template -> content = View::forge('home/add', $data);
	}
}
 