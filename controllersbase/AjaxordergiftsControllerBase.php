<?php

class AjaxordergiftsControllerBase extends UTIController
{
	
	public function index()
	{
	
		$result = $this->renderPartial('index',NULL, TRUE);
		
		 echo $result;
    }  
	
	
	
	public function GetGiftsOrders()
	{
		$model = GiftsStoreHorders::model()->with('orders')->findAll('users__id = :users__id', array(':users__id' => Yii::app()->user->id));
		
		$result = array();
		
		foreach($model as $value)
		{
			foreach($value->orders as $gifts)
			{
				$file_path = '';
				if($gifts->products->mainAttachment instanceof Attachments)
				{
					$file_path = strstr($gifts->products->mainAttachment->full_path,'/upload');
				}
				elseif(!empty($gifts->products->attachments) && $gifts->products->attachments[0] instanceof Attachments)
				{
					$file_path = strstr($gifts->products->attachments[0]->full_path,'/upload');
				}
				$result[] = array(
					'name' => !empty($gifts->products->lang) ? $gifts->products->lang->name: '',
					'price' => round($gifts->products->price,0),
					'status' => !empty($value->statuses) ? $value->statuses->name: '',
					'created_at' => date("d.m.Y", strtotime($gifts->created_at)),
					'main_img' => $file_path,
				);
			}
		}

		echo CJSON::encode($result);
    }
	
}