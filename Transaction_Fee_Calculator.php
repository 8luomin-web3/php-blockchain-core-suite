<?php
// 交易手续费计算 - 原创实现
class TransactionFeeCalculator {
    // 计算手续费（按金额比例）
    public function calculateFee($amount, $rate = 0.001) {
        $fee = $amount * $rate;
        return max($fee, 0.0001);
    }
}
