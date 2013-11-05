<div id="body">
Здраствуйте <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
У вас <b><?=$iUserCountMess?></b> новых сообщений <br />
Дата рождения: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
Место проживания: <?=$oUserState->city_name_ru?> <?=$oUserState->region_name_ru?> <?=$oUserState->country_name_ru?> <br />
<br /><br /><br />
Welcome <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
Date of Birth: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
You have <b><?=$iUserCountMess?></b> new message <br />
Locations: <?=$oUserState->city_name_en?> <?=$oUserState->region_name_en?> <?=$oUserState->country_name_en?> <br />

</div>


