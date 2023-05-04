<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
       
       //redirect("/ops/manutencao");
        
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");

    }
    
    #######################
    /** paginas da home **/
    #######################
    
    public function home(): void
    {
        
        $head = $this->seo->render(CONF_SITE_NAME . " - " . CONF_SITE_TITLE, CONF_SITE_DESC, url(), theme("/assets/images/share.jpg"));

        echo $this->view->render("home", [
            "head"=>"$head"
        ]);
    }

    public function about(): void
    {
        
        $head = $this->seo->render(CONF_SITE_NAME . " - " . CONF_SITE_TITLE, CONF_SITE_DESC, url("/sobre"), theme("/assets/images/share.jpg"));

        echo $this->view->render("about", [
            "head"=>"$head"
        ]);
       
    }



    ########################
    /** paginas de error **/
    ########################
    public function error(array $data): void
    {

        switch ($data['errcode']) {
            case 'problemas':
                $error = new \stdClass();
                $error->code = "Ops";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está disponível no momento. Já estamos vendo isso mas caso precise, nos envie um e-mail :)";
                $error->linkTitle = "Enviar E-Mail";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                break;
            case 'manutencao':
                $error = new \stdClass();
                $error->code = "Ops";
                $error->title = "Desculpe. Estamos em Manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar melhor as suas contas :P";
                $error->linkTitle = null;
                $error->link = null;
                break;
            default:
                $error = new \stdClass();
                $error->code = $data['errcode'];
                $error->title = "Ooops, Conteúdo indiposnível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, não está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continuar navegando";
                $error->link = url_back();
                break;
        }
        
        
        $head = $this->seo->render("{$error->code} | {$error->title}", $error->message, url("/ops/{$error->code}"), theme("/assets/images/share.jpg"), false);
        
        echo $this->view->render("error", [
            "head"=>"$head",
            "error"=>$error
        ]);
    }














}