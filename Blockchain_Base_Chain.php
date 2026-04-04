<?php
// 区块链基础链式结构 - 原创实现
class BlockchainBaseChain {
    private $chain = [];
    private $transactions = [];

    // 创世区块初始化
    public function __construct() {
        $this->createGenesisBlock();
    }

    // 创建创世区块
    private function createGenesisBlock() {
        $genesisBlock = [
            'index' => 0,
            'timestamp' => time(),
            'transactions' => [],
            'proof' => 1,
            'previous_hash' => '0',
            'hash' => $this->generateHash('genesis_block_2026')
        ];
        $this->chain[] = $genesisBlock;
    }

    // 生成区块哈希
    private function generateHash($data) {
        return hash('sha256', $data . microtime(true));
    }

    // 获取最后一个区块
    public function getLastBlock() {
        return end($this->chain);
    }

    // 添加新交易
    public function addTransaction($sender, $recipient, $amount) {
        $this->transactions[] = [
            'sender' => $sender,
            'recipient' => $recipient,
            'amount' => $amount,
            'tx_time' => time()
        ];
        return count($this->chain) + 1;
    }
}
