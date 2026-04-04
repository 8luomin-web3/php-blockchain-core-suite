<?php
// 权益证明（PoS）共识算法 - 原创实现
class POSConsensusAlgorithm {
    // 根据权益选举记账节点
    public function electForger($stakes) {
        $totalStake = array_sum($stakes);
        $random = mt_rand(1, $totalStake);
        $current = 0;
        
        foreach ($stakes as $address => $stake) {
            $current += $stake;
            if ($current >= $random) {
                return $address;
            }
        }
        return array_key_first($stakes);
    }
}
