<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'messages' => 
  array (
    'Index' => 'Home',
    'Qui som' => 'Who are we',
    'Feines' => 'Works',
    'Presupost' => 'Budget',
  ),
));

$catalogueCa = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This value should be false.' => 'Aquest valor hauria de ser fals.',
    'This value should be true.' => 'Aquest valor hauria de ser cert.',
    'This value should be of type {{ type }}.' => 'Aquest valor hauria de ser del tipus {{ type }}.',
    'This value should be blank.' => 'Aquest valor hauria d\'estar buit.',
    'The value you selected is not a valid choice.' => 'El valor seleccionat no és una opció vàlida.',
    'You must select at least {{ limit }} choices.' => 'Ha de seleccionar almenys {{ limit }} opció.|Ha de seleccionar almenys {{ limit }} opcions.',
    'You must select at most {{ limit }} choices.' => 'Ha de seleccionar com a màxim {{ limit }} opció.|Ha de seleccionar com a màxim {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un o més dels valors facilitats són incorrectes.',
    'The fields {{ fields }} were not expected.' => 'No s\'esperaven els camps {{ fields }}.',
    'The fields {{ fields }} are missing.' => 'Falten els camps {{ fields }}.',
    'This value is not a valid date.' => 'Aquest valor no és una data vàlida.',
    'This value is not a valid datetime.' => 'Aquest valor no és una data i hora vàlida.',
    'This value is not a valid email address.' => 'Aquest valor no és una adreça d\'email vàlida.',
    'The file could not be found.' => 'No s\'ha pogut trobar l\'arxiu.',
    'The file is not readable.' => 'No es pot llegir l\'arxiu.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran ({{ size }} {{ suffix }}). La grandària màxima permesa és {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipus mime de l\'arxiu no és vàlid ({{ type }}). Els tipus mime vàlids són {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Aquest valor hauria de ser {{ limit }} o menys.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcter o menys.|Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcters o menys.',
    'This value should be {{ limit }} or more.' => 'Aquest valor hauria de ser {{ limit }} o més.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'Aquest valor és massa curt. Hauria de tenir {{ limit }} caràcters o més.',
    'This value should not be blank.' => 'Aquest valor no hauria d\'estar buit.',
    'This value should not be null.' => 'Aquest valor no hauria de ser null.',
    'This value should be null.' => 'Aquest valor hauria de ser null.',
    'This value is not valid.' => 'Aquest valor no és vàlid.',
    'This value is not a valid time.' => 'Aquest valor no és una hora vàlida.',
    'This value is not a valid URL.' => 'Aquest valor no és una URL vàlida.',
    'The two values should be equal.' => 'Els dos valors haurien de ser iguals.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran. El tamany màxim permés és {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'L\'arxiu és massa gran.',
    'The file could not be uploaded.' => 'No es pot pujar l\'arxiu.',
    'This value should be a valid number.' => 'Aquest valor hauria de ser un nombre vàlid.',
    'This file is not a valid image.' => 'L\'arxiu no és una imatge vàlida.',
    'This is not a valid IP address.' => 'Això no és una adreça IP vàlida.',
    'This value is not a valid language.' => 'Aquest valor no és un idioma vàlid.',
    'This value is not a valid locale.' => 'Aquest valor no és una localització vàlida.',
    'This value is not a valid country.' => 'Aquest valor no és un país vàlid.',
    'This value is already used.' => 'Aquest valor ja s\'ha utilitzat.',
    'The size of the image could not be detected.' => 'No s\'ha pogut determinar la grandària de la imatge.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'L\'amplària de la imatge és massa gran ({{ width }}px). L\'amplària màxima permesa són {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'L\'amplària de la imatge és massa petita ({{ width }}px). L\'amplària mínima requerida són {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altura de la imatge és massa gran ({{ height }}px). L\'altura màxima permesa són {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altura de la imatge és massa petita ({{ height }}px). L\'altura mínima requerida són {{ min_height }}px.',
    'This value should be the user current password.' => 'Aquest valor hauria de ser la contrasenya actual de l\'usuari.',
    'This value should have exactly {{ limit }} characters.' => 'Aquest valor hauria de tenir exactament {{ limit }} caràcter.|Aquest valor hauria de tenir exactament {{ limit }} caràcters.',
    'The file was only partially uploaded.' => 'L\'arxiu va ser només pujat parcialment.',
    'No file was uploaded.' => 'Cap arxiu va ser pujat.',
    'No temporary folder was configured in php.ini.' => 'Cap carpeta temporal va ser configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No es va poder escriure l\'arxiu temporal en el disc.',
    'A PHP extension caused the upload to fail.' => 'Una extensió de PHP va fer que la pujada fallara.',
    'This collection should contain {{ limit }} elements or more.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o més.|Aquesta col·lecció ha de contenir {{ limit }} elements o més.',
    'This collection should contain {{ limit }} elements or less.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o menys.|Aquesta col·lecció ha de contenir {{ limit }} elements o menys.',
    'This collection should contain exactly {{ limit }} elements.' => 'Aquesta col·lecció ha de contenir exactament {{ limit }} element.|Aquesta col·lecció ha de contenir exactament {{ limit }} elements.',
    'This form should not contain extra fields.' => 'Aquest formulari no hauria de contenir camps addicionals.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'L\'arxiu pujat és massa gran. Per favor, pugi un arxiu més petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no és vàlid. Per favor, provi d\'enviar novament el formulari',
  ),
  'messages' => 
  array (
    'Qui som' => 'Qui som',
  ),
));
$catalogue->addFallbackCatalogue($catalogueCa);


return $catalogue;
