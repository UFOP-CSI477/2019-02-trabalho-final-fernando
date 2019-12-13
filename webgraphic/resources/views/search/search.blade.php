@extends('master.modelo')

@section('title', 'Area_Administrativa')

@section('content')
{{--Construção da tabela resultante da pesquisa--}}
<h4 class="text-center">Pesquisar serviços</h4>

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" class="form-controller" id="search" name="search" placeholder="Insira o nome do cliente"></input>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>id</td>.
                        <td>id_cliente </td>.
                        <td>nome_cliente </td>.
                        <td>id_servico</td>.
                        <td>descricao_servico</td>.
                        <td>quantidade</td>.
                        <td>nome_funcionario</td>.
                        <td>preco_total</td>.
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{--função para gerar as linhas da tabela contendo a busca utilizando ajax--}}
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
