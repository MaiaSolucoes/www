@layout('layouts/default')

@section('title')
Contatos
@endsection

@section('banner')


<div id="banner">

    <table class="table table-hover">
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>

        <th>Data de envio</th>
        @forelse($messages as $valor)
        <tr>
            <td>{{ $valor->name }}</td>
            <td>{{ $valor->email }}</td>
            <td>{{ $valor->message }}</td>
            <td>{{ $valor->created_at }}</td>
        </tr>
        @empty
        <tr>
            <td>Nenhum registro cadastrado.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforelse
    </table>


</div>


@endsection