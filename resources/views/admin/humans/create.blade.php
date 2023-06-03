@extends('admin.layouts.main')


@section('content')

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Human</h3>
                        <a class="create__btn" href=""> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.humans.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name') {{ $message }}<br><br> @enderror

                        <strong> Number :</strong>
                        <select name="number_id" id=""  class="form-control">
                            @foreach ($numbers as $item)
                                <option value="{{ $item->id }}">{{ $item->number }}</option>
                            @endforeach
                        </select><br>
                        @error('number_id') {{ $message }}<br><br> @enderror

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection