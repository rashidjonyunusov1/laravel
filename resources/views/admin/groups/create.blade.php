@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add group</h3>
                        <a class="create__btn" href="{{ route('admin.groups.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.groups.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong> Description :</strong>
                        <input type="text" name="description" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" class="form-control"> <br>

                        <strong> Seat :</strong>
                        <input type="text" name="seat" class="form-control"> <br>

                        <strong> Time :</strong>
                        <input type="text" name="time" class="form-control"> <br>

                        <strong> Payment :</strong>
                        <input type="text" name="payment" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="image" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
