<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'nl',

//
// Number and date formatting
//

'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',
'lang_time'							=>	'H:i',
'lang_date'							=>	'j M Y',

//
// Notices
//

'Bad request'						=>	'Bad request. De pagina die je probeert te vinden bestaat niet of je mag hier gewoon niet zijn.',
'No view'							=>	'Je hebt geen toestemming om deze pagina te bekijken.',
'Bad referrer'						=>	'Bad HTTP_REFERRER. Je bent naar deze pagina gestuurd vanuit een onbekende bron. Als dit probleem zich blijft voordoen, kan je best controleren of \'Root URL\' correct staat geconfigureerd in de Backstage. Meer hulp kan je vinden in de ModernBB documentation.',
'No permission'						=>	'Je hebt geen toestemming om deze pagina te bekijken.',
'No cookie'							=>	'Je bent met succes ingelogd, maar ModernBB was niet in staat om een cookie in te stellen. Controleer je instellingen en sta toe dat deze websites cookies aanmaakt.',
'Pun include extension'				=>  'Niet in staat om user include %s van template %s. "%s" bestanden zijn niet toegestaan.',  
'Pun include directory'				=>  'Niet in staat om user include %s van template %s. Map is niet toegestaan.',  
'Pun include error'					=>  'Niet in staat om user include %s van template %s. Dit bestand bestaat niet.',  
'Settings saved'					=>  'De instellingen zijn opgeslagen.',
'User deleted'						=>  'De gebruiker is verwijderd.',
'User failed'                       =>  'Kan de gebruiker niet aanmaken, er is geen wachtwoord gegeven.',
'User created'                      =>  'Gebruiker aangemaakt',
'Cache cleared'						=>  'De cache is opgeruimd.',

//
// Miscellaneous
//

'Announcement'						=>	'Aankondigingen',
'Options'							=>	'Algemene instellingen',
'Features'							=>	'Functies',
'Submit'							=>	'Plaatsen', // "Name" of submit buttons
'Search'							=>	'Zoeken',
'Ban message'						=>	'Je bent verbannen van dit forum.',
'Ban message 2'						=>	'Je ban eindigt op',
'Ban message 3'						=>	'Het volgende bericht werd voor je achtergelaten:',
'Ban message 4'						=>	'Bij problemen kan je contact opnemen met de admin op',
'Never'								=>	'Nooit',
'Today'								=>	'Vandaag',
'Yesterday'							=>	'Gisteren',
'Info'								=>	'Info', // A common table header
'Maintenance'						=>	'Onderhoud',
'Invalid email'						=>	'Dit is een ongeldig e-mailadres',
'Required'							=>	'(Vereist)',
'required field'					=>	'is een vereist veld.', // For javascript form validation
'Last post'							=>	'Laatste post',
'by'								=>	'door', // As in last post by some user
'New posts'							=>	'Nieuw bericht', // The link that leads to the first new post
'New posts info'					=>	'Ga naar het eerste nieuwe bericht.', // The popup text for new posts links
'Username'							=>	'Gebruikersnaam',
'Password'							=>	'Wachtwoord',
'Send email'						=>	'Stuur een e-mail',
'Moderated by'						=>	'Gemodereerd door',
'Registered table'					=>	'Geregistreerd',
'Subject'							=>	'Onderwerp',
'Start typing'                      =>  'Start met typen...',
'Message'							=>	'Bericht',
'Topic'								=>	'Topic',
'Forum'								=>	'Forum',
'Posts table'						=>	'Posts',
'Replies forum'						=>	'Reacties',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'[img] tag',
'Smilies'							=>	'Smilies',
'and'								=>	'en',
'Image link'						=>	'afbeeldingen', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'schreef', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Titel',
'Member'							=>	'Gebruiker',
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Admin',
'Banned'							=>	'Verbannen',
'Guest'								=>	'Gast',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] bestaat, maar zonder bijbehorende [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] was geopend in [%2$s], dit is niet toegestaan',
'BBCode error invalid self-nesting'	=>	'[%s] is binnen zichzelf geopend, dit is niet toegestaan',
'BBCode error no closing tag'		=>	'[%1$s] (begintag) heeft geen bijbehorende [/%1$s] (eindtag)',
'BBCode error empty attribute'		=>	'[%s] heeft geen attribute',
'BBCode list size error'			=>	'De lijst is te lang, maak hem kleiner!',

// Stuff for the navigator (top of every page)

//
// User menu
//

'Support'							=>	'Ondersteuning',
'Help'								=>	'Help',
'Index'								=>	'Index',
'User list'							=>	'Gebruikers',
'Rules'								=>	'Voorwaarden',
'Register'							=>	'Registreren',
'Registered'						=>	'Geregistreerd sinds',
'Login'								=>	'Inloggen',
'Profile'							=>	'Profiel',
'Logout'							=>	'Uitloggen',
'Backstage'							=>	'Backstage',
'New posts header'					=>	'Nieuw',
'Active topics'						=>	'Actief',
'Unanswered topics'					=>	'Onbeantwoord',
'Posted topics'						=>	'Gemaakt door mij',
'Show new posts'					=>	'Topics met nieuwe berichten.',
'Show active topics'				=>	'Actieve topics.',
'Show unanswered topics'			=>	'Onbeantwoorde topics.',
'Show posted topics'				=>	'Onderwerpen waarin ik heb gereageerd.',
'Mark as read'						=>	'Markeer als gelezen',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Dit topic beoordelen',
'All'								=>	'Alles weergeven',
'Move topic'						=>	'Topic verplaatsen',
'Open topic'						=>	'Topic openen',
'Close topic'						=>	'Topic sluiten',
'Unstick topic'						=>	'Topic losmaken',
'Stick topic'						=>	'Topic vastmaken',
'Moderate forum'					=>	'Dit forum beoordelen',
'Powered by'						=>	'Mogelijk gemaakt door %s',
'Thanks'							=>	'Bedankt voor het gebruiken van %s',

//
// Debug information
//

'Debug table'						=>	'Debug informatie',
'Querytime'							=>	'Gegenereerd in %1$s seconden, %2$s queries uitgevoerd',
'Memory usage'						=>	'Geheugengebruik: %1$s',
'Peak usage'						=>	'(Top: %1$s)',
'Query times'						=>	'Tijd (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Duur: %s',

//
// First run
//

'First run message'					=>	'Hoi! Leuk dat je er bent! Welkom en bedankt dat je je hebt aangemeld. Je account is er klaar voor, jij ook? Dit is wat je eerst nog kunt doen.',
'Hi there'							=>	'Hoi %s',
'Welcome to'						=>	'Welkom bij %s',
'Change your avatar'				=>	'Avatar aanpassen',
'Extend profile'					=>	'Profiel aanvullen',
'Get help'							=>	'Hulp aanroepen',
'Do not show again'					=>	'Niet meer weergeven',

//
// For extern.php RSS feed
//

'RSS description'					=>	'Meest recente topics op %s.',
'RSS description topic'				=>	'Meest recente berichten in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS feed van actieve topics',
'Atom active topics feed'			=>	'Atom feed van actieve topics',
'RSS forum feed'					=>	'RSS feed - forum',
'Atom forum feed'					=>	'Atom feed - forum',
'RSS topic feed'					=>	'RSS feed - topic',
'Atom topic feed'					=>	'Atom feed - topic',

//
// Admin related stuff in the header
//

'New reports'						=>	'Er zijn nieuwe meldingen',
'Maintenance mode enabled'			=>	'Onderhoudsmodus is ingeschakeld!',

//
// Units for file sizes
//

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

//
// Language for installation
//

