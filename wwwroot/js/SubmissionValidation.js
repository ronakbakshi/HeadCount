function validateFormFirstFloor( ) {
			var myForm = document.getElementById("form1");
			//Extract Each Element Value
			for (var i = 0; i < myForm.elements.length; i++) {
			if (myForm.elements[i].value == null) || (myForm.elements[i].value == "") || (myForm.elements[i].value >= 100) || (myForm.elements[i].value < 0) 
					{
						alert("All input boxes must be filled out.");
						return false;
					}
				
			}
		}
		
function validateFormSecondFloor( ) {
			var myForm = document.getElementById("form2");
			//Extract Each Element Value
			for (var i = 0; i < myForm.elements.length; i++) {
			if (myForm.elements[i].value == null || myForm.elements[i].value == "") {
					alert("All input boxes must be filled out.");
					return false;
				}
			}
		}

function validateFormThirdFloor( ) {
			var myForm = document.getElementById("form3");
			//Extract Each Element Value
			for (var i = 0; i < myForm.elements.length; i++) {
			if (myForm.elements[i].value == null || myForm.elements[i].value == "") {
					alert("All input boxes must be filled out.");
					return false;
				}
			}
		}		
		
function validateDeleteAllData(){
	return confirm("Are you sure you want to delete all data?");
	
}