<?php

namespace rtc\Request\V20180111;

/**
 * Request of DescribeStatis
 *
 * @method string getSortType()
 * @method string getStartTime()
 * @method string getDataType()
 * @method string getServiceArea()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getInterval()
 */
class DescribeStatisRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'rtc',
            '2018-01-11',
            'DescribeStatis',
            'rtc'
        );
    }

    /**
     * @param string $sortType
     *
     * @return $this
     */
    public function setSortType($sortType)
    {
        $this->requestParameters['SortType'] = $sortType;
        $this->queryParameters['SortType'] = $sortType;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $dataType
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        $this->requestParameters['DataType'] = $dataType;
        $this->queryParameters['DataType'] = $dataType;

        return $this;
    }

    /**
     * @param string $serviceArea
     *
     * @return $this
     */
    public function setServiceArea($serviceArea)
    {
        $this->requestParameters['ServiceArea'] = $serviceArea;
        $this->queryParameters['ServiceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }
}
