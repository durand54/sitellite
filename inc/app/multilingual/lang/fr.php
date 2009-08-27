<?php

// BEGIN KEEPOUT CHECKING
// Add these lines to the very top of any file you don't want people to
// be able to access directly.
if (! defined ('SAF_VERSION')) {
  header ('HTTP/1.1 404 Not Found');
  echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n"
      . "<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>\n"
      . "The requested URL " . $PHP_SELF . " was not found on this server.<p>\n<hr>\n"
      . $_SERVER['SERVER_SIGNATURE'] . "</body></html>";
  exit;
}
// END KEEPOUT CHECKING

$this->lang_hash['fr'] = array (
	'<br/><pre>Example: Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec</pre>' => '<br /><pre> Exemple: Jan, Fév, Mar, Avr, Mai, Jun, Jul, Aoû, Sep, Oct, Nov, Déc</pre>',
	'<br/><pre>Example: January, February, March, April, May, June, July, August, September...</pre>' => '<br /><pre> Exemple: Janvier, Février, Mars, Avril, Mai, Juin, Juillet, Août, Septembre...</pre>',
	'<br/><pre>Example: Sun, Mon, Tue, Wed, Thu, Fri, Sat</pre>' => '<br /><pre>Exemple: dim, lun, mar, mer, jeu, ven, sam</pre>',
	'<br/><pre>Example: Sunday, Monday, Tuesday, Wednesday, Thusday, Friday, Saturday</pre>' => '<br /><pre>Exemple: Dimanche, Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi</pre>',
	'<br/><pre>Example: am, pm</pre>' => '<br /><pre>Exemple: am, pm</pre>',
	'<br/><pre>Example: st, nd, rd, th</pre>' => '<br><pre>Exemple: er,,,</pre>',
	'AM / PM' => 'AM / PM',
	'Add Date Format' => 'Ajouter un format de date',
	'Add Language' => 'Ajouter une langue',
	'Adding Date Strings' => 'Ajout de chaînes de dates',
	'An Error Occurred' => 'Une erreur est survenue',
	'Applications' => 'Applications',
	'Attempt to create failed.' => 'La tentative de création a échoué.',
	'Back' => 'Retour',
	'Cancel' => 'Annuler',
	'Cannot write to language folder' => 'Impossible d\'écrire dans le dossier de langues',
	'Cannot write to languages folder' => 'Impossible d\'écrire dans le dossier de langues',
	'Cannot write to the language file' => 'Impossible d\'écrire dans le fichier de langue',
	'Changelog' => 'Journal',
	'Character Set' => 'Jeu de caractères',
	'Character Set (ie. ISO-8859-1)' => 'Jeu de caractères (ex: ISO-8859-1)',
	'Choose a template' => 'Choisissez un modèle',
	'Choose an application' => 'Sélectionnez une application',
	'Code' => 'Code',
	'Collection' => 'Collection',
	'Complete' => 'Terminé',
	'Content Type' => 'Type de contenu',
	'Creating Index' => 'Création de l\'index',
	'Dates' => 'Dates',
	'Days of week' => 'Jours de la semaine',
	'Days of week (3 letters form)' => 'Jours de la semaine (3 lettres)',
	'Default' => 'Par défaut',
	'Delete Selected' => 'Supprimer la sélection',
	'Document ID' => 'ID de document',
	'Documents' => 'Documents',
	'Editing Date Strings' => 'Édition des chaînes de dates',
	'Editing Language' => 'Édition des langues',
	'Empty Index' => 'Index vide',
	'Example' => 'Exemple',
	'Expired' => 'Périmé',
	'Failed to create directory' => 'Impossible de créer le dossier',
	'Fallback' => 'Langue de rechange',
	'Finished' => 'Terminé',
	'Format' => 'Format',
	'Format String' => 'Chaîne de format',
	'Format string cannot be empty' => 'La chaîne de format ne peut être laissée vide',
	'Format string cannot be empty for default language' => 'La chaîne de format ne peut être laissée vide pour la langue par défaut',
	'Generating translation index, please wait...' => 'Génération de l\'index de traduction, veuillez patienter...',
	'Google Translation' => 'Traduction Google',
	'Incomplete' => 'Incomplet',
	'Language' => 'Langue',
	'Language Code (ie. en)' => 'Code de la langue (ex: fr)',
	'Language Name' => 'Nom de la langue',
	'Languages' => 'Langues',
	'Locale' => 'Locale',
	'Locale (ie. us)' => 'Locale (ex: ca)',
	'Months' => 'Mois',
	'Months (3 letters form)' => 'Mois (3 lettres)',
	'Name' => 'Nom',
	'New Translation Notice' => 'Avis de nouvelle traduction',
	'Next' => 'Suivant',
	'Next Step' => 'Étape suivante',
	'No' => 'Non',
	'No Index' => 'Numéro d\'index',
	'No application folder found' => 'Le dossier de l\'application n\'a pas été trouvé',
	'No language file found' => 'Le fichier de langue n\'a pas été trouvé',
	'No language folder found' => 'Le dossier de langue n\'a pas été trouvé',
	'None' => 'Aucun',
	'Not Translated' => 'Non traduit',
	'Ordinal suffixes' => 'Suffixes ordinaux',
	'Please change your filesystem permissions.' => 'Veuillez modifier vos autorisations de système de fichiers.',
	'Previous' => 'Précédent',
	'SELECT' => 'CHOISIR',
	'Save' => 'Enregistrer',
	'Screen' => 'Écran',
	'Search Parameters' => 'Paramètres de recherche',
	'Select All' => 'Tout sélectionner',
	'Select Language' => 'Choisir la langue',
	'Sitellite Libraries' => 'Bibliothèques Sitellite',
	'Status' => 'État',
	'Templates' => 'Modèles',
	'The language you have specified already exists.' => 'La langue que vous avez spécifié existe déjà.',
	'There are no strings to translate for this application.' => 'Il n\'y a pas de chaînes à traduire pour cette application.',
	'This format name already exists' => 'Ce nom de format existe déjà',
	'This is an automatic notice that a document requires your updates to its translation(s). You may update the translation(s) at the following link' => 'Ceci un avis automatique qu\'un document requiert une mise à jour de sa traduction. Vous pouvez mettre à jour la traduction à l\'adresse suivante',
	'This is an automatic notice that a new document requires your translation(s). You may translate the document at the following link' => 'Ceci un avis automatique qu\'un nouveau document requiert une traduction. Vous pouvez traduire ce document à l\'adresse suivante',
	'Title' => 'Titre',
	'Translate' => 'Traduire',
	'Translated On' => 'Traduit le',
	'Translating' => 'Traduction',
	'Translating Item' => 'Élément de traduction',
	'Translation Saved' => 'Traduction enregistrée',
	'Translation Status' => 'État de la traduction',
	'Translation Update Notice' => 'Avis de mise à jour de traduction',
	'Translations' => 'Traductions',
	'Translations - Login' => 'Traductions - Connexion',
	'Update Index' => 'Mettre à jour l\'index',
	'Use this!' => 'Utiliser ceci!',
	'Yes' => 'Oui',
	'You have chosen' => 'Vous avez choisi',
	'You have not yet created an index for this application.' => 'Vous n\'avez pas encore créé d\'index pour cette application.',
	'You must enter 12 comma separated values' => 'Vous devez entrez 12 valeurs séparées par des virgules',
	'You must enter 12 comma separated values (3 letters each value)' => 'Vous devez entrez 12 valeurs séparées par des virgules (3 caractères par valeur)',
	'You must enter 2 comma separated values' => 'Vous devez entrer 2 valeurs séparées par des virgules',
	'You must enter 4 comma separated values' => 'Vous devez entrer 4 valeurs séparées par des virgules',
	'You must enter 7 comma separated values, begining with Sun (3 letters each value)' => 'Vous devez entrer 7 valeurs séparées par des virgules, en commençant par dim (3 caractères par valeur)',
	'You must enter 7 comma separated values, begining with Sunday' => 'Vous devez entrer 7 valeurs séparées par des virgules, en commençant par dimanche',
	'You must enter a character set.' => 'Vous devez entrer un jeu de caractères.',
	'You must enter a language code.' => 'Vous devez entrer un code de langue.',
	'You must enter a language name.' => 'Vous devez entrer un nom de langue.',
	'You must specify a name' => 'Vous devez spécifier un nom',
	'loading...' => 'chargement...',
	'of' => 'de',
	'{template|ucfirst} Template' => 'Modèle {template}',
	'{template} Template' => 'Modèle {template}',
	'<br/><pre>Example: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday</pre>' => '<br /><pre>Exemple: Dimanche, Lundi, Mardi, Mercredi, Jeudi, Vendredi, Samedi</pre>',
	'-43200 through 50400' => '-43200 à 50400',
	'0 (for Sunday) through 6 (for Saturday)' => '0 (pour dimanche) à 6 (pour samedi)',
	'0 through 23' => '0 à 23',
	'0 through 365' => '0 à 365',
	'00 through 23' => '00 à 23',
	'00 through 59' => '00 à 59',
	'000 through 999' => '000 à 999',
	'01 through 12' => '01 à 12',
	'01 through 31' => '01 à 31',
	'1 (for Monday) through 7 (for Sunday)' => '1 (pour lundi) à 7 (pour dimanche)',
	'1 if Daylight Saving Time, 0 otherwise' => '1 si l\'heure d\'été, 0 sinon',
	'1 if it is a leap year, 0 otherwise' => '1 si c\'est une année bissextile, 0 sinon',
	'1 through 12' => '1 à 12',
	'1 through 31' => '1 à 31',
	'12-hour format of an hour' => 'Heure format 12 heures',
	'24-hour format of an hour' => 'Heure format 24 heures',
	'28 through 31' => '28 à 31',
	'AM or PM' => 'AM ou PM',
	'Day' => 'Jour',
	'Day of the month' => 'Jour du mois',
	'Day of the week' => 'Jour de la semaine',
	'Day of the week (3 letters)' => 'Jour de la semaine (3 lettres)',
	'Day of the week (ISO-8601)' => 'Jour de la semaine (ISO-8601)',
	'Day of the week (numeric)' => 'Jour de la semaine (numérique)',
	'Difference to Greenwich time in hours' => 'Différence avec l\'heure de Greenwich en heures',
	'Difference to Greenwich time with minutes' => 'Différence avec l\'heure de Greenwich avec les minutes',
	'Ex: 1999 of 2003' => 'Ex: 1999 ou 2003',
	'Ex: 1999 or 2003' => 'Ex: 1999 ou 2003',
	'Ex: 42 (the 42nd week in the year)' => 'Ex: 42 (la 42ème semaine de l\'année)',
	'Ex: 54321' => 'Ex: 54321',
	'Ex: 99 or 03' => 'Ex: 99 ou 03',
	'Ex: EST, MDT ...' => 'Ex: EST, MDT ...',
	'Ex: UTC, GMT, Atlantic/Azores' => 'Ex: UTC, GMT, Atlantic / Azores',
	'Format Options' => 'Options de format',
	'Full Date / Time' => 'Date et heure complètes',
	'ISO 8601 date' => 'Date ISO 8601',
	'ISO-8601 week number of year' => 'Numéro de semaine de l\'année ISO-8601',
	'ISO-8601 year number' => 'Numéro de l\'année ISO-8601',
	'Jan through Dec' => 'Jan à déc',
	'January through December' => 'Janvier à décembre',
	'Lowercase Ante meridiem and Post meridiem' => 'Ante meridiem et post meridiem en minuscules',
	'Microseconds' => 'Microsecondes',
	'Minutes' => 'Minutes',
	'Mon through Sun' => 'Lun à dim',
	'Month' => 'Mois',
	'Name of the month' => 'Nom du mois',
	'Number of days in the given month' => 'Nombre de jours dans le mois donné',
	'Numeric representation of a month' => 'Représentation numérique d\'un mois',
	'Numeric representation of a year' => 'Représentation numérique d\'une année',
	'Ordinal suffix for the day of the month' => 'Suffixe ordinal pour le jour du mois',
	'RFC 2822 formatted date' => 'Date formatée selon RFC 2822',
	'Seconds' => 'Secondes',
	'Seconds since the Unix Epoch' => 'Secondes depuis l\'époque Unix',
	'Short name of the month' => 'Nom abrégé du mois',
	'Show Help' => 'Afficher l\'aide',
	'Sunday through Saturday' => 'Dimanche à samedi',
	'Swatch Internat time' => 'Temps Internet Swatch',
	'The day of the year' => 'Le jour de l\'année',
	'Time' => 'Heure',
	'Timezone' => 'Fuseau horaire',
	'Timezone abbreviation' => 'Abbréviation du fuseau horaire',
	'Timezone identifier' => 'Identifiant du fuseau horaire',
	'Timezone offset in seconds' => 'Décalage horaire en secondes',
	'Uppercase Ante meridiem and Post meridiem' => 'Ante meridiem et post meridiem en majuscules',
	'Week' => 'Semaine',
	'Whether it\'s a leap year' => 'Si c\'est une année bissextile',
	'Whether of not the date is in daylight saving time' => 'Si la date est dans la période d\'été ou non',
	'Year' => 'Année',
	'am of pm' => 'am ou pm',
	'st, nd, rd or th. To use with j' => 'Suffixe pour utiliser avec j',
	'Hide Help' => 'Cacher l\'aide',
	'Swatch Internet time' => 'Heure Internet Swatch',
);

?>