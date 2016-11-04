<style>
.actions
{
	width: 15%;
}
.actions a
{
	margin: 0 30px 0 30px;
	text-align: center;
}
.actions a:hover
{
	opacity: 0.5;
}
</style>
<div ng-controller="StoreGiftsHordersController">
	<h3><?=Yii::t('app','Список заказов')?></h3>
	<table class="table table-hover">
		<thead>
			<tr class="text-uppercase">
				<th>ID</th>
				<th><?=Yii::t('app','номер')?></th>
				<th><?=Yii::t('app','пользователь')?></th>
				<th><?=Yii::t('app','сумма')?></th>
				<th><?=Yii::t('app','статус')?></th>
				<th><?=Yii::t('app','оплачен')?></th>
				<th><?=Yii::t('app','дата создания')?></th>
				<th><?=Yii::t('app','действия')?></th>
			</tr>
			<tr class="text-uppercase">
				<th><?=Yii::t('app','фильтр')?></th>
				<th><input class="form-control" ng-model="search.num"/></th>
				<th><input class="form-control" ng-model="search.username"/></th>
				<th><input class="form-control" ng-model="search.total_price"/></th>
				<th><input class="form-control" ng-model="search.status"/></th>
				<th><input class="form-control" ng-model="search.is_payed"/></th>
				<th><input class="form-control" ng-model="search.created_at"/></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="horder in horders | pagination:watchPage:maxSizes | filter:search:strict">
				<td>{{horder.id}}</td>
				<td>{{horder.num}}</td>
				<td>{{horder.username}}</td>
				<td>{{horder.total_price}}</td>
				<td>{{horder.status}}</td>
				<td>{{horder.is_payed}}</td>
				<td>{{horder.created_at}}</td>
				<td class="actions">
					<a href="#/horders/view/id/{{horder.id}}" title="<?=Yii::t('app', 'Просмотр')?>"><i class="fa fa-eye fa-2x"></i></a>
					<a href="#/horders/update/id/{{horder.id}}" title="<?=Yii::t('app', 'Редактировать')?>"><i class="fa fa-pencil fa-2x"></i></a>
				</td>
			</tr>
		</tbody>
		
	</table>
	<pagination boundary-links="true" total-items="totalItems" items-per-page="maxSize" ng-model="currentPage" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>
</div>