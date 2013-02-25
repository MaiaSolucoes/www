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

        <table class="table table-hover pull-left">
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>

            @forelse($messages as $valor)

                <tr>
                    <td>{{ $valor->name }}</td>
                    <td>{{ $valor->email }}</td>
                    <td>{{ $valor->message }}</td>
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

    <br><br><br><br><br><br><br><br>

@endsection