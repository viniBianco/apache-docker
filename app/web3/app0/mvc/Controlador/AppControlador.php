<?php
namespace Controlador;

class AppControlador extends Controlador
{
    public function index()
    {
        $this->visao('inicial/index.php');
    }
    public function contato()
    {
        $this->visao('inicial/contato.php');
    }
}
