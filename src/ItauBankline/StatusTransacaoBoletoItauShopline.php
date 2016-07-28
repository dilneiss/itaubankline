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
			case static::SITUACAO_NAO_FINALIZADA: 					return 'Situaзгo de pagamento nгo finalizada (tente novamente)';
			case static::ERRO_NO_PROCESSAMENTO: 					return 'Erro no processamento da consulta (tente novamente)';
			case static::PAGAMENTO_NAO_LOCALIZADO: 					return 'Pagamento nгo localizado (consulta fora de prazo ou pedido nгo registrado no banco)';
			case static::BOLETO_EMITIDO_COM_SUCESSO: 				return 'Boleto emitido com sucesso';
			case static::PAGAMENTO_EFETUADO_AGUARDANDO_COMPENSACAO: return 'Pagamento efetuado, aguardando compensaзгo';
			case static::PAGAMENTO_NAO_COMPENSADO: 					return 'Pagamento nгo compensado';
		}
		
		throw new \Exception("Cуdigo de status $codStatus nгo encontrado");
		
	}
	
}