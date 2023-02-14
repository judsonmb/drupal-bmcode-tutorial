<?php

namespace Drupal\module_bmcoder;

class BmcoderArticleService {

    public function getBmcoderArticles() {

        $nodes = \Drupal::entityTypeManager()
                    ->getStorage('node')->load('1');

        kint($nodes);

        return 'This is custom service';
    }
}



?>