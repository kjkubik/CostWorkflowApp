<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workflow Application</title>
</head>
<body>
    <?php
        print "TODO"
    ?>
    <div id="master">
        <div class="title">Create Work Flow</div>
            <div class="workflowid">Work Flow Number: <input type="text" name="workflowid" value="Format: YY-NNNN"><br>
        </div>
        <div class="customerhead">
            <h4>Customer Info</h4>
        </div>
        <div class="customer">
            Customer Name: <input type="text" name="Customer" value="Customer"><br><br>
            Contact Name: <input type="text" name="ContactName" value="Contact Name"><br><br>
            Contact Number: <input type="text" name="ContactNumber" value="Contact Number"><br><br>
            Contact Email: <input type="text" name="ContactEmail" value="Contact Email"><br><br>
        </div>
        <!--div class="customervals">
            <input type="text" name="ContactName" value="Contact Name"><br>
            <input type="text" name="ContactNumber" value="Contact Number"><br>
            <input type="text" name="ContactEmail" value="Contact Email"><br>
        </div-->
        <div class="importantdateshead">
            <h4>Important Dates</h4>
        </div>
        <div class="importantdates">
            Date Created: <input type="text" name="DateCreated" value="Date Created"><br><br>
            Expiration Date: <input type="text" name="ExpDate" value="Expiration Date"><br><br>
            Date Complete: <input type="text" name="DateComp" value="Date Completed"><br><br>
        </div>
        <div class="statushead">
            <h4>Work Flow Status</h4>
        </div>
        <div class="status">
            Complete: <input type="text" name="Complete" value="Y/N"><br><br>
            Priority: <input type="text" name="Priority" value="1/2/3/4"><br><br>
        </div>
        <!--div class="routehead">
            <h4>Work Flow Routing</h4>
        </div-->
        <div class="routedate">
            <h4>Route Date</h4>
        </div>
        <div class="routeto">
            <h4>Route To</h4>
        </div>
        <div class="routefrom">
            <h4>Route From</h4>
        </div>
        <div class="itemtitle">
            <h4>Work Flow Items</h4>
        </div>
        <div class="iteminfo">
            Place work flow headings here
        </div>
    </div>
</body>
</html>