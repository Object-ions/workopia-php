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
  $viewPath = basePath("views/{$viewName}.view.php");

  if (file_exists($viewPath)) {
    require $viewPath;
  } else {
    echo "The view '{$viewName}' not found";
  }
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
  $partialPath = basePath("views/partials/{$partialName}.php");

  if (file_exists($partialPath)) {
    require $partialPath;
  } else {
    echo "The partial: '{$partialName}' not found";
  }
}