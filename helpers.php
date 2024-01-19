<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

// from ->  ../views/partials/head.php
// to -> views/partials/head.php

function basePath($path = '') {
  return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @ return void
 * 
 */

// from -> views/partials/head.php
// to -> 'home'
// so anytime we want to load a view we going to call that fx
function loadView($viewName) {
  require basePath("views/{$viewName}.view.php");
}

/**
 * Load a partial
 * 
 * @param string $name
 * @ return void
 * 
 */

// from -> views/partials/head.php
// to -> 'home'
// so anytime we want to load a view we going to call that fx
function loadPartial($partialName) {
  require basePath("views/partials/{$partialName}.php");
}