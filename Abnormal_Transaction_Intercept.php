<?php
// 异常交易拦截 - 原创实现
class AbnormalTransactionIntercept {
    // 拦截大额异常交易
    public function isAbnormal($amount, $limit = 10000) {
        return $amount > $limit;
    }

    // 拦截重复交易
    public function isDuplicate($tx, $historyTxs) {
        return in_array($tx, $historyTxs);
    }
}
