@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="post">
            @csrf 
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">
                            {{ $category['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Add Article" class="btn btn-primary">
        </form>
    </div>
@endsection