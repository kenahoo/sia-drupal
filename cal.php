<?php

set_include_path('.:/usr/local/php5/lib/php:/usr/local/lib/php:../downloads/ZendGdata-1.9.3PL1/library');
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata');
Zend_Loader::loadClass('Zend_Gdata_AuthSub');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
Zend_Loader::loadClass('Zend_Gdata_Calendar');

$gdataCal = new Zend_Gdata_Calendar();
$query = $gdataCal->newEventQuery();

// http://www.google.com/calendar/feeds/udeua73r967urub9mdtghfcgn0%40group.calendar.google.com/private-a4fc1e96338f3f32412dacb922ba1823/basic
$query->setUser('udeua73r967urub9mdtghfcgn0@group.calendar.google.com');
$query->setVisibility('private-a4fc1e96338f3f32412dacb922ba1823');
$query->setProjection('full');

$query->setOrderby('starttime');
$query->setMaxResults(500);
$query->setSortorder('ascending');
$query->setParam('singleevents','true');  # Expand recurrences


$eventFeed = $gdataCal->getCalendarEventFeed($query);
echo "<table>\n";
foreach ($eventFeed as $event) {
  echo "<tr>";
  $when = $event->when[0];
  $d1=new DateTime($when->startTime);
  $d2=new DateTime($when->endTime);
  echo "<td>".$d1->format('D')."</td>";
  echo "<td>".$d1->format('M j, Y')."</td>";
  echo "<td>".$d1->format('g:i a')." - ".$d2->format('g:i a')."</td>";

  echo "<td>" . $event->title->text . "</td>";
  echo "<td>" . $event->where[0] . "</td>";
  echo "<td>" . $event->content . "</td>";

  echo '</tr>';
}

echo '</table>';

?>