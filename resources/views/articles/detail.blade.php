@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <div class="card-subtitle mb-2 text-muted small">
                    {{ $article->created_at->diffForHumans() }},
                    Category: <b>{{ $article->category->name }}</b>
                </div>
                <p class="card-text">{{ $article->body }}</p>
                <a href="{{ url("/articles/delete/$article->id") }}" data-method="delete" class="btn btn-danger">Delete</a>
            </div>
        </div>

        <ul class="list-group">
            <li class="list-group-item active">
                <b>Comments ({{ count($article->comments) }})</b>
            </li>
            @foreach($article->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>

        <form action="{{ url('/comments/add') }}" method="post">
            @csrf 
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <textarea name="content" id="" rows="5" class="form-control mb-2"></textarea>
            <input type="submit" value="Add Comment" class="btn btn-secondary">
        </form>
    </div>
@endsection