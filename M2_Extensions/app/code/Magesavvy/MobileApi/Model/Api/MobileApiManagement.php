<?php
namespace Magesavvy\MobileApi\Model\Api;

class MobileApiManagement implements \Magesavvy\MobileApi\Api\MobileApiManagementInterface
{
    const SEVERE_ERROR = 0;
    const SUCCESS = 1;
    const LOCAL_ERROR = 2;
 
    protected $_mobileApiFactory;
 
    public function __construct(
        \Magesavvy\MobileApi\Model\MobileApiFactory $mobileApiFactory
 
    ) {
        $this->_mobileApiFactory = $mobileApiFactory;
    }
 
    /**
     * get mobile Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Magesavvy\MobileApi\Api\Data\MobileApiInterface
     */
    public function getApiData($id)
    {
        try {
            $model = $this->_mobileApiFactory
                ->create();
 
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }
 
            return $model;
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $returnArray['error'] = $e->getMessage();
            $returnArray['status'] = 0;
            $this->getJsonResponse(
                $returnArray
            );
        } catch (\Exception $e) {
            $this->createLog($e);
            $returnArray['error'] = __('unable to process request');
            $returnArray['status'] = 2;
            $this->getJsonResponse(
                $returnArray
            );
        }
    }
}