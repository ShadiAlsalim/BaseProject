<?php
namespace App\Services\company;

use App\Models\User;
use App\Models\company;
use App\Models\employee;
use Laravel\Sanctum\PersonalAccessToken;
use Throwable;

class ShowCompanyService
{
    public function show($request, $id)
    {
        $company = Company::find($id);
        if ($company) {
            return [
                'message' => 'found',
                'data' => $company
            ];
        } else {
            return [
                'message' => 'not found',
                'data' => []
            ];
        }
    }

    public function show_all($request)
    {
        $company = Company::get();
        if ($company) {
            return [
                'message' => 'found',
                'data' => $company
            ];
        } else {
            return [
                'message' => 'not found',
                'data' => []
            ];
        }
    }
}