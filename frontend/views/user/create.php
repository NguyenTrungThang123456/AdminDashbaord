<form id="user_register_form">
		<fieldset>
			<legend id="title_create">Tạo tài khoản</legend>
			<table>
				<tr>
					<td class="td_create">Phone</td>
					<td class="td_create"><input type="text" name="phone" required="required"></td>
				</tr>
				<tr>
					<td class="td_create">Username</td>
					<td class="td_create"><input type="text" name="username" required="required"></td>
				</tr>
				<tr>
					<td class="td_create">Name</td>
					<td class="td_create"><input type="text" name="name" required="required"></td>
				</tr>
				<tr>
					<td class="td_create">Password</td>
					<td class="td_create"><input type="password" name="password" required="required"></td>
				</tr>
				<tr>
					<td class="td_create">Repassword</td>
					<td class="td_create"><input type="password" name="repassword" required="required"></td>
				</tr>
			</table>
			<input id="register_user" type="submit" name="create" value="Create">
		</fieldset>
	</form>

<script type="text/javascript">
	
	$(function() {

		$("#user_register_form").submit(function(e) {
			e.preventDefault();

			var this_form = $(this);

			$.ajax({
				type: 'POST',
				url: '<?php echo base_url('user/create') ?>',
				dataType: 'JSON',
				data: this_form.serialize(),
				success: function(response) {
					if (response.status == API_SUCCESS) {
						window.location.reload();
					} else {
						alert(response.message);
					}
				}
			});
		});


	});

</script>
