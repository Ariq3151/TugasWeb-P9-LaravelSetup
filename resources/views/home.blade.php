<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Daftar Produk</h1>

    @if ($products->count() > 0)
        @foreach ($products as $product)
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p>Stok: {{ $product->stock }}</p>
            </div>
            <hr>
        @endforeach
    @else
        <p>Belum ada produk.</p>
    @endif
</body>

</html>