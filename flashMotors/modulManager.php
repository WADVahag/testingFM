<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module Manager</title>
</head>

<body>

    <form action="ContactAdd.php" method='POST'>
        <h2> Contact</h2>
        <h3> Name & SecondName</h3>
        <input type="text" name='newContactName'>
        <h3> Phone</h3>
        <input type="text" name='newContactPhone'>
        <h3> PASSPORT</h3>
        <input type="text" name='newContactPassport'>
        <h3> SOC CARD</h3>
        <input type="text" name='newContactSocCard'>
        <h3> ADDRESS </h3>
        <input type="text" name='newContactAddress'>
        <h3> EMAIL </h3>
        <input type="text" name='newContactEmail'>
        <br />
        <br />
        <h2> Car</h2>
        <h3> Name</h3>
        <input type="text" name='newCarName'>
        <h3> Model</h3>
        <input type="text" name='newCarModel'>
        <h3> Number</h3>
        <input type="text" name='newCarNumber'>
        <h3> Year</h3>
        <input type="text" name='newCarYear'>
        <h3> RunTime</h3>
        <input type="text" name='newCarRunTime'>
        <h3> WINCode </h3>
        <input type="text" name='newCarWINCode'>
        <h3> PlannedRunTime </h3>
        <input type="text" name='newCarPlannedRunTime'>
        <h3> CarFileUpload </h3>
        <input type="file" name='newCarFile'>
        <button> Send to FlashMotors</button>
    </form>
</body>

</html>