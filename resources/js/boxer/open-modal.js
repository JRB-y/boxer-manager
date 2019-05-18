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
    function populateModal(response) {
        let year;
        let month;
        let day;
        let types = [];

        title.text(response.nom + ' ' + response.prenom)

        $('#nom').val(response.nom);
        $('#prenom').val(response.prenom);

        arrayDate = response.birth_date.split('-');
        year = arrayDate[0];
        month = arrayDate[1];
        day = arrayDate[2].substring(0, 2);
        $('#birth_date').datepicker('setDate', day + '/' + month + '/' + year);

        response.types.forEach(type => {
            types.push(type.id);
        });
        select.multipleSelect('setSelects', types);
        
        $('#weight').val(response.weight);
        $('#adress').val(response.adress);
        $('#phone').val(response.phone);
        $('#boxer_id').val(response.id)
        $('#parent_name').val(response.parent_name);
        $('#parent_phone').val(response.parent_phone);
    }
})
