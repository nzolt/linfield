<?php

/**
 * Class EchoMage_Linfield_Helper_Data
 */
class EchoMage_Linfield_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return string
     */
    public function isMandatory()
    {
        return Mage::getStoreConfig('customer/linkedingroup/linfield_required');
    }

}
	 