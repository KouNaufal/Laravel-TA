<?php

namespace App\Http\Controllers\API;

use App\Models\Sensor;
use Exception;
use Illuminate\Http\Request;

class ChartJSController extends Controller
{
    public function create()
    {
        try {
            $reqSuhudht = $request->input('suhudht');
            $reqKelembabandht = $request->input('kelembabandht');
            $reqSensorBerat = $request->input('sensorBerat');

            $sensor = new Sensor;
            $sensor->suhu = $reqSuhudht;
            $sensor->kelembaban = $reqKelembabandht;
            $sensor->berat = $reqSensorBerat;
            $sensor->save();

            echo "OK";
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";
        }
    }
}