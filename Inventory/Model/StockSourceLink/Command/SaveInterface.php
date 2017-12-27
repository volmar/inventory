<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Inventory\Model\StockSourceLink\Command;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Validation\ValidationException;
use Magento\InventoryApi\Api\Data\StockSourceLinkInterface;

/**
 * Save StockSourceLink data command (Service Provider Interface - SPI)
 *
 * Separate command interface to which Repository proxies initial Save call, could be considered as SPI - Interfaces
 * that you should extend and implement to customize current behaviour, but NOT expected to be used (called) in the code
 * of business logic directly
 *
 * @see \Magento\InventoryApi\Api\StockSourceLinkRepositoryInterface
 * @api
 */
interface SaveInterface
{
    /**
     * Save StockSourceLink data
     *
     * @param StockSourceLinkInterface $stockSourceLink
     * @return int
     * @throws ValidationException
     * @throws CouldNotSaveException
     */
    public function execute(StockSourceLinkInterface $stockSourceLink): int;
}
