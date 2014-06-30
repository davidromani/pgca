<?php

	$cat = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => "Enquesta",
            'polls:add' => "Nova enquesta",
			'polls' => "Enquestes",
			'polls:votes' => "vots",
			'polls:user' => "Enquesta de %s",
			'polls:group_polls' => "Enquestes del grup",
			'polls:group_polls:listing:title' => "Enquestes de %s",
			'polls:user:friends' => "Enquesta %s dels amics",
			'polls:your' => "Les teves enquestes",
			'polls:not_me' => "Enquestes de %s",
			'polls:posttitle' => "enquesta %s: %s",
			'polls:friends' => "Enquestes dels amics",
			'polls:not_me_friends' => "Enquesta %s dels amics",
			'polls:yourfriends' => "Últimes enquestes dels teus amics",
			'polls:everyone' => "Totes les enquestes",
			'polls:read' => "Llegir enquesta",
			'polls:addpost' => "Crear una enquesta",
			'polls:editpost' => "Editar enquesta: %s",
			'polls:edit' => "Editar una enquesta",
			'polls:text' => "Text enquesta",
			'polls:strapline' => "%s",			
			'item:object:poll' => 'Enquestes',
			'item:object:poll_choice' => "Opcions",
			'polls:question' => "Pregunta",
			'polls:responses' => "Opcions de resposta",
			'polls:results' => "[+] Mostra els resultats",
			'polls:show_results' => "Mostra els resultats",
			'polls:show_poll' => "Mostra enquesta",
			'polls:add_choice' => "Afegir una opció de resposta",
			'polls:delete_choice' => "Esborrar opció",
			'polls:settings:group:title' => "Group polls",
			'polls:settings:group_polls_default' => "sí, activat per defecte",
			'polls:settings:group_polls_not_default' => "no, desactivat per defecte",
			'polls:settings:no' => "no",
			'polls:settings:group_profile_display:title' => "If group polls are activated, where should polls content be displayed in group profiles?",
			'polls:settings:group_profile_display_option:left' => "esquerra",
			'polls:settings:group_profile_display_option:right' => "dreta",
			'polls:settings:group_profile_display_option:none' => "cap",
			'polls:settings:group_access:title' => "If group polls are activated, who gets to create polls?",
			'polls:settings:group_access:admins' => "group owners and admins only",
			'polls:settings:group_access:members' => "qualsevol membre del grup",
			'polls:settings:front_page:title' => "Admins can set a front page poll (requires theme support)",
			'polls:none' => "Cap enquesta trobada.",
			'polls:permission_error' => "No tens permís per editar aquesta enquesta.",
			'polls:vote' => "Vota",
			'polls:login' => "Si us plau, fes login si vols votar en aquesta enquesta.",
			'group:polls:empty' => "Cap enquesta",
			'polls:settings:site_access:title' => "Who can create site-wide polls?",
			'polls:settings:site_access:admins' => "Només admins",
			'polls:settings:site_access:all' => "Qualsevol usuari loggejat",
			'polls:can_not_create' => "No tens permís per crear enquestes.",
			'polls:front_page_label' => "Col·loca aquesta enquesta a la pàgina principal.",
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "Últimes enquestes de la comunitat",
			'polls:latest_widget_description' => "Mostra les enquestes més recents.",
			'polls:my_widget_title' => "Les meves enquestes",
			'polls:my_widget_description' => "Aquest widget mostrará les teves enquestes.",
			'polls:widget:label:displaynum' => "Quantes enquestes vols mostrar?",
			'polls:individual' => "Últimes enquestes",
			'poll_individual_group:widget:description' => "Mostra les últimes enquestes d'aquest grup.",
			'poll_individual:widget:description' => "Mostra les teves últimes enquestes",
			'polls:widget:no_polls' => "Encara no hi han cap enquesta per %s.",
			'polls:widget:nonefound' => "Cap enquesta trobada.",
			'polls:widget:think' => "Let %s know what you think!",
			'polls:enable_polls' => "Activar enquestes",
			'polls:group_identifier' => "(en %s)",
			'polls:noun_response' => "resposta",
			'polls:noun_responses' => "respostes",
	        'polls:settings:yes' => "sí",
			'polls:settings:no' => "no",

			// notifications
			'polls:notify:summary' => 'Nova enquesta anomenada %s',
			'polls:notification' =>
'
%s ha creat una enquesta.

%s

Vota sobre aquesta nova enquesta:
%s
',
			
         /**
	     * poll river
	     **/
	        'polls:settings:create_in_river:title' => "Mostra la creació d'enquestes a l'activitat de la plataforma",
			'polls:settings:vote_in_river:title' => "Mostra els vots a l'activitat de la plataforma",
			'polls:settings:send_notification:title' => "Enviar notificacions quan l'enquesta s'hagi creat",
			'river:create:object:poll' => "%s ha creat una enquesta a %s",
			'river:vote:object:poll' => "%s ha votat a l'enquesta de %s",
			'river:comment:object:poll' => "%s ha comentat l'enquesta de %s",
		/**
		 * Status messages
		 */
	
			'polls:added' => "La teva enquesta ha estat creada.",
			'polls:edited' => "La teva enquesta ha estat guardada.",
			'polls:responded' => "Gràcies per respondre, el teu vot ha estat registrat.",
			'polls:deleted' => "El teu vot s'ha esborrat correctament.",
			'polls:totalvotes' => "Vots totals: ",
			'polls:voted' => "El teu vot ha estat registrat per aquesta enquesta. Gràcies per votar.",
			
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => "La teva enquesta no ha estat guardada. Si us plau, torna-ho a provar.",
			'polls:blank' => "Ho sentim: tens que omplir el camp de pregunta i les respostes abans de guardar l'enquesta.",
			'polls:novote' => "Ho sentim: tens que escollir una opció per votar en aquesta enquesta.",
			'polls:notfound' => "Ho sentim: no hem pogut trobar l'enquesta especificada.",
			'polls:nonefound' => "No s'han trobat enquestes de %s",
			'polls:notdeleted' => "Ho sentim: no podem esborrar aquesta enquesta."
	);
					
	add_translation("ca", $cat);

?>
