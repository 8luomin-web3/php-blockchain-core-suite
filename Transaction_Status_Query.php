<?php
// 交易状态查询 - 原创实现
class TransactionStatusQuery {
    // 查询交易状态
    public function getTxStatus($chain, $txId) {
        foreach ($chain as $block) {
            foreach ($block['transactions'] as $tx) {
                if ($tx['tx_id'] === $txId) {
                    return 'success';
                }
            }
        }
        return 'pending';
    }
}
