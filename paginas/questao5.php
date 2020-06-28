<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">
      <h1 class="masthead-heading mb-0">Questão – 5</h1>
      <p class="mt-3">Um funcionário recebe aumento salarial anualmente. Sabe-se que:
        <ul class="text-left">
          <li>Esse funcionário foi contratado em 2015, com salário inicial de R$1000,00;</li>
          <li>Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;</li>
          <li>A partir de 2017 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior. Exiba o salário atual desse funcionário.</li>
        </ul>
      </p>
      <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-arrow-down"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      <div class="container d-flex align-items-center flex-column">
        <div class="col-12 col-md-6">
          <form action="" class="form questao5">
          <div class="form-group text-left">
              <label for="salario">Salário Inicial:</label>
              <input type="number" step="0.01" class="form-control" name="salario" plasceholder="Informe o salário incial" value="1000.00" required>
            </div>
            <div class="form-group text-left">
              <label for="ano">Ano Inicial:</label>
              <input type="number" class="form-control" name="ano" plasceholder="Informe o ano inicial do aumento" value="2016" required>
            </div>
            <div class="form-group text-left">
              <label for="aumento">Aumento em %:</label>
              <input type="number" step="0.01" class="form-control" name="aumento" plasceholder="Informe o aumento em %" value="1.5" required>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success btn-block">Calcular Salário</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</header>
<!-- Resultado -->
<div class="portfolio-modal modal fade" id="modalResultado" tabindex="-1" role="dialog" aria-labelledby="#modalResultadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
          <div class="modal-body text-center">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <h2 class="portfolio-modal-title text-secondary mb-0">Resultado</h2>
                          <div class="divider-custom">
                              <div class="divider-custom-line"></div>
                              <div class="divider-custom-icon"><i class="fas fa-arrow-down"></i></div>
                              <div class="divider-custom-line"></div>
                          </div>
                          <p class="mb-5 resultado text-break"></p>
                          <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Fechar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>