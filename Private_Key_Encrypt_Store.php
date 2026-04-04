<?php
// 私钥加密存储 - 原创实现
class PrivateKeyEncryptStore {
    // 加密私钥
    public function encryptPrivateKey($privateKey, $password) {
        $key = hash('sha256', $password, true);
        $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($privateKey, 'aes-256-cbc', $key, 0, $iv);
        return base64_encode($iv . $encrypted);
    }
}
