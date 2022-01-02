<section id="submenu-products-desktop">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center">Escolha a empresa</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="submenu-companies">
                    <ul>
                        @foreach($companies as $key => $company)
                        <li class=" submenu {{$key == 0 && !request()->is('produtos') ? 'active' : ''}}"
                            data-company_slug="{{$company->slug}}"
                            data-url="{{route('api.company.categories', ['company'=> $company->id])}}">
                            <a href="#">{{$company->name}}</a>
                        </li>
                        @endforeach
                        <li class=" submenu {{request()->is('produtos') ? 'active' : ''}}">
                            <a href="{{route('products')}}">Todos os fabricantes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="submenu-categories">
            <div class="row">
            </div>
        </div>
        <div class="row mt-3 mb-4 loading" style="display:none">
            <div class="col">
                <img src="{{asset('img/loading.gif')}}" width="100" alt="Carregando" class="img-loading">

            </div>
        </div>
    </div>
</section>