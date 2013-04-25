<?php
$messages = array();
$messages['en'] = array(
		'embedvideo-desc' => 'Adds a parser function embedding video from popular sources.',
		'embedvideo-missing-params' => 'EmbedVideo is missing a required parameter.',
		'embedvideo-bad-params' => 'EmbedVideo received a bad parameter.',
		'embedvideo-unparsable-param-string' => 'EmbedVideo received the unparsable parameter string "<tt>$1</tt>".',
		'embedvideo-unrecognized-service' => 'EmbedVideo does not recognize the video service "<tt>$1</tt>".',
		'embedvideo-bad-id' => 'EmbedVideo received the bad id "$1" for the service "$2".',
		'embedvideo-illegal-width' => 'EmbedVideo received the illegal width parameter "$1".',
		'embedvideo-illegal-alignment' => 'EmbedVideo was given an illegal value for the alignment parameter "$1".  Valid values are "right", "left", "center", or "auto".',
                'embedvideo-illegal-screen9-id' => 'EmbedVideo failed to interpret the screen9 id.  Note that the id of a screen9 video is the full html-snippet obtained from the video for embedding.',
);

/** French (Français)
 * @author @lespacedunmatin
 */
$messages['fr'] = array(
		'embedvideo-desc' => 'Ajoute une fonction d\'analyse (un raccourci) pour intégrer des vidéos venant de sites de partages courantes.',
		'embedvideo-missing-params' => 'EmbedVideo a besoin d\un paramètre obligatoire qui est absent.',
		'embedvideo-bad-params' => 'EmbedVideo a reçu un paramètre incorrect.',
		'embedvideo-unparsable-param-string' => 'EmbedVideo a reçu un paramètre non analysable&nbsp;: "<tt>$1</tt>".',
		'embedvideo-unrecognized-service' => 'EmbedVideo ne reconnait pas le site de vidéos "<tt>$1</tt>".',
		'embedvideo-bad-id' => 'EmbedVideo a reçu l\'id incorrect "$1" pour le site "$2".',
		'embedvideo-illegal-width' => 'EmbedVideo a reçu un paramètre de largeur incorrect&nbsp;: "$1".',
		'embedvideo-illegal-alignment' => 'EmbedVideo a reçu une valeur invalide pour le paramètre d\'alignement "$1". Les valeurs Valides sont "right" (droite), "left" (gauche), "center" (centre), ou "auto" (automatique).',
                'embedvideo-illegal-screen9-id' => 'EmbedVideo a échoué à interprêter l\'id screen9. Notez que l\'id d\'une vidéo screen9 est le code html entier obtenu depuis le site pour l\'intégration de la vidéo.',
); 


/** Russian (Русский)
 * @author P@S@f
 */
$messages['ru'] = array(
		'embedvideo-desc' => 'Добавляет функцию синтаксического анализатора для встраивания видео с популярных видеохостингов.',
		'embedvideo-missing-params' => 'В теге EmbedVideo отуствует обязательный параметр.',
		'embedvideo-bad-params' => 'Тег EmbedVideo обнаружил неверный параметр.',
		'embedvideo-unparsable-param-string' => 'Тег EmbedVideo не может обработать строку параметра "<tt>$1</tt>".',
		'embedvideo-unrecognized-service' => 'Тег EmbedVideo не может распознать сервис "<tt>$1</tt>".',
		'embedvideo-bad-id' => 'В тег EmbedVideo введен неверный id "$1" видео для сервиса "$2".',
		'embedvideo-illegal-width' => 'В тег EmbedVideo введен неверный параметр ширины "$1".',
);


/**
 * Swedish (Svenska)
 * @author Andreas Jonsson
 */
$messages['sv'] = array(
		'embedvideo-desc' => 'Lägger till en parserfunktion för att bädda in video från diverse populära videotjänster.',
		'embedvideo-missing-params' => 'EmbedVideo - En obligatorisk parameter har utelämnats.  De två första parametrarna, service och id, som anger videotjänst respektive videoidentitet är obligatoriska',
		'embedvideo-bad-params' => 'EmbedVideo - En felaktig parameter har angivits.',
		'embedvideo-unparsable-param-string' => 'EmbedVideo - Parametersträngen "<tt>$1</tt>" kunde ej tolkas.',
		'embedvideo-unrecognized-service' => 'EmbedVideo - Känner inte till videotjänsten "<tt>$1</tt>".',
		'embedvideo-bad-id' => 'EmbedVideo - Felaktig id "$1" för tjänsten "$2" har angivits.',
		'embedvideo-illegal-width' => 'EmbedVideo - Felaktigt värde "$1" har angivits som bredd.',
		'embedvideo-illegal-alignment' => 'EmbedVideo - Felaktigt värde har angivits som placering: "$1".  Korrekta värden är "right" för högerställd, "left" för vänsterställd, "center" för centrerad eller "auto".',
                'embedvideo-illegal-screen9-id' => 'EmbedVideo - Kunde inte tolka screen9 video-id. Observera att video-identiteten för en screen9-id är hela den html-kodsnutt som fås då man väljer "share -> embed" på screen9 videon.'
);
