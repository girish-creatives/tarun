
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>

	<div class="container">
		
		<div class="col-sm-10">
			
			<div class="form-group">

				<label>enter number 1</label>
				<input type="text" id="txt1" class="form-control">
			</div>

			<div class="form-group">

				<label>enter number 2</label>
				<input type="text" id="txt2" class="form-control">
			</div>

			<button type="button"  value="+" class="btn btn-primary calculate">Add</button>
			<button type="button"  value="-"  class="btn btn-warning calculate">Subtract</button>
			<button type="button"  value="*"  class="btn btn-primary calculate">Multiply</button>
			<button type="button"  value="/"  class="btn btn-info calculate">Divide</button>
			<button type="button"  value="%"  class="btn btn-warning calculate">Remainder</button>
			<button type="button"  value="percent" class="btn btn-info calculate">Percentage</button>
			<button type="button"  class="btn btn-danger" id="clear">Clear</button>


			<div class="form-group">

				<label>calculate</label>
				<input type="text" id="txt3" class="form-control">
			
			</div>

		</div>

	</div>			

</body>

<script>

	$(document).ready(function () {

		$(".calculate").on('click',function () {
			
		   var txt1 = $("#txt1").val();
		   var txt2 = $("#txt2").val();
		   var val = $(this).val();

		   if(txt1 && txt2 != '')
			{
			   	if($.isNumeric(txt1 && txt2))
			   	{
			   		if(val != "percent")
			   		{
			   			if (val == '%' || val == '/') 
			   			{
			   				if(txt1 && txt2 == 0)
			   				{
			   					let	result = "not defined";
			   					$("#txt3").val(result);
			   				}
				   			else
				   			{
				   				let result = eval(txt1 + val + txt2);
				   				$("#txt3").val(result);
					  		}
			   			}
			   			else
			   			{
			   					let result = eval(txt1 + val + txt2);	

				   				if($("#txt3").val())
				   				{
				   					console.log($("#txt3").val());
				   					$("#txt3").val(eval(result + val + txt1));
				   				}
				   				else
				   				{

				   					$("#txt3").val(result);
				   				}
			   			}
			   		}
			   		else
			   		{	
			   			if(txt1 && txt2 == 0)
			   				{
			   					let	result = "not defined";
			   					$("#txt3").val(result);
	            			}
	            			else
	            			{
	            				let result = parseFloat(parseInt($("#txt1").val()) * parseInt($("#txt2").val())) / 100;
	            				$('#txt3').val(result); //10 / 100 * 200	
	            			}
			   		}      	
	           // (`${txt1} ${val} ${txt2}`)
			   	}
			   	else
			   	{
			   		alert("This is not a number");
			   	}

			}
		   else
		   {
		   		alert("Please fill the both fields" );
		   }

		});

		$("#clear").on('click',function(){

			$("#txt1").val("");
			$("#txt2").val("");
			$("#txt3").val("");

		});

	});

</script>

</html>

