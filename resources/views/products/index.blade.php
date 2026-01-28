@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Produtos</h3>

        <a href="/products/create" class="btn btn-primary">
            Novo Produto
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>R$ {{ $product->price }}</td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>{{ $product->active ? 'Ativo' : 'Inativo' }}</td>
                            <td>
                                <a 
                                    href="/products/{{ $product->id }}/edit" 
                                    class="btn btn-sm btn-warning"
                                >
                                    Editar
                                </a>
                                <a 
                                    href="/products/{{ $product->id }}/delete" 
                                    class="btn btn-sm btn-danger"
                                >
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Nenhum Produto cadastrado
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table> 
            <div class="mt-3">
                {{ $products->links() }}
            </div>  
        </div>
    </div>

</div>

@endsection