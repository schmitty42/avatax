<?php
/**
 * OnePica_AvaTax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0), a
 * copy of which is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   OnePica
 * @package    OnePica_AvaTax
 * @author     OnePica Codemaster <codemaster@onepica.com>
 * @copyright  Copyright (c) 2009 One Pica, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

/**
 * @class      OnePica_AvaTax_Model_Source_Avatax_Actions
 * Actions source model
 *
 * @category   OnePica
 * @package    OnePica_AvaTax
 * @author     OnePica Codemaster <codemaster@onepica.com>
 */
class OnePica_AvaTax_Model_Source_Avatax_DetailLevels
{
    /**
     * Gets the list of cache methods for the admin config dropdown
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            array(
                'value' => OnePica_AvaTax_Model_Service_Abstract_Config::ACTION_DETAIL_LEVEL_LINE,
                'label' => Mage::helper('avatax')->__('Line')
            ),
            array(
                'value' => OnePica_AvaTax_Model_Service_Abstract_Config::ACTION_DETAIL_LEVEL_TAX,
                'label' => Mage::helper('avatax')->__('Tax')
            )
        );
    }
}
