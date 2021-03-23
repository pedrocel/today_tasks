@extends('layouts.master')

@section('titulo')
    Editar atividade
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Editar atividade', 'erro' => 1])

        {{Form::model($task, ['route' => ['task.edit.post', $task->id], 'method' => 'post'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label for="">Titulo</label>
                {{Form::text('title', $task->title, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-12">
                <label for="">Descrição</label>
                {{Form::textarea('description', $task->description, array('class' => 'form-control'))}}
            </div>
            <div class="col-lg-4">
                <label for="">Data prevista para conclusão</label>
                {{Form::date('expected_date', $task->expected_date, array('class' => 'form-control'))}}
            </div>
            <div class="col-lg-4">
                <label for="">Status</label>
                {{Form::select('id_status',$status ,$task->id_status,['class'=>'form-control m-input m-input--square'])}}
            </div>
            <div class="col-lg-4">
                <label for="">Atribuir a:</label>
                {{Form::select('assigned_to', $users, $task->assigned_to,['class'=>'form-control m-input m-input--square'])}}
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




