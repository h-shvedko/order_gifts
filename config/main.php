<?php
return array(
	'modules'=>array(
        'office' => array(
            'modules' => array(
                'ordersgifts' => array(
									
				)
            ),
			 
        ),
	),
	'import' => array(
		'application.modules.admin.modules.storegifts.models.*',
		'application.modules.storegifts.models.*',
		'application.modules.register.models.*',
	),

    'components' => array(
        'request' => array(
            'noCsrfValidationRoutes' => array(
				'office/ordersgifts/Ajaxordergifts/ViewGiftsHorders',
            ),
        ),
    )

);