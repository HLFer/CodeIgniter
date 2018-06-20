<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Produtos extends CI_Controller{

  public function index(){

    $texto = "Você está usando o controller Produtos";
    $dados = array("mensagem" => $texto);
    $this->load->view("produtos/lista", $dados);

  }

  public function listar_produtos(){

    $this->load->model("ProdutosModel", "produtos");

    $resultado = $this->produtos->listar_todos();

    echo '<pre>';

    var_dump($resultado);

  }

  public function listar_tabela(){

    $this->load->model("ProdutosModel", "produtos");

    $resultado = $this->produtos->listar_todos();

    $dados = array("produtos" => $resultado);

    $this->load->view("produtos/lista_tabela", $dados);

  }

}
