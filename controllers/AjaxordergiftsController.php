<?php

class AjaxordergiftsController extends AjaxordergiftsControllerBase
{

	public function actionIndex()
    {
		$this->index();
    }	
	
	
	public function actionGetGiftsOrders()
    {
		$this->GetGiftsOrders();
    }	
	
	
}