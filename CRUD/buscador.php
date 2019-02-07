<?php
require_once './includes/header.php';

require_once 'db.php';
?>



<?php
$query = "SELECT * FROM task";

$result = mysqli_query($con, $query);


?>

<script>
    var select = document.getElementById('title');
    select.addEventListener('change',function (){
       
       var selectedOption= this.options [select.selectedIndex];
       console.log(selectedOption.value + ' :' selectedOption.text);
       
    });
    
 
</script> 
    



<div class="container">

    <div class="row">  
        <div class="form-group col-3 ">

            <select class="form-control " id="title">
                <option value="" disabled selected> Selecione un nombre</option>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['title'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<?php
require_once './includes/footer.php';
?>