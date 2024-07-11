<x-dashlayout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Produk</h1>
        <a href="/dashboard/products">
            <h5><span class="badge text-bg-warning">Kembali</span></h5>
        </a>
    </div>
    <form method="post" action="/dashboard/products/{{$products->id}}" class="row g-3">
        @method('PUT')
        @csrf
        <div class="col-md-12">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror id="name"
                value="{{ old('name', $products->name) }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" @error('category_id') is-invalid @enderror id="category_id" class="form-select">
                @foreach ($categories as $category)
                    @if (old('category_id', $products->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="brand_id" class="form-label">Brand</label>
            <select name="brand_id" @error('brand_id') is-invalid @enderror id="brand_id" class="form-select">
                @foreach ($brands as $brand)
                    @if (old('brand_id', $products->brand_id) == $brand->id)
                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                    @else
                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('brand_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
            <input type="text" class="form-control" name="deskripsi" @error('deskripsi') is-invalid @enderror
                id="deskripsi" value="{{$products->deskripsi}}">
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" @error('harga') is-invalid @enderror
                id="harga" value="{{$products->harga}}" required>
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="stok" class="form-label">Jumlah Stok</label>
            <input type="number" class="form-control" name="stok" @error('stok') is-invalid @enderror id="stok" value="{{$products->stok}}"
                required>
            @error('stok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Link Foto</label>
            <input type="text" class="form-control" name="image" @error('image') is-invalid @enderror
                id="image" value="{{$products->image}}" required>
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Edit Produk</button>
        </div>
    </form>
</x-dashlayout>
