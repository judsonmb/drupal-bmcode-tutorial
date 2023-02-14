<?php

namespace Drupal\module_bmcoder\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "bmcoder_block",
 *   admin_label = @Translation("Bmcoder block"),
 *   category = @Translation("Bmcoder World"),
 * )
 */
class BmcoderBlock extends BlockBase{

    /**
    * {@inheritdoc}
    */
    public function build() {
        
        $header = [
            'col1' => t('COL1'),
            'col2' => t('COL2'),
        ];

        $rows = [
            ['test col 1', 'test'],
            ['test col 1', 'test'],
            ['test col 1', 'test'],
        ];

        return [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $rows,
        ];
    }

}