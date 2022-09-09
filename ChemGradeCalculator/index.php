<?php
$Exam1 = $_POST['Exam1'];
$Exam2 = $_POST['Exam2'];

$Quiz0 = $_POST['Quiz0'];
$Quiz1 = $_POST['Quiz1'];
$Quiz2 = $_POST['Quiz2'];
$Quiz3 = $_POST['Quiz3'];
$Quiz4 = $_POST['Quiz4'];
$Quiz5 = $_POST['Quiz5'];
$Quiz6 = $_POST['Quiz6'];

$Report1 = $_POST['Report1'];
$Report2 = $_POST['Report2'];
$Report3 = $_POST['Report3'];
$Report4 = $_POST['Report4'];
$Report5 = $_POST['Report5'];
$Report6 = $_POST['Report6'];
$Report7 = $_POST['Report7'];
$Report8 = $_POST['Report8'];

$LabQuiz1 = $_POST['LabQuiz1'];
$LabQuiz2 = $_POST['LabQuiz2'];
$LabQuiz3 = $_POST['LabQuiz3'];
$LabQuiz4 = $_POST['LabQuiz4'];
$LabQuiz5 = $_POST['LabQuiz5'];
$LabQuiz6 = $_POST['LabQuiz6'];
$LabQuiz7 = $_POST['LabQuiz7'];
$LabQuiz8 = $_POST['LabQuiz8'];

$LabSafety = $_POST['LabSafety'];

$Exam1_Esacped = htmlspecialchars($Exam1);
$Exam2_Esacped = htmlspecialchars($Exam2);

$Quiz0_Escaped = htmlspecialchars($Quiz0);
$Quiz1_Escaped = htmlspecialchars($Quiz1);
$Quiz2_Escaped = htmlspecialchars($Quiz2);
$Quiz3_Escaped = htmlspecialchars($Quiz3);
$Quiz4_Escaped = htmlspecialchars($Quiz4);
$Quiz5_Escaped = htmlspecialchars($Quiz5);
$Quiz6_Escaped = htmlspecialchars($Quiz6);

$Report1_Escaped = htmlspecialchars($Report1);
$Report2_Escaped = htmlspecialchars($Report2);
$Report3_Escaped = htmlspecialchars($Report3);
$Report4_Escaped = htmlspecialchars($Report4);
$Report5_Escaped = htmlspecialchars($Report5);
$Report6_Escaped = htmlspecialchars($Report6);
$Report7_Escaped = htmlspecialchars($Report7);
$Report8_Escaped = htmlspecialchars($Report8);

$LabQuiz1_Escaped = htmlspecialchars($LabQuiz1);
$LabQuiz2_Escaped = htmlspecialchars($LabQuiz2);
$LabQuiz3_Escaped = htmlspecialchars($LabQuiz3);
$LabQuiz4_Escaped = htmlspecialchars($LabQuiz4);
$LabQuiz5_Escaped = htmlspecialchars($LabQuiz5);
$LabQuiz6_Escaped = htmlspecialchars($LabQuiz6);
$LabQuiz7_Escaped = htmlspecialchars($LabQuiz7);
$LabQuiz8_Escaped = htmlspecialchars($LabQuiz8);

$LabSafety_Escaped = htmlspecialchars($LabSafety);

$ExamTotal = $Exam1 + $Exam2;
$QuizTotal = $Quiz0 + $Quiz1 + $Quiz2 + $Quiz3 + $Quiz4 + $Quiz5 + $Quiz6;
$ReportTotal = $Report1 + $Report2 + $Report3 + $Report4 + $Report5 + $Report6 + $Report7 + $Report8;
$LabQuizTotal = $LabQuiz1 + $LabQuiz2 + $LabQuiz3 + $LabQuiz4 + $LabQuiz5 + $LabQuiz6 + $LabQuiz7 + $LabQuiz8;

$ExamAvg = (($ExamTotal) / 2) / 100;
$QuizAvg = (($QuizTotal) / 7) / 10;
$LabQuizAvg = (($LabQuizTotal) / 8) / 10;
$ReportAvg = (($ReportTotal) / 8) / 20;
$LabTotal = ($ReportAvg * 0.85) + ($LabQuizAvg * 0.10) + ($LabSafety * 0.05);
$TotalGrade = ($ExamAvg * 0.65) + ($QuizAvg * 0.10) + ($LabTotal * 0.25);

