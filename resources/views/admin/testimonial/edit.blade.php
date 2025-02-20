@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update faq</h4>
                <p class="card-description"> Website faq Information </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.testimonial.update', $testimonial->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ $testimonial->name ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date"
                                value="{{ $testimonial->date ?? '' }}" required />
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea rows="7" class="form-control" id="content" name="content" placeholder="content" required> {{ $testimonial->content ?? '' }}</textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
