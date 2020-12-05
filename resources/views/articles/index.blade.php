@extends("layouts.app")

@section("content")
    <div class="container">

    @if(session('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('info')}}
            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif

    {{ $articles->links() }}
        @foreach($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{ $article->created_at->diffForHumans() }}
                    </div>
                    <p class="card-text">{{ $article->body }}</p>
                    <a href="{{ url("/articles/detail/$article->id") }}" class="card-link">View Detail &raquo;</a>
                </div>
            </div>
        @endforeach
    {{ $articles->links() }}
    </div>
@endsection