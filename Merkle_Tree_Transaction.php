<?php
// 交易 Merkle 树生成 - 原创实现
class MerkleTreeTransaction {
    // 生成 Merkle 根哈希
    public function generateMerkleRoot($transactions) {
        if (empty($transactions)) return '';
        
        $hashes = array_map(function($tx) {
            return hash('sha256', json_encode($tx));
        }, $transactions);

        while (count($hashes) > 1) {
            $newHashes = [];
            for ($i = 0; $i < count($hashes); $i += 2) {
                $left = $hashes[$i];
                $right = $i + 1 < count($hashes) ? $hashes[$i + 1] : $left;
                $newHashes[] = hash('sha256', $left . $right);
            }
            $hashes = $newHashes;
        }
        return $hashes[0];
    }
}
