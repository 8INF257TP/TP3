<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Form\SigninForm;
use Application\Form\SignupForm;

class UserController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;
    
    /**
     * User manager.
     * @var Application\Service\UserManager 
     */
    private $userManager;

    public function __construct($entityManager, $userManager)
    {
        $this->entityManager = $entityManager;
        $this->userManager = $userManager;
    }

    public function signinAction()
    {
        // Create Contact Us form
        $form = new SigninForm();

        // Check if user has submitted the form
        if($this->getRequest()->isPost()) 
        {
      
        // Fill in the form with POST data
        $data = $this->params()->fromPost();            
        $form->setData($data);  
        var_dump($data);
        
        // ... Do something with the data ...
        return $this->redirect()->toRoute('application', ['action'=>'index']);	  
        } 

        return new ViewModel([
            'form' => $form
         ]);
    }

    public function signupAction()
    {
        // Create Contact Us form
        $form = new SignupForm();

        // Check if user has submitted the form
        if($this->getRequest()->isPost()) 
        {
      
        // Fill in the form with POST data
        $data = $this->params()->fromPost();            
        $form->setData($data);  

        var_dump($data);

        $this->userManager->addNewUser($data);
        
        // ... Do something with the data ...
        return $this->redirect()->toRoute('application', ['action'=>'index']);	  
        } 

        return new ViewModel([
            'form' => $form
         ]);
    }
}