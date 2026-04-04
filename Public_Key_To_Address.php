<?php
// 公钥生成区块链地址 - 原创实现
class PublicKeyToAddress {
    // 公钥转地址
    public function pubKeyToAddress($publicKey) {
        $hash = hash('sha256', $publicKey);
        return '0x' . substr($hash, -40);
    }
}
