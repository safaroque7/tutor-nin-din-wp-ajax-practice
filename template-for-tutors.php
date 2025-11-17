<?php
/*
Template Name: Simple Tutors (2 Filters)
*/
get_header();
?>

<style>
    .tutor-card {
        padding: 12px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 6px;
    }
</style>

<div class="container my-4">
    <div class="row">
        <div class="col-md-4">
            <div class="bg-white p-md-3 p-1">
                <h3>Find Tutors</h3>
                <!-- Filters -->
                <h6>Subject</h6>
                <label><input type="checkbox" class="filter" data-filter="subject" value="English"> English</label><br>
                <label><input type="checkbox" class="filter" data-filter="subject" value="Math"> Math</label><br>
                <label><input type="checkbox" class="filter" data-filter="subject" value="Physics"> Physics</label><br>

                <h6>Location</h6>
                <label><input type="checkbox" class="filter" data-filter="location" value="Dhaka"> Dhaka</label><br>
                <label><input type="checkbox" class="filter" data-filter="location" value="Chattogram">
                    Chattogram</label><br>
                <label><input type="checkbox" class="filter" data-filter="location" value="Sylhet"> Sylhet</label><br>
            </div>
        </div>

        <div class="col-md-8">
            <div class="bg-white p-md-3 p-1">
                <h5>Results:</h5>
                <div id="results">Loading...</div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    // ========== for single selected value
    // $(document).on('change', '.filter', function () {
    //     let selected_value = $(this).val();
    //     $('#results').html(selected_value);
    // });



    // ========== for more selected value
    // $(document).on('change', '.filter', function () {

    // // Collect all selected values
    // let selectedValues = $('.filter:checked').map(function() {
    //     return $(this).val();
    // }).get(); // get() → array

    // // Join array to string for display
    // $('#results').html('Selected: ' + selectedValues.join(', '));

    // 🔹 ব্যাখ্যা
    // $('.filter:checked') → সব selected checkboxes
    // .map(function(){ return $(this).val(); }) → প্রতিটির মান বের করা
    // .get() → jQuery object কে সাধারণ array-তে রূপান্তর
    // selectedValues.join(', ') → array কে string হিসেবে দেখানো


    //for more value collected
    //********************* 1 */
    $(document).on('change', '.filter', function () {
        let selectedValues =    $('.filter:checked').map(function () {
                                    return $(this).val();
                                }).get();

        //joing array to string for display
        $('#results').html('Selected: ' + selectedValues.join(', '));


        //AJAX PART
        //********************* 2 */
        $.ajax({
            url: 'your-server-endpoint.php',  // server URL
            type: 'POST',
            data: {
                filters: selectedValues  // send array
            },
            success: function(response) {
                // response handle
                console.log('Server response:', response);
                $('#results').append('<br>Server says: ' + response);
            },
            error: function(err) {
                console.error('AJAX error:', err);
            }
        });

    });

    // });
</script>



<?php get_footer(); ?>