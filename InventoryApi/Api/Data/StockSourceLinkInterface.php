<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents relation between Stock and Source entities. Also, it has own fields that are related to the domain model
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface StockSourceLinkInterface extends ExtensibleDataInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const LINK_ID = 'link_id';
    const STOCK_ID = 'stock_id';
    const SOURCE_CODE = 'source_code';
    /**#@-*/

    /**
     * Get link id
     *
     * @return int|null
     */
    public function getLinkId();

    /**
     * Set link id
     *
     * @param int|null $linkId
     * @return void
     */
    public function setLinkId($linkId);

    /**
     * Get stock id
     *
     * @return int|null
     */
    public function getStockId();

    /**
     * Set stock id
     *
     * @param int|null $stockId
     * @return void
     */
    public function setStockId($stockId);

    /**
     * Get source code of the link
     *
     * @return string|null
     */
    public function getSourceCode();

    /**
     * Set source code of the link
     *
     * @param string|null $sourceCode
     *
     * @return void
     */
    public function setSourceCode($sourceCode);

    /**
     * Retrieve existing extension attributes object
     *
     * Null for return is specified for proper work SOAP requests parser
     *
     * @return \Magento\InventoryApi\Api\Data\StockSourceLinkExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     *
     * @param \Magento\InventoryApi\Api\Data\StockSourceLinkExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(StockSourceLinkExtensionInterface $extensionAttributes);
}
