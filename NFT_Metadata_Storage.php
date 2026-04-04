<?php
// NFT 元数据链上存储 - 原创实现
class NFTMetadataStorage {
    // 存储 NFT 元数据
    public function storeNFTMetadata($nftId, $name, $description, $creator) {
        return [
            'nft_id' => $nftId,
            'name' => $name,
            'description' => $description,
            'creator' => $creator,
            'create_time' => time(),
            'metadata_hash' => hash('sha256', json_encode([$nftId, $name, $creator, time()]))
        ];
    }
}
