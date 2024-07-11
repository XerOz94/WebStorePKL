<x-dashlayout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Tambah Produk</h1>
        <a href="/dashboard/products">
            <h5><span class="badge text-bg-warning">Kembali</span></h5>
        </a>
    </div>
    <form method="post" action="/dashboard/products" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror
                id="name" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" @error('category_id') is-invalid @enderror id="category_id"
                class="form-select">
                <option selected>Pilih kategori..</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                <option selected>Pilih brand..</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
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
            <input type="text" class="form-control" name="deskripsi"
                @error('deskripsi') is-invalid @enderror id="deskripsi">
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" @error('harga') is-invalid @enderror
                id="harga" required>
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="stok" class="form-label">Jumlah Stok</label>
            <input type="number" class="form-control" name="stok" @error('stok') is-invalid @enderror
                id="stok" required>
            @error('stok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Link Foto</label>
            <input type="text" class="form-control" name="image" @error('image') is-invalid @enderror
                id="image" required>
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </div>
    </form>
</x-dashlayout>
