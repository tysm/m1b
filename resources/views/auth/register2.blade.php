<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  
body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}


</style>


</head>
<body>

   


<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success"> Seja bem vindo(a) </h1>
<h2> Queremos te ajudar a ter um dia melhor </h2>
<br/>

<div class="col-sm-12">


<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
    <form method="POST" action="{{ route('register') }}">
                        @csrf


 
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>

  <a class="btn btn-lg btn-default" style="width:50%"data-toggle="tab" href="#menu1">Acessar</a>


  

</form>
<br/>

    </div>

    <div id="menu1" class="tab-pane fade">

<form action="#">

  <div class="form-group">
    <label for="name">Qual o seu nome completo?</label>
</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

Onde você vive?
<br>
<div class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Qual Estado?</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Escolher...</option>
    <option value="1">Ba</option>
    <option value="2">SP</option>
    <option value="3">RJ</option>
  </select>

<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Qual Cidade?</label>
    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Escolher...</option>
    <option value="1">Ba</option>
    <option value="2">SP</option>
    <option value="3">RJ</option>
  </select>

  </div>

 <form>
 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Quando você nasceu?</label>
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="Ano">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Mês">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Dia">
    </div>
  </div>
</form>


 <button type="submit" class="btn btn-primary">
      
  </button>
  </div>

 



  <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

</form>
<br/>
<a href="#" class="pull-right btn btn-block btn-success" > Already Register ?   </a>


    



    </div>
   </div>
  </div>
</div>
</div>
<!-- This design is created by manoj chauhan  -->
</body>
</html>
