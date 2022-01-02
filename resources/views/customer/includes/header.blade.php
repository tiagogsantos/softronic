<header class="header-top">
	<div id="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul class="animated fadeInUp delay-1s">
						<li><a href="#">Área do vendedor de loja</a></li>
						<li><a href="#">Área do representante</a></li>
						<li><a href="#">Área do revendedor</a></li>
						<li><a href="{{route('after.sale')}}">Suporte pós-venda</a></li>
						<li><a href="#">Atendimento: +55 11 3879-6678</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<img id="logo" data-url="{{url('/')}}" src="{{asset('img/logo.png')}}" alt="Softronic" class="float-left animated fadeInUp delay-1s">
				<div id="menu" class="animated fadeInUp delay-1s">
					<div class="bag float-right" onclick="window.location.href='{{route('bag')}}'">
						<img src="{{asset('img/icons/bag.png')}}" alt="Sacola">
						<div class="qtd-bag">
							{{\Gloudemans\Shoppingcart\Facades\Cart::countItems()}}
						</div>
					</div>
					<form id="form-search" action="{{route('search')}}">
						<div id="box-search" class="input-group float-right">
							<input type="text" name="search_string" value="{{request('search_string')}}" class="form-control" placeholder="Pesquise um produto">
							<img src="{{asset('img/icons/search.png')}}" alt="Buscar" width="40" class="search-button">
						</div>
					</form>
					<ul class="float-right">
						<li id="menu-products"><a href="#">Produtos</a></li>
						<li><a href="{{route('about')}}">Empresa</a></li>
						<li><a href="{{route('partner.index')}}">Seja um revendedor</a></li>
						<li><a href="{{route('contact')}}">Fale conosco</a></li>
					</ul>
				</div>
				<div id="btn-toggle-menu">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
	</div>
</header>

@include('customer.includes.submenu')
@include('customer.includes.mobile')
<div id="overlay-menu" class="animated fadeIn"></div>