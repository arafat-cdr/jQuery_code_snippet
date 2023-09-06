<label for="ReqName">Requester Name <span class="text-grey">(<span class='current_count3'>0</span>/<span>25</span>)</span></label><br>
<input type="text" id="ReqName" class="name" name="ReqName" maxlength="25"> <a class="info-link"
onclick="document.getElementById('id004').style.display='block'"><u><i class="fa fa-info-circle" style="font-size:20px">



<label for="">Assignee <span class="text-grey">(<span class='current_count3'>0</span>/<span>25</span>)</span></label><br>
   <input type="text" id="assignee" class="assignee" name="assignee" maxlength="25"> <a class="info-link"
   onclick="document.getElementById('id006').style.display='block'"><u><i class="fa fa-info-circle" style="font-size:20px"></i></u></a>
   <br><br>

<script>
	 // ------------------------------------------------------

	 // Event handler for the input event on text inputs
	 $("input[type='text']").on('input', function() {

	   var input = $(this);

	   // Check if the input has the 'maxlength' attribute
	   if (input.attr("maxlength")) {
	     // Get the 'maxlength' value
	     var maxlength = parseInt(input.attr("maxlength"));

	     // update the count

	     // input.siblings('label').find('.current_count3').html( input.val().length+1 );
	     var now_count = input.val().length;

	     var label = input.prevAll('label:first');
	     label.find('.current_count3').html(now_count);
	     
	     console.log(  label );

	     // Check if the input value exceeds the maxlength
	     if (input.val().length >= maxlength) {
	       // Display a popup or an alert with the message
	       // input.siblings('label').first().find('.current_count3').html( input.val().length );
	       alert("Input length exceeds maxlength of " + maxlength + " characters.");
	     }

	     console.log( input.val().length );

	   }

	});

	 // ------------------------------------------------------
</script>