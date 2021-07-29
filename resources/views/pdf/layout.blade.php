<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    
    
<style>
  .wo{
    height: 1754px;
    width: 1240px;
  }
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #a9aaa9;
    color: rgb(15, 15, 15);
  }
  .jo {
    border: 1px solid black;
    width:100%
  }
  .ho{
  border: 1px solid black; 
  width: 10%;
  }
  .go{
  border: 1px solid black;
    width:100%;
    margin-top: 20px;
  }
  .do{
    margin-top: 20px;
  }
  .hj{
    background-color: #a9aaa9;
    color: rgb(8, 8, 8);
    font-size: 30px;
  }
  .invoice{
    margin-left: 50px;
    margin-right: 50px;
    
  }
  .so{
    font-size: 30px;
  
  
  }
  .page-break{
      page-break-after: always;
  }
</style>

</head>
<body>
    
    @include('pdf._header')
    @yield('content')
    
</body>
</html>