<?php
	header('Content-Type: text/html; charset="UTF-8"');



    // Post ��� ���� �迭�� �����´�.
	$data = $_POST["Data"];

	Main($data);

    function Main($RawData)
    {
        // Json ���ڵ�.
        $data_decode = json_decode($RawData, true);
	    if(isset($data_decode))
	    {
            switch($data_decode["Action"])
            {
                case "LoginUserWithAuthToken":
                    LoginUserWithAuthToken($data_decode["DeviceID"]);
                    break;
                default: // Action not listed, invalid request
                    //ReturnErrorToUser("E104");
                    break;
            }
        }
        else
        {
            echo "isset\n";
        }
    }

    function LoginUserWithAuthToken($DeviceID)
    {
        $servername = "localhost";
        $username = "root";
        $password = "mm7982";
        $dbname = "basis";

        $conn = mysqli_connect($servername, $username, $password);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_select_db($conn, $dbname);
        $query = "SELECT * FROM account WHERE DeviceID = '$DeviceID'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if($result != NULL)
        {
            if($row == NULL)
            {
                $result = mysqli_query($conn, "SELECT MAX(id) FROM account");
                $resultArr = mysqli_fetch_array($result);
                $next_id = $resultArr['MAX(id)'] + 1;
                echo "next_id ", $next_id , "\n";

                $query =    "INSERT INTO account (ID, DeviceID, LoginType)
                            VALUES ('$next_id', '$DeviceID', 'Google')";

                if (mysqli_query($conn, $query))
                {
                    echo "New record created successfully";
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else
            {
                $return_arr = array();
                array_push($return_arr,$row);
                echo json_encode($return_arr);
            }

        }
        else
        {
            echo "Result is null\n";
        }

        mysqli_free_result($result);
		mysqli_close($conn);

    }

?>