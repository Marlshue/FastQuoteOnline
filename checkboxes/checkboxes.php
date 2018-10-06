
<html lang="en">
<head>
<meta charset="utf-8">
<title>Requisitions</title>
</head>
<body>
<form action="#" method="post" class="demoForm" id="demoForm">
    <fieldset>
        <legend>Demo: Handling Checkbox Group</legend>
        
    <p>Size: Medium $8.00</p>
    <?php
include('../dbconfig.php');
$qry = "select * from products";
	$result= mysqli_query($db,$qry);
	
	
		while($row = mysqli_fetch_assoc($result)){
			
			?>
			<label><input type="checkbox" onClick="getId(this.value);" id="stuff" name="stuff" value="<?php echo $row['prodid'];?>" /> <?php echo $row['pname'];?></label>
			<?php
		}
		
?>
    <div id="toppings">Toppings: 
	
<label><input type="checkbox" id="prices" name="prices" value="" /> </label>
        
    </div>
    
    <p>
        <label>Total: $ <input type="text" name="total" class="num" size="6" value="8.00" readonly="readonly" /></label>
    </p>
    </fieldset>
    
</form>
</body>
	<script>
	// call onload or in script segment below form
function attachCheckboxHandlers() {
    // get reference to element containing toppings checkboxes
    var el = document.getElementById('toppings');

    // get reference to input elements in toppings container element
    var tops = el.getElementsByTagName('input');
    
    // assign updateTotal function to onclick property of each checkbox
    for (var i=0, len=tops.length; i<len; i++) {
        if ( tops[i].type === 'checkbox' ) {
            tops[i].onclick = updateTotal;
			
        }
    }
}
    
// called onclick of toppings checkboxes
function updateTotal(e) {
    // 'this' is reference to checkbox clicked on
    var form = this.form;
    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['total'].value );
    
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) {
        val += parseFloat(this.value);
		//document.write(this.value);
    } else {
        val -= parseFloat(this.value);
    }
    
    // format val with correct number of decimal places
    // and use it to update value of total text box
    form.elements['total'].value = formatDecimal(val);
}
    
// format val to n number of decimal places
// modified version of Danny Goodman's (JS Bible)
function formatDecimal(val, n) {
    n = n || 2;
    var str = "" + Math.round ( parseFloat(val) * Math.pow(10, n) );
    while (str.length <= n) {
        str = "0" + str;
    }
    var pt = str.length - n;
    return str.slice(0,pt) + "." + str.slice(pt);
}

// in script segment below form
attachCheckboxHandlers();
	</script>
	<script>
$('#stuff').click(function() {
    alert("Checkbox state (method 1) = " + $('#stuff').prop('checked'));
    alert("Checkbox state (method 2) = " + $('#stuff').is(':checked'));
});
function getId(val){
	$.ajax({
				type:"POST",
				url:"ajax.php",
				data:"prodid="+ val,
				success:function(data){
					$("#prices").html(data);
					}
				
				});
		
	}

</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</html>
