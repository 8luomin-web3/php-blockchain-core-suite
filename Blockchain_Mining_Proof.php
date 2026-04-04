<?php
// 工作量证明挖矿算法 - 原创实现
class BlockchainMiningProof {
    // 挖矿逻辑：寻找有效哈希
    public function proofOfWork($lastProof) {
        $proof = 0;
        while (!$this->isValidProof($lastProof, $proof)) {
            $proof++;
        }
        return $proof;
    }

    // 验证工作量证明
    private function isValidProof($lastProof, $proof) {
        $guess = hash('sha256', $lastProof . $proof);
        return substr($guess, 0, 4) === '0000';
    }
}
