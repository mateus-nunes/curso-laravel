@extends('layout')

@section('title', 'Editar Produto')

@section('main')
<h2 class="text-center">Editar Produto</h2>

<form action="{{ route('products.update', $product) }}" method="POST">
    @method('PUT')
    @csrf

<div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', $product->name ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Preço</label>
    <input type="number" step="0.01" name="price" class="form-control"
           value="{{ old('price', $product->price ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Quantidade</label>
    <input type="number" name="quantity" class="form-control"
           value="{{ old('quantity', $product->quantity ?? '') }}">
</div>

<button class="btn btn-success">Salvar</button>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <strong>Erros no formulário:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
@endsection