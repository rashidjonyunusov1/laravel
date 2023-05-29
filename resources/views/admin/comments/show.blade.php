@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.comments.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $comment->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $comment->name }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $comment->description }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $comment->jobs }}</td>
                </tr>
                <tr>
                    <td>Rasm</td>
                    <td>{{ $comment->image }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
