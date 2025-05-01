<?php

namespace App\Services;

class Payfast
{
    public static function generateSignature(array $data, $passphrase = null)
    {
        // Remove empty values
        $data = array_filter($data, fn($value) => !is_null($value) && $value !== '');

        // Sort data alphabetically by key
        ksort($data);

        // Convert to query string format
        $signatureString = http_build_query($data, '', '&');

        // Append passphrase if set in PayFast settings
        if (!empty($passphrase)) {
            $signatureString .= '&passphrase=' . $passphrase;
        }

        // Generate MD5 hash
        return md5($signatureString);
    }
}

