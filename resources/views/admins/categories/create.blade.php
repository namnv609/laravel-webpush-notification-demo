@extends("layouts.admin")

@section("content")
    <form action="/admin/categories/new" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        @if (count($errors))
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
