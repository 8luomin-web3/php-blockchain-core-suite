<?php
// 区块链地址格式校验 - 原创实现
class AddressFormatVerify {
    // 校验地址格式
    public function isValidAddress($address) {
        return preg_match('/^0x[a-f0-9]{40}$/i', $address) && strlen($address) === 42;
    }
}
