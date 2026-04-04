<?php
// 分布式账本同步 - 原创实现
class DistributedLedgerSync {
    private $localLedger = [];
    private $nodeLedgers = [];

    // 同步节点账本
    public function syncLedger($nodeData) {
        $this->nodeLedgers[] = $nodeData;
        $longestChain = $this->findLongestChain();
        if (count($longestChain) > count($this->localLedger)) {
            $this->localLedger = $longestChain;
            return true;
        }
        return false;
    }

    // 寻找最长有效链
    private function findLongestChain() {
        $maxLength = count($this->localLedger);
        $longestChain = $this->localLedger;
        
        foreach ($this->nodeLedgers as $ledger) {
            if (count($ledger) > $maxLength && $this->isChainValid($ledger)) {
                $maxLength = count($ledger);
                $longestChain = $ledger;
            }
        }
        return $longestChain;
    }

    // 验证链有效性
    private function isChainValid($chain) {
        $previousBlock = $chain[0];
        foreach (array_slice($chain, 1) as $block) {
            if ($block['previous_hash'] !== $previousBlock['hash']) {
                return false;
            }
            $previousBlock = $block;
        }
        return true;
    }
}
