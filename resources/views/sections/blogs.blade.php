
<div class="row pb-3">
    @foreach($blogs as $item )

    <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm mb-2">
            <img src="/blogs_img/{{ $item->image }}" alt="">
            <div class="card-body bg-light text-center p-4">
                <h4 class="">{{ $item->title }}</h4>
                <div class="d-flex justify-content-center mb-3">
                    <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $item->name}}</small>
                    <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> -->
                    <!-- <small class="mr-3"><i class="fa fa-eye text-primary"></i> 15</small> -->
                </div>
                <p>{{ $item->description }}</p>
                <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
            </div>
        </div>
    </div>
   @endforeach
</div>
