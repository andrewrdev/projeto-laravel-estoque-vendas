@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h4 class="mb-4">Editar Produto</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/products/{{ $product->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $product->name) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input
                                type="number"
                                name="price"
                                step="0.01"
                                class="form-control"
                                value="{{ old('price', $product->price) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preço de Custo</label>
                            <input
                                type="number"
                                name="cost_price"
                                step="0.01"
                                class="form-control"
                                value="{{ old('cost_price', $product->cost_price) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantidade em Estoque</label>
                            <input
                                type="number"
                                name="stock_quantity"
                                class="form-control"
                                value="{{ old('stock_quantity', $product->stock_quantity) }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Status do Produto</label>

                            <select name="active" class="form-select" required>
                                <option value="1" {{ old('active', $product->active) == 1 ? 'selected' : '' }}>
                                    Ativo
                                </option>
                                <option value="0" {{ old('active', $product->active) == 0 ? 'selected' : '' }}>
                                    Inativo
                                </option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/products" class="btn btn-secondary">
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