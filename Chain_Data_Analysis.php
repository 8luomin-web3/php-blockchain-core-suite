<?php
// 链上数据统计分析 - 原创实现
class ChainDataAnalysis {
    // 统计总交易数
    public function getTotalTransactions($chain) {
        $count = 0;
        foreach ($chain as $block) {
            $count += count($block['transactions']);
        }
        return $count;
    }
}
