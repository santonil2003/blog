<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public static function r($data, $label = '')
    {
        $trace = debug_backtrace();
        $html = '';
        $html .= '<p style=background:red;padding:4px;margin:0px;>';
        $html .= ' Trace : ' . $trace[0]['file'] . ', Line :';
        $html .= '<b>' . $trace[0]['line'] . '</b>';
        $html .= '</p>';
        echo $html;
        if ($label) {
            echo $label . '<hr>';
        }
        echo '<pre style="background:#e0e0e0;padding:4px;margin:0px;clear:both;">';
        print_r($data);
        echo '</pre>';
    }

    public static function c($data)
    {
        $trace = debug_backtrace();
        $html = $trace[0]['file'] . ',' . $trace[0]['line'] . ' >>> ' . json_encode($data);
        echo '<script>console.log("' . $html . '")</script>';
    }
}