'Choose install language'		=>	'Choose the install script language',
'Choose install language info'	=>	'The language used for this install script. The default language used for the board itself can be set below.',
'Install language'				=>	'Install language',
'Change language'				=>	'Change language',
'Already installed'				=>	'It seems like ModernBB is already installed. You should go <a href="index.php">here</a> instead.',
'You are running error'			=>	'You are running %1$s version %2$s. ModernBB %3$s requires at least %1$s %4$s to run properly. You must upgrade your %1$s installation before you can continue.',
'My ModernBB Forum'				=>	'My ModernBB Forum',
'Description'					=>	'You can do anything',
'Username 1'					=>	'Usernames must be at least 2 characters long.',
'Username 2'					=>	'Usernames must not be more than 25 characters long.',
'Username 3'					=>	'The username guest is reserved.',
'Username 4'					=>	'Usernames may not be in the form of an IP address.',
'Username 5'					=>	'Usernames may not contain all the characters \', " and [ or ] at once.',
'Username 6'					=>	'Usernames may not contain any of the text formatting tags (BBCode) that the forum uses.',
'Short password'				=>	'Passwords must be at least 6 characters long.',
'Passwords not match'			=>	'Passwords do not match.',
'Wrong email'					=>	'The administrator email address you entered is invalid.',
'No board title'				=>	'You must enter a board title.',
'Error default language'		=>	'The default language chosen doesn\'t seem to exist.',
'Error default style'			=>	'The default style chosen doesn\'t seem to exist.',
'No DB extensions'				=>	'PHP needs to have support for either MySQL or SQLite to run ModernBB to be installed. Non is available, through.',
'Administrator username'		=>	'Username',
'Administrator password 1'		=>	'Administrator password 1',
'Administrator password 2'		=>	'Administrator password 2',
'Administrator email'			=>	'Email',
'Board title'					=>	'Board title',
'Base URL'						=>	'No trailing slash',
'Required field'				=>	'is a required field in this form.',
'ModernBB Installation'			=>	'ModernBB Installation',
'Install'						=>	'Install ModernBB %s',
'Errors'						=>	'The following errors need to be corrected:',
'Database setup'				=>	'Database setup',
'Select database'				=>	'Select your database type',
'Info 1'						=>	'What database do you want to use?',
'Database type'					=>	'Type',
'Info 2'						=>	'Where\'s the server?',
'Info 3'						=>	'The database name',
'Database server hostname'		=>	'Server hostname',
'Database name'					=>	'Name',
'Database enter informations'	=>	'Enter your database username and password',
'Database username'				=>	'Username',
'Info 4'						=>	'Your database username',
'Database password'				=>	'Password',
'Info 5'						=>	'Set for more ModernBB installation in this database',
'Table prefix'					=>	'Table prefix',
'Administration setup'			=>	'Administration setup',
'Info 6'						=>	'2 to 25 characters long',
'Info 7'						=>	'At least 6 characters long',
'Confirm password'				=>	'Confirm password',
'Board setup'					=>	'Board setup',
'Board description'				=>	'Board description',
'Appearance'					=>	'Appearance',
'Default language'				=>	'Default language',
'Default style'					=>	'Default style',
'Start install'					=>	'Start install',
'DB type not valid'				=>	'\'%s\' is not a valid database type',
'Table prefix error'			=>	'The table prefix \'%s\' contains illegal characters or is too long. The prefix may contain the letters a to z, any numbers and the underscore character. They must however not start with a number. The maximum length is 40 characters. Please choose a different prefix',
'Prefix reserved'				=>	'The table prefix \'sqlite_\' is reserved for use by the SQLite engine. Please choose a different prefix',
'Existing table error'			=>	'A table called \'%susers\' is already present in the database \'%s\'. This could mean that ModernBB is already installed or that another piece of software is installed and is occupying one or more of the table names ModernBB requires. If you want to install multiple copies of ModernBB in the same database, you must choose a different table prefix',
'InnoDB off'					=>	'InnoDB does not seem to be enabled. Please choose a database layer that does not have InnoDB support, or enable InnoDB on your MySQL server',
'Administrators'				=>	'Administrators',
'Moderators'					=>	'Moderators',
'Guests'						=>	'Guests',
'Members'						=>	'Members',
'New member'					=>	'New member',
'Maintenance message'			=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',
'Alert cache'					=>	'<strong>The cache directory is currently not writable!</strong> In order for ModernBB to function properly, the directory <em>%s</em> must be writable by PHP. Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert avatar'					=>	'<strong>The avatar directory is currently not writable!</strong> If you want users to be able to upload their own avatar images you must see to it that the directory <em>%s</em> is writable by PHP. You can later choose to save avatar images in a different directory (see Admin/Options). Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert upload'					=>	'<strong>File uploads appear to be disallowed on this server!</strong> If you want users to be able to upload their own avatar images you must enable the file_uploads configuration setting in PHP. Once file uploads have been enabled, avatar uploads can be enabled in Administration/Options/Features.',
'ModernBB has been installed'	=>	'ModernBB has been installed. To finalize the installation please follow the instructions below.',
'Info 8'						=>	'To finalize the installation, you need to click on the button below to download a file called config.php. You then need to upload this file to the root directory of your ModernBB installation.',
'Info 9'						=>	'Once you have uploaded config.php, ModernBB will be fully installed! At that point, you may <a href="index.php">go to the forum index</a>.',
'Download config.php file'		=>	'Download config.php file',
'ModernBB fully installed'		=>	'ModernBB has been fully installed! You may now <a href="index.php">go to the forum index</a>.',

//
// Language for updating
//

'Update ModernBB'				=>	'Update ModernBB',
'Down'							=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',

'Version mismatch error'		=>	'Version mismatch. The database \'%s\' doesn\'t seem to be running a ModernBB database schema supported by this update script.',
'No update error'				=>	'Your forum is already as up-to-date as this script can make it',

'Start update'					=>	'Start update',
'Correct errors'				=>	'The following errors need to be corrected:',
'Successfully updated'			=>	'Your forum database was successfully updated. You may now %s.',
'go to index'					=>	'go to the forum index',

'Preparsing item'				=>	'Preparsing %1$s %2$s …',
'Rebuilding index item'			=>	'Rebuilding index for %1$s %2$s',

'post'							=>	'post',
'topic'							=>	'topic',
'signature'						=>	'signature',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Bericht verwijderen',
'Topic warning'			=>	'Waarschuwing! Dit is het eerste bericht in dit topic, het hele topic zal daarom voorgoed verwijderd worden.',
'Delete info'			=>	'Het bericht wat je gemarkeerd hebt om te verwijderen staat klaar, controleer voordat je verder gaat.',
'Reply by'				=>	'Antwoord door %s - %s',
'Topic by'				=>	'Topic gestart door %s - %s',
'Delete'				=>	'Verwijderen',

//
// Language for help.php
//

'produces'				=>	'produces',

'BBCode info'			=>	'BBCode is a collection of tags that are used to change the look of text in this forum. Below you can find all the available BBCodes and how to use them. Administrators have the ability to disable BBCode. You can tell if BBCode is disabled whenever you post a message or edit your signature.',

'Text style'			=>	'Text style',
'Text style info'		=>	'The following tags change the appearance of text:',
'Bold text'				=>	'Bold text',
'Underlined text'		=>	'Underlined text',
'Italic text'			=>	'Italic text',
'Strike-through text'	=>	'Strike-through text',
'Red text'				=>	'Red text',
'Blue text'				=>	'Blue text',
'Heading text'			=>	'Heading text',
'Inserted text'			=>	'Inserted text',
'Sub text'				=>	'Subscript text',
'Sup text'				=>	'Superscript text',

'Multimedia'			=>  'Multimedia',
'Links info'			=>	'You can create links to other documents or to email addresses using the following tags:',
'My email address'		=>	'My email address',
'Images info'			=>	'If you want to display an image you can use the img tag. The text appearing after the "=" sign in the opening tag is used for the alt attribute and should be included whenever possible.',
'ModernBB bbcode test'  =>  'ModernBB BBCode Test',
'Video info'			=>  'ModernBB supports embedding from DailyMotion, Vimeo and YouTube. With the BBCode below, you can embed one of those services videos.',
'Video link'			=>  'Put the link to the video here', 

'Quotes'				=>	'Quotes',
'Quotes info'			=>	'If you want to quote someone, you should use the quote tag.',
'Quotes info 2'			=>	'If you don\'t want to quote anyone in particular, you can use the quote tag without specifying a name. If a username contains the characters [ or ] you can enclose it in quote marks.',
'Quote text'			=>	'This is the text I want to quote.',
'produces quote box'	=>	'produces a quote box like this:',

'Code'					=>	'Code',
'Code info'				=>	'When displaying source code you should make sure that you use the code tag. Text displayed with the code tag will use a monospaced font and will not be affected by other tags.',
'Code text'				=>	'This is some code.',
'produces code box'		=>	'produces a code box like this:',

'Lists'					=>	'Lists',
'List info'				=>	'To create a list you can use the list tag. You can create 2 types of lists using the list tag.',
'List text 1'			=>	'Example list item 1.',
'List text 2'			=>	'Example list item 2.',
'List text 3'			=>	'Example list item 3.',
'produces list'			=>	'produces a bulleted list.',
'produces decimal list'	=>	'produces a numbered list.',

'Bold'					=>	'Bold',
'Underline'				=>	'Underline',
'Italic'				=>	'Italic',
'Strike'				=>	'Strike',
'URL'					=>	'URL',
'List'					=>	'List',
'List item'				=>	'List item',
'Heading'				=>	'Heading',
'Inline code'			=>	'Inline code',
'Superscript'			=>	'Superscript',
'Subscript'				=>	'Subscript',
'Video'					=>	'Video',
'Image'					=>	'Image',

'Smilies info'			=>	'If enabled, the forum can convert a series of smilies to graphical representations. The following smilies you can use are:',

'General use'					=>	'General use',
'General use info'				=>	'Explains some of the basics on how to work with this forum software.',
'Forums and topics'				=>	'Forums and topics',
'Labels question'				=>	'What do the labels in front of topic titles mean?',
'Labels info'					=>	'You\'ll see that some of the topics are labeled, different labels have different meanings.',
'Label'							=>	'Label',
'Explanation'					=>	'Explanation',
'Sticky explanation'			=>	'Sticky topics are usually important topics which you should read. It\'s worth it to take a look there.',
'Closed explanation'			=>	'When a you see a closed label, it means you can\'t post on that topic any more, unless you have a permission that overwrites this. The topic is still available to read, through.',
'Moved explanation'				=>	'This topic has been moved to another forum. Admins and moderators can choose to show this notification, or simply not show it. The original forum where this topic was located in, won\'t show any topic stats anymore.',
'Star'							=>	'Star',
'Star explanation'				=>	'You\'re following this topic, they will show up in you\'re subscription list.',
'Posted explanation'			=>	'This label means you have made a post in this topic.',
'Content question'				=>	'Smilies, signatures, avatars and images are not visible?',
'Content answer'				=>	'You can change the behavior of the topic view in your profile settings. There you can enable smilies, signatures, avatars and images in posts, but they should be enabled by default unless your forum admin has disabled those features. You can see if images and smilies are disabled below the editor. If the labels have a red background, those features aren\'t available for you.',
'Topics question'				=>	'Why can\'t I see any topics or forums?',
'Topics answer'					=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Profile question'				=>	'Why can\'t I see any profiles?',
'Profile answer'				=>	'You might not have the correct permissions to do so, ask the forum administrator for more help.',
'Information question'			=>	'My profile doesn\'t contain as much as others?',
'Information answer'			=>	'You\'re profile will only display fields that are enabled and filled in on your profile personality page. You might want to see if you missed some fields.',
'Advanced search question'		=>	'Are there more options to search?',
'Advanced search answer'		=>	'When you go to the search page, you\'ll find yourself on a page with 1 search box. Below that search box there is a link to Advanced search, here you can find more search options! This feature may not be available on your device, if disabled by the forum admin.',
'More search question'			=>	'Why can\'t search in more then 1 forum at once?',
'More search answer'			=>	'You might not have the correct permissions to do so, ask the forums administrator for more help.',
'Moderating'					=>	'Moderating',
'Moderating info'				=>	'Admins and moderators need help sometimes, too! The basics of moderating are explained here.',
'Moderate forum question'		=>	'How do I moderate a forum?',
'Moderate forum answer'			=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current forum. From there, you can move, delete, merge, close and open multiple topics at once.',
'Moderate topic question'		=>	'How do I moderate a topic?',
'Moderate topic answer 1'		=>	'The moderation options are available at the bottom of the page. Those features aren\'t available for all moderators. When you click this button, you will be send to a page where you can manage the current topic. From there, you can select multiple post to delete or split from the current topic at once.',
'Moderate topic answer 2'		=>	'Next to the "Moderate topic" button, you can find options to move, open or close the topic. You can also make it a sticky topic from there, or unstick it.',
'Moderate user question'		=>	'How do I moderate an user?',
'Moderate user answer 1'		=>	'Moderating options are available in the users profile. You can find the moderation options under "Administration" in the users profile menu. Those features aren\'t available for all moderators.',
'Moderate user answer 2'		=>	'The Administration page allow you to check if the user has an admin note, and you can also change that note if required. You can also change the post count of the user. At this page, the user can also be given moderator permissions on a per-forum base, through the user must have a moderator account to be able to actually use those permissions.',
'Moderate user answer 3'		=>	'Finally, you can ban or delete a user from his profile. If you want to ban and/or delete multiple users at once, you\'re probably better off with the advanced user management features in the Backstage.',

