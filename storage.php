<?php

/**
 * Move storage to app/uploads
 *
 * @param string path
 *
 * @return string
 */
if (!function_exists('storage_path')) {
    function storage_path($path='') {
        if (!file_exists(__DIR__.'/../../uploads/lantern')) {
            mkdir(__DIR__.'/../../uploads/lantern');
        }

        return app()->storagePath('/../storage');
    }
}
