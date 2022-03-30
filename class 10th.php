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
    <?php
      $arrays = array(
        "School" => array(
            "Classes" => array(
"10th" => array(
                    "Rooms" => array(
                        array(
                            "RoomNo." => "9",  "Title" => "Theory Classes", "Students" => "39", "Table" => "30",
                            "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "10", "Title" => "Computer-Science Lab.", "Students" => "39",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "11", "Title" => "Science Lab.", "Students" => "39",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                    ),
                    "Subjects" => array(

                        array(
                            "Name" => "Science",
                            "Teacher" => "Anshika Thakur",
                            "Time" => "9am-9.45am"
                        ),
                        array(
                            "Name" => "History",
                            "Teacher" => "Ritika Sharma",
                            "Time" => "9.45am-10.30am"
                        ),
                        array(
                            "Name" => "Hindi",
                            "Teacher" => "Reena Sharma",
                            "Time" => "10.30am-11.15am"
                        ),
                        array(
                            "Name" => "Mathematics",
                            "Teacher" => "Hemant Thakur",
                            "Time" => "11.15am-12pm"
                        ),
                        array(
                            "Name" => "Computer Science",
                            "Teacher" => "Maloo Sharma",
                            "Time" => "12pm-12.45pm"
                        ),

                        array(
                            "Name" => "English",
                            "Teacher"=> "Divya Sharma",
                            "Time" => "12.45pm-1.30pm"
                        ),
                        array(
                            "Name" => "Mechanics",
                            "Teacher" => "Rajat Sen",
                            "Time" => "2.15pm-3pm"
                        ),


                    ),
                    "Students" => array(

                        array(
                            "Name" => "Aadi Thakur",
                            "Age" => "14",
                            "Roll No." => "1",
                            "E-mail" => "aadithakur@gmail.com",
                            "Date Of Birth" => "12-4-2000",
                            "Marks" => array(
                                "hindi" => "85",
                                "English" => "82",
                                "Science" => "80",
                                "History" => "91",
                                "Computer Science" => "93",
                                "Mathematics" => "79",
                                "Mechanics" => "81"
                            ),
                            "Marks-Obtained" => "591",
                            "Total-Marks" => "700",
                            "Percentage" => "84%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Robin Thakur",
                            "Age" => "14",
                            "Roll No." => "2",
                            "E-mail" => "Robinthakur@gmail.com",
                            "Date Of Birth" => "10-1-2000",
                            "Marks" => array(
                                "hindi" => "80",
                                "English" => "75",
                                "Science" => "77",
                                "History" => "72",
                                "Computer Science" => "95",
                                "Mathematics" => "75",
                                "Mechanics" => "77"
                            ),
                            "Marks-Obtained" => "551",
                            "Total-Marks" => "700",
                            "Percentage" => "79%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rahul Thakur",
                            "Age" => "13",
                            "Roll No." => "3",
                            "E-mail" => "Rahulthakur@gmail.com",
                            "Date Of Birth" => "9-7-2000",
                            "Marks" => array(
                                "hindi" => "88",
                                "English" => "70",
                                "Science" => "80",
                                "History" => "91",
                                "Computer Science" => "87",
                                "Mathematics" => "73",
                                "Mechanics" => "67"
                            ),
                            "Marks-Obtained" => "556",
                            "Total-Marks" => "700",
                            "Percentage" => "79%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Nisha Thakur",
                            "Age" => "13",
                            "Roll No." => "4",
                            "E-mail" => "nishathakur@gmail.com",
                            "Date Of Birth" => "3-3-2001",
                            "Marks" => array(
                                "hindi" => "85",
                                "English" => "82",
                                "Science" => "80",
                                "History" => "91",
                                "Computer Science" => "95",
                                "Mathematics" => "79",
                                "Mechanics" => "79"
                            ),
                            "Marks-Obtained" => "591",
                            "Total-Marks" => "700",
                            "Percentage" => "84%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rohit Thakur",
                            "Age" => "14",
                            "Roll No." => "5",
                            "E-mail" => "rohitthakur@gmail.com",
                            "Date Of Birth" => "17-3-2001",
                            "Marks" => array(
                                "hindi" => "60",
                                "English" => "65",
                                "Science" => "59",
                                "History" => "70",
                                "Computer Science" => "75",
                                "Mathematics" => "55",
                                "Mechanics" => "69"
                            ),
                            "Marks-Obtained" => "453",
                            "Total-Marks" => "700",
                            "Percentage" => "65%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Rajat Thakur",
                            "Age" => "13",
                            "Roll No." => "6",
                            "E-mail" => "rajattthakur@gmail.com",
                            "Date Of Birth" => "27-3-2001",
                            "Marks" => array(
                                "hindi" => "80",
                                "English" => "70",
                                "Science" => "65",
                                "History" => "91",
                                "Computer Science" => "93",
                                "Mathematics" => "73",
                                "Mechanics" => "77"
                            ),
                            "Marks-Obtained" => "549",
                            "Total-Marks" => "700",
                            "Percentage" => "78%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Ratan Thakur",
                            "Age" => "13",
                            "Roll No." => "7",
                            "E-mail" => "ratanthakur@gmail.com",
                            "Date Of Birth" => "27-3-2001",
                            "Marks" => array(
                                "hindi" => "85",
                                "English" => "70",
                                "Science" => "69",
                                "History" => "83",
                                "Computer Science" => "79",
                                "Mathematics" => "69",
                                "Mechanics" => "66"
                            ),
                            "Marks-Obtained" => "521",
                            "Total-Marks" => "700",
                            "Percentage" => "74%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Isha Sharma",
                            "Age" => "13",
                            "Roll No." => "8",
                            "E-mail" => "Ishasharma@gmail.com",
                            "Date Of Birth" => "27-11-2000",
                            "Marks" => array(
                                "hindi" => "80",
                                "English" => "70",
                                "Science" => "65",
                                "History" => "91",
                                "Computer Science" => "93",
                                "Mathematics" => "79",
                                "Mechanics" => "81"
                            ),
                            "Marks-Obtained" => "559",
                            "Total-Marks" => "700",
                            "Percentage" => "80%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Ritik Thakur",
                            "Age" => "13",
                            "Roll No." => "9",
                            "E-mail" => "Ritikthakur@gmail.com",
                            "Date Of Birth" => "27-12-2001",
                            "Marks" => array(
                                "hindi" => "65",
                                "English" => "62",
                                "Science" => "60",
                                "History" => "71",
                                "Computer Science" => "83",
                                "Mathematics" => "69",
                                "Mechanics" => "71"
                            ),
                            "Marks-Obtained" => "481",
                            "Total-Marks" => "700",
                            "Percentage" => "69%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                        array(
                            "Name" => "Sania Thakur",
                            "Age" => "13",
                            "Roll No." => "10",
                            "E-mail" => "saniathakur@gmail.com",
                            "Date Of Birth" => "4-4-2001",
                            "marks" => array(
                                "hindi" => "90",
                                "English" => "87",
                                "Science" => "80",
                                "History" => "81",
                                "Computer Science" => "93",
                                "Mathematics" => "77",
                                "Mechanics" => "81"
                            ),
                            "Marks-Obtained" => "589",
                            "Total-Marks" => "700",
                            "Percentage" => "84%",
                            "Remarks" => "pass",
                            "Division" => "First"
                        ),
                    ),
                    "Lunch-time" => array(
                        "Time" => "12.45pm-1.30pm"
                    ),
                    "Class-incharge" => array(
                        "Name" => "Dinesh Thakur"
                    ),
                    "Laboratory" => array(
                        array(
                            "Subject" => "Science Lab.",
                            "Day" => "Monday",
                            "Time" => "9am-9.45am",
                            "Teacher" => "Anshika Thakur"

                        ),
                        array(
                            "Subject" => "Computer Science Lab.",
                            "Day" => "Friday",
                            "Time" => "12pm-12.45pm",
                            "Teacher" => "Maloo Sharma"

                        ),

                    ),
                    "Teachers" => array(
                        array(
                            "Name" => "anshika Thakur",
                            "Subjects" => "Science",
                            "Time" => "9am-9.45am",
                            "Qualification" => array(
                                "Degree" => "Bsc",
                                "Master's Degree" => "Msc"
                            ),
                        ),
                        array(
                            "Name" => "Ritika Sharma",
                            "Subjects" => "History",
                            "Time" => "9.45am-10.30am",
                            "Qualification" => array(
                                "Degree" => "BA(History)",
                                "Master's Degree" => "MA"
                            ),

                        ),
                        array(
                            "Name" => "Reena Sharma",
                            "Subjects" => "Hindi",
                            "Time" => "10.30am-11.15am",
                            "Qualification" => array(
                                "Degree" => "BA(Hindi)",
                                "Master's Degree" => "MA"


                            ),
                        ),
                        array(
                            "Name" => "Hemant Thakur",
                            "Subjects" => "Mathematics",
                            "Time" => "11.15am-12pm",
                            "Qualification" => array(
                                "Degree" => "Bsc(Mathematics)",
                                "Master's Degree" => "Msc"
                            ),

                        ),
                        array(
                            "Name" => "Maloo Sharma",
                            "Subjects" => "Computer Science",
                            "Time" => "12pm-12.45pm",
                            "Qualification" => array(
                                "Degree" => "BCA(IT)",
                                "Master's Degree" => "MCA(IT)"
                            ),

                        ),
                        array(
                            "Name" => "Divya Sharma",
                            "Subjects" => "English",
                            "Time" => "12.45pm-1.30pm",
                            "Qualification" => array(
                                "Degree" => "BCA",
                                "Master's Degree" => "MCA"
                            ),
                        ),

                        array(
                            "Name" => "Rajat Sen",
                            "Subjects" => "Mechanics",
                            "Time" => "2.15pm-3pm",
                            "Qualification" => array(
                                "Degree" => "B.tech",
                                "Master's Degree" => "M.tech"

                            ),
                        ),
                    ),
                    "Class Moniter" => array(
                        "Name" => "Rajat Thakur",
                    ),
                    "Time" => array(

                        array(
                            "Time" => "9am-9.45m",
                            "subject" => "Science",
                            "Teacher" => "Anshika Thakur",

                        ),
                        array(
                            "Time" => "9.45am-10.30am",
                            "subject" => "History",
                            "Teacher" => "Ritika Sharma",

                        ),
                        array(
                            "Time" => "10.30am-11.15am",
                            "subject" => "Hindi",
                            "Teacher" => "Reena Sharma",

                        ),

                        array(
                            "Time" => "11.15am-12pm",
                            "subject" => "Mathematics",
                            "Teacher" => "Dinesh Thakur",

                        ),
                        array(
                            "Time" => "12pm-12.45pm",
                            "subject" => "Computer Science",
                            "Teacher" => "Munish Patiyal",

                        ),
                        array(
                            "Time" => "12.45pm-1.30pm",
                            "subject" => "English",
                            "Teacher" => "Divya Sharma",

                        ),
                        array("Lunch-Time" => "1.30pm-2.15pm"),
                        array(
                            "Time" => "2.15pm-3pm",
                            "subject" => "Mechanics",
                            "Teacher" => "Rajat Sen",

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

            <!--10th class start -->
            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][0]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Laboratory"][0]["Subject"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Laboratory"][0]["Day"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][2]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][0]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][0]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][1]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][1]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][1]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][2]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][2]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][2]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][3]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][3]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][3]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][4]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Laboratory"][1]["Subject"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Laboratory"][1]["Day"]; ?></td>
             
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][1]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][4]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][4]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][5]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][5]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][5]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>

            <tr>
                <th scope="row">10th</th>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["RoomNo."]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][6]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Students"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Lunch-time"]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class-incharge"]["Name"]; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Teachers"][6]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Class Moniter"]["Name"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Subjects"][6]["Time"]; ?></td>
                <td><?php echo $arrays["School"]["Classes"]["10th"]["Rooms"][0]["Title"]; ?></td>
            </tr>
            <!--10th class end -->
        </tbody>
           </table>

    
</body>
</html>