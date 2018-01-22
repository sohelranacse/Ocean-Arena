var li=links(); //global declare

function delete_promotion(value){
	var id = $(value).val().trim();
	var chk = confirm('Are you sure you want to delete?');
	if (chk == 1) {

		$.ajax({
          type: 'POST',
          url:li+'admin/delete_promotion/',
          data:{id:id},
          dataType:'json',
          success: function(response){
            if (response==1) {
            	$('#promotion'+id).fadeOut();
            	alert('Deleted successful!');
            }else{
            	alert('Deleted failed!');
            }
          },
          error: function(){
            alert('Error!');
          }
        });
	}

}
function delete_resort(value){
  var id = $(value).val().trim();
  var chk = confirm('Are you sure you want to delete?');
  if (chk == 1) {

    $.ajax({
          type: 'POST',
          url:li+'admin/delete_resort/',
          data:{id:id},
          dataType:'json',
          success: function(response){
            if (response==1) {
              $('#resort'+id).fadeOut();
              alert('Deleted successful!');
            }else{
              alert('Deleted failed!');
            }
          },
          error: function(){
            alert('Error!');
          }
        });
  }

}
function delete_hotels(value){
  var id = $(value).val().trim();
  var chk = confirm('Are you sure you want to delete?');
  if (chk == 1) {

    $.ajax({
      type: 'POST',
      url:li+'admin/delete_hotels/',
      data:{id:id},
      dataType:'json',
      success: function(response){
        if (response==1) {
          $('#hotel'+id).fadeOut();
          alert('Deleted successful!');
        }else{
          alert('Deleted failed!');
        }
      },
      error: function(){
        alert('Error!');
      }
    });
  }

}

function overview_submit(){
  var id = $("#details_id").val().trim();
  var overview = $("#overview").val().trim();

  if (id !== '' && overview !== '') {
    $.ajax({
      type: 'POST',
      url:li+'admin/add_overview/',
      data:{id:id,overview:overview},
      dataType:'json',
      success: function(response){
        alert(response);
      },
      error: function(){
        alert('Error!');
      }
    });
  }
  
}
function delete_rooms(value){
  var id = $(value).val().trim();
  var chk = confirm('Are you sure you want to delete?');
  if (chk == 1) {

    $.ajax({
      type: 'POST',
      url:li+'admin/delete_rooms/',
      data:{id:id},
      dataType:'json',
      success: function(response){
        if (response==1) {
          $('#rooms'+id).fadeOut();
          alert('Deleted successful!');
        }else{
          alert('Deleted failed!');
        }
      },
      error: function(){
        alert('Error!');
      }
    });
  }

}
