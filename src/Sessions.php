<?php

namespace Choco\Session;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author Armando
 */
class Sessions implements SessionInterface, \ArrayAccess {
    
    public function __construct() {
        session_start();
    }

    public function delete($key) {
        unset($_SESSION[$key]);
    }

    public function get($key) {
        if(array_key_exists($key, $_SESSION)){
            return $_SESSION[$key];
        }
    }

    public function has($key) {
        if(array_key_exists($key, $_SESSION)){
            return true;
        } else {
            return false;
        }
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function offsetExists($offset): bool {
        return $this->has($offset);
    }

    public function offsetGet($offset) {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value): void {
        $this->set($offset, $value);
    }

    public function offsetUnset($offset): void {
        $this->delete($offset);
    }

}
