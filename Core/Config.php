<?php

namespace rs\mustfillfields\Core;

use OxidEsales\EshopCommunity\Core\Registry;

class Config extends Config_parent
{
    /**
     * overload oxid function
     *
     * @param $sParamName
     *
     * @return array
     */
    public function getConfigParam( $sParamName )
    {
        $Ret = parent::getConfigParam( $sParamName );
        if($sParamName=="aMustFillFields")
        {
            //only change this parameter
            $RetTmp=[];

            //allow all without prefix languageID|
            foreach ($Ret as $field) {
                if(strpos($field,"|")===false)
                    $RetTmp[]=$field;
            }

            //allow all with prefix languangeID| if languageID is current selected language in the shop
            $sLang = Registry::getLang()->getBaseLanguage()."|";
            foreach ($Ret as $field) {
                if(substr($field,0,strlen($sLang))==$sLang)
                {
                    $field=substr($field,strlen($sLang));
                    $RetTmp[]=$field;
                }
            }

            $Ret = $RetTmp;
        }
        return $Ret;
    }

}