<?php 
namespace ItauBankline\Model;

class ConsultaTransacaoModel
{
	private $CodEmp;
	private $Pedido;
	private $Valor;
	private $tipPag;
	private $sitPag;
	private $dtPag;
	private $codAut;
	private $numId;
	private $compVend;
	private $tipCart;
	
	public function __construct($CodEmp=null, $Pedido=null, $Valor=null, $tipPag=null, $sitPag=null, $dtPag=null, $codAut=null, $numId=null, $compVend=null, $tipCart=null){
		$this->setCodEmp($CodEmp);
		$this->setPedido($Pedido);
		$this->setValor($Valor);
		$this->setTipPag($tipPag);
		$this->setSitPag($sitPag);
		$this->setDtPag($dtPag);
		$this->setCodAut($codAut);
		$this->setNumId($numId);
		$this->setCompVend($compVend);
		$this->setTipCart($tipCart);
	}
	
	public function getCodEmp() {
		return $this->CodEmp;
	}
	public function setCodEmp($CodEmp) {
		$this->CodEmp = $CodEmp;
		return $this;
	}
	public function getPedido() {
		return $this->Pedido;
	}
	public function setPedido($Pedido) {
		$this->Pedido = $Pedido;
		return $this;
	}
	public function getValor() {
		return $this->Valor;
	}
	public function setValor($Valor) {
		$this->Valor = $Valor;
		return $this;
	}
	public function getTipPag() {
		return $this->tipPag;
	}
	public function setTipPag($tipPag) {
		$this->tipPag = $tipPag;
		return $this;
	}
	public function getSitPag() {
		return $this->sitPag;
	}
	public function setSitPag($sitPag) {
		$this->sitPag = $sitPag;
		return $this;
	}
	public function getDtPag() {
		return $this->dtPag;
	}
	public function setDtPag($dtPag) {
		$this->dtPag = $dtPag;
		return $this;
	}
	public function getCodAut() {
		return $this->codAut;
	}
	public function setCodAut($codAut) {
		$this->codAut = $codAut;
		return $this;
	}
	public function getNumId() {
		return $this->numId;
	}
	public function setNumId($numId) {
		$this->numId = $numId;
		return $this;
	}
	public function getCompVend() {
		return $this->compVend;
	}
	public function setCompVend($compVend) {
		$this->compVend = $compVend;
		return $this;
	}
	public function getTipCart() {
		return $this->tipCart;
	}
	public function setTipCart($tipCart) {
		$this->tipCart = $tipCart;
		return $this;
	}
	
	
}