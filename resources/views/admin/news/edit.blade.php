@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update News</h4>
                <p class="card-description"> Website News Information </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.news.update', $news->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ $news->title ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">News Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="News Type"
                                value="{{ $news->type ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="published_at">Published at</label>
                            <input type="date" class="form-control" id="published_at" name="published_at"
                                placeholder="Published at" value="{{ $news->published_at ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="thumb">News Image</label>
                            <input type="file" class="form-control" id="thumb" name="thumbnail"
                                placeholder="News image" value="{{ $news->thumbnail ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="published_link">Pbulished Link</label>
                            <input type="text" class="form-control" id="published_link" name="published_link"
                                placeholder="Pbulished Link" value="{{ $news->published_link ?? '' }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
