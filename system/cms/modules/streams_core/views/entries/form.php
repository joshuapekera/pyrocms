<?php if ($fields): ?>

<?php echo form_open_multipart('', 'class="streams_form"'); ?>

<div class="form_inputs">

	<ul>

	<?php foreach ($fields as $field) { ?>

		<li class="<?php  echo in_array(str_replace($stream->stream_slug.'-'.$stream->stream_namespace.'-', '', $field['input_slug']), $hidden) ? 'hidden' : null;  ?>">
			<?php echo $field['input_row']; ?>
		</li>

	<?php } ?>

	</ul>

</div>

<?php if ($mode == 'edit') { ?><input type="hidden" value="<?php echo $entry->id;?>" name="row_edit_id" /><?php } ?>

<div class="float-right buttons">
	<button type="submit" name="btnAction" value="save" class="btn green"><?php echo lang('buttons:save'); ?></button>
	
	<?php if (! empty($exitRedirect)): ?>
	<button type="submit" name="btnAction" value="save_exit" class="btn green"><?php echo lang('buttons:save_exit'); ?></button>
	<?php endif; ?>

	<?php if (! empty($createRedirect)): ?>
	<button type="submit" name="btnAction" value="save_create" class="btn green"><?php echo lang('buttons:save_create'); ?></button>
	<?php endif; ?>

	<?php if (! empty($continueRedirect)): ?>
	<button type="submit" name="btnAction" value="save_continue" class="btn green"><?php echo lang('buttons:save_continue'); ?></button>
	<?php endif; ?>

	<a href="<?php echo site_url(isset($cancelUri) ? $cancelUri : 'admin/streams/entries/index/'.$stream->id); ?>" class="btn gray"><?php echo lang('buttons:cancel'); ?></a>		
</div>


<?php if (isset($disableFormOpen) and ! $disableFormOpen): echo form_close(); endif; ?>

<?php else: ?>

<div class="no_data">
	<?php

		if (isset($noFieldsMessage) and $noFieldsMessage) {
			echo lang_label($noFieldsMessage);
		} else {
			echo lang('streams:no_fields_msg_first');
		}

	?>
</div><!--.no_data-->

<?php endif;
