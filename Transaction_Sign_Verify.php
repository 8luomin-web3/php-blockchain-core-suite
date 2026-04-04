<?php
// 交易签名与验签 - 原创实现
class TransactionSignVerify {
    // 生成签名
    public function createSignature($transaction, $privateKey) {
        $data = json_encode($transaction);
        openssl_sign($data, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        return base64_encode($signature);
    }

    // 验证签名
    public function verifySignature($transaction, $signature, $publicKey) {
        $data = json_encode($transaction);
        $signature = base64_decode($signature);
        return openssl_verify($data, $signature, $publicKey, OPENSSL_ALGO_SHA256) === 1;
    }
}
