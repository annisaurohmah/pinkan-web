<?php

namespace App\Services;

class GoogleCloudService
{
    public function getIdentityToken()
    {
        $output = shell_exec('gcloud auth print-identity-token');
        return trim($output);
    }
}
