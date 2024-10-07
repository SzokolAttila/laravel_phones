@extends("layouts.main")

@section("title", $title)

@section("content")

<main class="container">
    <h1>
        {{$title}}
    </h1>
    <div class="row">
        @foreach($phones as $phone)
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="card h-100">
                    <img src="{{asset("img/" . $phone['id'] . ".jpg")}}" class="card-img-top" alt="{{$phone['manufacturer'] . " " . $phone['model']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$phone['manufacturer'] . " " . $phone['model']}}</h5>
                        <p class="card-text">{{$phone['description']}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8">
                                <a href="{{route('phones.show', ['id' => $phone['id']])}}" class="btn btn-primary w-100">{{$phone['manufacturer'] . " " . $phone['model']}}</a>
                            </div>
                            <div class="col-4">
                                {{number_format($phone['price'], 0, "", " ")}} Ft
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection