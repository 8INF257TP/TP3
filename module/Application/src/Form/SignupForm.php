<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element\Button;

// A feedback form model
class SignupForm extends Form
{
  // Constructor.   
  public function __construct()
  {
    // Define form name
    parent::__construct('signup-form');

    // Set POST method for this form
    $this->setAttribute('method', 'post');
  
    // (Optionally) set action for this form
    $this->setAttribute('action', '/signup');
   
    $this->add([
      'type'  => 'text',
      'name' => 'firstname',
      'attributes' => [                
          'id' => 'inputFirstName',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Prénom',  
       ],
  ]);

    $this->add([
      'type'  => 'text',
      'name' => 'lastname',
      'attributes' => [                
          'id' => 'inputLastName',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Nom',  
        ],
    ]);

    $this->add([
      'type'  => 'text',
      'name' => 'address',
      'attributes' => [                
          'id' => 'inputAddress',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Adresse',  
        ],
    ]);

    $this->add([
      'type'  => 'text',
      'name' => 'zipCode',
      'attributes' => [                
          'id' => 'inputZipCode',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Code Postal',  
        ],
    ]);

    $this->add([
      'type'  => 'text',
      'name' => 'town',
      'attributes' => [                
          'id' => 'inputTown',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Ville',  
        ],
    ]);

    $this->add([
      'type'  => 'text',
      'name' => 'country',
      'attributes' => [                
          'id' => 'inputCountry',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Pays',  
        ],
    ]);

    $this->add([
      'type'  => 'email',
      'name' => 'email',
      'attributes' => [                
          'id' => 'inputEmail',
          'class' => 'form-control'
      ],
      'options' => [           
          'label' => 'Adresse Email',  
        ],
    ]);

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
    $ButtonElement->setLabel('Sinscrire');
    $this->add($ButtonElement);
  }
}
