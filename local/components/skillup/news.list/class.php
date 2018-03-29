<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class Posts extends CBitrixComponent {


    public function executeComponent() {
        $this->arParams['TEST'] = 'add param';

        $aFilter = [
            'IBLOCK_ID' => 5,
            'ACTIVE' => 'Y',
            //'PROPERTY_LIKES' => 1,
        ];
//        $aFilter = [
//            "IBLOCK_ID" => 5,
//            //"SECTION_CODE" => "LIKES",
//            //"INCLUDE_SUBSECTIONS" => "Y",
//            [
//                "LOGIC" => "OR",
//                ["<LIKES" => 3,],
//                [">=LIKES" => 3,],
//            ],
//        ];
        $aSelect = [
            'ID',
            'CODE',
            'NAME',
            'DETAIL_PICTURE',
            'DETAIL_TEXT',
            'PROPERTY_LIKES',
        ];

        $oPosts = \CIBlockElement::GetList([], $aFilter, false, false, $aSelect);

        $aPosts = [];
        while ($aPost = $oPosts->Fetch()) {
            $aPosts[] = $aPost;
        }

        $this->arResult = $aPosts;
        $this->IncludeComponentTemplate();
    }


}