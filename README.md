PHP ITAUCRIPTO Itau Bankline
==============

Versão em PHP com a classe ItauCripto, originalmente escrita em Java baseado em gabrielrcouto/php-itaucripto.

Implementamos na mesma biblioteca as chamadas Webservice para geração de transação no Itau Bankline e também consultas.

Nossa biblioteca foi desenvolvida inicialmente para utilizar apenas o Boleto bancário, mas nada impede de usar as outras formas de pagamento.

Caso queira contribuir com as outras formas de pagamento, será muito bem vindo também.

Como a classe ItauCripto em Java foi descompilada, alguns nomes se tornaram nomes genéricos (ex: $paramString1, $paramString2).

Instalação
==============
```php
composer require dilneiss/itaubankline
```

Como usar o Webservice utilizando a própria Biblioteca
==============
Para gerar uma url para o cliente efetuar o pagamento, utilize o seguinte código
```php
	try {
			
		  //Coloque o código da empresa em MAIÚSCULO
		  $codEmp = "J1234567890123456789012345";
		  //Coloque a chave de criptografia em MAIÚSCULO
		  $chave = "ABCD123456ABCD12";
		  
		  //Preencha as variáveis abaixo com os dados do cliente e da cobrança
		  //Abaixo é só um exemplo!
		  $pedido = "1234";
		  $valor = "150,00";
		  $observacao = 1;
		  $nomeSacado = "Dilnei Soethe Spancerski";
		  $codigoInscricao = "";
		  $numeroInscricao = "";
		  $enderecoSacado = "";
		  $bairroSacado = "";
		  $cepSacado = "";
		  $cidadeSacado = "";
		  $estadoSacado = "";
		  $dataVencimento = "";
		  $urlRetorna = "";
		  $obsAd1 = "Observações linha 1";
		  $obsAd2 = "Observações linha 2";
		  $obsAd3 = "Observações linha 3";
		  
		  $itauCripto = new ItauCripto();
		  
		  $dados_criptografados = $itauCripto->geraDados($codEmp,$pedido,$valor,$observacao,$chave,$nomeSacado,$codigoInscricao,
		  													$numeroInscricao,$enderecoSacado,$bairroSacado,$cepSacado,$cidadeSacado,$estadoSacado,
													      $dataVencimento,$urlRetorna,$obsAd1,$obsAd2,$obsAd3);
													      
		  $itauService = new ItauBanklineService();
		  
		  $urlBoleto = $itauService->generateUrlBoletoItauBankline($dados_criptografados); //Utilize essa url para ir direto ao boleto bancário
		  
		  $urlItauBankline = $itauService->generateUrlBoletoItauBankline($dados_criptografados); //Utilize essa url para ir a tela do Itau Bankline e o cliente escolher a forma de pagamento
		  
		  //Aqui faça seu redirecionamento para a url gerada conforme desejado
			
		} catch (Exception $e) {
			exit($e->getMessage());
		}
```

Para efetuar uma consulta no Itau Bankline e retornar o status da transação, utilize o seguinte código
```php
	$metodoResultado = 1; //0 Para exibir a consulta em html legível e 1 para exibir a consulta em xml
	
	$itauCripto = new ItauCripto();
	$dadosCriptografados = $itauCripto->geraConsulta($codEmp , $pedido , $metodoResultado , $chave);
		
	try {
	
		$itauService = new ItauBanklineService();
		
		$transacao = $itauService->consultaTransacao($dadosCriptografados);
		
		var_dump($transacao);
		
	} catch (Exception $e) {
		exit($e->getMessage());
	}
```

Campos
==============

```php
  $pedido // Identificação do pedido - máximo de 8 dígitos (12345678) - Obrigatório  
  $valor // Valor do pedido - máximo de 8 dígitos + vírgula + 2 dígitos - 99999999,99 - Obrigatório  
  $observacao // Observações - máximo de 40 caracteres  
  $nomeSacado // Nome do sacado - máximo de 30 caracteres  
  $codigoInscricao // Código de Inscrição: 01->CPF, 02->CNPJ  
  $numeroInscricao // Número de Inscrição: CPF ou CNPJ - até 14 caracteres  
  $enderecoSacado // Endereco do Sacado - máximo de 40 caracteres  
  $bairroSacado // Bairro do Sacado - máximo de 15 caracteres  
  $cepSacado // Cep do Sacado - máximo de 8 dígitos  
  $cidadeSacado // Cidade do sacado - máximo 15 caracteres  
  $estadoSacado // Estado do Sacado - 2 caracteres  
  $dataVencimento // Vencimento do título - 8 dígitos - ddmmaaaa  
  $urlRetorna // URL do retorno - máximo de 60 caracteres  
  $obsAdicional1 // ObsAdicional1 - máximo de 60 caracteres  
  $obsAdicional2 // ObsAdicional2 - máximo de 60 caracteres  
  $obsAdicional3 // ObsAdicional3 - máximo de 60 caracteres
```

Author
==============

[@dilneiss88](http://twitter.com/dilneiss88)

Licença
==============

[MIT License](http://zenorocha.mit-license.org/)