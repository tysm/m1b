@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

@section('content')

<div class="container  ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body ">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Profissional</th>
      <th scope="col">Especialidade</th>
      <th scope="col">Data</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Andréa</th>
      <td>Ansiedade</td>
      <td>10/03/2019</td>
      <td><span class="glyphicon glyphicon-plus"></span></td>
      
      
    </tr>
    
    <tr>
      <th scope="row">Luisa</th>
      <td>Ansiedade</td>
      <td>15/03/2019</td>
      <td><span class="glyphicon glyphicon-plus"></span></td>
    </tr>
    <tr>
      <th scope="row">Rafael</th>
      <td>Humanista</td>
      <td>20/03/2019</td>
      <td><span class="glyphicon glyphicon-plus"></span></td>
    </tr>
     <tr>
      <th scope="row">Marcelo</th>
      <td>Psicanálise</td>
      <td>25/03/2019</td>
      <td><span class="glyphicon glyphicon-plus"></span></td>
    </tr>
  </tbody>
</table>

    
</div>

@endsection

