<?php

class Shopware_Controllers_Frontend_RoutingDemo extends Enlight_Controller_Action

{
    public function preDispatch()
    {
        $targetAction = $this->request->getActionName();
       // $this->view->addTemplateDir(__DIR__, '/../Resources/Views');


    }

        public function indexAction()
    {

        // $today = date_create('now');
        // dd($today);


        // if($delivery_date >= $today)
        // {
        //     $day = date_diff($today, $delivery_date)->format('%a days');
        //     dd($day);
        //     $this->view->assign('day', $day);
        // }
        // if($delivery_date < $today)
        // {
        //     $this->view->assign('day', $delivery_date);
        // }



    }

}