//
// Language for index.php
//

'Topics'		=>	'Topics',
'Link to'		=>	'Link naar:', // As in "Link to: http://modernbb.be/"
'Empty board'	=>	'Forum is empty.',
'Newest user'	=>	'Nieuwste gebruiker: %s',
'Users online'	=>	'Gebruikers online: %s',
'Guests online'	=>	'Gasten online: %s',
'No of users'	=>	'Totaal aantal gebruikers: %s',
'No of topics'	=>	'Totaal aantal topics: %s',
'No of post'	=>	'Totaal aantal berichten: %s',
'Online'		=>	'Online:', // As in "Online: User A, User B etc."
'Board stats'	=>	'Statistieken',

//
// Language for login.php
//

'Wrong user/pass'			=>	'Gebruikersnaam of wachtwoord is onjuist',
'Forgotten pass'			=>	'Wachtwoord vergeten',
'No email match'			=>	'Onbekend e-mail adres',
'Request pass'				=>	'Wachtwoord aanvragen',
'Remember me'				=>	'Onthoud mijn gegevens',
'New password errors'		=>	'Fout bij aanvragen wachtwoord',
'New passworderrors info'	=>	'Het volgende moet worden opgelost voordat een nieuw wachtwoord verzonden kan worden:',

'Forget mail'				=>	'Er is een e-mail verstuurd met instructies hoe je je wachtwoord kunt resetten, heb je geen e-mail ontvangen? Neem dan contact op met de forumbeheerder via:',
'Password request flood'	=>  'Er is in dit uur al een wachtwoord reset aangevraagd, wacht %s minuten voordat je het opnieuw probeert.',

//
// Send email
//

'Form email disabled'			=>	'Er kan geen e-mail worden verzonden, dit is door de gebruiker uitgeschakeld.',
'No email subject'				=>	'Geef een onderwerp op.',
'No email message'				=>	'Schrijf eerst een bericht.',
'Too long email message'		=>	'Het bericht mag niet groter zijn dan 65535 bytes (~64kb).',
'Email flood'					=>  'Er moeten minstens %s seconden verstreken zijn voordat er nog een e-mail kan worden verstuurd. Wacht %s seconden en probeer het dan opnieuw.',
'Send email to'					=>	'E-mail versturen naar',

//
// Report
//

'No reason'						=>	'Geef een reden op.',
'Reason too long'				=>	'Het bericht mag niet groter zijn dan 65535 bytes (~64kb).',
'Report flood'					=>  'Er moeten minstens %s seconden verstreken zijn voordat er nog een melding kan worden verstuurd. Wacht %s seconden en probeer het dan opnieuw.',
'Report post'					=>	'Dit bericht melden',
'Reason'						=>	'Reden',
'Reason desc'					=>	'Geef een omschrijving waarom je dit bericht wilt melden',

//
// Subscriptions
//

'Not subscribed topic'			=>	'Je bent niet geabonneerd op dit topic',

//
// General forum and topic moderation
//

'Moderate'						=>	'Beoordelen',
'Select'						=>	'Selecteren', // the header of a column of checkboxes
'Move'							=>	'Verplaatsen',
'Split'							=>	'Opsplitsen',
'Merge'							=>	'Samenvoegen',

//
// Moderate forum
//

'Open'							=>	'Openen',
'Close'							=>	'Sluiten',
'Move topics'					=>	'Topics verplaatsen',
'Move to'						=>	'Verplaatsen naar',
'Nowhere to move'				=>	'Er zijn geen forums waar je dit naar toe kunt verplaatsen.',
'Leave redirect'				=>	'Doorgestuurde topic(s) laten staan',
'Delete topics'					=>	'Topics verwijderen',
'Delete topics comply'			=>	'Weet je zeker dat je de geselecteerde topics wilt verwijderen?',
'No topics selected'			=>	'Je moet minstens één topic selecteren om te verplaatsen/verwijderen/openen/sluiten.',
'Not enough topics selected'	=>	'Je moet minstens twéé topics selecteren om samen te voegen.',
'Merge topics'					=>	'Topics samenvoegen',
'New subject'					=>	'Nieuw onderwerp',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Berichten opsplitsen',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Berichten verwijderen',
'Cannot select first'			=>	'Het eerste bericht kan niet worden opgesplitst of verwijderd.',
'Delete posts comply'			=>	'Weet je zeker dat je de geselecteerde berichten wilt verwijderen?',
'No posts selected'				=>	'Je moet minstens één bericht selecteren om op te splitsen/te verwijderen.',

//
// Get host
//

'Host info 1'					=>	'Het IP adres is: %s',
'Host info 2'					=>	'De DNS naam is: %s',
'Show more users'				=>	'Toon meer gebruikers voor dit IP adres',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Topics moeten een onderwerp bevatten.',
'No subject after censoring'	=>	'Topics moeten een onderwerp bevatten. Er zijn woorden uit jouw onderwerp weggefilterd.',
'Too long subject'	=>	'Een onderwerp mag niet langer zijn dan 70 tekens',
'No message'		=>	'Je moet een bericht opgeven.',
'No message after censoring'	=>	'Je moet een bericht opgeven. Er zijn woorden uit je bericht weggefilterd.',
'Too long message'	=>	'Een bericht mag niet langer zijn dan %s bytes.',
'All caps subject'	=>	'Een onderwerp mag niet bestaan uit alleen hoofdletters.',
'All caps message'	=>	'Een bericht mag niet bestaan uit alleen hoofdletters.',
'Empty after strip'	=>	'Je bericht bestaat uit enkel lege BBCodes. Het zou kunnen dat een quote is verwijderd vanwege het maximaal aantal keren dat je mag quoten.',

//
// Posting
//

'Post errors'		=>	'Fouten bij plaatsen',
'Post preview'		=>	'Voorbeeld van bericht',
'Guest name'		=>	'Naam', // For guests (instead of Username)
'Post a reply'		=>	'Reageren',
'Post new topic'	=>	'Nieuw topic aanmaken',
'Hide smilies'		=>	'Smileys in deze post als tekst weergeven',
'Subscribe topic'	=>	'Abboneren op dit topic',
'Stay subscribed'	=>	'Blijf geabboneerd op dit topicc',
'Topic review'		=>	'Nieuwste berichten bovenaan weergeven',
'Flood start'		=>  'Er moeten minstens %s seconden verstreken zijn tussen het plaatsen van berichten. Wacht %s seconden en probeer het opnieuw.',
'Preview'			=>	'Voorbeeld',

//
// Edit post
//

'Silent edit'		=>	'Wijzigingen verbergen',
'Edit post'			=>	'Bericht aanpassen',

//
// Language for both profile.php and register.php
//

'Email legend'				=>	'Geef een geldig e-mail adres op',
'Time zone'					=>	'Tijdzone',
'DST'						=>	'Zomertijd inschakelen',
'Time format'				=>	'Tijdsformaat',
'Date format'				=>	'Datumformaat',
'Default'					=>	'Standaard',
'Language'					=>	'Taal',
'Email setting info'		=>	'E-mail instellingen',
'Email setting 1'			=>	'E-mail adres weergeven in profiel.',
'Email setting 2'			=>	'E-mail adres verbergen maar berichten toestaan.',
'Email setting 3'			=>	'E-mail adres verbergen en berichten niet toestaan.',

'Username too short'		=>	'Een gebruikersnaam moet minstens 2 tekens lang zijn, kies een andere (langere) gebruikersnaam.',
'Username too long'			=>	'Een gebruikersnaam mag niet langer zijn dan 25 tekens, kies een andere (kortere) gebruikersnaam.',
'Username guest'			=>	'De gebruikersnaam gast is gereserveerd, kies een andere gebruikersnaam.',
'Username IP'				=>	'Een gebruikersnaam mag geen IP adres zijn, kies een andere gebruikersnaam.',
'Username reserved chars'	=>	'In een gebruikersnaam mogen de volgende tekens \', " en [ of ] tegelijk voorkomen, kies een andere gebruikersnaam.',
'Username BBCode'			=>	'In een gebruikersnaam mag geen BBcode voorkomen, kies een andere gebruikersnaam.',
'Banned username'			=>	'Deze gebruikersnaam is verbannen van het forum, kies een andere gebruikersnaam.',
'Pass too short'			=>	'Een wachtwoord moet minstens 6 tekens lang zijn, neem een langer wachtwoord.',
'Pass not match'			=>	'De wachtwoorden komen niet overeen.',
'Banned email'				=>	'Dit e-mail adres is verbannen van het forum, kies een ander e-mailadres.',
'Dupe email'				=>	'Dit e-mail adres is al gebruikt voor het maken van een account, kies een ander e-mailadres of log in.',
'Sig too long'				=>	'Een handtekening mag niet langer zijn dan %1$s tekens. Je hebt er nu %2$s te veel.',
'Sig too many lines'		=>	'Een handtekening mag niet langer zijn dan %s regels',
'Bad ICQ'					=>	'You entered an invalid ICQ UIN. Please go back and correct.',

//
// Language for profile.php
//

'Section personality'			=>	'Over mij',
'Section admin'					=>	'Admin',

//
// Miscellaneous
//

