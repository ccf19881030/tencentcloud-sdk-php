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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvId() 获取账户下该环境唯一标识
 * @method void setEnvId(string $EnvId) 设置账户下该环境唯一标识
 * @method string getSource() 获取环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
 * @method void setSource(string $Source) 设置环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
 * @method string getAlias() 获取备注名
 * @method void setAlias(string $Alias) 设置备注名
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取最后修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改时间
 * @method string getStatus() 获取环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>HALTED：停服，用量超限或后台封禁</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method void setStatus(string $Status) 设置环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>HALTED：停服，用量超限或后台封禁</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method array getDatabases() 获取数据库列表
 * @method void setDatabases(array $Databases) 设置数据库列表
 * @method array getStorages() 获取存储列表
 * @method void setStorages(array $Storages) 设置存储列表
 * @method array getFunctions() 获取函数列表
 * @method void setFunctions(array $Functions) 设置函数列表
 * @method string getPackageId() 获取套餐ID。包含以下取值：
<li>baisc ：表示基础版</li>
<li>professional ：表示专业版</li>
<li>business ： 表示企业版</li>
<li>flagship：表示旗舰版</li>
<li>supremacy：表示至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置套餐ID。包含以下取值：
<li>baisc ：表示基础版</li>
<li>professional ：表示专业版</li>
<li>business ： 表示企业版</li>
<li>flagship：表示旗舰版</li>
<li>supremacy：表示至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取套餐中文名称。包含以下取值：
<li>基础版</li>
<li>专业版</li>
<li>企业版</li>
<li>旗舰版</li>
<li>至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置套餐中文名称。包含以下取值：
<li>基础版</li>
<li>专业版</li>
<li>企业版</li>
<li>旗舰版</li>
<li>至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *环境信息
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string 账户下该环境唯一标识
     */
    public $EnvId;

    /**
     * @var string 环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
     */
    public $Source;

    /**
     * @var string 备注名
     */
    public $Alias;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间
     */
    public $UpdateTime;

    /**
     * @var string 环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>HALTED：停服，用量超限或后台封禁</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     */
    public $Status;

    /**
     * @var array 数据库列表
     */
    public $Databases;

    /**
     * @var array 存储列表
     */
    public $Storages;

    /**
     * @var array 函数列表
     */
    public $Functions;

    /**
     * @var string 套餐ID。包含以下取值：
<li>baisc ：表示基础版</li>
<li>professional ：表示专业版</li>
<li>business ： 表示企业版</li>
<li>flagship：表示旗舰版</li>
<li>supremacy：表示至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 套餐中文名称。包含以下取值：
<li>基础版</li>
<li>专业版</li>
<li>企业版</li>
<li>旗舰版</li>
<li>至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;
    /**
     * @param string $EnvId 账户下该环境唯一标识
     * @param string $Source 环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
     * @param string $Alias 备注名
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 最后修改时间
     * @param string $Status 环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>HALTED：停服，用量超限或后台封禁</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     * @param array $Databases 数据库列表
     * @param array $Storages 存储列表
     * @param array $Functions 函数列表
     * @param string $PackageId 套餐ID。包含以下取值：
<li>baisc ：表示基础版</li>
<li>professional ：表示专业版</li>
<li>business ： 表示企业版</li>
<li>flagship：表示旗舰版</li>
<li>supremacy：表示至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 套餐中文名称。包含以下取值：
<li>基础版</li>
<li>专业版</li>
<li>企业版</li>
<li>旗舰版</li>
<li>至尊版</li>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new DatabasesInfo();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("Storages",$param) and $param["Storages"] !== null) {
            $this->Storages = [];
            foreach ($param["Storages"] as $key => $value){
                $obj = new StorageInfo();
                $obj->deserialize($value);
                array_push($this->Storages, $obj);
            }
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = [];
            foreach ($param["Functions"] as $key => $value){
                $obj = new FunctionInfo();
                $obj->deserialize($value);
                array_push($this->Functions, $obj);
            }
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
