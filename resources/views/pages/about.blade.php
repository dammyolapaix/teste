
      
       @extends('layouts.main')
		
	     @section('title','VLT Advogados | Quem Somos')

       @section('content')
     
          <section id="sobre">
        
            <div class="container menor">
              <div class="row">
                <div class="col-sm">
                  <h1>Sobre a <strong style="color: #8b0000;">VLT Advogados</strong></h1>
                  <p style="margin-bottom: 50px;">O escritório <strong style="color: #8b0000;">VLT ADVOGADOS</strong> disponibiliza serviços especializados na solução rápida e eficaz de conflitos, no âmbito administrativo e judicial. Nossa preocupação principal é atingir as expectativas de nossos clientes no que tange aos procedimentos administrativos e judiciais.<br /><br />

                  Através dos nossos serviços estamos nos comprometendo a desenvolver trabalhos diferenciados, alocando nossos melhores recursos possíveis a serviço de nossos clientes, que contam com profissionais qualificados e especializados.</p>
                </div>
              </div>
            </div><!-- end container -->

            @include('pages/includes/_galeria')

          </section><!-- end sobre -->

      @endsection
     

  