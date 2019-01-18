<?php
class home extends Controller{

	private $cashier;
	
	private $today;
	
	private $from;
	
	private $to;

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->data = array();
	} 

	public function index()
	{
		$this->view('home', $this->data);
	}

	public function reports()
	{
		$this->view('reports', $this->data);
	}

	public function charts()
	{
		$this->view('charts', $this->data);
	}

	public function setKeyword(){
		if(!empty($_POST['key'])){
			$_SESSION['csm']['keyword'] = $_POST['key'];
		}else{
			$_SESSION['csm']['keyword'] = '';
		}
		echo $_SESSION['csm']['keyword']; die();
	}


	public function completeValue($val, $length){
		$total = $length;
		$value = '';
		$amount = strlen($val);
		$toadd = $total - (int)$amount;
		for($i=0;$i<$toadd;$i++){
			$value .= "0";
		}
		return $value.$val;
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		header('Location: /csm/public/login');
	}

	private function renderView($data)
	{
		if(!empty($data))
		{
			$this->view('home', $data);
		}
		else
		{
			$this->view('home');
		}
	}

	public function setDefaultDates($from, $to)
	{
		setCookie("from", $from);
		$_COOKIE["from"] = $from;
		setCookie("to", $to);
		$_COOKIE["to"] = $to;
		if(!empty($from))
		{
			$this->from = $from;
		}
		if(!empty($to))
		{
			$this->to = $to;
		}
	}
}