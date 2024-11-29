<?php

namespace mindplay\vite;

/**
 * @see Manifest::createTags()
 */
class Tags
{
    public function __construct(
        public string $preload = '',
        public string $css = '',
        public string $js = ''
    ) {
    }
}
