<!DOCTYPE html>
<html lang="en">
<head>
    <!--head-->
    @include('partials.head-graficas')
    <!--/head-->
</head>

<body>

<!--.preloader-->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <!--#home-slider-->
        @include('partials.slider')
    <!--/#home-slider-->
    
    <!--#main-nav-->
    @include('partials.main-graficas')
    <!--/#main-nav-->

</header><!--/#home-->
<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2><Strong>REGISTROS</Strong></h2>
                </div>
            </div>
        </div>
        <div class="text-center our-services">
            <div class="row">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <h1>Usuarios</h1>
                            <i class="icon-settings font-dark"></i>
                        </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sampleu">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Cédula </th>
                                <th> Nombre </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                                <th> Correo </th>
                                <th> Sede </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> # </th>
                                <th> Cédula </th>
                                <th> Nombre </th>
                                <th> Teléfono </th>
                                <th> Rol </th>
                                <th> Correo </th>
                                <th> Sede </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($all as $a)
                                <tr>
                                    <td></td>
                                    <td>{{$a->cod_ced}}</td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->tel}}</td>
                                    <td>{{$a->rol}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->sede_ext}}</td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>              
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div class="text-center our-services">
            <div class="row">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <h1>Usuarios con actividades</h>
                            <i class="icon-settings font-dark"></i>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Cédula </th>
                                    <th> Nombre </th>
                                    <th> Teléfono </th>
                                    <th> Rol </th>
                                    <th> Correo </th>
                                    <th> Sede </th>
                                    <th> Actividad </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th> # </th>
                                    <th> Cédula </th>
                                    <th> Nombre </th>
                                    <th> Teléfono </th>
                                    <th> Rol </th>
                                    <th> Correo </th>
                                    <th> Sede </th>
                                    <th> Actividad </th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($co as $c)
                                    @foreach($c->activitis as $ac)
                                        <tr>
                                            <td></td>
                                            <td>{{$c->cod_ced}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->tel}}</td>
                                            <td>{{$c->rol}}</td>
                                            <td>{{$c->email}}</td>
                                            <td>{{$c->sede_ext}}</td>
                                            @if($ac->id == 7)
                                                <td>(R)Taller1</td>
                                            @elseif($ac->id == 8)
                                                <td>(R)Taller2</td>
                                            @elseif($ac->id == 4)
                                                <td>{{$cadena = str_replace(' ', '-', $ac->name)}}</td>
                                            @elseif($ac->id == 5)
                                                <td>{{$cadena = str_replace(' ', '-', $ac->name)}}</td>
                                            @else
                                            <td>{{$cadena = str_replace(' ', '', $ac->name)}}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
