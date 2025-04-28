<?php
namespace Interface;

// Interface que define os metodos necessarios para um veiculo ser locavel

interface locavel {
    public function alugar() : string;
    public function delvolver() : string;
    public function isDisponivel() : bool;
}

