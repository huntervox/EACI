    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2><Strong>REGISTRO DE ACTIVIDADES</Strong></h2>
                </div>
            </div>
        </div>
        <div class="text-center our-services">
            <div class="row">
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="service-icon">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="service-info">
                        <h3>Conferencias</h3>
                        <p>Espacio diseñado y destinado para la comunidad estudiantil: estudiantes, docentes,
                            investigadores y directivas; estas conferencias están orientadas a los temas de innovación,
                            emprendimiento, generación de proyectos y otros enfoques del área que motivan y preparan
                            hacia procesos de innovación.
                        </p>
                    </div>
                    <a id="conf" href="javascript:;" class="btn btn-lg btn-primary">Ver conferencias</a>
                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Talleres de creatividad (SCRUM, Processing y Minería de datos)</h3>
                        <p>Talleres y retos cortos, diseñados para poner en práctica las temáticas abordadas en las
                            conferencias y charlas. <Strong>A los participantes se les dará certificado
                                de asistencia.</Strong></p>
                    </div>
                    <a id="act" href="javascript:;" class="btn btn-lg btn-primary">Ver talleres</a>
                </div>
                <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                    <div class="service-icon">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="service-info">
                        <h3>Llamado de artículos y presentación del póster</h3>
                        <p>A patir del llamado de artículos se hará la presentación de ponencias y la exposición de los
                            Poster, que son productos de los proyectos de investigación, de los grupos pertenecientes
                            a la Facultad de ingeniería y sus semilleros. Los artículos y pósters generados por los
                            grupos se emplearán para la elaboración de las memorias del evento.</p>
                    </div>
                    <a id="art" href="javascript:;" class="btn btn-lg btn-primary">Ver articulos</a>
                </div>

                <!-- Variables -->
                <div> <?php $m1 = DB::table('user_actividad')->where('id_actividad', 1)->get();?> </div>
                <div> <?php $m2 = DB::table('user_actividad')->where('id_actividad', 2)->get();?> </div>
                <div> <?php $m3 = DB::table('user_actividad')->where('id_actividad', 3)->get();?> </div>
                <div> <?php $m4 = DB::table('user_actividad')->where('id_actividad', 4)->get();?> </div>
                <div> <?php $m5 = DB::table('user_actividad')->where('id_actividad', 5)->get();?> </div>
                <div> <?php $m6 = DB::table('user_actividad')->where('id_actividad', 6)->get();?> </div>
                <div> <?php $m7 = DB::table('user_actividad')->where('id_actividad', 7)->get();?> </div>
                <div> <?php $m8 = DB::table('user_actividad')->where('id_actividad', 8)->get();?> </div>
                <div> <?php $m9 = DB::table('user_actividad')->where('id_actividad', 9)->get();?> </div>
                <!-- Fin variables -->

                <!-- Inicio Conferencias de expertos -->
                <div id="confe" style="display: none;" class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms"
                     data-wow-delay="650ms">
                    <div class="service-icon">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="service-info">
                        <h3>Conferencia 1</h3>
                        <p>Día:     8 de septiembre</p>
                        <p>Hora:    9:00am - 11:00am</p>
                        <p><strong>Tema:    Imágenes Espectrales con Drones Profesionales.</strong></p>
                        <p>Ponente: Ingeniero Edgar Krejci </p>
                        <p>Cupos: {{$cupos = 80 - count($m1)}} </p>
                    </div>
                    @if (count($m1) > 79)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="1" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms"
                     data-wow-delay="750ms">
                    <div class="service-icon">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="service-info">
                        <h3>Conferencia 2</h3>
                        <p>Día:     8 de septiembre</p>
                        <p>Hora:    2:00pm - 4:00pm</p>
                        <p><strong>Tema:    Sistemas de recomendación con inteligencia artificial.</strong></p>
                        <p>Ponente: Ingeniero Alexander Espinosa </p>
                        <p>Cupos: {{$cupos = 80 - count($m2)}} </p>
                    </div>
                    @if (count($m2) > 79)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="2" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms"
                     data-wow-delay="850ms">
                    <div class="service-icon">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="service-info">
                        <h3>Conferencia 3</h3>
                        <p>Día:     9 de septiembre</p>
                        <p>Hora:    8:00am - 10:00am</p>
                        <p><strong>Tema:    Herramientas de innovación para la creación de modelos de negocios.</strong></p>
                        <p>Ponente: Ingeniero Alexander Anchicoque </p> 
                        <p>Cupos: {{$cupos = 80 - count($m3)}} </p>
                    </div>
                    @if (count($m3) > 79)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="3" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <!-- Fin Conferencias de expertos -->
                <!-- Inicio Actividades -->
                <div id="acti" style="display: none;" class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms"
                     data-wow-delay="650ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Taller 1</h3>
                        <p>Día: 8 de septiembre</p>
                        <p>Hora: 10:00am - 1:00pm</p>
                        <p><strong>Tema: SCRUM</strong></p>
                        <p>Cupos: {{$cupos = 20 - count($m4)}} </p>
                    </div>
                    @if (count($m4) > 19)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="4" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms"
                     data-wow-delay="750ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Taller 2</h3>
                        <p>Día: 8 de septiembre</p>
                        <p>Hora: 11:00pm - 2:00pm</p>
                        <p><strong>Tema: Processing</strong></p>
                        <p>Cupos: {{$cupos = 20 - count($m5)}} </p>
                    </div>
                    @if (count($m5) > 19)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="5" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms"
                     data-wow-delay="850ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Taller 3</h3>
                        <p>Día: 9 de septiembre</p>
                        <p>Hora: 8:00am - 11:00am</p>
                        <p><strong>Tema: Minería de Datos</strong></p>
                        <p>Cupos: {{$cupos = 20 - count($m6)}} </p>
                    </div>
                    @if (count($m6) > 19)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="6" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms"
                     data-wow-delay="850ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Taller 1 (Repetición)</h3>
                        <p>Día: 9 de septiembre</p>
                        <p>Hora: 10:00am - 1:00pm</p>
                        <p><strong>Tema: SCRUM</strong></p>
                        <p>Cupos: {{$cupos = 20 - count($m7)}} </p>
                    </div>
                    @if (count($m7) > 19)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="7" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>

                <div style="display: none;" class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms"
                     data-wow-delay="850ms">
                    <div class="service-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="service-info">
                        <h3>Taller 2 (Repetición)</h3>
                        <p>Día: 9 de septiembre</p>
                        <p>Hora: 9:00am - 12:00pm</p>
                        <p><strong>Tema: Processing</strong></p>
                        <p>Cupos: {{$cupos = 20 - count($m8)}} </p>
                    </div>
                    @if (count($m8) > 19)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="8" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>
                <!-- Final Actividades -->

                <!-- inicio Ponencias -->
                <div id="pone" style="display: none;" class="col-sm-4 wow fadeInDown articulo" data-wow-duration="1000ms"
                     data-wow-delay="550ms">
                    <div class="service-icon">
                        <i class="fa fa-flash"></i>
                    </div>
                    <div class="service-info">
                        <h3>Llamado de artículos y presentación del póster</h3>
                        <p><strong>Tema: Creatividad e innovación tecnológica.</strong></p>
                        <strong><hr width="50%"></strong>
                        <p><strong>DESCARGAS</strong><p>
                        <p><Strong>Plantillas guías: <a href="{{asset('asset/plantilla.ppt')}}">Póster</a> - <a href="{{asset('asset/EACI 2017 formato de articulo.doc')}}">Paper</a> </Strong></p>
                        <strong><hr width="50%"></strong>
                        <div class="row">
                            <div class="col-xs-9 col-centered  ">
                                <p align="center"><strong>Información: </strong></p>
                            </div>
                            <div class="col-xs-3 "><p align="left">
                                <a href="https://easychair.org/cfp/EACI2017" target="_blank">
                                    <span class="glyphicon glyphicon-info-sign"  style="font-size:20px;"></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-centered ">
                                <p align="center"><strong>Enviar artículos y/o póster: </strong></p>
                            </div>
                            <div class="col-xs-3 "><p align="left">
                                <a href="https://easychair.org/conferences/?conf=eaci2017" target="_blank" align="left" >
                                    <span class="glyphicon glyphicon-upload"  style="font-size:20px; text-align:left"></span>
                                </a>
                            </div>
                        </div>

                        <p><Strong>Fecha límite de envío: 4 de septiembre</Strong></p>
                        <hr width="50%">
                        <p>Horario de ponencias día 9 de septiembre:</p>
                        <P><Strong>10:00am - 01:00pm</Strong></P>
                        <p>Cupos: {{$cupos = 80 - count($m9)}} </p>
                        <br>
                    </div>
                    @if (count($m9) > 79)
                        <button type="button" class="btn btn-lg btn-primary " disabled >No hay cupos
                        </button>
                    @else
                        <button id="9" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal"
                            data-target="#myModal">Inscribir
                        </button>
                    @endif
                </div>
                <!-- FinalPonencias -->
            </div>
        </div>
    </div>