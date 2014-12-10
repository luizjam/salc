<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuariosController
 *
 * @author LuizCarlos
 */
class UsuariosController extends AppController{
    public $helpers = array('Html', 'Form');
    public $name = 'Usuarios';
    
    function index()
    {
        $this->set('usuarios', $this->Usuario->find('all'));
    }
}
