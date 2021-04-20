@extends('master')
@section("content")

<div class="custom-product ">

    <div class="col-sm-10">

        <div class='trending-wrapper'>
        <h3>My orders</h3><br>
        
            @foreach($orders as $item)
                <div class="row searched-item cart-list-devider">
                    
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                        <img class='trending-image' src="{{$item->gallery}}" >
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                            <div class="">
                                <h2><b>Name : </b>  {{ $item->name}}</h2>
                                <h5><b>Delivery status :</b>  {{ $item->status }}</h5>
                                <h5><b>Address :</b>  {{ $item->address }}</h5>
                                <h5><b>Payment status :</b>  {{ $item->payment_status }}</h5>
                                <h5><b>Payment method :</b>  {{ $item->payment_method }}</h5>
                            </div>
                    </div>
                
                </div> 
            @endforeach
            
        </div>
    </div>
  
</div>
@endsection