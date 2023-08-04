<x-frontend-template>

    <section class="py-2">
        <div class="container">
            <div class="row">
                <!-- News -->
                <div class="col-md-8">
                    <div class="text-muted mb-2">
                        <i class="fa-regular fa-clock"></i> {{ nepalidate($article->created_at) }}
                         <i class="ms-3 fa-regular fa-newspaper"></i> {{ $article->views }} <span>पटक पढिएको</span>
                    </div>
                    <h1>{{ $article->title }}</h1>
                    <img src="{{ asset($article->image) }}" class="img-fluid" alt="{{ $article->title }}">
                    <p>{!! $article->description !!}</p>

                </div>
                <!-- Ads -->
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</x-frontend-template>
