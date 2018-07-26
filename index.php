<?php

//Faire une fonction qui retourne true.

function trou() {
    return true;
}

//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function panda($nourriture) {
    return $nourriture; 
};
echo panda("bambouuuuuuu <br><br>");

//Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines

function miam($nourriture, $action) {
    return $nourriture . " " . $action; 
};

echo miam("BigMac", "manger <br><br>");


//Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//Les deux nombres sont identiques si les deux nombres sont égaux

function math($nbr1, $nbr2) {
    if ($nbr1 > $nbr2) {
        echo "Le premier nombre est plus grand <br><br>";
    }
    else if ($nbr2 > $nbr1) {
        echo "Le premier nombre est plus petit <br><br>";
    }
    else {
        echo "Les deux nombres sont identique <br><br>";
    }
};

math(10, 11);

//Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

function strint($age, $chene) {
    return $age . $chene;
};

echo strint(29, "ans <br><br>");

//Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
//"Bonjour" + nom + prénom + ",tu as" + age + "ans".

function moa($nom, $prenom, $age)   {
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}

echo moa("Artus", "Wilfried", 29);

//Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
//Homme
//Femme
//La fonction doit renvoyer en fonction des paramètres :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.

function info($age, $genre)   {
    if ($age < 18 && $genre === "homme") {
        echo "Vous êtes un homme et vous êtes mineur <br><br>";
}
    else if ($age < 18 && $genre === "femme") {
        echo "Vous êtes une femmes et vous êtes mineur <br><br>";

}
    else if ($age > 18 && $genre === "homme") {
        echo "Vous êtes un homme et vous êtes majeur <br><br>";
}
    else {
        echo "Vous êtes une femme et vous êtes majeur <br><br>";
    }
};

info(29, "homme");

//Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
//Tous les paramètres doivent avoir une valeur par défaut.

function add($chi1, $chi2, $chi3) {
    $result = $chi1 + $chi2 + $chi3;
    echo $result;
};

echo add(5, 10, 15);
