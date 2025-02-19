@extends('admin.layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hero Section</h4>
                <p class="card-description"> Website Hero Section Information </p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.hero.update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="form-group">
                            <label for="heroSmallTitle">Hero Short Title</label>
                            <input type="text" class="form-control" id="heroSmallTitle" name="hero_small_title"
                                placeholder="Hero short title" value="{{ $hero->hero_small_title ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="heroTitle">Hero Title</label>
                            <input type="text" class="form-control" id="heroTitle" name="hero_title"
                                placeholder="Hero title" value="{{ $hero->hero_title ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="heroImage">Hero Image</label>
                            <input type="file" class="form-control" id="heroImage" name="hero_image"
                                placeholder="Hero Image" value="{{ $hero->hero_image ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="yearsOfExp">Years of experiance</label>
                            <input type="text" class="form-control" id="yearsOfExp" name="years_of_experience"
                                placeholder="Years of experiance" value="{{ $hero->years_of_experience ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="number_of_awards">Number of awards</label>
                            <input type="text" class="form-control" id="number_of_awards" name="number_of_awards"
                                placeholder="Number of awards" value="{{ $hero->number_of_awards ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="number_of_pubs">Number of publications</label>
                            <input type="text" class="form-control" id="number_of_pubs" name="number_of_pubs"
                                placeholder="Number of publications" value="{{ $hero->number_of_pubs ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="number_of_published_news">Number of published news</label>
                            <input type="text" class="form-control" id="number_of_published_news"
                                name="number_of_published_news" placeholder="Number of published news"
                                value="{{ $hero->number_of_published_news ?? '' }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
