<?php

function calculateYear($iUnix)
{
    return intval((time() - $iUnix) / 60 / 60 / 24 / 360);
}

function dateBirthday($iUnix)
{
	$iDay = date('d',$iUnix);
	$iMounth = date('n',$iUnix);
	$iYear = date('Y',$iUnix);

	$sMounth = array(
		1 => 'Январь',
		2 => 'Февраль',
		3 => 'Март',
		4 => 'Апрель',
		5 => 'Май',
		6 => 'Июнь',
		7 => 'Июль',
		8 => 'Август',
		9 => 'Сентябрь',
		10 => 'Октябрь',
		11 => 'Ноябрь',
		12 => 'Декабрь',
		);

	return $iDay . ' ' . $sMounth[$iMounth] . ' ' . $iYear;
}