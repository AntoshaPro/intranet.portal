<?php

use tejrajs\fullcalendar\FullCalendar;
use \yii\bootstrap\Modal;
use kartik\social\FacebookPlugin;
use \yii\bootstrap\Collapse;
use \yii\bootstrap\Alert;
use yii\helpers\Html;


$this->title = 'Календарь';
?>
<div class="site-index">
    <div class="jumbotron">
        <?= FullCalendar::widget([
            'options' => ['id' => 'calender'],

            'config' => [
                'header' => ['left' => 'prev,next, today', 'center' => 'title', 'right' => ''],
                'defaultDate' => date('Y-m-d'),
                'editable' => false,
                'lang' => 'ru', // optional, if empty get app language
                'selectable' => true,
                'weekends' => true,
                'startEditable' => true,
                'displayEventTime' => false,
                'events' => [
                    [
                        'eventColor' => "#d40019",
                        'title' => 'Новогодние праздники',
                        'start' => '2016-01-01',
                        'end' => '2016-01-09',
                        'allDay' => true,
                        //'rendering' => 'background',
                        'color' => 'rgba(235, 2, 28, 0.66)',

                    ],

                    [
                        'title' => 'Рабочий день - 7:25',
                        'start' => '2016-01-30',
                        'end' => '2016-01-31',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Рабочий день - 7:25',
                        'start' => '2016-02-20',
                        'end' => '2016-02-21',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной день',
                        'start' => '2016-02-22',
                        'end' => '2016-02-24',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной',
                        'start' => '2016-03-7',
                        'end' => '2016-03-9',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной',
                        'start' => '2016-05-9',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной',
                        'start' => '2016-05-2',
                        'end' => '2016-05-04',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной',
                        'start' => '2016-06-13',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],
                    [
                        'title' => 'Выходной',
                        'start' => '2016-11-4',
                        'color' => 'rgba(235, 2, 28, 0.66)',
                    ],


                ],
            ],
        ]); ?>
    </div>
    <div class="body-content">

        <hr>
        <h3>Первый квартал</h3>

        <div class="table-responsive">
            <table class="table table-hover tabbold">
                <thead>
                <tr class="info">
                    <th></th>
                    <th>Январь</th>
                    <th>Февраль</th>
                    <th>Март</th>
                    <th>I кв.</th>
                </tr>
                <tr>
                    <th class="success" colspan="7">Количество дней</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Календарные</td>
                    <td>31</td>
                    <td>29</td>
                    <td>31</td>
                    <td>91</td>
                </tr>
                <tr>
                    <td>Рабочие</td>
                    <td>13</td>
                    <td>16</td>
                    <td>17</td>
                    <td>46</td>
                </tr>
                <tr class="red">
                    <td>Выходные, праздники</td>
                    <td>16</td>
                    <td>9</td>
                    <td>10</td>
                    <td>35</td>
                </tr>
                <tr>
                    <th class="success" colspan="7">Рабочее время (в часах)</th>
                </tr>
                <tr>
                    <td>40-часов. неделя</td>
                    <td>120</td>
                    <td>159</td>
                    <td>168</td>
                    <td>447</td>

                </tr>
                <tr>
                    <td>36-часов. неделя</td>
                    <td>108</td>
                    <td>143</td>
                    <td>151,2</td>
                    <td>402,2</td>

                </tr>
                <tr>
                    <td>24-часов. неделя</td>
                    <td>75,8</td>
                    <td>95</td>
                    <td>100,8</td>
                    <td>271,6</td>
                </tr>
                </tbody>
            </table>

            <hr>
            <h3>Второй квартал</h3>


            <table class="table tabbold table-hover">
                <thead>
                <tr class="info">
                    <th></th>
                    <th>Апрель</th>
                    <th>Май</th>
                    <th>Июнь</th>
                    <th>II кв.</th>
                    <th>1-е п/г</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="success" colspan="7">Количество дней</th>
                </tr>
                <tr>
                    <td>Календарные</td>
                    <td>30</td>
                    <td>31</td>
                    <td>30</td>
                    <td>91</td>
                    <td>182</td>
                </tr>
                <tr>
                    <td>Рабочие</td>
                    <td>21</td>
                    <td>19</td>
                    <td>21</td>
                    <td>61</td>
                    <td>107</td>
                </tr>
                <tr class="red">
                    <td>Выходные, праздники</td>
                    <td>9</td>
                    <td>12</td>
                    <td>9</td>
                    <td>30</td>
                    <td>65</td>
                </tr>
                <tr>
                    <th class="success" colspan="7">Рабочее время (в часах)</th>
                </tr>
                <tr>
                    <td>40-часов. неделя</td>
                    <td>168</td>
                    <td>152</td>
                    <td>168</td>
                    <td>488</td>
                    <td>935</td>
                </tr>
                <tr>
                    <td>36-часов. неделя</td>
                    <td>151,2</td>
                    <td>136,8</td>
                    <td>151,2</td>
                    <td>439,2</td>
                    <td>841,4</td>
                </tr>
                <tr>
                    <td>24-часов. неделя</td>
                    <td>100,8</td>
                    <td>91,2</td>
                    <td>100,8</td>
                    <td>292,8</td>
                    <td>564,4</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h3>Третий квартал</h3>                             <!-- ТРЕТИЙ КВАРТАЛ -->

            <table class="table tabbold table-hover">
                <thead>
                <tr class="info  uppercase">
                    <th></th>
                    <th>Июль</th>
                    <th>Август</th>
                    <th>Сентябрь</th>
                    <th>III кв.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="success" colspan="7">Количество дней</th>
                </tr>
                <tr>
                    <td>Календарные</td>
                    <td>31</td>
                    <td>31</td>
                    <td>30</td>
                    <td>92</td>
                </tr>
                <tr>
                    <td>Рабочие</td>
                    <td>16</td>
                    <td>19</td>
                    <td>17</td>
                    <td>52</td>
                </tr>
                <tr class="red">
                    <td>Выходные, праздники</td>
                    <td>10</td>
                    <td>8</td>
                    <td>8</td>
                    <td>26</td>
                </tr>
                <tr>
                    <th class="success" colspan="7">Рабочее время (в часах)</th>
                </tr>
                <tr>
                    <td>40-часов. неделя</td>
                    <td>168</td>
                    <td>184</td>
                    <td>176</td>
                    <td>528</td>
                </tr>
                <tr>
                    <td>36-часов. неделя</td>
                    <td>151,2</td>
                    <td>165,6</td>
                    <td>158,4</td>
                    <td>475,2</td>
                </tr>
                <tr>
                    <td>24-часов. неделя</td>
                    <td>100,8</td>
                    <td>110,4</td>
                    <td>105,6</td>
                    <td>316,8</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h3>Четвертый квартал</h3>

            <table class="table tabbold table-hover">
                <thead>
                <tr class="info">
                    <th></th>
                    <th>Октябрь</th>
                    <th>Ноябрь</th>
                    <th>Декабрь</th>
                    <th>IV кв.</th>
                    <th>2-е п/г</th>
                    <th><?=date('Y')?> г.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="success" colspan="7">Количество дней</th>
                </tr>
                <tr>
                    <td>Календарные</td>
                    <td>31</td>
                    <td>30</td>
                    <td>31</td>
                    <td>92</td>
                    <td>184</td>
                    <td>367</td>
                </tr>
                <tr>
                    <td>Рабочие</td>
                    <td>17</td>
                    <td>18</td>
                    <td>17</td>
                    <td>52</td>
                    <td>131</td>
                    <td>198</td>
                </tr>
                <tr class="red">
                    <td>Выходные, праздники</td>
                    <td>10</td>
                    <td>9</td>
                    <td>9</td>
                    <td>28</td>
                    <td>54</td>
                    <td>119</td>
                </tr>
                <tr>
                    <th class="success" colspan="7">Рабочее время (в часах)</th>
                </tr>
                <tr>
                    <td>40-часов. неделя</td>
                    <td>168</td>
                    <td>167</td>
                    <td>176</td>
                    <td>511</td>
                    <td>1039</td>
                    <td>1974</td>
                </tr>
                <tr>
                    <td>36-часов. неделя</td>
                    <td>151,2</td>
                    <td>150,2</td>
                    <td>158,4</td>
                    <td>459,8</td>
                    <td>935</td>
                    <td>1776,4</td>
                </tr>
                <tr>
                    <td>24-часов. неделя</td>
                    <td>100,8</td>
                    <td>99,8</td>
                    <td>105,6</td>
                    <td>306,2</td>
                    <td>623</td>
                    <td>1187,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


