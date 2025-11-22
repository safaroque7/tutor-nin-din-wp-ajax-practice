<?php
/*
Template Name: Tutor 3
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
            <h2> Tutor 3 </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <!-- == Find Gender == -->
            <div class="bg-white mb-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Find Gender</h5>
                    </div>
                    <div class="card-body">
                        <label> <input type="checkbox" class="filterForGender" value="Male"> Male </label> <br>
                        <label> <input type="checkbox" class="filterForGender" value="Female"> Female </label> <br>
                    </div>
                </div>
            </div>

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
        <!-- == Start Table == -->
        <div class="col-md-8">
            <div class="bg-white p-md-3 p-1">
                <h5> Results: </h5>

                <table class="table table-striped" id="tableData">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Subject</th>
                            <th scope="col">University</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Roman</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Kabiran</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Humayra</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Shihab Uddin</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Nusrat Jahan</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Hasan Mahmud</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Tahmina Islam</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>Raihan Ahmed</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>Sharmin Akter</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>Nahid Hasan</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>11</th>
                            <td>Jannatul Ferdous</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>12</th>
                            <td>Imran Hossain</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>13</th>
                            <td>Meherun Nesa</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>14</th>
                            <td>Sohel Rana</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>15</th>
                            <td>Mousumi Akter</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>16</th>
                            <td>Kamal Uddin</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>17</th>
                            <td>Fatema Khatun</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>18</th>
                            <td>Munna Sarkar</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>19</th>
                            <td>Roksana Begum</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>20</th>
                            <td>Anisur Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>21</th>
                            <td>Sumaiya Rahman</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>22</th>
                            <td>Saiful Islam</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>23</th>
                            <td>Nasrin Sultana</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>24</th>
                            <td>Al Amin</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>25</th>
                            <td>Tasnim Ara</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>26</th>
                            <td>Mahbub Hossain</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>27</th>
                            <td>Shamima Akter</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>28</th>
                            <td>Fahim Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>29</th>
                            <td>Jubair Hasan</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>30</th>
                            <td>Mariyam Khatun</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>31</th>
                            <td>Abdul Karim</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Arabic</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>32</th>
                            <td>Shirin Akter</td>
                            <td class="genderName">Female</td>
                            <td class="subjectName">English</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>33</th>
                            <td>Rashed Mahmud</td>
                            <td class="genderName">Male</td>
                            <td class="subjectName">Bangla</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).on('change', '.filterForGender, .filterForUniversity, .filterForSubject', function() {

        // == Selected Gender ==
        let selectedGender = $('.filterForGender:checked').map(function() {
            return $(this).val().trim();
        }).get();

        // == Selected Universities
        let selectedUniversities = $('.filterForUniversity:checked').map(function() {
            return $(this).val().trim();
        }).get();

        //Selected Subjects
        let selectedSubjects = $('.filterForSubject:checked').map(function() {
            return $(this).val().trim();
        }).get();

        // == Loop through table rows == 
        $('#tableData tr').each(function() {

            let gender = $(this).find('.genderName').text().trim();
            let university = $(this).find('.universityName').text().trim();
            let subject = $(this).find('.subjectName').text().trim();

            // Check condition
            let genderMatch = selectedGender.length === 0 || selectedGender.includes(gender);
            let universityMatch = selectedUniversities.length === 0 || selectedUniversities.includes(university);
            let subjectMatch = selectedSubjects.length === 0 || selectedSubjects.includes(subject);

            // Show only when both matched
            if (genderMatch && universityMatch && subjectMatch) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });
    });
</script>



<?php get_footer(); ?>