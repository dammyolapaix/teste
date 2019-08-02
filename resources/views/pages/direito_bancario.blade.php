
    @extends('layouts.main')

    @section('title','Vlt Advogados | Direito Bancário')

    @section('content')

      <!-- Slide Topo -->

        <section id="slide-topo-bancario" class="slide-topo">
          <div class="container-fluid" style="overflow: hidden;padding-right: 0; padding-left: 0;">
            <div class="row">
              <div class="col-md-12" style="padding-right: 0; padding-left: 0;text-align: center;">
                
              </div>
            </div>
          </div>
        </section>

        <!--   ////////////////////////////////////////// -->

        <!-- Seçao Direito Bancário -->

         <section id="direito-bancario" class="area-atuacao">

              <div class="container menor">
                <div class="row">
                  <div class="col-sm">
                    <h1>Direito <strong style="color: #8b0000;">Bancário</strong></h1>
                    <p>O Direito Bancário é ramo do Direito Privado especializado no tratamento do dinheiro, das instituições vocacionadas a trabalhar com ele assim como as relações que nascem do contato destes entes com o indivíduo. É nele que encontramos o conjunto de princípios e normas jurídicas que regulam a atividade bancária, a constituição e funcionamento das instituições financeiras.<br /><br />

                    Podemos compreender a atividade bancária como o conjunto de práticas, atos ou contratos executados por instituições bancárias, ou seja aquilo que conhecemos como operações bancárias.<br /><br />

                    Aqui na VLT Advogados você conta com advogados especializados para lhe proporcionar muito mais tranquilidade e segurança para se dedicar a sua rotina do dia-a-dia conquistando todos os seus objetivos.</p>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

        <div class="divisao"></div>

    <!--   ////////////////////////////////////////// -->

    <!-- Seçao Formulário de Contato -->

         <section id="form-direito-bancario" class="form-area-atuacao">

              <div class="container">
                <div class="row">
                  <div class="col">
                    <h1>Quer saber mais sobre como podemos ajudar? <strong style="color: #8b0000;font-size: 22px;"><br />Agende um horário sem compromisso</strong></h1>
                    
                    <form action="#" method="POST" id="direito-bancario">

                      <input type="text" name="nome" class="form-control mb-4" placeholder="Nome*" />
                      <input type="email" name="email" class="form-control mb-4" placeholder="E-mail*" />
                      <input type="tel" name="telefone" class="form-control mb-4" placeholder="Telefone*" />
                      <input type="text" name="cidade" class="form-control mb-4" placeholder="Cidade*" />
                      <input type="text" name="data" class="form-control mb-4" placeholder="Data e horário desejados*" />
                      <textarea name="texto" class="form-control mb-4" placeholder="Descreva como podemos ajudar*" style="resize: none;height: 120px;"></textarea>

                      <!-- Sign in button -->
                      <button class="btn btn-unique" type="submit">Agendar Horário</button>

                  </form>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

    
 <!--   ////////////////////////////////////////// -->

  @endsection

 
 