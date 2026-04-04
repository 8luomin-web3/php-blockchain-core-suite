<?php
// 智能合约权限管理 - 原创实现
class ContractPermissionManager {
    private $permissions = [];

    // 授权合约调用
    public function grantPermission($contract, $address, $method) {
        $this->permissions[$contract][$address][] = $method;
        return true;
    }

    // 校验调用权限
    public function checkPermission($contract, $address, $method) {
        return isset($this->permissions[$contract][$address]) && in_array($method, $this->permissions[$contract][$address]);
    }
}
