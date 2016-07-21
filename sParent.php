<?php
$parent = $modx->resource->get('parent');

while($parent != $id && $parent != 0){
    $parent = $modx->getObject('modResource',$parent);
    $parent = $parent ->get('parent');
}

$pdoTools = $modx->getService('pdoTools');

if($parent == $id){
    $output = $pdoTools->getChunk($tpl);
}

return $output;
