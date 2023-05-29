@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit group</h3>
                        <a class="create__btn" href="{{ route('admin.groups.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.groups.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Title :</strong>
                        <input type="text" name="name" value="{{ $group->name }}" class="form-control"> <br>

                        <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $group->description }}" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" value="{{ $group->age }}"  class="form-control"> <br>

                        <strong> Seat :</strong>
                        <input type="text" name="seat" value="{{ $group->seat }}" class="form-control"> <br>

                        <strong> Time :</strong>
                        <input type="text" name="time" value="{{ $group->time }}" class="form-control"> <br>

                        <strong> Payment :</strong>
                        <input type="text" name="payment" value="{{ $group->payment }}" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="image" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
