
    @extends('layouts.main')

    @section('title','Vlt Advogados | Direito Criminal')

    @section('content')

      <!-- Slide Topo -->

        <section id="slide-topo-criminal" class="slide-topo">
          <div class="container-fluid" style="overflow: hidden;padding-right: 0; padding-left: 0;">
            <div class="row">
              <div class="col-md-12" style="padding-right: 0; padding-left: 0;text-align: center;">
        
              </div>
            </div>
          </div>
        </section>

        <!--   ////////////////////////////////////////// -->

        <!-- Seçao Direito Criminal -->

         <section id="direito-criminal" class="area-atuacao">

              <div class="container menor">
                <div class="row">
                  <div class="col-sm">
                    <h1>Direito <strong style="color: #8b0000;">Criminal</strong></h1>
                    <p>O Direito Criminal ou Direito Penal é dedicada principalmente à realização de defesas contra acusações de prática de crime contra pessoas físicas e/ou jurídicas, tanto em esfera estadual quanto federal. A defesa deve se iniciar, sempre que possível, desde a fase investigativa, que normalmente ocorre em um inquérito policial ou perante o Ministério Público. Somente assim os advogados terão plenas condições de estudar o caso e fornecer às autoridades envolvidas os melhores esclarecimentos.<br /><br />

                    Aqui na VLT Advogados você conta com advogados especializados para lhe proporcionar muito mais tranquilidade e segurança para se dedicar a sua rotina do dia-a-dia conquistando todos os seus objetivos.</p>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

        <div class="divisao"></div>

    <!--   ////////////////////////////////////////// -->

    <!-- Seçao Formulário de Contato -->

         <section id="form-direito-criminal" class="form-area-atuacao">

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <h1>Quer saber mais sobre como podemos ajudar? <strong style="color: #8b0000;font-size: 22px;"><br />Agende um horário sem compromisso</strong></h1>
                    
                    <form action="#" method="POST" id="direito-criminal">

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

 
 