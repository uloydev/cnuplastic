var placeholder = "Select a State";

$(".select2").select2({
    placeholder: placeholder,
});

// DataTable initialisation
$('.table').DataTable({
    "dom": '<"dt-buttons"Bf><"clear">lirtp',
    "paging": true,
    "autoWidth": true,
    "buttons": [
        'excelHtml5',
        'print'
    ]
});
