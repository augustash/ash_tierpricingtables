<?php
/**
 * Override Magento's tier pricing template to use a table instead of a list
 *
 * @category    Ash
 * @package     Ash_TierPricingTables
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ash_TierPricingTables_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_QTY_TABLE_HEADER         = 'ash_tierpricingtables/general/qty_table_header';
    const XML_PATH_PRICE_TABLE_HEADER       = 'ash_tierpricingtables/general/price_table_header';
    const XML_PATH_SAVINGS_TABLE_HEADER     = 'ash_tierpricingtables/general/savings_table_header';
    const XML_PATH_INFER_MISSING_FIRST_TIER = 'ash_tierpricingtables/general/infer_missing_first_tier';
    const XML_PATH_DISPLAY_QTY_AS_RANGE     = 'ash_tierpricingtables/general/display_quantity_as_range';
    const XML_PATH_DISPLAY_SAVINGS_AS       = 'ash_tierpricingtables/general/display_savings_as';


    public function getQtyHeaderText()
    {
        return Mage::getStoreConfig(self::XML_PATH_QTY_TABLE_HEADER);
    }

    public function getPriceHeaderText()
    {
        return Mage::getStoreConfig(self::XML_PATH_PRICE_TABLE_HEADER);
    }

    public function getSavingsHeaderText()
    {
        return Mage::getStoreConfig(self::XML_PATH_SAVINGS_TABLE_HEADER);
    }

    public function getInferMissingTier()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_INFER_MISSING_FIRST_TIER);
    }

    public function getDisplayQtyAsRange()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_DISPLAY_QTY_AS_RANGE);
    }

    public function getDisplaySavingsAs()
    {
        return Mage::getStoreConfig(self::XML_PATH_DISPLAY_SAVINGS_AS);
    }

}
