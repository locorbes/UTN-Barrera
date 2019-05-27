<?php
class ErrorController extends ControllerBase
{
	public function __construct()
	{
		$this->view('notFound', null);
	}
}

?>