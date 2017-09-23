@extends('client.layouts.index')

@section('content')

    @if(isset($bookAuthor))


        <div class="container">
            <h3 class="title"> Tác giả : {{$bookAuthor->name}}</h3>
            <hr>
            <div class="batch">
                <div class="row">


                    @foreach($bookAuthor->book as $item)
                        <div class="col-md-3 col-xs-6">
                            <center>
                                <div class="batch_test">
                                    <div class="image">
                                        <a href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                            <img src="{{url('uploads/books/'.$item->thumbnail)}}" alt="">
                                        </a>
                                    </div>
                                    <a href="{{url('book/'.$item->id.'/'.$item->slug)}}">
                                        <p>{{$item->title}}</p>
                                    </a>
                                    <p>
                                        @if($item->discount>0)
                                            <i>{{$item->price*(1-$item->discount/100)}} vnd</i>
                                        @else
                                            <i>{{$item->price}} vnđ</i>
                                        @endif
                                    </p>
                                    <a href="{{url('addcart/'.$item->id)}}">
                                        <button type="button" class="btn btn-primary">Thêm vào giỏ hàng</button>
                                    </a>
                                </div>
                            </center>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
   
@endsection




