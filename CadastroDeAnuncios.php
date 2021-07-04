<?php

class CadastroDeAnuncios
{
  public $nomeDoAnuncio;
  public $cliente;
  public $dataDeInicio;
  public $dataDeTermino;
  public $investimentoDia;

  public function __construct($nomeDoAnuncio, $cliente, $dataDeInicio, $dataDeTermino, $investimentoDia)
  {
    $this->nomeDoAnuncio = $nomeDoAnuncio;
    $this->cliente = $cliente;
    $this->dataDeInicio = $dataDeInicio;
    $this->dataDeTermino = $dataDeTermino;
    $this->investimentoDia = $investimentoDia;

  }

}
