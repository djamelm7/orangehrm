<?php

class retryLoginAction extends sfAction {

    public function execute($request) {
        $this->setLayout('lo-noheader');        
        $this->setTemplate('con', 'auth');
        $loginForm = new LoginForm();
        $this->message = $this->getUser()->getFlash('message');
        $this->form = $loginForm;
    }

}
