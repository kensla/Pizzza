<?php
/**
 * @package    Pizzza
 * @subpackage Views
 * @author     Nikolai Plath {@link https://github.com/elkuku}
 * @author     Created on 30-Aug-2012
 * @license    GNU/GPL
 */

//-- No direct access
defined('_JEXEC') || die('=;)');


?>
<?php if($this->params->def('show_page_title', 1)) : ?>
<div class="Pizzza">
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>

<!-- Here comes a <table> - please override.. -->
<?php if(($this->params->def('image', -1) != -1)
   || $this->params->def('show_comp_description', 1)) : ?>
<table width="100%" cellpadding="4" cellspacing="0" border="0" align="center"
	class="contentpane<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
<tr>
	<td valign="top" class="contentdescription<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php
        if(isset($this->image)) :
             echo $this->image;
        endif;

        echo $this->params->get('comp_description');
    ?>
	</td>
</tr>
</table>
<?php endif; ?>
<?php if( ! $this->categories) : ?>
<h3><?php echo JText::_('No_categories found'); ?></h3>
<?php endif; ?>
<ul>
<?php foreach($this->categories as $category) : ?>
	<li>
		<a href="<?php echo $category->link; ?>"
			class="category<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
			<?php echo $this->escape($category->title);?></a>
		&nbsp;
		<span class="small">
			(<?php echo $category->numitems;?>)
		</span>
	</li>
<?php endforeach; ?>
</ul>

</div>
