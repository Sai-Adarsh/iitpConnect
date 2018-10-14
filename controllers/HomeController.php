<?php
/**
 * @package    iitpConnect.Site
 *
 * @copyright  Copyright (C) 2018 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

class HomeController extends BaseController
{
  public $name  = 'sd';

  public function execute()
  {

  }

  public function getName()
  {
    $config = new Config();
    return $config->username;
  }
}
