
<?php

###################################################
######## Qui veux gagner des points ?! ##########
###################################################

###################################################

$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus petit océan du monde ?\n1.Océan Austral\n2.Océan Indien\n3.Océan Arctique\n",
    "Qui a écrit Roméo et Juliette ?\n1.Victor Hugo\n2.William Shakespeare\n3.Marcel Proust\n",
    "Quelle est la capitale de Belgique ?\n1.Liège\n2.Verviers\n3.Bruxelles\n"
];

$suspen = "\n\nSuspence !\n\n";

$reponses = [1, 2, 3, 2, 3];
$score = 0;

echo    "###################################################\n";
echo "                   score : $score\n";
echo    "###################################################\n\n";

$nb_questions = count($questions);
$rien = 0;

for ($i = 0; $i < $nb_questions; $i++) {
    echo "Question : " . $questions[$i] . "\n";
    $reponse_utilisateur = (int)trim(fgets(STDIN));
    echo $suspen;
    echo "La bonne répoonse : " . $reponses[$i] . "\n";

    // var_dump($i); // index des questions et reponses
    // Votre code

    if ($reponse_utilisateur === $reponses[$i]) {
        echo "La bonne répoonse + 10 points\n";
        $score = $score + 10;
        echo "new score \n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n";
    } else {
        $rien === $reponses;
        echo "Réponse erroné, suivante\n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n";
    }
}


echo "new score $score = points\n";

echo ($score / $nb_questions * 10) ."%\n\n";