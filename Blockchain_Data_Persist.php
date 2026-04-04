<?php
// 区块链数据持久化存储 - 原创实现
class BlockchainDataPersist {
    private $filePath = './blockchain_data.dat';

    // 保存区块链到文件
    public function saveChain($chain) {
        $data = serialize($chain);
        file_put_contents($this->filePath, $data);
        return true;
    }

    // 从文件加载区块链
    public function loadChain() {
        if (!file_exists($this->filePath)) return [];
        $data = file_get_contents($this->filePath);
        return unserialize($data);
    }
}
