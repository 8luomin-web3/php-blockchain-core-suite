<?php
// 区块链防篡改校验 - 原创实现
class BlockchainTamperCheck {
    // 校验整个链是否被篡改
    public function checkChainIntegrity($chain) {
        $previousHash = $chain[0]['hash'];
        
        foreach (array_slice($chain, 1) as $block) {
            $currentHash = $block['hash'];
            $computedHash = $this->computeBlockHash($block);
            
            if ($currentHash !== $computedHash || $block['previous_hash'] !== $previousHash) {
                return false;
            }
            $previousHash = $currentHash;
        }
        return true;
    }

    // 计算区块哈希
    private function computeBlockHash($block) {
        unset($block['hash']);
        return hash('sha256', json_encode($block));
    }
}
