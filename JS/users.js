jQuery(document).ready(function($){
	$(document).on('click','button#add_new_user',function(){
		$.ajax({
			url:'switch.php',
			type:"GET",
			data:{page:"modules_view_users_new-user-popup"},
			success:function(data){
				$('.popup_window .window_content').html(data);
			}
		});
		$('.popup_window').fadeIn();
	});
	$(document).on('click','button.delete',function(){
		if(confirm("Do you really want to delete this person?")){
			var the_form = $(this).parent('form');
			var data = {page:"modules_"+the_form.attr('action'),form_data:new Object()};
			the_form.children('input,select,textarea').each(function(){
				var this_elem = $(this);
				data['form_data'][this_elem.attr('id')] = this_elem.val();
			});
			$.ajax({
				url:'switch.php',
				type:the_form.attr('method'),
				data:data,
				success:function(data){
					the_form.parents().children('.return_value').html(data);
				}
			});
			$(this).parents('tr').remove();
		}
	});
	$(document).on('click','button#create_user',function(event){
		var the_form = $(this).parent('form');
		var data = {page:"modules_"+the_form.attr('action'),form_data:new Object()};
		var end = false;
		the_form.children('input,select,textarea').each(function(){
			var this_elem = $(this);
			if(this_elem.is('[required]') && this_elem.val() == ""){
				end = true;
				this_elem.addClass('error_border');
				return;
			}
			this_elem.removeClass('error_border');
			data['form_data'][this_elem.attr('id')] = this_elem.val();
		});
		if(end){
			return;
		}
		$.ajax({
			url:'switch.php',
			type:the_form.attr('method'),
			data:data,
			success:function(data){
				the_form.parents().children('.return_value').html(data);
			}
		});
	});
});