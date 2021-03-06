<?php

namespace ArrayUtil;

function min($array): float
{
  $minValue = $array[0];

  for ($flag = 1; $flag < sizeof($array); $flag++) {
    if ($minValue > $array[$flag])
      $minValue = $array[$flag];
  }

  return $minValue;
}

function max($array): float
{
  $maxValue = $array[0];

  for ($flag = 1; $flag < sizeof($array); $flag++) {
    if ($maxValue < $array[$flag])
      $maxValue = $array[$flag];
  }

  return $maxValue;
}

function range($length, $last = null, $step = null)
{
  $begin = is_null($last) ? 0 : $length;
  $end = $last ?? $length;
  $step = $step ?? 1;
  $result = [];

  for ($number = $begin; $number < $end; $number += $step) {
    $result[] = $number;
  }

  return $result;
}

function zip(...$arrays)
{
  $result = [];
  for ($index = 0; $index < sizeof($arrays); $index++) {
    $values = [];
    for ($array = 0; $array < sizeof($arrays); $array++)
      $values[] = $arrays[$array][$index];
    $result[] = $values;
  }
  return $result;
}

function uniq($array)
{
  $result = [];
  foreach ($array as $value) {
    if (!in_array($value, $result))
      $result[] = $value;
  }
  return $result;
}
