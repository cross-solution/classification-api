<?php
namespace Classify\V1\Rpc\Type;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;

class TypeController extends AbstractActionController
{
    public function typeAction()
    {
        return new ViewModel([

        ]);
    }
}
