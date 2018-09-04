<?php
$now = new DateTime();

echo '<p>Inside php. Now is '.$now->format('Y-m-d H:i:s'). ' , timezone is '.$now->getTimezone()->getName().'</p>';

