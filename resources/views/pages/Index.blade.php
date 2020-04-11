@extends('layouts.app')
<!doctype html> 
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'PizaaApp')}}</title>

    </head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{config('app.name', 'PizaaApp')}}</title>
<style>
    h1 {
        color:  #53352d;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 600%;
        text-shadow: 2px 2px 5px whitesmoke;
        padding-top: 40px;
        text-decoration-line: overline;
        text-decoration-style: solid;
        text-decoration-color: #FF5733;
    }
    p  {
        margin-right: auto;
        margin-left: auto;
        width: 100%;
        text-align: center;
        color: #53352d;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 120%;
        padding-top: 50px;
        padding-bottom: 50px;	 
        padding-left: 35px;     
        padding-right: 35px;  
     
    }
    span {

        color:#FF5733 ;
        font-size:102%;
    }
    </style>

</head>
   <body>
    <h1 style = "text-align:center;">Krusty Krabs</h1>
    
   </body>
   <body style="background-color:white;">
      <h1 style="text-align:center;">Orgasmic Pizza</h1>
      <div class="jumbotron text-center">
         <h1>{{$title}}</h1>
         <p><a class="btn btn-primary btn-lg" href="/pizza/public/login" role="button">login</a><a class="btn btn-success btn-lg" href="/pizza/public/register" role="button">register</a>
      </div>      
      <span>Krusty_Krab.inc</span> 
   </body>
</html>

