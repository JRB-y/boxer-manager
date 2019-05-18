require('./bootstrap');

// init datatable
let tableSelect = $('#boxers-index').dataTable();

// datepicker
let datepickerSelect = $('.birth_date').datepicker({
    format: 'dd/mm/yyyy',
    language: 'fr'
});