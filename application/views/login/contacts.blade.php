@layout('layouts/default')

@section('title')
Login
@endsection

@section('banner')


<div id="banner">

    <table class="table table-hover">
        <th>Email</th>
        <th>Nome</th>
        <th>Data de envio</th>
        @forelse($messages as $valor)
        <tr>
            <td>{{ $valor->email }}</td>
            <td>{{ $valor->name }}</td>
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