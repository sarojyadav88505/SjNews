<x-frontend-template>
    <section class="py-2">
        <div class="container">
            <div class="py-2" style="background-color:#0b6bb5">
                <h5 class="text-white mx-2">{{ $category->name }}</h5>
            </div>
            <div class="row g-3 py-1">
                @foreach ($articles as $index=>$item)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"><h5 class="card-title">{{ Str::words($item->title, 8, '...') }}</h5></a>
                              <p class="card-text">
                                {{-- {!! Str::words($item->description, 50, '...') !!} --}}
                                {{-- {!! $item->description !!} --}}
                              </p>
                              <a href="/post/{{ $item->id }}" class="btn btn-primary">Read More</a>
                            </div>
                          </div>
                    </div>
                @endforeach

                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
</x-frontend-template>
