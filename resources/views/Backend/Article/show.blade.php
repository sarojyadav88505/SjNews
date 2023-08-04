
<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webarticle.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
              <h1>{{ $article->title }}</h1>
                <h5>{{ $article->created_at->diffForHumans() }}</h5>
                <img src="{{ asset($article->image) }}" alt="Featured image" width="50%">
                <p>{!! $article->description !!}</p>
            </div>
        </div>
    </div>
</x-app-layout>
