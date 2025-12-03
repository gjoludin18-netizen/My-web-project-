<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            padding :50px;
            text-align: center;
            margin-top:20%;
            background-image:url("cmc.png" );
             align-items:center;
             justify-content:center;
             display: flex;
        }
        .aw {
            padding: 50px;
            border-radius: 50px;
            width: 650px;
            height: 60%;
            /*  margin-top:30px ;*/
            background-color:yellow;
          
            font-size:45px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        button {
            margin-top: 10px;
            background: #21c2f3;
            border: none;
            padding: 8px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size:29px;
        }
        button:hover{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="aw">
        <form action="registration.php" method="get">
           <p> CARMEN MUNICIPAL COLLEGE </p>
           <p> Registration Form </p>
            <button type="submit">Enroll Now!</button>
        </form>
    </div>
</body>
</html>
