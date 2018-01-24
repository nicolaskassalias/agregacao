<?php
require_once 'lib/Carbon.php';
use Carbon\Carbon;
    class Aluno{
      public $nome;
      public $dataDeNasc;
      public $turma;
      function __construct ( $nome , $dataNasc ) {
          echo "\n\tConstrui obj. aluno\n";
          $this->nome  = $nome;
          $this->dataDeNasc = $dataNasc;
          //$this->dataNasc = Carbon::createFromDate(1983,10,30);
      }
    }
 ?>
