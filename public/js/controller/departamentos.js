var path = $('meta[name="path_url"]').attr('content');
$(document).on('change','select[name=departamento_id]',function(event){
    let departamento_id = $(this).val();
    get_ciudades(departamento_id);
});


function get_ciudades(departamento_id){
    $.ajax({
        url:`${path}/ciudades-departamento/${departamento_id}`,
        method:'get',
        success:function(response){
            let listCiudades = '<option class="select-option" value="" disabled="" selected="">Ciudades</option>';
            $.each(response,function(el){
                listCiudades+=  `
                  <option class="select-option" value="${this.id}">${this.nombre}</option>
                `;
            });

            $('select[name=ciudad_id]').html(listCiudades);
        }
    });
}

