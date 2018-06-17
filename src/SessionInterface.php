<?php

namespace Choco\Session;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionsInterface
 *
 * @author Armando
 */

interface SessionInterface {
    //put your code here
    
    public function get($key);
    
    public function set($key, $value);
    
    public function delete($key);
    
    public function has($key);
}
