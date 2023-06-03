
    var languageSelect = document.getElementById("talen_select");
    var description = document.getElementById("royal_ring_description");
    var xavier = document.getElementById("employees-description-xavier");
    var karen = document.getElementById("employees-description-karen");
    var max = document.getElementById("employees-description-max");

    function changeLanguageDutch() {
        description.innerHTML = "Royal Ring is een online webshop dat juwelen verkoopt. Royal Ring verkoop mannelijke horloges en verschillende soorten ringen, we verkopen heren-,trouw-, verlovingsringen."
        +
        " Het goud en de diamanten dat zich op/in de horloge/ring bevind is echt."
        + 
        " Er is geen gebruik gemaakt van koper, alles is gemaakt met metaal. ";
        //End Description

        xavier.innerHTML = 
        "Hallo, mijn naam is Xavier en ik ben 47."
        +"Ik hou van computers en wandelen."
        +"Ik speel graag MW2 en Payday 2 allebei op mijn computer."
        +"Ik heb zeven kinderen en twee vrouwen."
        +"Ik ben verantwoordelijk voor het ontwerpen van de Royal Ring website en het helpen van klanten."+
        " Ik hou van mijn werk.";

        //End xavier



        karen.innerHTML = 
                " Hallo mijn naam is Karen en ik ben een werknemer voor Royal Ring."
                + 
                "Mijn hobby is samen zijn met mijn kinderen."
                + 
                "Ik ben de directeur van de medewerkers en ik ben verantwoordelijk voor de boekhouding en de organisatie."
                +
                "Ik kijk toe hoe mijn collega's hun werk doen. Ik ben een moeder van 2 kinderen.";

        //End karen
        
        max.innerHTML = 
                " Hoi, ik ben Max en ik ben 25. "
                +"Ik hou van auto's en ik hou van fietsen. "
                +"Ik speel graag op de computer. "
                +"Ik speel Formule 1 en MW2 met Xavier. "
                +"Ik heb geen kinderen en geen vrouw. Ik bezorg pakjes voor RoyalRing. Ik ben erg snel.";

        //end max
    }

    function changeLanguageFrench() {
        description.innerHTML = 
        "Royal Ring est une boutique en ligne qui vend des bijoux. Royal Ring vend des montres pour hommes et différents types de bagues, nous vendons des bagues pour hommes, des bagues de mariage, des bagues de fiançailles."
        +
        " L'or et les diamants présents sur la montre/la bague sont authentiques."
        + 
        " Aucun cuivre n'a été utilisé, tout est fait avec du métal. " ;
        //End Description

        xavier.innerHTML = 
        "Bonjour, je m'appelle Xavier et j'ai 47 ans."
        +"J'aime l'informatique et la randonnée."
        +"J'aime jouer à MW2 et Payday 2 sur mon ordinateur." +"J'ai sept enfants et deux femmes."
        +"J'ai sept enfants et deux femmes."
        +"Je suis responsable de la conception du site web de Royal Ring et de l'aide aux clients. "+
        " J'aime mon travail.";

        //End xavier



        karen.innerHTML = 
                " Bonjour, je m'appelle Karen et je suis employée chez Royal Ring."
                + 
                "Mon hobby est d'être avec mes enfants."
                + 
                "Je suis le directeur des employés et je suis responsable de la comptabilité et de l'organisation."
                +
                "Je regarde mes collègues travailler. Je suis mère de 2 enfants" ;

        //End karen
        
        max.innerHTML = 
                " Bonjour, je m'appelle Max et j'ai 25 ans."
                +"J'aime les voitures et j'aime les vélos. "
                +"J'aime jouer sur l'ordinateur. "
                +"Je joue à Formula 1 et MW2 avec Xavier. "
                +"Je n'ai pas d'enfants ni de femme. Je livre des colis pour RoyalRing. Je suis très rapide";
        //end max
    }

    function changeLanguageEnglish() {
        description.innerHTML = 
        "Royal Ring is an online shop that sells jewellery. Royal Ring sells men's watches and different types of rings, we sell men's rings, wedding rings, engagement rings."
        +
        "The gold and diamonds on the watch/ring are authentic."
        + 
        "No copper has been used, everything is made with metal. " ;
        //End Description

        xavier.innerHTML = 
        "Hello, my name is Xavier and I'm 47."
        +"I like computers and hiking."
        +"I like to play MW2 and Payday 2 on my computer." 
        +"I have seven children and two wives."
        +"I'm responsible for designing the Royal Ring website and helping customers. "
        +"I love my job";

        //End xavier



        karen.innerHTML = 
                "Hello, my name is Karen and I work at Royal Ring."
                + 
                "My hobby is being with my children."
                + 
                "I'm the employee manager and I'm responsible for accounts and organisation."
                +
                "I watch my colleagues work. I'm the mother of 2 children";

        //End karen
        
        max.innerHTML = 
                "Hello, my name is Max and I'm 25."
                +"I like cars and I like bikes. "
                +"I like playing on the computer. "
                +"I play Formula 1 and MW2 with Xavier. "
                +"I have no children and no wife. I deliver parcels for RoyalRing. I'm very fast";
        //end max
    }



    function updateDescription() {
        if (languageSelect.value === "nl") {
            changeLanguageDutch();
        } else if (languageSelect.value === "fr") {
            changeLanguageFrench();
        } else if (languageSelect.value === "en") {
            changeLanguageEnglish();
        }
    }

    languageSelect.addEventListener('change', updateDescription);

    document.addEventListener('DOMContentLoaded', updateDescription);
    /**When page is loaded! */



