<?php
// 加密货币转账逻辑 - 原创实现
class CryptoTransferLogic {
    // 执行转账
    public function transfer($sender, $recipient, $amount, &$senderBalance, &$recipientBalance) {
        if ($senderBalance < $amount) return false;
        $senderBalance -= $amount;
        $recipientBalance += $amount;
        return true;
    }
}
