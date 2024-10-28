<?php

Interface InterfaceCrud {
    public function criar();
    public function listar();
    public function atualizar($object);
    public function apagar();
}