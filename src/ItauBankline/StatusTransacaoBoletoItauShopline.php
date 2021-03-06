<?php
namespace ItauBankline;

class StatusTransacaoBoletoItauShopline
{
	
	const PAGAMENTO_EFETUADO 							= '00';
	const SITUACAO_NAO_FINALIZADA 						= '01';
	const ERRO_NO_PROCESSAMENTO 						= '02';
	const PAGAMENTO_NAO_LOCALIZADO 						= '03';
	const BOLETO_EMITIDO_COM_SUCESSO 					= '04';
	const PAGAMENTO_EFETUADO_AGUARDANDO_COMPENSACAO 	= '05';
	const PAGAMENTO_NAO_COMPENSADO 						= '06';
	
	public static function getDescricao($codStatus){
		
		switch($codStatus) {
			case static::PAGAMENTO_EFETUADO: 						return 'Pagamento efetuado';
			case static::SITUACAO_NAO_FINALIZADA: 					return 'Situa��o de pagamento n�o finalizada (tente novamente)';
			case static::ERRO_NO_PROCESSAMENTO: 					return 'Erro no processamento da consulta (tente novamente)';
			case static::PAGAMENTO_NAO_LOCALIZADO: 					return 'Pagamento n�o localizado (consulta fora de prazo ou pedido n�o registrado no banco)';
			case static::BOLETO_EMITIDO_COM_SUCESSO: 				return 'Boleto emitido com sucesso';
			case static::PAGAMENTO_EFETUADO_AGUARDANDO_COMPENSACAO: return 'Pagamento efetuado, aguardando compensa��o';
			case static::PAGAMENTO_NAO_COMPENSADO: 					return 'Pagamento n�o compensado';
		}
		
		throw new \Exception("C�digo de status $codStatus n�o encontrado");
		
	}
	
}