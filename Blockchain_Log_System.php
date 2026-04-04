<?php
// 区块链操作日志系统 - 原创实现
class BlockchainLogSystem {
    // 记录日志
    public function writeLog($action, $data, $level = 'info') {
        $log = sprintf(
            "[%s] [%s] %s - %s\n",
            date('Y-m-d H:i:s'),
            strtoupper($level),
            $action,
            json_encode($data)
        );
        file_put_contents('./blockchain_logs.log', $log, FILE_APPEND);
        return true;
    }
}
