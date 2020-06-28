<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">
      <h1 class="masthead-heading mb-0">Questão – 9</h1>
      <p class="mt-3">Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</p>
      <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-arrow-down"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      <div class="container d-flex align-items-center flex-column">
        <div class="col-12 col-md-6">
          <form action="" class="form questao9">
            <div class="form-group text-left">
              <label for="valor">Valor do produto:</label>
              <input type="number" step="0.01" class="form-control" name="valor" plasceholder="Informe o valor do produto" required>
            </div>
            <div class="form-group text-left">
              <label for="acrescimo">Acréscimo em %:</label>
              <input type="number" class="form-control" name="acrescimo" plasceholder="Informe o acrescimo em %" value="16" required>
            </div>
            <div class="form-group text-left">
              <label for="parcelas">Quantidade de parcelas:</label>
              <input type="number" class="form-control" name="parcelas" plasceholder="Informe as parcelas" value="10" required>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success btn-block">Mostrar resultados</button>
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