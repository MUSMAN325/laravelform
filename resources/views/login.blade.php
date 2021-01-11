<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <style>
       .signup{
    box-shadow:   10px 10px 10px #777777;
   margin: 20px;
   background-color: lightgoldenrodyellow;
   padding-bottom: 10px;
   color: brown;
   font-family: Courier New, Courier, monospace;

   max-width: 400px;
   padding: 10px  30px;



}

#login{
    font-family: Courier New, Courier, monospace;
    background-color: blanchedalmond;
    box-shadow:   10px 10px 10px #777777;

    padding: 40px;
    margin-top: 50px;
    margin-left: 10px;
    margin-right: 10px;
    max-width: 400px;
    /* min-width: 100px; */
}

label{
    float: left;
}

input{

    text-indent: 15px;




}
h1{
    width: 260px;

}
   </style>
</head>
<body>
<center>   <div id = "login">
    <h1 class="text-success">Login:</h1><br>
<form action="/login" method = "get">
<input type="email" placeholder="Enter Email" name="userEmail" class="form-control"><br><br>
<input type="password" placeholder="Password" name="userPassword" class="form-control"><br><br>
<button type = "submit" class="form-control btn-outline-danger">Submit</button>
 </form>
 </div>
 </center>

</body>
</html>
