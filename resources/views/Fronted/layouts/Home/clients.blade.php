<div class="clients pd-top-80 pd-bottom-85" data-animation="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">شركــاء النجاح <i class="fa fa-user"></i></h2>
            </div>
            <div class="col-sm-12">
                @foreach(getClients(5) as $row)
                <img src="{{getImageUrl('Client',$row->image)}}" alt="client">
                    @endforeach
            </div>
        </div>
    </div>
</div>
