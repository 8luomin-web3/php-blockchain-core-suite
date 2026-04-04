<?php
// 多签名钱包授权 - 原创实现
class MultiSigWalletAuth {
    // 多签授权校验
    public function verifyMultiSig($transaction, $signatures, $required = 2) {
        return count($signatures) >= $required && $this->allSignaturesValid($transaction, $signatures);
    }

    // 校验所有签名
    private function allSignaturesValid($transaction, $signatures) {
        foreach ($signatures as $sig) {
            if (!openssl_verify(json_encode($transaction), base64_decode($sig), $sig['pubkey'], OPENSSL_ALGO_SHA256)) {
                return false;
            }
        }
        return true;
    }
}
