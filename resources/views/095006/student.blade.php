<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 6:06 AM
 */
?>
    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
    <style>
        body{
            background: #000033;
            color: black;
        }
        .form{
            border-radius: 0.5em;
            box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
            background: white;
            display: block;
            max-width: 480px;
            overflow: hidden;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding: 2em;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            width: 98%;
        }
        .form h1{
            font-size: 2em;
            margin: 0 0 0.5em 0;
            text-align: center;
            font-family: 'Cookie', cursive;
        }
        .form form label{
            border-bottom: 1px solid #333;
            display: block;
            font-size: 1.2em;
            margin-bottom: 0.5em;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form label input{
            background: none;
            border: none;
            line-height: 1em;
            font-weight: 300;
            padding: 0.125em 0.25em;
            width: 100%;
        }
        .form form label span.label-text{
            display: block;
            font-size: 0.8em;
            font-weight: bold;
            text-transform: uppercase;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form button.submit{
            background: rgba(255,255,255,0.25);
            border: 1px solid #333;
            line-height: 1em;
            padding: 20px;
            font-size: large;
            margin-left: 40%;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form button:hover,
        .form form button:focus,
        .form form button:active,
        .form form button.loading{
            background: #333;
            color: #fff;
            outline: none;
        }
        .alert{
            background: pink;
            color: red;
            border-radius: 10px;
            border: solid 1px;
            padding-bottom: 15px;
        }
        ul {
            list-style-type: none;
            margin: 10px;
            padding: 0;
        }
    </style>

</head>
<body>
<div class="form">
<form method="post" action="/student/new">
    {{csrf_field()}}
    <h1>Register Student</h1>
   <label></label>
    <label>
        <span class="label-text">Student Number</span>
        <input type="text" name="studentnumber" >
    </label>
    <label>
        <span class="label-text">First Name</span>
        <input type="text" name="firstname" >
    </label>
    <label >
        <span class="label-text">LastName</span>
        <input type="text" name="lastname" >
    </label>
    <label >
        <span class="label-text">Date Of Birth</span>
        <input type="date" name="dob">
    </label>
    <label >
        <span class="label-text">Address</span>
        <input type="text" name="address" >
    </label><br>
    @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="text-center">
        <button class="submit" type="submit" name="Login">Register</button>
    </div><br>
</form>
</div>
</body>
</html>
