@extends('admin.layouts.main')
@section('groups')
    active
@endsection
@section('content')

@if ($message = Session::get('warning'))
        <div class="alert alert-warning">
           <p style="color: black;">{{ $message }}</p>
        </div>
@endif

@if ($message = Session::get('success'))
     <div class="alert alert-success">
         <p>{{ $message }}</p>
     </div>
@endif

	<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>groups</h3>
                  <a class="create__btn" href="{{ route('admin.groups.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Age</th>
                            <th>Seat</th>
                            <th>Time</th>
                            <th>Payment</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ \Str::limit($item->description,20) }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->seat }}</td>
                            <td>{{ $item->time }}</td>
                            <td>{{ $item->payment }}</td>
                            <td><img src="/groups_img/{{$item->image}}" width="40px"></td>
                            <td>

                                <form method="POST" action="{{ route('admin.groups.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.groups.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.groups.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $groups->links()}}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection