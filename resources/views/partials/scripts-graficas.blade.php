
<script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('asset/js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>





<script>

$(document).ready(function() {

    var t = $('#sampleu').DataTable( {
        
        "language": {
            "lengthMenu": "Muestra _MENU_ Campos por página",
            "zeroRecords": "No se encontró nada - Lo siento",
            "info": "Página _PAGE_ de _PAGES_",
            "search": "Buscar",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        },

        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],


        dom: 'lBfrtips',
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    var t = $('#sample').DataTable( {
        
        "language": {
            "lengthMenu": "Muestra _MENU_ Campos por página",
            "zeroRecords": "No se encontró nada - Lo siento",
            "info": "Página _PAGE_ de _PAGES_",
            "search": "Buscar",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        },

        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],


        dom: 'lBfrtips',
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


    $('#datatable').DataTable( {
        "language": {
            "lengthMenu": "Muestra _MENU_ Campos por página",
            "zeroRecords": "No se encontró nada - Lo siento",
            "info": "Página _PAGE_ de _PAGES_",
            "search": "Buscar",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        },
        dom: 'lBfrtip',
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );


    $('#datatable2').DataTable( {
        "language": {
            "lengthMenu": "Muestra _MENU_ Campos por página",
            "zeroRecords": "No se encontró nada - Lo siento",
            "info": "Página _PAGE_ de _PAGES_",
            "search": "Buscar",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        },
        dom: 'lBfrtip',
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );


} );
</script>



<script>

Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Participación'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Cantidad de participantes'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container2', {
    data: {
        table: 'datatable2'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Actividades'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Cantidad de participantes'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});


Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Diagrama de torta - Participación en actividades'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Participación',
        colorByPoint: true,
        data: [{
            name: 'Facatativá',
            y: {{$porc[0]}},
            sliced: true,
            selected: true
        }, {
            name: 'Ubate',
            y: {{$porc[1]}},
        },{
            name: 'Soacha',
            y: {{$porc[2]}},
        },{
            name: 'Fusagasugá',
            y: {{$porc[3]}},
        },{
            name: 'Girardot',
            y: {{$porc[4]}},
        },{
            name: 'Chocontá',
            y: {{$porc[5]}},
        }, {
            name: 'Zipaquirá',
            y: {{$porc[6]}},
        }, {
            name: 'Chia',
            y: {{$porc[7]}},
        }, {
            name: 'otro',
            y: {{$porc[8]}},
        }]
    }]
});

</script>