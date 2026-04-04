<?php
// 随机数种子区块生成 - 原创实现
class RandomBlockGenerator {
    // 生成随机种子区块
    public function createRandomBlock($previousHash) {
        return [
            'index' => time(),
            'timestamp' => time(),
            'random_seed' => bin2hex(random_bytes(32)),
            'previous_hash' => $previousHash,
            'hash' => hash('sha256', random_bytes(64))
        ];
    }
}
