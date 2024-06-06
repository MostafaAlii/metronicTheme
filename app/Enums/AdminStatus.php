<?php
namespace App\Enums;
enum AdminStatus: string {
    case ACTIVE = 'active';
    case IN_ACTIVE = 'inactive';
    case BLOCKED = "blocked";

    public static function status($value): string {
        if ($value == self::ACTIVE) {
            return '<span class="badge badge-success">Active</span>';
        } elseif ($value == self::IN_ACTIVE){
            return '<span class="badge badge-warning">Not Active</span>';
        } elseif ($value == self::BLOCKED){
            return '<span class="badge badge-danger">Block</span>';
        } else {
            return '<span class="badge badge-default"></span>';
        }
    }
}