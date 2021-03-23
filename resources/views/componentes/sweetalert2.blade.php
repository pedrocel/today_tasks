@section('js')

    @if(session('status') == 'Ok')
        <script>
            Swal.fire(
                'Tarefa Editada com sucesso!',
                '',
                'success'
            )
        </script>
    @endif

    @if(session('status') == 'create')
        <script>
            Swal.fire(
                'Tarefa criada com sucesso!',
                '',
                'success'
            )
        </script>
    @endif

    @if(session('status') == 'profile_update')
        <script>
            Swal.fire(
                'Dados atualizados com sucesso!',
                '',
                'success'
            )
        </script>
    @endif


    @if(session('delete') == 'Ok')
        <script>
            Swal.fire(
                'Tarefa excluida com sucesso!',
                '',
                'success'
            )
        </script>
    @endif
    <script>
        $('.form-delete').submit(function (e){
            console.log('a');
            e.preventDefault();
            Swal.fire({
                title: 'Tem certeza que deseja deletar essa tarefa?',
                text: "Essa ação não pode ser desfeita!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim ,tenho certeza',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            })
        });

    </script>
@endsection
