@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.teachers.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $teacher->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $teacher->name }}</td>
                </tr>
                <tr>
                    <td>Job</td>
                    <td>{{ $teacher->job }}</td>
                </tr>
                <tr>
                    <td>Telegram Link</td>
                    <td>{{ $teacher->telegram_link }}</td>
                </tr>
                <tr>
                    <td>Instagram Link</td>
                    <td>{{ $teacher->instagram_link }}</td>
                </tr>
                <tr>
                    <td>Facebook Link</td>
                    <td>{{ $teacher->facebook_link }}</td>
                </tr>
                <tr>
                    <td>Rasm</td>
                    <td>{{ $teacher->image }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
