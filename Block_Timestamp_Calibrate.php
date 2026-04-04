<?php
// 区块时间戳校准 - 原创实现
class BlockTimestampCalibrate {
    // 校准时间戳
    public function calibrateTimestamp($timestamp) {
        $now = time();
        return abs($timestamp - $now) > 3600 ? $now : $timestamp;
    }
}
