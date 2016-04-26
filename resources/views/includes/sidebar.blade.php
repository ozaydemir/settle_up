<div class="sidebar-container">
	<div class="logo-container">
		<a href="#" class="logo">Settle Up</a>
	</div>
	<nav class="sidebar-nav">
		<ul>
			<li>
				<a href="{{ URL::to('/') }}" class="{{ set_active('/') }}">
					<svg class="icon">
		                <use xlink:href="/svg/sprite.svg#home" class="dashboard"></use>
		            </svg>
					Dashboard
				</a>
			</li>
			<li>
				<a href="{{ URL::to('products') }}" class="{{ set_active('products') }}">
					<svg class="icon">
		                <use xlink:href="/svg/sprite.svg#cart" class="products"></use>
		            </svg>
					Products
				</a>
			</li>
			<li>
				<a href="{{ URL::to('shows') }}" class="{{ set_active('shows') }}">
					<svg class="icon">
		                <use xlink:href="/svg/sprite.svg#location" class="shows"></use>
		            </svg>
					Shows
				</a>
			</li>
			<li>
				<a href="{{ URL::to('promoters') }}" class="{{ set_active('promoters') }}">
					<svg class="icon">
		                <use xlink:href="/svg/sprite.svg#promoter" class="promoters"></use>
		            </svg>
					Promoters
				</a>
			</li>
			<li>
				<a href="{{ URL::to('reports') }}" class="{{ set_active('reports') }}">
					<svg class="icon">
		                <use xlink:href="/svg/sprite.svg#barchart" class="reports"></use>
		            </svg>
					Reports
				</a>
			</li>
		</ul>
	</nav>
</div>