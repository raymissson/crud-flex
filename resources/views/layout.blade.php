<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crie, Edite e Delete</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="http://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {

    	$("#cep").mask("99999-999",{completed:function(){
    		var cep = $(this).val().replace(/[^0-9]/, "");

    		// Validação do CEP; caso o CEP não possua 8 números, então cancela
    		// a consulta
    		if(cep.length != 8){
    			return false;
    		}

    		// A url de pesquisa consiste no endereço do webservice + o cep que
    		// o usuário informou + o tipo de retorno desejado (entre "json",
    		// "jsonp", "xml", "piped" ou "querty")
    		var url = "http://viacep.com.br/ws/"+cep+"/json/";

    		$.getJSON(url, function(dadosRetorno){
    			try{
    				// Preenche os campos de acordo com o retorno da pesquisa
    				$("#endereco").val(dadosRetorno.logradouro);
    				$("#bairro").val(dadosRetorno.bairro);
    				$("#cidade").val(dadosRetorno.localidade);
    				$("#uf").val(dadosRetorno.uf);
    				$("#nr_end").focus();
    			}catch(ex){}
    		});
    	}});
    });
</script>
</body>
</html>
