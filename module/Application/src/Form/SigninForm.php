<?php
namespace Application\Form;

// Define an alias for the class name
use Zend\Form\Form;
use Zend\Form\Element\Button;

// A feedback form model
class SigninForm extends Form
{
  // Constructor.   
  public function __construct()
  {
    // Define form name
    parent::__construct('signin-form');

    // Set POST method for this form
    $this->setAttribute('method', 'post');
  
    // (Optionally) set action for this form
    $this->setAttribute('action', '/signin');
  
    $this->add([
        'type'  => 'text',
        'name' => 'username',
        'attributes' => [                
            'id' => 'inputUsername',
            'class' => 'form-control'
        ],
        'options' => [           
            'label' => 'Nom dutilisateur',  
         ],
    ]);

    $this->add([
        'type'  => 'password',
        'name' => 'password',
        'attributes' => [                
            'id' => 'inputPassword',
            'class' => 'form-control'
        ],
        'options' => [           
            'label' => 'Mot de passe',  
         ],
    ]);

    $ButtonElement = new Button('submitButton');
 
    $ButtonElement->setAttribute('id', 'inputSubmitButton');
    $ButtonElement->setAttribute('class', 'btn btn-lg btn-primary btn-block');
    $ButtonElement->setAttribute('type', 'submit');
    $ButtonElement->setLabel('Ouvrir une session');
    $this->add($ButtonElement);
  }
}