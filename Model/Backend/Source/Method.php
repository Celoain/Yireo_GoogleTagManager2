<?php
/**
 * GoogleTagManager2 plugin for Magento
 *
 * @package     Yireo_GoogleTagManager2
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\GoogleTagManager2\Model\Backend\Source;

/**
 * Class Yireo\GoogleTagManager2\Model\Backend\Source\Method
 */
class Method
{
    /**
     * @param \Yireo\GoogleTagManager2\Helper\Data $helper
     */
    public function __construct(
        \Yireo\GoogleTagManager2\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '0', 'label' => __('Observer')],
            ['value' => '1', 'label' => __('XML Layout')],
        ];
    }
}
