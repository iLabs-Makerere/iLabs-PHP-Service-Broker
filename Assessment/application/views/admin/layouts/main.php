
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ilabs@mak</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <h2 class="navbar-brand">ILABS@MAK</h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      
         
         
        
        <form class="form-inline my-2 my-lg-0" method='post' >
          <input class="form-control mr-sm-2" type="text" name="name" placeholder="Search Name" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mr-auto">
          
          <li>
            <a class="nav-link" href="<?php echo base_url();?>admin/authenticate/login">Logout</a>
          </li>
</ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        

    <div class="container">

      <h1>Student Marks</h1>
     
     
     
      <div class="table-responsive">
          <table class="table table-stripped">
          <thead>
              <tr>
                  <th width="70">#</th>
                  <th>Reg #</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Marks</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($get_students as $student):?>
              <tr>
              
                  <td><?php echo $student->id;?></td>
                  <td>xxx</td>
                  <td><?php echo $student->name;?></td>
                  <td>BELE</td>
                  <td><?php echo $student->marks;?></td>
                  
              </tr>
          </tbody>
          <?php endforeach;?>
          </table>
      </div>

      