<?php

namespace Obra\Model;

use DateTime;

class Obra
{

  private string $sigla;
  private DateTime $inicio;
  private DateTime $termino;

  function __construct($sigla)
  {
    $this->sigla = $sigla;
  }

  public function getSigla(): string
  {
    return $this->sigla;
  }

  public function getInicio(): DateTime
  {
    return $this->inicio;
  }

  public function getTermino(): DateTime
  {
    return $this->termino;
  }

  public function setInicio(DateTime $inicio)
  {
    $this->inicio = $inicio;
  }

  public function setTermino(DateTime $termino)
  {
    $this->termino = $termino;
  }

  public function getDaysObra(): int
  {
    return \date_diff($this->inicio, $this->termino)->days;
  }
}
