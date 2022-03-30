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
        "Subjects" => array(

            array(
                "Name" => "Mathematics",
                "Teacher" => "Hemant Thakur",
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
                "Teacher" => "Anshika Thakut",
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
                "Teacher" =>  "Maloo Sharma",
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

    ),
);
?>
<table class="table">
    <thead>
        <tr>
           
            <th scope="col">Subject</th>
            <th scope="col"> Teacher</th>
            <th scope="col"> 10th Class</th>
            <th scope="col"> 11th Class</th>
            <th scope="col"> 12th Class</th>
            <th scope="col">10th Time</th>
            <th scope="col">11th Time</th>
            <th scope="col">12th Time</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][0]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][0]["Time"]["12th"]; ?></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][1]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][1]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][1]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][1]["Time"]["10th"]; ?></td>
            <td></td>
            <td></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][2]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][2]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][2]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][2]["Time"]["10th"]; ?></td>
            <td></td>
            <td></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][3]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][3]["Time"]["12th"]; ?></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][4]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][4]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][4]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][4]["Time"]["10th"]; ?></td>
            <td></td>
            <td></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][5]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][5]["Time"]["12th"]; ?></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][6]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][6]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][6]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][6]["Time"]["10th"]; ?></td>
            <td></td>
            <td></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][7]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][7]["Teacher"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][7]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][7]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][7]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][7]["Time"]["12th"]; ?></td>
           
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Subjects"][8]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][8]["Teacher"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][8]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][8]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Subjects"][8]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Subjects"][8]["Time"]["12th"]; ?></td>
           
        </tr>
        
    </tbody>
</table>
