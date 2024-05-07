<?php

//creo una funzione che controlli che l'email inserita dall'utente
//contenga sia la '@' sia il '.', sfruttando la funzione str_contains()
//[nella funzione passiamo due parametri: ($variabile_in_cui_cercare, 'valore_da_controllare']

function controlEmail($email){

    //SE $email contiene '@' && '.'
    //ALLORA: ritorna TRUE [stampa un messaggio di successo]
    //ALTRIMENTI:
    //ritorna FALSE [stampa un messaggio di avviso]
    if (str_contains($email, '@') && str_contains($email, '.')) {

        return true;

    } else {

        return false;
    }
}
