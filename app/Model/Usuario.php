<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author LuizCarlos
 */
class Usuario extends AppModel{
    public $name = 'Usuario';
    
    //Especificando um nome de tabela diferente da padronização do Cakephp
    public $useTable = 'tb_usuarios';
    
    //Especificando uma chave primária diferente da padronização
    public $primaryKey = 'cd_usuario';    
}


