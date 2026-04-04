<?php
// 安全哈希迭代算法 - 原创实现
class SafeHashIterate {
    // 迭代哈希加密
    public function iterateHash($data, $times = 10) {
        $hash = $data;
        for ($i = 0; $i < $times; $i++) {
            $hash = hash('sha256', $hash . $i);
        }
        return $hash;
    }
}
