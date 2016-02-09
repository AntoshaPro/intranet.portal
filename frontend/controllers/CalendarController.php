<?php

namespace frontend\controllers;

class CalendarController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    function build_calendar($month = false, $year = false)
    {
        if ($year == false)
        {
            $year = date("Y");
        }
        if ($month == false)
        {
            $month = date("m");
        }
        $seconds_in_a_day = 60*60*24;
        $start_day= mktime(0, 0, 0, $month, 1, $year);
        $date_array = getdate($start_day);
        $calendar = array();
        for($i = 0; $i < 6; $i++)
        {
            for ($j = 0; $j < 7; $j++)
            {
                $current_day = getdate($start_day);
                        if ($current_day["mon"] != $date_array["mon"]) break;
                        if ($current_day["wday"]-1 == $j && $current_day["wday"] != 0)
                        {
                            $calendar[$i][$j] = $current_day["mday"];
                            $start_day += $seconds_in_a_day;
                        }
                        else if ($current_day["wday"] == 0 && $j == 6)
                        {
                            $calendar[$i][$j] = $current_day["mday"];
                            $start_day += $seconds_in_a_day;
                        }
                        else
                        {
                            $calendar[$i][$j] = "";
                        }
                }
        }
        return $calendar;
}

}
