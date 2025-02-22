@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Award</h4>
                <p class="card-description"> Website Award Information </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.awards.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="form-group">
                            <label for="title">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="award">Award</option>
                                <option value="certification">Certification</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Award Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Award image" value="{{ $award->image ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="link">Published Link</label>
                            <input type="text" class="form-control" id="link" name="link"
                                placeholder="Published Link" value="{{ $award->link ?? '' }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
