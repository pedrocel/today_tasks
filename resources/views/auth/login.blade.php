<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Today Task | Seja Bem Vindo</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <style>

        .font-branca{

            color: white;

        }

        .centro {
            margin: 0 auto;
            width: 50%; /* Valor da Largura */
        }

    </style>

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script type="text/javascript">

        //Obtido no site www.bb.com.br

        function FormataDado(campo, tammax, pos, teclapres) {

            var keyCode;

            if (teclapres.srcElement)

            {

                keyCode = teclapres.keyCode;

            } else 	if (teclapres.target)

            {

                keyCode = teclapres.which;

            }

            if (keyCode == 0 || keyCode == 8) { return true; }

            if ((keyCode < 48 || keyCode > 57) && keyCode != 88 && (keyCode != 120)) { return false; }

            var tecla = keyCode;

            vr = campo.value;

            vr = vr.replace("-", "");

            vr = vr.replace("/", "");

            tam = vr.length;

            if (tam < tammax && tecla != 8)

            { tam = vr.length + 1; }

            if (tecla == 8)

            {

                tam = tam - 1;

            }

            if (tecla == 8 || tecla == 88 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 || tecla == 120)

            {

                if (tam <= 2)

                {

                    campo.value = vr;

                }

                if (tam > pos && tam <= tammax)

                {

                    campo.value = vr.substr(0, tam - pos) + "-" + vr.substr(tam - pos, tam);

                }

            }

        }


    </script>
    <!--end::Web font -->


    <!--begin::Base Styles -->
    <link href="{{asset('/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />



    <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <link href="{{asset('demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


    <!--end::Base Styles -->
{{--    <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico" />--}}
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-color: #000000">
        <div class="m-grid__item m-grid__item--fluid   m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">

                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        {{--<h3 class=""><center>Banco de Leiloiros</center></h3>--}}
                    </div>


                    <form class="m-login__form m-form" action="{{route('login')}}" method="post">
                        @csrf

                        @if (count($errors) > 0)

                            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <span>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </span>
                            </div>

                        @endif

                        @if(Session::has('status'))

                            <div class="m-alert m-alert--outline alert alert-success alert-dismissible animated fadeIn" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <span>
                                    {{Session::get('status')}}
                                </span>
                            </div>

                        @endif


                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="on">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Senha" name="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember"> <strong class="font-branca">Manter conectado</strong>
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="font-branca"><strong>Esqueceu a senha?</strong> </a>
                            </div>
                            <br>


                        </div>
                        <div class="m-login__form-action">
                            <button id="" style="background-color: #ffffff" class="btn m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Entrar</button>
                        </div>
                    </form>
                </div>

                <div class="m-login__forget-password">
                    <div class="m-login__head">
{{--                        <h3 class="m-login__title font-branca">Esqueceu a Senha ?</h3>--}}
{{--                        <div class="m-login__desc font-branca">Preencha os dados solicitados abaixo:</div>--}}
                    </div>
{{--                    {{Form::open(['route' => 'lembrete.senha.envia.email.post', 'class' => 'm-login__form m-form'])}}--}}

                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                    </div>
                    <div class="m-login__form-action">
                        <button type="submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Enviar</button>&nbsp;&nbsp;
                        <button id="m_login_forget_password_cancel" class="btn btn-outline m-btn m-btn--pill m-btn--custom  m-login__btn">Cancelar</button>
                    </div>
{{--                    {{Form::close()}}--}}
                </div>

                                <div class="m-login__account font-branca">
                                    <span class="m-login__account font-branca" ><strong>Ainda não é Cadastrado?</strong></span>&nbsp;&nbsp;
                                    <a href="{{ route('register') }}" class="m-link m-link--light m-login__account-link" > <strong>Cadastre-se Aqui</strong></a>
                                    <br>

                                    <br>
                                    <a class="m-link m-link--light m-login__account-link"> Telefone: 82 98829-1668</a><br>
                                    <a class="m-link m-link--light m-login__account-link"> Email: pedronovaisengcp@gmail.com</a>

                                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src="{{asset('vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
{{Html::script('js/formats.js')}}
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>

<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src="{{asset('snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
<script src="{{asset('js/selectUfCidade.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
    jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if(phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        });

</script>


<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>



















