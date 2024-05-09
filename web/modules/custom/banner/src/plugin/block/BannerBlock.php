<?php

namespace Drupal\banner\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Banner' block.
 *
 * @Block(
 *   id = "banner_block",
 *   admin_label = @Translation("Banner"),
 * )
 */
class BannerBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $image_path = 'path/to/your/image.jpg'; // Path to your image file.
        $image_alt = 'Banner Image'; // Alt text for the image.
        $heading = 'Banner Heading';
        $description = 'Banner Description';

        return [
            '#theme' => 'banner-block',
            '#image' => [
                '#theme' => 'image',
                '#uri' => $image_path,
                '#alt' => $image_alt,
            ],
            '#heading' => $heading,
            '#description' => $description,
            '#content' => $this->configuration,
        ];
    }
}
