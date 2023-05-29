@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.groups.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $group->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $group->name }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $group->description }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $group->age }}</td>
                </tr>
                <tr>
                    <td>Seat</td>
                    <td>{{ $group->seat }}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{ $group->time }}</td>
                </tr>
                <tr>
                    <td>Payment</td>
                    <td>{{ $group->payment }}</td>
                </tr>
                <tr>
                    <td>Rasm</td>
                    <td>{{ $group->image }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
