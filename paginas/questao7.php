<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">
      <h1 class="masthead-heading mb-0">Questão – 7</h1>
      <p class="mt-3">Faça um algoritmo que leia 100 números randômicos, calcule e mostre a soma dos 10 primeiros números pares.</p>
      <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-arrow-down"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      <div class="container d-flex align-items-center flex-column">
        <div class="col-12 col-md-6">
          <form action="" class="form questao7">
          <div class="form-group text-left">
              <label for="numeros">Quantidade de numeros randômicos:</label>
              <input type="number" class="form-control" name="numeros" plasceholder="Quantidades de números" value="100" required>
            </div>
            <div class="form-group text-left">
              <label for="pares">Números pares a serem somados:</label>
              <input type="number" class="form-control" name="pares" plasceholder="Números pares a serem somados" value="10" required>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success btn-block">Calcular</button>
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