'Personal details legend'		=>	'Contact gegevens',
'User tools'					=>	'Gebruikersopties',
'Unknown'          				=>  'Onbekend',

//
// Password stuff
//

'Pass key bad'					=>	'De opgegeven code is onjuist of is verlopen, vraag een nieuwe code aan om je wachtwoord te herstellen. Lukt dit niet? Neem dan contact op met de forumbeheerder via:',
'Pass updated'					=>	'Je wachtwoord is aangepast. Je kunt nu inloggen met je nieuwe wachtwoord.',
'Wrong pass'					=>	'Het oude wachtwoord is onjuist.',
'Change pass'					=>	'Wachtwoord veranderen',
'Old pass'						=>	'Oud wachtwoord',
'New pass'						=>	'Nieuw wachtwoord',
'Confirm new pass'				=>	'Nieuw wachtwoord bevestigen',
'Pass info'						=>	'Een wachtwoord moet minstens 6 tekens lang zijn en is hoofdlettergevoelig',

//
// Email stuff
//

'Email key bad'					=>	'De opgegeven code is onjuist of is verlopen, vraag een nieuwe code aan om je e-mail adres te veranderen. Lukt dit niet? Neem dan contact op met de forumbeheerder via:',
'Email updated'					=>	'Je e-mailadres is aangepast.',
'Activate email sent'			=>	'Er is een e-mail verstuurd met instructies hoe je je nieuwe e-mail adres kunt activeren, heb je geen e-mail ontvangen? Neem dan contact op met de forumbeheerder via:',
'Email instructions'			=>	'Er is een e-mail verstuurd naar je nieuwe adres met daarin een activatie-link. Klik op de link in het e-mailbericht om je nieuwe e-mailadres te activeren.',
'Change email'					=>	'E-mailadres aanpassen',
'New email'						=>	'Nieuw e-mailadres',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'De forumbeheerder heeft de avatar functie uitgeschakeld.',
'Too large ini'					=>	'Het opgegeven bestand was te groot, de server heeft het uploaden ervan niet toegestaan.',
'Partial upload'				=>	'Het opgegeven bestand is maar gedeeltelijk geupload, probeer het opnieuw.',
'No tmp directory'				=>	'PHP was unable to save the uploaded file to a temporary location.',
'No file'						=>	'Je hebt geen bestand opgegeven.',
'Bad type'						=>	'Dit bestandstype is niet toegestaan, enkel gif, jpeg en png mogen worden geupload.',
'Too wide or high'				=>	'Het bestand is groter dan de maximale afmetingen.',
'Too large'						=>	'Het bestand is groter dan de maximale bestandsgrootte.',
'pixels'						=>	'pixels',
'bytes'							=>	'bytes',
'Move failed'					=>	'De server kon het bestand niet opslaan. Neem contact op met de forumbeheerder op:',
'Unknown failure'				=>	'Er is een onbekende fout opgetreden, probeer het opnieuw.',
'Avatar desc'					=>	'Een avatar is een kleine afbeelding die onder je gebruikersnaam naast je geplaatste berichten zal worden geplaatst. De afmetingen mogen niet groter zijn dan',
'Upload avatar'					=>	'Avatar uploaden',
'Delete avatar'					=>	'Avatar verwijderen', // only for admins
'File'							=>	'Bestand',
'Upload'						=>	'Uploaden', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'De titel bevat een woord dat niet is toegestaan. Kies een andere titel.',

//
// Profile display stuff
//

'Email info'					=>	'E-mail: %s',
'Last visit info'				=>	'Laatste bezoek',
'Show posts'					=>	'Berichten weergeven',
'Show topics'					=>	'Topics weergeven',
'Show subscriptions'			=>	'Abbonementen weergeven',
'Contact'						=>	'Contact',
'Realname'						=>	'Naam',
'Location'						=>	'Locatie',
'Website'						=>	'Website',
'Invalid website URL'			=>	'Het ingevulde adres is ongeldig.',
'Microsoft'						=>	'Microsoft Account',
'Facebook'						=>	'Facebook',
'Twitter'						=>	'Twitter',
'Google+'						=>	'Google+',
'Avatar'						=>	'Avatar',
'Sig max size'					=>	'Maximaal: %s tekens / Maximaal: %s regels',
'Avatar info'					=>	'Een avatar is een kleine afbeelding die naast je geplaatste berichten zal worden geplaatst.',
'Change avatar'					=>	'Avatar veranderen',
'Signature info'				=>	'Een handtekening is een klein onderschrift dat onder je geplaatste bericht verschijnt.',
'Sig preview'					=>	'Voorbeeld van je huidige handtekening:',
'No sig'						=>	'Er is op dit moment geen handtekening actief',
'Signature quote/code/list/h'	=>	'Quoten, code, lijst en header BBCodes zijn niet toegestaan in een handtekening.',
'Posts per page'				=>	'Aantal berichten per pagina',
'Leave blank'					=>	'Standaard? Niets invullen',
'Notify full'					=>	'Tekstuele inhoud van berichten toevoegen aan notificatie e-mail.',
'Auto notify full'				=>	'Automatisch abboneren op topics waarin ik heb gereageerd.',
'Show smilies'					=>	'Smileys grafisch weergeven.',
'Show images'					=>	'Plaatjes weergeven in berichten.',
'Show images sigs'				=>	'Plaatjes weergeven in handtekeningen van gebruikers.',
'Show avatars'					=>	'Avatars weergeven.',
'Show sigs'						=>	'Handtekeningen weergeven.',
'Style'							=>	'Thema',
'Backstage Accent'				=>	'Backstage Accentkleur',
'Admin note'					=>	'Notitie voor beheerder',
'Post display'					=>	'Weergave',

//
// Administration stuff
//

'Group membership legend'		=>	'Kies gebruikersgroep',
'Save'							=>	'Opslaan',
'Set mods legend'				=>	'Als beheerder instellen',
'Moderator in info'				=>	'Choose which forums this user should be allowed to moderate. Note: This only applies to moderators. Administrators always have full permissions in all forums.',
'Update forums'					=>	'Update forums',
'Delete ban legend'				=>	'Delete or ban user',
'Delete user'					=>	'Delete user',
'Ban user'						=>	'Ban user',
'Confirm delete user'			=>	'Confirm delete user',
'Confirmation info'				=>	'Please confirm that you want to delete the user', // the username will be appended to this string
'Delete warning'				=>	'Warning! Deleted users and/or posts cannot be restored. If you choose not to delete the posts made by this user, the posts can only be deleted manually at a later time.',
'Delete all posts'				=>	'Delete any posts and topics this user has made',
'No delete admin message'		=>	'Administrators cannot be deleted. In order to delete this user, you must first move him/her to a different user group.',

//
// Language for register.php
//

'No new regs'				=>	'Je kunt je niet zelf registreren voor dit forum.',
'Forum rules'				=>	'Voorwaarden',
'Rules legend'				=>	'Accepteer de voorwaarden om je te kunnen registreren',
'Registration flood'		=>	'Een nieuwe gebruiker heeft zich in het afgelopen uur met hetzelfde IP adres als jou geregistreerd. Om spam te voorkomen moet je minstens één uur wachten voordat je je met hetzelfde IP adres kunt registeren. Excuses voor het ongemak.',
'Agree'						=>	'Akkoord',
'Cancel'					=>	'Annuleren',
'Register legend'			=>	'Vul de ontbrekende gegevens in',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Fout bij het registeren',
'Username censor'			=>	'De ingevulde gebruikersnaam bevat enkele woorden die niet zijn toegestaan, kies een andere gebruikersnaam.',
'Username dupe 1'			=>	'Deze gebruikersnaam is al in gebruik',
'Username dupe 2'			=>	'Deze gebruikersnaam lijkt te veel op een bestaande gebruikersnaam, er moet minstens één teken (a-z of 0-9) afwijken, kies een andere gebruikersnaam.',
'Email not match'			=>	'De e-mailadressen zijn niet gelijk',

//
// Registration email stuff
//

'Reg email'					=>	'Bedankt voor je registratie. Je wachtwoord is verstuurd naar het opgegeven e-mailadres. Heb je geen e-mail ontvangen? Neem dan contact op met de forumbeheerder op:',

//
// Register info
//

'Username legend'			=>	'Kies een gebruikersnaam tussen de 2 en 25 tekens',
'Email help info'			=>	'Het wachtwoord zal naar dit adres worden gestuurd.',
'If human'					=>	'Ben je een mens? Laat het onderstaande veld dan leeg!',
'Spam catch'				=>	'Je aanvraag lijkt op spam, neem contact op met de forumbeheerder als dit niet zo is',

//
// Language for search.php
//

'User search'						=>	'Zoeken in gebruikers',
'No search permission'				=>	'Je bent niet bevoegd om gebruik te maken van de zoekfunctie.',
'Search flood'						=>  'Er moeten minstens %s seconden verstreken zijn tussen zoekopdrachten. Wacht %s seconden en probeer het dan opnieuw.',
'Search criteria legend'			=>	'Zoek in het forum',
'Search info'						=>	'Om te zoeken op trefwoorden, geef één of meerdere woorden (gescheiden door spaties) op. Gebruik AND, OR en NOT om specifiek te zoeken. Geef een gebruikersnaam op om te filteren op berichten van die gebruiker. Gebruik * om te zoeken op gedeelten van woorden.',
'Keyword search'					=>	'Zoeken op trefwoorden',
'Author search'						=>	'Zoeken op gebruiker',
'All forums'						=>	'Alle forums',
'Search in'							=>	'Zoeken in',
'Message and subject'				=>	'Tekst en titel van een bericht',
'Message only'						=>	'Enkel tekst van een bericht',
'Topic only'						=>	'Enkel titel van een bericht',
'Sort by'							=>	'Sorteren op',
'Sort order'						=>	'Sorteervolgorde',
'Search results info'				=>	'Je kunt kiezen hoe je je zoekresultaten wilt sorteren en weergeven',
'Sort by post time'					=>	'Tijd plaatsing',
'Sort by author'					=>	'Gebruiker',
'Ascending'							=>	'Oplopend',
'Descending'						=>	'Aflopend',
'Show as'							=>	'Weergeven als',
'Show as posts'						=>	'Berichten',
'Advanced search'					=>	'Geavanceerd zoeken',

