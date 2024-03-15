<?php
namespace App\Http\Traits;

trait calcBMD {
    public function calcTscore($tscore,$fracture_history){
        $fractureHistory = $fracture_history :: $fracture_history ?? false;

        if ($tscore >= -1) {
            $result = "Bình thường";
        } elseif ($tscore > -2.5 && $tscore < -1) {
            $result = "Thiếu xương";
        } elseif ($tscore <= -2.5 && !$fractureHistory) {
            $result = "Loãng xương";
        } elseif ($tscore <= -2.5 && $fractureHistory) {
            $result = "Loãng xương nặng";
        } else {
            $result = "Không khớp với bất kỳ điều kiện nào";
        }

        return $result;
    }

    public function calcZscore($zscore,$fracture_history){
        $fractureHistory = $fracture_history :: $fracture_history ?? false;

        if ($zscore > 0) {
            $result = "BMD cao hơn giá trị trung bình của cùng độ tuổi";
        } elseif ($zscore == 0) {
            $result = "BMD đạt trung bình của cùng độ tuổi";
        } elseif ($zscore > -1.5 && $zscore < 0) {
            $result = "BMD thấp hơn giá trị trung bình của cùng độ tuổi - Phổ biến đối với phụ nữ tiền mãn kinh";
        } elseif ($zscore <= -2.0 && $fractureHistory) {
            $result = "Loãng xương";
        } else {
            $result = "Không khớp với bất kỳ điều kiện nào";
        }

        return response()->json(['result' => $result]);
    }
}
?>
