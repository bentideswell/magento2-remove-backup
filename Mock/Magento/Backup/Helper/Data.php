<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Backup\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return false;
    }
}
