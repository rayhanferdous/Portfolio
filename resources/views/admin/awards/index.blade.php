@extends('admin.layouts.admin')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Awards Records</h4>
                <a href="{{ route('admin.awards.create') }}">
                    <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                </a>
                {{-- <p class="card-description"></code> --}}
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Type </th>
                            <th> Image </th>
                            <th> Link </th>
                            <th> Manage </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td>{{ $item->type }} </td>
                                <td>
                                    <img src="{{ asset($item->image) }}" alt="thumbnail" style="width: 80px; height: 80px;">
                                </td>
                                <td>
                                    @if ($item->published_link == null)
                                        <span class="text-danger">No link</span>
                                    @else
                                        <a href="{{ $item->published_link }}" target="_blank">
                                            Go to link
                                        </a>
                                    @endif

                                </td>

                                <td>
                                    <a href="{{ route('admin.awards.edit', $item->id) }}">
                                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                                    </a>
                                    <form type="submit" method="POST"
                                        action="{{ route('admin.awards.destroy', $item->id) }}"
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
