@extends('admin.layouts.admin')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">News Records</h4>
                <a href="{{ route('admin.news.create') }}">
                    <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                </a>
                {{-- <p class="card-description"></code> --}}
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Type </th>
                            <th> Published At </th>
                            <th> Thumbnail </th>
                            <th> Published link </th>
                            <th> Manage </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td>{{ $item->title }} </td>
                                <td>
                                    {{ $item->type }}
                                </td>
                                <td>
                                    {{ $item->published_at }}
                                </td>
                                <td>
                                    <img src="{{ asset($item->thumbnail) }}" alt="thumbnail"
                                        style="width: 80px; height: 80px;">
                                </td>
                                <td>
                                    <a href="{{ $item->published_link }}" target="_blank">
                                        Go to link
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.news.edit', $item->id) }}">
                                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                                    </a>
                                    <form type="submit" method="POST"
                                        action="{{ route('admin.news.destroy', $item->id) }}"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--
            </div>
        </div> --}}
@endsection
