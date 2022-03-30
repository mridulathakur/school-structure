<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<?php
    $arrays = array(

        "School" => array(
            "Classes" => array(
                "12th" => array(
                    "Rooms" => array(
                        array(
                            "RoomNo." => "5",  "Title" => "Theory Classes", "Students" => "50", "Table" => "30",
                            "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "10", "Title" => "Computer-Science Lab.", "Students" => "50",
                            "Table" => "5", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "3", "Title" => "Physics Lab.", "Students" => "50",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "4", "Title" => "Chemistry Lab.", "Students" => "50",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                    ),
                    "Subjects" => array(
                        array(
                            "Name" => "English",
                            "Teacher" => "Pinkee Sharma",
                            "Time" => "9am-10pm"
                        ),
                        array(
                            "Name" => "Physics",
                            "Teacher" => "Jagdish Thakur",
                            "Time" => "10am-11am"
                        ),
                        array(
                            "Name" => "Mathematics",
                            "Teacher" => "Hemant Thakur",
                            "Time" => "11am-12pm"
                        ),
                        array(
                            "Name" => "Chemistry",
                            "Teacher" => "Nirmla Thakur",
                            "Time" => "12pm-1pm",
                        ),

                        array(
                            "Name" => "Computer Science",
                            "Teacher" => "Maloo Sharma",
                            "Time" => "2pm-3pm"
                        ),
                    ),
                    "Students" => array(

                        array(
                            "Name" => "Aadi Thakur",
                            "Age" => "16",
                            "Roll No." => "1",
                            "E-mail" => "aadithakur@gmail.com",
                            "Date Of Birth" => "12-4-2000",
                            "Marks" => array(
                                "Physics" => "75",
                                "Chemistry" => "80",
                                "English" => "90",
                                "Mathematics" => "95",
                                "Computer Science" => "95"
                            ),
                            "Marks-Obtained" => "435",
                            "Total-Marks" => "500",
                            "Percentage" => "87%",
                            "Remarks" => "Pass",
                            "Division" => "First"

                        ),
                        array(
                            "Name" => "Robin Thakur",
                            "Age" => "16",
                            "Roll No." => "2",
                            "E-mail" => "Robinthakur@gmail.com",
                            "Date Of Birth" => "10-1-2000",
                            "Marks" => array(
                                "Physics" => "80",
                                "Chemistry" => "75",
                                "English" => "84",
                                "Mathematics" => "95",
                                "Computer Science" => "95"
                            ),
                            "Marks-Obtained" => "429",
                            "Total-Marks" => "500",
                            "Percentage" => "86%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rahul Thakur",
                            "Age" => "15",
                            "Roll No." => "3",
                            "E-mail" => "Rahulthakur@gmail.com",
                            "Date Of Birth" => "9-7-2000",
                            "Marks" => array(
                                "Physics" => "60",
                                "Chemistry" => "65",
                                "English" => "70",
                                "Mathematics" => "65",
                                "Computer Science" => "75"
                            ),
                            "Marks-Obtained" => "335",
                            "Total-Marks" => "500",
                            "Percentage" => "67%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Nisha Thakur",
                            "Age" => "15",
                            "Roll No." => "4",
                            "E-mail" => "nishathakur@gmail.com",
                            "Date Of Birth" => "3-3-2001",
                            "Marks" => array(
                                "Physics" => "55",
                                "Chemistry" => "58",
                                "English" => "60",
                                "Mathematics" => "65",
                                "Computer Science" => "75"
                            ),
                            "Marks-Obtained" => "313",
                            "Total-Marks" => "500",
                            "Percentage" => "63%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rohit Thakur",
                            "Age" => "16",
                            "Roll No." => "5",
                            "E-mail" => "rohitthakur@gmail.com",
                            "Date Of Birth" => "17-3-2001",
                            "Marks" => array(
                                "Physics" => "50",
                                "Chemistry" => "58",
                                "English" => "66",
                                "Mathematics" => "65",
                                "Computer Science" => "65"
                            ),
                            "Marks-Obtained" => "304",
                            "Total-Marks" => "500",
                            "Percentage" => "60%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rajat Thakur",
                            "Age" => "16",
                            "Roll No." => "6",
                            "E-mail" => "rajattthakur@gmail.com",
                            "Date Of Birth" => "27-3-2001",
                            "Marks" => array(
                                "Physics" => "75",
                                "Chemistry" => "80",
                                "English" => "90",
                                "Mathematics" => "95",
                                "Computer Science" => "85"
                            ),
                            "Marks-Obtained" => "425",
                            "Total-Marks" => "500",
                            "Percentage" => "85%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Ratan Thakur",
                            "Age" => "15",
                            "Roll No." => "7",
                            "E-mail" => "ratanthakur@gmail.com",
                            "Date Of Birth" => "27-3-2001",
                            "Marks" => array(
                                "Physics" => "75",
                                "Chemistry" => "80",
                                "English" => "90",
                                "Mathematics" => "95",
                                "Computer Science" => "95"
                            ),
                            "Marks-Obtained" => "435",
                            "Total-Marks" => "500",
                            "Percentage" => "87%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Isha Sharma",
                            "Age" => "17",
                            "Roll No." => "8",
                            "E-mail" => "Ishasharma@gmail.com",
                            "Date Of Birth" => "27-11-2000",
                            "Marks" => array(
                                "Physics" => "50",
                                "Chemistry" => "58",
                                "English" => "66",
                                "Mathematics" => "65",
                                "Computer Science" => "65"
                            ),
                            "Marks-Obtained" => "304",
                            "Total-Marks" => "500",
                            "Percentage" => "60%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Ritik Thakur",
                            "Age" => "16",
                            "Roll No." => "9",
                            "E-mail" => "Ritikthakur@gmail.com",
                            "Date Of Birth" => "27-12-2001",
                            "Marks" => array(
                                "Physics" => "55",
                                "Chemistry" => "58",
                                "English" => "60",
                                "Mathematics" => "65",
                                "Computer Science" => "75"
                            ),
                            "Marks-Obtained" => "313",
                            "Total-Marks" => "500",
                            "Percentage" => "63%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Sania Thakur",
                            "Age" => "15",
                            "Roll No." => "10",
                            "E-mail" => "saniathakur@gmail.com",
                            "Date Of Birth" => "4-4-2001",
                            "Marks" => array(
                                "Physics" => "50",
                                "Chemistry" => "58",
                                "English" => "66",
                                "Mathematics" => "65",
                                "Computer Science" => "65"
                            ),
                            "Marks-Obtained" => "304",
                            "Total-Marks" => "500",
                            "Percentage" => "60%",
                            "Remarks" => "Pass",
                            "Division" => "First"
                        ),

                    ),
                    "Lunch-time" => array(
                        "Time" => "1pm-2pm",
                    ),
                    "Class-incharge" => array(
                        "Name" => "Jagdish Thakur",
                    ),
                    "Teachers" => array(
                        array(
                            "Name" => "Pinkee Sharma",
                            "Subjects" => "English",
                            "Time" => "9am-10pm",
                            "Qualification" => array(
                                "Degree" => "BCA",
                                "Master's Degree" => "MCA"

                            ),
                        ),
                        array(
                            "Name" => "Jagdish Thakur",
                            "Subjects" => "Physics",
                            "Time" => "10am-11am",
                            "Qualification" => array(
                                "Degree" => "Bsc(Physics)",
                                "Master's Degree" => "Msc"
                            ),
                        ),
                        array(
                            "Name" => "Hemant Thakur",
                            "Subjects" => "Mathematics",
                            "Time" => "11am-12pm",
                            "Qualification" => array(
                                "Degree" => "Bsc(Mathematics)",
                                "Master's Degree" => "Msc(Mathematics)"
                            ),
                        ),
                        array(
                            "Name" => "Nirmla Thakur",
                            "Subjects" => "Chemistry",
                            "Time" => "12pm-1pm",
                            "Qualification" => array(
                                "Degree" => "Msc(Chemistry)",
                                "Master's Degree" => "Msc"

                            ),

                        ),

                        array(
                            "Name" => "Maloo Sharma",
                            "Subjects" => "Computer Science",
                            "Time" => "2pm-3pm",
                            "Qualification" => array(
                                "Degree" => "BCA(IT)",
                                "Master's Degree" => "MCA"
                            ),

                        ),



                    ),
                    "Laboratory" => array(
                        array(
                            "Subject" => "Physics",
                            "Day" => "Monday",
                            "Time" => "10am-11am",
                            "Teacher" => "Jagdish Thakur"

                        ),
                        array(
                            "Subject" => "Computer Science",
                            "Day" => "Friday",
                            "Time" => "2pm-3pm",
                            "Teacher" => "Maloo Sharma"

                        ),
                        array(
                            "Subject" => "Chemistry",
                            "Day" => "Wednesday",
                            "Time" => "12pm-1pm",
                            "Teacher" => "Nirmla Thakur"

                        ),

                    ),
                    "Class Moniter" => array(
                        "Name" => "Sania Thakur",
                    ),
                    "Time" => array(
                        array(
                            "Time" => "9am-10am",
                            "Subject" => "English",
                            "Teacher" => "Pinkee Sharma",

                        ),



                        array(
                            "Time" => "10am-11am",
                            "Subject" => "Physics",
                            "Teacher" => "Jagdish Thakur",

                        ),
                        array(
                            "Time" => "11am-12pm",
                            "Subject" => "Mathematics",
                            "Teacher" => "Hemant Thakur",

                        ),
                        array(
                            "Time" => "12pm-1pm",
                            "Subject" => "Chemistry",
                            "Teacher" => "Nirmla Thakur",

                        ),



                        array(
                            "Time" => "2pm-3pm",
                            "Subject" => "Computer Science",
                            "Teacher" => "Maloo Sharma",

                        ),



                    ),
                ),
            ),
        ),
    );
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Classes</th>
                <th scope="col">Rooms</th>
                <th scope="col">Subjects</th>
                <th scope="col">Students</th>
                <th scope="col">Lunch-time</th>
                <th scope="col">Class-incharge</th>
                <th scope="col">Laboratory</th>
                <th scope="col">Lab Day</th>
                <th scope="col">Lab Room No.</th>
                <th scope="col">Teachers</th>
                <th scope="col">Class Moniter</th>
                <th scope="col">Time</th>
                <th scope="col">Title</th>

            </tr>
        </thead>
        <tbody>


       <!--12th class start -->
       <tr>
                <th scope="row">12th</th>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][0]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Teachers"][0]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][0]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">12th</th>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][1]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][1]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class-incharge"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][0]["Subject"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][0]["Day"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][2]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Teachers"][1]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][1]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">12th</th>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][2]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][2]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Teachers"][2]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][2]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Title"]; ?></td>
            </tr>
            <tr>
                <th scope="row">12th</th>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][3]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][3]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class-incharge"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][2]["Subject"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][2]["Day"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][3]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Teachers"][3]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][3]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <th scope="row">12th</th>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["RoomNo."]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][4]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Students"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Lunch-time"]["Time"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Class-incharge"]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][1]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Laboratory"][1]["Day"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][1]["RoomNo."]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Teachers"][4]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Class Moniter"]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Subjects"][4]["Time"]; ?></td>
            <td><?php echo $arrays["School"]["Classes"]["12th"]["Rooms"][0]["Title"]; ?></td>
            </tr>



            <!--12th class end -->

        </tbody>





    </table>