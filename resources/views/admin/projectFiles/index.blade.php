@extends('admin.layouts.app')

@section('title', 'Page Title')

{{--@section('heading', 'Answers')--}}

<!-- Breadcrumb Section -->
{{--@section('breadcrumb')
    <li class="breadcrumb-item">
        Home
    </li>
@endsection--}}

@section('content')

    <!-- Content Section -->

    <!-- Answer Create Button -->
    <div class="row">
        <a href="{{ action('ProjectFileController@create') }}" class="btn btn-outline-info mb-3">Create New
            File</a>
    </div>

    <div class="row mb-4">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                {{--<th scope="col"></th>
                <th scope="col"></th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($files as $index => $file)
                <tr>

                    <th scope="row">{{ ++$index }}</th>
                    <td>{{ $file->title }}</td>
                    <td>{{ $file->status }}</td>
                    <td><a href="{{ action('ProjectFileController@show', $file->id) }}"
                           class="btn btn-outline-success {{ ($file->status == \App\ProjectFile::STATUS_SUCCESS) ? '' : 'disabled' }}" >Show</a></td>
                    {{--<td><a href="{{ action('ProjectFileController@edit', $file->id) }}"
                           class="btn btn-outline-dark">Edit</a></td>
                    <td>
                        <form action="{{ action('ProjectFileController@destroy', $file->id) }}"
                              method="post">

                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="DELETE"/>

                            <input type="submit" class="btn btn-outline-danger" name="btnSubmit" value="Delete"/>
                        </form>
                    </td>--}}
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
@endsection
