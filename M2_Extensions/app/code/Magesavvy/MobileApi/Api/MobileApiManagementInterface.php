<?php
 
namespace Magesavvy\MobileApi\Api;
 
interface MobileApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Magesavvy\MobileApi\Api\Data\MobileApiInterface
     */
    public function getApiData($id);
}