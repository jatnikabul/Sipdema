<?php

if (!function_exists('print_icon')) {
    function print_icon($icon)
    {
        if (strpos($icon, 'fa ') !== false) {
            return '<i class="' . $icon . '"></i>';
        } elseif (strpos($icon, 'fa-') !== false) {
            return '<i class="fa ' . $icon . '"></i>';
        }
    }
}

if (!function_exists('print_yes_no')) {
    function print_yes_no($number, $yes = 1, $no = 0)
    {
        if ($number == $yes) {
            return '<span class="label label-success">' . trans('label.yes') . '</span>';
        } elseif ($number == $no) {
            return '<span class="label label-danger">' . trans('label.no') . '</span>';
        }
    }
}

if (!function_exists('print_show_hide')) {
    function print_show_hide($number, $show = 1, $hide = 0)
    {
        if ($number == $show) {
            return '<span class="label label-success"><i class="fa fa-eye"></i> ' . trans('label.show') . '</span>';
        } elseif ($number == $hide) {
            return '<span class="label label-danger"><i class="fa fa-eye-slash"></i> ' . trans('label.hide') . '</span>';
        }
    }
}

if (!function_exists('lecture_type')) {
    function lecture_type($status)
    {
        if ($status == 0) {
            return '<span class="label label-info">Akademik</span>';
        } else if ($status == 1) {
            return '<span class="label label-danger">Tahfiz</span>';
        }
    }
}

if (!function_exists('table_image')) {
    function table_image($path)
    {
        return '<img width="150" height="150" id="images" class="img-responsive" src="' . asset(Storage::url($path->lecture_image->image)) . '">';
    }
}
