

<?php foreach ($agents as $agents): ?>
	</br>
	<?php echo $agents['agents_id'] ?>
	<?php echo $agents['agents_image'] ?>
	<?php echo $agents['agents_name'] ?>
<?php endforeach ?>
</br>
<?php foreach ($contact as $contact): ?>
	</br>
	<?php echo $contact['contact_id'] ?>
	<?php echo $contact['contact_checkin'] ?>
	<?php echo $contact['contact_icon'] ?>
	<?php echo $contact['contact_phone'] ?>
	<?php echo $contact['contact_mail'] ?>
	<?php echo $contact['contact_skype'] ?>
<?php endforeach ?>
</br>
<?php foreach ($footer as $footer): ?>
	</br>
	<?php echo $footer['footer_id'] ?>
	<?php echo $footer['footer_image'] ?>
	<?php echo $footer['footer_title'] ?>
	<?php echo $footer['footer_time'] ?>
	
<?php endforeach ?>
</br>
<?php foreach ($footer_img as $footer_img): ?>
	</br>
	<?php echo $footer_img['footer_img_id'] ?>
	<?php echo $footer_img['footer_img_img'] ?>
	
	
<?php endforeach ?>
</br>
<?php foreach ($highlight as $highlight): ?>
	</br>
	<?php echo $highlight['highlight_id'] ?>
	<?php echo $highlight['highlight_image'] ?>
	<?php echo $highlight['highlight_title'] ?>
	<?php echo $highlight['highlight_title1'] ?>
	<?php echo $highlight['highlight_money'] ?>
<?php endforeach ?>
</br>
<?php foreach ($link as $link): ?>
	</br>
	<?php echo $link['link_id'] ?>
	<?php echo $link['link_image'] ?>
	
	
<?php endforeach ?>
</br>
<?php foreach ($said as $said): ?>
	</br>
	<?php echo $said['said_id'] ?>
	<?php echo $said['said_nd'] ?>
	<?php echo $said['said_image'] ?>
	<?php echo $said['said_name'] ?>
	<?php echo $said['said_title'] ?>
<?php endforeach ?>
</br>
<?php foreach ($service as $service): ?>
	</br>
	<?php echo $service['service_id'] ?>
	<?php echo $service['service_icon'] ?>
	<?php echo $service['service_title'] ?>
	<?php echo $service['service_nd'] ?>
	
<?php endforeach ?>

