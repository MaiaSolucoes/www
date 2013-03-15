@layout('layouts/default')

@section('title')

    Contatos

@endsection

@section('link_select')

<?php $link = '';?>

@endsection

@section('banner')

  <br><br><br><br>

    <div class="container">

        <table class="table table-hover table-font-small">
            <th style="width: 150px">Nome</th>
            <th style="width: 250px">Email</th>
            <th style="width: 350px">Mensagem</th>
            <th style="width: 100px">IP</th>
            <th style="width: 110px">Data/Hora</th>

            @forelse($messages->results as $valor)

                <tr>
                    <td>{{ $valor->name }}</td>
                    <td>{{ $valor->email }}</td>
                    <td>{{ wordwrap(Str::limit($valor->message, 2048), 80, "<br />\n", true) }}</td>
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