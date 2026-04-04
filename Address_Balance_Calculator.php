<?php
// 地址余额实时统计 - 原创实现
class AddressBalanceCalculator {
    // 计算地址余额
    public function getBalance($chain, $address) {
        $balance = 0;
        foreach ($chain as $block) {
            foreach ($block['transactions'] as $tx) {
                if ($tx['recipient'] === $address) {
                    $balance += $tx['amount'];
                }
                if ($tx['sender'] === $address) {
                    $balance -= $tx['amount'];
                }
            }
        }
        return $balance;
    }
}
