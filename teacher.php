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
                    "Master\'s Degree" => "Msc"

                ),
            ),
            array(
                "Name" => "Reena Sharma",
                "Subject" => "Hindi",
                "Class" => "10th",
                "Time" => "10.30am-11.15am",
                "Qualification" => array(
                    "Degree" => "BA(Hindi)",
                    "Master\'s Degree" => "MA"


                ),
            ),
            array(
                "Name" =>  "Anshika Thakut",
                "Subject" => "Science",
                "Class" => "10th",
                "Time" => "9am-9.45am",
                "Qualification" => array(
                    "Degree" => "Bsc",
                    "Master\'s Degree" => "Msc"
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
                    "Master\'s Degree" => "MCA"
                ),
            ),
            array(
                "Name" => "Ritika Sharma",
                "Subject" => "History",
                "Class" => "10th",
                "Time" => "9.45am-10.30am",
                "Qualification" => array(
                    "Degree" => "BA(History)",
                    "Master\'s Degree" => "MA"
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
                    "Master\'s Degree" => "MCA(IT)"
                ),
            ),
            array(
                "Name" => "Rajat Sen",
                "Subject" => "Mechanics",
                "Class" => "10th",
                "Time" => "2.15pm-3pm",
                "Qualification" => array(
                    "Degree" => "B.tech",
                    "Master\'s Degree" => "M.tech"

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
                    "Master\'s Degree" => "Msc"
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
                    "Master\'s Degree" => "Msc"

                ),

            ),





        ),



    ),
);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
            <th scope="col"> 10th Class</th>
            <th scope="col"> 11th Class</th>
            <th scope="col"> 12th Class</th>
            <th scope="col">10th Time</th>
            <th scope="col">11th Time</th>
            <th scope="col">12th Time</th>
            <th scope="col">Degree</th>
            <th scope="col">Master's Degree</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][0]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Time"]["12th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][0]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][1]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][1]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][1]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][1]["Time"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][1]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][1]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][2]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][2]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][2]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][2]["Time"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][2]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][2]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][3]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Time"]["12th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][3]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][4]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][4]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][4]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][4]["Time"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][4]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][4]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][5]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Class"][1]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Class"][2]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Time"]["10th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Time"]["12th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][5]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][6]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][6]["Subject"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][6]["Class"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][6]["Time"]; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][6]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][6]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][7]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Subject"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Time"]["12th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][7]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrays["School"]["Teachers"][8]["Name"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Subject"]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Class"][0]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Class"][1]; ?></td>
            <td></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Time"]["11th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Time"]["12th"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Qualification"]["Degree"]; ?></td>
            <td><?php echo $arrays["School"]["Teachers"][8]["Qualification"]["Master\'s Degree"]; ?></td>
        </tr>
    </tbody>
</table>