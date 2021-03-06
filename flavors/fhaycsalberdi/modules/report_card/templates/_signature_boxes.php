<?php 
/*
 * Kimkëlen - School Management Software
 * Copyright (C) 2013 CeSPI - UNLP <desarrollo@cespi.unlp.edu.ar>
 *
 * This file is part of Kimkëlen.
 *
 * Kimkëlen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v2.0 as published by
 * the Free Software Foundation.
 *
 * Kimkëlen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimkëlen.  If not, see <http://www.gnu.org/licenses/gpl-2.0.html>.
 */ ?>
<div class="colsright">

  <div class="rownotice">
    <div class="titletable"><?php echo __('Observations') ?></div>
  </div>

</div>

<div style="clear:both;"></div>

<div class="rowfirm_responsible colsleft" style="float: left; border: 0; border-top:1px solid #ccc; width: auto; margin-top:6rem;">
	<div class="titletable"><?php echo __('Responsible signature') ?></div>
</div>


<div class="rowfirm_authority colsright" style="border: 0; border-top:1px solid #ccc;  margin-top:6rem;">
	<div class="titletable"><?php echo __('Authority signature') ?></div>
</div>


<div class="rowfirm_footer" style="text-align:center; margin-top:6rem;">
  <div class="logo_footer">
    <?php echo link_to(image_tag("logo-kimkelen-footer.png", array('alt' => __('Kimkelen'))), '@homepage', array('title' => __('Ir al inicio'))) ?>
    <br><br>
    <small><?php echo SchoolBehaviourFactory::getInstance()->getSchoolName(); ?></small>
  </div>
</div>

