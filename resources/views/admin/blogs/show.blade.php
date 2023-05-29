@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.blogs.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $blog->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $blog->name }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $blog->description }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="/blog_img/{{$blog->image}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
