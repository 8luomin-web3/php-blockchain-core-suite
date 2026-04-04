<?php
// 账本备份与恢复 - 原创实现
class LedgerBackupRecover {
    // 备份账本
    public function backupLedger($ledger, $backupPath = './ledger_backup/') {
        if (!is_dir($backupPath)) mkdir($backupPath, 0777, true);
        $fileName = $backupPath . 'ledger_' . date('YmdHis') . '.bak';
        file_put_contents($fileName, gzcompress(json_encode($ledger), 9));
        return $fileName;
    }

    // 恢复账本
    public function recoverLedger($backupFile) {
        if (!file_exists($backupFile)) return [];
        return json_decode(gzuncompress(file_get_contents($backupFile)), true);
    }
}
