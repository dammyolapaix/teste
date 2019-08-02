
    @extends('layouts.main')

    @section('title','VLT Advogados | Contato')

    @section('content')


        <!-- Seçao Contato -->

         <section id="contato" class="area-atuacao">

              <div class="container menor">
                <div class="row">
                  <div class="col-sm">
                    <h1>Entre em <strong style="color: #8b0000;">Contato</strong></h1>
                    <p>Estamos trabalhando para oferecer sempre o melhor para você. Conte com os nossos advogados para te orientarem em qualquer situação que você precisar.<br /><br />

                    Preencha corretamente o formulário abaixo que em breve retornaremos seu contato.</p>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

        <div class="divisao"></div>

    <!--   ////////////////////////////////////////// -->

    <!-- Seçao Formulário de Contato -->

         <section id="form-contato" class="form-area-atuacao">

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <h1>Quer saber mais sobre como podemos ajudar? <strong style="color: #8b0000;font-size: 22px;"><br />Agende um horário sem compromisso</strong></h1>
                    
                    <form action="#" method="POST" id="entre-contato">

                      <input type="text" name="nome" class="form-control mb-4" placeholder="Nome*" />
                      <input type="email" name="email" class="form-control mb-4" placeholder="E-mail*" />
                      <input type="text" name="assunto" class="form-control mb-4" placeholder="Assunto*" />
                     
                      <textarea name="mensagem" class="form-control mb-4" placeholder="Mensagem*" style="resize: none;height: 120px;"></textarea>

                      <!-- Sign in button -->
                      <button class="btn btn-unique" type="submit">Enviar </button>

                  </form>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

    
 <!--   ////////////////////////////////////////// -->

  @endsection

 
 