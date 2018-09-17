<?php

namespace App\Http\Controllers;

use App\MatrixLog;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class MatrixController
 * @package App\Http\Controllers
 */
class MatrixController extends BaseController
{
    public function filter(Request $request)
    {
        $this->validate($request, [
            'services' => 'string',
            'statusCode' => 'integer',
            'fromDateTime' => 'date',
            'toDateTime' => 'date',
        ]);

        $query = MatrixLog::select();

        if($service = $request->get('services')) {
            $query = $query->where('serviceName', $service);
        }

        if($statusCode = $request->get('statusCode')) {
            $query = $query->where('statusCode', (int) $statusCode);
        }

        if($fromDateTime = $request->get('fromDateTime')) {
            $query = $query->where('dateTime', '>=', new \DateTime($fromDateTime));
        }

        if($toDateTime = $request->get('toDateTime')) {
            $query = $query->where('dateTime', '<=', new \DateTime($toDateTime));
        }

        return [
            'counter' => $query->count()
        ];
    }
}