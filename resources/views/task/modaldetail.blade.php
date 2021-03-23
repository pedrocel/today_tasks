<div class="modal fade" id="{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">

                            <h5 class="modal-title" id="exampleModalLongTitle">
                                <center>
                                    <b>Detalhes</b>
                                    <br/>

                                </center>
                            </h5>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{Form::label('titulo', 'Titulo', ['class' => 'control-label'])}}
                                {{Form::text('nome', $task->title, ['class' => 'form-control', 'disabled'])}}
                            </div>
                            <div class="col-md-12">
                                {{Form::label('titulo', 'Descrição', ['class' => 'control-label'])}}
                                {{Form::textarea('nome', $task->description, ['class' => 'form-control', 'disabled'])}}
                            </div>
                            <div class="col-md-6">
                                {{Form::label('titulo', 'Status', ['class' => 'control-label'])}}
                                {{Form::text('nome', $task->status->name, ['class' => 'form-control', 'disabled'])}}
                            </div>
                            <div class="col-md-6">
                                {{Form::label('titulo', 'Data prevista', ['class' => 'control-label'])}}
                                {{Form::date('nome', $task->expected_date, ['class' => 'form-control', 'disabled'])}}
                            </div>
                            <div class="col-md-12">
                                {{Form::label('titulo', 'Criada por', ['class' => 'control-label'])}}
                                {{Form::text('nome', $task->createdBy->name, ['class' => 'form-control', 'disabled'])}}
                            </div>
                            <div class="col-md-12">
                                {{Form::label('titulo', 'Atribuida a', ['class' => 'control-label'])}}
                                {{Form::text('nome', $task->assigned->name, ['class' => 'form-control', 'disabled'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
