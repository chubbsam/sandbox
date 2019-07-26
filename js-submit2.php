<html> 
    <body> 

<form id="1" action="">
  First name: <input type="text" name="fname[]" value="Aa"><br>
</form>

<form id="2" action="">
  First name: <input type="text" name="fname[]" value="Ba"><br>
</form>


<input type="button" onclick="submitForms(1)" value="Submit form 1">
<input type="button" onclick="submitForms(2)" value="Submit form 2">

<script>
var x;
submitForms = function(x){
    document.getElementById(x).submit();
}
</script>

    </body> 
</html> 
<?php 
      
    // Check if form is submitted successfully 
    if(isset($_GET["fname"]))  
    { 
		print_r($_GET["fname"]);
    } 
?> 
