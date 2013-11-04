<div id="body">
Здраствуйте <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
Welcome <b><?=$oUser->name?>!</b> (<?=calculateYear($oUser->birthday)?>)<br />
У вас <b><?=$iUserCountMess?></b> новых сообщений <br />
You have <b><?=$iUserCountMess?></b> new message <br />
Дата рождения: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
Date of Birth: <b><?=dateBirthday($oUser->birthday)?> г.</b> <br />
Место проживания: <?=$oUserState->city_name_ru?> <?=$oUserState->region_name_ru?> <?=$oUserState->country_name_ru?> <br />
Locations: <?=$oUserState->city_name_en?> <?=$oUserState->region_name_en?> <?=$oUserState->country_name_en?> <br />
</div>