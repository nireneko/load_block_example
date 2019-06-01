<?php

namespace Drupal\nireneko\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Block\BlockBase;

/**
 * Class NirenekoDemoBlock
 *
 * @package Drupal\nireneko\Block
 *
 * @Block(
 *   id="neko_demo_block",
 *   admin_label=@Translation("Bloque de ejemplo"),
 *   category="Nireneko"
 * )
 */
class NirenekoDemoBlock extends BlockBase {

  /**
   * Ejemplo de un bloque creado con un plugin que extiende de BlockBase
   *
   * @return array
   *   A renderable array representing the content of the block.
   *
   * @see \Drupal\block\BlockViewBuilder
   */
  public function build() {

    $text = $this->t('Example of Nireneko plugin block');
    return [
      '#markup' => $text,
    ];

  }

}
