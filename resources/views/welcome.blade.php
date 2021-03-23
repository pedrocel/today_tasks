@extends('layouts.master')

@section('titulo')
    Home
@endsection

@section('css')

@endsection
@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Rokkay Sushi Dashboard em DEMO', 'erro' => 1])
        <div class="m-pricing-table-1">
            <div class="m-pricing-table-1__items row">
{{--                @foreach($sistemas as $sistema)--}}
{{--                    <div class="m-pricing-table-1__item col-lg-3">--}}
{{--                        <div class="m-pricing-table-1__visual">--}}
{{--                            <div class="m-pricing-table-1__hexagon1"></div>--}}
{{--                            <div class="m-pricing-table-1__hexagon2"></div>--}}
{{--                            <span class="m-pricing-table-1__icon m--font-info">--}}
{{--													<i class="flaticon-interface-5"></i>--}}
{{--												</span>--}}

{{--                        </div>--}}
{{--                        <span class="m-pricing-table-1__price"><h4>{{$sistema->sistema->nome}}</h4></span>--}}
{{--                        --}}{{--<h2 class="m-pricing-table-1__subtitle">Enterprice License</h2>--}}
{{--                        --}}{{--<span class="m-pricing-table-1__description">--}}
{{--                        --}}{{--Lorem ipsum dolor sit amet edipiscing elit--}}
{{--                        --}}{{--<br> sed do eiusmod elpors labore et dolore--}}
{{--                        --}}{{--<br> magna siad enim aliqua--}}
{{--                        --}}{{--</span>--}}

{{--                        <div class="m-pricing-table-1__btn">--}}
{{--                            <a href="{{$sistema->sistema->url_sistema}}"--}}
{{--                               class="btn m-btn--pill  btn-info m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">--}}
{{--                                Selecionar--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    @endcomponent


@endsection
@section('js')

@endsection
