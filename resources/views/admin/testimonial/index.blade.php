@extends('admin.layouts.admin')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Testimonial Records</h4>
                <p class="card-description"> Website Testimonial Section Information </p>
                <a href="{{ route('admin.testimonial.create') }}">
                    <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                </a>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Content </th>
                            <th> Date </th>
                            <th> Manage </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td>{{ $item->name }} </td>
                                <td style="white-space: initial;">
                                    {{ $item->content }}
                                </td>
                                <td>{{ $item->date }} </td>
                                <td>
                                    <a href="{{ route('admin.testimonial.edit', $item->id) }}">
                                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                                    </a>
                                    <form type="submit" method="POST"
                                        action="{{ route('admin.testimonial.destroy', $item->id) }}"
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
