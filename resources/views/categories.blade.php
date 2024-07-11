<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container py-4">
        <h2>Category</h2>
        <div class="row row-cols-2 align-items-start">
            @foreach ($categories as $category)
                <div class="col py-3">
                    <div class="card " style=" height:14rem, width: 18rem;">
                        <img src="{{ $category['image'] }}" class="card-img-top object-fit-contain border rounded"
                            style="height: 16rem;" alt="...">
                        <div class="card-body">
                            <a class="link-dark link-offset-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="/categories/{{ $category->slug }}/products">
                                <h4 class="card-title ">{{ $category['name'] }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
