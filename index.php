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
                            "Teacher"=> "Pinkee Sharma",
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
                            "Name" => "Pinkee Sharma",
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


                "11th" => array(

                    "Rooms" => array(
                        array(
                            "RoomNo." => "1",  "Title" => "Theory Classes", "Students" => "55", "Table" => "30",
                            "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "10", "Title" => "Computer-Science Lab.", "Students" => "55",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "3", "Title" => "Physics Lab.", "Students" => "55",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),
                        array(
                            "RoomNo." => "4", "Title" => "Chemistry Lab.", "Students" => "55",
                            "Table" => "30", "Door" => "2",  "Lecture Stand" => "1", "Window" => "2"
                        ),

                    ),
                    "Subjects" => array(

                        array(
                            "Name" => "Physics",
                            "Teacher" => "Jagdish Thakur",
                            "Time" => "9am-10am"
                        ),
                        array(
                            "Name" => "Computer Science",
                            "Teacher" => "Maloo Sharma",
                            "Time" => "10am-11am",
                        ),
                        array(
                            "Name" => "Chemistry",
                            "Teacher" => "Nirmla Thakur",
                            "Time" => "11am-12pm"
                        ),

                        array(
                            "Name" => "English",
                            "Teacher" => "Pinkee Sharma",
                            "Time" => "12pm-1pm"
                        ),

                        array(
                            "Name" => "Mathematics",
                            "Teacher" => "Hemant Thakur",
                            "Time" => "2pm-3pm"
                        ),



                    ),
                    "Students" => array(

                        array(
                            "Name" => "Aadi Thakur",
                            "Age" => "15",
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
                            "Age" => "15",
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
                            "Age" => "14",
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
                            "Age" => "14",
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
                            "Age" => "15",
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
                            "Age" => "14",
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
                            "Age" => "14",
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
                            "Age" => "14",
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
                            "Age" => "14",
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
                            "Age" => "14",
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
                        "Name" => "Nirmla Thakur",
                    ),
                    "Teachers" => array(
                        array(
                            "Name" => "Jagdish Thakur",
                            "Subjects" => "Physics",
                            "Time" => "9am-10am",
                            "Qualification" => array(
                                "Degree" => "Bsc(Physics)",
                                "Master's Degree" => "Msc"
                            ),
                        ),
                        array(
                            "Name" => "Maloo Sharma",
                            "Subjects" => "Computer Science",
                            "Time" => "10am-11am",
                            "Qualification" => array(
                                "Degree" => "BCA(IT)",
                                "Master's Degree" => "MCA"
                            ),

                        ),
                        array(
                            "Name" => "Nirmla Thakur",
                            "Subjects" => "Chemistry",
                            "Time" => "11am-12pm",
                            "Qualification" => array(
                                "Degree" => "Msc(Chemistry)",
                                "Master's Degree" => "Msc"

                            ),

                        ),
                        array(
                            "Name" => "Pinkee Sharma",
                            "Subjects" => "English",
                            "Time" => "12pm-1pm",
                            "Qualification" => array(
                                "Degree" => "BCA",
                                "Master's Degree" => "MCA"

                            ),
                        ),


                        array(
                            "Name" => "Hemant Thakur",
                            "Subjects" => "Mathematics",
                            "Time" => "2pm-3pm",
                            "Qualification" => array(
                                "Degree" => "Bsc(Mathematics)",
                                "Master's Degree" => "Msc(Mathematics)"
                            ),
                        ),




                    ),
                    "Laboratory" => array(
                        array(
                            "Subject" => "Physics",
                            "Day" => "Monday",
                            "Time" => "9am-10am",
                            "Teacher" => "Jagdish Thakur"

                        ),
                        array(
                            "Subject" => "Computer Science",
                            "Day" => "Friday",
                            "Time" => "1pm-2pm",
                            "Teacher" => "Maloo Sharma"

                        ),
                        array(
                            "Subject" => "Chemistry",
                            "Day" => "Wednesday",
                            "Time" => "10am-11am",
                            "Teacher" => "Nirmla Thakur"

                        ),

                    ),
                    "Class Moniter" => array(
                        "Name" => "Ritik Thakur",
                    ),
                    "Time" => array(


                        array(
                            "Time" => "9am-10am",
                            "Subject" => "Physics",
                            "Teacher" => "Jagdish Thakur",

                        ),
                        array(
                            "Time" => "10am-11am",
                            "Subject" => "Computer science",
                            "Teacher" => "Maloo Sharma",

                        ),
                        array(
                            "Time" => "11am-12pm",
                            "Subject" => "Chemistry",
                            "Teacher" => "Nirmla Thakur",

                        ),
                        array(
                            "Time" => "12pm-1pm",
                            "Subject" => "English",
                            "Teacher" => "Pinkee Sharma",

                        ),
                        array(
                            "Time" => "2pm-3pm",
                            "Subject" => "Mathematics",
                            "Teacher" => "Hemant Thakur",

                        ),




                    ),
                ),

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





                //end classes
            ),
            "Teachers" => array(

                array(
                    "Name" => "Hemant Thakur",
                    "Subject" => "Mathematics",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "11.15am-12pm",
                        "11th" => "2pm-3pm",
                        "12th" => "12pm-1pm"
                    ),
                    "Qualification" => array(
                        "Degree" => "Bsc(Mathematics)",
                        "Master's Degree" => "Msc"

                    ),
                ),
                array(
                    "Name" => "Reena Sharma",
                    "Subject" => "Hindi",
                    "Class" => "10th",
                    "Time" => "10.30am-11.15am",
                    "Qualification" => array(
                        "Degree" => "BA(Hindi)",
                        "Master's Degree" => "MA"


                    ),
                ),
                array(
                    "Name" =>  "Anshika Thakut",
                    "Subject" => "Science",
                    "Class" => "10th",
                    "Time" => "9am-9.45am",
                    "Qualification" => array(
                        "Degree" => "Bsc",
                        "Master's Degree" => "Msc"
                    ),
                ),

                array(
                    "Name" => "Pinkee Sharma",
                    "Subject" => "English",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "1.30pm-2.15pm",
                        "11th" => "11am-12pm",
                        "12th" => "9am-10am"
                    ),
                    "Qualification" => array(
                        "Degree" => "BCA",
                        "Master's Degree" => "MCA"
                    ),
                ),
                array(
                    "Name" => "Ritika Sharma",
                    "Subject" => "History",
                    "Class" => "10th",
                    "Time" => "9.45am-10.30am",
                    "Qualification" => array(
                        "Degree" => "BA(History)",
                        "Master's Degree" => "MA"
                    ),

                ),
                array(
                    "Name" => "Maloo Sharma",
                    "Subject" => "Computer Science",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "12pm-12.45pm",
                        "11th" => "10am-11am",
                        "12th" => "2pm-3pm"
                    ),
                    "Qualification" => array(
                        "Degree" => "BCA(IT)",
                        "Master's Degree" => "MCA(IT)"
                    ),
                ),
                array(
                    "Name" => "Rajat Sen",
                    "Subject" => "Mechanics",
                    "Class" => "10th",
                    "Time" => "2.15pm-3pm",
                    "Qualification" => array(
                        "Degree" => "B.tech",
                        "Master's Degree" => "M.tech"

                    ),
                ),

                array(
                    "Name" => "Nirmla Thakur",
                    "Subject" => "Chemistry",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "12pm-1pm",
                        "12th" => "11am-12pm"
                    ),
                    "Qualification" => array(
                        "Degree" => "Bsc(Physics)",
                        "Master's" => "Msc"
                    ),
                ),
                array(
                    "Name" => "Jagdish Thakur",
                    "Subject" => "Physics",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "9am-10am",
                        "12th" => "10am-11am"
                    ),
                    "Qualification" => array(
                        "Degree" => "Msc(Chemistry)",
                        "Master" => "Msc"

                    ),

                ),





            ),
            "Subjects" => array(

                array(
                    "Name" => "Mathematics",
                    "Teacher" =>"Hemant Thakur",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "11.15am-12pm",
                        "11th" => "2pm-3pm",
                        "12th" => "12pm-1pm"
                    ),
                ),


                array(
                    "Name" => "Hindi",
                    "Teacher" =>  "Reena Sharma",
                    "Class" => "10th",
                    "Time" => array(
                        "10th" => "10.30am-11.15am",
                    ),
                ),
                array(
                    "Name" => "Science",
                    "Teacher" => "Anshika Thakur",
                    "Class" => "10th",
                    "Time" => array(
                        "10th" => "9am-9.45am",
                    ),


                ),

                array(
                    "Name" => "English",
                    "Teacher" => "Pinkee Sharma",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "1.30pm-2.15pm",
                        "11th" => "11am-12pm",
                        "12th" => "9am-10am"
                    ),

                ),
                array(
                    "Name" => "History",
                    "Teacher" => "Ritika Sharma",
                    "Class" => "10th",
                    "Time" => array(
                        "10th" => "9.45am-10.30am"
                    )

                ),
                array(
                    "Name" => "Computer Science",
                    "Teacher" => "Maloo Sharma",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "1.30pm-2.15pm",
                        "11th" => "12pm-1pm",
                        "12th" => "2pm-3pm",
                    ),

                ),
                array(
                    "Name" => "Mechanics",
                    "Teacher" => "Rajat Sen",
                    "Class" => "10th",
                    "Time" => array(
                        "10th" => "2.15-3pm"
                    )

                ),

                array(
                    "Name" => "Chemistry",
                    "Teacher" => "Nirmla Thakur",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "10am-11am",
                        "12th" => "11am-12pm"
                    )
                ),
                array(
                    "Name" => "Physics",
                    "Teacher" => "Jagdish Thakur",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "9am-10am",
                        "12th" => "10am-11am"
                    )
                ),

            ),
            "Laboratory" => array(
                array(
                    "Subject" => "Science",
                    "Day" => "Monday",
                    "Time" => "9am-9.45am",
                    "Class" => "10th"
                ),
                array(
                    "Subject" => "Computer Science",
                    "Day" => "Friday",
                    "Teacher" => "Munish Patiyal",
                    "Class" => array("10th", "11th", "12th"),
                    "Time" => array(
                        "10th" => "12pm-12.45pm",
                        "11th" => "12pm-1pm",
                        "12th" => "2pm-3pm"
                    ),

                ),
                array(
                    "Subject" => "Physics",
                    "Day" => "Monday",
                    "Teacher" => "Jagdish Thakur",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "9am-10am",
                        "12th" => "10am-11am"
                    ),


                ),
                array(
                    "Subject" => "Chemistry",
                    "Day" => "Wednesday",
                    "Teacher" => "Nirmla Thakur",
                    "Class" => array("11th", "12th"),
                    "Time" => array(
                        "11th" => "10am-11am",
                        "12th" => "11am-12pm"
                    ),


                ),



            ),

        ),
    );
    print_r($arrays)
    ?>

    








