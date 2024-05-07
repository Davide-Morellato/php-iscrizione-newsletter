<?php

//richiamo il valore inserito nell'input
//impostando una verifica per il campo input
//affinchè non venga visualizzato errore all'apertura della pagina
//($_POST['valore_del_name_di_input'] ?? '')

$email = $_POST['email'] ?? '';


//creo una funzione che controlli che l'email inserita dall'utente
//contenga sia la '@' sia il '.', sfruttando la funzione str_contains()
//[nella funzione passiamo due parametri: ($variabile_in_cui_cercare, 'valore_da_controllare']

function controlEmail($email){

    //CONTROLLO CHE SE $email è strettamente uguale a null
        //all'apertura della pagina trovo scritto un messaggio di avviso
    // if($email === ''){

    //     echo '<div class="alert alert-dark w-25" role="alert"> Nessuna Email Inserita </div>';

    // } else {

        //SE $email contiene '@' && '.'
            //ALLORA: ritorna TRUE [stampa un messaggio di successo]
        //ALTRIMENTI:
            //ritorna FALSE [stampa un messaggio di avviso]
        if(str_contains($email, '@') && str_contains($email, '.')){
    
            // echo "<div class=\"alert alert-success w-25\" role=\"alert\"> L\'email $email è stata inserita con successo. </div>";
            
            return true;

        } else {
    
            // echo '<div class="alert alert-warning w-25" role="alert"> L\'email deve includere . e @. Si prega di riprovare. </div>';
            
            return false;
        }
    // }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Iscrizione Newsletter</title>
</head>
    <body style="background-color: brown;" class="text-center">
        
        <form class="m-5 text-center" action="" method="post">
            <div class="pb-3">
                <label class="d-block pb-3 fs-5 fw-bold" for="email"> Inserisci qui la tua Email: </label>
                <input type="text" name="email">
            </div>

            <div>
                <button class="btn btn-dark"> Invio </button>
            </div>
        </form>

        <div class="d-flex justify-content-center">

            <!-- SE L'INPUT E' VUOTO STAMPA L'ALERT "Nessuna Email Inserita"  -->
            <?php if($email === '') { ?>
                <div class="alert alert-dark w-25" role="alert"> Nessuna Email Inserita </div>

            <!-- DOPO L'INSERIMENTO DELL'EMAIL, SE LA FUNZIONE CHE HA COME PARAMETRO IL VALORE DELL'INPUT E' TRUE 
                 ALLORA STAMPA L'ALERT: "L'email <?= $email; ?> è stata inserita con successo!" -->

            <?php } elseif (controlEmail($email) === true) { ?>
                <div class="alert alert-success w-25" role="alert"> L'email <?= $email; ?> è stata inserita con successo! </div>

            <!-- ALTRIMENTI, AVENDO LA FUNZIONE CHE HA COME PARAMETRO IL VALORE DELL'INPUT FALSE 
                 ALLORA STAMPA L'ALERT: "L'email deve includere . e @. Si prega di riprovare!" -->
                 
            <?php } else { ?>
                <div class="alert alert-warning w-25" role="alert">
                    <p>
                        L'email deve includere . e @. 
                    </p>
                    <p>
                        Si prega di riprovare!
                    </p>
                </div>
            <?php } ?>
        </div>
    </body>
</html>