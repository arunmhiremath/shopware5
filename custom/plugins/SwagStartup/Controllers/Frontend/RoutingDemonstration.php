<?php

class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action
{
    public function preDispatch()
    {
        $targetAction = $this->request->getActionName();

     /* if($targetAction === 'index' && !$this->get('session')->get('sUserId')) {
            $this->redirect([
                'controller' => 'account',
                'method' => 'login',
                'sTarget' => 'RoutingDemonstration',
                'sTargetAction' => $targetAction
            ]);
        }*/
    }

    public function indexAction() {
        $this->view->assign('nextAction', 'foo');
    }

    public function fooAction() {
        $productService = $this->get('swag_startup.services.product_name_service');
        $productNames = $productService->getProductNames();

        $this->view->assign('productNames', $productNames);
        $this->view->assign('nextAction', 'index');
    }

    public function postDispatch()
    {
        $currentAction = $this->request->getActionName();

        $this->view->assign('currentAction', $currentAction);
    }
}
