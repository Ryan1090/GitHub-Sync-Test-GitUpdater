<?php
/**
 * Plugin Name: Github Sync Test
 * Description: test wordpress <- github sync works test x29
 * Author: Ryan Marrington
 * GitHub Plugin URI: https://github.com/Ryan1090/GitHub-Sync-Test
 * Version: 1.0.5
 */

require __DIR__ . '/vendor/autoload.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$slug = basename(dirname(__FILE__));
$updateChecker = PucFactory::buildUpdateChecker(
  'https://github.com/Ryan1090/GitHub-Sync-Test',
  __FILE__,
  $slug,
);

$updateChecker->setBranch('main');

