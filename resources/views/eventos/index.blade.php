@extends('admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Eventos</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($eventos as $evento)
                                    <tr>
                                        <th scope="row">{{$evento->id}}</th>
                                        <td>{{$evento->title}}</td>
                                        <td>{{$evento->description}}</td>
                                        <td><a href="{{route('eventos.editar',['id' => $evento->id])}}">editar(coloca um icone aqui)</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-center">
                            {{ $eventos->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
