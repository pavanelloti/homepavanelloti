<?php $this->layout("theme", ["head"=>$head]); ?>

<section class="contact_section" style="background-color: #ffffff;">
      <div class="container">
        <div class="heading_container">
          <h2>
            <br>Vamos entrar em contato!
          </h2>
        </div>
      </div>
      <div class="container contact_bg layout_padding2-top">
        <div class="row">
          <div class="col-md-6">
            <div class="contact_form ">
              <form action="<?= url("/contato"); ?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <input type="text" name="nome" placeholder="Nome" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="text" name="desc" placeholder="Mensagem" class="message_input" required/>
                <button>Enviar</button>
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

  <!-- end about section -->
