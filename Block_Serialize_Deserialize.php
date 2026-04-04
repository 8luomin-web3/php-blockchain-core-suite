<?php
// 区块序列化与反序列化 - 原创实现
class BlockSerializeDeserialize {
    // 序列化区块（压缩存储）
    public function serializeBlock($block) {
        return gzcompress(json_encode($block, JSON_UNESCAPED_UNICODE), 9);
    }

    // 反序列化区块（解析数据）
    public function deserializeBlock($compressedData) {
        return json_decode(gzuncompress($compressedData), true);
    }
}
