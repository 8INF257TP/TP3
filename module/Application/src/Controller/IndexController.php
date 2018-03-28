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

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function catalogAction()
    {
        $products = [
            [
              'id' => 1,
              'name' => 'Digital Camera',
              'price' => 99.95,
            ],
            [
              'id' => 2,
              'name' => 'Tripod',
              'price' => 29.95,
            ],
            [
              'id' => 3,
              'name' => 'Camera Case',
              'price' => 2.99,
            ],
            [
              'id' => 4,
              'name' => 'Batteries',
              'price' => 39.99,
            ],
            [
              'id' => 5,
              'name' => 'Charger',
              'price' => 29.99,
            ],
          ];
            
        return new ViewModel(['products' => $products]);
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



    public function cartAction()
    {
        return new ViewModel();
    }

    public function descriptionAction()
    {
        return new ViewModel();
    }

    public function adminAction()
    {
        return new ViewModel();
    }
}
