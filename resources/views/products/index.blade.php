@extends("layout")

@section("main")
    <h1 class="text-center">Produtos cadastrados</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Novo Produto</a>
   
    @if(count($products) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Qtd</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product) }}">Editar</a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir produto?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@else
    <h3>Não há produtos cadastrados</h3>
@endif

{{ $products->links() }}

@endsection
