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
                <form class="forms-sample" method="POST" action="{{ route('admin.faq.update', $faq->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group">
                            <label for="Question">Question</label>
                            <input type="text" class="form-control" id="Question" name="question" placeholder="Question"
                                value="{{ $faq->question }}" required>
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <textarea rows="7" class="form-control" id="answer" name="answer" placeholder="faq answer" required>{{ $faq->answer }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
