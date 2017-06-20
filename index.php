<html>
    <head>
        <meta charset="UTF8">
        <title> MQTT </title>
        <link href="dist/css/header.css" rel="stylesheet">
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    </head>
    <body  style="background-color:#999999;">
        <br><br><br><br>
        <div class="container">
            <div class="header">
                <h1 class="text-center"><br>MQTT by Seed Soft</h1>
            </div>
            <div class="content" style=" background-color: #ffffff; width: 100%; height: 60%;align: center;">
                <br>
                <form method="GET">
                    <br>
                    <table class="table-bordered" width="40%" align="center">
                        <tr>
                            <td width="30%" align="right">
                                <label for="devicename">Device&nbsp;&nbsp;&nbsp;</label>
                            </td>
                            <td width="40%"> 
                                <select name="devicename" class="form-control">
                                    <option value="1">001</option>
                                    <option value="2">002</option>
                                    <option value="3">003</option>
                                    <option value="4">004</option>
                                    <option value="5">005</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label>RFID UID&nbsp;&nbsp;&nbsp;</label>
                            </td>
                            <td> 
                                <input type="text" class="form-control" id="uid" required>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label>Distance Beacon&nbsp;&nbsp;&nbsp;</label>
                            </td>
                            <td> 
                                <input type="text" class="form-control" id="distance" required>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="devicename">MAC Address Beacon&nbsp;&nbsp;&nbsp;</label>
                            </td>
                            <td> 
                                <input type="text" class="form-control" id="devicename" required>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="devicename">Delay Time Scan&nbsp;&nbsp;&nbsp;</label>
                            </td>
                            <td>
                                <input type="number" max="100" class="form-control" id="timedelay" required>
                            </td>
                        </tr>

                    </table>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-info">Pushblish</button>&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </center>

                </form>

            </div>            
        </div>
        <!-- controller -->
        <?php
        ?>
        <!-- controller -->

        <!--   javascript  -->

        <script src="dist/js/mqttws31.js" type="text/javascript"></script>
        <script src="dist/js/connectMQTT.js" type="text/javascript"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
        <!--   javascript  -->

    </body>
</html>

