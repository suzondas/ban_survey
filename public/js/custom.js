$(document).ready(function() {
    $('#example').DataTable();
    $('#deoTable').DataTable();

    /*Dont change following codes with out understanding*/

    //Declaring AdminPane./USEO Datatable
    var USEOTable = $('#USEOTable').DataTable({
        language: {
            searchPlaceholder: "Type EIIN or Institute Name"
        },
        columnDefs: [
            {
                "targets": [ 7 ],
                "visible": false
            }
        ]
    });

    //Filtering by filterByInstType
    $('#filterByInstType').on( 'change', function () {
        // var regex = '/^'+this.value+'$/';
        USEOTable.column(7).search( this.value).draw();
    } );

    //Filtering by Submission
    $('#filterBySubmission').on( 'change', function () {
        let regex = '^'+this.value;
        USEOTable.column(5).search(regex, true, false).draw();
    } );

    //Filtering by Verification
    $('#filterByVerification').on( 'change', function () {
        let regex = '^'+this.value;
        USEOTable.column(6).search(regex, true, false).draw();
    } );

} );
