<?php
function isEntity($class) {
    return class_exists($class, false) || interface_exists($class, false)
        || trait_exists($class, false) || enum_exists($class);
}