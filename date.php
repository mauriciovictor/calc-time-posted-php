<?php

$datePostFormated = new DateTime('2021-07-06 ' . date('h:i:s'));
$datePostFormated->format('d-m-Y h:i:s');

$currentDate = new DateTime();
$currentDate->format('d-m-Y h:i:s');

$diff_date = $datePostFormated->diff($currentDate);

function timePosted($days)
{
    if ($days == 0) {
        return 'postagem feita hoje';
    } else if ($days > 0 && $days <= 7 && $days == 1) {
        return "há ${days} dia";
    } else if ($days <= 7 && $days > 1) {
        return "há ${days} dias";
    } else if ($days >= 7 && $days <= 30) {
        $week = round($days / 7);
        if ($week == 1) {
            return "há ${week} semana";
        }
        return "há ${week} semanas";
    } else if ($days >= 30 && $days <= 365) {
        $month = round($days / 30);
        if ($month == 1) {
            return "há ${month} mês";
        }
        return "há ${month} meses";
    } else {
        $year = round($days / 365);
        if ($year == 1) {
            return "há ${year} ano";
        }
        return "há ${year} anos";
    }
}

$posted =  timePosted($diff_date->days);

echo $posted;
// $date_diff = $datePostFormated->date_diff($currentDate);
