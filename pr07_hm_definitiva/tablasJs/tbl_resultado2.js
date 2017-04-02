$('#curs').change(function() {

    var etapa = $('#etapa').val();
    var curs = $('#curs').val();
    var cicle = $('#cicle').val();
    if(cicle!=null){etapa=cicle} 
    $('#tbl_resultado2').bootstrapTable('refresh', {
                    url: 'result_select.proc.php?max=2&etapa='+etapa+'&curs='+curs
    }); 
})

            $('#tbl_resultado2').bootstrapTable({
                        method: 'get',
                        url: '',
                        cache: false,
                        striped: true,
                        pagination: false,
                        search: true,
                        showColumns: true,
                        showRefresh: true,
                        showToggle: true,
                        minimumCountColumns: 4,
                        height: 300,
                        clickToSelect: false,
                        onLoadSuccess: function (data) {
                            if(data!=''){
                                $('#h2').html("Resultados fecha: "+data[0]["fecha"]);
                            }
                            
                        },
                        columns: [{
                            field: 'nombre',
                            title: 'ALUMNO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'total',
                            title: 'TOTAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'fisico',
                            title: 'FISICO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'verbal',
                            title: 'VERBAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'social',
                            title: 'SOCIAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });
