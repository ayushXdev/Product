<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }

    h2 {
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      color: #555;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #007bff;
      outline: none;
    }

    button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #007bff;
      color: #fff;
      border-radius: 6px;
      cursor: pointer;
      font-size: 15px;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-container">

    @if(session('error'))
     <div style="background-color: red; color: white">{{session('error')}}</div>
    @endif 
     @if(session('success'))
     <div style="background-color: green; tecolor: white">{{session('success')}}</div>
    @endif 

    <h2>Login</h2>
    <form action="{{route('login')}}" method="POST">
        @csrf

      <label for="email">Email</label>
      <input type="text"  name="email" placeholder="Enter Email" >

      <label for="password">Password</label>
      <input type="password"  name="password" placeholder="Enter Password" >

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