</section><!--/#services-->
<section id="graficas">
    <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
            <div class="text-center col-sm-8 col-sm-offset-2">
                <h2><Strong>Gráficas </Strong></h2>
            </div>
        </div>
    </div>
    <div class="text-center our-services">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                <table class="table table-striped table-bordered table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Faca</th>
                            <th>Uba</th>
                            <th>Soa</th>
                            <th>Fusa</th>
                            <th>Gira</th>
                            <th>Choc</th>
                            <th>Zipa</th>
                            <th>Chía</th>
                            <th>Otro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Estudiantes</th>
                            <td>{{$est["Facatativá"]}}</td>
                            <td>{{$est["Ubate"]}}</td>
                            <td>{{$est["Soacha"]}}</td>
                            <td>{{$est["Fusagasugá"]}}</td>
                            <td>{{$est["Girardot"]}}</td>
                            <td>{{$est["Chocontá"]}}</td>
                            <td>{{$est["Zipaquirá"]}}</td>
                            <td>{{$est["Chia"]}}</td>
                            <td>{{$est["Otro"]}}</td>
                        </tr>
                        <tr>
                            <th>Profesores</th>
                            <td>{{$pro["Facatativá"]}}</td>
                            <td>{{$pro["Ubate"]}}</td>
                            <td>{{$pro["Soacha"]}}</td>
                            <td>{{$pro["Fusagasugá"]}}</td>
                            <td>{{$pro["Girardot"]}}</td>
                            <td>{{$pro["Chocontá"]}}</td>
                            <td>{{$pro["Zipaquirá"]}}</td>
                            <td>{{$pro["Chia"]}}</td>
                            <td>{{$pro["Otro"]}}</td>
                        </tr>
                        <tr>
                            <th>Otro</th>
                            <td>{{$otro["Facatativá"]}}</td>
                            <td>{{$otro["Ubate"]}}</td>
                            <td>{{$otro["Soacha"]}}</td>
                            <td>{{$otro["Fusagasugá"]}}</td>
                            <td>{{$otro["Girardot"]}}</td>
                            <td>{{$otro["Chocontá"]}}</td>
                            <td>{{$otro["Zipaquirá"]}}</td>
                            <td>{{$otro["Chia"]}}</td>
                            <td>{{$otro["Otro"]}}</td>
                        </tr>                      
                    </tbody>
                </table>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="text-center our-services">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    <table class="table table-striped table-bordered table-hover" id="datatable2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Faca</th>
                                <th>Uba</th>
                                <th>Soa</th>
                                <th>Fusa</th>
                                <th>Gira</th>
                                <th>Choc</th>
                                <th>Zipa</th>
                                <th>Chía</th>
                                <th>Otro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Conferencia uno</th>
                                <td>{{$cf1["Facatativá"]}}</td>
                                <td>{{$cf1["Ubate"]}}</td>
                                <td>{{$cf1["Soacha"]}}</td>
                                <td>{{$cf1["Fusagasugá"]}}</td>
                                <td>{{$cf1["Girardot"]}}</td>
                                <td>{{$cf1["Chocontá"]}}</td>
                                <td>{{$cf1["Zipaquirá"]}}</td>
                                <td>{{$cf1["Chia"]}}</td>
                                <td>{{$cf1["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>Conferencia dos</th>
                                <td>{{$cf2["Facatativá"]}}</td>
                                <td>{{$cf2["Ubate"]}}</td>
                                <td>{{$cf2["Soacha"]}}</td>
                                <td>{{$cf2["Fusagasugá"]}}</td>
                                <td>{{$cf2["Girardot"]}}</td>
                                <td>{{$cf2["Chocontá"]}}</td>
                                <td>{{$cf2["Zipaquirá"]}}</td>
                                <td>{{$cf2["Chia"]}}</td>
                                <td>{{$cf2["Otro"]}}</td>
                                
                            </tr>
                            <tr>
                                <th>Conferencia tres</th>
                                <td>{{$cf3["Facatativá"]}}</td>
                                <td>{{$cf3["Ubate"]}}</td>
                                <td>{{$cf3["Soacha"]}}</td>
                                <td>{{$cf3["Fusagasugá"]}}</td>
                                <td>{{$cf3["Girardot"]}}</td>
                                <td>{{$cf3["Chocontá"]}}</td>
                                <td>{{$cf3["Zipaquirá"]}}</td>
                                <td>{{$cf3["Chia"]}}</td>
                                <td>{{$cf3["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>Taller uno</th>
                                <td>{{$ac1["Facatativá"]}}</td>
                                <td>{{$ac1["Ubate"]}}</td>
                                <td>{{$ac1["Soacha"]}}</td>
                                <td>{{$ac1["Fusagasugá"]}}</td>
                                <td>{{$ac1["Girardot"]}}</td>
                                <td>{{$ac1["Chocontá"]}}</td>
                                <td>{{$ac1["Zipaquirá"]}}</td>
                                <td>{{$ac1["Chia"]}}</td>
                                <td>{{$ac1["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>taller dos</th>
                                <td>{{$ac2["Facatativá"]}}</td>
                                <td>{{$ac2["Ubate"]}}</td>
                                <td>{{$ac2["Soacha"]}}</td>
                                <td>{{$ac2["Fusagasugá"]}}</td>
                                <td>{{$ac2["Girardot"]}}</td>
                                <td>{{$ac2["Chocontá"]}}</td>
                                <td>{{$ac2["Zipaquirá"]}}</td>
                                <td>{{$ac2["Chia"]}}</td>
                                <td>{{$ac2["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>Taller tres</th>
                                <td>{{$ac3["Facatativá"]}}</td>
                                <td>{{$ac3["Ubate"]}}</td>
                                <td>{{$ac3["Soacha"]}}</td>
                                <td>{{$ac3["Fusagasugá"]}}</td>
                                <td>{{$ac3["Girardot"]}}</td>
                                <td>{{$ac3["Chocontá"]}}</td>
                                <td>{{$ac3["Zipaquirá"]}}</td>
                                <td>{{$ac3["Chia"]}}</td>
                                <td>{{$ac3["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>Taller uno (R)</th>
                                <td>{{$ac1r["Facatativá"]}}</td>
                                <td>{{$ac1r["Ubate"]}}</td>
                                <td>{{$ac1r["Soacha"]}}</td>
                                <td>{{$ac1r["Fusagasugá"]}}</td>
                                <td>{{$ac1r["Girardot"]}}</td>
                                <td>{{$ac1r["Chocontá"]}}</td>
                                <td>{{$ac1r["Zipaquirá"]}}</td>
                                <td>{{$ac1r["Chia"]}}</td>
                                <td>{{$ac1r["Otro"]}}</td>
                            </tr> 
                            <tr>
                                <th>Taller dos (R)</th>
                                <td>{{$ac2r["Facatativá"]}}</td>
                                <td>{{$ac2r["Ubate"]}}</td>
                                <td>{{$ac2r["Soacha"]}}</td>
                                <td>{{$ac2r["Fusagasugá"]}}</td>
                                <td>{{$ac2r["Girardot"]}}</td>
                                <td>{{$ac2r["Chocontá"]}}</td>
                                <td>{{$ac2r["Zipaquirá"]}}</td>
                                <td>{{$ac2r["Chia"]}}</td>
                                <td>{{$ac2r["Otro"]}}</td>
                            </tr>
                            <tr>
                                <th>Ponencias</th>
                                <td>{{$po["Facatativá"]}}</td>
                                <td>{{$po["Ubate"]}}</td>
                                <td>{{$po["Soacha"]}}</td>
                                <td>{{$po["Fusagasugá"]}}</td>
                                <td>{{$po["Girardot"]}}</td>
                                <td>{{$po["Chocontá"]}}</td>
                                <td>{{$po["Zipaquirá"]}}</td>
                                <td>{{$po["Chia"]}}</td>
                                <td>{{$po["Otro"]}}</td>
                            </tr>                     
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1">
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
</section><!--/#about-us-->

<div hidden id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>

<section id="contact">

    <div id="contact-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                     data-wow-delay="300ms">
                    <h2><Strong>Organizadores</Strong></h2>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms"
                             style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">

                            <div class="member-image">
                                <img class="img-responsive" src="{{asset('asset/images/ing.png')}}" alt="">

                            <div class="member-info ">
                                <h3>Facultad de Ingeniería</h3>
                                <h4>Universidad de Cundinamarca</h4>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms"
                             style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">
                            <div class="member-image">
                                <img class="img-responsive"  src="{{asset('asset/images/gis.png')}}" alt="">
                            </div>
                            <div class="member-info">
                                <h3>GISTFA</h3>
                                <h4>(Grupo de Insvestigación de Sistemas y Tecnologías de Facatativá)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms"
                             style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">
                            <div class="member-image">
                                <img class="img-responsive" src="{{asset('asset/images/cit.png')}}" alt="">
                            </div>
                            <div class="member-info">
                                <h3>CIT</h3>
                                <h4>(Centro de Innovación y Tecnología)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#contact-->
    
<!--#footer-->
    @include('partials.footer')
<!--/#footer-->

<!--#scripts-->
    @include('partials.scripts-graficas')
<!--/#scripts-->         

</body>
</html>