<?php namespace controllers;
use lib\view as View;

/**
* 
*/
class Test extends \lib\Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($id)
	{

		$author = new \Bookstore\Author();
		$author->setFirstName('Mama');
		$author->setLastName('Irale');
		$author->save();
		$this->data['title'] ='Test Page';
		$this->data['authors'] = \Bookstore\AuthorQuery::create()->find();

		View::renderTwigTemplate('header',$this->data);
		View::renderTwigView('test/twig',$this->data);
		View::renderTwigTemplate('footer',$this->data);

	}
}

 ?>