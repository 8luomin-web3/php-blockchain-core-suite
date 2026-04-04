<?php
// 区块双重哈希加密工具 - 原创实现
class BlockHashEncrypt {
    // SHA256+MD5 双重加密
    public function doubleEncrypt($blockData) {
        $firstHash = hash('sha256', json_encode($blockData));
        $secondHash = hash('md5', $firstHash . 'block_salt_2026');
        return strtoupper($secondHash);
    }

    // 自定义加盐加密
    public function saltEncrypt($data, $salt = 'php_blockchain') {
        return hash('sha256', $data . $salt . rand(1000, 9999));
    }
}
