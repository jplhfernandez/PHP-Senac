<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	var $tablePag = 'pagamento';
	var $tableCli = 'cliente';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addPagamento($Cliente_IDCliente,$Valor)
	{
		$Cliente_IDCliente = ['Cliente_IDCliente' => $Cliente_IDCliente];
		$Valor = ['Valor' => $Valor];
		$DataParcela = date('Y-m-d');
		
		if (strlen($Valor["Valor"]) != ''){
			for ($cont = 0; $cont <= 1; $cont++) {

				if ($cont == 0){
					$DataParcela = date('Y-m-d');
				}else{
					$DataParcela = date('Y-m-d',strtotime('1 year', strtotime($DataParcela)));
				}

				$Parcela = ['Parcela' => $cont + 1];
				$Valor = $Valor;
				$Data = ['Data' => $DataParcela];
				$Cliente_IDCliente = $Cliente_IDCliente;

				$Pagamento = array_merge($Parcela,$Valor,$Data,$Cliente_IDCliente);

				$this->db->insert($this->tablePag, $Pagamento);
			}
				return $this->db->insert_id();
		}
	}

	public function valorPorCliente($ID){
		$valor = $this->db->select('Valor')->from($this->tablePag)->where("Cliente_IDCliente='$ID'")->order_by("Data", "desc")->limit(1)->get()->result();
		return $valor;
	}

	public function update($valor)
	{
		$this->db->where('Cliente_IDCliente', $valor["Cliente_IDCliente"]);
		$this->db->where('Datapagto', '0000-00-00');
		return $this->db->update($this->tablePag, $valor);
	}

	public function buscarPagtoAberto()
	{
		$this->db->select('pagamento.*,cliente.Cartao,cliente.Nome');
		$this->db->join('cliente','Cliente_IDCliente=IDCliente','inner');
		$this->db->where("Datapagto='0000-00-00'");
		$this->db->order_by("Data", "asc");
		$pagamentos = $this->db->get('pagamento')->result();
		return $pagamentos;
	}

	public function buscarPagtoRecebido()
	{
		$this->db->select('pagamento.*,cliente.Cartao,cliente.Nome');
		$this->db->join('cliente','Cliente_IDCliente=IDCliente','inner');
		$this->db->where("Datapagto!='0000-00-00'");
		$this->db->order_by("Data", "desc");
		$pagamentos = $this->db->get('pagamento')->result();
		return $pagamentos;
	}

	public function atrasados(){
		$hoje = date("Y-m-d");
		$this->db->select('*');
		$this->db->where("Data<'$hoje'");
		$this->db->where("Datapagto='0000-00-00'");
		$this->db->order_by("Data", "desc");
		$atrasados = $this->db->get('pagamento')->result();
		return $atrasados;
	}

	public function buscarPagtoAbertoPorCliente($Cliente_IDCliente)
	{
		$pagamentos = $this->db->select('*')->from($this->tablePag)->where("Cliente_IDCliente='$Cliente_IDCliente' and Datapagto='0000-00-00'")->order_by("Parcela", "asc")->get()->result();
		return $pagamentos;
	}

	public function receberPagto($ID)
	{
		$pagamento = $this->db->select('Valor, Data, Datapagto')->from($this->tablePag)->where("IDParcela='$ID'")->get()->result();

		$hoje = date('Y-m-d');
		$Valor = $pagamento[0]->Valor;
		$data = $pagamento[0]->Data;
		$juros = 0;

		$diferenca = strtotime($hoje) - strtotime($data);
		$meses = (int) floor(($diferenca / (60 * 60 * 24))/30);

		/*
		if ($meses > 0 and ($pagamento[0]->Datapagto == '0000-00-00' or $pagamento[0]->Datapagto>$pagamento[0]->Data)){
			$juros = $Valor * 0.02 + $Valor * 0.01 * $meses;
		} else{
			$juros = 0;
		}
		*/

		$juros = 0;

		$juros = ['Juros' => $juros];
		$Datapagto = ['Datapagto' => $hoje];

		$dados = array_merge($juros,$Datapagto);

		$this->db->where('IDParcela', $ID);
		return $this->db->update($this->tablePag, $dados);
	}

	public function cancelarPagto($ID)
	{
		$juros = ['Juros' => 0];
		$Datapagto = ['Datapagto' => '0000-00-00'];

		$dados = array_merge($juros,$Datapagto);

		$this->db->where('IDParcela', $ID);
		return $this->db->update($this->tablePag, $dados);
	}

	public function cancelarContrato($IDCliente)
	{
		validar_session();
		$valorMulta = $this->session->userdata("valorMulta");

		$Valor = ['Valor' => 0];
		$Datapagto = ['Datapagto' => date('Y-m-d')];

		$Pagamento = array_merge($Valor,$Datapagto);

		$this->db->where('Cliente_IDCliente', $IDCliente);
		$this->db->where('Datapagto', '0000-00-00');
		$this->db->update($this->tablePag, $Pagamento);

		$Parcela = ['Parcela' => 999];
		$Valor = ['Valor' => $valorMulta];
		$Juros = ['Juros' => 0];
		$Data = ['Data' => date('Y-m-d')];
		$Datapagto = ['Datapagto' => date('Y-m-d')];
		$Cliente_IDCliente = ['Cliente_IDCliente' => $IDCliente];

		$Pagamento = array_merge($Parcela,$Valor,$Juros,$Data,$Datapagto,$Cliente_IDCliente);

		$this->db->insert($this->tablePag, $Pagamento);
	}
}
?>