<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once 'phpgraphlib-master/phpgraphlib.php';
include_once 'phpgraphlib-master/phpgraphlib_pie.php';
include_once 'phpgraphlib-master/phpgraphlib_stacked.php';
$graph = new PHPGraphLib(500,360, "foo.png");
$data = array(12124, 5535, 43373, 22223, 90432, 23332, 15544, 24523, 32778, 38878, 28787, 33243, 34832, 32302);

$graph->addData($data);
$graph->setTitle("SEA Campagain 07/2015: Clicks per Day");
$graph->setGradient('yellow', 'teal');
$graph->createGraph();

unset($graph);

$graph = new PHPGraphLib(320,450, "foo2.png");
$data = array("Jan"=>-1324, "Feb"=>-1200, "Mar"=>-100, "Apr"=>-1925, "May"=>-1444,
    "Jun"=>-957, "Jul"=>-364, "Aug"=>-221, "Sep"=>-1300, "Oct"=>-848, "Nov"=>-719, "Dec"=>-114);
$graph->addData($data);
$graph->setBarColor('255,255,204');
$graph->setTitle('Money Made at Bedrock Studies  Corp');
$graph->setTextColor('gray');
$graph->createGraph();
?>
<div style="text-align: center">
    <img src="foo.png" alt="Graph1"/>
</div>



<img src="foo2.png" alt="Graph2"/>

<hr>

<div style="float: left">
    <img src="foo.png" alt="Graph1"/>
</div>
<div style="float: left">
    <img src="foo2.png" alt="Graph2"/>
</div>

<hr>


<table>
    <tr>
        <td><img src="foo.png" alt="Graph1"/></td>
        <td><img src="foo2.png" alt="Graph2"/></td>
    </tr>
</table>

