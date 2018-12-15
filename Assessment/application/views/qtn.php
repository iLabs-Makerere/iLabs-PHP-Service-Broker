<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>
    <link rel ='stylesheet' href ='<?php echo base_url();?>assets/css/bootstrap.css' type = 'text/css'/>

    <link rel ='stylesheet' href ='<?php echo base_url();?>assets/css/bootstrap.min.css' type = 'text/css'/>

<link href="<?php echo base_url();?>assets/css/cover.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/starter-template.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#">ilabs@mak</a>
      </div>
    </nav>
<div class = "container">

<div class = "row">
<div class="col-md-8">
 <div class="text-center">
<form method ='post' action = '<?php echo base_url();?>start/process/'>
<h3 class = "text-left">Question: <?php echo $question->question_id; ?> of <?php echo $all;?></h3><br>
<hr>
<h3 class = "text-left"><?php echo $question->question; ?></h3>
<hr>


<div class='text-left'>
<div class="container">
  <?php $array = array($question->choice1,$question->choice2,$question->choice3,$question->choice4);
    shuffle($array);?>

    <?php for($i=0;$i<4;$i++):?>

 <h3><input type="radio" class="form-input" name = "choice" value="<?php echo $array[$i]?>" <?php if($temp_rows >= $question->question_id)if($array[$i] == $choices->selected){echo "checked";}?>><?=$array[$i]?><br></h3>

<?php endfor;?>

</div>
        </div>

<br>
<br>
    <?php if ($question->question_id>1):?>
         <input type='submit' class = "btn btn-primary float-left btn-lg"  style='width:200px'  name = 'back' value='Back'/>
<?php endif;?>

    <input type='submit' class = "btn btn-primary float-right btn-lg" name = 'next' style='width:200px'  value='Next   '/>

</div>
</div>
<div class="col-md-4 text-right">Time Taken:00:50

</div>

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
