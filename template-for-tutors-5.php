<?php
/*
Template Name: Tutor 5
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

<div class="container-fluid my-4">
    <div class="row">
        <div class="col-12">
            <h2> <?php the_title();?> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

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

            <!-- == Find Age Group == -->
            <div class="bg-white mb-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Find Age Group</h5>
                    </div>
                    <div class="card-body">
                        <label> <input type="checkbox" class="filterForAgeGroup" value="18-25"> 18-25 </label> <br>
                        <label> <input type="checkbox" class="filterForAgeGroup" value="26-35"> 26-35 </label> <br>
                        <label> <input type="checkbox" class="filterForAgeGroup" value="36-45"> 36-45 </label> <br>
                        <label> <input type="checkbox" class="filterForAgeGroup" value="46+"> 46+ </label>
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
            <div class="bg-white mb-md-4 mb-2">
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

            <!-- == Find Time == -->
            <div class="bg-white">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Find Time</h5>
                    </div>
                    <div class="card-body">
                        <label> <input type="checkbox" class="filterForTime" value="Morning"> Morning </label> <br>
                        <label> <input type="checkbox" class="filterForTime" value="Evening"> Evening </label> <br>
                        <label> <input type="checkbox" class="filterForTime" value="Morning & Evening"> Morning &
                            Evening </label> <br>
                    </div>
                </div>
            </div>

        </div>

        <!-- == Start Table == -->
        <div class="col-md-10">
            <div class="bg-white p-md-3 p-1">
                <h5> Results: </h5>

                <table class="table table-striped" id="tableData">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Age Range</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Time</th>
                            <th scope="col">University</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Roman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Kabiran</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Humayra</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Shihab Uddin</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Nusrat Jahan</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Hasan Mahmud</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Tahmina Islam</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>Raihan Ahmed</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>Sharmin Akter</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>Nahid Hasan</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>11</th>
                            <td>Jannatul Ferdous</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>12</th>
                            <td>Imran Hossain</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>13</th>
                            <td>Meherun Nesa</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>14</th>
                            <td>Sohel Rana</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>15</th>
                            <td>Mousumi Akter</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>16</th>
                            <td>Kamal Uddin</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>17</th>
                            <td>Fatema Khatun</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>18</th>
                            <td>Munna Sarkar</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>19</th>
                            <td>Roksana Begum</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>20</th>
                            <td>Anisur Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>21</th>
                            <td>Sumaiya Rahman</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>22</th>
                            <td>Saiful Islam</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">41-45</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>23</th>
                            <td>Nasrin Sultana</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>24</th>
                            <td>Al Amin</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>25</th>
                            <td>Tasnim Ara</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>26</th>
                            <td>Mahbub Hossain</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">41-45</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>27</th>
                            <td>Shamima Akter</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>28</th>
                            <td>Fahim Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>29</th>
                            <td>Jubair Hasan</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>30</th>
                            <td>Mariyam Khatun</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>

                        <tr>
                            <th>31</th>
                            <td>Abdul Karim</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>32</th>
                            <td>Shirin Akter</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>33</th>
                            <td>Rashed Mahmud</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>34</th>
                            <td>Hannan Khan</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>35</th>
                            <td>Shamim Chowdhury</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>36</th>
                            <td>Asma Sultana</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>37</th>
                            <td>Ashraf Uddin</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">41-45</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>38</th>
                            <td>Rina Saha</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>39</th>
                            <td>Ariful Islam</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>40</th>
                            <td>Rashida Begum</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>

                        <tr>
                            <th>41</th>
                            <td>Mustafizur Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>42</th>
                            <td>Fatema Jahan</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Jogonnath University</td>
                        </tr>
                        <tr>
                            <th>43</th>
                            <td>Shamim Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>44</th>
                            <td>Rina Khatoon</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>45</th>
                            <td>Habibur Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>

                        <tr>
                            <th>46</th>
                            <td>Rahela Sultana</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">18-25</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>47</th>
                            <td>Fahima Binte</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>48</th>
                            <td>Shahidul Islam</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">36-40</td>
                            <td class="subjectName">Bangla</td>
                            <td class="timeName">Morning</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                        <tr>
                            <th>49</th>
                            <td>Rasel Rahman</td>
                            <td class="genderName">Male</td>
                            <td class="ageGroup">31-35</td>
                            <td class="subjectName">English</td>
                            <td class="timeName">Evening</td>
                            <td class="universityName">Rajshahi University</td>
                        </tr>
                        <tr>
                            <th>50</th>
                            <td>Shilpi Saha</td>
                            <td class="genderName">Female</td>
                            <td class="ageGroup">26-30</td>
                            <td class="subjectName">Arabic</td>
                            <td class="timeName">Morning & Evening</td>
                            <td class="universityName">Dhaka University</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>



<!-- <script>
    $(document).on('change', '.filterForGender, .filterForUniversity, .filterForSubject, .filterForTime', function () {

        // == Selected Gender ==
        let selectedGender = $('.filterForGender:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // == Selected University == 
        let selectedUniversities = $('.filterForUniversity:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // == Selected Subject == 
        let selectedSubjects = $('.filterForSubject:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // == Selected Time == 
        let selectedTimes = $('.filterForTime:checked').map(function () {
            return $(this).val().trim();
        }).get();

        // Loop through table roews == 
        $('#tableData tr').each(function () {

            let gender = $(this).find('.genderName').text().trim();
            let university = $(this).find('.universityName').text().trim();
            let subject = $(this).find('.subjectName').text().trim();
            let time = $(this).find('.timeName').text().trim();

            //Check Condition
            let matchGender = selectedGender.length === 0 || selectedGender.includes(gender);
            let matchUniversity = selectedUniversities.length === 0 || selectedUniversities.includes(
                university);
            let matchSubject = selectedSubjects.length === 0 || selectedSubjects.includes(subject);
            let matchTimes = selectedTimes.length === 0 || selectedTimes.includes(time);

            // Show only when both match
            if (matchGender && matchUniversity && matchSubject && matchTimes) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

    });
</script> -->


<script>
    $(document).on('change',
        '.filterForGender, .filterForAgeGroup, .filterForUniversity, .filterForSubject, .filterForTime',
        function () {

            // == Selected Genders ==
            let selectedGender = $('.filterForGender:checked').map(function(){
                return $(this).val().trim();
            }).get();

            // == Selected Age Groups ==
            let selectedAgeGroups = $('.filterForAgeGroup:checked').map(function () {
                return $(this).val().trim();
            }).get();

            // == Selected Universities == 
            let selectedUniversities = $('.filterForUniversity:checked').map(function () {
                return $(this).val().trim();
            }).get();

            // == Selected Subjects ==
            let selectedSubjects = $('.filterForSubject:checked').map(function () {
                return $(this).val().trim();
            }).get();

            // == Selected Times ==
            let selectedTimes = $('.filterForTime:checked').map(function () {
                return $(this).val().trim();
            }).get();

            // loop throug table rows
            $('#tableData tr').each(function () {

                // === Get gender name ===
                let gender = $(this).find('.genderName').text().trim();

                // === Get age group Value ===
                let age = $(this).find('.ageGroup').text().trim();

                // === Get subject's name ===
                let subject = $(this).find('.subjectName').text().trim();

                // === Get time ===
                let time = $(this).find('.timeName').text().trim();

                // === Get University's name ===
                let university = $(this).find('.universityName').text().trim();

                //condition
                let genderMatch = selectedGender.length === 0 || selectedGender.includes(gender);
                let ageMatch = selectedAgeGroups.length === 0 || selectedAgeGroups.includes(age);
                let universityMatch = selectedUniversities.length === 0 || selectedUniversities.includes(university);
                let subjectMatch = selectedSubjects.length === 0 || selectedSubjects.includes(subject);
                let timeMatch = selectedTimes.length === 0 || selectedTimes.includes(time);

                //Show only when both match
                if( genderMatch && ageMatch && universityMatch && subjectMatch && timeMatch ){
                    $(this).show();
                } else {
                    $(this).hide();
                }

            });

        });
</script>



<?php get_footer(); ?>