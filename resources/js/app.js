import './bootstrap';
import 'laravel-datatables-vite';
import 'mark.js';
import 'datatables.mark.js';

window.$ = $;

$(document).ready(function () {
    var oTable = $('#table-translations').DataTable({
        mark: true,
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    });

    oTable.buttons().container().appendTo( '#buttons-container' );

    $('#datatable-search-input').on( 'keyup', function () {
        oTable.search($(this).val()).draw();
    });

    $('#select-group').on( 'change', function () {
        oTable.columns( 0 ).search(this.options[this.selectedIndex].text).draw();
        oTable.search($('#datatable-search-input').val()).draw();
    });

    $('.key-group').on( 'click', function () {
        $.ajax({
            type: 'GET',
            url: '/show/' + this.text,
            success: function (data) {
                renderModalGroup(data);
            }
        });
    });

});

function renderModalGroup(data) {
    $("#modal-group-Label").empty();
    $("#table-content-modal-group").empty();
    
    let title = data.full_key;
    let translations = data.text;
    let langs = data.langs;

    let tr = '';
    Object.entries(translations).forEach(([key, value]) => {
        tr += `<tr><td>${langs[key]}</td><td>${value}</td></tr>`;
    });

    $("#modal-group-Label").append(title);
    $("#table-content-modal-group").append('<tbody>'+tr+'</tbody>');
    var modal = new bootstrap.Modal($("#modal-group"), {});
    modal.show();
}


