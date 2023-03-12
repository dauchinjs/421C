$(document).ready(function () {
    $('#add_another').click(function () {
        // iegūst rindu skaitu
        let numRows = $('table tbody tr').length;
        // ajax pieprasījums
        $.ajax({
            type: 'POST',
            url: 'addRow.php',
            data: {rowIndex: numRows},
            dataType: 'json',
            success: function (response) {
                // pievieno jaunu rindu tabulai
                $('table tbody').append(response.html);
            }
        });
    });

    $('form').submit(function (event) {
        event.preventDefault(); // neļauj pārlādēt lapu

        // ajax pieprasījums
        $.ajax({
            type: 'POST',
            url: 'submitForm.php',
            data: $('form').serialize(),
            dataType: 'html',
            success: function (response) {
                // atgriež rezultātu ajax_results_here konteinerī
                $('#ajax_results_here').html(response);
            }
        });
    });
});