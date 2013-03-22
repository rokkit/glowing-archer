<h1>List contacts</h1>
<?php if ($this->session->userdata('user')): ?>
	<?php echo form_open('posts/create',array('class' => "" )); ?>
<textarea name="post[text]"></textarea>
		 
<input class="btn btn-primary" style="" type="submit" name="commit" value="Tweet" />
</form>
<ul>
<?php if (isset($posts) && $posts): ?>

	<?php foreach ($posts as $post): ?>

        <li><?php echo $post->text ?></li>


<?php endforeach ?>
</ul>
<?php else: ?>
	POSTS NOT FOUND
<?php endif; ?>
<?php endif ?>

