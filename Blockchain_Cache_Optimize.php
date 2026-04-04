<?php
// 区块链缓存优化 - 原创实现
class BlockchainCacheOptimize {
    private $cache = [];

    // 设置缓存
    public function setCache($key, $data, $ttl = 300) {
        $this->cache[$key] = [
            'data' => $data,
            'expire' => time() + $ttl
        ];
    }

    // 获取缓存
    public function getCache($key) {
        if (!isset($this->cache[$key]) || time() > $this->cache[$key]['expire']) {
            unset($this->cache[$key]);
            return null;
        }
        return $this->cache[$key]['data'];
    }
}
