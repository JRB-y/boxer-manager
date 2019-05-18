var selectType = require('../init-multiple-select');
var select = selectType.select;

$('#boxer_id').css('display', 'none');

$('#boxers-index').on('click', '.open-boxer-details', function(){
    // get elements
    boxer_id = $(this).attr('id');
    modal = $('#boxer-details');
    title = $('.modal-title');

    // get the boxer
    axios.get('boxers/' + boxer_id).then(function (response) {
        $('#boxer_id').css('display', 'block');
        populateModal(response.data);
        modal.modal('show');
    })

    // populate the modal with the data from the API
    function populateModal(response){
        let year;
        let month;
        let day;
        let types = [];

        title.text(response.nom + ' ' + response.prenom)
        $('#nom').val(response.nom);
        $('#prenom').val(response.prenom);
        // $('#prenom').val(response.types);
        // Convert to d/M/Y format
        
        arrayDate = response.birth_date.split('-');

        year = arrayDate[0];
        month = arrayDate[1];
        day = arrayDate[2].substring(0, 2);

        $('#birth_date').datepicker('setDate', day + '/' + month + '/' + year);
        // $('#birth_date').val();
        
        response.types.forEach(type => {
            // $(".types option[value='" + type.id + "']").prop("selected", true)
            types.push(type.id);
        });

        // $('.types').multipleSelect('')
        // console.log(types);

        // var select = $('.types').multipleSelect();
        select.multipleSelect('setSelects', types);



        // $('.types').multipleSelect('setSelects', types);
        
        $('#weight').val(response.weight);
        $('#adress').val(response.adress);
        $('#phone').val(response.phone);
        $('#boxer_id').val(response.id)
        $('#parent_name').val(response.parent_name);
        $('#parent_phone').val(response.parent_phone);
    }
})
