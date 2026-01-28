@extends('layouts.app')

@section('title', 'Customer Delete')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card border-danger shadow-sm">
                <div class="card-body">

                    <h4 class="text-danger mb-3">
                        Confirmar exclusão
                    </h4>

                    <p>
                        Você tem certeza que deseja excluir o cliente abaixo?
                    </p>

                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <strong>Nome:</strong> {{ $customer->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $customer->email ?? '-' }}
                        </li>
                        <li class="list-group-item">
                            <strong>Telefone:</strong> {{ $customer->phone ?? '-' }}
                        </li>
                    </ul>

                    <form method="POST" action="/customers/{{ $customer->id }}">
                        @csrf
                        @method('DELETE')

                        <div class="d-flex justify-content-between">
                            <a href="/customers" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-danger">
                                Sim, excluir
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection