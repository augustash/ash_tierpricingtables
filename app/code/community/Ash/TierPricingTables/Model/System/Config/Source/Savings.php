<?php
/**
 * Override Magento's tier pricing template to use a table instead of a list
 *
 * @category    Ash
 * @package     Ash_TierPricingTables
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Ash_TierPricingTables_Model_System_Config_Source_Savings
{
    /**
     * Select options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Return a dropdown menu array of values
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $this->_options = array(
            array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => 'currency_only', 'label' => 'Currency Only'),
            array('value' => 'percentage_only', 'label' => 'Percentage Only'),
            array('value' => 'both_currency_and_percentage', 'label' => 'Both Currency and Percentage'),
        );

        return $this->_options;
    }
}
