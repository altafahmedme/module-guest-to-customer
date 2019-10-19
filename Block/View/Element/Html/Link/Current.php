<?php
/**
 * Copyright © Ecomteck LLC, Inc. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */
namespace Ecomteck\GuestToCustomer\Block\View\Element\Html\Link;

use Magento\Framework\App\DefaultPathInterface;
use Magento\Framework\View\Element\Template\Context;
use Ecomteck\GuestToCustomer\Helper\Data;

/**
 * Class Current
 * @package Ecomteck\GuestToCustomer\Block\View\Element\Html\Link
 */
class Current extends \Magento\Framework\View\Element\Html\Link\Current
{

    /* @var Data*/
    protected $helperData;

    /**
     * Constructor
     *
     * @param Context $context
     * @param DefaultPathInterface $defaultPath
     * @param array $data
     * @param Data $helperData
     */
    public function __construct(
        Context $context,
        DefaultPathInterface $defaultPath,
        array $data = [],
        Data $helperData
    ) {
        parent::__construct($context, $defaultPath, $data);
        $this->helperData = $helperData;
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->helperData->isEnabledCustomerDashboard()) {
            return parent::_toHtml();
        }

        return '';
    }
}
