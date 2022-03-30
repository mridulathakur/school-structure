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
        "Laboratory" => array(
            array(
                "Subject" => "Science",
                "Day" => "Monday",
                "Teacher" => "Anshika Thakur",
               "Class" => "10th",
                "Time" => "9am-9.45am"
            ),
            array(
                "Subject" => "Computer Science",
                "Day" => "Friday",
                "Teacher" => "Maloo Sharma",
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
?>
<table class="table">
    <thead>
        <tr>

            <th scope="col">Subject</th>
            <th scope="col"> Day</th>
            <th scope="col">Teacher</th>
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
            <td><?php echo $arrays["School"]["Laboratory"][0]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][0]["Day"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][0]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][0]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Laboratory"][0]["Time"]; ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Day"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Teacher"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][1]["Time"]["12th"]; ?></td>
        </tr>

        <tr>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Day"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Teacher"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][2]["Time"]["12th"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Day"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Teacher"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Laboratory"][3]["Time"]["12th"]; ?></td>
        </tr>