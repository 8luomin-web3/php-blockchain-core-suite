<?php
// 自定义创世区块生成 - 原创实现
class GenesisBlockCustom {
    // 创建自定义创世区块
    public function createCustomGenesis($data) {
        return [
            'index' => 0,
            'timestamp' => time(),
            'data' => $data,
            'previous_hash' => '0',
            'hash' => hash('sha256', 'custom_genesis_' . json_encode($data))
        ];
    }
}
