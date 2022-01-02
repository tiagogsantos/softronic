<div id="menu-mobile" class="animated">
    <div id="mainmenu-mobile" style="display: block;">
        <form id="form-search-mobile" action="{{route('search')}}">
            <div id="box-search-mobile" class="input-group float-right">
                <input type="text" value="{{request('search_string')}}" name="search_string" class="form-control"
                    placeholder="Pesquise um produto">
                <img src="{{asset('img/icons/search-dark.png')}}" alt="Buscar" width="40" class="search-button">
            </div>
        </form>
        <div class="row">
            <div class="col">
                <p class="title-item-menu">Menu</p>
            </div>
        </div>
        <button class="w-submenu" id="product-menu" data-url="{{route('api.company.index')}}">Produtos</button>
        <button onclick="window.location.href='{{route('about')}}'">Empresa</button>
        <button onclick="window.location.href='{{route('partner.index')}}'">Seja um revendedor</button>
        <button onclick="window.location.href='{{route('contact')}}'">Fale conosco</button>
        <button onclick="window.location.href='{{route('after.sale')}}'">Pós-venda</button>
        <div class="row">
            <div class="col">
                <p class="title-item-menu">Acesso</p>
            </div>
        </div>
        <button>Área do revendedor</button>
        <button>Área do representante</button>
        <button>Área do vendedor de loja</button>
    </div>
    <div id="submenu-mobile" style="display: none;">
    </div>
</div>