@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Arquivos</h4>

                    @foreach ($files as $file)
                        <div class="alert alert-success">
                            <p>
                                <strong>Nome:</strong> {{ $file->name }} <br>
                                <strong>Departamento:</strong> {{ $file->department->name }} <br>
                                <strong>Categoria:</strong> {{ $file->category->name }} <br>
                                <strong>Descrição:</strong> {{ $file->description }} <br>
                                <iframe src="{{ \Storage::url('files/file1.pdf') }}" height="400" width="1024"></iframe>
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
