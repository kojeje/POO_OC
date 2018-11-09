<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 09/11/2018
     * Time: 10:28
     */
    //    EN RESUME


//Une classe, c'est un ensemble de variables et de fonctions (attributs et méthodes).
//
//Un objet, c'est une instance de la classe pour pouvoir l'utiliser.
//
//Tous vos attributs doivent être privés. Pour les méthodes, peu importe leur visibilité. C'est ce qu'on appelle le principe d'encapsulation.
//
//On déclare une classe avec le mot-cléclasssuivi du nom de la classe, et enfin deux accolades ouvrantes et fermantes qui encercleront la liste des attributs et méthodes.

    class Personnage
    {
        private $_force;
        private $_localisation;
        private $_experience;
        private $_degats;

        // Nous déclarons une méthode dont le seul but est d'afficher un texte.
        public function parler()
        {
            echo 'Je suis un personnage !'. '<br>';
        }
    }

    $perso = new Personnage;
//    « va chercher l'objet$perso, et invoque la méthodeparler()sur cet objet »
    $perso->parler();

//    $perso->_experience = $perso->_experience + 1; // Une erreur fatale est levée suite à cette instruction.
//                                         CAR
        //  ********************************************************************************
        //  *  !!!!!!! On ne peut pas appeler un attribut en dehors de sa classe !!!!!!!!! *
        //  ********************************************************************************

//**************************************************************************************************************
//                Faire plutot
    class Personnage2
    {
        private $_experience;

        public function gagnerExperience()
        {
            // Cette méthode doit ajouter 1 à l'expérience du personnage.
        }
    }

    $perso2 = new Personnage2;
    $perso2->gagnerExperience();

//**************************************************************************************************************
    class Personnage3
    {
        private $_experience = 50;

        public function afficherExperience()
        {
            echo "Mon expérience est de " . $this->_experience;
        }

        public function gagnerExperience()
        {
            // On ajoute 1 à notre attribut $_experience.
            $this->_experience = $this->_experience + 1;
        }
    }

    $perso = new Personnage3;
    $perso->gagnerExperience();   // On gagne de l'expérience.
    $perso->afficherExperience(); // On affiche la nouvelle valeur de l'attribut.

//**************************************************************************************************************

    class Personnage4
    {
        private $_degats = 0; // Les dégâts du personnage.
        private $_experience = 0; // L'expérience du personnage.
        private $_force = 20; // La force du personnage (plus elle est grande, plus l'attaque est puissante).

        public function gagnerExperience()
        {
            // On ajoute 1 à notre attribut $_experience.
            $this->_experience = $this->_experience + 1;
        }
    }


