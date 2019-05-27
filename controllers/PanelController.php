<?php
class PanelController extends ControllerBase
{
	//Datos simulacion
	private $users = array(['email' => 'admin@admin', 'clave' => 1234, 'tipo' => 'admin'],
					 ['email' => 'super@super', 'clave' => 1234, 'tipo' => 'super'],
					 ['email' => 'user@user', 'clave' => 1234, 'tipo' => 'user']);
					 

	public function index()
	{
		$this->view('index', null);
	}
	public function super()
	{
		$this->view('super', null);
	}
	public function admin()
	{
		$this->view('admin', null);
	}
	public function user()
	{
		$this->view('user', null);
	}
	public function error()
	{
		$this->view('notFound', null);
	}
	public function ticket()
	{
		$this->view('ticket', null);
	}

	public function login()
	{
		if($this->isAjax())
		{
			$response = array();

			if(!empty(trim($_POST['email'])) && !empty(trim($_POST['clave'])))
			{
				//Consulta
				$exist = false;
				$tipo = '';

				foreach ($this->users as $key => $value) 
				{
					if($_POST['email'] == $value['email'] && $_POST['clave'] == $value['clave'])
					{
						$exist = true;
						$tipo = $value['tipo'];
						break;
					}
				}

				if($exist)
				{
					$response['success'] = true;
					$response['message'] = 'Ingresa';
					$response['tipo'] = $tipo;
				}else
				{
					$response['success'] = false;
					$response['message'] = 'Datos erroneos';
				}
			}else
			{
				$response['success'] = false;
				$response['message'] = 'Complete los datos';
			}

			echo json_encode($response);
		}else
		{
			echo 'Error';
		}
	}

	
}