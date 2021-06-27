<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    // public function index()
    // {
    //     return view('temperature');
    // }
    public function index(Request $request)
    {

        $temperature_origin_type = (isset($_POST['origin'])) ? $_POST['origin'] : '0';
        $temperature_goal_type = (isset($_POST['goal'])) ? $_POST['goal'] : '0';
        $temperature = (isset($_POST['temp'])) ? $_POST['temp'] : '1';
        $decimal_range = (isset($_POST['decimal_range'])) ? $_POST['decimal_range'] : '2';

        function get_formula()
        {
            $convert_formula = function ($temperature, $temperature_type_2 = 0, $temperature_type_1 = 0) {
                $ebulition_and_fusion_matrix_ordered_by_id = [
                    [100, 0], #celsius = 0
                    [212, 32], #Farenheint = 1
                    [373, 273], #Kelvin = 2
                    [80, 0], #Reaumur = 3
                    [671.67, 491.67], #Rankine = 4
                    [420, 69] #Luisius = 5
                ];
                return ($temperature - $ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_2][1]) * ($ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_1][0] - $ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_1][1]) / ($ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_2][0] - $ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_2][1]) + $ebulition_and_fusion_matrix_ordered_by_id[$temperature_type_1][1];
            };
            return $convert_formula;
        }

        function get_temperature_sufix_and_type($temperature_type)
        {
            if ($temperature_type == 0) {
                return ['°C', 'Celsius'];
            }
            if ($temperature_type == 1) {
                return ['°F', 'Farenheint'];
            }
            if ($temperature_type == 2) {
                return ['K', 'Kelvin'];
            }
            if ($temperature_type == 3) {
                return ['°Ré', 'Réaumur'];
            }
            if ($temperature_type == 4) {
                return ['°R', 'Rankine'];
            }
            if ($temperature_type == 5) {
                return ['°L', 'Luisius'];
            }
        }

        function set_card($temperature_origin_type, $temperature_goal_type, $temperature, $decimal_range)
        {
            [$origin_temperature_sufix, $origin_temperature_type]  = get_temperature_sufix_and_type($temperature_origin_type);
            [$goal_temperature_sufix, $goal_temperature_type]  = get_temperature_sufix_and_type($temperature_goal_type);
            $convert_formula = get_formula();
            $converted_temperature = number_format($convert_formula($temperature, $temperature_origin_type, $temperature_goal_type), $decimal_range);
            $card = [$origin_temperature_type, $goal_temperature_type, $temperature, $origin_temperature_sufix, $converted_temperature, $goal_temperature_sufix];
            return $card;
        }

        $card_answer = set_card($temperature_origin_type, $temperature_goal_type, $temperature, $decimal_range);
        $card_celsius = set_card($temperature_origin_type, 0, $temperature, $decimal_range);
        $card_farenheint = set_card($temperature_origin_type, 1, $temperature, $decimal_range);
        $card_kelvin = set_card($temperature_origin_type, 2, $temperature, $decimal_range);
        $card_reaumur = set_card($temperature_origin_type, 3, $temperature, $decimal_range);
        $card_rankine = set_card($temperature_origin_type, 4, $temperature, $decimal_range);
        $card_luisius = set_card($temperature_origin_type, 5, $temperature, $decimal_range);

        $card_list = [$card_answer, $card_celsius, $card_farenheint, $card_kelvin, $card_reaumur, $card_rankine, $card_luisius];

        return view('temperature', ['temperature_origin_type' => $temperature_origin_type, 'temperature_goal_type' => $temperature_goal_type, 'temperature' => $temperature, 'decimal_range' => $decimal_range, 'card_list' => $card_list]);
    }
}
