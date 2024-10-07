@php 
    $phones = [
        1 => "iPhone",
        "Pixel",
        "3310",
        "Moto G54"    
    ]
@endphp

<nav style="background-color: #233049 !important;" class="navbar navbar-dark navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Telefonok</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @php $url = route('home') @endphp
        @if(request()->routeIs("home"))
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{$url}}">Fooldal</a>
            </li>
        @else
        <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{$url}}">Fooldal</a>
            </li>
        @endif
        @foreach($phones as $id => $phone)
            @php $url = route('phones.show', ['id' => $id]) @endphp
            @if(request()->routeIs("phones.show") && request()->route("id") == $id)
                <li class="nav-item">
                    <a class="nav-link active" href="{{$url}}">{{$phone}}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{$url}}">{{$phone}}</a>
                </li>
            @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>