//
// Results
//

'Search results'					=>	'Zoek resultaten',
'Quick search show_new'				=>	'Nieuw',
'Quick search show_recent'			=>	'Actief',
'Quick search show_unanswered'		=>	'Onbeantwoord',
'Quick search show_replies'			=>	'Geplaatst',
'Quick search show_user_topics'		=>	'Topics door %s',
'Quick search show_user_posts'		=>	'Berichten door %s',
'Quick search show_subscriptions'	=>	'Geabboneerd door %s',
'By keywords show as topics'		=>	'Topics met berichten waarin \'%s\' voorkomt',
'By keywords show as posts'			=>	'Berichten waarin \'%s\' voorkomt',
'By user show as topics'			=>	'Topics met berichten geschreven door %s',
'By user show as posts'				=>	'Berichten geschreven door %s',
'By both show as topics'			=>	'Topics met berichten waarin \'%s\' voorkomt en die geschreven zijn door %s',
'By both show as posts'				=>	'Berichten waarin \'%s\' voorkomt en die geschreven zijn door %s',
'No terms'							=>	'Je moet minstens één trefwoord of gebruiker als zoekterm opgeven.',
'No hits'							=>	'Er zijn geen resultaten gevonden.',
'No user posts'						=>	'Er zijn geen berichten door deze gebruiker geplaatst.',
'No user topics'					=>	'Er zijn geen topics door deze gebruiker gestart.',
'No subscriptions'					=>	'Deze gebruiker heeft zich nog niet geabboneerd op een topic.',
'No new posts'						=>	'Er zijn geen topics met nieuwe berichten sinds je laatste bezoek.',
'No recent posts'					=>	'Er zijn geen nieuwe berichten in de afgelopen 24 uur.',
'No unanswered'						=>	'Er zijn geen onbeantwoorde berichten in dit forum.',
'Go to post'						=>	'Ga naar bericht',
'Go to topic'						=>	'Ga naar topic',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Reageren',
'Topic closed'		=>	'Dit topic is gesloten',
'From'				=>	'Uit:', // User location
'IP address logged'	=>	'IP log',
'Note'				=>	'Notitie:', // Admin note
'Posts'				=>	'Berichten:',
'Replies'			=>	'Antwoorden:',
'Last edit'			=>	'Laatst bewerkt door',
'Report'			=>	'Melden',
'Edit'				=>	'Bewerken',
'Quote'				=>	'Quoten',
'Is subscribed'		=>	'Je bent geabboneerd',
'Unsubscribe'		=>	'Uitschrijven',
'Subscribe'			=>	'Abboneren',
'Quick post'		=>	'Snel reageren',
'New icon'			=>	'Reageren',
'Re'				=>	'Re:',

//
// Language for userlist.php
//

'User search info'	=>	'Geef een gebruikersnaam op om te zoeken of een gebruikersgroep om te filteren. Gebruik * om te zoeken of te filteren op een gedeelte van een gebruikersnaam of groep.',
'User group'		=>	'Gebruikersgroep',
'No of posts'		=>	'Aantal berichten',
'All users'			=>	'Alle gebruikers',

//
// Language for viewforum.php
//

'Views'			=>	'keer bekeken',
'Moved'			=>	'Verplaatst',
'Star'			=>	'Markeren',
'Sticky'		=>	'Sticky',
'Closed'		=>	'Gesloten',
'Empty forum'	=>	'Dit forum is leeg',

//
// Language for Backstage
// Language for backstage.php
//

'Update settings head'		=>	'Update settings',
'Index update check'		=>	'Check for updates every time the Backstage index is visited, if disabled, you won\'t see update notifications.',

//
// Language for bans.php
//

'No user message'			=>	'No user by that username registered. If you want to add a ban not tied to a specific username just leave the username blank.',
'No user ID message'		=>	'No user by that ID registered.',
'User is admin message'		=>	'The user %s is an administrator and can\'t be banned. If you want to ban an administrator, you must first demote him/her.',
'User is mod message'		=>	'The user %s is a moderator and can\'t be banned. If you want to ban a moderator, you must first demote him/her.',
'Must enter message'		=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'	=>	'The guest user cannot be banned.',
'Invalid IP message'		=>	'You entered an invalid IP/IP-range.',
'Invalid e-mail message'	=>	'The email address (e.g. user@domain.com) or partial email address domain (e.g. domain.com) you entered is invalid.',
'Invalid date message'		=>	'You entered an invalid expire date.',
'Invalid date reasons'		=>	'The format should be YYYY-MM-DD and the date must be at least one day in the future.',

'New ban head'				=>	'Add ban',
'Username help'				=>	'The username to ban',
'Username advanced help'	=>	'The username you want to ban. If you want to ban a specific IP/IP-range or email, leave it blank.',

'Ban search head'			=>	'Ban search',
'Ban search info'			=>	'Search for bans in the database. You can enter one or more terms to search for. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(yyyy-mm-dd)',
'Expire after label'		=>	'Expire after',
'Expire before label'		=>	'Expire before',
'Order by label'			=>	'Order by',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Expire date',
'Submit search'				=>	'Submit search',

'E-mail help'				=>	'The email or email domain you wish to ban',
'IP label'					=>	'IP address/IP-ranges',
'IP help'					=>	'The IP you wish to ban, separate addresses with spaces',
'IP help link'				=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'			=>	'Advanced ban settings',
'Ban advanced subhead'		=>	'Supplement ban with IP and email',
'Ban message label'			=>	'Ban message',
'Ban message help'			=>	'A message for banned users',
'Message expiry subhead'	=>	'Ban message and expiry',
'Expire date label'			=>	'Expire date',
'Expire date help'			=>	'When does the ban expire, blank for manually',

'Results head'				=>	'Search Results',
'Results IP address head'	=>	'IP/IP-ranges',
'Results expire head'		=>	'Expires',
'Results banned by head'	=>	'Banned by',
'No match'					=>	'No match',

//
// Language for board.php
//

'Must enter name message'		=>	'You must enter a name',
'Confirm delete cat head'		=>	'Confirm delete category',
'Confirm delete cat info'		=>	'Are you sure that you want to delete the category <strong>%s</strong>?',
'Delete category warn'			=>	'Deleting a category will delete all forums and posts (if any) in this category!',
'Must enter integer message'	=>	'Position must be a positive integer value.',
'Add categories head'			=>	'Add categories',
'Delete categories head'		=>	'Delete categories',
'Edit categories head'			=>	'Edit categories',
'Category position label'		=>	'Position',
'Category name label'			=>	'Name',

//
// Language fox censoring.php
//

'Must enter word message'	=>	'You must enter a word to censor.',
'Add word subhead'			=>	'Add word',
'Add word info'				=>	'Enter a word that you want to censor and the replacement text for this word. Wildcards are accepted (i.e. *some* would match somewhere and lonesome). Censor words also affect usernames. New users will not be able to register with usernames containing any censored words. The search is case insensitive.',
'Censoring enabled'			=>	'<strong>Censoring is enabled in %s.</strong>',
'Censoring disabled'		=>	'<strong>Censoring is disabled in %s.</strong>',
'Censored word label'		=>	'Censored word',
'Replacement label'			=>	'Replacement word(s)',
'Edit remove words'			=>	'Edit or remove words',
'No words in list'			=>	'No censor words in list.',

//
// Language fox database.php
//

'Backup options'		=>	'Backup options',
'Backup type'			=>	'Backup type',
'Full'					=>	'Full',
'Structure only'		=>	'Structure only',
'Data only'				=>	'Data only',
'Gzip compression'		=>	'Gzip compression',
'Start backup'			=>	'Start backup',

'Backup info 1'			=>	'If your server supports it, you may also gzip-compress the file to reduce its size.',

'Restore complete'		=>	'Restore complete',
'Restore options'		=>	'Restore options',
'Start restore'			=>	'Start restore',

'Restore info 1'		=>	'This will perform a full restore of all ModernBB tables from a saved file. If your server supports it, you may upload a gzip-compressed text file and it will automatically be decompressed. This will overwrite any existing data. The restore may take a long time to process, so please do not move from this page until it is complete.',

'Warning'				=>	'Warning: critical features',

'Additional functions'	=>	'Additional functions',
'Repair all tables'		=>	'Repair all tables',
'Optimise all tables'	=>	'Optimise all tables',

'Additional info 1'		=>	'Additional features to help run a database, optimise and repair both do what they say.',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Bad HTTP_REFERER. If you have moved these forums from one location to another or switched domains, you need to update the Base URL manually in the database (look for o_base_url in the config table) and then clear the cache by deleting all .php files in the /cache directory.',
'Must enter title message'			=>	'You must enter a title.',
'SMTP passwords did not match'		=>	'You need to enter the SMTP password twice exactly the same to change it.',
'Enter announcement here'			=>	'Enter your announcement here.',
'Enter rules here'					=>	'Enter your rules here.',
'Default maintenance message'		=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.',
'Timeout error message'				=>	'The value of "Timeout online" must be smaller than the value of "Timeout visit".',

//
// Language for appearance.php
//

