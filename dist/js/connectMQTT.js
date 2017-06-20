var host = "m10.cloudmqtt.com"
            var username = "jhrhggnz"
            var password = "Qm1oj5Uj7soQ"
            var port = 37923;
            // Create a client instance
            client = new Paho.MQTT.Client(host, port, "client_id");
            //Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

            // set callback handlers
            client.onConnectionLost = onConnectionLost;
            client.onMessageArrived = onMessageArrived;
            var options = {
                useSSL: true,
                userName: username,
                password: password,
                onSuccess: onConnect,
                onFailure: doFail
            }

            // connect the client
            client.connect(options);

            // called when the client connects
            function onConnect() {
                // Once a connection has been made, make a subscription and send a message.
                console.log("onConnect");
                client.subscribe("Raspberry/door1/state");
                message = new Paho.MQTT.Message("1");
                message.destinationName = "Raspberry/door1/state";
               // client.send(message);
                toastr.success("Connected.")
            }

            function doFail(e) {
                console.log(e);
            }

            // called when the client loses its connection
            function onConnectionLost(responseObject) {
                if (responseObject.errorCode !== 0) {
                    console.log("onConnectionLost:" + responseObject.errorMessage);
                }
            }

            // called when a message arrives
            function onMessageArrived(message) {
                console.log("onMessageArrived:" + message.payloadString);
                toastr.warning("onMessageArrived:" + message.payloadString)
            }