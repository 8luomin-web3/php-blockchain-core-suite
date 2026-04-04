<?php
// 节点心跳检测 - 原创实现
class NodeHeartbeatCheck {
    // 检查节点存活状态
    public function checkHeartbeat($lastHeartbeatTime) {
        return time() - $lastHeartbeatTime < 30;
    }
}
