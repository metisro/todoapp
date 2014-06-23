<?php

class AuthController extends Controller {
    public function getLogin() {
        return View::make('login');
    }
    
    public function postLogin() {
        
    }
}