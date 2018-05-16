<script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('asset/js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    //ACTIVIDADES.
    $(document).ready(function () {
        $("#conf").click(function () {
            $(".actividad").hide();
            $(".articulo").hide();
            $(".conferencia").show();
            $('html, body').animate({
                scrollTop: $("#confe").offset().top
            }, 2000);
        });
        $("#act").click(function () {
            $(".articulo").hide();
            $(".conferencia").hide();
            $(".actividad").show();
            $('html, body').animate({
                scrollTop: $("#acti").offset().top
            }, 2000);
        });
        $("#art").click(function () {
            $(".conferencia").hide();
            $(".actividad").hide();
            $(".articulo").show();
            $('html, body').animate({
                scrollTop: $("#pone").offset().top
            }, 2000);
        });
    });
    //GUARDA EN VARIABLE id_temp EL ID DE LA ACTIVIDAD SELECCIONADA EN PARTIALS.ACTIVIDADES.
    var id_temp;
    $('.btn-action').click(function (e) {
        e.preventDefault();
        id_temp = this.id;
    });
    // SI SE PULSA EL BOTÓN ENVIAR DEL MODAL DE REGISTRO, SE REALIZA LA PETICIÓN CON EL ID GUARDADO ANTERIORMENTE.
    $(document).ready(function () {
        $('.btn-sub').click(function (e) {
            e.preventDefault();
            var route = '{{ route('inscribir') }}' + '/' + id_temp;
            var type = 'POST';
            var async = async || false;
            var formData = new FormData();
            formData.append('cod_ced', $('input[name="cod_ced"]').val());
            formData.append('name', $('input:text[name="na"]').val());
            formData.append('tel', $('input[name="tel"]').val());
            formData.append('rol', $('select[name="rol"]').val());
            formData.append('email', $('input[name="em"]').val());
            formData.append('sede_ext', $('select[name="sede_ext"]').val());

            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                cache: false,
                type: type,
                contentType: false,
                data: formData,
                processData: false,
                async: async,
                beforeSend: function () {
                },
                success: function (response, xhr, request) {
                    if (request.status === 200 && xhr === 'success') {
                        switch(response.type){
                            case 'success':
                                toastr.success(response.message, '¡Bien!');
                                $('#registro_activitis')[0].reset();
                                $(".btn-cerrar").click();
                                break;
                            case 'error':
                                toastr.error(response.message,'¡Upss!');
                                break;
                        }
                    }
                },
                error: function (response, xhr, request) {
                    if (response.status === 422 && xhr === 'error') {
                        console.log(response);
                        toastr.error( 'Error en el formulario', '¡Upss!');
                        $("#prueba").text(response.responseJSON.errors.cod_ced);
                        $("#name").text(response.responseJSON.errors.name);
                        $("#tel").text(response.responseJSON.errors.tel);
                        $("#email").text(response.responseJSON.errors.email);
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#pruebas").keyup( function() { $('#prueba').text(""); });
        $("#names").keyup( function() { $('#name').text(""); });
        $("#tels").keyup( function() { $('#tel').text(""); });
        $("#emails").keyup( function() { $('#email').text(""); });
    });
</script>