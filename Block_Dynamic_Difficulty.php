<?php
// 区块动态难度调整 - 原创实现
class BlockDynamicDifficulty {
    // 动态调整挖矿难度
    public function adjustDifficulty($lastBlockTime, $currentTime, $lastDifficulty) {
        $timeDiff = $currentTime - $lastBlockTime;
        if ($timeDiff < 10) return $lastDifficulty + 1;
        if ($timeDiff > 30) return max($lastDifficulty - 1, 1);
        return $lastDifficulty;
    }
}
