<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Manitouilin Test</title>
<meta name="description" content="manitoulin test">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom style sheet -->
<style>
body {
    margin: 0 auto;
    width: 50%;
    padding-top:100px;
}
.modal-header, .modal-footer {
    background-color:#f7f7f7;
}
</style>
</head>
<body>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th><th>First</th><th>Last</th><th>Email</th><th>&nbsp;</th>
    </tr>
<?php 
foreach ($people as $person) {
   echo '<tr>';
   foreach ($person as $field) {
      echo '<td>'.$field.'</td>';
   }
   echo '<td><a href="#initmodal" class="btn btn-success" data-toggle="modal" role="button">info</a></td></tr>';
   
}
?>
</table>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('a[href=#initmodal]').click(function(e) {
        var firstname = $(this).parents('tr').find('td:eq(1)').text();
        var lastname = $(this).parents('tr').find('td:eq(2)').text();
        var email = $(this).parents('tr').find('td:eq(3)').text();
        $('.firstname').empty().html(firstname);
        $('.lastname').empty().html(lastname);
        $('.email').empty().html(email);
        $('#infomodal').modal('show');
        return false;
    });
})
</script>
<div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="infomodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal"> X </a>
                <h4 class="modal-title" id="infomodaltitle">Contact info for <strong><span class="lastname"></span>, <span class="firstname"></span></strong></h4>
            </div>
            <div class="modal-body">
                <p><span class="firstname"></span> <span class="lastname"></span><br>
                    <span class="email"></span></p>
            </div>
            <div class="modal-footer" style="clear:left"></div>
        </div>
    </div>
</div>
</body>
</html>
