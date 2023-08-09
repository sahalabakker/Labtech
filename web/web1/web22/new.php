<!DOCTYPE html>
<html>
<head>
    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>


<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and get bellow Related City</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Select country:</label>
                <input list="country" type="text" name="country">
                <datalist id="country" name="country">
                    <?php
                    require('db_configure.php');
                    $sql="select * from country";

echo "<select class='form-control' id=country name=country>
<option value=''>Select Country</option>";
foreach ($db->query($sql) as $row) {
echo "<option value=$row[id] >$row[name]</option>";
}
echo "</select>";
?>


                   
                </select>
            </datalist>
            </div>


            <div class="form-group">
                <label for="title">Select state:</label>
                <input list="state" type="text" name="state">
                <datalist id="state">
                <select name="state" class="form-control" style="width:350px">
                    <option id="op1" value="--select district--">
                </select>
            </datalist>
            </div>


      </div>
    </div>
</div>


<script>
$( "input[name='country']" ).change(function () {
    var countryID = 1;
    

      if(countryID) {


        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':countryID},
            success: function(data) {
                $('input[name="state"]').empty();
                $.each(data, function(key, value) {
                    $('input[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('input[name="state"]').empty();
    }
});
</script>


</body>
</html>