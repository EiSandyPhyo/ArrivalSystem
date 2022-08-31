<?php 
include 'header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert FAQ Form</h2>
		
		Enter FAQ Question
		<div class="form-group">
			<input type="text" class="form-control" name="faq_question">
		</div>
		
		Enter FAQ Answer
		<div class="form-group">
			<textarea class="form-control" name="faq_answer"></textarea>
		</div>
		
		<div class="form-group">
			<input type="submit" class="form-control" name="insert" value="Insert">
		</div>
		</form>
	</div>
	<div class="col-md-2"></div>
	
	</div>
</div>

<?php 
    if (isset($_POST['insert'])) {
        $faq_question=$_POST['faq_question'];
        $faq_answer=$_POST['faq_answer'];
        
        $viewquery="select* from tbl_faq";
        $i=0;
        foreach ($db->query($viewquery) as $row)
        {
            $i=$row['faq_id'];
        }
        $i++;
        $insertquery="insert into tbl_faq(faq_question,faq_answer) values('$faq_question','$faq_answer')";
        $db->exec($insertquery);
    }
?>