; <?php /*

[Form]

error_mode = all

[appname]

type = hidden

[name]

type = text
alt = Language Name
rule 1 = not empty, You must enter a language name.

[code]

type = text
alt = "Language Code (ie. en)"
rule 1 = not empty, You must enter a language code.
rule 2 = "func 'lang_not_exists', The language you have specified already exists."

[locale]

type = text
alt = "Locale (ie. us)"

[charset]

type = text
alt = "Character Set (ie. ISO-8859-1)"
rule 1 = not empty, You must enter a character set.

[fallback]

alt = Fallback
type = select

[default]

alt = Default
type = select

[submit_button]

type = msubmit
button 1 = Save
button 2 = Cancel

; */ ?>
