
<div class="container-fluid" ng-app="unicorn" ng-controller="productsController as pCtrl">
	<div class="row">
		<div class="uni-mobile-topbar">
			<span>Filter options go here</span>
		</div>
		<div class="col-md-3 col-lg-2 uni-sidebar">
			<rzslider
				rz-slider-model="slider.min"
				rz-slider-high="slider.max"
				rz-slider-options="slider.options">
			</rzslider>
			<div class="btn btn-primary" ng-click="pCtrl.applyFilters()">Primeni</div>
		</div>
		<div class="col-md-9 col-lg-10">
			<div class="row">
				<div class="product-single col-sm-6 col-md-4 col-lg-3 text-center" ng-repeat="product in pCtrl.products">
					<div class="product-single-img">	
						<img class="img-fluid" src="assets/img/product-small-test.jpg"/>
					</div>
					<div class="product-single-desc">
						<p>{{product.name}}</p>
						<p>{{product.price}}<p>
					</div>		
				</div>
			</div>	
		</div>
	</div>
</div>
	
