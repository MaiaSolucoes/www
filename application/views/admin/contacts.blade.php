@layout('layouts/default')

@section('title')

    Contatos

@endsection

@section('link_select')

<?php $link = '';?>

@endsection

@section('banner')

    @section('logout')

        {{ HTML::link('../admin/logout','Logout') }}

    @endsection

    <br><br><br><br>

    <center>
        <h3>Olá, {{ Auth::User()->email }}</h3>
    </center>

    <div class="container">

        <table class="table table-hover table-font-small">
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
            <th>IP</th>
            <th>Data/Hora</th>

            @forelse($messages->results as $valor)

                <tr>
                    <td>{{ $valor->name }}</td>
                    <td>{{ $valor->email }}</td>
                    <td>{{ Str::limit($valor->message, 2048) }}</td>
                    <td>{{ $valor->ip }}</td>
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

        {{ $messages->links() }}

    </div>

    <br><br><br><br><br><br><br><br>

@endsection