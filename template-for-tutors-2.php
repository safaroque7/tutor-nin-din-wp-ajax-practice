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
            <h2> Tutor 2 </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!-- == Find University == -->
            <div class="bg-white mb-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Find University</h5>
                    </div>
                    <div class="card-body">
                        <label> <input type="checkbox" class="filterForUniversity" value="Dhaka University"> Dhaka
                            University
                        </label> <br>
                        <label> <input type="checkbox" class="filterForUniversity" value="Jogonnath University">
                            Jogonnath
                            University </label> <br>
                        <label> <input type="checkbox" class="filterForUniversity" value="Rajshahi University"> Rajshahi
                            University </label>
                    </div>
                </div>
            </div>

            <!-- == Find Subject == -->
            <div class="bg-white">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Find Subject</h5>
                    </div>
                    <div class="card-body">
                        <label> <input type="checkbox" class="filterForSubject" value="Bangla"> Bangla </label> <br>
                        <label> <input type="checkbox" class="filterForSubject" value="English"> English </label> <br>
                        <label> <input type="checkbox" class="filterForSubject" value="Arabic"> Arabic </label> <br>
                    </div>
                </div>
            </div>

        </div>

        <!-- == Start Table == -->
        <div class="col-md-8">

            <div class="bg-white p-md-3 p-1">
                <h5> Results: </h5>

                <table class="table table-striped" id="tableData">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Subject</th>
                            <th scope="col">University</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td class="subjectName"> English  </td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Sylhet University</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


<!-- <script>

    // == For University == 
    $(document).on('change', '.filterForUniversity', function () {

        let selectedValuesOfUniversity = $('.filterForUniversity:checked').map(function () {
            return $(this).val();
        }).get();

        // == Table Row Filter ==
        $('#tableData tr').each(function () {

            let rowData = $(this).find('.universityName').text().trim();

            if (selectedValuesOfUniversity.length === 0) {
                $(this).show();
            } else if (selectedValuesOfUniversity.includes(rowData)) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });
    });

    // == For Subject ==
    $(document).on('change', '.filterForSubject', function(){

        let selectedValueofSubjects = $('.filterForSubject:checked').map(function(){
            return $(this).val();
        }).get();

        // == Table Row Filter ==
        $('#tableData tr').each(function(){

            let rowData = $(this).find('.subjectName').text().trim();

            if( selectedValueofSubjects.length === 0 ){
                $(this).show();
            } else if ( selectedValueofSubjects.includes(rowData) ){
                $(this).show();
            } else {
                $(this).hide();
            }

        });
    });
</script> -->


<!-- <script>
$(document).on('change', '.filterForUniversity, .filterForSubject', function () {

    // == Selected Universities ==
    let selectedUniversities = $('.filterForUniversity:checked').map(function () {
        return $(this).val().trim();
    }).get();

    // == Selected Subjects ==
    let selectedSubjects = $('.filterForSubject:checked').map(function () {
        return $(this).val().trim();
    }).get();

    // == Loop through table rows ==
    $('#tableData tr').each(function () {

        let university = $(this).find('.universityName').text().trim();
        let subject = $(this).find('.subjectName').text().trim();

        // Check conditions
        let universityMatch = selectedUniversities.length === 0 || selectedUniversities.includes(university);
        let subjectMatch = selectedSubjects.length === 0 || selectedSubjects.includes(subject);

        // Show only when both matched
        if (universityMatch && subjectMatch) {
            $(this).show();
        } else {
            $(this).hide();
        }

    });
});
</script> -->

<script>
    $(document).on('change', '.filterForUniversity, .filterForSubject', function () {

        // for selected university
        let selectedUniversities = $('.filterForUniversity:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // for selected subjects
        let selectedSubjects = $('.filterForSubject:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // == Loop through table rows ==
        $('#tableData tr').each(function () {
            let university = $(this).find('.universityName').text().trim();
            let subject = $(this).find('.subjectName').text().trim();

            // Check conditions
            let universityMatch = selectedUniversities.length === 0 || selectedUniversities.includes(university);
            let subjectMatch = selectedSubjects.length === 0 || selectedSubjects.includes(subject);

            //Show only when both matched
            if (universityMatch && subjectMatch) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });


    });
</script>


<?php get_footer(); ?>