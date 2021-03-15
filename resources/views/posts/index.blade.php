@extends("layouts.app")

@section("content")
    <dev class="row mt-5 text-center">
        <div class="col-md-12 mb-3">
            <a href="{{ route("posts.create") }}" class="btn btn-success"> New Post</a>
        </div>
        <div class="col-md-8 mx-auto">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Posted By</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $index => $post)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td> {{ $post['title'] }} </td>
                    <td> {{ $post['posted_by'] }} </td>
                    <td> {{ $post['created_at'] }} </td>
                    <td>
                        <a href="{{ route("posts.show", $post['id']) }}" class="btn btn-info">Show</a>
                        <a href="{{ route("posts.edit", $post['id']) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route("posts.destroy", $post['id']) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </dev>
@endsection

