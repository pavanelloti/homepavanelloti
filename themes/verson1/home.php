<?php $this->layout("theme", ["head"=>$head]); ?>

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        
                        <span>
                          Serviços de Consultoria
                        </span>
                      </h1>
                      <p>
                        Oferecemos serviços de consultoria abrangentes, desde o desenvolvimento de sistemas até a infraestrutura de redes, para atender às diversas demandas de nossos clientes.
                      </p>
                      <div class="btn-box">
                        <a href="contact.html" class="btn-1">
                          Contatos
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Sobre nós
              </h2>
            </div>
            <p>
              Há mais de 15 anos no mercado, temos utilizado nossa vasta experiência e conhecimento em Tecnologia da Informação 
              para oferecer consultoria personalizada que atende às necessidades específicas de nossos clientes, ajudando-os a 
              alcançar seus objetivos de negócios com sucesso.
            </p>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= theme("/assets/images/about-img.png"); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->
  <div class="body_bg layout_padding">

    <!-- service section -->

    <section class="service_section ">
      <div class="container">
        <div class="heading_container">
          <h2>
            A seu Serviço
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?= theme("/assets/images/s-3.png"); ?>" alt="">
              </div>
              <h4>
                Criação de Sites
              </h4>
              <p>
                Desenvolvemos sites utilizando as mais recentes tendências e funcionalidades da internet, garantindo que nossos 
                clientes tenham uma presença online moderna e eficaz.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box align-items-end align-items-md-start text-right text-md-left">
              <div class="img-box">
                <img src="<?= theme("/assets/images/s-2.png"); ?>" alt="">
              </div>
              <h4>
                E-Commerce
              </h4>
              <p>
                Ter uma presença online é crucial nos dias de hoje, mas ter uma loja virtual pode fazer toda a diferença, 
                permitindo que você alcance um público maior e venda seus produtos de forma eficiente pela internet.
              </p>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?= theme("/assets/images/s-4.png"); ?>" alt="">
              </div>
              <h4>
                Ideias em Soluções
              </h4>
              <p>
                Traga seu projeto para nós e obtenha uma análise detalhada e um orçamento sem compromisso - Conte conosco para transformar suas ideias em soluções.
              </p>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="box align-items-end align-items-md-start text-right text-md-left">
              <div class="img-box">
                <img src="<?= theme("/assets/images/s-4.png"); ?>" alt="">
              </div>
              <h4>
                Sistemas Web
              </h4>
              <p>
                Desenvolvemos sistemas web personalizados para empresas, automatizando processos internos e fornecendo 
                serviços ao cliente eficientes e de alta qualidade.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end service section -->

    <!-- quote section -->

    <section class="quote_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h3>
              Obtenha sua cotação hoje!
            </h3>
            <p>
              Obtenha sua cotação hoje e descubra como nossas soluções personalizadas podem ajudá-lo a atingir 
              seus objetivos de negócios de maneira eficaz e eficiente.
            </p>
          </div>
          <div class="btn-box">
            
          </div>
        </div>
      </div>
    </section>

    <!-- end quote section -->

    <section class="contact_section">
      <div class="container">
        <div class="heading_container">
          <h2>
            Vamos entrar em contato!
          </h2>
        </div>
      </div>
      <div class="container contact_bg layout_padding2-top">
        <div class="row">
          <div class="col-md-6">
            <div class="contact_form ">
              <form action="">
                <input type="text" placeholder="Name ">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Message" class="message_input">
                <button>
                  Enviar
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="<?= theme("/assets/images/contact-img.jpg"); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
