<?php

?>
<html>
<style type="text/css">
    #content {
        width: 450px;
        margin:  auto;
        padding: 0px 0px 60px 25px;
        border: 2px solid navy;
    }

    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    input {
        float: left;
        width: 15em;
        margin-bottom: 0.5em;
    }

    h1 {
        color: navy;
    }

    #buttons input {
        width: 9.5em;
        float: left;
    }

</style>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form method="post" action="myPHP.php">
        <div id="data">
            <label>Inventment Amount:</label>
            <input type="text" name="InventmentAmount" value="0"><br>
            <label>Yearly Interest Rate:</label>
            <input type="text" name="YearlyInterestRate" value="0"><br>
            <label>Number of Years:</label>
            <input type="text" name="NumberOfYears" value="0"><br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate">
        </div>
    </form>
</div>
</body>
</html>
