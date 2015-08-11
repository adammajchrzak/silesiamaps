<div class="page-text">
	<h1>{$page_details.node_title}</h1>
	<div style="margin-top: 30px;">{$page_details.content_text}</div>
	<div>
		<form action="" method="post" id="contact-form">
			<div><strong>{$locale.site.contact_form.name}</strong><span style="color: #ff0000;">*</span></div>
			<div><input type="text" id="flname" name="flname" /></div>
			<div><strong>{$locale.site.contact_form.email}</strong><span style="color: #ff0000;">*</span></div>
			<div><input type="text" id="email" name="email" /></div>
			<div><strong>{$locale.site.contact_form.subject}</strong><span style="color: #ff0000;">*</span></div>
			<div><input type="text" id="subject" name="subject" /></div>
			<div><strong>{$locale.site.contact_form.sendto}</strong><span style="color: #ff0000;">*</span></div>
			<div>
				<select id="sendto" name="sendto">
					<option>Główna skrzynka pocztowa Biura</option>
				</select>
			</div>
			<div><strong>{$locale.site.contact_form.message}</strong><span style="color: #ff0000;">*</span></div>
			<div><textarea id="message" name="message"></textarea></div>
			<div><button type="submit">{$locale.site.contact_form.submit}</button></div>
		</form>
	</div>
</div>
