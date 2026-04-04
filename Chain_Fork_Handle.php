<?php
// 区块链分叉处理 - 原创实现
class ChainForkHandle {
    // 切换至最长链
    public function switchToLongestChain($chains) {
        usort($chains, function($a, $b) {
            return count($b) - count($a);
        });
        return $chains[0];
    }
}
