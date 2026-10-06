<?php

    //Create function Total Score
    //Parameter: Array of Score
    function totalScore($arrScore){
        $sumScore = 0;
        foreach($arrScore as $score){
            $sumScore += $score;
        }
        return $sumScore;
    }

    //Count Subjects
    function countScore($arrScore){
        return count($arrScore);
    }

    //Average Score
    function averageScore($totalScore, $countScore){
        return $totalScore / $countScore;
    }

    //Grade Score
    function gradeScore($averageScore){
        if($averageScore < 50){
            return "Failed";
        }else{
            return "Passed";
        }
    }

    //Full Name
    function fullName($lastName, $firstName){
        return $lastName. " ".$firstName;
    }

    function mensions($agvScore){
        if($agvScore < 50){
            return "Failed";
        }elseif($agvScore >= 50 && $agvScore < 60){
            return "Pass";
        }elseif($agvScore >= 60 && $agvScore < 70){
            return "Good";
        }elseif($agvScore >= 70 && $agvScore < 80){
            return "Very Good";
        }elseif($agvScore >= 80 && $agvScore < 90){
            return "Excellent";
        }else{
            return "Outstanding";
        }
    }
?>