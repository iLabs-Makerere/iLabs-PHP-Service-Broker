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
        <h2> Add A Question</h1>
   
     
<form method ="post" action = "<?php echo base_url();?>admin/question/add/" >

  
<p>
                <label>Question Text</label>
                <input type="text" name="question" /><br>
</p>
<p>
                <label>Choice #1</label>
                <input type='text' name='choice1'/>
</p>
<p>
                <label>Choice #2</label>
                <input type='text' name='choice2'/>
</p>
<p>
                <label>Choice #3</label>
                <input type='text' name='choice3'/>
</p>
<p>
                <label>Choice #4</label>
                <input type='text' name='choice4'/>
</p>

<p>
    <label> Lab_id: </label>
    <input type='number' name='lab_id'/>
</p>
<p>
    <label> Question_number: </label>
    <input type='number' name='id'/>
</p>
<input type='submit' class = "btn btn-primary"name = 'submit' value='Submit'/>

    </div>
    </main>
    <footer>

    <div class ="container">
            Copyright &copy; ilabs@mak
</div> 

    </footer>
</body>
</html>