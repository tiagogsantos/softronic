<section id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p>
                    <!-- <strong>Não perca nenhuma novidade</strong> -->
                    Cadastre-se e receba, novidades, lançamentos e promoções.
                </p>
                <form id="form-newsletter" action="{{ route('newsletter') }}" method="post">
                    {{ csrf_field() }}
                    <input type="email" name="email" placeholder="Digite seu e-mail aqui">
                    <img src="{{ asset('img/icons/email.png') }}" alt="E-mail" class="newsletter">
                </form>
            </div>
            <div class="col-md-5">
                <p>
                    <strong>Siga-nos</strong>
                    Fique por dentro de tudo o que acontece
                </p>
                <div class="row">
                    <div class="col">
                        <button class="btn-facebook">
                            <img src="{{ asset('img/icons/facebook.png') }}" alt="Facebook">
                        </button>
                        <button class="btn-linkedin">
                            <img src="{{ asset('img/icons/linkedin.png') }}" alt="Linkedin">
                        </button>
                        <button class="btn-instagram">
                            <img src="{{ asset('img/icons/instagram.png') }}" alt="Instagram">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="{{ asset('img/logo.png') }}" alt="Softronic">
                <p>
                    <br>
                    +55 11 3879-6678
                    <br><br>
                    Rua Achilles Orlando Curtolo, 584<br>
                    São Paulo - SP<br>
                    01144-010<br>
                    Brasil
                </p>
            </div>
            <div class="col-12 col-md">
                <strong>Institucional</strong>
                <ul>
                    <li><a href="{{ route('about') }}">Quem somos</a></li>
                    <li><a href="#">Trabalhe conosco</a></li>
                    <li><a href="{{ route('contact') }}">Fale conosco</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <strong>Institucional</strong>
                <ul>
                    <li><a href="{{ route('search') }}">Buscar produtos</a></li>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Destaques</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <strong>Revendedor</strong>
                <ul>
                    <li><a href="{{ route('partner.index') }}">Cadastre-se</a></li>
                    <li><a href="#">Área do revendedor</a></li>
                </ul>
            </div>
            <div class="col-12 col-md">
                <strong>Pós-venda</strong>
                <ul>
                    <li><a href="{{ route('after.sale') }}">Suporte pós-venda</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="credits">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-12">
                    <p>Copyright © 2020 Softronic. Todos os direitos reservados.</p>
                </div>
                <div class="col-sm-4 col-12">
                    <a href="{{ route('policy') }}">Política de Privacidade</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/submenu.js') }}"></script>
<script src="{{ asset('public/js/mobile.js') }}"></script>
<script src="{{ asset('public/js/home.js') }}"></script>

<script type="text/javascript">
    
    $(".btn-more-qtd").on('click', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let inputQtd = $(`.qtd-${id}`);
        let actualQtd = parseInt(inputQtd.val());
        let newQtd = (actualQtd + 1) < 0 ? 0 : (actualQtd + 1);
        inputQtd.val(newQtd);
        addItemCart(id, newQtd);
    });
    $('.btn-less-qtd').on('click', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let inputQtd = $(`.qtd-${id}`);
        let actualQtd = parseInt(inputQtd.val());
        let newQtd = (actualQtd - 1) < 0 ? 0 : (actualQtd - 1);
        inputQtd.val(newQtd);
        addItemCart(id, newQtd);
    });

    const addItemCart = async (product_id, qtd) => {
        const response = await axios.post(`{{ route('api.cart.store') }}`, {
            product_id,
            qtd
        });
        if (response.status === 200) {
            $('.qtd-bag').text(response.data.total_items);
        }
    }

    $('.input-cep').inputmask({
        "mask": "99999-999",
        "placeholder": "_"
    });

    $('.input-cnpj').inputmask({
        "mask": "99.999.999/9999-99",
        "placeholder": "_"
    });
    $('.input-cpf').inputmask({
        "mask": "999.999.999-99",
        "placeholder": "_"
    });
    $('#clear').on('click', function(e) {
        e.preventDefault();
        $(':input', '.form-contact')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .prop('selected', false);
    });
    $(document).ready(function() {
        $(".products-carousel").owlCarousel({
            loop: true,
            margin: 12,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            navText: [`<img src="{{ asset('img/nav-left.png') }}">`,
                `<img src={{ asset('img/nav-right.png') }}>`
            ],
            responsive: {
                992: {
                    items: 3
                },
                480: {
                    items: 2
                },
                0: {
                    items: 1
                }
            }
        });

        $(".posts-carousel").owlCarousel({
            loop: true,
            margin: 12,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            navText: [`<img src="{{ asset('img/nav-left.png') }}">`,
                `<img src="{{ asset('img/nav-right.png') }}">`
            ],
            responsive: {
                992: {
                    items: 3
                },
                480: {
                    items: 2
                },
                0: {
                    items: 1
                }
            }
        });

        $(".customers-carousel").owlCarousel({
            loop: true,
            margin: 12,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            navText: [`<img src="{{ asset('img/nav-left.png') }}">`,
                `<img src="{{ asset('img/nav-right.png') }}">`
            ],
            responsive: {
                992: {
                    items: 4
                },
                480: {
                    items: 3
                },
                0: {
                    items: 2
                }
            }
        });
    });

    $('.btn-facebook').on('click', function() {
        window.open('https://web.facebook.com/softronicdistribuidora/', '_blank');
    });
    $('.btn-linkedin').on('click', function() {
        window.open('https://www.linkedin.com/company/softronicdistribuidora/', '_blank');
    });
    $('.btn-instagram').on('click', function() {
        window.open('https://www.instagram.com/softronicdistribuidora/', '_blank');
    });
    $('.newsletter').on('click', function() {
        $('#form-newsletter').submit();
    });
    $('.search-button').on('click', function() {
        $('#form-search').submit();
    });
</script>

@yield('scripts')
