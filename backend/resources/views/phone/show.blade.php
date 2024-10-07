@extends("layouts.main")

@section("title", $title)

@section("content")
<main class="container">
    <h1>
        {{$title}}
    </h1>
    <div class="row">
        <div class="col-4">
            <img src="{{asset("img/" . $phone['id'] . ".jpg")}}" class="img-fluid" alt="{{$phone['manufacturer'] . " " . $phone['model']}}">
        </div>
        <div class="col-8">
            <ul>
                <li>Gyarto: {{$phone['manufacturer']}}</li>
                <li>Tipus: {{$phone['model']}}</li>
                <li>Szin: {{$phone['color']}}</li>
                <li>Tarhely: 
                    @if($phone['storage'] == "")
                        nincs
                    @else 
                        {{$phone['storage']}} GB
                    @endif
                </li>
                <li>Ar: {{number_format($phone['price'], 0, "", " ")}} Ft</li>
            </ul>
            <p>
                {{$phone['description']}}
            </p>
            <a href="{{route("home")}}">Vissza a fooldalra</a>
        </div>
    </div>
</main>
@endsection