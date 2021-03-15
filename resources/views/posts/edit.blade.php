@extends("layouts.app")

@section("content")
    <dev class="row">
        <div class="col-md-8  mx-auto">
            <form action="{{ route("posts.store") }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Name">Post creator</label>
                    <input type="text" name="name" id="Name" class="form-control" value="{{ $post['posted_by'] }}" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="post">Title</label>
                    <textarea class="form-control" name="post" id="post" cols="30" rows="10">{{ $post['title'] }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Edit</button>
                </div>
            </form>
        </div>
    </dev>
@endsection

