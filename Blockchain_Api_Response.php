<?php
// 区块链接口统一响应 - 原创实现
class BlockchainApiResponse {
    // 统一响应格式
    public function response($code = 200, $msg = 'success', $data = []) {
        header('Content-Type: application/json');
        echo json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
            'time' => time()
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }
}
