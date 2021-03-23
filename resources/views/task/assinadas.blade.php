@extends('layouts.master')
@include('componentes.sweetalert2')
@section('titulo')
    Listagem de tarefas
@endsection


@section('content')

    @component('componentes.box', ['cor' => 'dark', 'title' => 'Minhas tarefas', 'erro' =>0])

        @slot('acoes')

            <a class="btn white btn-outline btn blue-soft" href="{{ route('task.new.get') }}">
                &nbsp;Cadastrar nova atividade</a>
        @endslot

        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
            <tr>
                <th><center>Titulo</center></th>
                <th><center>Data prevista</center></th>
                <th><center>Status</center></th>
                <th><center>Colaborador</center></th>
                <th><center>Ações</center></th>
            </tr>
            </thead>
            <tbody>

            @foreach($tasks as $task)
                <tr>
                    <td><center>{{$task->title}}</center></td>
                    <td><center>{{Carbon\Carbon::parse($task->expected_date)->format('d/m/Y')}}</center></td>
                    <td><center>{{$task->status->name}}</center></td>
                    <td><center>{{$task->assigned->name}}</center></td>
                    <td><center><div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-accent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ações
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                        <center><button class="btn green btn-outline sbold" data-toggle="modal" value="foda pow" href="#{{$task->id}}">Detalhes</button></center>
                                        <a class="btn btn-accent"  href="{{route('task.edit.get', $task->id)}}">Editar</a>
                                        <form action="{{route('task.delete.post', $task->id)}}" class="d-inline form-delete" method="POST">
                                            @method('post')
                                            @csrf

                                        <button type="submit" class="btn green btn-outline sbold" style="background-color: indianred; border-color: indianred">Remover</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </center>
                    </td>
                </tr>
                @include('task.modaldetail')
            @endforeach
            </tbody>
        </table>
        {{$tasks->appends(request()->all())->render()}}
    @endcomponent

@endsection
