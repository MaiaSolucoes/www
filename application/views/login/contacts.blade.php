@layout('layouts/default')

@section('title')
Login
@endsection

@section('banner')


<div id="banner">

<!--{{$message =  Session::get('message') }}-->
<!--@foreach($message as $valor)

    {{ $valor->message }}

@endforeach-->


    <!--@forelse($message as $produto)
        {{ $produto->name }}
        {{ $produto->email }}
        {{ $produto->message }}
    @empty
        Nenhum regstro cadastrado.
    @endforelse-->


    @forelse ($messages as $message)
    {{ $message->name }}
    {{ $message->email }}
    {{ $message->message }}
    @empty
    There are not posts in the array!
    @endforelse



</div>


@endsection