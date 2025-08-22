<?php

class Auto
  {
    public $marka;
    public $model;
    public $kubikaza;
    public $boja;

    public function otvoriVrata()
    {
      echo $this->marka." ".$this->model; 
    }

    public function ofarbaj($novaBoja)
    {
      $this->boja = $novaBoja;
    }
  }