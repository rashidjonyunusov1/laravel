  @extends('layouts.main')
  @section('content')
  <!-- Header Start -->
  <div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Bizni yutuqlarimiz</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.html">Bosh sahifa</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Yutuqlar</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Wins Start -->
<div class="container-fluid pt-5">
  <div class="container">
      <div class="text-center pb-2">
          <p class="section-title px-5"><span class="px-2">Bog'cha hayoti</span></p>
          <h1 class="mb-4">So'nggi maqolalar</h1>
      </div>
      @include('sections.blogs')
      @include('sections.blogs')

  </div>
</div>
<div class="col-md-12 mb-4">
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center mb-0">
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
</div>
<!-- Wins End -->

@endsection