'Header appearance'					=>	'Header appearance',
'Footer appearance'					=>	'Footer appearance',
'Footer'							=>	'Footer',
'Display head'						=>	'Display settings',
'Default style help'				=>	'The default style will be used by new users and guests. Users can change the style they use, so changing the default style here won\'t change the design for already existing users. You can also force a style, this will reset the style setting for every user except the guest user.',
'About style'						=>	'About %s',
'version'							=>	'version %s',
'Released on'						=>	'Released on %s',
'Designed for'						=>	'Designed for ModernBB %s to %s',
'Force style'						=>	'Force style',
'Set as default'					=>	'Set as default',
'About'								=>	'About',
'Version number help'				=>	'Show ModernBB version number in footer.',
'Info in posts help'				=>	'Show information about the poster under the username in topic view.',
'Post count help'					=>	'Show the number of posts a user has made in topic view, profile and user list.',
'Smilies help'						=>	'Convert smilies to small graphic icons in forum posts.',
'Smilies sigs help'					=>	'Convert smilies to small graphic icons in user signatures.',
'Clickable links help'				=>	'Convert URLs automatically to clickable hyperlinks.',
'Topic review label'				=>	'Topic review',
'Topic review help'					=>	'Maximum amount of posts showed when posting',
'Topics per page help'				=>	'Default amount of topics per page',
'Posts per page label'				=>	'Posts per page',
'Posts per page help'				=>	'Default amount of posts per page',
'Indent label'						=>	'Indent size',
'Index panels head'					=>	'Index settings',
'Moderated by help'                 =>  'Show the "Moderated by" list when moderators are set on a per-forum base.',
'Index statistics help'				=>	'Show the statistics panel on the index.',
'Indent help'						=>	'Amount of spaces that represent a tab',
'Quote depth label'					=>	'Maximum [quote] depth',
'Quote depth help'					=>	'Maximum [quote] can be used in [quote]',
'Video height'                      =>  'Video height',
'Video height help'                 =>  'Height of an embedded video',
'Video width'                       =>  'Video width',
'Video width help'                  =>  'Width of an embedded video',
'Menu items head'					=>	'Additional menu items',
'Menu items help'					=>	'This feature allows you to add more menu items to the navigation bar on every page. The format for adding new links is <code>X = &lt;a href="URL"&gt;LINK&lt;/a&gt;</code> where X is the position at which the link should be inserted. Separate entries with a line break.',
'Default menu'						=>	'Default menu items',
'Menu show index'					=>	'Show the index menu item.',
'Menu show user list'				=>	'Show the user list menu item.',
'Menu show search'					=>	'Show the search menu item.',
'Menu show rules'					=>	'Show the rules menu item.',
'User profile head'					=>	'User profile',
'Title settings head'				=>	'Title settings',
'Title in menu'						=>	'Show board title in menu.',
'Title in header'					=>	'Show board title in header.',
'Description in header'				=>	'Show board description in header.',
'Description settings head'			=>	'Description settings',

//
// Language for email.php
//

'Contact head'						=>	'Contact settings',
'Admin e-mail label'				=>	'Admin email',
'Admin e-mail help'					=>	'The admins email',
'Webmaster e-mail label'			=>	'Webmaster email',
'Webmaster e-mail help'				=>	'The email where the boards mails will be addressed from',
'Subscriptions head'				=>	'Abbonementen',
'Forum subscriptions help'			=>	'Enable users to subscribe to forums.',
'Topic subscriptions help'			=>	'Enable users to subscribe to topics.',
'SMTP head'							=>	'SMTP settings',
'SMTP address label'				=>	'SMTP server address',
'SMTP address help'					=>	'The address of an external SMTP server to send emails with',
'SMTP username label'				=>	'SMTP username',
'SMTP username help'				=>	'Username for SMTP server, only if required',
'SMTP password label'				=>	'SMTP password',
'SMTP change password help'			=>	'Check this if you want to change or delete the currently stored password.',
'SMTP password help'				=>	'Password and confirmation for SMTP server, only when required',
'SMTP SSL help'						=>	'Encrypts the connection to the SMTP server using SSL, only when required and supported.',

//
// Language for features.php
//

'Features head'						=>	'Features settings',
'General'							=>	'General',
'Topics and posts'					=>	'Topics and posts',
'User features'						=>	'User features',
'Search'							=>	'Zoeken',
'Advanced'							=>	'Advanced',
'Quick post help'					=>	'Show a quick post form so users can post a reaction from the topic view.',
'Responsive post help'              =>  'Show "Post" and "Preview" button in topic view on small screens, leave quick post enabled when this is disabled to allow small devices to post comments.',
'Users online help'					=>	'Display info on the index page about users currently browsing the board.',
'Censor words help'					=>	'Censor words in posts. See %s for more info.',
'Signatures help'					=>	'Allow users to attach a signature to their posts.',
'User ranks help'					=>	'Use user ranks. See %s for more info.',
'Topic views help'					=>	'Show the number of views for each topic.',
'Has posted help'					=>	'Show a label in front of the topics where users have posted.',
'GZip help'							=>	'Gzip output sent to the browser. This will reduce bandwidth usage, but use some more CPU. This feature requires that PHP is configured with zlib. If you already have one of the Apache modules (mod_gzip/mod_deflate) set up to compress PHP scripts, disable this feature.',
'Enable advanced search'			=>	'Allow users to use the advanced search options.',
'Search all help'					=>	'Allow search only in 1 forum at a time.',

'First run'							=>	'First run',
'General settings'					=>	'General settings',
'Show first run label'				=>	'Show the first run panel when an user logs in for the first time.',
'Show guests label'					=>	'Show the first run panel to guests with login field and registration button.',
'Welcome text'						=>	'Welcome text',
'First run help message'			=>	'The introduction to the forum displayed in the middle of the first run panel',

//
// Language for forums.php
//

'Post must be integer message'	=>	'Position must be a positive integer value.',
'New forum'						=>	'New forum',

//
// Entry page
//

'Add forum'					=>	'Add forum',
'Update positions'			=>	'Update positions',
'Confirm delete head'		=>	'Confirm delete forum',
'Confirm delete forum info'	=>	'Are you sure that you want to delete the forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Warning! Deleting a forum will delete all posts (if any) in that forum!',

//
// Detailed edit page
//

'Edit forum head'			=>	'Edit forum',
'Edit details subhead'		=>	'Edit forum details',
'Forum name label'			=>	'Forum name',
'Forum description label'	=>	'Description',
'Category label'			=>	'Category',
'Sort by label'				=>	'Sort topics by',
'Topic start'				=>	'Topic start',
'User groups'				=>	'User groups',
'Redirect label'			=>	'Redirect URL',
'Group permissions subhead'	=>	'Edit group permissions',
'Group permissions info'	=>	'In this form, you can set the forum specific permissions for the different user groups. Administrators always have full permissions. Permission settings that differ from the default permissions for the user group are marked red. Some permissions are disabled under some conditions.',
'Read forum label'			=>	'Read forum',
'Post replies label'		=>	'Post replies',
'Post topics label'			=>	'Post topics',
'Revert to default'			=>	'Revert to default',

//
// Language used in groups.php
//

'Title already exists message'	=>	'There is already a group with the title <strong>%s</strong>.',
'Cannot remove default message'	=>	'The default group cannot be removed. In order to delete this group, you must first setup a different group as the default.',

'Add group subhead'				=>	'Add new group',
'Create new group'				=>	'Select a user group from which the new group will inherit its permission settings.',
'Default group subhead'			=>	'Set default group',
'Default group help'			=>	'This is the default user group, e.g. the group users are placed in when they register. Not all groups are available here.',
'Existing groups head'			=>	'Existing groups',
'Edit groups info'				=>	'The pre-defined groups can\'t be removed. However, they can be edited. Please note that in some groups, some options are unavailable. Administrators always have full permissions.',
'Group delete head'				=>	'Group delete',
'Confirm delete info'			=>	'Are you sure that you want to delete the group <strong>%s</strong>?',
'Confirm delete warn'			=>	'<b>Warning:</b> After you deleted a group you cannot restore it.',
'Delete group'					=>	'Delete group',
'Move users info'				=>	'The group <strong>%s</strong> currently has <strong>%s</strong> members. Please select a group to which these members will be assigned upon deletion.',
'Move users label'				=>	'Move users to',

'Group settings head'			=>	'Group settings',
'Group settings subhead'		=>	'Setup group options and permissions',
'Group settings info'			=>	'Below options and permissions are the default permissions for the user group. These options apply if no forum specific permissions are in effect.',
'Group title label'				=>	'Group title',
'User title label'				=>	'User title',
'User title help'				=>	'The title will override the user rank',
'Mod privileges label'			=>	'Moderator privileges',
'Mod privileges help'			=>	'In order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'Edit profile label'			=>	'Edit user profiles',
'Edit profile help'				=>	'If moderator privileges are enabled, allow users to edit user profiles.',
'Rename users label'			=>	'Rename users',
'Rename users help'				=>	'If moderator privileges are enabled, allow users to rename users.',
'Change passwords label'		=>	'Change passwords',
'Change passwords help'			=>	'If moderator privileges are enabled, allow users to change user passwords.',
'Ban users help'				=>	'If moderator privileges are enabled, allow users to ban users.',
'Read board label'				=>	'Read board',
'Read board help'				=>	'If this is disabled, users will only be able to login and logout.',
'View user info label'			=>	'View user information',
'View user info help'			=>	'Allow users to view the user list and user profiles.',
'Post replies help'				=>	'Allow users to post replies in topics.',
'Post topics help'				=>	'Allow users to post new topics.',
'Edit posts label'				=>	'Edit posts',
'Edit posts help'				=>	'Allow users to edit their own posts.',
'Delete posts help'				=>	'Allow users to delete their own posts.',
'Delete topics help'			=>	'Allow users to delete their own topics (including any replies).',
'Set own title label'			=>	'Set own user title',
'Set own title help'			=>	'Allow users to set their own user title.',
'User search label'				=>	'Use search',
'User search help'				=>	'Allow users to use the search feature.',
'User list search label'		=>	'Search user list',
'User list search help'			=>	'Allow users to search for other users in the user list.',
'Send e-mails label'			=>	'Send e-mails',
'Send e-mails help'				=>	'Allow users to send e-mails to other users.',
'Post flood label'				=>	'Post flood interval',
'Post flood help'				=>	'Time users have to wait between posts',
'Search flood label'			=>	'Search flood interval',
'Search flood help'				=>	'Time users have to wait between searches',
'E-mail flood label'			=>	'Email flood interval',
'E-mail flood help'				=>	'Time users have to wait between emails',
'Report flood label'			=>	'Report flood interval',
'Report flood help'				=>	'Time users have to wait between reports',
'Moderator info'				=>	'Please note that in order for a user to have moderator abilities, they must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
'seconds'						=>	'seconds',
'pixels'						=>	'pixels',

//
// Language used in index.php and update.php for Backstage
//

