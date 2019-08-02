
    @extends('layouts.main')

    @section('title','Vlt Advogados | Direito Civil')

    @section('content')

      <!-- Slide Topo -->

        <section id="slide-topo-civil" class="slide-topo">
          <div class="container-fluid" style="overflow: hidden;padding-right: 0; padding-left: 0;">
            <div class="row">
              <div class="col-md-12" style="padding-right: 0; padding-left: 0;text-align: center;">
                
              </div>
            </div>
          </div>
        </section>

        <!--   ////////////////////////////////////////// -->

        <!-- Seçao Direito Civil -->

         <section id="direito-civil" class="area-atuacao">

              <div class="container menor">
                <div class="row">
                  <div class="col-sm">
                    <h1>Direito <strong style="color: #8b0000;">Civil</strong></h1>
                    <p>O Direito civil é um ramo do Direito que trata do conjunto de normas reguladoras dos direitos e obrigações de ordem privada concernente às pessoas, aos seus direitos e obrigações, aos bens e às suas relações, enquanto membros da sociedade.
                    De forma geral, o Direito Civil abrange o conjunto de normas previstas pelo Código Civil. No Brasil, o atual Código Civil, em vigor desde 11 de janeiro de 2003, contém 2.046 artigos. Estabelece, em sua parte geral, do direito das pessoas, dos bens e dos fatos jurídicos. Na parte especial, trata do direito das obrigações, do direito das empresas, do direito das coisas, do direito da família e do direito das sucessões.<br /><br />

                    Aqui na VLT Advogados você conta com advogados especializados para lhe proporcionar muito mais tranquilidade e segurança para se dedicar a sua rotina do dia-a-dia conquistando todos os seus objetivos.</p>
                  </div>
                </div>
              </div><!-- end container -->

          </section><!-- end direito -->

        <div class="divisao"></div>

    <!--   ////////////////////////////////////////// -->

    <!-- Seçao Formulário de Contato -->

         <section id="form-direito-civil" class="form-area-atuacao">

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <h1>Quer saber mais sobre como podemos ajudar? <strong style="color: #8b0000;font-size: 22px;"><br />Agende um horário sem compromisso</strong></h1>
                    
                    <form action="#" method="POST" id="direito-civil">

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

 
 