<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取符合条件的带宽包数量
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的带宽包数量
 * @method array getBandwidthPackageSet() 获取描述带宽包详细信息
 * @method void setBandwidthPackageSet(array $BandwidthPackageSet) 设置描述带宽包详细信息
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeBandwidthPackages返回参数结构体
 */
class DescribeBandwidthPackagesResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的带宽包数量
     */
    public $TotalCount;

    /**
     * @var array 描述带宽包详细信息
     */
    public $BandwidthPackageSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 符合条件的带宽包数量
     * @param array $BandwidthPackageSet 描述带宽包详细信息
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("BandwidthPackageSet",$param) and $param["BandwidthPackageSet"] !== null) {
            $this->BandwidthPackageSet = [];
            foreach ($param["BandwidthPackageSet"] as $key => $value){
                $obj = new BandwidthPackage();
                $obj->deserialize($value);
                array_push($this->BandwidthPackageSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}