'ModernBB intro'					=>	'Welcome to ModernBB',
'Backup head'						=>	'Back-up',
'Backup info'						=>	'Create new database backup.',
'Backup button'						=>	'Create new backup',
'New reports head'					=>	'New reports',
'Statistics head'					=>	'Statistics',
'Updates'							=>	'Updates',
'View all'							=>	'View all',
'posts'								=>	'posts',
'replies'							=>	'replies',
'reply'								=>	'reply',
'topics'							=>	'topics',
'views'								=>	'views',
'view'								=>	'view',
'users'								=>	'users',

'Not available'						=>	'Not available',
'NA'								=>	'N/A',
'About head'						=>	'About ModernBB',
'ModernBB version label'			=>	'ModernBB version',
'ModernBB version data'				=>	'ModernBB version ',
'Server statistics label'			=>	'Server statistics',
'View server statistics'			=>	'View server statistics',

'ModernBB software updates'			=>	'ModernBB software updates',
'ModernBB updates'					=>	'ModernBB updates',
'Check for updates'					=>	'Check for updates',
'New version'						=>	'It\'s time to update, a new version is available',
'Latest version'					=>	'Thanks for using the latest version of ModernBB',
'Development version'				=>	'You\'re using a development release',

'Reset head'						=>	'ModernBB reset features',
'Soft reset'						=>	'Soft reset',
'Soft reset help'					=>	'The button below will remove the config.php file, this will cause the install to start so you can install ModernBB again. This will not drop the current database. This might be effective if your config.php file is corrupt. This can\'t be undone. Be sure you made a back-up before doing this.',
'Hard reset'						=>	'Hard reset',
'Reset config'						=>	'Reset config.php',
'Hard reset help'					=>	'The button below will remove the config.php file and database, this will cause the install to start so you can install ModernBB again. You will lose all your data. This can\'t be undone. Be sure you made a back-up before doing this.',
'Reset'								=>	'Reset',

//
// Reports
//

'Date and time'						=>	'Date and time',
'No new reports'					=>	'There are no new reports.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Rebuild search index',
'Rebuild index info'			=>	'If you changes something about topics and posts in the database you should rebuild the search index. It\'s recommended to activate %s during rebuilding. This can take a while and can increase the server load during the process!',
'Posts per cycle label'			=>	'Posts per cycle',
'Posts per cycle help'			=>	'Number of posts per pageview, this prevents a timeout, 300 recommended',
'Starting post label'			=>	'Starting post ID',
'Starting post help'			=>	'The ID where to start, default is first ID found in database',
'Empty index label'				=>	'Empty index',
'Empty index help'				=>	'Select this if you want the search index to be emptied before rebuilding (see below).',
'Rebuild completed info'		=>	'Be sure to enable JavaScript during the rebuild (to start a new cycle automatically). When you have to abort the rebuilding, remember the last post ID and enter that ID+1 in "Starting post ID" if you want to continue (Uncheck "Empty index").',
'Rebuild index'					=>	'Rebuild index',
'Rebuilding search index'		=>	'Rebuilding search index',
'Rebuilding index info'			=>	'Rebuilding index. This might be a good time to put on some coffee :-)',
'Processing post'				=>	'Processing post <strong>%s</strong> …',
'Click here'					=>	'Click here',
'Javascript redirect failed'	=>	'JavaScript redirect unsuccessful. %s to continue …',
'Posts must be integer message'	=>	'Posts per cycle must be a positive integer value.',
'Days must be integer message'	=>	'Days to prune must be a positive integer value.',
'No old topics message'			=>	'There are no topics that are %s days old. Please decrease the value of "Days old" and try again.',
'Prune subhead'					=>	'Prune old posts',
'Days old label'				=>	'Days old',
'Days old help'					=>	'The number of days old a topic must be to be pruned',
'Prune sticky label'			=>	'Prune sticky topics',
'Prune from label'				=>	'Prune from forum',
'Prune from help'				=>	'What shall we prune?',
'Prune info'					=>	'It\'s recommended to activate %s during pruning.',
'Confirm prune subhead'			=>	'Confirm prune posts',
'Confirm prune info'			=>	'Are you sure that you want to prune all topics older than %s days from %s (%s topics).',
'Confirm prune warn'			=>	'WARNING! Pruning posts deletes them permanently.',

'Prune users head'			=>	'Prune users',
'Prune by'					=>	'Prune by',
'Registed date'				=>	'Registered date',
'Last login'				=>	'Last login',
'Prune by info'				=>	'What should we count to prune?',
'Minimum days'				=>	'Minimum days since registration/last login',
'Minimum days info'			=>	'The minimum amount of days since event specified above',
'Maximum posts'				=>	'Maximum number of posts',
'Maximum posts info'		=>	'How many posts do you require before an users isn\'t pruned',
'Delete admins'				=>	'Delete admins and mods',
'User status'				=>	'User status',
'Delete any'				=>	'Delete any',
'Delete only verified'		=>	'Delete only verified',
'Delete only unverified'	=>	'Delete only unverified',

//
// Language for settings.php
//

'Options head'						=>	'Global settings',

//
// Essentials section
//

'Essentials subhead'				=>	'Essentials',
'Board desc help'					=>	'What\'s this board about?',
'Base URL label'					=>	'Board URL',
'Base URL problem'					=>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter.',
'Timezone label'					=>	'Default time zone',
'DST help'							=>	'Advance time by 1 hour for daylight saving.',
'Language help'						=>	'The default language',

//
// Essentials section timezone options
//

'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

//
// Timeout Section
//

'Timeouts subhead'					=>	'Time and timeouts',
'PHP manual'						=>	'PHP manual',
'Time format help'					=>	'Now: %s. See %s for more info',
'Date format help'					=>	'Now: %s. See %s for more info',
'Visit timeout label'				=>	'Visit timeout',
'Visit timeout help'				=>	'Time before a visit ends',
'Online timeout label'				=>	'Online timeout',
'Online timeout help'				=>	'Time before someone isn\'t online anymore',

//
// Feeds section
//

'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Default feed type',
'Default feed help'					=>	'Select a feed',
'None'								=>	'None',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duration to cache feeds',
'Feed TTL help'						=>	'Reduce sources by caching feeds',
'No cache'							=>	'Don\'t cache',
'Minutes'							=>	'%d minutes',

//
// Reports section
//

'Reporting method label'			=>	'Reporting method',
'Internal'							=>	'Internal',
'Both'								=>	'Both',
'Reporting method help'				=>	'How should we handle reports?',
'Mailing list label'				=>	'Mailing list',
'Mailing list help'					=>	'A comma separated list of subscribers who get e-mails when new reports are made',

//
// Avatars section
//

'Avatars subhead'					=>	'Avatars',
'Use avatars label'					=>	'Use avatars',
'Use avatars help'					=>	'Enable so users can upload avatars.',
'Upload directory label'			=>	'Upload directory',
'Upload directory help'				=>	'Where avatars will be stored relative to ModernBBs root, write permission required',
'Max width label'					=>	'Max width',
'Max height label'					=>	'Max height',
'Max size label'					=>	'Max size',

//
// Registration Section
//

'Allow new label'					=>	'Allow new registrations',
'Allow new help'					=>	'Allow new users to be made by people.',
'Verify label'						=>	'Verify registrations',
'Verify help'						=>	'Send a random password to users to verify their email address.  ',
'Report new label'					=>	'Report new registrations',
'Report new help'					=>	'Notify people on the mailing list when new user registers.  ',
'Use rules label'					=>	'User forum rules',
'Use rules help'					=>	'Require users to agree with the rules. This will also enable a "Rules" link in the navigation bar.',
'Rules label'						=>	'Enter your rules here',
'Rules help'						=>	'Enter rules or useful information, required when rules are enabled',
'E-mail default label'				=>	'Default email setting',
'E-mail default help'				=>	'Default privacy setting for new registrations',
'Display e-mail label'				=>	'Display email address to other users.',
'Hide allow form label'				=>	'Hide email address but allow form e-mail.',
'Hide both label'					=>	'Hide email address and disallow form email.',
'Antispam API label'				=>	'Antispam API',
'Antispam API help'					=>	'You can request an API key at %s to protect your forum against spam',

//
// Announcement Section
//

'Announcement subhead'				=>	'Announcements',
'Display announcement help'			=>	'Enable this to display the below message in the board.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Enable to activate maintenance mode, the board will only be available for admins. Do not log out when this feature is active!',
'Maintenance message help'			=>	'The message to tell users about the maintenance',
'Cache'								=>	'Cache',
'Cache info'						=>	'Remove all cache files so the database has to return up-to-date values',
'Clear cache'						=>	'Clear cache',

//
// Language for permissions.php
//

'All caps'					=>	'All caps',
'Posting subhead'			=>	'Posting',
'BBCode help'				=>	'Allow BBCode in posts (recommended).',
'Image tag help'			=>	'Allow the BBCode [img] tag in posts.',
'All caps message help'		=>	'Allow a message to contain only capital letters.',
'All caps subject help'		=>	'Allow a subject to contain only capital letters.',
'Require e-mail help'		=>	'Require guests to supply an email address when posting.',
'Signatures subhead'		=>	'Signatures',
'BBCode sigs help'			=>	'Allow BBCode in user signatures.',
'Image tag sigs help'		=>	'Allow the BBCode [img] tag in user signatures (not recommended).',
'All caps sigs help'		=>	'Allow a signature to contain only capital letters.',
'Max sig length label'		=>	'Maximum signature length',
'Max sig length help'		=>	'Maximum amount of characters a signature can have',
'Max sig lines label'		=>	'Maximum signature lines',
'Max sig lines help'		=>	'Maximum amount of lines a signature can have',
'Banned e-mail help'		=>	'Allow users to use a banned email address, mailing list will be warned when this happens.',
'Duplicate e-mail help'		=>	'Allow users to use an email address that is already used, mailing list will be warned when this happens.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Minimum posts must be a positive integer value.',
'Dupe min posts message'	=>	'There is already a rank with a minimun posts value of %s.',
'Add rank subhead'			=>	'Add rank',
'Ranks disabled'			=>	'<strong>User ranks is disabled in %s.</strong>',
'Rank title label'			=>	'Rank title',
'Minimum posts label'		=>	'Minimum posts',
'Edit remove subhead'		=>	'Edit/remove ranks',
'No ranks in list'			=>	'No ranks in list',

