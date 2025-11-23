<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<style>
  body {
            text-align: center;
            justify-content:center;
      align-items:center;
      padding:50px;
        }
    .form-container {
      padding: 100px;
      border-radius: 25px;
      background-color:pink;
      width: 600px;
      height:450px;
      margin:100px auto;
      justify-content:center;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
h1 {
        text-align:center;
        color:blue;
        font-size:55px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight:bold;
      width: 100%;
      border-radius: 50px;
      font-size:30px;
    }
    input{
      width: 70%;
      padding:10px;
      font-size:18px;
    }
    button {
      margin-top: 15px;
      background-color: #21c2f3;
      color: white;
      padding: 5px;
      cursor: pointer;
      border-radius: 50px;
      font-size:30px;
      width: 30%;
    }
    button:hover{
      background-color:#1a9bcf;
    }
    </style>
    </head>
<body>

<div class="form-container">
    <h1>LOGIN</h1>

<form action="login_submit.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="username" required><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" required><br>

    <button type="submit">Submit</button>
</form>

</div>
</body>
</html>
