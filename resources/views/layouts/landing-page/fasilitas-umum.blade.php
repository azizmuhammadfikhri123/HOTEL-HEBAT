<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Fasilitas Umum</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($facility as $item)
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url({{asset('image/'. $item->image)}})">
                        </div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">{{$item->facility_name}}</h3>
                            <p>{{$item->detail}}</p>
                            {{-- <p><a href="#" class="btn btn-primary">Leia mais</a></p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
