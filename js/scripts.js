(function($) {
  "use strict"; // Start of use strict

  // Questão - 1
  if($(".questao1").length) {
    $(".questao1").on("submit", function(e){
      e.preventDefault();

      var numero1 = parseInt($("input[name='numero1']").val());
      var numero2 = parseInt($("input[name='numero2']").val());
      var soma = numero1 + numero2;
      var resultado = soma * numero1;

      $("#modalResultado .resultado").html(`A soma entre ${numero1} e ${numero2} é: <strong>${soma}</strong>. Multiplicando este resultado pelo primeiro número, o novo resultado é: <strong>${resultado}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 2
  if($(".questao2").length) {
    $(".questao2").on("submit", function(e){
      e.preventDefault();

      var val1 = parseFloat($("input[name='valor1']").val());
      var val2 = parseFloat($("input[name='valor2']").val());
      var val3 = parseFloat($("input[name='valor3']").val());
      var media = (val1 + val2 + val3) / 3;

      $("#modalResultado .resultado").html(`As suas notas foram: <strong>${val1}</strong>, <strong>${val2}</strong> e <strong>${val3}</strong>. A sua média é <strong>${media.toFixed(2)}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 3
  if($(".questao3").length) {
    $(".questao3").on("submit", function(e){
      e.preventDefault();

      var numero1 = parseInt($("input[name='numero1']").val());
      var numero2 = parseInt($("input[name='numero2']").val());
      var quadrado1 = parseInt(Math.pow(numero1, 2));
      var quadrado2 =  parseInt(Math.pow(numero2, 2));
      var soma = quadrado1 + quadrado2;

      $("#modalResultado .resultado").html(`O quadrado do de <strong>${numero1}</strong> é: <strong>${quadrado1}</strong>.<br />O quadrado do de <strong>${numero2}</strong> é: <strong>${quadrado2}</strong>.<br />A soma do dois quadrados é: <strong>${soma}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 4
  if($(".questao4").length) {
    $(".questao4").on("submit", function(e){
      e.preventDefault();

      var val1 = parseFloat($("input[name='valor1']").val());
      var resultado = val1 * 3.6;

      $("#modalResultado .resultado").html(`O valor de <strong>${val1}</strong> em m/s é o equivalente a <strong>${resultado.toFixed(2)}</strong> km/h`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 5
  if($(".questao5").length) {
    $(".questao5").on("submit", function(e){
      e.preventDefault();

      var salario = parseFloat($("input[name='salario']").val());
      var aumento = parseFloat($("input[name='aumento']").val());
      var ano = parseInt($("input[name='ano']").val());
      var data = new Date();

      do{
        salario = salario + (salario * aumento / 100);
        aumento = aumento * 2;
        ano++;
      } while(ano <= data.getFullYear());

      $("#modalResultado .resultado").html(`O seu salário no ano de <strong>${ano}</strong> é <strong>${salario.toFixed(2)}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 6
  if($(".questao6").length) {
    $(".questao6").on("submit", function(e){
      e.preventDefault();

      var valor = parseFloat($("input[name='valor']").val());
      var desconto = parseFloat($("input[name='desconto']").val());
      var resultado = valor - (valor * desconto / 100);

      $("#modalResultado .resultado").html(`O valor original do produto é: <strong>R$ ${valor.toFixed(2)}</strong>.<br />O valor do desconto é: <strong>R$ ${(valor - resultado).toFixed(2)}</strong>.<br />O valor do produto com o desconto é: <strong>R$ ${resultado.toFixed(2)}</strong>.`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 7
  if($(".questao7").length) {
    $(".questao7").on("submit", function(e){
      e.preventDefault();

      var numeros = parseFloat($("input[name='numero']").val());
      var qtdPares = parseFloat($("input[name='pares']").val());
      var pares = [], random, soma, contadorPar = 0;

      for(var i =1; i <= 100; i++) {
        random = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
        
        if(random % 2 == 0) {
          contadorPar++;
          if (contadorPar <= qtdPares ) {
            pares.push(random);
          }
        }
      }
      soma = pares.reduce((total, currentElement) => total + currentElement);

      $("#modalResultado .resultado").html(`Os <strong>${qtdPares}</strong> números pares gerados foram: [<strong>${pares.toString()}</strong>].<br />A soma de todos os números pares é <strong>${soma}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 8
  if($(".questao8").length) {
    $(".questao8").on("submit", function(e){
      e.preventDefault();

      var op = parseInt($("select[name='operacao']").val());
      var val1 = parseFloat($("input[name='val1']").val());
      var val2 = parseFloat($("input[name='val2']").val());
      var resultado;
      console.log(op);
      
      switch(op) {
        case 1:
          resultado= val1 + val2;
          break;
        case 2:
          resultado= val1 - val2;
          break;
        case 3:
          resultado= val1 * val2;
          break;
        case 4:
          resultado= val1 / val2;
          break;
        default:
          resultado = "Operação inválida";
          break;
      }

      $("#modalResultado .resultado").html(`O resultado é: <strong>${resultado}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 9
  if($(".questao9").length) {
    $(".questao9").on("submit", function(e){
      e.preventDefault();

      var valor = parseFloat($("input[name='valor']").val());
      var acrescimo = parseFloat($("input[name='acrescimo']").val());
      var parcelas = parseInt($("input[name='parcelas']").val());
      var valoTotal = valor + (valor * acrescimo / 100);

      $("#modalResultado .resultado").html(`O valor original do produto é: <strong>R$ ${valor.toFixed(2)}</strong>.<br />O valor do acréscimo é: <strong>R$ ${(valoTotal - valor).toFixed(2)}</strong>.<br />O valor do produto com o acréscimo é: <strong>R$ ${valoTotal.toFixed(2)}</strong>.<br /> São ${parcelas} parcelas de <strong>R$ ${(valoTotal / parcelas).toFixed(2)}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }

  // Questão - 10
  if($(".questao10").length) {
    $(".questao10").on("submit", function(e){
      e.preventDefault();

      var distancia = parseFloat($("input[name='distancia']").val());
      var combustivel = parseFloat($("input[name='combustivel']").val());
      var consumoMedio = distancia / combustivel;

      $("#modalResultado .resultado").html(`O cosumo médio é <Strong>${consumoMedio.toFixed(2)}</strong>`);

      $('#modalResultado').modal('show');

      return false;
    });
  }
})(jQuery); // End of use strict
  