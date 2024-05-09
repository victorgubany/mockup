@extends('master')

@section('title', 'Home')
@section('content')



<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.9)">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imgs/teste.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/teste.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/teste.jpg') }}" class="d-block w-100" alt="">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row py-5">
        <div class="col d-flex justify-content-end">
            <div class="row ">
                <div class="col-auto my-auto fontHowManyYears">
                    <strong class="strong">
                        +1000
                    </strong>
                </div>
                <div class="col-auto fontHowManyYears">
                    Clientes <span class="d-block"></span>Atendidos
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-auto my-auto fontHowManyYears">
                    <strong class="strong">
                        +20
                    </strong>
                </div>
                <div class="col-auto fontHowManyYears">
                    Anos de <span class="d-block"></span>Mercado
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-flex">
<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide pb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
          <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>
            <div class="col text-center"><img class="persona" src="{{asset('imgs/persona.jpg')}}" alt=""></div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('imgs/banner1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imgs/banner1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imgs/banner1.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<div class="py-5 ">
    <div class="container" id="servico">
        <div class="row">
            <span class="fontHowManyYears">Terceirize para</span>
            <span class="d-block fontHowManyYears weak">Obras</span>
        </div>
    </div>
    <div class="container-flex" style="background-color: rgba(0,0,0,0.15)">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="container">
                    @php $active = true; @endphp
                    @foreach ($obras->chunk(6) as $chunk)
                    <div class="carousel-item @if($active) active @endif" data-bs-interval="4000">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($chunk as $item)
                            <div class="swiper-slide">
                                <div class="card mx-1" style="width: 13rem;">
                                    <img src="{{ asset('imgs/concept-selecting-employee-other-candidates-abstract-digital-display.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 11vh">{{$item->servico}}</h5>
                                        <span class="card-text">R$:{{$item->valor_inicial}},00</span>
                                        <span class="card-text">ou R$:{{$item->valor_juros}},00 em 12x</span>
                                        <a href="#" class=""><button class="btnCard">Go somewhere</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="container">

            <div class="row">
                <span class="fontHowManyYears">Navegue por</span>
                <span class="d-block fontHowManyYears weak">Segmentos</span>
            </div>

    <div class="row text-center pt-4">
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Shooping</button></div>
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Construção civil</button></div>
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Logística</button></div>
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Saúde</button></div>
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Aeroporto</button></div>
        <div class="col-5 py-1 col-lg-2"><button class="segmentos" href="">Energia</button></div>
    </div>
    <div class="row pb-4 d-flex justify-content-end">
        <div class="col d-flex justify-content-end ">
           <a class="verMais" href="">ver mais</a>
        </div>
    </div>

</div>

<div class="container-flex" style="background-color: rgba(0, 0, 0, 0.9)">
    <div class="container">
        <div class="row">
            <div class="col text-end g-0">
                <img class="imgPromo" src="{{ asset('imgs/promo1.jpg') }}" alt="">
            </div>
            <div class="col g-0">
                <img class="imgPromo" src="{{ asset('imgs/promo2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="py-5 ">
    <div class="container">
        <div class="row">
            <span class="fontHowManyYears">Terceirize para</span>
            <span class="d-block fontHowManyYears weak">Logística</span>
        </div>
    </div>
    <div class="container-flex" style="background-color: rgba(0,0,0,0.15)">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="container">
                    @php $active = true; @endphp
                    @foreach ($logistica->chunk(6) as $chunk)
                    <div class="carousel-item @if($active) active @endif" data-bs-interval="4000">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($chunk as $item)
                            <div class="swiper-slide">
                                <div class="card mx-1" style="width: 13rem;">
                                    <img src="{{ asset('imgs/concept-selecting-employee-other-candidates-abstract-digital-display.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 11vh">{{$item->servico}}</h5>
                                        <span class="card-text">R$:{{$item->valor_inicial}},00</span>
                                        <span class="card-text">ou R$:{{$item->valor_juros}},00 em 12x</span>
                                        <a href="#" class=""><button class="btnCard">Go somewhere</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



<img class="w-100 img-fluid" src="{{ asset('imgs/banner1.jpg') }}" alt="">


<div class="py-5 ">
    <div class="container">
        <div class="row">
            <span class="fontHowManyYears">Terceirize para</span>
            <span class="d-block fontHowManyYears weak">Escritório</span>
        </div>
    </div>
    <div class="container-flex" style="background-color: rgba(0,0,0,0.15)">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="container">
                    @php $active = true; @endphp
                    @foreach ($escritorio->chunk(6) as $chunk)
                    <div class="carousel-item @if($active) active @endif" data-bs-interval="4000">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($chunk as $item)
                            <div class="swiper-slide">
                                <div class="card mx-1" style="width: 13rem;">
                                    <img src="{{ asset('imgs/concept-selecting-employee-other-candidates-abstract-digital-display.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 11vh">{{$item->servico}}</h5>
                                        <span class="card-text">R$:{{$item->valor_inicial}},00</span>
                                        <span class="card-text">ou R$:{{$item->valor_juros}},00 em 12x</span>
                                        <a href="#" class=""><button class="btnCard">Go somewhere</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<img class="w-100 img-fluid" src="{{ asset('imgs/banner-promo.jpg') }}" alt="">

<div class="py-5 ">
    <div class="container">
        <div class="row">
            <span class="fontHowManyYears">Terceirize para</span>
            <span class="d-block fontHowManyYears weak">Industria</span>
        </div>
    </div>
    <div class="container-flex" style="background-color: rgba(0,0,0,0.15)">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="container">
                    @php $active = true; @endphp
                    @foreach ($industria->chunk(6) as $chunk)
                    <div class="carousel-item @if($active) active @endif" data-bs-interval="4000">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($chunk as $item)
                            <div class="swiper-slide">
                                <div class="card mx-1" style="width: 13rem;">
                                    <img src="{{ asset('imgs/concept-selecting-employee-other-candidates-abstract-digital-display.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 11vh">{{$item->servico}}</h5>
                                        <span class="card-text">R$:{{$item->valor_inicial}},00</span>
                                        <span class="card-text">ou R$:{{$item->valor_juros}},00 em 12x</span>
                                        <a href="#" class=""><button class="btnCard">Go somewhere</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



<img class="w-100 img-fluid" src="{{ asset('imgs/banner-promo.jpg') }}" alt="">

<div class="py-5 ">
    <div class="container">
        <div class="row">
            <span class="fontHowManyYears">Terceirize para</span>
            <span class="d-block fontHowManyYears weak">Eventos</span>
        </div>
    </div>
    <div class="container-flex" style="background-color: rgba(0,0,0,0.15)">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="container">
                    @php $active = true; @endphp
                    @foreach ($eventos->chunk(6) as $chunk)
                    <div class="carousel-item @if($active) active @endif" data-bs-interval="4000">
                        <div class="swiper-wrapper d-flex">
                            @foreach ($chunk as $item)
                            <div class="swiper-slide">
                                <div class="card mx-1" style="width: 13rem;">
                                    <img src="{{ asset('imgs/concept-selecting-employee-other-candidates-abstract-digital-display.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="min-height: 11vh">{{$item->servico}}</h5>
                                        <span class="card-text">R$:{{$item->valor_inicial}},00</span>
                                        <span class="card-text">ou R$:{{$item->valor_juros}},00 em 12x</span>
                                        <a href="#" class=""><button class="btnCard">Go somewhere</button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @php $active = false; @endphp
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<img class="w-100 img-fluid" src="{{ asset('imgs/banner1.jpg') }}" alt="">
@endsection
