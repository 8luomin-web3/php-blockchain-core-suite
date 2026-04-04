<?php
// 区块链浏览器核心接口 - 原创实现
class BlockchainExplorerCore {
    // 查询区块详情
    public function getBlockDetail($chain, $index) {
        return $chain[$index] ?? null;
    }

    // 查询交易详情
    public function getTransactionDetail($chain, $txHash) {
        foreach ($chain as $block) {
            foreach ($block['transactions'] as $tx) {
                if (md5(json_encode($tx)) === $txHash) {
                    return $tx;
                }
            }
        }
        return null;
    }
}
