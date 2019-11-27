<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module Manager</title>
</head>

<body>

    <form action="CompanyAdd.php" method='POST'>
        <h2> Company</h2>
        <h3> Գործընկեր</h3>
        <input type="text" name='newCompanyName'>
        <h3> ՀՎՀՀ</h3>
        <input type="text" name='newCompanyHVHH'>
        <h3> Բանկ, հ/հ</h3>
        <input type="text" name='newCompanyBank'>
        <h3> Իրավաբանական հասցե</h3>
        <input type="text" name='newCompanyLegalAddress'>
        <h3> Գործունեության հասցե </h3>
        <input type="text" name='newCompanyWorkPlaceAddress'>
        <h3> Հեռախոս </h3>
        <input type="text" name='newCompanyPhone'>
        <h3> Էլ. հասցե </h3>
        <input type="text" name='newCompanyMail'>
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