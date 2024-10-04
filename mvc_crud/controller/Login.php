<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function logar()
	{
		$this->load->model("Usuario_model");
		$email = $this->input->post("Email");
		$senha = $this->input->post("Senha");
		$user = $this->Usuario_model->buscaPorEmailSenha($email,$senha);

		if($user){
			$this->session->set_userdata("usuario_logado",$user);
			redirect(base_url("Cliente/listarativos"));
		}else{
			$dados = array("mensagem" => "Não foi possível fazer o login!");
			$this->load->view("login",$dados);
		}
	}

	public function logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->sess_destroy();

		redirect(base_url("Login"));
	}
}