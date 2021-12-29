@extends('layout')
@section('title', 'About Us')
@section('content')
    <!--Page Cover-->
    <section class="row page-cover">
        <div class="container">
            <h2 class="h1 page-title">Fleet <span>(No Sidebar)</span></h2>
            <ol class="breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li class="active">fleet</li>
            </ol>
        </div>
    </section>
    <section class="row wrapper-fleet">
        <div class="container">
            <div class="row m0 banner-row"><a href="#"><img src="images/banner/fleet.png" alt="" class="img-responsive"></a></div>
            <div class="row m0 fleet-filters">
                <div class="filter-by filter-div">
                    <div class="this-label">Filter by:</div>
                    <select class="selectpicker fleet-filter-select">
                        <option>All category</option>
                        <option>Category 01</option>
                        <option>Category 02</option>
                        <option>Category 03</option>
                        <option>Category 04</option>
                        <option>Category 05</option>
                    </select>
                </div>
                <div class="filter-div layout-filter">
                    <a href="#"><i class="ion-ios-list-outline"></i></a>
                    <a href="#" class="active"><i class="ion-grid"></i></a>
                </div>
                <div class="filter-div show-fleet">
                    <div class="this-label">Show:</div>
                    <select class="selectpicker fleet-filter-select">
                        <option>05 items/page</option>
                        <option>10 items/page</option>
                        <option>15 items/page</option>
                        <option>20 items/page</option>
                        <option>25 items/page</option>
                    </select>
                </div>
                <ul class="pagination">
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li class="dots"><a href="#">...</a></li>
                    <li><a href="#">30</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            @if(isset($noDis))
                <section class="row banner2-prefolder">
                    <div class="container">
                        <div class="row inner m0">
                            <div class="col-md-6 this-left">
                                <div class="this-texts">
                                    <h2 class="this-title">Wiber</h2>
                                    <h2 class="this-title2 h1">Ren car Airoports!</h2>
                                    <p>Nuestras oficinas para alquilar tu coche con Wiber</p>
                                    <a href="/" class="read-more">Buscar de nuevo<i class="ion-arrow-right-b"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 this-right">
                                <div class="this-texts">
                                    <h2 class="this-title">Online Booking</h2>
                                    <h2 class="this-title2 h1">No hay disponibilidades</h2>
                                    <p>Modifica horario o elegir otra fecha</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                @foreach($sendData as $data)
                    <div class="media fleet fleet-list">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="banner-carousel">
                                    @foreach($data['Productos'] as $picture)
                                        @foreach($picture as $key => $img)
                                            <div class="item" style="display:block;">
                                                <h3 class="hh3"><b>{{$img['Nombre']}} o similar </b> </h3>
                                                <img src="https://www.wiberrentacar.com/images/grupos/{{$data['Group']}}/{{$img['Imagen']}}" alt="Owl Image">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>{{$img['Nombre']}}</h5>
                                                    <p>...</p>
                                                </div>
                                            </div>

                                        @endforeach
                                    @endforeach

                                </div>

                                <div class="row specification col-md-12" style="margin-right:10px;">
                                    <div class=" col-md-3">
                                        <span><img src="images/icons/fleet-list/1.png" alt=""></span><br><span>{{$data['Group']}}</span>
                                    </div>
                                    <div class=" col-md-3">
                                        <span><img src="images/icons/fleet-list/2.png" alt=""></span><br><span>{{$data['Ocupantes']}}</span>
                                    </div>
                                    <div class=" col-md-3">
                                        <span><img src="images/icons/fleet-list/3.png" alt=""></span><br><span>{{$data['Ocupantes']}}</span>
                                    </div>
                                    <div class=" col-md-3">
                                        @if($data['Automatico'] ==false)
                                            <span><img src="images/icons/fleet-list/1.png" alt=""></span><br><span>No</span>
                                        @else
                                            <span><img src="images/icons/fleet-list/1.png" alt=""></span><br><span>Si</span>
                                        @endif
                                    </div>


                                </div>

                            </div>

                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <section>

                                    @foreach((array)$data['Rates']  as $rat => $rates)

                                        @foreach((array)$rates as $ind => $price)

                                                 <div class="col-md-6 col-sm-6">
                                                    <div class="price-table">
                                                        <div class="price-head">
                                                            <h4>FULL/FULL</h4>
                                                            <h2>{{$price['PriceDay']}}$ <span>Day</span></h2>
                                                        </div>
                                                        <div class="price-content">
                                                            <ul>
                                                                <li>Combustible</li>
                                                                <li>Kilometraje</li>
                                                                <li>Seguro</li>
                                                                <li>Franquicia</li>
                                                                <li>Cancelación</li>
                                                            </ul>
                                                        </div>
                                                        <div class="price-button">
                                                            <a href="#" class="detail-btn btn"><span>Mas detalles</span><span><img src="images/fleet/key.png" alt=""></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        @endforeach
                                    @endforeach


                                </section>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="row fleet-pagination-row pagination-row fleet-filters">
                <div class="pagi-info">
                    <h5>Total <span>150</span>results</h5>
                    <h5>Showing items from <span><u>01 to 05</u></span></h5>
                </div>
                <ul class="pagination">
                    <li>Page:</li>
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li class="dots"><a href="#">...</a></li>
                    <li><a href="#">30</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

@stop


