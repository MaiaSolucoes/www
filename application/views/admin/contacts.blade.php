@layout('layouts/default')

@section('title')
Contatos
@endsection


@section('conteudo')

@if( Auth::check())

    @section('logout')
    {{ HTML::link('admin/logout','Logout') }}
    @endsection

    <center>
        <h3>Olá, {{ Auth::User()->email }}</h3>
    </center>
    <div class="container">
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
@else
    {{ Redirect::to('../admin')}}
@endif

@endsection