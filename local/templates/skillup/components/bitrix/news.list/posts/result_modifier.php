<?php

$aSize = [
    'width' => 100,
    'height' > 100,
];

foreach ($arResult['ITEMS'] as $aItem) {

    $aPicture = \CFile::ResizeImageGet($aItem['DETAIL_PICTURE'], $aSize, BX_RESIZE_IMAGE_EXACT, true);
    $arResult['PICTURES'][$aItem['ID']] = $aPicture;

    //echo '<pre>'; print_r($aPicture); exit;
}