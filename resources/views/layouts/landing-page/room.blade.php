<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Rooms</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($type_kamar as $item)
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url({{asset('image/'. $item->image)}})"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">{{$item->name}}</h3>
                            <h5>{{$item->information}}</h5>
                            <h5>{{'Rp.' . ' ' . number_format($item->price)}}</h5>
                            <p><a href="{{route('type_room', $item->id)}}" class="btn btn-primary">Show</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

