import './bootstrap';
import 'laravel-datatables-vite';
import 'mark.js';
import 'datatables.mark.js';

$(document).ready(function () {
    var oTable = $('#table-translations').DataTable({
        mark: true,
        lengthChange: false
    });    
    $('#datatable-search-input').keyup(function(){
        oTable.search( $(this).val() ).draw();
    })
});

