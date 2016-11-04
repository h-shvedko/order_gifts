<div ng-app="OfficeStoreGifts">
<div class="gifts" ng-controller="OrdersGiftsIndexController">
	<div class="wrapper" ng-cloak>
		<div class="head text-center mb50">
			<h1 class="uppercase">Мои подарки</h1>
		</div>
		<div class="gifts-list">
			<ul class="row">
			
				<li class="gift-item" ng-repeat="product in products">
					<div class="gift-in">
						<div class="gift-item-title">
							<span>{{product.name}}</span>
						</div>
						<div class="gift-line"></div>
						<div class="gift-img">
							<img ng-src="{{product.main_img}}" alt="" />
						</div>
						<div class="gift-line"></div>
						<div class="gift-text">
							<h3 class="text-purple mb10">
								Цена:
								<span class="right semibold">{{product.price}} <i class="gift gift-purple"></i></span>
							</h3>
							<h6 class="text-center mb5">Статус заказа: <span class="text-green semibold">{{product.status}}</span></h6>
							<h5 class="text-center">Дата заказа: {{product.created_at}}</h5>
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>
</div>
</div>