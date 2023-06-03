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
                        <h3>Edit Human</h3>
                        <a class="create__btn" href=""> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.humans.update', $human->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ $human->name }}" class="form-control">
                        @error('name') {{ $message }}<br><br> @enderror

                        <strong> Number :</strong>
                        <select name="number_id" id=""  class="form-control">
                            <option value="{{ $human->number_id }}">{{ $human->number->number }}</option>
                            @foreach ($numbers as $item)
                                <option value="{{ $item->id }}">{{ $item->number }}</option>
                            @endforeach
                        </select><br>
                        @error('number_id') {{ $message }}<br><br> @enderror

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection