<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"?>
        <title>ilabs@mmak</title>   
        <link href="<?php echo BASE_URL();?>assets/css/bootstrap.css" rel="stylesheet">
          <link href="<?php echo BASE_URL();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/starter-template.css" rel="stylesheet">
</head>

<body>
      <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#">ilabs@mak</a>
      </div>
    </nav>
 <a href="<?php echo base_url();?>admin/question/add" type ="button"class="btn btn-primary float-right"/>Add</a>
 <h1>Questionaire</h1>
<div class="table-responsive">
    <table class="table table-stripped">
    <thead>
        <tr>
            <th>Question_id</th>
            <th>Question</th></th>
            <th >Choices</th>
            <th>#</th>
            <th>lab_id</th>
   
        </tr>
    </thead>
    <tbody>
    <?php foreach($questions as $question):?>
        <tr>
        <td><?php echo $question->question_id;?></td>
            
       <td><?php echo $question->question.'<br>';?></td> 
            
            <td><?php echo $question->choice1.'<br>';?>
            <?php echo $question->choice2.'<br>';?>
            <?php echo $question->choice3.'<br>';?>
            <?php echo $question->choice4.'<br>';?>
          
         <td><a href="<?php echo base_url();?>admin/question/edit/<?php echo $question->question_id;?>" type ="button"class="btn btn-primary">Edit</a>
             <a href ="<?php echo base_url();?>admin/question/delete/<?php echo $question->question_id;?>" type ="button"class="btn btn-primary">Delete</a><br></td>   
        <td><?php echo $question->lab_id;?> </th>
            
        </tr><?php endforeach;?>
    </tbody>
    
    </table>
</div>


</body>