$ExamAvg_Formatted = number_format($ExamAvg, 2);
$QuizAvg_Formatted = number_format($QuizAvg, 2);
$LabQuizAvg_Formatted = number_format($LabQuizAvg, 2);
$ReportAvg_Formatted = number_format($ReportAvg, 2);
$TotalGrade_Formatted = number_format($TotalGrade, 2) . "%";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Chemistry Grade Calculator</title>
    <style>
        input {
            margin-bottom: 0.02in;
        }

        select {
            margin-bottom: 0.02in;
        }

        label {
            display: block;
            float: left;
            width: 140px;
        }
    </style>
</head>

<body>
    <main>
        <h1>General Chemistry 121 Grade Calculator</h1>
        <h2>Grade Form (Enter your grades in the corresponding parts)</h2>
        <p>The following is the information that you entered:</p><br>
        <strong>Exams</strong></br>
        <label>Exam 1:</label><span><?php echo $Exam1_Esacped . "/100"; ?></span><br />
        <label>Exam 2:</label><span><?php echo $Exam2_Esacped . "/100"; ?></span><br>

        <br><strong>Lecture Quiz</strong></br>
        <label>Quiz 0:</label><span><?php echo $Quiz0_Escaped . "/10"; ?></span><br />
        <label>Quiz 1:</label><span><?php echo $Quiz1_Escaped . "/10"; ?></span><br />
        <label>Quiz 2:</label><span><?php echo $Quiz2_Escaped . "/10"; ?></span><br />
        <label>Quiz 3:</label><span><?php echo $Quiz3_Escaped . "/10"; ?></span><br />
        <label>Quiz 4:</label><span><?php echo $Quiz4_Escaped . "/10"; ?></span><br />
        <label>Quiz 5:</label><span><?php echo $Quiz5_Escaped . "/10"; ?></span><br />
        <label>Quiz 6:</label><span><?php echo $Quiz6_Escaped . "/10"; ?></span><br />

        <br><strong>Lab</strong></br>
        <label>Report 1:</label><span><?php echo $Report1_Escaped . "/20"; ?></span><br />
        <label>Report 2:</label><span><?php echo $Report2_Escaped . "/20"; ?></span><br />
        <label>Report 3:</label><span><?php echo $Report3_Escaped . "/20"; ?></span><br />
        <label>Report 4:</label><span><?php echo $Report4_Escaped . "/20"; ?></span><br />
        <label>Report 5:</label><span><?php echo $Report5_Escaped . "/20"; ?></span><br />
        <label>Report 6:</label><span><?php echo $Report6_Escaped . "/20"; ?></span><br />
        <label>Report 7:</label><span><?php echo $Report7_Escaped . "/20"; ?></span><br />
        <label>Report 8:</label><span><?php echo $Report8_Escaped . "/20"; ?></span><br />

        <br><strong>Lab Quiz</strong></br>
        <label>Lab Quiz 1:</label><span><?php echo $LabQuiz1_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 2:</label><span><?php echo $LabQuiz2_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 3:</label><span><?php echo $LabQuiz3_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 4:</label><span><?php echo $LabQuiz4_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 5:</label><span><?php echo $LabQuiz5_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 6:</label><span><?php echo $LabQuiz6_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 7:</label><span><?php echo $LabQuiz7_Escaped . "/10"; ?></span><br />
        <label>Lab Quiz 8:</label><span><?php echo $LabQuiz8_Escaped . "/10"; ?></span><br />

        <br><strong>Lab Safety</strong></br>
        <label>Lab Safety:</label><span><?php echo $LabSafety_Escaped . "/5"; ?></span><br /><br>

        <label><strong>Averages</strong></label><br>
        <label>Exam Average:</label><span><?php echo $ExamAvg_Formatted . "/100"; ?></span><br />
        <label>Quiz Average:</label><span><?php echo $QuizAvg_Formatted . "/10"; ?></span><br />
        <label>Report Average:</label><span><?php echo $ReportAvg_Formatted . "/20"; ?></span><br />
        <label>Lab Quiz Average:</label><span><?php echo $LabQuizAvg_Formatted . "/10"; ?></span><br />
        <label>Total Grade Average:</label><span><?php echo $TotalGrade_Formatted; ?></span><br />
    </main>
</body>

</html>