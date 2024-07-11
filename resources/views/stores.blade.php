<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container py-4">
        <h2>Product</h2>
        <div class="row row-cols-4 align-items-start">
            @foreach ($stores as $store)
                <div class="col py-3">
                    <div class="card " style=" height:14rem, width: 18rem;">
                        <img src="{{ $store['image'] }}" class="card-img-top object-fit-contain border rounded"
                            style="height: 16rem;" alt="...">
                        <div class="card-body">
                            <a class="link-dark link-offset-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="#">
                                <h4 class="card-title ">{{ $store['name'] }}</h4>
                            </a>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                <a href="/brands/{{ $store->brand->slug }}/products"><span
                                        class="badge text-bg-danger px-2">{{ $store->brand->name }}</span></a>
                                <a href="/categories/{{ $store->category->slug }}/products"><span
                                        class="badge text-bg-info px-2">{{ $store->category->name }}</span></a>
                            </h6>
                            <p class="card-text d-inline-block text-truncate" style="max-width: 16rem;">
                                {{ $store['deskripsi'] }}</p>
                            <div class="row row-cols-2">
                                <div class="col text-start">
                                    <h6 class="">Stok: {{ $store['stok'] }}</h6>
                                    <h5 class="fw-bold">Rp. {{ $store['harga'] }}</h5>
                                </div>
                                <div class="col text-end">
                                    <h6></h6>
                                    <a href="#" class="btn btn-primary" style="width: 5rem">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
