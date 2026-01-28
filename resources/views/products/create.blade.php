@extends('layouts.app')

@section('title', 'Novo Produto')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h4 class="card-title mb-4">
                        Cadastrar Produto
                    </h4>

                    {{-- mensagem de sucesso --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- erros de validação --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/products">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input
                                type="number"
                                name="price"
                                step="0.01"
                                class="form-control"
                                value="{{ old('price') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preço de Custo</label>
                            <input
                                type="number"
                                name="cost_price"
                                step="0.01"
                                class="form-control"
                                value="{{ old('cost_price') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantidade em Estoque</label>
                            <input
                                type="number"
                                name="stock_quantity"
                                class="form-control"
                                value="{{ old('stock_quantity', 0) }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Status do Produto</label>

                            <select name="active" class="form-select" required>
                                <option value="1">
                                    Ativo
                                </option>
                                <option value="0">
                                    Inativo
                                </option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/products" class="btn btn-secondary">
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Cadastrar
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
