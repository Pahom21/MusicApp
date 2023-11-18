$(document).ready(function () {

    //Playlists Datatable
    $('#playlists-table').DataTable({

        "language": {
            "emptyTable": "<div class=\"alert alert-default\"><i class=\"fa fa-ban\"></i> No records!</div>", //
            "loadingRecords": "Please wait...", // default Loading...
            "zeroRecords": "No matching records found!"
        },

        "processing": true, //Feature control the processing indicator.

        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
        ],

        "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',

        "bInfo" : true,
        responsive: true,

    });

    //Tracks Datatable
    $('#tracks-table').DataTable({

        "language": {
            "emptyTable": "<div class=\"alert alert-default\"><i class=\"fa fa-ban\"></i> No records!</div>", //
            "loadingRecords": "Please wait...", // default Loading...
            "zeroRecords": "No matching records found!"
        },

        "processing": true, //Feature control the processing indicator.


        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
        ],

        "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',

        "bInfo" : true,
        responsive: true,


    });

$(document).ready(function() {
    // Assuming you have a DataTable initialized on page load
    var playlistsTable = $('#playlists-table').DataTable();

    function initializeDataTable() {
        // Destroy the existing DataTable
        if ($.fn.DataTable.isDataTable('#playlists-table')) {
            playlistsTable.destroy();
        }

        // Reinitialize DataTable
        $('#playlists-table').DataTable({
            // Your DataTable options here
        });
    }

    // Call the function to initialize DataTable
    initializeDataTable();

    // You might want to call initializeDataTable() again after dynamically loading content

    // ... Other scripts or event handlers
});
if ($.fn.DataTable.isDataTable('#playlists-table')) {
    $('#playlists-table').DataTable().destroy();
}
$('#playlists-table').DataTable({
    // Your DataTable options here
});


});