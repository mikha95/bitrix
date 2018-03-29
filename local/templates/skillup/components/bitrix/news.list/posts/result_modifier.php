<?php

$aSize = [
    'width' => 100,
    'height' > 100,
];

foreach ($arResult['ITEMS'] as &$aItem) {

    processPost($aItem, $aSize);

    //echo '<pre>'; print_r($aPicture); exit;
}

function processPost(&$aPost, $aSize) {
    $aPicture = \CFile::ResizeImageGet($aPost['DETAIL_PICTURE'], $aSize, BX_RESIZE_IMAGE_EXACT, true);
    $aPost['DETAIL_PICTURE'] = $aPicture;

    $iAuthorId = $aPost['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
    $aPost['AUTHOR'] = $aPost['DISPLAY_PROPERTIES']['AUTHOR']['LINK_ELEMENT_VALUE'][$iAuthorId]['NAME'];
}