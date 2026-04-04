<?php
// 简易智能合约执行器 - 原创实现
class SmartContractSimpleExecutor {
    // 执行合约方法
    public function executeContract($contractCode, $method, $params) {
        try {
            $contract = new $contractCode();
            return $contract->$method(...$params);
        } catch (Exception $e) {
            return '执行失败：' . $e->getMessage();
        }
    }
}
