<?php

use App\Models\Feature;
use App\Models\ProductFeature;

function convertMoneyBraziltoUSA($value)
{
    $value = str_replace(',', '.', str_replace('.', '', $value));
    $value = floatval($value);

    return $value;
}
function convertMoneyUSAtoBrazil($value)
{
    $value = number_format($value, 2, ',', '.');

    return $value;
}

function convertDateBraziltoUSA($date)
{
    $date = implode("-", array_reverse(explode("/", $date)));

    return $date;
}

function convertDateUSAtoBrazil($date)
{
    // $date = implode("/", array_reverse(explode("-", $date)));
    $date = date("d/m/Y", strtotime($date));
    return $date;
}

function getNameFile($originalImage, $name)
{
    $extension = '.' . File::extension($originalImage->getClientOriginalName());
    $fileName = $name . date('Ymd') . time() . microtime();
    $fileName = str_replace('.', '', $fileName);
    $fileName = str_replace(' ', '', $fileName) . $extension;

    return $fileName;
}

function filterFeatures(array $products_id)
{
    $features_id = ProductFeature::whereIn('product_id', $products_id)->pluck('feature_id')->toArray();
    $features = Feature::whereIn('id', $features_id)->whereNotNull('feature_id')->pluck('feature_id')->toArray();
    $mainFeatures = Feature::whereIn('id', $features+$features_id)->whereNull('feature_id')->get();
    return $mainFeatures;
}