//
// Language for reports.php
//

'Deleted user'				=>	'Deleted user',
'Deleted'					=>	'Deleted',
'Post ID'					=>	'Post #%s',
'Reported by'				=>	'Reported by',
'Actions'					=>	'Actions',
'Zap'						=>	'Mark as read',
'Last 10 head'				=>	'10 last read reports',
'Readed by'					=>	'Marked as read by',
'No zapped reports'			=>	'There are no read reports.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'The PHP function phpinfo() has been disabled on this server.',
'Server statistics head'			=>	'Server statistics',
'Server load label'					=>	'Server load',
'Server load data'					=>	'%s - %s user(s) online',
'Environment label'					=>	'Environment',
'Environment data OS'				=>	'Operating system: %s',
'Show info'							=>	'Show info',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Accelerator: %s',
'Turck MMCache'						=>	'Turck MMCache',
'Turck MMCache link'				=>	'turck-mmcache.sourceforge.net/',
'ionCube PHP Accelerator'			=>	'ionCube PHP Accelerator',
'ionCube PHP Accelerator link'		=>	'www.php-accelerator.co.uk/',
'Alternative PHP Cache (APC)'		=>	'Alternative PHP Cache (APC)',
'Alternative PHP Cache (APC) link'	=>	'www.php.net/apc/',
'Zend Optimizer'					=>	'Zend Optimizer',
'Zend Optimizer link'				=>	'www.zend.com/products/guard/zend-optimizer/',
'eAccelerator'						=>	'eAccelerator',
'eAccelerator link'					=>	'www.eaccelerator.net/',
'XCache'							=>	'XCache',
'XCache link'						=>	'xcache.lighttpd.net/',
'Database label'					=>	'Database',
'Database data rows'				=>	'Rows: %s',
'Database data size'				=>	'Size: %s',

//
// Language for users.php
//

'Non numeric message'		=>	'You entered a non-numeric value into a numeric only column.',
'Invalid date time message'	=>	'You entered an invalid date/time.',
'Not verified'				=>	'Not verified',

//
// Actions: mass delete/ban etc.
//

'No users selected'			=>	'No users selected.',
'No move admins message'	=>	'For security reasons, you are not allowed to move multiple administrators to another group. If you want to move these administrators, you can do so on their respective user profiles.',
'No delete admins message'	=>	'Administrators cannot be deleted. In order to delete administrators, you must first move them to a different user group.',
'No ban admins message'		=>	'Administrators cannot be banned. In order to ban administrators, you must first move them to a different user group.',
'No ban mods message'		=>	'Moderators cannot be banned. In order to ban moderators, you must first move them to a different user group.',
'Move users'				=>	'Change user group',
'New group label'			=>	'New group',
'New group help'			=>	'Select a new user group',
'Invalid group message'		=>	'Invalid group ID.',
'Delete users'				=>	'Delete users',
'Ban users'					=>	'Ban users',
'Ban IP label'				=>	'Ban IP addresses',
'Ban IP help'				=>	'Also ban the IP addresses of the banned users to make registering a new account more difficult for them.',

'E-mail address label'		=>	'Email address',
'Real name label'			=>	'Real name',
'Signature'					=>	'Handtekening',
'Posts more than label'		=>	'Number of posts greater than',
'Posts less than label'		=>	'Number of posts less than',
'Last post after label'		=>	'Last post is after',
'Last post before label'	=>	'Last post is before',
'Last visit after label'	=>	'Last visit is after',
'Last visit before label'	=>	'Last visit is before',
'Registered after label'	=>	'Registered after',
'Registered before label'	=>	'Registered before',
'Order by posts'			=>	'Number of posts',
'Order by last visit'		=>	'Last visit',
'Order by registered'		=>	'Registered',
'All groups'				=>	'All groups',
'Unverified users'			=>	'Unverified users',
'IP search head'			=>	'IP search',
'IP address label'			=>	'IP address',
'IP address help'			=>	'The IP address to search for in the post database.',
'Find IP address'			=>	'Find IP address',

'Results title head'		=>	'Title/Status',
'Results posts head'		=>	'Posts',
'Results last used head'	=>	'Last used',
'Results times found head'	=>	'Times found',
'Results find more link'	=>	'Find more users for this ip',
'Results no posts found'	=>	'There are currently no posts by that user in the forum.',
'Ban'						=>	'Ban',
'Change group'				=>	'Change group',
'Bad IP message'			=>	'The supplied IP address is not correctly formatted.',
'Results view IP link'		=>	'IP stats',
'Results no IP found'		=>	'The supplied IP address could not be found in the database.',

//
// Create new user
//

'Add user head'				=>	'Add user',
'Random password info'		=>	'Generate a random password, this will be emailed to the above address. When checked, leave "Password" empty.',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Inhoud',
'Forums'				=>	'Forums',
'Forum settings'		=>	'Forum instellingen',
'Categories'			=>	'Categorieën',
'Board'					=>	'Board',
'Board structure'		=>	'Board structure',
'Censoring'				=>	'Censoring',
'Reports'				=>	'Reports',
'Users'					=>	'Users',
'Ranks'					=>	'Ranks',
'Groups'				=>	'Groups',
'Permissions'			=>	'Permissions',
'Bans'					=>	'Bans',
'Settings'				=>	'Instellingen',
'Global'				=>	'Global',
'Registration'			=>	'Registration',
'Email'					=>	'Email',
'Database'				=>	'Database management',
'Backstage settings'	=>	'Backstage settings',
'Extensions'			=>	'Extensions',

//
// Others
//

'Prune'					=>	'Prune',
'Server statistics'		=>  'Server statistics',

//
// Update service
//

'Available'				=>	'An update, ModernBB v%s, is available',
'Development'			=>	'You are running version %s, the latest stable release is version %s.',
'Download'				=>	'Download v%s',
'Changelog'				=>	'Changelog',

//
// General actions and more
//

'Admin'					=>	'Admin',
'Go back'				=>	'Ga terug',
'Update'				=>	'Update',
'Add'					=>	'Toevoegen',
'Remove'				=>	'Verwijderen',
'Yes'					=>	'Ja',
'No'					=>	'Nee',
'here'					=>	'here',
'Action'				=>	'Action',
'Maintenance mode'		=>	'maintenance mode', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Cookie bar',
'Cookie info'			=>	'We use cookies to give you the best experience on this board.',
'More info'				=>	'More info',
'Cookie set info'		=>	'Show a bar with information about cookies at the bottom of the page.',

//
// Admin loader
//

'No plugin message'		=>	'There is no plugin called %s in the plugin directory.',
'Plugin failed message'	=>	'Loading of the plugin - <strong>%s</strong> - failed.',

//
// Email templtes
//

// Email - activate_email.tpl
'activate_email.tpl'          =>
'Subject: Change email address requested

Hello <username>,

You have requested to have a new email address assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your email address you should just ignore this message. Only if you visit the activation page below will your email address be changed. In order for the activation page to work, you must be logged in to the forum.

To change your email address, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

//
// Email - activate_password.tpl
//
'activate_password.tpl'          =>
'Subject: New password requested

Hello <username>,

You have requested to have a new password assigned to your account in the discussion forum at <base_url>. If you did not request this or if you do not want to change your password you should just ignore this message. Only if you visit the activation page below will your password be changed.

Your new password is: <new_password>

To change your password, please visit the following page:
<activation_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_change.tpl
'banned_email_change.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" changed to banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_post.tpl
'banned_email_post.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" posted with banned email address: <email>

Post URL: <post_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - banned_email_register.tpl
'banned_email_register.tpl'          =>
'Subject: Alert - Banned email detected

User "<username>" registered with banned email address: <email>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_change.tpl
'dupe_email_change.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" changed to an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - dupe_email_register.tpl
'dupe_email_register.tpl'          =>
'Subject: Alert - Duplicate email detected

User "<username>" registered with an email address that also belongs to: <dupe_list>

User profile: <profile_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - form_email.tpl
'form_email.tpl'          =>
'Subject: <mail_subject>

<sender> from <board_title> has sent you a message. You can reply to <sender> by replying to this email.

The message reads as follows:
-----------------------------------------------------------------------

<mail_message>

-----------------------------------------------------------------------

--
<board_mailer> Mailer',

// Email - new_reply.tpl
'new_reply.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_reply_full.tpl
'new_reply_full.tpl'          =>
'Subject: Reply to topic: "<topic_subject>"

<replier> has replied to the topic "<topic_subject>" to which you are subscribed. There may be more new replies, but this is the only notification you will receive until you visit the board again.

The post is located at <post_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_report.tpl
'new_report.tpl'          =>
'Subject: Report(<forum_id>) - "<topic_subject>"

User "<username>" has reported the following message: <post_url>

Reason: <reason>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic.tpl
'new_topic.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_topic_full.tpl
'new_topic_full.tpl'          =>
'Subject: New topic in forum: "<forum_name>"

<poster> has posted a new topic "<topic_subject>" in the forum "<forum_name>", to which you are subscribed.

The topic is located at <topic_url>

The message reads as follows:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

You can unsubscribe by going to <unsubscribe_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - new_user.tpl
'new_user.tpl'          =>
'Subject: Alert - New registration

User "<username>" registered in the forums at <base_url>

User profile: <profile_url>

To administer this account, please visit the following page:
<admin_url>

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - rename.tpl
'rename.tpl'          =>
'Subject: User account renamed

During an upgrade to the forums at <base_url> it was determined your username is too similar to an existing user. Your username has been changed accordingly.

Old username: <old_username>
New username: <new_username>

We apologise for any inconvenience caused.

--
<board_mailer> Mailer
(Do not reply to this message)',

// Email - welcome.tpl
'welcome.tpl'          =>
'Subject: Welcome to <board_title>!

Thank you for registering in the forums at <base_url>. Your account details are:

Username: <username>
Password: <password>

Login at <login_url> to activate the account.

--
<board_mailer> Mailer
(Do not reply to this message)',

);
