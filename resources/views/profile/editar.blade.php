@extends('layouts.master')

@section('titulo')
    Editar Usuário
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Editar Usuário', 'erro' => 1])

        {{ Form::open(['route'=>['profile.edit.post'], 'method'=>'post', 'class'=>'horizontal-form'])}}

        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label for="">Nome</label>
                {{Form::text('name', $user->name, array('class' => 'form-control'))}}

            </div>

        </div>

        <div class="form-group m-form__group row">
            <div class="col-lg-6">
                <label for="">Email</label>
                {{Form::text('email', $user->email, array('class' => 'form-control'))}}

            </div>
            <div class="col-lg-6">
                <label for="">CPF</label>
                {{Form::text('cpf', $user->cpf, array('class' => 'form-control'))}}

            </div>

            <div class="col-lg-6">
                <label for="">Telefone</label>
                {{Form::text('phone', $user->phone, array('class' => 'form-control'))}}

            </div>

        </div>


        <br><br>

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
