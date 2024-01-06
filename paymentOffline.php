<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offline Payment</title>
    <link rel="stylesheet" href="css/paymentOffline.css">
</head>
<body>
    <div class="container">
        <h3>Payment Details</h3>

        <form action="paymentProcess.php">
                <div class="bdtls">
                <div class="bnk">
                <label type='text'>Bank Name: </label>
                </div>
                <div class="select">
                
                    <select name="bank" id="bank">
                        <option value="People's">People's</option>
                        <option value="NSB">NSB</option>
                        <option value="HNB">HNB</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Sampath">Sampath</option>
                        <option value="BOC">BOC</option>
                    </select>
                </div>
                </div>

                <div class="brnchs">
                <div class="brnch">
                    <label type='text'>Branch Name: </label>
                </div>
                <div class="select">
                
                    <select name="branch" id="branch">
                        <option value="City1">City1</option>
                        <option value="City2">City2</option>
                        <option value="City3">City3</option>
                        <option value="City4">City4</option>
                        <option value="City5">City5</option>
                        <option value="City6">City6</option>
                    </select>
                </div>
                </div>
            <div class="date"><label for="date">Date:</label><input type="date"></div>
            <div class="amount"><label for="text">Amount:</label><input placeholder="RS. " type="text"></div>
            
            <div class="submit"><button type='submit'>Submit</button></div>
            
        </form>
        <div class="form">

        </div>
        
    </div>
    <div class="backbtn"><button>Back</button></div>
</body>
</html>