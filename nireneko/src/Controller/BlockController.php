<?php


namespace Drupal\nireneko\Controller;


use Drupal\Core\Block\BlockManager;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class BlockController
 *
 * Esto es un ejemplo de como cargar bloques y renderizarlos, teneis el articulo
 * en la pagina del blog: https://nireneko.com/articulo/2019/06/mostrar-bloques-programando-drupal-8
 *
 * Espero que sea suficiente, y se entienda entre el articulo y este codigo de ejemplo.
 *
 * Si teneis dudas sobre que tipo de bloque necesitais cargar, id al articulo,
 * se explica como distinguirlos para saber cual es el codigo necesario.
 *
 * @package Drupal\nireneko\Controller
 */
class BlockController extends ControllerBase {

  /**
   * @var \Drupal\Core\Block\BlockManager
   */
  protected $blockManager;

  /**
   * @var \Drupal\Core\Entity\EntityTypeManager
   */
  protected $entityTypeManager;

  /**
   * BlockController constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManager $entityTypeManager
   * @param \Drupal\Core\Block\BlockManager $blockManager
   */
  public function __construct(EntityTypeManager $entityTypeManager, BlockManager $blockManager) {
    $this->entityTypeManager = $entityTypeManager;
    $this->blockManager = $blockManager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('plugin.manager.block')
    );
  }

  /**
   * Este metodo es el que responde a la ruta /nireneko/block.
   *
   * El codigo esta comentado, para que no falle al ejecutarlo y podais verlo.
   * El primero es un bloque de contenido, el segundo un bloque de configuracion
   * y el ultimo de un bloque creado con un plugin.
   *
   * Para ver el primer y segundo ejemplo, tendreis que crear los bloques, el
   * tercero utiliza el bloque que esta en este mismo modulo.
   *
   * Todo se renderiza en la plantilla llamada "nireneko_block", que la podeis
   * encontrar en la carpeta "templates" de este mismo modulo.
   */
  public function displayBlocks() {

    $build = [
      '#theme' => 'nireneko_block',
    ];



    /**
     * Estamos cargando un bloque de contenido del sitio, estos bloques se crean
     * desde "Añadir bloque personalizado" dentro del menu Estructura -> Bloques.
     */
//    $block_content_id = 1;
//    $block = $this->entityTypeManager->getStorage('block_content')->load($block_content_id);
//    $build['#block_content'] = $this->entityTypeManager->getViewBuilder('block_content')->view($block);


    /**
     * Estamos cargando un bloque de configuracion del sitio, en este caso, uno
     * con la ID 'piedepagina' que corresponde al menu "Pie de pagina" en este ejemplo.
     */
//    $block_config_id = 'piedepagina';
//    $block = $this->entityTypeManager->getStorage('block')->load($block_config_id);
//    $build['#block_config'] = $this->entityTypeManager->getViewBuilder('block')->view($block);



    /**
     * Aqui estamos cargando el bloque creado con un plugin, en este caso, se
     * carga el que viene de ejemplo con este modulo en la clase NirenekoDemoBlock
     * y tiene la ID 'neko_demo_block'.
     */
//    $config = [];
//    $block_plugin_id = 'neko_demo_block';
//    $plugin_block = $this->blockManager->createInstance($block_plugin_id, $config);
//    $build['#block_plugin'] = $plugin_block->build();

    return $build;
  }
}
