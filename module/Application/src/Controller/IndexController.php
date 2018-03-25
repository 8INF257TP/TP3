<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function catalogAction()
    {
        return new ViewModel();
    }

    public function signinAction()
    {
        return new ViewModel();
    }

    public function signupAction()
    {
        return new ViewModel();
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
