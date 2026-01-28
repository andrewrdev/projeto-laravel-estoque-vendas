@extends('layouts.app')

@section('title', 'Customer Edit')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h4 class="mb-4">Editar Cliente</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/customers/{{ $customer->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input 
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $customer->name) }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input 
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $customer->email) }}"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input 
                                type="text"
                                name="phone"
                                class="form-control"
                                value="{{ old('phone', $customer->phone) }}"
                            >
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/customers" class="btn btn-secondary">
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Atualizar
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection