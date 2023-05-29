@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add teacher</h3>
                        <a class="create__btn" href="{{ route('admin.teachers.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title :</strong>
                        
                        <input type="text" name="name" class="form-control"> <br>
                        <strong> Job :</strong>
                        <input type="text" name="job" class="form-control"> <br>

                        <strong> Telegram Link :</strong>
                        <input type="text" name="telegram_link" class="form-control"> <br>

                        <strong> instagram link :</strong>
                        <input type="text" name="instagram_link" class="form-control"> <br>

                        <strong> Facebook Link :</strong>
                        <input type="text" name="facebook_link" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="image" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
