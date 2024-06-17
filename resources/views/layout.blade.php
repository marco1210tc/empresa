<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <style>
      * {
        font-family: Roboto, Arial;
        /* box-sizing: border-box; */
      }

      .table-centered {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      table {
        width: 70%;
        text-align: left;
        border-spacing: 0;
      }
      th, td {
        padding: 5px 10px;
        border: 1px solid gray;
      }
      th {
        background-color: rgba(16, 83, 160, 0.795);
        color: white; 
      }
      .navbar{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        text-align: center;
      }
      .nav-btn {
        background-color: rgba(16, 83, 160, 0.795);
        color: white;
        text-decoration: none;
        padding: 10px;
        width: 10%;
        transition: 0.2s;
      }
      .nav-btn:hover {
        background-color: #0b3769;
      }
      .active {
        background-color: #0b3769;
      }

      .form-section {
        display: flex;
        justify-content: center;
        align-items: center; 
      }
      .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
      }
      .form {
        border: 3px solid black;
        width: 30vw;
        height: 80vh;
        max-width: 450px;
        min-width: 350px;
        min-height: 500px;
      }
      .form-group {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .form-group {
        margin: 10px 50px;
        /* border: 1px solid red; */
        width: 70%;
      }
      .form-group input {
        margin: 0px 0px;
        padding: 3px 3px;
        width: 100%;
      }
      .btn {
        padding: 8px;
        border: none;
        cursor: pointer;
      }
      .btn-send {
        background-color: #162e49;
        color: white;
        transition: 0.5s;
      }
      .btn-send:hover {
        background-color: rgba(12, 67, 129, 0.795);
      }

    </style>
  </head>
  <body>

    @include('partials.navbar')
    @yield('content')

  </body>
</html>