<?php

$translations = array(
    "Domov" => "Home",
    "Používatelia" => "Users",
    "Odhlásenie" => "Logout",
    "Prihlásenie" => "Login",
    "Prihlásiť" => "Login",
    "Registrácia" => "Registration",
    "Registrovať" => "Register",
    "Jazyk" => "Language",
    "Hlasovací systém" => "Voting system",
    "Prihlásený ako" => "Login as",
    "Predmet" => "Subject",
    "Dátum vytvorenia" => "Date of creation",
    "Vytvoriť otázku" => "Create question",
    "Otázka č." => "Question n.",
    "otázka s výberom správnej odpovede" => "question with correct answer selection",
    "otázka s voľnou odpoveďou" => "question with open answer",
    "Aktívna" => "Active",
    "áno" => "yes",
    "nie" => "no",
    "UPRAVIŤ" => "EDIT",
    "KOPÍROVAŤ" => "COPY",
    "ZMAZAŤ" => "DELETE",
    "VÝSLEDKY HLASOVANIA" => "VOTING RESULTS",
    "UZATVORIŤ HLASOVANIE" => "CLOSE VOTING",
    "SPRÁVA POUŽÍVATEĽOV" => "USER MANAGMENT",
    "AKCIA" => "ACTION",
    "Momentálne žiadní používatelia" => "Currently no users",
    "POTVRĎTE VYMAZANIE" => "CONFIRM DELETE",
    "Naozaj chcete vymazať tohto používateľa?" => "Do you really want to delete this user?",
    "ZRUŠIŤ" => "CANCEL",
    "ÚSPEŠNE VYMAZANÉ" => "SUCCESSFULLY DELETED",
    "Uspešne ste odstránili používateľa." => "User successfully deleted.",
    "Pri odstráňovaní používateľa nastala chyba." => "An error occurred while deleting the user.",
    "ÚSPEŠNE ZMENENÉ" => "Successfully updated.",
    "Pri menení informácií o používateľovi nastala chyba." => "An error occurred while updating user information.",
    "Uspešne ste zmenili používateľa." => "User successfully updated.",
    "UPRAVIŤ POUŽÍVATEĽA" => "EDIT USER",
    "ROLA" => "ROLE",
    "HESLO" => "PASSWORD",
    "Heslo" => "Password",
    "Nové heslo" => "New password",
    "ULOŽIŤ" => "SAVE",
    "ZATVORIŤ" => "CLOSE",
    "Login je povinný" => "Login is required",
    "Login môže obsahovať iba písmená, číslice a podčiarkovníky." => "Login can only contain letters, digits, and underscores.",
    "Heslo je povinné." => "Password is required.",
    "Heslo musí mať aspoň 6 znakov." => "Password must be at least 6 characters long.",
    "Heslo a opakovanie hesla sa nezhodujú." => "Password and repeat password do not match.",
    "Používateľ s týmto loginom už existuje." => "User with this login already exists.",
    "REGISTRÁCIA ÚSPEŠNÁ" => "REGISTRATION SUCCESSFUL",
    "Váš účet bol úspešne vytvorený. Teraz sa môžete prihlásiť pod loginom, ktorý ste si zvolili." => "Your account has been successfully created. You can now log in with the username you have chosen.",
    "Zopakovať heslo" => "Repeat password",
    "Login je povinný." => "Login is required.",
    "Login môže obsahovať iba písmená, číslice a podčiarkovníky." => "Login can only contain letters, digits, and underscores.",
    "Nesprávne meno alebo heslo." => "Incorrect username or password.",
    "Popis otázky je povinný." => "Question description is required.",
    "Možná odpoveď " => "Possible answer ",
    " je povinná." => " is required.",
    "Vytvorenie novej otázky" => "Create a new question",
    "Otázka s výberom odpovede" => "Question with multiple choice",
    "Otázka s otvorenou odpoveďou" => "Question with open answer",
    "Popis otázky" => "Question description",
    "Možná odpoveď" => "Possible answer",
    "Aktívna otázka" => "Active question",
    "Pridať možnú odpoveď" => "Add possible answer",
    "Odobrať možnú odpoveď" => "Remove possible answer",
    "OTÁZKA ÚSPEŠNE VYTVORENÁ" => "QUESTION SUCCESSFULLY CREATED",
    "Úspešne ste vytvorili novú otázku." => "You have successfully created a new question.",
    "Popis otázky je povinný." => "Question description is required.",
    "Predmet otázky je povinný." => "Question subject is required.",
    "Neprihlásený používateľ" => "Unauthenticated user",

);

function translate($word) {
    global $translations;
    $currentLanguage = isset($_SESSION['currentLanguage']) ? $_SESSION['currentLanguage'] : "sk";
    if ($currentLanguage === 'sk') {
        return $word;
    } else {
        return isset($translations[$word]) ? $translations[$word] : $word;
    }
}


?>