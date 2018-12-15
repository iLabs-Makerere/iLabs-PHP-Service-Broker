<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"?>
        <title>ilabs@mmak</title>
        <link rel ='stylesheet' href ='<?php echo base_url();?>assets/css/style.css' type = 'text/css'/>
             <link rel ='stylesheet' href ='<?php echo base_url();?>assets/css/bootstrap.min.css' type = 'text/css'/>

</head>
<body>
         <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#">ilabs@mak</a>
      </div>
    </nav>
    <header>
        <div class ='container'>
            <h1>ilabs@mak</h1>
</div>
    </header>
    <main>
        <div class ='container'>
        <h2>Edit A Question<p> Database # <?php echo $question->question_id;?></p><br></h1>
        <form  method="post" action="<?php echo base_url();?>admin/question/edit/<?php echo $question->question_id;?>">
 
<p>
                <label>Question Text</label>
                <input type="text" name="question" value = "<?php echo $question->question;?>" /><br>
</p>
<p>
                <label>Choice #1</label>
                <input type = "text" name = 'choice1' value = "<?php echo $question->choice1;?>"/><br>
</p>
<p>
                <label>Choice #2</label>
                <input type = "text" name = 'choice2' value = "<?php echo $question->choice2;?>"/><br>
</p>
<p>
                <label>Choice #3</label>
                <input type = "text" name = 'choice3' value = "<?php echo $question->choice3;?>"/><br>
</p>
<p>
                <label>Choice #4</label>
                <input type = "text" name = 'choice4' value = "<?php echo $question->choice4;?>"/><br>

</p>

<p>
    <label> Lab_id: </label>
    <input type='number' name='lab_id' value = "<?php echo $question->lab_id;?>"/>
</p>
<p>
    <label> Question_number: </label>
    <input type='number' name='id'  value = "<?php echo $question->question_id;?>"/>
</p>

<input type='submit' class = "btn btn-primary" name = 'submit' value='Submit'/>

    </div>
    </main>
    <footer>

    <div class ="container">
            Copyright &copy; ilabs@mak
</div> 

    </footer>
</body>
</html>