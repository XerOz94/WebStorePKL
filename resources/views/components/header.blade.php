<header class="">
    <div class="container">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1">{{ $slot }}</h1>
            <a href="{{ URL::previous() }}">
                <h5><span class="badge text-bg-warning">Kembali</span></h5>
            </a>
        </div>
    </div>
</header>
