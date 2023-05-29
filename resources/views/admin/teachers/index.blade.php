@extends('admin.layouts.main')
@section('teachers')
    active
@endsection
@section('content')

	<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Teachers</h3>
                  <a class="create__btn" href="{{ route('admin.teachers.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Job</th>
                            <th>Telegram Link</th>
                            <th>Instagram Link</th>
                            <th>Facebook Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ \Str::limit($item->job,10) }}</td>
                            <td>{{ \Str::limit($item->telegram_link,5) }}</td>
                            <td>{{ \Str::limit($item->instagram_link,5) }}</td>
                            <td>{{ \Str::limit($item->facebook_link,5) }}</td>
                            <td><img src="/teachers_img/{{$item->image}}" width="40px"></td>
                            <td>

                                <form method="POST" action="{{ route('admin.teachers.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.teachers.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.teachers.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $teachers->links()}}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection