<?php
// 批量交易打包 - 原创实现
class BatchTransactionPackage {
    // 批量打包交易
    public function packageBatchTxs($transactions, $maxCount = 100) {
        return array_chunk($transactions, $maxCount);
    }
}
