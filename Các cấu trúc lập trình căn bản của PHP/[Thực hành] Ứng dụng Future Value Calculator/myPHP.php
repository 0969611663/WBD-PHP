<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventmentAmount = $_POST["InventmentAmount"];
    $yearlyInterestRate = $_POST["YearlyInterestRate"];
    $numberOfYears = $_POST["NumberOfYears"];
}

//tính toán
$outputInterest = ($inventmentAmount / 100) * $yearlyInterestRate;
$futureValue = $inventmentAmount + (($outputInterest) * $numberOfYears);
?>
<html>
<style type="text/css">
    #Discount {
        width: 420px;
        margin: auto;
        padding: 0px 0px 120px 25px;
        border: 2px darkblue solid;
    }

    h1 {
        color: navy;
    }

    label {
        float: left;
        width: 10em;
        padding-right: 1em;
    }

    span {
        float: left;
        width: 15em;
        margin-bottom: 0.5em;
    }


</style>
<body>
<div id="Discount">
    <h1>Future Value Calculator</h1>
    <form method="post">
        <label>Investment Amount: </label><span><?php echo "$" . $inventmentAmount ?></span>
        <label>Yearly Interest Rate: </label><span><?php echo $yearlyInterestRate . "%" ?> </span>
        <label>Number of Years: </label><span><?php echo $numberOfYears . "Year" ?></span>
        <label>Future Value: </label><span><?php echo "$" . $futureValue ?></span>
    </form>
</div>
</body>
</html>


