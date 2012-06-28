<?php
/**
 * SplClassLoader package
 *
 * @category   Forlang
 * @package    SplClassLoader
 * @copyright  (c) Yanguang Lan <lanyg.com@gmail.com>
 * @license    please view the LICENSE file that was distributed with this source code.
 */
 
namespace Forlang\Component\SplClassLoader

/**
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
 * See https://wiki.php.net/rfc/splclassloader
 *
 * @author Yanguang Lan <lanyg.com@gmail.com>
 */
interface SqlClassLoderInterface
{     
    /**
     * Define the autoloader work in debug mode.
     *
     * @param boolean $isDebug autoloader work debug mode.
     */
    public function debug($isDebug);
      
    /**
     * Add a new resource lookup path.
     *
     * @param string $resourceName Resource name, namespace or prefix.
     * @param mixed $resourcePath Resource single path or multiple paths (array).
     */
    public function add($resourceName, $resourcePath = null);
       
    /**
     * Load a resource through provided resource name.
     *
     * @param string $resourceName Resource name.
     */
    public function load($resourceName);
        
    /**
     * Register this as an antoloader instance.
     *
     * @param boolean $prepend Whether to prepend the autoloader or not in autoloader's list.
     */
    public function register($prepend = null);
         
    /**
     * Unregister this autoloader instance.
     */
    public function unregister();
}