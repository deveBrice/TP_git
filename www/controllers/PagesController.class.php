<?php
/*Pages controller*/ 
class PagesController{
	public function defaultAction(){


		$v = new View("homepage", "back");
		$v->assign("pseudo","prof");
		echo 'tata';
	}
	

}