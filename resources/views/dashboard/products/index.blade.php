<x-dashlayout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Products</h1>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="/dashboard/products/create">
        <div class="btn btn-sm btn-primary">Add Product</div>
    </a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>Rp. {{ $product->harga }}</td>
                        <td>{{ $product->stok }}</td>
                        <td><img src="{{ $product->image }}" class="rounded float-start"
                                style="width: 4rem; height: 4rem" alt="{{ $product->name }}"></td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->brand->name }}</td>
                        <td>
                            <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                <a href="/dashboard/products/{{ $product->id }}/edit">
                                    <button type="button" class="btn btn-warning border-0">Edit</button>
                                </a>
                                <form class="d-inline" action="/dashboard/products/{{ $product->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger border-0"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
    </div>

</x-dashlayout>
