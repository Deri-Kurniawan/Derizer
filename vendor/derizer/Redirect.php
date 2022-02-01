<?php

namespace Derizer;

class Redirect
{
  public function to($url)
  {
    return header('location:' . baseUrl() . $url);
  }

  public function out($url)
  {
    return header('location:' . $url . '?utm_source=derizer web framework');
  }
}