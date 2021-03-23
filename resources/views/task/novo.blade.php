@extends('layouts.master')

@section('titulo')
    Cadastro de atividade
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Cadastro de atividade', 'erro' => 1])


        {{Form::open(['route' => 'task.new.post', 'method' => 'post'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label for="">Titulo</label>
                {{Form::text('title', null, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-12">
                <label for="">Descrição</label>
                {{Form::textarea('description', null, array('class' => 'form-control'))}}
            </div>
            <div class="col-lg-4">
                <label for="">Data prevista para conclusão</label>
                {{Form::date('expected_date', null, array('class' => 'form-control'))}}
            </div>
            <div class="col-lg-4">
                <label for="">Status</label>
                {{Form::select('id_status',$status ,null,['class'=>'form-control m-input m-input--square'])}}
            </div>
            <div class="col-lg-4">
                <label for="">Atribuir a:</label>
                {{Form::select('assigned_to',$users ,null,['class'=>'form-control m-input m-input--square'])}}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">

                <div class="col-md-1">

                    {{Form::submit('Salvar',['class'=>'btn blue-soft'])}}

                </div>
            </div>

        </div>

        {{Form::close()}}

    @endcomponent

@endsection
@section('js')
    {!!  Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js')!!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    {{Html::script('plugins/select2/js/select2.full.min.js')}}
    {{Html::script('plugins/select2/js/i18n/pt-BR.js')}}

    <script>
        $(function() {
            $('#Preco').maskMoney({ decimal: '.', thousands: '', precision: 2 });
        })
    </script>
@endsection




