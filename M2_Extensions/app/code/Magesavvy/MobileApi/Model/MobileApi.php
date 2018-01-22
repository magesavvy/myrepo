<?php
 
namespace Magesavvy\MobileApi\Model;
 
/**
 * Marketplace Product Model.
 *
 * @method \Magesavvy\Marketplace\Model\ResourceModel\Product _getResource()
 * @method \Magesavvy\Marketplace\Model\ResourceModel\Product getResource()
 */
class MobileApi  extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return 10;
    }
 
    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Magesavvy\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id)
    {
    }
 
    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return 'this is test title';
    }
 
    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \Magesavvy\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title)
    {
    }
 
    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return 'this is test api description';
    }
 
    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \Magesavvy\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc)
    {
    }
}