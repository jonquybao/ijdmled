<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

	Router::connect('/', array('controller' => 'products', 'action' => 'index'));
	Router::connect('/product/:slug', array('controller' => 'products', 'action' => 'view'), array('pass' => array('slug')));

	Router::connect('/product/shop/:type/:input', array('controller' => 'products', 'action' => 'shop'), array('pass' => array('type','input')));


	Router::connect('/brand/:slug/:size', array('controller' => 'brands', 'action' => 'view'), array('pass' => array('slug','size')));

	Router::connect('/category/:slug', array('controller' => 'categories', 'action' => 'view'), array('pass' => array('slug')));

	Router::connect('/sitemap.xml', array('controller' => 'products', 'action' => 'sitemap'));

	Router::connect('/admin', array('controller' => 'users', 'action' => 'dashboard', 'admin' => true));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


Router::parseExtensions('rss');

Router::connect(
  '/blog/:year/:month/*',
  array(
    'plugin' => 'blog',
    'controller' => 'blog_posts',
    'action' => 'index'
  ),
  array(
    'pass' => array('year', 'month'),
    'year' => '2[0-9]{3}',
    'month' => '0[1-9]|1[012]',
  )
);

Router::connect(
  '/blog/category/:category/*',
  array(
    'plugin' => 'blog',
    'controller' => 'blog_posts',
    'action' => 'index'
  ),
  array(
    'pass' => array('category'),
    'category' => '[a-zA-Z0-9\-\_]+',
  )
);

Router::connect(
  '/blog/tag/:tag/*',
  array(
    'plugin' => 'blog',
    'controller' => 'blog_posts',
    'action' => 'index'
  ),
  array(
    'pass' => array('tag'),
    'category' => '[a-zA-Z0-9\-\_]+',
  )
);

Router::connect(
  '/blog/:slug',
  array(
    'plugin' => 'blog',
    'controller' => 'blog_posts',
    'action' => 'view'
  ),
  array(
    'slug' => '[a-zA-Z0-9\-\_]+',
  )
);

Router::connect('/blog/*', array(
  'plugin' => 'blog',
  'controller' => 'blog_posts',
  'action' => 'index',
));

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
 CakePlugin::routes('Blog');
	//CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

