@extends('admin.layouts.main')
@section('content')

	<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Infos</h3>
                  <a class="create__btn" href="{{ route('admin.infos.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection