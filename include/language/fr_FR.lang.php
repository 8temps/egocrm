<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Français (France) - fr_FR',
    'moduleList' => array(
            'Home' => 'Accueil',
			'ResourceCalendar' => 'Calendrier des ressources',
            'Contacts' => 'Contacts',
            'Accounts' => 'Comptes',
            'Opportunities' => 'Affaires',
            'Cases' => 'Tickets',
            'Notes' => 'Notes',
            'Calls' => 'Appels',
            'Emails' => 'Mails',
            'Meetings' => 'Réunions',
            'Tasks' => 'Tâches',
            'Calendar' => 'Calendrier',
            'Leads' => 'Prospects',
            'Currencies' => 'Devises',
            'Activities' => 'Activités',
            'Bugs' => 'Bugs',
            'Feeds' => 'Flux RSS',
            'iFrames' => 'Mes sites',
            'TimePeriods' => 'Périodes',
            'TaxRates' => 'Taux de taxes',
            'ContractTypes' => 'Types de contrat',
            'Schedulers' => 'Planificateur',
            'Project' => 'Projets',
            'ProjectTask' => 'Tâches Projet',
            'Campaigns' => 'Campagnes',
            'CampaignLog' => 'Log des campagnes',
            'Documents' => 'Documents',
            'DocumentRevisions' => 'Version des documents',
            'Connectors' => 'Connecteurs',
            'Roles' => 'Rôles',
            'Notifications' => 'Notifications',
            'Sync' => 'Synchronisation',
            'Users' => 'Utilisateurs',
            'Employees' => 'Employés',
            'Administration' => 'Administration',
            'ACLRoles' => 'Rôles',
            'InboundEmail' => 'Emails entrants',
            'Releases' => 'Versions',
            'Prospects' => 'Cibles',
            'Queues' => 'Files d\'attente',
            'EmailMarketing' => 'Email marketing',
            'EmailTemplates' => 'Email modèles',
            'SNIP' => 'Email archivage',
            'ProspectLists' => 'Cibles - Listes',
            'SavedSearch' => 'Recherches sauvegardées',
            'UpgradeWizard' => 'Assistant de mise à jour',
            'Trackers' => 'Suivis',
            'TrackerPerfs' => 'Suivi des performances',
            'TrackerSessions' => 'Suivi des sessions',
            'TrackerQueries' => 'Suivi des requêtes',
            'FAQ' => 'FAQ',
            'Newsletters' => 'Newsletters',
            'SugarFeed' => 'Flux activités internes',
            'SugarFavorites' => 'Favoris SuiteCRM',

            'OAuthKeys' => 'OAuth Clé Consommateur',
            'OAuthTokens' => 'Jetons OAuth',
        ),

    'moduleListSingular' => array(
            'Home' => 'Accueil',
            'Dashboard' => 'Tableaux de bord',
            'Contacts' => 'Contacts',
            'Accounts' => 'Comptes',
            'Opportunities' => 'Affaires',
            'Cases' => 'Tickets',
            'Notes' => 'Notes',
            'Calls' => 'Appels',
            'Emails' => 'Emails',
            'Meetings' => 'Réunions',
            'Tasks' => 'Tâches',
            'Calendar' => 'Calendrier',
            'Leads' => 'Leads',
            'Activities' => 'Activités',
            'Bugs' => 'Suivi bugs',
            'KBDocuments' => 'Base de connaissance',
            'Feeds' => 'Flux RSS',
            'iFrames' => 'Mon portail',
            'TimePeriods' => 'Périodes',
            'Project' => 'Projets',
            'ProjectTask' => 'Tâches projet',
            'Prospects' => 'Cible',
            'Campaigns' => 'Campagnes',
            'Documents' => 'Documents',
            'SugarFollowing' => 'SuiteCRM Interlocuteurs',
            'Sync' => 'Synchronisation',
            'Users' => 'Utilisateurs',
            'SugarFavorites' => 'Favoris SuiteCRM',

        ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oui',
        '2' => 'Fev',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
            '' => '',
            'Analyst' => 'Analyste',
            'Competitor' => 'Concurrent',
            'Customer' => 'Client',
            'Integrator' => 'Intégrateur',
            'Investor' => 'Investisseur',
            'Partner' => 'Partenaire',
            'Press' => 'Presse',
            'Prospect' => 'Prospect',
            'Reseller' => 'Revendeur',
            'Other' => 'Autre',
        ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
            '' => '',
            'Apparel' => 'Textile',
            'Banking' => 'Banque',
            'Biotechnology' => 'Biotechnologie',
            'Chemicals' => 'Industrie Chimique',
            'Communications' => 'Communication',
            'Construction' => 'Construction - BTP',
            'Consulting' => 'Conseil',
            'Education' => 'Formation',
            'Electronics' => 'Informatique - Electronique',
            'Energy' => 'Energie',
            'Engineering' => 'Ingénierie',
            'Entertainment' => 'Culture-Presse',
            'Environmental' => 'Environnement',
            'Finance' => 'Finance',
            'Government' => 'Administration',
            'Healthcare' => 'Santé',
            'Hospitality' => 'Hopitaux',
            'Insurance' => 'Assurance',
            'Machinery' => 'Industrie lourde',
            'Manufacturing' => 'Industrie Manufact.',
            'Media' => 'Média',
            'Not For Profit' => 'Sans but lucratif',
            'Recreation' => 'Loisir',
            'Retail' => 'Commerce détail',
            'Shipping' => 'Transports',
            'Technology' => 'Technologie',
            'Telecommunications' => 'Télécommunications',
            'Transportation' => 'Voyage-hôtellerie',
            'Utilities' => 'Services',
            'Other' => 'Autre',
        ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
            '' => '',
            'Cold Call' => 'Appel entrant',
            'Existing Customer' => 'Client existant',
            'Self Generated' => 'Récurrent',
            'Employee' => 'Employé',
            'Partner' => 'Partenaire',
            'Public Relations' => 'Relation publique',
            'Direct Mail' => 'Mailing',
            'Conference' => 'Conférence',
            'Trade Show' => 'Salon',
            'Web Site' => 'Site web',
            'Word of mouth' => 'Recommandé',
            'Email' => 'E-mail',
            'Campaign' => 'Campagne',
            'Other' => 'Autre',
        ),
    'opportunity_type_dom' => array(
            '' => '',
            'Existing Business' => 'Récurrent',
            'New Business' => 'Nouvelle affaire',
        ),
    'roi_type_dom' => array(
            'Revenue' => 'Revenu',
            'Investment' => 'Investissement',
            'Expected_Revenue' => 'Revenu attendu',
            'Budget' => 'Budget',

        ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
            '' => '',
            'Primary Decision Maker' => 'Décideur Principal',
            'Business Decision Maker' => 'Acheteur',
            'Business Evaluator' => 'Chef de projet',
            'Technical Decision Maker' => 'Responsable technique',
            'Technical Evaluator' => 'Utilisateur',
            'Executive Sponsor' => 'Sponsor',
            'Influencer' => 'Influenceur',
            'Other' => 'Autre',
        ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
            '' => '',
            'Primary Contact' => 'Contact Principal',
            'Alternate Contact' => 'Contact Alternatif',
        ),
    'payment_terms' => array(
            '' => '',
            'Net 15' => 'Net 15 jours',
            'Net 30' => 'Net 30 jours',
        ),
    'fts_type' => array(
        '' => '',
        'Elastic' => 'elasticsearch',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
            'Prospecting' => 'Prospection',
            'Qualification' => 'Qualification',
            'Needs Analysis' => 'Analyse des besoins',
            'Value Proposition' => 'Chiffrage',
            'Id. Decision Makers' => 'Ident. Décideurs',
            'Perception Analysis' => 'Evaluation',
            'Proposal/Price Quote' => 'Devis/Proposition',
            'Negotiation/Review' => 'Négociation',
            'Closed Won' => 'Gagné',
            'Closed Lost' => 'Perdu',
        ),
    'in_total_group_stages' => array(
        'Draft' => 'Brouillon',
        'Negotiation' => 'Négociation',
        'Delivered' => 'Délivré',
        'On Hold' => 'Suspendu',
        'Confirmed' => 'Confirmé',
        'Closed Accepted' => 'Clos Accepté',
        'Closed Lost' => 'Perdu',
        'Closed Dead' => 'Clos Abandonné',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
            'Call' => 'Appel',
            'Meeting' => 'Réunion',
            'Task' => 'Tâche',
            'Email' => 'E-mail',
            'Note' => 'Note',
        ),
    'salutation_dom' => array(
            '' => '',
            'Mr.' => 'M.',
            'Ms.' => 'Mlle',
            'Mrs.' => 'Mme',
            'Dr.' => 'Dr.',
            'Prof.' => 'Prof.',
        ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(60 => '1 minute avant',
        300 => '5 minutes avant',
        600 => '10 minutes avant',
        900 => '15 minutes avant',
        1800 => '30 minutes avant',
        3600 => '1 heure avant',
        7200 => '2 heures avant',
        10800 => '3 heures avant',
        18000 => '5 heures avant',
        86400 => '1 jour avant',
    ),

    'task_priority_default' => 'Moyenne',
    'task_priority_dom' => array(
            'High' => 'Haute',
            'Medium' => 'Moyenne',
            'Low' => 'Basse',
        ),
    'task_status_default' => 'Non démarré',
    'task_status_dom' => array(
            'Not Started' => 'Non démarrée',
            'In Progress' => 'En cours',
            'Completed' => 'Réalisée',
            'Pending Input' => 'En attente',
            'Deferred' => 'Reportée',
        ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
            'Planned' => 'Planifiée',
            'Held' => 'Tenue',
            'Not Held' => 'Annulée',
        ),
    'extapi_meeting_password' => array(
            'WebEx' => 'WebEx',
        ),
    'meeting_type_dom' => array(
            'Other' => 'Autre',
            'Sugar' => 'SuiteCRM',
        ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
            'Planned' => 'Planifiée',
            'Held' => 'Tenue',
            'Not Held' => 'Annulée',
        ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
            'Inbound' => 'Entrant',
            'Outbound' => 'Sortant',
        ),
    'lead_status_dom' => array(
            '' => '',
            'New' => 'Nouveau',
            'Assigned' => 'Assigné',
            'In Process' => 'En cours',
            'Converted' => 'Converti',
            'Recycled' => 'Réactivé',
            'Dead' => 'Mort',
        ),
    'gender_list' => array(
            'male' => 'Homme',
            'female' => 'Femme',
        ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
            'P1' => 'Haute',
            'P2' => 'Moyenne',
            'P3' => 'Basse',
        ),
    'user_type_dom' => array(
            'RegularUser' => 'Utilisateur normal',
            'Administrator' => 'Administrateur',
        ),
    'user_status_dom' => array(
            'Active' => 'En cours',
            'Inactive' => 'Annulée',
        ),
    'employee_status_dom' => array(
            'Active' => 'En cours',
            'Terminated' => 'Inactif',
            'Leave of Absence' => 'Absence temporaire',
        ),
    'messenger_type_dom' => array(
            '' => '',
            'MSN' => 'MSN',
            'Yahoo!' => 'Yahoo!',
            'AOL' => 'AOL',
        ),
    'project_task_priority_options' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'project_task_priority_default' => 'Moyenne',

    'project_task_status_options' => array(
        'Not Started' => 'Non démarrée',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'En attente',
        'Deferred' => 'Reportée',
    ),
    'project_task_utilization_options' => array(
        '0' => 'aucun',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Brouillon',
        'In Review' => 'En relecture',
        'Underway' => 'En cours',
        'On_Hold' => 'Suspendu',
        'Completed' => 'Réalisée',
    ),
    'project_status_default' => 'Brouillon',

    'project_duration_units_dom' => array(
        'Days' => 'Jours',
        'Hours' => 'Heures',
    ),

    'activity_status_type_dom' => array(''=>'--Aucun--',
        'active' => 'Actif',
        'inactive' => 'Annulée',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Comptes',
    'record_type_display' => array(
            '' => '',
            'Accounts' => 'Comptes',
            'Opportunities' => 'Affaires',
            'Cases' => 'Tickets',
            'Leads' => 'Leads',
            'Contacts' => 'Contacts', // cn (11/22/2005) added to support Emails

            'Bugs' => 'Suivi bugs',
            'Project' => 'Projets',

            'Prospects' => 'Cible',
            'ProjectTask' => 'Tâches projet',

            'Tasks' => 'Tâches',

        ),

    'record_type_display_notes' => array(
            'Accounts' => 'Comptes',
            'Contacts' => 'Contacts',
            'Opportunities' => 'Affaires',
            'Tasks' => 'Tâches',
            'Emails' => 'Emails',

            'Bugs' => 'Suivi bugs',
            'Project' => 'Projets',
            'ProjectTask' => 'Tâches projet',
            'Prospects' => 'Cible',
            'Cases' => 'Tickets',
            'Leads' => 'Leads',

            'Meetings' => 'Réunions',
            'Calls' => 'Appels',
        ),

    'parent_type_display' => array(
            'Accounts' => 'Comptes',
            'Contacts' => 'Contacts',
            'Tasks' => 'Tâches',
            'Opportunities' => 'Affaires',

            'Bugs' => 'Suivi bugs',
            'Cases' => 'Tickets',
            'Leads' => 'Leads',

            'Project' => 'Projets',
            'ProjectTask' => 'Tâches projet',

            'Prospects' => 'Cible',

        ),

    'issue_priority_default_key' => 'Moyenne',
    'issue_priority_dom' => array(
            'Urgent' => 'Urgent',
            'High' => 'Haute',
            'Medium' => 'Moyenne',
            'Low' => 'Basse',
        ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Accepté',
            'Duplicate' => 'Doublon',
            'Closed' => 'Fermé',
            'Out of Date' => 'Périmé',
            'Invalid' => 'Invalide',
        ),

    'issue_status_default_key' => 'Nouveau',
    'issue_status_dom' => array(
            'New' => 'Nouveau',
            'Assigned' => 'Assigné',
            'Closed' => 'Fermé',
            'Pending' => 'En attente',
            'Rejected' => 'Rejeté',
        ),

    'bug_priority_default_key' => 'Moyenne',
    'bug_priority_dom' => array(
            'Urgent' => 'Urgent',
            'High' => 'Haute',
            'Medium' => 'Moyenne',
            'Low' => 'Basse',
        ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Accepté',
            'Duplicate' => 'Doublon',
            'Fixed' => 'Fixé',
            'Out of Date' => 'Périmé',
            'Invalid' => 'Invalide',
            'Later' => 'Reporté',
        ),
    'bug_status_default_key' => 'Nouveau',
    'bug_status_dom' => array(
            'New' => 'Nouveau',
            'Assigned' => 'Assigné',
            'Closed' => 'Fermé',
            'Pending' => 'En attente',
            'Rejected' => 'Rejeté',
        ),
    'bug_type_default_key' => 'Suivi bugs',
    'bug_type_dom' => array(
            'Defect' => 'Défaut',
            'Feature' => 'Fonctionnalité',
        ),
    'case_type_dom' => array(
            'Administration' => 'Administration',
            'Product' => 'Produit',
            'User' => 'Utilisateur',
        ),

    'source_default_key' => '',
    'source_dom' => array(
            '' => '',
            'Internal' => 'Interne',
            'Forum' => 'Forum',
            'Web' => 'Web',
            'InboundEmail' => 'Emails entrants',
        ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
            '' => '',
            'Accounts' => 'Comptes',
            'Activities' => 'Activités',
            'Bugs' => 'Anomalies',
            'Calendar' => 'Calendrier',
            'Calls' => 'Appels',
            'Campaigns' => 'Campagnes',
            'Cases' => 'Tickets',
            'Contacts' => 'Contacts',
            'Currencies' => 'Devises',
            'Dashboard' => 'Tableaux de bord',
            'Documents' => 'Documents',
            'Emails' => 'E-mails',
            'Feeds' => 'Flux',
            'Forecasts' => 'Prévisions',
            'Help' => 'Aide',
            'Home' => 'Accueil',
            'Leads' => 'Prospects',
            'Meetings' => 'Réunions',
            'Notes' => 'Notes',
            'Opportunities' => 'Affaires',
            'Outlook Plugin' => 'Plugin Outlook',
            'Projects' => 'Projets',
            'Quotes' => 'Devis',
            'Releases' => 'Versions',
            'RSS' => 'Flux RSS',
            'Studio' => 'Studio',
            'Upgrade' => 'Mise à Jour',
            'Users' => 'Utilisateurs',
        ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
            '' => '',
            'Planning' => 'Planifiée',
            'Active' => 'En cours',
            'Inactive' => 'Annulée',
            'Complete' => 'Terminée',
            //'In Queue' => 'In Queue',
            //'Sending' => 'Sending',
        ),
    'campaign_type_dom' => array(
            '' => '',
            'Telesales' => 'Téléprospection',
            'Mail' => 'Courrier',
            'Email' => 'E-mail',
            'Print' => 'Impression',
            'Web' => 'Web',
            'Radio' => 'Bouton Radio',
            'Television' => 'Télévision',
            'NewsLetter' => 'Newsletter',
        ),

    'newsletter_frequency_dom' => array(
            '' => '',
            'Weekly' => 'Hebdomadaire',
            'Monthly' => 'Mensuelle',
            'Quarterly' => 'Trimestrielle',
            'Annually' => 'Annuelle',
        ),

    'notifymail_sendtype' => array(
            'SMTP' => 'SMTP',
        ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvier',
        '2' => 'Février',
        '3' => 'Mars',
        '4' => 'Avr',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Août',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Déc',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Fév',
        '3' => 'Mars',
        '4' => 'Avr',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Août',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Déc',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Le dimanche',
        '2' => 'Le lundi',
        '3' => 'Le mardi',
        '4' => 'Le mercredi',
        '5' => 'Le jeudi',
        '6' => 'Le vendredi',
        '7' => 'Le samedi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dim',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Jeu',
        '6' => 'Ven',
        '7' => 'Sam',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_report_types' => array(
        'tabular' => 'Standard',
        'summary' => 'Consolidé',
        'detailed_summary' => 'Consolidé avec détails',
        'Matrix' => 'Matrice',
    ),

    'dom_email_types' => array(
        'out' => 'Envoyé',
        'archived' => 'Archivé',
        'draft' => 'Brouillon',
        'inbound' => 'Entrant',
        'campaign' => 'Campagne',
    ),
    'dom_email_status' => array(
        'archived' => 'Archivé',
        'closed' => 'Fermé',
        'draft' => 'Brouillon',
        'read' => 'Lu',
        'replied' => 'Répondu',
        'sent' => 'Envoyé',
        'send_error' => 'Erreur Envoi',
        'unread' => 'Non Lu',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archivé',
    ),

    'dom_email_server_type' => array('' => '--Aucun(e)--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-- Aucun --',
        'createcase' => 'Créer un Ticket',
        'bounce' => 'Gestion des Bounces',
    ),
    'dom_email_distribution' => array('' => '--Aucun(e)--',
        'direct' => 'Assignation directe',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Moins chargé',
    ),
    'dom_email_errors' => array(1 => 'Ne sélectionner qu\'un utilisateur pour l\'Assignation Directe d\'éléments',
        2 => 'Vous ne devez assigner que des éléments sélectionnés pour l\'Assignation Directe d\'éléments',
    ),
    'dom_email_bool' => array('bool_true' => 'Oui',
        'bool_false' => 'Non',
    ),
    'dom_int_bool' => array(1 => 'Oui',
        0 => 'Non',
    ),
    'dom_switch_bool' => array('on' => 'Sur',
        'off' => 'Non',
        '' => '--Aucun(e)--', ),

    'dom_email_link_type' => array('sugar' => 'Client de messagerie SuiteCRM',
        'mailto' => 'Client Mail Externe', ),

    'dom_email_editor_option' => array('' => '--Aucun(e)--',
        'html' => 'Email HTML',
        'plain' => 'Email Texte Brut', ),

    'schedulers_times_dom' => array('not run' => 'Temps d&#39;execution dépassé, Non Executé',
        'ready' => 'Prêt',
        'in progress' => 'En cours',
        'failed' => 'Echec',
        'completed' => 'Réalisée',
        'no curl' => 'Non exécuté: cURL non disponible',
    ),

    'scheduler_status_dom' => array(
            'Active' => 'En cours',
            'Inactive' => 'Annulée',
        ),

    'scheduler_period_dom' => array(
            'min' => 'Minutes',
            'hour' => 'Heures',
        ),
    'forecast_schedule_status_dom' => array(
            'Active' => 'En cours',
            'Inactive' => 'Annulée',
        ),
    'forecast_type_dom' => array(
            'Direct' => 'Direct',
            'Rollup' => 'Remontée info',
        ),
    'document_category_dom' => array(
            '' => '',
            'Marketing' => 'Marketing',
            'Knowledege Base' => 'Base de connaissance',
            'Sales' => 'Ventes',
        ),

    'document_subcategory_dom' => array(
            '' => '',
            'Marketing Collateral' => 'Marketing Secondaire',
            'Product Brochures' => 'Brochures Produits',
            'FAQ' => 'FAQ',
        ),

    'document_status_dom' => array(
            'Active' => 'En cours',
            'Draft' => 'Brouillon',
            'FAQ' => 'FAQ',
            'Expired' => 'Périmé',
            'Under Review' => 'En cours de révision',
            'Pending' => 'En attente',
        ),
    'document_template_type_dom' => array(
            '' => '',
            'mailmerge' => 'Publipostage',
            'eula' => 'Licence d\'utilisation',
            'nda' => 'Accord de confidentialité',
            'license' => 'Termes de Licence',
        ),
    'dom_meeting_accept_options' => array(
            'accept' => 'Accepter',
            'decline' => 'Décliner',
            'tentative' => 'Incertain',
        ),
    'dom_meeting_accept_status' => array(
            'accept' => 'Accepté',
            'decline' => 'Refusé',
            'tentative' => 'Incertain',
            'none' => 'Sans Pièce Jointe',
        ),
    'duration_intervals' => array('0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '--Aucun(e)--',
        'Daily' => 'Quotidien',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuelle',
        'Yearly' => 'Annuel',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'jour(s)',
        'Weekly' => 'semaine(s)',
        'Monthly' => 'mois',
        'Yearly' => 'année(s)',
    ),

    'duration_dom' => array(
        '' => '--Aucun(e)--',
        '900' => '15 minutes',
        '1800' => '30 minutes',
        '2700' => '45 minutes',
        '3600' => '1 heure',
        '5400' => '1.5 heures',
        '7200' => '2 heures',
        '10800' => '3 heures',
        '21600' => '6 heures',
        '86400' => '1 jour',
        '172800' => '2 jours',
        '259200' => '3 jours',
        '604800' => '1 semaine',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
            'default' => 'Cibles suivies',
            'seed' => 'Cibles non suivies',
            'exempt_domain' => 'Liste d&#39;exclusion de domaine',
            'exempt_address' => 'Liste d&#39;exclusion d&#39;emails',
            'exempt' => 'Exclusion',
            'test' => 'Test',
        ),

    'email_settings_num_dom' => array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ),
    'email_marketing_status_dom' => array(
            '' => '',
            'active' => 'Actif',
            'inactive' => 'Inactif',
        ),

    'campainglog_activity_type_dom' => array(
            '' => '',
            'targeted' => 'Messages envoyés/tentés',
            'send error' => 'Bounces, Autre',
            'invalid email' => 'Bounces, Email invalide',
            'link' => 'Liens cliqués',
            'viewed' => 'Message lus',
            'removed' => 'Demande de Opt Out',
            'lead' => 'Leads créés',
            'contact' => 'Contacts créés',
            'blocked' => 'Messages non envoyés',
        ),

    'campainglog_target_type_dom' => array(
            'Contacts' => 'Contacts',
            'Users' => 'Utilisateurs',
            'Prospects' => 'Cibles',
            'Leads' => 'Prospects',
            'Accounts' => 'Comptes',
        ),
    'merge_operators_dom' => array(
        'like' => 'contient',
        'exact' => 'est exactement',
        'start' => 'commence par',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oui',
        'false' => 'Non',
        'required' => 'Requis',
    ),

    'Elastic_boost_options' => array(
        '0' => 'Désactivé',
        '1' => 'Priorité Faible',
        '2' => 'Priorité Moyenne',
        '3' => 'Priorité Haute',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Désactivé',
        1 => 'Activé',
    ),

    'navigation_paradigms' => array(
        'm' => 'Modules',
        'gm' => 'Modules Groupés',
    ),

    'projects_priority_options' => array(
        'high' => 'Haut',
        'medium' => 'Moyen',
        'low' => 'Bas',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non démarré',
        'inprogress' => 'En cours',
        'completed' => 'Réalisée',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Afficher la légende',
        'collapselegend' => 'Cacher la légende',
        'clickfordrilldown' => 'Cliquer pour développer',
        'drilldownoptions' => 'Options de masquage',
        'detailview' => 'Vue détaillée...',
        'piechart' => 'Graphique en camembert',
        'groupchart' => 'Groupe de graphique',
        'stackedchart' => 'Graphique empilé',
        'barchart' => 'Histogramme',
        'horizontalbarchart' => 'Diagramme horizontal',
        'linechart' => 'Graphique courbe',
        'noData' => 'Aucune donnée',
        'print' => 'Imprimer',
        'pieWedgeName' => 'sections',
    ),
    'release_status_dom' => array(
            'Active' => 'En cours',
            'Inactive' => 'Annulée',
        ),
    'email_settings_for_ssl' => array(
            '0' => '',
            '1' => 'SSL',
            '2' => 'TLS',
        ),
    'import_enclosure_options' => array(
            '\'' => 'Apostrophe (&#39;)',
            '"' => 'Guillemet double (&#34;)',
            '' => '--Aucun(e)--',
            'other' => 'Autre:',
        ),
    'import_delimeter_options' => array(
            ',' => ',',
            ';' => ';',
            '\t' => '\t',
            '.' => '.',
            ':' => ':',
            '|' => '|',
            'other' => 'Autre:',
        ),
    'link_target_dom' => array(
            '_blank' => 'Nouvelle fenêtre',
            '_self' => 'Fenêtre courante',
        ),
    'dashlet_auto_refresh_options' => array(
            '-1' => '-1',
            '30' => 'Toutes les 30 secondes',
            '60' => 'Toutes les minutes',
            '180' => 'Toutes les 3 minutes',
            '300' => 'Toutes les 5 minutes',
            '600' => 'Toutes les 10 minutes',
        ),
    'dashlet_auto_refresh_options_admin' => array(
            '-1' => '- jamais -',
            '30' => 'Toutes les 30 secondes',
            '60' => 'Toutes les minutes',
            '180' => 'Toutes les 3 minutes',
            '300' => 'Toutes les 5 minutes',
            '600' => 'Toutes les 10 minutes',
        ),
    'date_range_search_dom' => array(
            '=' => 'Le',
            'not_equal' => 'Différent du',
            'greater_than' => 'Après le',
            'less_than' => 'Avant le',
            'last_7_days' => 'Dans les 7 derniers jours',
            'next_7_days' => 'Dans les 7 prochains jours',
            'last_30_days' => 'Dans les 30 derniers jours',
            'next_30_days' => 'Dans les 30 prochains jours',
            'last_month' => 'Le mois dernier',
            'this_month' => 'Ce mois-ci',
            'next_month' => 'Le mois prochain',
            'last_year' => 'L&#39;année dernière',
            'this_year' => 'Cette année',
            'next_year' => 'L&#39;année prochaine',
            'between' => 'Entre',
        ),
    'numeric_range_search_dom' => array(
            '=' => 'Le',
            'not_equal' => 'Différent de',
            'greater_than' => 'Supérieur à',
            'greater_than_equals' => 'Supérieur ou égal à',
            'less_than' => 'Inférieur à',
            'less_than_equals' => 'Inférieur ou égal à',
            'between' => 'Entre',
        ),
    'lead_conv_activity_opt' => array(
            'copy' => 'Copier',
            'move' => 'Déplacer',
            'donothing' => 'Ne rien faire',
        ),
);

$app_strings = array(
    'LBL_TOUR_NEXT' => 'Suivant',
    'LBL_TOUR_SKIP' => 'Passer',
    'LBL_TOUR_BACK' => 'Précédent',
    'LBL_TOUR_CLOSE' => 'Fermer',
    'LBL_TOUR_TAKE_TOUR' => 'Faire le tour',
    'LBL_MY_AREA_LINKS' => 'Ma zone de liens:' /*for 508 compliance fix*/,
    'LBL_GETTINGAIR' => 'Faire de la place' /*for 508 compliance fix*/,
    'LBL_WELCOMEBAR' => 'Bienvenue' /*for 508 compliance fix*/,
    'LBL_ADVANCEDSEARCH' => 'Recherche avancée' /*for 508 compliance fix*/,
    'LBL_MOREDETAIL' => 'Plus de détails' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editer à la volée' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Voir' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Rechercher' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_1' => 'Colonne' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_2' => '2 Colonnes' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_3' => '3 Colonnes' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Recherche avancée' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Masquer/Afficher' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Effacer' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo société' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Calendrier' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Avancée',
    'LBL_BASIC' => 'Basique',
    'LBL_MODULE_FILTER' => 'Filtré par',
    'LBL_CONNECTORS_POPUPS' => 'Popups des connecteurs',
    'LBL_CLOSEINLINE' => 'Fermer',
    'LBL_EDITINLINE' => 'Editer',
    'LBL_VIEWINLINE' => 'Afficher',
    'LBL_INFOINLINE' => 'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Propulsé par SugarCRM',
    'LBL_PRINT' => 'Imprimer',
    'LBL_HELP' => 'Aide',
    'LBL_ID_FF_SELECT' => 'Sélectionner',
    'DEFAULT' => 'Défaut',
    'LBL_SORT' => 'Trier',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Ajouter un serveur...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS?',
    'LBL_NO_ACTION' => 'Il n&#39;y a aucune action portant ce nom',
    'LBL_NO_SHORTCUT_MENU' => 'Aucune action n’est disponible.',
    'LBL_NO_DATA' => 'Aucune donnée',
    'LBL_ROUTING_ADD_RULE' => 'Ajouter une règle',
    'LBL_ROUTING_ALL' => 'Au moins',
    'LBL_ROUTING_ANY' => 'N&#39;importe',
    'LBL_ROUTING_BREAK' => '-',
    'LBL_ROUTING_BUTTON_CANCEL' => 'Annuler',
    'LBL_ROUTING_BUTTON_SAVE' => 'Sauvegarder les règles',

    'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Copier l&#39;email',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Supprimez l’objet SuiteCRM',
    'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Supprimer le fichier',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Supprimer l&#39;email',
    'LBL_ROUTING_ACTIONS_FORWARD' => 'Transférer l&#39;email',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Marquer d&#39;un Drapeau',
    'LBL_ROUTING_ACTIONS_MARK_READ' => 'Marquer comme lu',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Marquer comme non-lu',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Déplacer l&#39;email',
    'LBL_ROUTING_ACTIONS_PEFORM' => 'Appliquer les actions suivantes',
    'LBL_ROUTING_ACTIONS_REPLY' => 'Répondre à l&#39;email',

    'LBL_ROUTING_CHECK_RULE' => 'Une erreur a été détectée :',
    'LBL_ROUTING_CHECK_RULE_DESC' => 'Vérifier tous les champs marqués.',
    'LBL_ROUTING_CONFIRM_DELETE' => 'Voulez-vous supprimer cette règle ?<br />Cette action est irréversible.',

    'LBL_ROUTING_FLAGGED' => 'Ajouter un drapeau',
    'LBL_ROUTING_FORM_DESC' => 'Les règles sauvées sont immédiatement appliquées.',
    'LBL_ROUTING_FW' => 'TR:',
    'LBL_ROUTING_LIST_TITLE' => 'Règles',
    'LBL_ROUTING_MATCH' => 'Si',
    'LBL_ROUTING_MATCH_2' => 'les conditions suivantes sont réunies:',
    'LBL_NOTIFICATIONS' => 'Notifications',
    'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION' => 'Message',
    'LBL_ROUTING_MATCH_FROM_ADDR' => 'De',
    'LBL_ROUTING_MATCH_NAME' => 'Sujet',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Priorité haute',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Priorité normale',
    'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Priorité basse',
    'LBL_ROUTING_MATCH_TO_ADDR' => 'A',
    'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Contient',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Ne contient pas',

    'LBL_ROUTING_NAME' => 'Nom de la règle',
    'LBL_ROUTING_NEW_NAME' => 'Nouvelle règle',
    'LBL_ROUTING_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Message original.',
    'LBL_ROUTING_RE' => 'RE:',
    'LBL_ROUTING_SAVING_RULE' => 'Règle sauvée',
    'LBL_ROUTING_SUB_DESC' => 'Les règles sont activées. Cliquer sur le nom pour l&#39;éditer.',
    'LBL_ROUTING_TO' => 'à',
    'LBL_ROUTING_TO_ADDRESS' => 'à l&#39;adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'avec le modèle',
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Vous avez des valeurs pour les champs numéro de téléphone et adresse. Pour remplacer ces valeurs avec celles du compte que vous avez sélectionné, cliquez sur OK. Pour garder les valeurs actuelles, cliquez sur Annuler.',
    'LBL_DROP_HERE' => '[Posez ici]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Editer',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Mettre Gmail par défaut',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nom',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Agent de transfert de courrier',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification SMTP ?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Utiliser une connexion SSL',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Utilisateur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Principal',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Vous avez oublié de définir l&#39;utilisateur et le mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Utilisateur SMTP requis',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Mot de passe SMTP requis',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'Gestion des comptes email',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Le protocole POP3 ne sera plus supportée dans les prochaines versions. Seulement le protocole IMAP sera supporté.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Définissez les paramètres des comptes emails que vous souhaitez visualiser dans votre CRM.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Définissez les paramètres des serveurs SMTP disponibles pour les envois de mails depuis votre CRM.',
    'LBL_EMAIL_ADD' => 'Ajouter une adresse',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Terminé',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Vider',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cci:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'A/Cc/Cci',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nouvelle liste',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Seule l&#39;édition des contacts est prise en charge pour le moment.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtre',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Prénom',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Mes contacts',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Mes listes de diffusion',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aucune adresse trouvée',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Sauvegarder et ajouter au carnet d&#39;adresse',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Rechercher',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Carnet d&#39;adresses',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carnet d&#39;adresses',
    'LBL_EMAIL_REPORTS_TITLE' => 'Rapports',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null, null, '.gif', 'Address Book').' Carnet d&#39; adresses',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attention, le SMTP que vous voulez supprimer est asssocié à un compte Mail. Voulez-vous continuer?',
    'LBL_EMAIL_ADDRESSES' => 'Adresse(s) email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresse email',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'Adresses email',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assignation',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS2' => 'A partir des documents SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modèles d&#39;attachements',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fichier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Joint',
    'LBL_EMAIL_BCC' => 'CCI',
    'LBL_EMAIL_CANCEL' => 'Annuler',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Encodage',
    'LBL_EMAIL_CHECK' => 'Relever les emails',
    'LBL_EMAIL_CHECKING_NEW' => 'Relever les nouveaux emails',
    'LBL_EMAIL_CHECKING_DESC' => 'Le premier contrôle des nouveaux comptes peut prendre un certain temps. Veuillez patienter.',
    'LBL_EMAIL_CLOSE' => 'Fermer',
    'LBL_EMAIL_COFFEE_BREAK' => 'Le traitement des bo&icirc;tes aux lettres volumineuses prend plus de temps. Veuillez patienter.',
    'LBL_EMAIL_COMMON' => 'Commun',

    'LBL_EMAIL_COMPOSE' => 'Composer un email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Votre email est sans destinataire.',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Associé avec',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Le contenu du mail est vide. Envoyer tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Le sujet de votre email est vide. Envoyer/Sauvegarder tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(Aucun sujet)',
    'LBL_EMAIL_COMPOSE_READ' => 'Lire et composer un email',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Envoyer depuis le compte',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Options',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Veuillez saisir une adresse email valide pour les champs A, CC et CCI',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Supprimer cet email?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Supprimer cette entrée de votre carnet d&#39;adresse ?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Voulez-vous vraiment supprimer cette signature ?',

    'LBL_EMAIL_CREATE_NEW' => '-- Créer depuis --',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiples',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vide',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date d&#39;envoi',
    'LBL_EMAIL_DATE_RECEIVED' => 'Date de réception',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Assigné à l&#39;utilisateur',
    'LBL_EMAIL_DATE_TODAY' => 'Aujourd&#39;hui',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Hier',
    'LBL_EMAIL_DD_TEXT' => 'email(s) sélectionné(s).',
    'LBL_EMAIL_DEFAULTS' => 'Défaut',
    'LBL_EMAIL_DELETE' => 'Supprimer',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer le(s) message(s) sélectionné(s) ?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email(s) supprimé(s) avec succès.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Suppression des messages',
    'LBL_EMAIL_DETAILS' => 'Détails',
    'LBL_EMAIL_DISPLAY_MSG' => 'Affichage des emails {0} à {1} sur {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Affichage des emails {0} à {1} sur {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Editer le contact',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Seule l&#39;adresse principale est utilisée quand vous travaillez avec les contacts.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Editer la liste de diffusion',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vider la poubelle',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Suppression des messages envoyés',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Vidage des fichiers du cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Aucune adresse email à afficher.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Aucune adresse email à afficher.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Le nom du dossier doit être unique et non vide. Veuillez essayer à nouveau.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossible de supprimer le dossier. Soit ce dossier ou soit un dossier lié a une bo&icirc;te aux lettres qui lui est associée.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne peut pas déterminer le dossier lié au contexte. Essayer de nouveau.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vérifiez vos paramètres.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Assurez-vous d&#39;avoir saisi un prénom.',
    'LBL_EMAIL_ERROR_DESC' => 'Erreurs détectées :',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Vous n&#39;avez pas accès à cette section. Veuillez contacter votre administrateur système pour obtenir un accès.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Les noms de dossier de SuiteCRM doivent être uniques.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Veuillez saisir des critères de recherche.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Une erreur est survenue',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Une liste d&#39;email avec ce nom existe déjà',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message supprimé du serveur',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Chaque message est supprimé du serveur ou déplacé vers un dossier différent',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Impossible d&#39;accéder au Serveur Mail. Veuillez contacter un administrateur du Serveur Mail.',
    'LBL_EMAIL_ERROR_MOVE' => 'Le déplacement des emails entre serveurs et/ou les comptes n&#39;est pas encore supporté.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Erreur lors du déplacement',
    'LBL_EMAIL_ERROR_NAME' => 'Nom requis',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresse émetteur requise',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Veuillez ajouter un fichier',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Le renommage des dossiers IMAP n&#39;est pas encore supporté',
    'LBL_EMAIL_ERROR_SERVER' => 'Adresse de serveur email requise',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Le compte mail n&#39;a pas pu être sauvegardé.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Le serveur de mail a mis trop de temps à répondre',
    'LBL_EMAIL_ERROR_USER' => 'Identifiant de connexion requis',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Mot de passe requis',
    'LBL_EMAIL_ERROR_PORT' => 'Port du serveur mail requis',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protocole du serveur mail requis',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Dossier monitoré requis',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Dossier Poubelle requis',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Information indisponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Le SMTP n&#39;est pas configuré.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '').'Dossiers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Déplacer vers',
    'LBL_EMAIL_FOLDERS_ADD' => 'Ajouter',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Ajouter un dossier',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renommer un dossier',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sauvegarder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dossier Parent',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ce dossier ne peut être modifié',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce dossier ?\nCeci est irréversible.\nLa suppression d&#39;un dossier entraîne la suppression de tous ses sous-dossiers !',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nom du Dossier',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Veuillez sélectionner un dossier pour effectuer cette action.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestion des dossiers',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Utiliser les groupes',

    'LBL_EMAIL_FORWARD' => 'Transférer',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Téléchargement de l&#39;email [[count]] sur [[total]]',
    'LBL_EMAIL_FOUND' => 'Trouver',
    'LBL_EMAIL_FROM' => 'De',
    'LBL_EMAIL_GROUP' => 'Groupe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groupe',
    'LBL_EMAIL_HOME_FOLDER' => 'Accueil',
    'LBL_EMAIL_HTML_RTF' => 'Envoyer en HTML',
    'LBL_EMAIL_IE_DELETE' => 'Suppression du compte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Effacement de la signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce compte ?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Suppression effectuée.',
    'LBL_EMAIL_IE_SAVE' => 'Sauvegarde des infos',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer l&#39;email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import',
    'LBL_EMAIL_INVALID' => 'Invalide',
    'LBL_EMAIL_LOADING' => 'Chargement en cours...',
    'LBL_EMAIL_MARK' => 'Marquer',
    'LBL_EMAIL_MARK_FLAGGED' => '"avec Drapeau"',
    'LBL_EMAIL_MARK_READ' => '"lu"',
    'LBL_EMAIL_MARK_UNFLAGGED' => '"sans Drapeau"',
    'LBL_EMAIL_MARK_UNREAD' => '"non-lu"',
    'LBL_EMAIL_ASSIGN_TO' => 'Assigné à',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Créer un dossier',
    'LBL_EMAIL_MENU_COMPOSE' => 'Envoyé à',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Supprimer le dossier',
    'LBL_EMAIL_MENU_EDIT' => 'Editer',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Corbeille vide',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniser',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Nettoyer les fichiers de cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Supprimer',
    'LBL_EMAIL_MENU_RENAME' => 'Renommer',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Veuillez effectuer une sélection pour réaliser cette action.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Créer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Archiver ces email(s) dans SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Envoyer un email à cette liste de diffusion',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Envoyer un email à ce contact',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Supprimer ce contact',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Supprimer cet email(s)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Supprimer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Editer un Contact',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Editer une liste de diffusion',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vider toutes les corbeilles de ce compte',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Marquer ces emails avec d&#39;un Drapeau',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marquer ces emails comme lus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Enlever les Drapeaux de ces emails',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Marquer ces emails comme non-lus',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Supprimer des listes de diffusion',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renommer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Répondre à ces e_mail(s)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Répondre à tous les destinataires de ces email(s)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'Nom de liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Sélectionner l&#39;adresse d&#39;une liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresse de liste de diffusion disponible',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b> pour une sélection multiple<br />(Pour Mac utiliser <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'Non',
    'LBL_EMAIL_NOT_SENT' => 'Le système est ne peut pas traiter votre demande. Veuillez contacter l&#39;administrateur du système.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_EMAIL_OPEN_ALL' => 'Ouvrir dans un onglet',
    'LBL_EMAIL_OPTIONS' => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Création rapide',
    'LBL_EMAIL_OPT_OUT' => 'Ne veut pas recevoir d&#39;emailing',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Ne veut plus recevoir d&#39;email et adresse invalide',
    'LBL_EMAIL_PAGE_AFTER' => 'sur {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Page',
    'LBL_EMAIL_PERFORMING_TASK' => 'Action en cours...',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Imprimer',

    'LBL_EMAIL_QC_BUGS' => 'Créer un Bug lié à cet email',
    'LBL_EMAIL_QC_CASES' => 'Créer un Ticket lié à cet email',
    'LBL_EMAIL_QC_LEADS' => 'Créer un Lead lié à cet email',
    'LBL_EMAIL_QC_CONTACTS' => 'Créer un Contact lié à cet email',
    'LBL_EMAIL_QC_TASKS' => 'Créer une Tâche liée à cet email',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Affaire',
    'LBL_EMAIL_QUICK_CREATE' => 'Création rapide',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Maj des dossiers',
    'LBL_EMAIL_RELATE_TO' => 'Relatif à',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Enregistrement(s) lié(s)',
    'LBL_EMAIL_RECORD' => 'Enregistrement de l&#39;Email',
    'LBL_EMAIL_REMOVE' => 'Supprimer',
    'LBL_EMAIL_REPLY' => 'Répondre',
    'LBL_EMAIL_REPLY_ALL' => 'Répondre à tous',
    'LBL_EMAIL_REPLY_TO' => 'Répondre à',
    'LBL_EMAIL_RETRIEVING_LIST' => 'Récupérer depuis la liste d&#39;email',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Récupérer le message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Récupération de l&#39;Email enregistré',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Merci de sélectionner un seul enregistrement !',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Retourner au module précédent ?',
    'LBL_EMAIL_REVERT' => 'Revenir',
    'LBL_EMAIL_RELATE_EMAIL' => 'Email relié',

    'LBL_EMAIL_RULES_TITLE' => 'Gestion des règles',

    'LBL_EMAIL_SAVE' => 'Sauvegarder',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sauvegarder &amp; Refaire',
    'LBL_EMAIL_SAVE_DRAFT' => 'Sauvegarder le brouillon',

    'LBL_EMAIL_SEARCHING' => 'Recherche en cours',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Recherche avancée',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date de début',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date de fin',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Corps du message',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Aucun résultat pour vos critères de recherche.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Résultats de recherche',
    'LBL_EMAIL_SEARCH_TITLE' => 'Recherche simple',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Compte',

    'LBL_EMAIL_SELECT' => 'Sélectionner',

    'LBL_EMAIL_SEND' => 'Envoyer',
    'LBL_EMAIL_SENDING_EMAIL' => 'Envoi en cours...',

    'LBL_EMAIL_SETTINGS' => 'Paramètres',
    'LBL_EMAIL_SETTINGS_2_ROWS' => '2 lignes',
    'LBL_EMAIL_SETTINGS_3_COLS' => '3 colonnes',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Style du modèle',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Comptes',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Effacer le formulaire',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Importer l&#39;email comme vu',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Vérifier les nouveaux emails',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Utiliser le panneau de prévisualisation',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Utiliser une pop-up',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Nombre d&#39;emails par page',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Editer un compte',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Dossiers',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'De (adresse)',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresse email de réception:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'A (adresse)',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'De (nom)',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Répondre',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Plein écran',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniser tout les comptes',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un email a été envoyé. Vérifiez si vous avez bien reçu cet email.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Cette action effectuera la synchronisation entre les comptes emails et leur contenu.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Voulez-vous effectuer une synchronisation complète ?\nPour les comptes volumineux cela peut prendre plusieurs minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Maintenez enfoncée la touche Shift ou la touche Ctrl pour sélectionner plusieurs dossiers',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Général',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Activer les "dossiers de groupe"',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Créer un "dossier de groupe"',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Sauvegarder le "dossier de groupe"',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Récupérer le "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Editer le "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nom du compte mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Définir le nombre de mails par page. Un rafraichissement de la page est nécessaire pour visualiser la modification.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Récupére les infos',
    'LBL_EMAIL_SETTINGS_RULES' => 'Règles',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Paramètres sauvegardés',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Envoyer les emails en texte brut uniquement',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Activer',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Nombre d&#39;emails par page',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Placer les onglets en bas',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Affichage',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Préférences',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Mode expert',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dossier(s) "Perso" disponible(s)',
    'LBL_EMAIL_ERROR_PREPEND' => 'Erreur emailing :',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serveur SMTP sélectionné invalide pour votre compte Mail. Configurer le serveur SMTP ou en choisir un autre',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Vous n&#39;avez pas configuré le serveur SMTP pour votre compte Mail. Configurer ou choir le serveur SMTP pour le compte Mail.',
    'LBL_EMAIL_SHOW_READ' => 'Voir tous',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Voir seulement les non-lus',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Créer une signature',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Nom de la signature',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Contenu de la signature',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Dossiers distants ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[dossiers SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Sujet',
    'LBL_EMAIL_SUCCESS' => 'Succès',
    'LBL_EMAIL_SUGAR_FOLDER' => 'Dossier SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Le modèle d&#39;email est vide',
    'LBL_EMAIL_TEMPLATES' => 'Modèles',
    'LBL_EMAIL_TEXT_FIRST' => 'Première Page',
    'LBL_EMAIL_TEXT_PREV' => 'Page Précédente',
    'LBL_EMAIL_TEXT_NEXT' => 'Page Suivante',
    'LBL_EMAIL_TEXT_LAST' => 'Dernière Page',
    'LBL_EMAIL_TEXT_REFRESH' => 'Rafraîchir',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_TOGGLE_LIST' => 'Basculer en mode liste',
    'LBL_EMAIL_VIEW' => 'Autres vues',
    'LBL_EMAIL_VIEWS' => 'Autres vues',
    'LBL_EMAIL_VIEW_HEADERS' => 'Voir en-têtes',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Voir la version imprimable',
    'LBL_EMAIL_VIEW_RAW' => 'Voir format brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Cette fonctionnalité n&#39;est pas supportée quand vous utilisez le protocole POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lien texte par défaut.',
    'LBL_EMAIL_YES' => 'Oui',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Envoyer un email de test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Email de test envoyé !',
    'LBL_EMAIL_MESSAGE_NO' => 'Message N°',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import terminé',
    'LBL_EMAIL_IMPORT_FAIL' => 'Echec de l&#39;import, le message est peut être déjà importé, ou bien il a été supprimé du serveur',

    'LBL_LINK_NONE' => 'Aucun',
    'LBL_LINK_ALL' => 'Tous',
    'LBL_LINK_RECORDS' => 'Enregister',
    'LBL_LINK_SELECT' => 'Sélectionner',
    'LBL_LINK_ACTIONS' => 'Actions',
    'LBL_LINK_MORE' => 'plus',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmation',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Souhaitez-vous vous terminer cette activité (#module#) ?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Ne pas faire apparaitre ce message par la suite',
    'LBL_INVALID_FILE_EXTENSION' => 'Extension de fichier invalide',

    'ERR_AJAX_LOAD' => 'Une erreur a été recontrée:',
    'ERR_AJAX_LOAD_FAILURE' => 'Il y a eu une erreur lors du traitement de votre demande, veuillez réessayer ultérieurement.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si cette erreur persiste, veuillez demander à votre administrateur de désactiver Ajax pour ce module',
    'ERR_CREATING_FIELDS' => 'Erreur de saisie de champ:',
    'ERR_CREATING_TABLE' => 'Erreur de création de la table:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Le séparateur des décimales ne peut pas être le même que celui des milliers.\n\n  Merci de modifier ces valeurs.',
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'ERR_EXPORT_DISABLED' => 'Exports Désactivés.',
    'ERR_EXPORT_TYPE' => 'Erreur d&#39;exportation',
    'ERR_INVALID_AMOUNT' => 'Merci de saisir un montant valide.',
    'ERR_INVALID_DATE_FORMAT' => 'Le format de la date doit être: aaaa-mm-jj',
    'ERR_INVALID_DATE' => 'Merci de saisir une date valide.',
    'ERR_INVALID_DAY' => 'Merci de saisir un jour valide.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Merci de saisir une adresse Email valide.',
    'ERR_INVALID_FILE_REFERENCE' => 'Référence Fichier Invalide',
    'ERR_INVALID_HOUR' => 'Merci de saisir une heure valide.',
    'ERR_INVALID_MONTH' => 'Merci de saisir un mois valide.',
    'ERR_INVALID_TIME' => 'Merci de saisir un horaire valide.',
    'ERR_INVALID_YEAR' => 'Merci de saisir une année à 4 chiffres valide.',
    'ERR_NEED_ACTIVE_SESSION' => 'Une session active est nécessaire pour l&#39;exportation.',
    'ERR_NO_HEADER_ID' => 'Cette fonctionnalité n&#39;est pas supportée dans ce thème.',
    'ERR_NOT_ADMIN' => 'Accès non autorisé à l&#39;administration.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s):',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) invalide(s):',
    'ERR_INVALID_VALUE' => 'Valeur incorrecte:',
    'ERR_NO_SUCH_FILE' => 'Le fichier n&#39;existe pas sur le système',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d&#39;utiliser le simple guillemet pour',
    'ERR_NOTHING_SELECTED' => 'Merci de sélectionner un élément pour continuer.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Une Affaire nommée %s existe déja. Veuillez entrer un autre nom.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Aucune Affaire n&#39;a été précisée. Veuillez précisez une affaire ci-dessous.',
    'ERR_POTENTIAL_SEGFAULT' => 'Il est possible qu\'une erreur de segmentation Apache soit apparue.  Veuillez le signaler à votre administrateur système afin qu\'il confirme ce diagnostique et le signale à SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Un utilisateur ne peut pas se reporter à lui-même.',
    'ERR_SINGLE_QUOTE' => 'Utiliser la simple quote n&#39;est pas permis pour ce champ. Merci de changer la valeur.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Pas de correspondance pour le champ:',
    'ERR_SQS_NO_MATCH' => 'Pas de correspondance',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Veuillez spécifier une &#39;clé&#39; d&#39;index dans les paramètres d&#39;affichage pour les Meta-données',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Erreur : Le nom du portail est déjà assigné à un autre contact..',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'La valeur du champ n&#39;est pas compatible avec le format défini',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Une erreur s&#39;est produite lorsque vous tentez de sauvegarder lien externe.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Une erreur est survenue durant l&#39;envoi du fichier. Veuillez vous assurer que le fichier envoyé n&#39;est pas vide.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to SuiteCRM error log file for details.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to SuiteCRM error log file for details.',
    'ERR_EXTERNAL_API_403' => 'Autorisation refusée. Ce type de fichier n&#39;est pas pris en charge.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Le jeton d\'accés OAuth ( OAuth Access Token ) est manquant.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} files may only be used with a SuiteCRM {1} database.',

    'LBL_ACCOUNT' => 'Compte',
    'LBL_OLD_ACCOUNT_LINK' => 'Ancien Compte',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Voir résumé',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Voir résumé [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Ajouter [Alt+A]',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_DOCUMENT' => 'Ajouter un Document',
    'LBL_REPLACE_BUTTON' => 'Remplacer',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Ajouter à la liste des cibles',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Ajouter à une Liste de Cibles',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Ajouter des Contacts à la liste des cibles',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Cliquer pour Fermer',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Fermer',
    'LBL_ADDITIONAL_DETAILS' => 'Informations complémentaires',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiver',
    'LBL_ASSIGNED_TO_USER' => 'Assigné à l&#39;utilisateur',
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_BACK' => 'Retour',
    'LBL_BILL_TO_ACCOUNT' => 'Facturer le Compte',
    'LBL_BILL_TO_CONTACT' => 'Facturer le Contact',
    'LBL_BILLING_ADDRESS' => 'Adresse de Facturation',
    'LBL_QUICK_CREATE_TITLE' => 'Création rapide',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Bugs',
    'LBL_BY' => 'par',
    'LBL_CALLS' => 'Appels',
    'LBL_CALL' => 'Appel',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Envoyer un lot d&#39;emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Envoyer',
    'LBL_CASE' => 'Ticket',
    'LBL_CASES' => 'Tickets',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_CHANGE_BUTTON_LABEL' => 'Sélectionner',
    'LBL_CHANGE_BUTTON_TITLE' => 'Modifier [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Cocher tout',
    'LBL_CITY' => 'Ville',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Vider',
    'LBL_CLEAR_BUTTON_TITLE' => 'Vider [Alt+C]',
    'LBL_CLEARALL' => 'Tout décocher',
    'LBL_CLOSE_BUTTON_TITLE' => 'Terminer l&#39;activité',
    'LBL_CLOSE_BUTTON_KEY' => 'Q',
    'LBL_CLOSE_WINDOW' => 'Fermer la Fenêtre',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Fermer tous',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Fermer tous [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Terminer l&#39;activité et dupliquer',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Terminer l&#39;activité et dupliquer [Alt+C]',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Non clos:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Envoyer un Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Envoyer un Email [Alt+E]',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oui',
    'LBL_SEARCH_DROPDOWN_NO' => 'Non',
    'LBL_CONTACT_LIST' => 'Liste des Contacts',
    'LBL_CONTACT' => 'Contacts',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contrat',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATE_BUTTON_LABEL' => 'Créer',
    'LBL_CREATED_BY_USER' => 'Créé par',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_CREATED_ID' => 'Créé par (ID)',
    'LBL_CREATED' => 'Créé par',
    'LBL_CURRENT_USER_FILTER' => 'Ne montrer que mes éléments:',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date de création:',
    'LBL_DATE_MODIFIED' => 'Date de modification:',
    'LBL_EDIT_BUTTON' => 'Editer',
    'LBL_DUPLICATE_BUTTON' => 'Dupliquer',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_DELETE' => 'Supprimer',
    'LBL_DELETED' => 'Supprimé',
    'LBL_DIRECT_REPORTS' => 'Rapports directs',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_DONE_BUTTON_TITLE' => 'Terminé',
    'LBL_DST_NEEDS_FIXIN' => 'Pour le bon fonctionnement de l&#39;application il est nécessaire qu&#39;un patch sur l&#39;heure d&#39;été soit intégré. SVP allez dans le module <a href="index.php?module=Administration&action=DstFix">Repair</a> dans la console d&#39;administration et cliquez sur le fix pour l&#39;heure d&#39;été.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Editer comme Nouveau',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Editer comme Nouveau',
    'LBL_FAVORITES' => 'Favoris',
    'LBL_FILTER_MENU_BY' => 'Filtrer le menu par',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Veuillez sélectionner un fichier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne dispose pas de tous les champs requis pour ce module. Veuillez vous référer à suitecrm.log pour plus de détails.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Le fichier envoyé dépasse la limite de 30000 bytes spécifiée dans le formulaire HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Une erreur s\'est produite lors de l\'envoi du fichier vCard. Veuillez-vous référer à suitecrm.log pour plus de détails.',
    'LBL_IMPORT_VCARD' => 'Importer une vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer une vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer une vCard [Alt+I]',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Afficher',
    'LBL_VIEW_BUTTON_TITLE' => 'Voir [Alt+V]',
    'LBL_VIEW_BUTTON' => 'Afficher',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email en PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email en PDF [Alt+M]',
    'LBL_EMAILS' => 'Mails',
    'LBL_EMPLOYEES' => 'Employés',
    'LBL_ENTER_DATE' => 'Préciser la date',
    'LBL_EXPORT_ALL' => 'Exporter Tout',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'Mes favoris:',
    'LBL_GO_BUTTON_LABEL' => 'Démarrer',
    'LBL_GS_HELP' => 'Les champs de ce module utilisés dans cette recherche apparaissent ci-dessus.  Le texte surligné correspond à votre recherche.',
    'LBL_HIDE' => 'Masquer',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import démarrée:',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Spécifier un délimiteur personnalisé.',
    'LBL_LAST_VIEWED' => 'Dernières consultations',
    'LBL_SHOW_LESS' => 'Voir moins',
    'LBL_SHOW_MORE' => 'Voir plus',
    'LBL_TODAYS_ACTIVITIES' => 'Activitiés du jour',
    'LBL_LEADS' => 'Prospects',
    'LBL_LESS' => 'Moins',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Logs de Campagne',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_CAMPAIGN_NONE' => 'Sans Pièce Jointe',
    'LBL_SITEMAP' => 'Plan du site',
    'LBL_THEME' => 'Thème:',
    'LBL_THEME_PICKER' => 'Style',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Attention : Internet Explorer 6 n&#39;est pas supporté pour le thème sélectionné. Cliquez sur OK pour utiliser quand même ce thème ou sur "Annuler" pour sélectionner un thème différent.',
    'LBL_FOUND_IN_RELEASE' => 'Trouvé dans la Release',
    'LBL_FIXED_IN_RELEASE' => 'Corrigé dans la Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom du Compte',
    'LBL_LIST_ASSIGNED_USER' => 'Utilisateur',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle Contact',
    'LBL_LIST_DATE_ENTERED' => 'Date de création:',
    'LBL_LIST_EMAIL' => 'Emails',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_OF' => 'sur',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_RELATED_TO' => 'Rattachée à',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Voulez-vous vraiment mettre à jour la totalité de la liste ?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vous devez sélectionner au moins 1 enregistrement.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vous devez sélectionner au moins 2 enregistrements.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Veuillez sélectionner moins de 10 enregistrements pour continuer.',
    'LBL_LISTVIEW_ALL' => 'Tous',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Enregistrements Sélectionnés',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Sélectionné(s):',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Antoine',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Dupont',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Veuillez vous identifier pour accéder à cette zone.',
    'LBL_LOGOUT' => 'Déconnexion',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Publipostage',
    'LBL_MASS_UPDATE' => 'Mise à jour globale',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Il n&#39;y a pas de champs disponibles pour la mise à jour globale',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out email principal:',
    'LBL_MEETINGS' => 'Réunions',
    'LBL_MEETING' => 'Réunion',
    'LBL_MEETING_GO_BACK' => 'Retourner à la réunion',
    'LBL_MEMBERS' => 'Membres',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_MODIFIED_BY_USER' => 'Modifié Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_MODIFIED_ID' => 'Modifié par (ID)',
    'LBL_MORE' => 'plus',
    'LBL_MY_ACCOUNT' => 'Mon Compte',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Créer',
    'LBL_NEW_BUTTON_TITLE' => 'Nouveau [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Suivant',
    'LBL_NONE' => '-aucun-',
    'LBL_NOTES' => 'Notes',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Ouvrir tous',
    'LBL_OPENALL_BUTTON_TITLE' => 'Ouvrir tous [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Ouvrir à:',
    'LBL_OPENTO_BUTTON_TITLE' => 'Ouvrir à: [Alt+T]',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_OPPORTUNITY' => 'Affaire',
    'LBL_OR' => 'OU',
    'LBL_LOWER_OR' => 'ou',
    'LBL_PANEL_OVERVIEW' => 'Vue d\'ensemble',
    'LBL_PANEL_ASSIGNMENT' => 'Autre',
    'LBL_PANEL_ADVANCED' => 'Plus d&#39;informations',
    'LBL_PARENT_TYPE' => 'Type de Parent',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Phase',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Etat (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',

    'LBL_BILLING_STREET' => 'Rue (adresse facturation) :',
    'LBL_SHIPPING_STREET' => 'Rue (adresse livraison) :',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCT_BUNDLES' => 'Groupes de produits',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_PROJECT_TASKS' => 'Tâches Projet',
    'LBL_PROJECTS' => 'Projets',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Créer une Affaire à partir du devis',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Créer une Affaire à partir du devis',
    'LBL_QUOTES_SHIP_TO' => 'Devis livré à',
    'LBL_QUOTES' => 'Devis',

    'LBL_RELATED' => 'Rattaché',
    'LBL_RELATED_INFORMATION' => 'Information rattachée',
    'LBL_RELATED_RECORDS' => 'Enregistrements rattachés',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_REPORTS_TO' => 'Rend compte à',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique les champs obligatoires',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Sauvegarder sous',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Sauvegarder sous [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Vue Complète',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Vue Complète [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Enregistrer et créer un nouveau',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Enregistrer et créer un nouveau [Alt+V]',
    'LBL_SAVE_OBJECT' => 'Sauvegarder {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Rechercher',
    'LBL_SEARCH_BUTTON_TITLE' => 'Rechercher [Alt+Q]',
    'LBL_SEARCH' => 'Rechercher',
    'LBL_SEARCH_TIPS' => 'Utilisez le bouton de recherche ou appuyez sur entrée pour avoir une correspondance exacte pour ceux-ci.',
    'LBL_SEARCH_TIPS_2' => 'Utilisez le bouton de recherche ou appuyez sur entrée pour avoir une correspondance exacte pour',
    'LBL_SEARCH_MORE' => 'suivant(s)',
    'LBL_SEE_ALL' => 'Voir Tous',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format de fichier invalide, seules des images peuvent être téléchargées.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Sélectionner',
    'LBL_SELECT_BUTTON_TITLE' => 'Sélectionner [Alt+T]',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Ajouter Equipe(s)',
    'LBL_SELECT_TEAMS_TITLE' => 'Ajouter Equipe(s) [Alt+Z]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Parcourir',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Parcourir  [Alt+B]',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Sélectionner Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Sélectionner Contact [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'Fichier sélectionné',
    'LBL_GRID_SELECTED_FILES' => 'Fichiers sélectionnés',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Sélectionner depuis un Rapport',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Sélectionner Rapports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Sélectionner Utilisateur',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Sélectionner Utilisateur [Alt+U]',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Vider sélection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Vider sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Vider sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Vider sélection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Sélectionner un fichier [Alt+F]',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Sélectionner un fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Vider fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Vider fichier',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Sélectionner Utilisateur [Alt+U]',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Sélectionner Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Sélectionner Compte [Alt+A]',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Sélectionner Compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Vider Compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Vider Compte',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Sélectionner Campagne [Alt+M]',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Sélectionner Campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Vider Campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Vider Campagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Sélectionner Contact [Alt+C]',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Sélectionner Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Vider Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Vider Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Sélectionner Equipe [Alt+Z]',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Sélectionner Equipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Vider Equipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Vider Equipe',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressources utilisées pour construire cette page (requêtes, fichiers)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Temps de réponse du serveur:',
    'LBL_SERVER_MEMORY_BYTES' => 'octets',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilisation de la mémoire serveur : {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilisation de la mémoire : - module : {0} - action {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilisation maximale de la mémoire serveur : {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Livrer le Compte',
    'LBL_SHIP_TO_CONTACT' => 'Livrer le Contact',
    'LBL_SHIPPING_ADDRESS' => 'Adresse de livraison',
    'LBL_SHORTCUTS' => 'Raccourcis',
    'LBL_SHOW' => 'Afficher',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Etat :',
    'LBL_STATUS_UPDATED' => 'Votre statut pour cet évènement a été mis à jour !',
    'LBL_STATUS' => 'Statut:',
    'LBL_STREET' => 'Rue',
    'LBL_SUBJECT' => 'Sujet',

    'LBL_INBOUNDEMAIL_ID' => 'Compte Mail (ID)',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '© 2004-2013 SugarCRM Inc. Le programme est fourni tel quel, sans garantie.  Sous licence <a href="LICENSE.txt" target="_blank" class="copyRightLink"> AGPLv3</a>. < br / > SugarCRM est une marque déposée de SugarCRM, Inc. Tous les autres noms de produits et de la société peuvent être des marques déposées des sociétés respectives auxquels ils sont associés.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '© 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink"> SugarCRM Inc.</a> Tous droits réservés. < br / > SugarCRM est une marque déposée de SugarCRM, Inc. Tous les autres noms de produits et de la société peuvent être des marques déposées des sociétés respectives auxquels ils sont associés.',

    'LBL_SCENARIO_SALES' => 'ventes',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Gestion de projet',

    'LBL_SCENARIO_SALES_DESCRIPTION'=>'Ce scénario facilite la gestion des articles en vente',
    'LBL_SCENARIO_MAKETING_DESCRIPTION'=>'Ce scénario facilite la gestion des éléments liés au marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION'=>'Ce scénario facilite la gestion des éléments liés à la finance',
    'LBL_SCENARIO_SERVICE_DESCRIPTION'=>'Ce scénario facilite la gestion des éléments liés aux services',
    'LBL_SCENARIO_PROJECT_DESCRIPTION'=>'Ce scénario facilite la gestion des éléments liés aux projets',

    'LBL_SYNC' => 'Synchronisation',
    'LBL_TABGROUP_ALL' => 'Tous',
    'LBL_TABGROUP_ACTIVITIES' => 'Activités',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_HOME' => 'Accueil',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Portail',
    'LBL_TABGROUP_OTHER' => 'Autre',
    'LBL_TABGROUP_REPORTS' => 'Rapports',
    'LBL_TABGROUP_SALES' => 'Ventes',
    'LBL_TABGROUP_SUPPORT' => 'Assistance',
    'LBL_TABGROUP_TOOLS' => 'Outils',
    'LBL_TASKS' => 'Tâches',
    'LBL_TEAMS_LINK' => 'Equipe',
    'LBL_THEME_COLOR' => 'Couleur',
    'LBL_THEME_FONT' => 'Police',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver Email [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Accés non autorisé à l&#39;administration',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurer',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Restaurer [Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Restaurer',
    'LBL_UNDELETE' => 'Restaurer',
    'LBL_UNSYNC' => 'Dessynchroniser',
    'LBL_UPDATE' => 'Enregistrer',
    'LBL_USER_LIST' => 'Liste des Utilisateurs',
    'LBL_USERS_SYNC' => 'Synchro utilisateur',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Vérification parmi les emails existants...',
    'LBL_VERIFY_PORTAL_NAME' => 'Vérification parmi les noms de portail existants...',
    'LBL_VIEW_IMAGE' => 'voir',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Voir en PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Imprimer en PDF [Alt+P]',

    'LNK_ABOUT' => 'A propos',
    'LNK_ADVANCED_SEARCH' => 'Recherche Avancée',
    'LNK_BASIC_SEARCH' => 'Recherche Rapide',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Voir tous les résultats',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Voir tous',
    'LNK_CLOSE' => 'fermer',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Modifier la recherche courante',
    'LNK_SAVED_VIEWS' => 'Options',
    'LNK_DELETE_ALL' => 'eff tous',
    'LNK_DELETE' => 'eff',
    'LNK_EDIT' => 'éditer',
    'LNK_GET_LATEST' => 'Obtenir le dernier',
    'LNK_GET_LATEST_TOOLTIP' => 'Remplacer par la dernière version',
    'LNK_HELP' => 'Aide',
    'LNK_CREATE' => 'Créer',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Suivant',
    'LNK_LIST_PREVIOUS' => 'Précédent',
    'LNK_LIST_RETURN' => 'Retour à la Liste',
    'LNK_LIST_START' => 'Début',
    'LNK_LOAD_SIGNED' => 'Signé',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Remplacer par le document signé',
    'LNK_PRINT' => 'Imprimer',
    'LNK_BACKTOTOP' => 'Retour en Haut',
    'LNK_REMOVE' => 'supprimer',
    'LNK_RESUME' => 'Reprise',
    'LNK_VIEW_CHANGE_LOG' => 'Historique des modifications',

    'NTC_CLICK_BACK' => 'Merci de cliquer sur le bouton "Précédent" de votre navigateur et de corriger le problème.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-jj)',
    'NTC_DATE_TIME_FORMAT' => '(aaaa-mm-jj 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Voulez-vous vraiment supprimer les enregistrements sélectionnés ?',
    'NTC_TEMPLATE_IS_USED' => 'Ce modèle est utilisé par au moins un email lié aux Campagnes. Etes-vous sûr(e) de vouloir le supprimer ?',
    'NTC_TEMPLATES_IS_USED' => 'Les modèles suivants sont utilisés par des emails liés aux Campagnes. Etes-vous sûr(e) de vouloir les supprimer ?',
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Voulez-vous vraiment supprimer tous les enregistrements sélectionnés (',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Voulez-vous vraiment mettre à jour tous les enregistrements sélectionnés (',
    'NTC_DELETE_SELECTED_RECORDS' => ') ?',
    'NTC_LOGIN_MESSAGE' => 'Merci de vous authentifier.',
    'NTC_NO_ITEMS_DISPLAY' => 'Aucun',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cette relation?',
    'NTC_REQUIRED' => 'Indique les champs obligatoires',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenue',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'LOGIN_LOGO_ERROR' => 'Veuillez remplacer les logos SuiteCRM.',
    'WARN_ONLY_ADMINS' => 'Seuls les administrateurs peuvent se connecter.',
    'WARN_UNSAVED_CHANGES' => 'Vous êtes sur le point de quitter cet enregistrement sans sauvegarder vos modifications. Etes-vous sûr de vouloir quitter cet enregistrement ?',
    'ERROR_NO_RECORD' => 'Erreur de récupération de l&#39;enregistrement. Cet enregistrement est peut être supprimé ou vous n&#39;avez pas le droit de le visualiser.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Attention :</b>Le navigateur ou la version du navigateur que vous utilisez n&#39;est pas supporté.</p><p>Les navigateurs suivants sont recommandés :</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (ou dernière version)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attention:</b> Votre navigateur est en mode de compatibilité ce qui n&#39;est pas supporté.',
    'ERROR_TYPE_NOT_VALID' => 'Erreur. Ce type n&#39;est pas valide.',
    'ERROR_NO_BEAN' => 'Echec pour obtenir un bean.',
    'LBL_DUP_MERGE' => 'Recherche de doublons',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Abonnement aux Newsletters',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestion des Newsletters de',
    'LBL_SUBSCRIBE' => 'Souscrire',
    'LBL_UNSUBSCRIBE' => 'Désabonner',
    // Ajax status strings
    'LBL_LOADING' => 'chargement ...',
    'LBL_SEARCHING' => 'recherche...',
    'LBL_SAVING_LAYOUT' => 'Sauvegarde de la disposition ...',
    'LBL_SAVED_LAYOUT' => 'Nouvelle disposition sauvegardée.',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_SAVING' => 'Sauvegarde en cours',
    'LBL_FAILED' => 'Echec !',
    'LBL_DISPLAY_COLUMNS' => 'Colonnes affichées',
    'LBL_HIDE_COLUMNS' => 'Colonnes masquées',
    'LBL_SEARCH_CRITERIA' => 'Critères de Recherche',
    'LBL_SAVED_VIEWS' => 'Vues sauvegardées',
    'LBL_PROCESSING_REQUEST' => 'Traitement..',
    'LBL_REQUEST_PROCESSED' => 'Terminé',
    'LBL_AJAX_FAILURE' => 'Erreur Ajax',
    'LBL_MERGE_DUPLICATES' => 'Fusionner',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Recherches sauvegardées',
    'LBL_SEARCH_POPULATE_ONLY' => 'Lancer une recherche en utilisant le formulaire de recherche ci-dessus',
    'LBL_DETAILVIEW' => 'Vue Détail',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_SEARCHFORM' => 'Formulaire de recherche',
    'LBL_SAVED_SEARCH_ERROR' => 'Merci de fournir un nom pour cette vue.',
    'LBL_DISPLAY_LOG' => 'Afficher les Logs',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Système',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Expirée',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Votre session va expirer dans 2 minutes. Veuillez sauvegarder votre travail.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Votre session a expiré.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda:",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Réunion',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Appel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Heure:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Emplacement:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statut:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relatif à :',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Cliquez sur OK pour afficher cet appel ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Cliquez sur OK pour afficher cette réunion ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evènement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'L’événement n\'est pas configuré.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'L\'emplacement n\'est pas défini.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'La date de début n\'est pas définie.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Aucun résultat.',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Aucun résultat pour <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Créé <item1> comme un nouveau <item2>',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Vous n&#39;avez aucun résultat accessible. <item2> ou réalisez un <item3> maintenant.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Pour accéder à plus d&#39;informations, utilisez le menu utilisateur situé sur la barre de navigation principale.',

    'LBL_CLICK_HERE' => 'Cliquer ici',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Ajouter à mes favoris',
    'LBL_MARK_AS_FAVORITES' => 'Ajouter à mes favoris',
    'LBL_CREATE_CONTACT' => 'Créer un Contact',
    'LBL_CREATE_CASE' => 'Créé un Ticket',
    'LBL_CREATE_NOTE' => 'Créer une Note',
    'LBL_CREATE_OPPORTUNITY' => 'Créer une Affaire',
    'LBL_SCHEDULE_CALL' => 'Planifier un Appel',
    'LBL_SCHEDULE_MEETING' => 'Planifier une Réunion',
    'LBL_CREATE_TASK' => 'Créer une Tache',
    'LBL_REMOVE_FROM_FAVORITES' => 'Supprimer de mes Favoris',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Afficher le Formulaire',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Enregistrer le formulaire Web',
    'LBL_AVAILABLE_FIELDS'=>'Champs disponibles',
    'LBL_FIRST_FORM_COLUMN'=>'Première colonne du formulaire',
    'LBL_SECOND_FORM_COLUMN'=>'Seconde colonne du formulaire',
    'LBL_ASSIGNED_TO_REQUIRED'=>'Champ obligatoire manquant : assigné à',
    'LBL_RELATED_CAMPAIGN_REQUIRED'=>'Champ obligatoire manquant : campagne associée',
    'LBL_TYPE_OF_PERSON_FOR_FORM'=>'Formulaire web à créer ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC'=>'Envoyer ce formulaire créera ',

    'LBL_PLEASE_SELECT' => 'Sélectionner',
    'LBL_REDIRECT_URL' => 'URL de redirection',
    'LBL_RELATED_CAMPAIGN' => 'Campagne liée',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Ajouter tous les champs',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Réinitialiser tous les champs',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Supprimer tous les champs',
    'LBL_NEXT_BTN' => 'Suivant',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Seuls les fichiers de type image peuvent être joints',
    'LBL_TRAINING' => 'Forum d\'Aide',
    'ERR_DATABASE_CONN_DROPPED' => 'Erreur durant l&#39;exécution d&#39;une requête. Il est possible que votre connexion à la base de données ait été reinitialisée. Merci de rafraîchir cette page, vous devrez peut-être redémarrer le serveur web.',
    'ERR_MSSQL_DB_CONTEXT' => 'modification du contexte de la base de données en',
    'ERR_MSSQL_WARNING' => 'Erreur :',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Attention : Le Champ [[field]] n&#39;a pas d&#39;entrée correspondante dans le fichier [moduleDir] vardefs.php',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erreur : Fichier [[file]] manquant.  Impossible de le créer car il n&#39;y a pas de fichier HTML correspondant.',
    'ERR_CANNOT_FIND_MODULE' => 'Erreur : Ce Module [module] n&#39;existe pas.',
    'LBL_ALT_ADDRESS' => 'Autre adresse :',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erreur : Le nombre d&#39;arguments est différent entre les éléments &#39;key&#39; et &#39;copy&#39; dans le tableau des paramètres d&#39;affichage.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Index manquants dans le tableau des paramètres d&#39;affichage :',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Général',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrer',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes éléments seulement',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Créer une nouvelle page ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Vous avez créé une nouvelle page. Vous devez ajouter un nouveau contenu dans l\'option du menu Ajouter un dashlet.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Voulez-vous vraiment effacer cette page ?',
    'LBL_SAVING_PAGE_TITLE' => 'Sauvegarder le titre de cette page ...',
    'LBL_RETRIEVING_PAGE' => 'Recherche de la page ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximal de dashlets autorisés par votre administrateur. Merci de supprimer un dashlet pour en ajouter d\'autres.',
    'LBL_ADDING_DASHLET' => 'Ajout de Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Dashlet ajouté',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer le Dashlet ?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet supprimé',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Ajouter un onglet',
    'LBL_DELETE_PAGE' => 'Supprimer l&#39;onglet',
    'LBL_CHANGE_LAYOUT' => 'Changer le nombre de colonnes',
    'LBL_RENAME_PAGE' => 'Renommer l&#39;onglet',

    'LBL_LOADING_PAGE' => 'Chargement en cours, veuillez patienter...',

    'LBL_RELOAD_PAGE' => 'Veuillez <a href="javascript: window.location.reload()"> recharger la fenêtre</a> pour utiliser ce Dashlet.',
    'LBL_ADD_DASHLETS' => 'Ajouter un Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    'LBL_NUMBER_OF_COLUMNS' => 'Nombre de colonnes',
    'LBL_1_COLUMN' => '&nbsp;1 colonne',
    'LBL_2_COLUMN' => '&nbsp;2 colonnes',
    'LBL_3_COLUMN' => '&nbsp;3 colonnes',
    'LBL_PAGE_NAME' => 'Nom de l&#39;onglet',

    'LBL_SEARCH_RESULTS' => 'Résultats de recherche',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_CHARTS' => 'Graphique',
    'LBL_SEARCH_REPORT_CHARTS' => 'Graphique de rapport',
    'LBL_SEARCH_TOOLS' => 'Outils',
    'LBL_SEARCH_HELP_TITLE' => 'Conseils de recherche',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Fermer',
    'LBL_SEARCH_RESULTS_FOUND' => 'Résultats trouvés',
    'LBL_SEARCH_RESULTS_TIME' => 'mme.',
    'ERR_BLANK_PAGE_NAME' => 'Veuillez entrer un nom de page.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pas d&#39;image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copier l&#39;adresse depuis la gauche:',
    'LBL_SAVE_AND_CONTINUE' => 'Sauvegarder et aller au suivant',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Gestion des Multi-sélections</strong></p><ul><li>Cliquer sur les valeurs pour sélectionner les attributs.</li><li>Ctrl-clic pour faire une sélection multiple. Pour les utilisateurs Mac utiliser CMD-clic.</li><li>Pour sélectionner toutes les valeurs entres deux attributs cliquer sur la première valeur et cliquer sur la dernière valeur en maintenant la touche shift enfoncée.</li></ul><p><strong>Recherche avancée &amp; options de mise en page</strong><br><br>Utiliser les <b>Options</b> afin de sauvegarder un jeu de paramètres de recherche et/ou une mise en page personnalisée en vue Liste pour obtenir rapidement la recherche désirée les prochaines fois. Vous pouvez sauvegarder un nombre illimité de recherches et mises en page personnalisées. Le nom de toutes les recherches sauvegardées apparaît dans la liste des recherches sauvegardées, avec la dernière recherche en haut de la liste.<br><br>Pour personnaliser la mise en page de la Vue Liste, utiliser les colonnes cachées &amp; colonnes visibles afin de sélectionner les champs à afficher dans les résultats de recherche. Par exemple, vous pouvez afficher ou cacher des détails comme le nom de l&#39;enregistrement, l&#39;utilisateur assigné et l&#39;équipe assignée dans les résultats de recherche. Pour ajouter une colonne à la vue Liste, sélectionner les champs dans la liste colonnes cachées et utiliser la flèche gauche pour le déplacer dans la liste colonnes visibles. Pour supprimer une colonne de la vue Liste, sélectionnez-la dans la liste des colonnes affichées et utiliser la flèche droite pour la déplacer dans la liste des colonnes cachées.<br><br>Si vous sauvegardez les paramètres de mise en page, vous pourrez les charger à tout moment pour voir les résultats de recherche dans la mise en page personnalisée.<br><br>Pour sauvegarder et mettre à jour une recherche et/ou une mise en page:<ol><li>Entrer un nom pour les résultats de recherche dans le champ <b>Sauvegarder cette recherche comme</b> et cliquer sur <b>Sauvegarder</b>. Le nom apparaît maintenant dans la liste des Recherches Sauvegardées adjacente au bouton <b>Vider</b>.</li><li>Pour voir une recherche sauvegardée, sélectionnez-en une dans le liste des Recherches Sauvegardées. Les résultats de recherche sont affichés dans la Vue Liste.</li><li>Pour mettre à jour les propriétés d&#39;une recherche sauvegardée, sélectionnez là dans la liste, entrer le nouveau critère de recherche et/ou les options de mise en page dans la zone de Recherche Avancée, et cliquer sur <b>Mettre à jour</b> puis sur <b>Modifier la Recherche Courante</b>.</li><li>Pour supprimer une recherche sauvegardée, sélectionner-la dans la liste des Recherches Sauvegardées, cliquer sur <b>Supprimer</b> puis sur <b>Modifier la Recherche Courante</b>, et ensuite cliquer sur <b>OK</b> pour confirmer la suppression.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Erreur: Le nombre limite de requêtes ($limit) a été atteint pour le module $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Erreur: ResourceObserver->notify() doit être surchargé.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erreur: Impossible de faire un suivi car le fichier metadata est vide ou n&#39;existe pas.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erreur: Aucun suivi n&#39;a été configuré pour le nom demandé',
    'ERR_UNDEFINED_METRIC' => 'Erreur: Impossible de positionner une valeur pour une métrique indéfinie',
    'ERR_STORE_FILE_MISSING' => 'Erreur: Impossible de trouver le fichier de stockage de l&#39;implémentation',

    'LBL_MONITOR_ID' => 'Identifiant de Suivi',
    'LBL_USER_ID' => 'Utilisateur (ID)',
    'LBL_MODULE_NAME' => 'Nom du module',
    'LBL_ITEM_ID' => 'Identifiant Enregistrement',
    'LBL_ITEM_SUMMARY' => 'Description Enregistrement',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Identifiant Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack crée pour &#39;id utilisateur {0}',
    'LBL_VISIBLE' => 'Enregistrement Visible',
    'LBL_DATE_LAST_ACTION' => 'Date de dernière action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'n&#39;est pas avant',
    'MSG_IS_MORE_THAN' => 'est plus grand que',
    'MSG_IS_LESS_THAN' => 'est plus petit que',
    'MSG_SHOULD_BE' => 'devrait être',
    'MSG_OR_GREATER' => 'ou plus grand que',

    'LBL_PORTAL_WELCOME_TITLE' => 'Bienvenue dans le Portail',
    'LBL_PORTAL_WELCOME_INFO' => 'Le portail SuiteCRM est un "framework" qui offre une vue en temps réel de cas, bogues & bulletins etc. aux clients. Il s\'agit d\'une interface externe par rapport à SuiteCRM qui peut être déployé dans n\'importe quel site Web.',
    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Créé un Bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 Enregistrement(s) trouvé(s) -',

    'DATA_TYPE_DUE' => 'Du:',
    'DATA_TYPE_START' => 'Début:',
    'DATA_TYPE_SENT' => 'Envoyé:',
    'DATA_TYPE_MODIFIED' => 'Modifié:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Décompte',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'Image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Sélectionner une date',

    'LBL_VALIDATE_RANGE' => 'n&#39;est pas dans la plage valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Veuillez choisir à la fois une date de début et de fin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Veuillez choisir à la fois des valeurs de début et de fin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tous',

    'LBL_OPERATOR_IN_TEXT' => 'est parmi:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'n&#39;est pas parmi:',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erreur : Le nombre d&#39;entrées paramétrées dans l&#39;objet ne correspond pas avec le nomdre d&#39;entrées présentes dans le résultat obtenu depuis le connecteur.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erreur : Le mapping des champs pour ce module est manquant.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erreur: Impossible de récupérer les données pour le connecteur {0}. Le Service tiers est peut être inaccessible ou la paramètre de configuration que vous avez spécifiés sont peut être invalide. Message d&#39;erreur du connecteur: ({1}).',
    'LBL_MERGE_CONNECTORS' => 'Obtenir les données',
    'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
    'LBL_REMOVE_MODULE_ENTRY' => 'Voulez-vous vraiment désactiver l&#39;intégration de ce connecteur pour ce module ?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le paramètre fastcgi.logging à 0 dans votre fichier php.ini.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Il n&#39;est pas possible de supprimer l&#39;équipe globale. Opération abandonnée !',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'L&#39;équipe privée [{0}] ne peut être supprimée avant de supprimer l&#39;utilisateur [{1}].',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Vous n&#39;avez pas activé ou vous avez une ancienne version d&#39;Adobe Flash Player. Merci d&#39;<a href="http://www.adobe.com/go/getflashplayer/">installer la dernière version de Flash player</a> ou d&#39;activer Adobe Flash Player.',
    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nom complet',
    'LBL_COLLECTION_PRIMARY' => 'Principale',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Champ vide obligatoire',
    'LBL_COLLECTION_EXACT' => 'exactement',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'hier',
    'LBL_TODAY' => 'aujourd&#39;hui',
    'LBL_TOMORROW' => 'demain',
    'LBL_NEXT_WEEK' => 'prochaine semaine',
    'LBL_NEXT_MONDAY' => 'prochain lundi',
    'LBL_NEXT_FRIDAY' => 'prochain vendredi',
    'LBL_TWO_WEEKS' => '2 semaines',
    'LBL_NEXT_MONTH' => 'prochain mois',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'premier jour du mois prochain',
    'LBL_THREE_MONTHS' => '3 mois',
    'LBL_SIXMONTHS' => '6 mois',
    'LBL_NEXT_YEAR' => 'année prochaine',
    'LBL_FILTERED' => 'Filtré',

    //Datetimecombo fields
    'LBL_HOURS' => 'Heures',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Méridien',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rafraîchissement automatique',

    'LBL_DURATION_DAY' => 'jour',
    'LBL_DURATION_HOUR' => 'heure',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'jours',
    'LBL_DURATION_HOURS' => 'heures',
    'LBL_DURATION_MINUTES' => 'minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choisir le mois',
    'LBL_ENTER_YEAR' => 'Entrer l&#39;année',
    'LBL_ENTER_VALID_YEAR' => 'Veuillez saisir une année valide',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Veuillez saisir un numéro de téléphone US avec le code identifiant de zone',

    //File write error label
    'ERR_FILE_WRITE' => 'Erreur : impossible d&#39;écrire le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',
    'ERR_FILE_NOT_FOUND' => 'Erreur : impossible de charger le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',

    'LBL_AND' => 'et',
    'LBL_BEFORE' => 'Avant',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Uploader depuis votre ordinateur',
    'LBL_SEARCH_EXTERNAL_API' => 'Fichier dans la source externe',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sécurité',
    'LBL_SHARE_PRIVATE' => 'Privée',
    'LBL_SHARE_COMPANY' => 'Société',
    'LBL_SHARE_LINKABLE' => 'Lien possible',
    'LBL_SHARE_PUBLIC' => 'Public',

    // Web Services REST RSS
    'LBL_RSS_FEED' => 'Flux RSS',
    'LBL_RSS_RECORDS_FOUND' => 'enregistrement(s) trouvé(s)',
    'ERR_RSS_INVALID_INPUT' => 'RSS n&#39;est pas un input_type valide',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS n&#39;est pas un response_type valide',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs ne supporte pas le format de fichier que vous avez fourni.',

    'LBL_EMPTY' => 'Vide',
    'LBL_IS_EMPTY' => 'Est vide',
    'LBL_IS_NOT_EMPTY' => 'Non vide',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ceci est un fichier d&#39;import basique qui fournit un exemple du contenu attendu d&#39;un fichier prêt à être importé."<br />"Ce fichier est un fichier .csv délimité par un point-virgule utilisant des guillemets comme qualificateur de champ."<br /><br />"La ligne d&#39;entête est la toute première ligne du fichier et elle contient le nom des champs tels que vous les verriez dans l&#39;application."<br />"Ces libellés sont utilisés pour le mapping de données du fichier avec les données de votre SuiteCRM."<br /><br />"Remarques: Le noms des champs en base de données peuvent aussi être utilisés en ligne d&#39;entête. Ceci est pratique si vous utilisez phpMyAdmin ou un autre outil de gestion de base de données pour fournir des données à importer."<br />"L&#39;ordre des champs n&#39;est pas critique puisque le process d&#39;import fait correspondre les données à partir des champs définis dans la ligne d&#39;entête."<br /><br /><br />"Pour utiliser ce modèle de fichier, faites les choses suivantes:"<br />"1. Enlever les données d&#39;exemple"<br />"2. Enlever le texte d&#39;aide que vous êtes en train de lire"<br />"3. Insérer vos propres données dans les colonnes appropriées"<br />"4. Sauvegarder le fichier sur votre ordinateur local"<br />"5. Cliquez sur les options d&#39;import du menu d&#39;actions dans l&#39;application et choisissez le fichier à transmettre"',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Utilisateur assigné',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Rapporte à',
    'LBL_EXPORT_FULL_NAME' => 'Nom complet',
    'LBL_EXPORT_TEAM_ID' => 'Equipe ID',
    'LBL_EXPORT_TEAM_NAME' => 'Equipes',
    'LBL_EXPORT_TEAM_SET_ID' => 'Groupe d&#39;équipe ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigation en cours...',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifications',
    'LBL_NOTIFICATIONS_NONE' => 'Aucune notification',
    'LBL_ALT_ADD_TEAM_ROW' => 'Ajouter une ligne pour les équipes',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Enlever l’équipe',
    'LBL_ALT_SPOT_SEARCH' => 'Recherche global',
    'LBL_ALT_SORT_DESC' => 'Tri descendant',
    'LBL_ALT_SORT_ASC' => 'Tri Ascendant',
    'LBL_ALT_SORT' => 'Tri',
    'LBL_ALT_SHOW_OPTIONS' => 'Afficher options',
    'LBL_ALT_HIDE_OPTIONS' => 'Masquer options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Déplacer l&#39;entrée vers la liste de gauche',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Déplacer l&#39;entrée vers la liste de droite',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Déplacer l&#39;entrée vers le haut de la liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Déplacer l&#39;entrée vers le bas de la liste',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.<br>Cliquez sur Créer {1} pour créer cet enregistrement {0}, ou sélectionnez un enregistrement {0} listé ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.  Cliquez sur Sauvegarder pour créer cet enregistrement {0}, ou sur Annuler pour retourner au module sans créer cet enregistrement.',
    'LBL_EMAIL_TITLE' => 'adresse email',
    'LBL_EMAIL_OPT_TITLE' => 'adresse email opted out',
    'LBL_EMAIL_INV_TITLE' => 'adresse email invalide',
    'LBL_EMAIL_PRIM_TITLE' => 'adresse email principale',
    'LBL_SELECT_ALL_TITLE' => 'Sélectionner tous',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Sélectionner cette ligne',
    'LBL_TEAM_SELECTED_TITLE' => 'Equipe sélectionnée',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Sélectionner pour rendre cette équipe principale',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERREUR: Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERREUR: Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}. La variable PHP upload_maxsize a pour valeur {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERREUR: Une erreur est survenue pendant votre transfert, veuillez contacter un administrateur pour obtenir de l&#39;aide.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'La taille de l&#39;upload ({0} octets) dépasse le maximum autorisé: {1} octets',
    'UPLOAD_REQUEST_ERROR' => 'Une erreur est survenue. Veuillez rafraîchir cette page et essayer de nouveau',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Editer',
    'LBL_EDIT_BUTTON_TITLE' => 'Editer [Alt+E]',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliquer',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliquer [Alt+U]',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Supprimer',
    'LBL_DELETE_BUTTON_TITLE' => 'Supprimer [Alt+D]',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_BUTTON_TITLE' => 'Sauvegarder [Alt+S]',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuler',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuler [Alt+X]',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Raccourcis clavier',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Fonctionnement du formulaire - Alt+</strong><br/> I = ed<b>I</b>ter (detailview)<br/> U = d<b>U</b>pliquer (detailview)<br/> D = supprimer(<b>D</b>) (detailview)<br/> A = s<b>A</b>uvegarder (editview)<br/> L = annu<b>L</b>ler (editview) <br/><br/></p><p><strong>Recherche et Navigation - Alt+</strong><br/> 7 = Première zone sur le formulaire Edition<br/> 8 = Lien recherche avancée<br/> 9 = Première zone de recherche<br/> 0 = Recherche globale (dite unifiée)<br></p>',

    'ERR_CONNECTOR_NOT_ARRAY' => 'tableau du connecteur dans {0} défini incorrectement ou est vide et ne peut être utilisé.',
    'ERR_SUHOSIN' => 'Le flux d&#39;upload est bloqué par Suhosin, veuillez ajouter &quot;upload&quot; au paramètre suhosin.executor.include.whitelist (cf. suitecrm.log pour plus d&#39;informations)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Réponse erronée du serveur',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Devis',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prix de vente',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellement',
        '5' => 'Toutes les 5 minutes',
        '15' => 'Toutes les 15 minutes',
        '30' => 'Toutes les 30 minutes',
        '60' => 'Toutes les heures',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Erreur un rappel est vide ou incorrect',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Rappel non défini par popup ou par courriel.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Aucun invité pour ce rappel.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Le rappel n’inclut pas les invités, vous souhaitez supprimer le rappel ?',
    'LBL_DELETE_REMINDER' => 'Supprimer le rappel',
    'LBL_OK' => 'Ok',

);

$app_list_strings['moduleList']['Library'] = 'Librairie';
$app_list_strings['library_type'] = array('Books' => 'Livre', 'Music' => 'Musique', 'DVD' => 'DVD', 'Magazines' => 'Magasines');
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresse(s) email';
$app_list_strings['project_priority_default'] = 'Moyenne';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Haute',
    'Medium' => 'Moyenne',
    'Low' => 'Basse',
);

$app_list_strings['kbdocument_status_dom'] = array(
    'Draft' => 'Brouillon',
    'Expired' => 'Périmé',
    'In Review' => 'En relecture',
    'Published' => 'Publié',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--Actions Administrateur--',
        'Create New Tag' => 'Créé un nouveau Tag',
        'Delete Tag' => 'Supprimer un Tag',
        'Rename Tag' => 'Renommer un Tag',
        'Move Selected Articles' => 'Déplacer les articles sélectionnés',
        'Apply Tags On Articles' => 'Appliquer les Tags aux articles sélectionnés',
        'Delete Selected Articles' => 'Supprimer les articles sélectionnés',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Avec Pièce(s) Jointe(s)',
        'none' => 'Sans Pièce Jointe',
        'mime' => 'Spécifier un Type Mime',
        'name' => 'Spécifier un Nom',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'Base de connaissance';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Créer un article';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Top 5',
        'Top_10' => 'Top 10',
        'Top_20' => 'Top_20',
        'Bot_5' => 'Flop 5',
        'Bot_10' => 'Flop 10',
        'Bot_20' => 'Flop 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Tout',
        'added' => 'Ajouts dans les 30 derniers jours',
        'pending' => 'En attente de validation',
        'updated' => 'Mis à jour dans les 30 derniers jours',
        'faqs' => 'FAQs',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'Le',
        'before' => 'Avant',
        'after' => 'Aprés',
        'between_dates' => 'Entre',
        'last_7_days' => 'Dans les 7 derniers jours',
        'next_7_days' => 'Dans les 7 prochains jours',
        'last_month' => 'Le mois dernier',
        'this_month' => 'Ce mois-ci',
        'next_month' => 'Le mois prochain',
        'last_30_days' => 'Dans les 30 derniers jours',
        'next_30_days' => 'Dans les 30 prochains jours',
        'last_year' => 'L&#39;année dernière',
        'this_year' => 'Cette année',
        'next_year' => 'L&#39;année prochaine',
        'isnull' => 'Vide',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIE',
    'ALGERIA' => 'ALGÉRIE',
    'AMERICAN SAMOA' => 'SAMOA AMÉRICAINES',
    'ANDORRA' => 'ANDORRE',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTIQUE',
    'ANTIGUA' => 'ANTIGUA-ET-BARBUDA',
    'ARGENTINA' => 'ARGENTINE',
    'ARMENIA' => 'ARMÉNIE',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIE',
    'AUSTRIA' => 'AUTRICHE',
    'AZERBAIJAN' => 'AZERBAÏDJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREÏN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADE',
    'BELARUS' => 'BÉLARUS',
    'BELGIUM' => 'BELGIQUE',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BÉNIN',
    'BERMUDA' => 'BERMUDES',
    'BHUTAN' => 'BHOUTAN',
    'BOLIVIA' => 'BOLIVIE',
    'BOSNIA' => 'BOSNIE-HERZÉGOVINE',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET, ÎLE',
    'BRAZIL' => 'BRÉSIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITOIRE BRITANNIQUE DE L\'ANTARCTIQUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE',
    'BRITISH VIRGIN ISLANDS' => 'ÎLES VIERGES BRITANNIQUES',
    'BRITISH WEST INDIES' => 'ANTILLES BRITANNIQUES',
    'BRUNEI' => 'BRUNÉI DARUSSALAM',
    'BULGARIA' => 'BULGARIE',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODGE',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'Fuseaux horaires',
    'CANARY ISLAND' => 'ÎLES CANARIES',
    'CAPE VERDI ISLANDS' => 'CAP-VERT',
    'CAYMAN ISLANDS' => 'CAÏMANES, ÎLES',
    'CEVLON' => 'CEVLON',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => 'ÎLES ANGLO-NORMANDES GB',
    'CHILE' => 'CHILI',
    'CHINA' => 'CHINE',
    'CHRISTMAS ISLAND' => 'CHRISTMAS, ÎLE',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING), ÎLES',
    'COLOMBIA' => 'COLOMBIE',
    'COMORO ISLANDS' => 'COMORES',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO, RÉPUBLIQUE DÉMOCRATIQUE DU',
    'COOK ISLANDS' => 'COOK, ÎLES',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIE',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHYPRE',
    'CZECH REPUBLIC' => 'TCHÈQUE, RÉPUBLIQUE',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANEMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIQUE',
    'DOMINICAN REPUBLIC' => 'DOMINICAINE, RÉPUBLIQUE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ÉQUATEUR',
    'EGYPT' => 'ÉGYPTE',
    'EL SALVADOR' => 'Salvador',
    'EQUATORIAL GUINEA' => 'GUINÉE ÉQUATORIALE',
    'ESTONIA' => 'ESTONIE',
    'ETHIOPIA' => 'ÉTHIOPIE',
    'FAEROE ISLANDS' => 'FÉROÉ, ÎLES',
    'FALKLAND ISLANDS' => 'FALKLAND, ÎLES (MALVINAS)',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDE',
    'FRANCE' => 'France',
    'FRENCH GUIANA' => 'GUYANE FRANÇAISE',
    'FRENCH POLYNESIA' => 'POLYNÉSIE FRANÇAISE',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIE',
    'GEORGIA' => 'GÉORGIE',
    'GERMANY' => 'ALLEMAGNE',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRÈCE',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINÉE',
    'GUYANA' => 'GUYANE',
    'HAITI' => 'HAÏTI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG-KONG',
    'HUNGARY' => 'HONGRIE',
    'ICELAND' => 'ISLANDE',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDE',
    'INDONESIA' => 'INDONÉSIE',
    'IRAN' => 'IRAN, RÉPUBLIQUE ISLAMIQUE',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDE',
    'ISRAEL' => 'ISRAËL',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'CÔTE D IVOIRE',
    'JAMAICA' => 'JAMAÏQUE',
    'JAPAN' => 'JAPON',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
    'KOREA, SOUTH' => 'CORÉE, RÉPUBLIQUE DE',
    'KUWAIT' => 'KOWEÏT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIE',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'ÎLES SOUS-LE-VENT',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYENNE, JAMAHIRIYA ARABE',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIE',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACÉDOINE, EX-RÉPUBLIQUE YOUGOSLAVE',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIE',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTE',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIE',
    'MAURITIUS' => 'MAURICE',
    'MELANESIA' => 'MÉLANÉSIE',
    'MEXICO' => 'MEXIQUE',
    'MOLDOVIA' => 'MOLDOVA, RÉPUBLIQUE DE',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIE',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'NÉPAL',
    'NETHERLANDS' => 'PAYS-BAS',
    'NETHERLANDS ANTILLES' => 'ANTILLES NÉERLANDAISES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONE NEUTRE DES ANTILLES HOLLANDAISES',
    'NEW CALADONIA' => 'NOUVELLE-CALÉDONIE',
    'NEW HEBRIDES' => 'NOUVELLES-HÉBRIDES',
    'NEW ZEALAND' => 'NOUVELLE-ZÉLANDE',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGÉRIA',
    'NORFOLK ISLAND' => 'NORFOLK, ÎLE',
    'NORWAY' => 'NORVÈGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'AUTRE',
    'PACIFIC ISLAND' => 'ILES DU PACIFIQUE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOUASIE-NOUVELLE-GUINÉE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PÉROU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLOGNE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'TIMOR ORIENTAL',
    'PUERTO RICO' => 'PORTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'BÉLARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'REUNION' => 'RÉUNION',
    'ROMANIA' => 'ROUMANIE',
    'RUSSIA' => 'RUSSIE',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'ÎLES RYŪKYŪ',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAINT-MARIN',
    'SAUDI ARABIA' => 'ARABIE SAOUDITE',
    'SENEGAL' => 'SÉNÉGAL',
    'SERBIA' => 'SERBIE',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPOUR',
    'SLOVAKIA' => 'SLOVAQUIE',
    'SLOVENIA' => 'SLOVÉNIE',
    'SOMALILIAND' => 'SOMALIE',
    'SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'SOUTH YEMEN' => 'YÉMEN DU SUD',
    'SPAIN' => 'ESPAGNE',
    'SPANISH SAHARA' => 'SAHARA ESPAGNOL',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT-KITTS-ET-NEVIS',
    'ST. LUCIA' => 'SAINTE-LUCIE',
    'SUDAN' => 'SOUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'NAMIBIE',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUÈDE',
    'SWITZERLAND' => 'SUISSE',
    'SYRIA' => 'SYRIENNE, RÉPUBLIQUE ARABE',
    'TAIWAN' => 'TAÏWAN, PROVINCE DE CHINE',
    'TAJIKISTAN' => 'TADJIKISTAN',
    'TANZANIA' => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
    'THAILAND' => 'THAÏLANDE',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINITÉ-ET-TOBAGO',
    'TUNISIA' => 'TUNISIE',
    'TURKEY' => 'TURQUIE',
    'UGANDA' => 'OUGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'ÉMIRATS ARABES UNIS',
    'UNITED KINGDOM' => 'ROYAUME-UNI',
    'UPPER VOLTA' => 'HAUTE-VOLTA',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ILES DU PACIFIQUE (US)',
    'US VIRGIN ISLANDS' => 'ÎLES VIERGES DES ÉTATS-UNIS',
    'USA' => 'ÉTATS-UNIS',
    'UZBEKISTAN' => 'OUZBÉKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIET NAM',
    'WAKE ISLAND' => 'ÎLE DE WAKE',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'YÉMEN',
    'ZAIRE' => 'REP. DEM. CONGO',
    'ZAMBIA' => 'ZAMBIE',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taïwan et Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS Cyrillique)',
    'CP1252' => 'CP1252 (MS Europe occidentale et États-Unis)',
    'EUC-CN' => 'EUC-CN (GB2312 Chinois simplifié)',
    'EUC-JP' => 'EUC-JP (Japonais Unix)',
    'EUC-KR' => 'EUC-KR (Corée)',
    'EUC-TW' => 'EUC-TW (Taiwanais)',
    'ISO-2022-JP' => 'ISO-2022-JP (japonais)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coréen)',
    'ISO-8859-1' => 'ISO-8859-1 (Europe occidentale et États-Unis)',
    'ISO-8859-2' => 'ISO-8859-2 (Europe centrale et orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillique)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Grec)',
    'ISO-8859-8' => 'ISO-8859-8 (Hébreu)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (7 Latin)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Russe Cyrillique)',
    'KOI8-U' => 'KOI8-U (Cyrillique Ukrainien)',
    'SJIS' => 'SJIS (MS japonais)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrique/Alger',
    'Africa/Luanda' => 'Afrique/Luanda',
    'Africa/Porto-Novo' => 'Afrique / Porto-Novo',
    'Africa/Gaborone' => 'Afrique / Gaborone',
    'Africa/Ouagadougou' => 'Afrique / Ouagadougou',
    'Africa/Bujumbura' => 'Afrique / Bujumbura',
    'Africa/Douala' => 'Afrique/Douala',
    'Atlantic/Cape_Verde' => 'Atlantique/Cap-Vert',
    'Africa/Bangui' => 'Afrique/Bangui',
    'Africa/Ndjamena' => 'Afrique/Ndjamena',
    'Indian/Comoro' => 'Océan Indien/Comorres',
    'Africa/Kinshasa' => 'Afrique/Kinshasa',
    'Africa/Lubumbashi' => 'Afrique / Lubumbashi',
    'Africa/Brazzaville' => 'Afrique/Brazzaville',
    'Africa/Abidjan' => 'Afrique/Abidjan',
    'Africa/Djibouti' => 'Afrique/Djibouti',
    'Africa/Cairo' => 'Afrique/Le Caire',
    'Africa/Malabo' => 'Afrique/Malabo',
    'Africa/Asmera' => 'Afrique/Asmera',
    'Africa/Addis_Ababa' => 'Afrique/Addis-Abeba',
    'Africa/Libreville' => 'Afrique/Libreville',
    'Africa/Banjul' => 'Afrique/Banjul',
    'Africa/Accra' => 'Afrique/Accra',
    'Africa/Conakry' => 'Afrique/Conakry',
    'Africa/Bissau' => 'Afrique/Bissau',
    'Africa/Nairobi' => 'Afrique/Nairobi',
    'Africa/Maseru' => 'Afrique / Maseru',
    'Africa/Monrovia' => 'Afrique / Monrovia',
    'Africa/Tripoli' => 'Afrique/Tripoli',
    'Indian/Antananarivo' => 'Océan Indien/Antananarivo',
    'Africa/Blantyre' => 'Afrique / Blantyre',
    'Africa/Bamako' => 'Afrique/Bamako',
    'Africa/Nouakchott' => 'Afrique / Nouakchott',
    'Indian/Mauritius' => 'Océan Indien/Maurice',
    'Indian/Mayotte' => 'Océan Indien/Mayotte',
    'Africa/Casablanca' => 'Afrique/Casablanca',
    'Africa/El_Aaiun' => 'Afrique / El Aaiun',
    'Africa/Maputo' => 'Afrique / Maputo',
    'Africa/Windhoek' => 'Afrique / Windhoek',
    'Africa/Niamey' => 'Afrique/Niamey',
    'Africa/Lagos' => 'Afrique/Lagos',
    'Indian/Reunion' => 'Océan Indien/La Réunion',
    'Africa/Kigali' => 'Afrique/Kigali',
    'Atlantic/St_Helena' => 'Atlantique/Sainte-Hélène',
    'Africa/Sao_Tome' => 'Afrique/Sao Tomé',
    'Africa/Dakar' => 'Afrique/Dakar',
    'Indian/Mahe' => 'Inde/Mahé',
    'Africa/Freetown' => 'Afrique/Libreville',
    'Africa/Mogadishu' => 'Afrique/Mogadicio',
    'Africa/Johannesburg' => 'Afrique/Johannesburg',
    'Africa/Khartoum' => 'Afrique / Khartoum',
    'Africa/Mbabane' => 'Afrique / Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrique/Dar es Salaam',
    'Africa/Lome' => 'Afrique/Lomé',
    'Africa/Tunis' => 'Afrique/Tunis',
    'Africa/Kampala' => 'Afrique / Kampala',
    'Africa/Lusaka' => 'Afrique / Lusaka',
    'Africa/Harare' => 'Afrique/Hararé',
    'Antarctica/Casey' => 'Antartique / Casey',
    'Antarctica/Davis' => 'Antartique / Davis',
    'Antarctica/Mawson' => 'Antartique / Mawson',
    'Indian/Kerguelen' => 'Inde / Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartique/DumontDUrville',
    'Antarctica/Syowa' => 'Antartique / Syowa',
    'Antarctica/Vostok' => 'Antartique / Vostok',
    'Antarctica/Rothera' => 'Antartique / Rothera',
    'Antarctica/Palmer' => 'Antartique / Palmer',
    'Antarctica/McMurdo' => 'Antartique / McMurdo',
    'Asia/Kabul' => 'Asie / Kabul',
    'Asia/Yerevan' => 'Asie /Yerevan',
    'Asia/Baku' => 'Asie/Baku',
    'Asia/Bahrain' => 'Asie/Bahrain',
    'Asia/Dhaka' => 'Asie /Dhaka',
    'Asia/Thimphu' => 'Asie /Thimphu',
    'Indian/Chagos' => 'Inde/Chagos',
    'Asia/Brunei' => 'Asie/Brunei',
    'Asia/Rangoon' => 'Asie /Rangoon',
    'Asia/Phnom_Penh' => 'Asie /Phnom Penh',
    'Asia/Beijing' => 'Asie/Pékin',
    'Asia/Harbin' => 'Asie /Harbin',
    'Asia/Shanghai' => 'Asie/Shanghai',
    'Asia/Chongqing' => 'Asie /Chongqing',
    'Asia/Urumqi' => 'Asie /Urumqi',
    'Asia/Kashgar' => 'Asie/Kashgar',
    'Asia/Hong_Kong' => 'Asie/Hong Kong',
    'Asia/Taipei' => 'Asie/Taipei',
    'Asia/Macau' => 'Asie/Macao',
    'Asia/Nicosia' => 'Asie/Nicosie',
    'Asia/Tbilisi' => 'Asie/Tbilisi',
    'Asia/Dili' => 'Asie/Dili',
    'Asia/Calcutta' => 'Asie/Calcutta',
    'Asia/Jakarta' => 'Asie/Jakarta',
    'Asia/Pontianak' => 'Asie/Pontianak',
    'Asia/Makassar' => 'Asie/Makassar',
    'Asia/Jayapura' => 'Asie/Jayapura',
    'Asia/Tehran' => 'Asie/Téhéran',
    'Asia/Baghdad' => 'Asie/Bagdad',
    'Asia/Jerusalem' => 'Asie/Jérusalem',
    'Asia/Tokyo' => 'Asie/Tokyo',
    'Asia/Amman' => 'Asie/Amman',
    'Asia/Almaty' => 'Asie/Almaty',
    'Asia/Qyzylorda' => 'Asie/Kyzylorda',
    'Asia/Aqtobe' => 'Asie/Aqtobe',
    'Asia/Aqtau' => 'Asie/Aqtaū',
    'Asia/Oral' => 'Asie/Oral',
    'Asia/Bishkek' => 'Asie/Bishkek',
    'Asia/Seoul' => 'Asie/Séoul',
    'Asia/Pyongyang' => 'Asie/Pyongyang',
    'Asia/Kuwait' => 'Asie/Kuwait',
    'Asia/Vientiane' => 'Asie/Vientiane',
    'Asia/Beirut' => 'Asie/Beyrouth',
    'Asia/Kuala_Lumpur' => 'Asie/Kuala Lumpur',
    'Asia/Kuching' => 'Asie/Kuching',
    'Indian/Maldives' => 'Océan Indien/Les Maldives',
    'Asia/Hovd' => 'Asie/Hovd',
    'Asia/Ulaanbaatar' => 'Asie/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asie/Choybalsan',
    'Asia/Katmandu' => 'Asie/Katmandu',
    'Asia/Muscat' => 'Asie/Muscat',
    'Asia/Karachi' => 'Asie/Karachi',
    'Asia/Gaza' => 'Asie/Gaza',
    'Asia/Manila' => 'Asie/Manille',
    'Asia/Qatar' => 'Asie/Qatar',
    'Asia/Riyadh' => 'Asie/Riyadh',
    'Asia/Singapore' => 'Asie/Singapour',
    'Asia/Colombo' => 'Asie/Colombo',
    'Asia/Damascus' => 'Asie/Damas',
    'Asia/Dushanbe' => 'Asie/Dushanbe',
    'Asia/Bangkok' => 'Asie/Bangkok',
    'Asia/Ashgabat' => 'Asie/Ashgabat',
    'Asia/Dubai' => 'Asie/Dubaï',
    'Asia/Samarkand' => 'Asie/Samarkand',
    'Asia/Tashkent' => 'Asie/Tashkent',
    'Asia/Saigon' => 'Asie/Saigon',
    'Asia/Aden' => 'Asie/Aden',
    'Australia/Darwin' => 'Australie/Darwin',
    'Australia/Perth' => 'Australie / Perth',
    'Australia/Brisbane' => 'Australie / Brisbane',
    'Australia/Lindeman' => 'Australie / Lindeman',
    'Australia/Adelaide' => 'Australie / Adelaide',
    'Australia/Hobart' => 'Australie / Hobart',
    'Australia/Currie' => 'Australie / Currie',
    'Australia/Melbourne' => 'Australie / Melbourne',
    'Australia/Sydney' => 'Australie / Sydney',
    'Australia/Broken_Hill' => 'Australie / Broken Hill',
    'Indian/Christmas' => 'Inde/Christmas',
    'Pacific/Rarotonga' => 'Pacifique/Rarotonga',
    'Indian/Cocos' => 'Inde/Cocos',
    'Pacific/Fiji' => 'Pacifique/Fidji',
    'Pacific/Gambier' => 'Pacifique/Gambier',
    'Pacific/Marquesas' => 'Pacifique/Marquesas',
    'Pacific/Tahiti' => 'Pacifique/Tahiti',
    'Pacific/Guam' => 'Pacifique/Guam',
    'Pacific/Tarawa' => 'Pacifique/Tarawa',
    'Pacific/Enderbury' => 'Pacifique/Enderbury',
    'Pacific/Kiritimati' => 'Pacifique/Kiritimati',
    'Pacific/Saipan' => 'Pacifique/Saipan',
    'Pacific/Majuro' => 'Pacifique/Majuro',
    'Pacific/Kwajalein' => 'Pacifique/Kwajalein',
    'Pacific/Truk' => 'Pacifique/Truk',
    'Pacific/Pohnpei' => 'Pacifique/Ponape',
    'Pacific/Kosrae' => 'Pacifique/Kosrae',
    'Pacific/Nauru' => 'Pacifique/Nauru',
    'Pacific/Noumea' => 'Pacifique/Noumea',
    'Pacific/Auckland' => 'Pacifique/Auckland',
    'Pacific/Chatham' => 'Pacifique/Chatham',
    'Pacific/Niue' => 'Pacifique/Niue',
    'Pacific/Norfolk' => 'Pacifique/Norfolk',
    'Pacific/Palau' => 'Pacifique/Palau',
    'Pacific/Port_Moresby' => 'Pacifique/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifique/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifique/Pago Pago',
    'Pacific/Apia' => 'Pacifique/Apia',
    'Pacific/Guadalcanal' => 'Pacifique/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifique/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifique/Tongatapu',
    'Pacific/Funafuti' => 'Pacifique/Funafuti',
    'Pacific/Johnston' => 'Pacifique/Johnston',
    'Pacific/Midway' => 'Pacifique/Midway',
    'Pacific/Wake' => 'Pacifique/Wake',
    'Pacific/Efate' => 'Pacifique/Efate',
    'Pacific/Wallis' => 'Pacifique/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirana',
    'Europe/Andorra' => 'Europe/Andorre',
    'Europe/Vienna' => 'Europe/Vienne',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Bruxelles',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhague',
    'Atlantic/Faeroe' => 'Atlantique/Féroé',
    'America/Danmarkshavn' => 'Amérique/Danmarkshavn',
    'America/Scoresbysund' => 'Amérique/Scoresbysund',
    'America/Godthab' => 'Amérique/Godthab',
    'America/Thule' => 'Amérique/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athènes',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantique/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malte',
    'Europe/Chisinau' => 'Europe/Chișinău',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Varsovie',
    'Europe/Lisbon' => 'Europe/Lisbone',
    'Atlantic/Azores' => 'Atlantique/Açores',
    'Atlantic/Madeira' => 'Atlantique/Madère',
    'Europe/Bucharest' => 'Europe/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscou',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asie/Yekaterinburg',
    'Asia/Omsk' => 'Asie/Omsk',
    'Asia/Novosibirsk' => 'Asie/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asie/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asie/Irkutsk',
    'Asia/Yakutsk' => 'Asie/Yakutsk',
    'Asia/Vladivostok' => 'Asie/Vladivostok',
    'Asia/Sakhalin' => 'Asie/Sakhalin',
    'Asia/Magadan' => 'Asie/Magadan',
    'Asia/Kamchatka' => 'Asie/Kamchatka',
    'Asia/Anadyr' => 'Asie/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Afrique / Ceuta',
    'Atlantic/Canary' => 'Atlantique/Canaries',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Oujhorod',
    'Europe/Zaporozhye' => 'Europe/Zaporijia',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'Amérique / New York',
    'America/Chicago' => 'Amérique / Chicago',
    'America/North_Dakota/Center' => 'Amérique/Dakota du Nord/Centre',
    'America/Denver' => 'Amérique / Denver',
    'America/Los_Angeles' => 'Amérique / Los Angeles',
    'America/Juneau' => 'Amérique / Juneau',
    'America/Yakutat' => 'Amérique / Yakutat',
    'America/Anchorage' => 'Amérique / Anchorage',
    'America/Nome' => 'Amérique/Nome',
    'America/Adak' => 'Amérique/Adak',
    'Pacific/Honolulu' => 'Pacifique/Honolulu',
    'America/Phoenix' => 'Amérique / Phoenix',
    'America/Boise' => 'Amérique/Boise',
    'America/Indiana/Indianapolis' => 'Amérique/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amérique/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amérique/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amérique/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amérique/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amérique/Kentucky/Monticello',
    'America/Detroit' => 'Amérique/Détroit',
    'America/Menominee' => 'Amérique/Menominee',
    'America/St_Johns' => 'Amérique/St. Johns',
    'America/Goose_Bay' => 'Amérique/Goose Bay',
    'America/Halifax' => 'Amérique/Halifax',
    'America/Glace_Bay' => 'Amérique/Glace Bay',
    'America/Montreal' => 'Amérique/Montréal',
    'America/Toronto' => 'Amérique/Toronto',
    'America/Thunder_Bay' => 'Amérique/Thunder Bay',
    'America/Nipigon' => 'Amérique/Nipigon',
    'America/Rainy_River' => 'Amérique/Rainy River',
    'America/Winnipeg' => 'Amérique/Winnipeg',
    'America/Regina' => 'Amérique/Regina',
    'America/Swift_Current' => 'Amérique/Swift Current',
    'America/Edmonton' => 'Amérique/Edmonton',
    'America/Vancouver' => 'Amérique / Vancouver',
    'America/Dawson_Creek' => 'Amérique/Dawson Creek',
    'America/Pangnirtung' => 'Amérique/Pangnirtung',
    'America/Iqaluit' => 'Amérique/Iqaluit',
    'America/Coral_Harbour' => 'Amérique/Coral Harbour',
    'America/Rankin_Inlet' => 'Amérique/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amérique/Cambridge Bay',
    'America/Yellowknife' => 'Amérique/Yellowknife',
    'America/Inuvik' => 'Amérique/Inuvik',
    'America/Whitehorse' => 'Amérique/Whitehorse',
    'America/Dawson' => 'Amérique/Dawson',
    'America/Cancun' => 'Amérique/Cancun',
    'America/Merida' => 'Amérique/Merida',
    'America/Monterrey' => 'Amérique/Monterrey',
    'America/Mexico_City' => 'Amérique/Mexique ville',
    'America/Chihuahua' => 'Amérique/Chihuahua',
    'America/Hermosillo' => 'Amérique/Hermosillo',
    'America/Mazatlan' => 'Amérique/Mazatlan',
    'America/Tijuana' => 'Amérique/Tijuana',
    'America/Anguilla' => 'Amérique/Anguilla',
    'America/Antigua' => 'Amérique/Antigua',
    'America/Nassau' => 'Amérique/Nassau',
    'America/Barbados' => 'Amérique/Barbados',
    'America/Belize' => 'Amérique/Bélize',
    'Atlantic/Bermuda' => 'Atlantique/Bermudes',
    'America/Cayman' => 'Amérique/Cayman',
    'America/Costa_Rica' => 'Amérique/Costa Rica',
    'America/Havana' => 'Amérique/La Havane',
    'America/Dominica' => 'Amérique/Dominica',
    'America/Santo_Domingo' => 'Amérique/Saint-Domingue',
    'America/El_Salvador' => 'Amérique/El Salvador',
    'America/Grenada' => 'Amérique/Grenada',
    'America/Guadeloupe' => 'Amérique/Guadeloupe',
    'America/Guatemala' => 'Amérique/Guatemala',
    'America/Port-au-Prince' => 'Amérique/Port-au-Prince',
    'America/Tegucigalpa' => 'Amérique/Tegucigalpa',
    'America/Jamaica' => 'Amérique / Jamaïque',
    'America/Martinique' => 'Amérique/Martinique',
    'America/Montserrat' => 'Amérique/Montserrat',
    'America/Managua' => 'Amérique/Managua',
    'America/Panama' => 'Amérique/Panama',
    'America/Puerto_Rico' => 'Amérique/Puerto Rico',
    'America/St_Kitts' => 'Amérique/St Kitts',
    'America/St_Lucia' => 'Amérique/Ste Lucia',
    'America/Miquelon' => 'Amérique/Miquelon',
    'America/St_Vincent' => 'Amérique/Saint-Vincent',
    'America/Grand_Turk' => 'Amérique/Grand Turk',
    'America/Tortola' => 'Amérique/Tortola',
    'America/St_Thomas' => 'Amérique/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amérique/Argentine/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amérique/Argentine/Cordoba',
    'America/Argentina/Tucuman' => 'Amérique/Argentine/Tucuman',
    'America/Argentina/La_Rioja' => 'Amérique/Argentine/La_Rioja',
    'America/Argentina/San_Juan' => 'Amérique/Argentine/San Juan',
    'America/Argentina/Jujuy' => 'Amérique/Argentine/Jujuy',
    'America/Argentina/Catamarca' => 'Amérique/Argentine/Catamarca',
    'America/Argentina/Mendoza' => 'Amérique/Argentine/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amérique/Argentine/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amérique/Argentine/Ushuaïa',
    'America/Aruba' => 'Amérique/Aruba',
    'America/La_Paz' => 'Amérique/La Paz',
    'America/Noronha' => 'Amérique/Noronha',
    'America/Belem' => 'Amérique/Belem',
    'America/Fortaleza' => 'Amérique/Fortaleza',
    'America/Recife' => 'Amérique/Recife',
    'America/Araguaina' => 'Amérique/Araguaina',
    'America/Maceio' => 'Amérique/Maceio',
    'America/Bahia' => 'Amérique/Bahia',
    'America/Sao_Paulo' => 'Amérique/São Paulo',
    'America/Campo_Grande' => 'Amérique/Campo Grande',
    'America/Cuiaba' => 'Amérique/Cuiaba',
    'America/Porto_Velho' => 'Amérique/Porto Velho',
    'America/Boa_Vista' => 'Amérique/Boa Vista',
    'America/Manaus' => 'Amérique/Manaus',
    'America/Eirunepe' => 'Amérique/Eirunepe',
    'America/Rio_Branco' => 'Amérique/Rio Branco',
    'America/Santiago' => 'Amérique/Santiago',
    'Pacific/Easter' => 'Pacifique/Easter',
    'America/Bogota' => 'Amérique/Bogota',
    'America/Curacao' => 'Amérique/Curacao',
    'America/Guayaquil' => 'Amérique/Guayaquil',
    'Pacific/Galapagos' => 'Pacifique/Galapagos',
    'Atlantic/Stanley' => 'Atlantique/Stanley',
    'America/Cayenne' => 'Amérique / Cayenne',
    'America/Guyana' => 'Amérique/Guyana',
    'America/Asuncion' => 'Amérique/Asuncion',
    'America/Lima' => 'Amérique / Lima',
    'Atlantic/South_Georgia' => 'Atlantique/Georgie du Sud',
    'America/Paramaribo' => 'Amérique/Paramaribo',
    'America/Port_of_Spain' => 'Amérique/Port d\'Espagne',
    'America/Montevideo' => 'Amérique/Montevideo',
    'America/Caracas' => 'Amérique/Caracas',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Favoris';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacts Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Demande',
    2 => 'Accès',
    3 => 'Invalide',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Emails',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagne',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Emails',
);
$app_strings ['documentation'] = array(
    'LBL_DOCS' => 'Documentation',
    'ULT' => '02_Sugar_Ultimate',
    'ENT' => '02_Sugar_Enterprise',
    'CORP' => '03_Sugar_Corporate',
    'PRO' => '04_Sugar_Professional',
    'COM' => '05_Sugar_Community_Edition',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de Connaissances';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Catégories';
$app_list_strings['aok_status_list']['Draft'] = 'Brouillon';
$app_list_strings['aok_status_list']['Expired'] = 'Périmé';
$app_list_strings['aok_status_list']['In_Review'] = 'En relecture';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privée';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Évènements';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Localisations';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invité';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Pas invité';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'A participé';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'N\'a pas participé';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepté';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refusé';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Pas de réponse';

$app_strings['LBL_STATUS_EVENT'] = 'Statut de l\'invitation';
$app_strings['LBL_ACCEPT_STATUS'] = 'Statut acceptation';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Page courante';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Liste Complète';
$app_strings['LBL_LISTVIEW_NONE'] = 'Aucun';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index des évènements';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Événements du Cas';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Mises à jour du cas';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Événements du Cas';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mises à jour du cas';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Veuillez répondre au-dessus de cette ligne ===';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ouvert',
        'Closed' => 'Fermé',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nouveau',
        'Open_Assigned' => 'Assigné',
        'Closed_Closed' => 'Fermé',
        'Open_Pending Input' => 'En attente',
        'Closed_Rejected' => 'Rejeté',
        'Closed_Duplicate' => 'Doublon',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utilisateur unique',
        'Account' => 'Compte utilisateur',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Utiliser les paramètres AOP par défaut',
    'singleUser' => 'Utilisateur unique',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Moins chargé',
    'random' => 'Al&eacute;atoire',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Critères du Rapport';
$app_list_strings['moduleList']['AOR_Charts'] = 'Graphique de rapport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Champs du Rapport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapports planifiés';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egal à';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Différent de';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Supérieur à';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Inférieur à';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou égal à';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou égal à';
$app_list_strings['aor_operator_list']['Contains'] = 'contient';
$app_list_strings['aor_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-j';
$app_list_strings['aor_format_options']['Ymd'] = 'Amj';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'j/m/A';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'et';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aor_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aor_condition_type_list']['Period'] = 'Période';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilisateur courant';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Heures';
$app_list_strings['aor_date_type_list']['day'] = 'Jours';
$app_list_strings['aor_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aor_date_type_list']['month'] = 'Mois';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Heures ouvrées';
$app_list_strings['aor_date_options']['now'] = 'Maintenant';
$app_list_strings['aor_date_options']['field'] = 'Ce champ';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Croissant';
$app_list_strings['aor_sort_operator']['DESC'] = 'Décroissant';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Décompte';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Total';
$app_list_strings['aor_function_list']['AVG'] = 'Moyenne';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Décompte';
$app_list_strings['aor_total_options']['SUM'] = 'Total';
$app_list_strings['aor_total_options']['AVG'] = 'Moyenne';
$app_list_strings['aor_chart_types']['bar'] = 'Histogramme';
$app_list_strings['aor_chart_types']['line'] = 'Graphique courbe';
$app_list_strings['aor_chart_types']['pie'] = 'Graphique en camembert';
$app_list_strings['aor_chart_types']['radar'] = 'Graphique en radar';
$app_list_strings['aor_chart_types']['polar'] = 'Graphique par pôles';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barres empilées';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barres groupées';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensuelle';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Hebdomadaire';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Quotidien';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Actif';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Annulée';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aor_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aor_assign_options']['role'] = 'TOUS les utilisateurs de rôle';
$app_list_strings['aor_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de sécurité';
$app_list_strings['date_time_period_list']['today'] = 'Aujourd&#39;hui';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hier';
$app_list_strings['date_time_period_list']['this_week'] = 'Cette semaine';
$app_list_strings['date_time_period_list']['last_week'] = 'La semaine dernière';
$app_list_strings['date_time_period_list']['last_month'] = 'Le mois dernier';
$app_list_strings['date_time_period_list']['this_month'] = 'Ce mois-ci';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ce trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Le trimestre dernier';
$app_list_strings['date_time_period_list']['this_year'] = 'Cette année';
$app_list_strings['date_time_period_list']['last_year'] = 'Année dernière';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'le';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'le';
$app_strings['LBL_CRON_AT'] = 'à';
$app_strings['LBL_CRON_RAW'] = 'Avancée';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Heure';
$app_strings['LBL_CRON_DAY'] = 'Jour';
$app_strings['LBL_CRON_MONTH'] = 'Mois';
$app_strings['LBL_CRON_DOW'] = 'Jour de la semaine';
$app_strings['LBL_CRON_DAILY'] = 'Quotidien';
$app_strings['LBL_CRON_WEEKLY'] = 'Hebdomadaire';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensuelle';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contrats';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Factures';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - modèles';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produits - catégories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produits';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Ligne produit';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Groupes de lignes produits';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Devis';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Autre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Brouillon';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Négociation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Délivré';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Suspendu';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmé';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Clos Accepté';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Perdu';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Clos Abandonné';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15 jours';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30 jours';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Validé';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non validé';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pourcent';
$app_list_strings['discount_list']['Amount'] = 'Montant';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Autre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Payé';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non payé';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annulé';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non facturé';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturé';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ordinateurs portables';
$app_list_strings['product_category_dom']['Desktops'] = 'Ordinateurs de bureau';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bon';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Comptes';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Prospects';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non démarré';
$app_list_strings['contract_status_list']['In Progress'] = 'En cours';
$app_list_strings['contract_status_list']['Signed'] = 'Signé';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_GENERATE_LETTER'] = 'Générer le document';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Veuillez sélectionner un Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERREUR\nAucun template trouvé\nVeuillez aller à la section PDF Templates et créez en un';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux d\'activité';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Critères du WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Analyse du processus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Actions du WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Actif';
$app_list_strings['aow_status_list']['Inactive'] = 'Annulée';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Egal à';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Différent de';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Supérieur à';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Inférieur à';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou égal à';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou égal à';
$app_list_strings['aow_operator_list']['Contains'] = 'contient';
$app_list_strings['aow_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aow_operator_list']['is_null'] = 'Vide';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Terminée';
$app_list_strings['aow_process_status_list']['Running'] = 'En cours d\'exécution';
$app_list_strings['aow_process_status_list']['Pending'] = 'En attente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Echec';
$app_list_strings['aow_condition_operator_list']['And'] = 'et';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Tout changement';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Dans le groupe de sécurité';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aow_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'A tour de rôle';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Moins chargé';
$app_list_strings['aow_action_type_list']['Random'] = 'Al&eacute;atoire';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Heures';
$app_list_strings['aow_date_type_list']['day'] = 'Jours';
$app_list_strings['aow_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aow_date_type_list']['month'] = 'Mois';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Heures ouvrées';
$app_list_strings['aow_date_options']['now'] = 'Maintenant';
$app_list_strings['aow_date_options']['today'] = 'Aujourd&#39;hui';
$app_list_strings['aow_date_options']['field'] = 'Ce champ';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aow_assign_options']['role'] = 'TOUS les utilisateurs de rôle';
$app_list_strings['aow_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de sécurité';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Enregistrer l\'email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Champ lié';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cci';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tous les enregistrements';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nouveaux enregistrements';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Enregistrements modifiés';
$app_list_strings['aow_run_when_list']['Always'] = '- toujours -';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Seulement à l\'enregistrement';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Seulement dans le planificateur';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projets - modèles';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Modèles de tâches';
$app_list_strings['relationship_type_list']['FS'] = 'Finaliser pour démarrer';
$app_list_strings['relationship_type_list']['SS'] = 'Démarrer pour commencer';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Périodes d\'interruption du projet';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Contacts';
$app_list_strings['holiday_resource_dom']['Users'] = 'Utilisateurs';
$app_list_strings['duration_unit_dom']['Days'] = 'Jours';
$app_list_strings['duration_unit_dom']['Hours'] = 'Heures';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Voir le Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Voir le Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Créer Projet';

//gmaps
$app_strings['LBL_MAP'] = 'Carte';
$app_strings['LBL_MAPS'] = 'Cartes';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status Géocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse principale:';
$app_strings['LBL_BUG_FIX'] = 'Résolutions de Bugs';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Cartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Cartes - Marqueurs';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Cartes - zones';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cartes - cache des adresses';

$app_list_strings['map_unit_type_list']['mi'] = 'Km';
$app_list_strings['map_unit_type_list']['km'] = 'Kilomètres';

$app_list_strings['map_module_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_module_type_list']['Leads'] = 'Prospects';
$app_list_strings['map_module_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_module_type_list']['Project'] = 'Projets';
$app_list_strings['map_module_type_list']['Prospects'] = 'Cibles';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_relate_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_relate_type_list']['Leads'] = 'Leads';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_relate_type_list']['Project'] = 'Projets';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cible';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Petit Avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion Tourisme';
$app_list_strings['marker_image_list']['airport'] = 'Aéroport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphithéâtre';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arche';
$app_list_strings['marker_image_list']['atm'] = 'DAB';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banque';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banque Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banque Livre';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plage';
$app_list_strings['marker_image_list']['beautiful'] = 'Belle';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Stationnement pour vélos';
$app_list_strings['marker_image_list']['big_city'] = 'Grande ville';
$app_list_strings['marker_image_list']['bridge'] = 'Pont';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pont moderne';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Téléphérique';
$app_list_strings['marker_image_list']['car'] = 'Voiture';
$app_list_strings['marker_image_list']['car_rental'] = 'Location voiture';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Château';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathédrale';
$app_list_strings['marker_image_list']['chapel'] = 'Chapelle';
$app_list_strings['marker_image_list']['church'] = 'Église';
$app_list_strings['marker_image_list']['city_square'] = 'Place de la ville';
$app_list_strings['marker_image_list']['cluster'] = 'Groupe';
$app_list_strings['marker_image_list']['cluster_2'] = 'Groupe 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Groupe 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Groupe 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Groupe 5';
$app_list_strings['marker_image_list']['coffee'] = 'Café';
$app_list_strings['marker_image_list']['community_centre'] = 'Centre communautaire';
$app_list_strings['marker_image_list']['company'] = 'Société';
$app_list_strings['marker_image_list']['conference'] = 'Conférence';
$app_list_strings['marker_image_list']['construction'] = 'Construction - BTP';
$app_list_strings['marker_image_list']['convenience'] = 'Magasin';
$app_list_strings['marker_image_list']['court'] = 'Cour';
$app_list_strings['marker_image_list']['cruise'] = 'Croisière';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Bureau de change';
$app_list_strings['marker_image_list']['customs'] = 'Douanes';
$app_list_strings['marker_image_list']['cycling'] = 'Cyclisme';
$app_list_strings['marker_image_list']['dam'] = 'Barrage';
$app_list_strings['marker_image_list']['days_dim'] = 'Jours Dim ';
$app_list_strings['marker_image_list']['days_dom'] = 'Jours Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Jours Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Jours Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Jours Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Jours Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Jours Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Jours Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Jours Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Jours Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Jours Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Jours Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Jours Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Jours Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Jours Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Jours Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Jours Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentiste';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grand magasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking handicapé';
$app_list_strings['marker_image_list']['doctor'] = 'Médecin';
$app_list_strings['marker_image_list']['dog_leash'] = 'Laisse chien';
$app_list_strings['marker_image_list']['down'] = 'Vers le bas';
$app_list_strings['marker_image_list']['down_left'] = 'Bas gauche';
$app_list_strings['marker_image_list']['down_right'] = 'Bas à droite';
$app_list_strings['marker_image_list']['down_then_left'] = 'Vers le bas puis gauche';
$app_list_strings['marker_image_list']['down_then_right'] = 'Vers le bas puis à droite';
$app_list_strings['marker_image_list']['drugs'] = 'Médicaments';
$app_list_strings['marker_image_list']['elevator'] = 'Ascenseur';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Usine';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Chutes de pierres';
$app_list_strings['marker_image_list']['fast_food'] = 'Restauration rapide';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forêt';
$app_list_strings['marker_image_list']['fountain'] = 'Fontaine';
$app_list_strings['marker_image_list']['friday'] = 'Le vendredi';
$app_list_strings['marker_image_list']['garden'] = 'Jardin';
$app_list_strings['marker_image_list']['gas_station'] = 'Pompe à essence';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaux';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Épicerie';
$app_list_strings['marker_image_list']['hairsalon'] = 'Salon de coiffure';
$app_list_strings['marker_image_list']['helicopter'] = 'Hélicoptère';
$app_list_strings['marker_image_list']['highway'] = 'Autoroute';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartier Historique';
$app_list_strings['marker_image_list']['home'] = 'Accueil';
$app_list_strings['marker_image_list']['hospital'] = 'Hôpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hôtel 1 étoile';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hôtel 2 étoiles';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hôtel 3 étoiles';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hôtel 4 étoiles';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hôtel 5 étoiles';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Laverie automatique';
$app_list_strings['marker_image_list']['left'] = 'Gauche';
$app_list_strings['marker_image_list']['left_then_down'] = 'Gauche puis Bas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Gauche puis Haut';
$app_list_strings['marker_image_list']['library'] = 'Librairie';
$app_list_strings['marker_image_list']['lighthouse'] = 'Phare';
$app_list_strings['marker_image_list']['liquor'] = 'Alcool';
$app_list_strings['marker_image_list']['lock'] = 'Serrure';
$app_list_strings['marker_image_list']['main_road'] = 'Route principale';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Antenne Relais Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tour moderne';
$app_list_strings['marker_image_list']['monastery'] = 'Monastère';
$app_list_strings['marker_image_list']['monday'] = 'Le lundi';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosquée';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moto';
$app_list_strings['marker_image_list']['museum'] = 'Musée';
$app_list_strings['marker_image_list']['music_live'] = 'Concert Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Chevalet de pompage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palais';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramique';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parc relais';
$app_list_strings['marker_image_list']['parking'] = 'Stationnement';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-Nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Endroits inconnus';
$app_list_strings['marker_image_list']['places_visited'] = 'Endroits visités';
$app_list_strings['marker_image_list']['playground'] = 'Terrain de jeux';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Boîte aux lettres';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poteau électrique';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale électrique';
$app_list_strings['marker_image_list']['power_substation'] = 'Poste électrique';
$app_list_strings['marker_image_list']['public_art'] = 'Art public';
$app_list_strings['marker_image_list']['rain'] = 'Pluie';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilier';
$app_list_strings['marker_image_list']['regroup'] = 'Regroupement';
$app_list_strings['marker_image_list']['resort'] = 'Station';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Africain';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinois';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant de poisson';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish and Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gastronomique';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grec';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indien';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italien';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonais';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant coréen';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant méditerranéen';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicain';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantique';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant turc';
$app_list_strings['marker_image_list']['right'] = 'À droite';
$app_list_strings['marker_image_list']['right_then_down'] = 'À droite et en bas';
$app_list_strings['marker_image_list']['right_then_up'] = 'À droite et en haut';
$app_list_strings['marker_image_list']['satursday'] = 'Samedi';
$app_list_strings['marker_image_list']['school'] = 'Ecole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centre Commercial';
$app_list_strings['marker_image_list']['shore'] = 'Rivage';
$app_list_strings['marker_image_list']['sight'] = 'Vue';
$app_list_strings['marker_image_list']['small_city'] = 'Village';
$app_list_strings['marker_image_list']['snow'] = 'Neige';
$app_list_strings['marker_image_list']['spaceport'] = 'Base de lancement';
$app_list_strings['marker_image_list']['speed_100'] = 'Vitesse à 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Vitesse à 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Vitesse à 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Vitesse à 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Vitesse à 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Vitesse à 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Vitesse à 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Vitesse à 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Vitesse à 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Vitesse à 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Vitesse à 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Vitesse à 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ralentisseur';
$app_list_strings['marker_image_list']['stadium'] = 'Stade';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Train à vapeur';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Feu';
$app_list_strings['marker_image_list']['subway'] = 'Métro';
$app_list_strings['marker_image_list']['sun'] = 'Dim';
$app_list_strings['marker_image_list']['sunday'] = 'Le dimanche';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarché';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Voie réservée aux taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Salon de Thé';
$app_list_strings['marker_image_list']['telephone'] = 'Téléphone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindou';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Texte';
$app_list_strings['marker_image_list']['theater'] = 'Théâtre';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc d\'Attractions';
$app_list_strings['marker_image_list']['thursday'] = 'Le jeudi';
$app_list_strings['marker_image_list']['toilets'] = 'Toilettes';
$app_list_strings['marker_image_list']['toll_station'] = 'Péage';
$app_list_strings['marker_image_list']['tower'] = 'Tour';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Caméra de surveillance routière';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tramway';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Le mardi';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Tourner à Gauche';
$app_list_strings['marker_image_list']['turn_right'] = 'Tourner à Droite';
$app_list_strings['marker_image_list']['university'] = 'Université';
$app_list_strings['marker_image_list']['up'] = 'En haut';
$app_list_strings['marker_image_list']['up_left'] = 'Haut gauche';
$app_list_strings['marker_image_list']['up_right'] = 'Haut droit';
$app_list_strings['marker_image_list']['up_then_left'] = 'En haut et à gauche';
$app_list_strings['marker_image_list']['up_then_right'] = 'En haut et à droite';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vidéo';
$app_list_strings['marker_image_list']['villa'] = 'Maison';
$app_list_strings['marker_image_list']['water'] = 'Eau';
$app_list_strings['marker_image_list']['waterfall'] = 'Chute d\'eau';
$app_list_strings['marker_image_list']['watermill'] = 'Moulin à Eau';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc Aquatique';
$app_list_strings['marker_image_list']['watertower'] = 'Château d\'eau';
$app_list_strings['marker_image_list']['wednesday'] = 'Le mercredi';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Eolienne';
$app_list_strings['marker_image_list']['windmill'] = 'Moulin à vent';
$app_list_strings['marker_image_list']['winery'] = 'Chai';
$app_list_strings['marker_image_list']['work_office'] = 'Bureau';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Site du patrimoine mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Absent du bureau';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En réunion';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Merci de saisir les informations de la replanification';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motif :';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Veuillez sélectionner une date valide';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Merci de choisir la cause';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historique des tentatives d\'appel';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentatives d\'appel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestion des groupes de securité';
$app_strings['LBL_LOGIN_AS'] = 'Connecté sous';
$app_strings['LBL_LOGOUT_AS'] = 'Déconnecté sous';
$app_strings['LBL_SECURITYGROUP'] = 'Groupes de sécurité';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Comptes de courrier électronique sortant';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Utilisateur Facebook';
$app_strings['LBL_TWITTER_USER_C'] = 'Utilisateur Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Détails des flux sociaux';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtre';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Créer une Société';
$app_strings['LBL_QUICK_CONTACT'] = 'Créer un Contact';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Créer une Affaire';
$app_strings['LBL_QUICK_LEAD'] = 'Créer Lead';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Créer Document';
$app_strings['LBL_QUICK_CALL'] = 'Planifier un Appel';
$app_strings['LBL_QUICK_TASK'] = 'Créer une Tache';
$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Ajouter un onglet';
$app_strings['LBL_EDIT_TAB'] = 'Editer les onglets';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Tableau de bord SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Entrer le nom du tableau de bord :';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Nombre de colonnes :';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Etes-vous sûr de vouloir effacer ce';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tableau de bord ?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Ajouter une page au tableau de bord';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Supprimer la page du tableau de bord en cours';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renommer la page du tableau de bord';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Actions';
$app_strings['LBL_DISCOVER_SUITECRM'] = 'Découvrir SuiteCRM';

$app_list_strings['collection_temp_list'] = array('Tasks' => 'Tâches', 'Meetings' => 'Réunions', 'Calls' => 'Appels', 'Notes' => 'Notes', 'Emails' => 'Mails');

$app_list_strings['moduleList']['TemplateEditor'] = 'Editeur de modèles';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Vous avez cliqué en dehors du champ que vous éditiez sans l’enregistrer. Cliquez sur ok si vous voulez perdre vos modifications, ou sur annuler si vous souhaitez continuer l’édition";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Il y a eu une erreur lors du chargement du champ. Votre session peut avoir expiré. Veuillez vous connecter à nouveau pour résoudre ce problème";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'ventes',
    'getAccountsSpotsData' => 'Comptes',
    'getLeadsSpotsData' => 'Prospects',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Activité marketing',
    'getActivitiesSpotsData' => 'Activités',
    'getQuotesSpotsData' => 'Devis'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Heures ouvrées';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '00:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Le lundi';
$app_list_strings['day_list']['Tuesday'] = 'Le mardi';
$app_list_strings['day_list']['Wednesday'] = 'Le mercredi';
$app_list_strings['day_list']['Thursday'] = 'Le jeudi';
$app_list_strings['day_list']['Friday'] = 'Le vendredi';
$app_list_strings['day_list']['Saturday'] = 'Le samedi';
$app_list_strings['day_list']['Sunday'] = 'Le dimanche';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Lettres';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Légal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Photo';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Paysage';