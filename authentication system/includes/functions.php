<?php

function input_sanitize($value)
{
  filter_var($value,FILTER_SANITIZE_SPECIAL_CHARS);
}
?>