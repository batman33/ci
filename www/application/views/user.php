<div id="body">
Здраствуйте <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
Welcome <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
У вас <b><?=$iUserCountMess?></b> новых сообщений <br />
You have <b><?=$iUserCountMess?></b> new message <br />
Дата рождения: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
Date of Birth: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
Место проживания: <?=$oUserState->city_name_ru?> <?=$oUserState->region_name_ru?> <?=$oUserState->country_name_ru?> <br />
Locations: <?=$oUserState->city_name_en?> <?=$oUserState->region_name_en?> <?=$oUserState->country_name_en?> <br />

<?=sprintf(lang('data_new_message'), $iUserCountMess)?><br />
<?=anchor(site_url('welcome/posts'),lang('link_post'));?><br />
<?=anchor(site_url('welcome'),lang('link_back_home'));?><br />
<?=anchor($this->lang->switch_uri('ru'),'Display current page in Russian');?><br />
<?=anchor($this->lang->switch_uri('en'),'Display current page in Engish');?><br />

<?=site_url('about/my_work');?><br />
<?=site_url('css/styles.css');?>
</div>


