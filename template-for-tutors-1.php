<?php
/*
Template Name: Simple Tutors 1 (2 Filters)
*/
get_header();
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


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
        <div class="col-12">
            <h2> Tutor 1 </h2>
        </div>
    </div>
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

            <br>
            <div class="bg-white p-md-3 p-1">
                <h3>Find University</h3>
                <label> <input type="checkbox" class="filterForUniversity" value="Dhaka University"> Dhaka University
                </label> <br>
                <label> <input type="checkbox" class="filterForUniversity" value="Jogonnath University"> Jogonnath
                    University </label> <br>
                <label> <input type="checkbox" class="filterForUniversity" value="Rajshahi University"> Rajshahi
                    University </label> <br>


            </div>

        </div>

        <div class="col-md-8">
            <div class="bg-white p-md-3 p-1">
                <h5>Results:</h5>
                <div id="results">Loading...</div>
            </div>

            <br>
            <div class="bg-white p-md-3 p-1">
                <h5> Results: </h5>
                <div id="resultForUniversity">
                    loading...
                </div>
            </div>

            <br>
            <div class="bg-white p-md-3 p-1">
                <h5> Results: </h5>


                <table class="table table-striped" id="tableData">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">University</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td class="universityName">Sylhet University</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>




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

        let selectedValues = $('.filter:checked').map(function () {
            return $(this).val();
        }).get();

        //joing array to string for display
        $('#results').html('Selected: ' + selectedValues.join(', '));


        //AJAX PART
        //********************* 2 */
        // $.ajax({
        //     url: 'your-server-endpoint.php', // server URL
        //     type: 'POST',
        //     data: {
        //         filters: selectedValues // send array
        //     },
        //     success: function (response) {
        //         // response handle
        //         console.log('Server response:', response);
        //         $('#results').append('<br>Server says: ' + response);
        //     },
        //     error: function (err) {
        //         console.error('AJAX error:', err);
        //     }
        // });

    });

    // });


    $(document).on('change', '.filterForUniversity', function () {

        let selectedValuesOfUniversity = $('.filterForUniversity:checked').map(function () {
            return $(this).val();
        }).get();

        // === Table Row Filter ===
        $('#tableData tr').each(function () {

            let rowValue = $(this).find('.universityName').text().trim();

            if (selectedValuesOfUniversity.length === 0) {
                $(this).show();
            } else if (selectedValuesOfUniversity.includes(rowValue)) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });

        // condition # 1 
        // if(selectedValuesOfUniversity.includes('Dhaka University')){
        //     $('#resultForUniversity').html('Selected Dhaka University');
        // }

        // condition # 2 
        // if(selectedValuesOfUniversity.length > 1 ){
        //     $('#resultForUniversity').html('You can not select more than one item');
        // }

        // $("#resultForUniversity").html(selectedValuesOfUniversity.join(', '));
    });
</script>



<!-- <script>
    $(document).ready(function () {

        // Initialize DataTable
        let table = $('#tableData').DataTable();

        $(document).on('change', '.filterForUniversity', function () {

            let selectedValues = $('.filterForUniversity:checked')
                .map(function () {
                    return $(this).val();
                }).get();

            table.rows().every(function () {
                let rowNode = this.node();
                let rowText = $(rowNode).find('.universityName').text().trim();

                if (selectedValues.length === 0 || selectedValues.includes(rowText)) {
                    $(rowNode).show(); // show this row
                } else {
                    $(rowNode).hide(); // hide this row
                }
            });

            table.draw(); // 🔥 VERY IMPORTANT
        });

    });
</script> -->



<?php get_footer(); ?>