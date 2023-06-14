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
                        <h3>Add District</h3>
                        <a class="create__btn" href=""> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.numbers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> District :</strong>
                        <input type="text" name="district" value="{{ old('district') }}" class="form-control">
                        @error('district') {{ $message }}<br><br> @enderror

                        <strong> Regions :</strong>
                        <select name="region_id" id=""  class="form-control">
                            @foreach ($region as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select><br>
                        @error('region_id') {{ $message }}<br><br> @enderror

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection