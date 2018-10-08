<?php 
class account extends Controller{



	private $from;
	
	private $to;


	public function __construct()
	{
		parent::__construct();
	} 

	public function index($errormessage = '')
	{
		// Crypted default password

		$this->view('account', array());
	}

	public function add(){
		var_dump($_POST);
		die('sdfsadf');
	}

	public function delete($userId)
	{
		$this->users->deleteUser($userId);
		if($_SESSION['csm']['id'] == $userId)
		{
			header('Location: /csm/public/login');
		}
		else
		{
			header('Location: /csm/public/account');
		}
	}

	public function edit($id = false)
	{
		$errormessage = "";
		if(isset($_POST['submit']))
		{
			// print_r($_POST);die();
			$this->users->updateUser($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['role'], $_POST['id'], $_POST['vendors']);
		}
		$users = $this->users->getUsers();
		$user = $this->users->getUserById($id);
		$this->view('account/edit', array("user" => $user, "users" => $users, "error" => $errormessage, "menu" => $this->userRole, "exportURL" => $this->exportURL, "from" => $this->from, "to" => $this->to));
	}

	public function reset($userId)
	{
		$password = "01b307acba4f54f55aafc33bb06bbbf6ca803e9a";
		$this->users->setPassword($userId, $password);
		if($_SESSION['csm']['id'] == $userId)
		{
			header('Location: /csm/public/login');
		}
		else
		{
			header('Location: /csm/public/account');
		}
	}

	public function changePassword()
	{
		if(isset($_POST['oldpass']))
		{
			$oldpass = sha1($_POST['oldpass']);
			$user = $this->users->getUser($_SESSION['csm']['username'], sha1($_POST['oldpass']));
			if(!empty($user))
			{
				if(isset($_POST['newpass']) && isset($_POST['newpass2']) && $_POST['newpass2'] == $_POST['newpass'])
				{
					$this->users->setPassword($_SESSION['csm']['id'], sha1($_POST['newpass']));
					session_unset();
					session_destroy();
					header('Location: /csm/public/login');
				}
				else
				{
					header('Location: /csm/public/account');
				}
			}
			else
			{
				header('Location: /csm/public/account/');
			}
		}
	}
}