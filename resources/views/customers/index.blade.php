@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Clientes</h3>

        <a href="/customers/create" class="btn btn-primary">
            Novo Cliente
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
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cadastrado em</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email ?? '-' }}</td>
                            <td>{{ $customer->phone ?? '-' }}</td>
                            <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a 
                                    href="/customers/{{ $customer->id }}/edit" 
                                    class="btn btn-sm btn-warning"
                                >
                                    Editar
                                </a>
                                <a 
                                    href="/customers/{{ $customer->id }}/delete" 
                                    class="btn btn-sm btn-danger"
                                >
                                    Excluir
                                </a>
                            </td>                            
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Nenhum cliente cadastrado
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table> 
            <div class="mt-3">
                {{ $customers->links() }}
            </div>  
        </div>
    </div>

</div>

@endsection