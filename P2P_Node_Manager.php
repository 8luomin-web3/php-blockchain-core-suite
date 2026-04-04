<?php
// P2P 网络节点管理 - 原创实现
class P2PNodeManager {
    private $nodes = [];

    // 注册节点
    public function registerNode($ip, $port) {
        $nodeId = md5($ip . $port . time());
        $this->nodes[$nodeId] = [
            'ip' => $ip,
            'port' => $port,
            'status' => 'online',
            'register_time' => time()
        ];
        return $nodeId;
    }

    // 获取在线节点
    public function getOnlineNodes() {
        return array_filter($this->nodes, function($node) {
            return $node['status'] === 'online';
        });
    }

    // 节点下线
    public function offlineNode($nodeId) {
        if (isset($this->nodes[$nodeId])) {
            $this->nodes[$nodeId]['status'] = 'offline';
            return true;
        }
        return false;
    }
}
