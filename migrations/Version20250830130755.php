<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250830130755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_app
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_app_it
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_app_it_a
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_app_plug
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_it
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_it_a
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_adminpresets_plug
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_indicator_calc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_models
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_models_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_predict_samples
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_prediction_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_predictions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_train_samples
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_used_analysables
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_analytics_used_files
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_plugin_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_submission
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_user_flags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assign_user_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_editpdf_annot
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_editpdf_cmnt
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_editpdf_quick
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_editpdf_rot
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignfeedback_file
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignsubmission_file
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_assignsubmission_onlinetext
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_auth_lti_linked_login
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_auth_oauth2_linked_login
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_backup_controllers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_backup_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_backup_logs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_alignment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_backpack
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_backpack_oauth2
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_criteria_met
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_criteria_param
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_endorsement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_external
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_external_backpack
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_external_identifier
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_issued
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_manual_award
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_badge_related
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_bigbluebuttonbn
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_bigbluebuttonbn_logs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_bigbluebuttonbn_recordings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block_positions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block_recent_activity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block_recentlyaccesseditems
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_block_rss_client
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_blog_association
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_blog_external
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_book
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_book_chapters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_cache_filters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_cache_flags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_capabilities
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_chat
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_chat_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_chat_messages_current
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_chat_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_choice
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_choice_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_choice_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_cohort
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_cohort_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_communication
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_communication_customlink
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_communication_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_coursecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_coursecompsetting
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_evidence
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_framework
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_modulecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_plan
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_plancomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_relatedcomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_templatecohort
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_templatecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_usercomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_usercompcourse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_usercompplan
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_userevidence
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_competency_userevidencecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_config_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_config_plugins
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_contentbank_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_context
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_context_temp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_completion_aggr_methd
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_completion_crit_compl
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_completion_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_completion_defaults
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_completions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_format_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_modules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_modules_completion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_modules_viewed
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_published
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_course_sections
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_customfield_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_customfield_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_customfield_field
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_data_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_data_fields
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_data_records
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_editor_atto_autosave
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_flatfile
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_app_registration
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_context
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_deployment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_consumer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_context
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_nonce
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_share_key
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_tool_proxy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_lti2_user_result
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_tool_consumer_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_tools
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_user_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_lti_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_enrol_paypal
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_event
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_event_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_events_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_events_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_events_queue_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_external_functions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_external_services
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_external_services_functions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_external_services_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_external_tokens
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_favourite
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_completed
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_completedtmp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_sitecourse_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_feedback_valuetmp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_file_conversion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_files
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_files_reference
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_filter_active
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_filter_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_folder
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_digests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_discussion_subs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_discussions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_posts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_read
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_forum_track_prefs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary_alias
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary_entries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary_entries_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_glossary_formats
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_categories_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_grades_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_import_newitem
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_import_values
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_items
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_items_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_letters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_outcomes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_outcomes_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_outcomes_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grade_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grading_areas
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grading_definitions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_grading_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_guide_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_guide_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_guide_fillings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_rubric_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_rubric_fillings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_gradingform_rubric_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_groupings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_groupings_groups
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_groups
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_groups_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5p
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5p_contents_libraries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5p_libraries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5p_libraries_cachedassets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5p_library_dependencies
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5pactivity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5pactivity_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_h5pactivity_attempts_results
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_imscp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_infected_files
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_label
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_branch
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lesson_timer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_license
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lock_db
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_log_display
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_log_queries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_logstore_standard_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_access_tokens
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_coursevisible
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_submission
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_tool_proxies
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_tool_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_types
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_types_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_lti_types_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ltiservice_gradebookservices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_matrix_room
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_airnotifier_devices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_contact_requests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_contacts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_conversation_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_conversation_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_conversations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_email_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_popup
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_popup_notifications
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_processors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_providers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_read
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_user_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_message_users_blocked
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_messageinbound_datakeys
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_messageinbound_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_messageinbound_messagelist
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_application
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_host
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_host2service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_remote_rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_remote_service2rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_service2rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnet_sso_access_control
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnetservice_enrol_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_mnetservice_enrol_enrolments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_modules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_moodlenet_share_progress
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_my_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_notifications
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_access_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_endpoint
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_issuer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_refresh_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_system_account
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_oauth2_user_field_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_app
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_app_it
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_app_it_a
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_app_plug
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_it
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_it_a
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_padminpresets_plug
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_page
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_indicator_calc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_models
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_models_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_predict_samples
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_prediction_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_predictions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_train_samples
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_used_analysables
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_panalytics_used_files
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_plugin_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_submission
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_user_flags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passign_user_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_editpdf_annot
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_editpdf_cmnt
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_editpdf_quick
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_editpdf_rot
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignfeedback_file
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignsubmission_file
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_passignsubmission_onlinetext
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pauth_lti_linked_login
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pauth_oauth2_linked_login
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_paygw_paypal
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_payment_accounts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_payment_gateways
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_payments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbackup_controllers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbackup_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbackup_logs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_alignment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_backpack
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_backpack_oauth2
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_criteria_met
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_criteria_param
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_endorsement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_external
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_external_backpack
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_external_identifier
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_issued
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_manual_award
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbadge_related
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbigbluebuttonbn
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbigbluebuttonbn_logs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbigbluebuttonbn_recordings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock_positions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock_recent_activity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock_recentlyaccesseditems
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblock_rss_client
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblog_association
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pblog_external
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbook
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pbook_chapters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcache_filters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcache_flags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcapabilities
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchat
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchat_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchat_messages_current
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchat_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchoice
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchoice_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pchoice_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcohort
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcohort_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcomments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcommunication
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcommunication_customlink
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcommunication_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_coursecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_coursecompsetting
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_evidence
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_framework
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_modulecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_plan
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_plancomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_relatedcomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_templatecohort
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_templatecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_usercomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_usercompcourse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_usercompplan
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_userevidence
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcompetency_userevidencecomp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pconfig
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pconfig_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pconfig_plugins
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcontentbank_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcontext
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcontext_temp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_completion_aggr_methd
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_completion_crit_compl
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_completion_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_completion_defaults
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_completions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_format_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_modules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_modules_completion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_modules_viewed
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_published
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcourse_sections
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcustomfield_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcustomfield_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pcustomfield_field
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pdata
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pdata_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pdata_fields
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pdata_records
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_peditor_atto_autosave
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_flatfile
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_app_registration
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_context
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_deployment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_consumer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_context
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_nonce
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_share_key
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_tool_proxy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_lti2_user_result
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_tool_consumer_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_tools
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_user_resource_link
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_lti_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_penrol_paypal
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pevent
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pevent_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pevents_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pevents_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pevents_queue_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pexternal_functions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pexternal_services
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pexternal_services_functions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pexternal_services_users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pexternal_tokens
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfavourite
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_completed
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_completedtmp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_sitecourse_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfeedback_valuetmp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfile_conversion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfiles
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfiles_reference
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfilter_active
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfilter_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pfolder
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_digests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_discussion_subs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_discussions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_posts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_read
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pforum_track_prefs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary_alias
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary_entries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary_entries_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pglossary_formats
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_categories_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_grades_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_import_newitem
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_import_values
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_items
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_items_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_letters
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_outcomes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_outcomes_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_outcomes_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrade_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrading_areas
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrading_definitions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgrading_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_guide_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_guide_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_guide_fillings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_rubric_criteria
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_rubric_fillings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgradingform_rubric_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgroupings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgroupings_groups
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgroups
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pgroups_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5p
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5p_contents_libraries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5p_libraries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5p_libraries_cachedassets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5p_library_dependencies
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5pactivity
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5pactivity_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ph5pactivity_attempts_results
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pimscp
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pinfected_files
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plabel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_branch
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plesson_timer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plicense
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plock_db
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plog
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plog_display
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plog_queries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plogstore_standard_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_access_tokens
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_coursevisible
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_submission
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_tool_proxies
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_tool_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_types
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_types_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_plti_types_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pltiservice_gradebookservices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmatrix_room
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_airnotifier_devices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_contact_requests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_contacts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_conversation_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_conversation_members
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_conversations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_email_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_popup
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_popup_notifications
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_processors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_providers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_read
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_user_actions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessage_users_blocked
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessageinbound_datakeys
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessageinbound_handlers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessageinbound_messagelist
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmessages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_application
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_host
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_host2service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_remote_rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_remote_service2rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_service2rpc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnet_sso_access_control
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnetservice_enrol_courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmnetservice_enrol_enrolments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmodules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmoodlenet_share_progress
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pmy_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pnotifications
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_access_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_endpoint
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_issuer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_refresh_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_system_account
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_poauth2_user_field_mapping
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_instance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_instance_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_instance_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_mahara_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_portfolio_tempdata
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_post
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppage
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppaygw_paypal
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppayment_accounts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppayment_gateways
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppayments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_instance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_instance_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_instance_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_mahara_queue
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pportfolio_tempdata
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ppost
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pprofiling
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddimageortext
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddimageortext_drags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddimageortext_drops
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddmarker
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddmarker_drags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ddmarker_drops
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_essay_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_match_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_match_subquestions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_multichoice_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_ordering_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_randomsamatch_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pqtype_shortanswer_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_attempt_step_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_attempt_steps
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_bank_entries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_calculated
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_calculated_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_dataset_definitions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_dataset_items
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_datasets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_ddwtos
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_gapselect
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_hints
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_multianswer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_numerical
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_numerical_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_numerical_units
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_references
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_response_analysis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_response_count
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_set_references
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_statistics
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_truefalse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_usages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquestion_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_feedback
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_grade_items
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_overview_regrades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_reports
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_sections
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_slots
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquiz_statistics
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquizaccess_seb_quizsettings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pquizaccess_seb_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prating
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pregistration_hubs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_preportbuilder_audience
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_preportbuilder_column
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_preportbuilder_filter
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_preportbuilder_report
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_preportbuilder_schedule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prepository
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prepository_instance_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prepository_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prepository_onedrive_access
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_presource
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_presource_old
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_profiling
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_allow_assign
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_allow_override
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_allow_switch
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_allow_view
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_assignments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_capabilities
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_context_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_prole_names
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscale
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscale_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_aicc_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_attempt
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_element
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_scoes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_scoes_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_scoes_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_mapinfo
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_objective
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_rolluprule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_rolluprulecond
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_rulecond
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pscorm_seq_ruleconds
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psearch_index_requests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psearch_simpledb_index
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psessions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_daily
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_monthly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_user_daily
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_user_monthly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_user_weekly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pstats_weekly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psurvey
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psurvey_analysis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psurvey_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_psurvey_questions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptag
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptag_area
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptag_coll
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptag_correlation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptag_instance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptask_adhoc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptask_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptask_scheduled
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptiny_autosave
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_areas
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_cache_acts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_cache_check
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_checks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_errors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_process
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_results
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_schedule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_brickfield_summary
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_cohortroles
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_customlang
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_customlang_components
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_contextlist
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_ctxexpired
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_ctxinstance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_ctxlevel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_ctxlst_ctx
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_purpose
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_purposerole
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_dataprivacy_rqst_ctxlst
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_mfa
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_mfa_auth
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_mfa_secrets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_monitor_events
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_monitor_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_monitor_rules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_monitor_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_policy_acceptances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_policy_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_recyclebin_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_recyclebin_course
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_usertours_steps
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_ptool_usertours_tours
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pupgrade_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_purl
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_devices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_enrolments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_info_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_info_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_info_field
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_lastaccess
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_password_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_password_resets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_preferences
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_puser_private_key
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_links
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_locks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_subwikis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_synonyms
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pwiki_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshop
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshop_aggregations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshop_assessments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshop_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshop_submissions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopallocation_scheduled
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopeval_best_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_accumulative
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_numerrors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_numerrors_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_rubric
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_rubric_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pworkshopform_rubric_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_pxapi_states
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddimageortext
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddimageortext_drags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddimageortext_drops
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddmarker
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddmarker_drags
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ddmarker_drops
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_essay_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_match_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_match_subquestions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_multichoice_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_ordering_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_randomsamatch_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_qtype_shortanswer_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_attempt_step_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_attempt_steps
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_bank_entries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_calculated
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_calculated_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_dataset_definitions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_dataset_items
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_datasets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_ddwtos
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_gapselect
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_hints
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_multianswer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_numerical
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_numerical_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_numerical_units
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_references
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_response_analysis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_response_count
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_set_references
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_statistics
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_truefalse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_usages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_question_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_attempts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_feedback
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_overrides
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_overview_regrades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_reports
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_sections
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_slots
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quiz_statistics
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quizaccess_seb_quizsettings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_quizaccess_seb_template
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_rating
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_registration_hubs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_reportbuilder_audience
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_reportbuilder_column
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_reportbuilder_filter
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_reportbuilder_report
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_reportbuilder_schedule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_repository
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_repository_instance_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_repository_instances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_repository_onedrive_access
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_resource
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_resource_old
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_allow_assign
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_allow_override
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_allow_switch
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_allow_view
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_assignments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_capabilities
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_context_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_role_names
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scale
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scale_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_aicc_session
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_attempt
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_element
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_scoes
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_scoes_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_scoes_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_mapinfo
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_objective
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_rolluprule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_rolluprulecond
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_rulecond
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_scorm_seq_ruleconds
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_search_index_requests
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_search_simpledb_index
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_sessions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_daily
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_monthly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_user_daily
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_user_monthly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_user_weekly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_stats_weekly
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_survey
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_survey_analysis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_survey_answers
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_survey_questions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tag
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tag_area
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tag_coll
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tag_correlation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tag_instance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_task_adhoc
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_task_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_task_scheduled
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tiny_autosave
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_areas
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_cache_acts
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_cache_check
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_checks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_content
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_errors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_process
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_results
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_schedule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_brickfield_summary
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_cohortroles
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_customlang
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_customlang_components
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_contextlist
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_ctxexpired
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_ctxinstance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_ctxlevel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_ctxlst_ctx
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_purpose
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_purposerole
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_dataprivacy_rqst_ctxlst
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_mfa
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_mfa_auth
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_mfa_secrets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_monitor_events
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_monitor_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_monitor_rules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_monitor_subscriptions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_policy
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_policy_acceptances
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_policy_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_recyclebin_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_recyclebin_course
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_usertours_steps
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_tool_usertours_tours
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_upgrade_log
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_url
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_devices
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_enrolments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_info_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_info_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_info_field
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_lastaccess
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_password_history
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_password_resets
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_preferences
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_user_private_key
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_links
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_locks
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_pages
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_subwikis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_synonyms
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_wiki_versions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshop
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshop_aggregations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshop_assessments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshop_grades
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshop_submissions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopallocation_scheduled
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopeval_best_settings
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_accumulative
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_comments
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_numerrors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_numerrors_map
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_rubric
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_rubric_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_workshopform_rubric_levels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mdl_xapi_states
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users CHANGE roles roles JSON NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users RENAME INDEX email_idx TO UNIQ_1483A5E9E7927C74
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, comments LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, site VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, author VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moodleversion VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, moodlerelease VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, iscore TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timeimported BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store presets data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_app (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, userid BIGINT NOT NULL, time BIGINT NOT NULL, INDEX mdl_admiapp_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Applied presets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_app_it (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, configlogid BIGINT NOT NULL, INDEX mdl_admiappit_adm_ix (adminpresetapplyid), INDEX mdl_admiappit_con_ix (configlogid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets applied items. To maintain the relation with c' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_app_it_a (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, configlogid BIGINT NOT NULL, itemname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_admiappita_adm_ix (adminpresetapplyid), INDEX mdl_admiappita_con_ix (configlogid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Attributes of the applied items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_app_plug (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value SMALLINT DEFAULT 0 NOT NULL, oldvalue SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_admiappplug_adm_ix (adminpresetapplyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets plugins applied' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_it (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_admiit_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store settings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_it_a (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_admiita_ite_ix (itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets items attributes. For settings with attributes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_adminpresets_plug (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_admiplug_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets plugins status, to store information about whe' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_indicator_calc (id BIGINT AUTO_INCREMENT NOT NULL, starttime BIGINT NOT NULL, endtime BIGINT NOT NULL, contextid BIGINT NOT NULL, sampleorigin VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sampleid BIGINT NOT NULL, indicator VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value NUMERIC(10, 2) DEFAULT NULL, timecreated BIGINT NOT NULL, INDEX mdl_analindicalc_con_ix (contextid), INDEX mdl_analindicalc_staendcon_ix (starttime, endtime, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stored indicator calculations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_models (id BIGINT AUTO_INCREMENT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, trained TINYINT(1) DEFAULT 0 NOT NULL, name VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, target VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, indicators LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, predictionsprocessor VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, version BIGINT NOT NULL, contextids LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_analmode_enatra_ix (enabled, trained), INDEX mdl_analmode_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analytic models.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_models_log (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, version BIGINT NOT NULL, evaluationmode VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, target VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, indicators LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, score NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, info LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dir LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_analmodelog_mod_ix (modelid), INDEX mdl_analmodelog_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analytic models changes during evaluation.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_predict_samples (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, analysableid BIGINT NOT NULL, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rangeindex BIGINT NOT NULL, sampleids LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_analpredsamp_mod_ix (modelid), INDEX mdl_analpredsamp_modanatimr_ix (modelid, analysableid, timesplitting, rangeindex), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Samples already used for predictions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_prediction_actions (id BIGINT AUTO_INCREMENT NOT NULL, predictionid BIGINT NOT NULL, userid BIGINT NOT NULL, actionname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_analpredacti_pre_ix (predictionid), INDEX mdl_analpredacti_preuseact_ix (predictionid, userid, actionname), INDEX mdl_analpredacti_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Register of user actions over predictions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_predictions (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, contextid BIGINT NOT NULL, sampleid BIGINT NOT NULL, rangeindex INT NOT NULL, prediction NUMERIC(10, 2) NOT NULL, predictionscore NUMERIC(10, 5) NOT NULL, calculations LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timestart BIGINT DEFAULT NULL, timeend BIGINT DEFAULT NULL, INDEX mdl_analpred_con_ix (contextid), INDEX mdl_analpred_mod_ix (modelid), INDEX mdl_analpred_modcon_ix (modelid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Predictions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_train_samples (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, analysableid BIGINT NOT NULL, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sampleids LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_analtraisamp_mod_ix (modelid), INDEX mdl_analtraisamp_modanatim_ix (modelid, analysableid, timesplitting), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Samples used for training' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_used_analysables (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, action VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, analysableid BIGINT NOT NULL, firstanalysis BIGINT NOT NULL, timeanalysed BIGINT NOT NULL, INDEX mdl_analusedanal_ana_ix (analysableid), INDEX mdl_analusedanal_mod_ix (modelid), INDEX mdl_analusedanal_modact_ix (modelid, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of analysables used by each model' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_analytics_used_files (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT DEFAULT 0 NOT NULL, fileid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, time BIGINT DEFAULT 0 NOT NULL, INDEX mdl_analusedfile_fil_ix (fileid), INDEX mdl_analusedfile_mod_ix (modelid), INDEX mdl_analusedfile_modactfil_ix (modelid, action, fileid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Files that have already been used for training and predictio' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, alwaysshowdescription TINYINT(1) DEFAULT 0 NOT NULL, nosubmissions TINYINT(1) DEFAULT 0 NOT NULL, submissiondrafts TINYINT(1) DEFAULT 0 NOT NULL, sendnotifications TINYINT(1) DEFAULT 0 NOT NULL, sendlatenotifications TINYINT(1) DEFAULT 0 NOT NULL, duedate BIGINT DEFAULT 0 NOT NULL, allowsubmissionsfromdate BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, requiresubmissionstatement TINYINT(1) DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, cutoffdate BIGINT DEFAULT 0 NOT NULL, gradingduedate BIGINT DEFAULT 0 NOT NULL, teamsubmission TINYINT(1) DEFAULT 0 NOT NULL, requireallteammemberssubmit TINYINT(1) DEFAULT 0 NOT NULL, teamsubmissiongroupingid BIGINT DEFAULT 0 NOT NULL, blindmarking TINYINT(1) DEFAULT 0 NOT NULL, hidegrader TINYINT(1) DEFAULT 0 NOT NULL, revealidentities TINYINT(1) DEFAULT 0 NOT NULL, attemptreopenmethod VARCHAR(10) CHARACTER SET utf8 DEFAULT 'none' NOT NULL COLLATE `utf8_general_ci`, maxattempts INT DEFAULT -1 NOT NULL, markingworkflow TINYINT(1) DEFAULT 0 NOT NULL, markingallocation TINYINT(1) DEFAULT 0 NOT NULL, markinganonymous TINYINT(1) DEFAULT 0 NOT NULL, sendstudentnotifications TINYINT(1) DEFAULT 1 NOT NULL, preventsubmissionnotingroup TINYINT(1) DEFAULT 0 NOT NULL, activity LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, activityformat SMALLINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, submissionattachments TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_assi_cou_ix (course), INDEX mdl_assi_tea_ix (teamsubmissiongroupingid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table saves information about an instance of mod_assign' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_grades (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, grader BIGINT DEFAULT 0 NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000', attemptnumber BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assigrad_ass_ix (assignment), UNIQUE INDEX mdl_assigrad_assuseatt_uix (assignment, userid, attemptnumber), INDEX mdl_assigrad_att_ix (attemptnumber), INDEX mdl_assigrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading information about a single assignment submission.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_overrides (id BIGINT AUTO_INCREMENT NOT NULL, assignid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, allowsubmissionsfromdate BIGINT DEFAULT NULL, duedate BIGINT DEFAULT NULL, cutoffdate BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, INDEX mdl_assiover_ass_ix (assignid), INDEX mdl_assiover_gro_ix (groupid), INDEX mdl_assiover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to assign settings.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_plugin_config (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, plugin VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subtype VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_assiplugconf_ass_ix (assignment), INDEX mdl_assiplugconf_nam_ix (name), INDEX mdl_assiplugconf_plu_ix (plugin), INDEX mdl_assiplugconf_sub_ix (subtype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Config data for an instance of a plugin in an assignment.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_submission (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, status VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, groupid BIGINT DEFAULT 0 NOT NULL, attemptnumber BIGINT DEFAULT 0 NOT NULL, latest TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_assisubm_ass_ix (assignment), UNIQUE INDEX mdl_assisubm_assusegroatt_uix (assignment, userid, groupid, attemptnumber), INDEX mdl_assisubm_assusegrolat_ix (assignment, userid, groupid, latest), INDEX mdl_assisubm_att_ix (attemptnumber), INDEX mdl_assisubm_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about student interactions with' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_user_flags (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, mailed SMALLINT DEFAULT 0 NOT NULL, extensionduedate BIGINT DEFAULT 0 NOT NULL, workflowstate VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, allocatedmarker BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assiuserflag_ass_ix (assignment), INDEX mdl_assiuserflag_mai_ix (mailed), INDEX mdl_assiuserflag_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of flags that can be set for a single user in a single ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assign_user_mapping (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assiusermapp_ass_ix (assignment), INDEX mdl_assiusermapp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Map an assignment specific id number to a user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_comments (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, commenttext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentformat SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_assicomm_ass_ix (assignment), INDEX mdl_assicomm_gra_ix (grade), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Text feedback for submitted assignments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_editpdf_annot (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, pageno BIGINT DEFAULT 0 NOT NULL, x BIGINT DEFAULT 0, y BIGINT DEFAULT 0, endx BIGINT DEFAULT 0, endy BIGINT DEFAULT 0, path LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, type VARCHAR(10) CHARACTER SET utf8 DEFAULT 'line' COLLATE `utf8_general_ci`, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'black' COLLATE `utf8_general_ci`, draft TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_assieditanno_gra_ix (gradeid), INDEX mdl_assieditanno_grapag_ix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores annotations added to pdfs submitted by students' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_editpdf_cmnt (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, x BIGINT DEFAULT 0, y BIGINT DEFAULT 0, width BIGINT DEFAULT 120, rawtext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pageno BIGINT DEFAULT 0 NOT NULL, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'black' COLLATE `utf8_general_ci`, draft TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_assieditcmnt_gra_ix (gradeid), INDEX mdl_assieditcmnt_grapag_ix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores comments added to pdfs' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_editpdf_quick (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, rawtext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, width BIGINT DEFAULT 120 NOT NULL, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'yellow' COLLATE `utf8_general_ci`, INDEX mdl_assieditquic_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores teacher specified quicklist comments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_editpdf_rot (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, pageno BIGINT DEFAULT 0 NOT NULL, pathnamehash LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, isrotated TINYINT(1) DEFAULT 0 NOT NULL, degree BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assieditrot_gra_ix (gradeid), UNIQUE INDEX mdl_assieditrot_grapag_uix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores rotation information of a page.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignfeedback_file (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, numfiles BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assifile_ass2_ix (assignment), INDEX mdl_assifile_gra_ix (grade), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores info about the number of files submitted by a student' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignsubmission_file (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, submission BIGINT DEFAULT 0 NOT NULL, numfiles BIGINT DEFAULT 0 NOT NULL, INDEX mdl_assifile_ass_ix (assignment), INDEX mdl_assifile_sub_ix (submission), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about file submissions for assignments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_assignsubmission_onlinetext (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, submission BIGINT DEFAULT 0 NOT NULL, onlinetext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, onlineformat SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_assionli_ass_ix (assignment), INDEX mdl_assionli_sub_ix (submission), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about onlinetext submission' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_auth_lti_linked_login (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, issuer LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, issuer256 VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sub VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sub256 VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_authltilinklogi_use_ix (userid), UNIQUE INDEX mdl_authltilinklogi_useiss_uix (userid, issuer256, sub256), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Accounts linked to a users Moodle account.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_auth_oauth2_linked_login (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, username VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, email LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, confirmtoken VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirmtokenexpires BIGINT DEFAULT NULL, INDEX mdl_authoautlinklogi_iss_ix (issuerid), INDEX mdl_authoautlinklogi_issuse_ix (issuerid, username), INDEX mdl_authoautlinklogi_use2_ix (userid), INDEX mdl_authoautlinklogi_use_ix (usermodified), UNIQUE INDEX mdl_authoautlinklogi_useis_uix (userid, issuerid, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Accounts linked to a users Moodle account.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_backup_controllers (id BIGINT AUTO_INCREMENT NOT NULL, backupid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, operation VARCHAR(20) CHARACTER SET utf8 DEFAULT 'backup' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, format VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, interactive SMALLINT NOT NULL, purpose SMALLINT NOT NULL, userid BIGINT NOT NULL, status SMALLINT NOT NULL, execution SMALLINT NOT NULL, executiontime BIGINT NOT NULL, checksum VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, progress NUMERIC(15, 14) DEFAULT '0.00000000000000' NOT NULL, controller LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_backcont_bac_uix (backupid), INDEX mdl_backcont_typite_ix (type, itemid), INDEX mdl_backcont_use_ix (userid), INDEX mdl_backcont_useite_ix (userid, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store the backup_controllers as they are used' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_backup_courses (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, laststarttime BIGINT DEFAULT 0 NOT NULL, lastendtime BIGINT DEFAULT 0 NOT NULL, laststatus VARCHAR(1) CHARACTER SET utf8 DEFAULT '5' NOT NULL COLLATE `utf8_general_ci`, nextstarttime BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_backcour_cou_uix (courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store every course backup status' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_backup_logs (id BIGINT AUTO_INCREMENT NOT NULL, backupid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, loglevel SMALLINT NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_backlogs_bac_ix (backupid), UNIQUE INDEX mdl_backlogs_bacid_uix (backupid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store all the logs from backup and restore operations (by' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuername VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuerurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuercontact VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expiredate BIGINT DEFAULT NULL, expireperiod BIGINT DEFAULT NULL, type TINYINT(1) DEFAULT 1 NOT NULL, courseid BIGINT DEFAULT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messagesubject LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, attachment TINYINT(1) DEFAULT 1 NOT NULL, notification TINYINT(1) DEFAULT 1 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, nextcron BIGINT DEFAULT NULL, version VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, language VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthorname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthoremail VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthorurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imagecaption LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_badg_cou_ix (courseid), INDEX mdl_badg_typ_ix (type), INDEX mdl_badg_use2_ix (usercreated), INDEX mdl_badg_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_alignment (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, targetname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, targeturl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, targetdescription LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetframework VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetcode VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_badgalig_bad_ix (badgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines alignment for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_backpack (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, email VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, backpackuid BIGINT NOT NULL, autosync TINYINT(1) DEFAULT 0 NOT NULL, password VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, externalbackpackid BIGINT DEFAULT NULL, INDEX mdl_badgback_ext_ix (externalbackpackid), INDEX mdl_badgback_use_ix (userid), UNIQUE INDEX mdl_badgback_useext_uix (userid, externalbackpackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines settings for connecting external backpack' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_backpack_oauth2 (id BIGINT AUTO_INCREMENT NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, externalbackpackid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, refreshtoken LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT NULL, scope LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_badgbackoaut_ext_ix (externalbackpackid), INDEX mdl_badgbackoaut_iss_ix (issuerid), INDEX mdl_badgbackoaut_use2_ix (userid), INDEX mdl_badgbackoaut_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_criteria (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT NULL, method TINYINT(1) DEFAULT 1 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_badgcrit_bad_ix (badgeid), UNIQUE INDEX mdl_badgcrit_badcri_uix (badgeid, criteriatype), INDEX mdl_badgcrit_cri_ix (criteriatype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines criteria for issuing badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_criteria_met (id BIGINT AUTO_INCREMENT NOT NULL, issuedid BIGINT DEFAULT NULL, critid BIGINT NOT NULL, userid BIGINT NOT NULL, datemet BIGINT NOT NULL, INDEX mdl_badgcritmet_cri_ix (critid), INDEX mdl_badgcritmet_iss_ix (issuedid), INDEX mdl_badgcritmet_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines criteria that were met for an issued badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_criteria_param (id BIGINT AUTO_INCREMENT NOT NULL, critid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_badgcritpara_cri_ix (critid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines parameters for badges criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_endorsement (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, issuername VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuerurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issueremail VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, claimid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, claimcomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dateissued BIGINT DEFAULT 0 NOT NULL, INDEX mdl_badgendo_bad_ix (badgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines endorsement for badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_external (id BIGINT AUTO_INCREMENT NOT NULL, backpackid BIGINT NOT NULL, collectionid BIGINT NOT NULL, entityid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, assertion LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_badgexte_bac_ix (backpackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting for external badges display' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_external_backpack (id BIGINT AUTO_INCREMENT NOT NULL, backpackapiurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, backpackweburl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, apiversion VARCHAR(12) CHARACTER SET utf8 DEFAULT '1.0' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, oauth2_issuerid BIGINT DEFAULT NULL, UNIQUE INDEX mdl_badgexteback_bac2_uix (backpackweburl), UNIQUE INDEX mdl_badgexteback_bac_uix (backpackapiurl), INDEX mdl_badgexteback_oau_ix (oauth2_issuerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines settings for site level backpacks that a user can co' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_external_identifier (id BIGINT AUTO_INCREMENT NOT NULL, sitebackpackid BIGINT NOT NULL, internalid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, externalid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_badgexteiden_sit_ix (sitebackpackid), UNIQUE INDEX mdl_badgexteiden_sitintext_uix (sitebackpackid, internalid, externalid, type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting for external badges mappings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_issued (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, uniquehash LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, dateissued BIGINT DEFAULT 0 NOT NULL, dateexpire BIGINT DEFAULT NULL, visible TINYINT(1) DEFAULT 0 NOT NULL, issuernotified BIGINT DEFAULT NULL, INDEX mdl_badgissu_bad_ix (badgeid), UNIQUE INDEX mdl_badgissu_baduse_uix (badgeid, userid), INDEX mdl_badgissu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines issued badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_manual_award (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT NOT NULL, recipientid BIGINT NOT NULL, issuerid BIGINT NOT NULL, issuerrole BIGINT NOT NULL, datemet BIGINT NOT NULL, INDEX mdl_badgmanuawar_bad_ix (badgeid), INDEX mdl_badgmanuawar_iss2_ix (issuerrole), INDEX mdl_badgmanuawar_iss_ix (issuerid), INDEX mdl_badgmanuawar_rec_ix (recipientid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Track manual award criteria for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_badge_related (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, relatedbadgeid BIGINT DEFAULT NULL, INDEX mdl_badgrela_bad_ix (badgeid), UNIQUE INDEX mdl_badgrela_badrel_uix (badgeid, relatedbadgeid), INDEX mdl_badgrela_rel_ix (relatedbadgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines badge related for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_bigbluebuttonbn (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 1 NOT NULL, meetingid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, moderatorpass VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, viewerpass VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, wait TINYINT(1) DEFAULT 0 NOT NULL, record TINYINT(1) DEFAULT 0 NOT NULL, recordallfromstart TINYINT(1) DEFAULT 0 NOT NULL, recordhidebutton TINYINT(1) DEFAULT 0 NOT NULL, welcome LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, voicebridge INT DEFAULT 0 NOT NULL, openingtime BIGINT DEFAULT 0 NOT NULL, closingtime BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, presentation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, participants LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userlimit SMALLINT DEFAULT 0 NOT NULL, recordings_html TINYINT(1) DEFAULT 0 NOT NULL, recordings_deleted TINYINT(1) DEFAULT 1 NOT NULL, recordings_imported TINYINT(1) DEFAULT 0 NOT NULL, recordings_preview TINYINT(1) DEFAULT 0 NOT NULL, clienttype TINYINT(1) DEFAULT 0 NOT NULL, muteonstart TINYINT(1) DEFAULT 0 NOT NULL, disablecam TINYINT(1) DEFAULT 0 NOT NULL, disablemic TINYINT(1) DEFAULT 0 NOT NULL, disableprivatechat TINYINT(1) DEFAULT 0 NOT NULL, disablepublicchat TINYINT(1) DEFAULT 0 NOT NULL, disablenote TINYINT(1) DEFAULT 0 NOT NULL, hideuserlist TINYINT(1) DEFAULT 0 NOT NULL, completionattendance INT DEFAULT 0 NOT NULL, completionengagementchats INT DEFAULT 0 NOT NULL, completionengagementtalks INT DEFAULT 0 NOT NULL, completionengagementraisehand INT DEFAULT 0 NOT NULL, completionengagementpollvotes INT DEFAULT 0 NOT NULL, completionengagementemojis INT DEFAULT 0 NOT NULL, guestallowed TINYINT(1) DEFAULT 0, mustapproveuser TINYINT(1) DEFAULT 1, guestlinkuid VARCHAR(1024) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, guestpassword VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store information about a meeti' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_bigbluebuttonbn_logs (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, bigbluebuttonbnid BIGINT NOT NULL, userid BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, meetingid VARCHAR(256) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, log VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, meta LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_bigblogs_cou_ix (courseid), INDEX mdl_bigblogs_coubig_ix (courseid, bigbluebuttonbnid), INDEX mdl_bigblogs_coubiguselog_ix (courseid, bigbluebuttonbnid, userid, log), INDEX mdl_bigblogs_log_ix (log), INDEX mdl_bigblogs_uselog_ix (userid, log), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store meeting activity events' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_bigbluebuttonbn_recordings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, bigbluebuttonbnid BIGINT NOT NULL, groupid BIGINT DEFAULT NULL, recordingid VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, headless TINYINT(1) DEFAULT 0 NOT NULL, imported TINYINT(1) DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, importeddata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_bigbreco_big_ix (bigbluebuttonbnid), INDEX mdl_bigbreco_cou_ix (courseid), INDEX mdl_bigbreco_rec_ix (recordingid), INDEX mdl_bigbreco_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store references to recordings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cron BIGINT DEFAULT 0 NOT NULL, lastcron BIGINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_bloc_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'contains all installed blocks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block_instances (id BIGINT AUTO_INCREMENT NOT NULL, blockname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parentcontextid BIGINT NOT NULL, showinsubcontexts SMALLINT NOT NULL, requiredbytheme SMALLINT DEFAULT 0 NOT NULL, pagetypepattern VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subpagepattern VARCHAR(16) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultregion VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaultweight BIGINT NOT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_blocinst_blo_ix (blockname), INDEX mdl_blocinst_par_ix (parentcontextid), INDEX mdl_blocinst_parshopagsub_ix (parentcontextid, showinsubcontexts, pagetypepattern, subpagepattern), INDEX mdl_blocinst_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores block instances. The type of block this is' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block_positions (id BIGINT AUTO_INCREMENT NOT NULL, blockinstanceid BIGINT NOT NULL, contextid BIGINT NOT NULL, pagetype VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subpage VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible SMALLINT NOT NULL, region VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, weight BIGINT NOT NULL, INDEX mdl_blocposi_blo_ix (blockinstanceid), UNIQUE INDEX mdl_blocposi_bloconpagsub_uix (blockinstanceid, contextid, pagetype, subpage), INDEX mdl_blocposi_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the position of a sticky block_instance on a another ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block_recent_activity (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT NOT NULL, timecreated BIGINT NOT NULL, userid BIGINT NOT NULL, action TINYINT(1) NOT NULL, modname VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_blocreceacti_coutim_ix (courseid, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Recent activity block' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block_recentlyaccesseditems (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT NOT NULL, userid BIGINT NOT NULL, timeaccess BIGINT NOT NULL, INDEX mdl_blocrece_cmi_ix (cmid), INDEX mdl_blocrece_cou_ix (courseid), INDEX mdl_blocrece_use_ix (userid), UNIQUE INDEX mdl_blocrece_usecoucmi_uix (userid, courseid, cmid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Most recently accessed items accessed by a user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_block_rss_client (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, title LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, preferredtitle VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, shared TINYINT(1) DEFAULT 0 NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, skiptime BIGINT DEFAULT 0 NOT NULL, skipuntil BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Remote news feed information. Contains the news feed id, the' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_blog_association (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, blogid BIGINT NOT NULL, INDEX mdl_blogasso_blo_ix (blogid), INDEX mdl_blogasso_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Associations of blog entries with courses and module instanc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_blog_external (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, filtertags VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, failedlastsync TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT NULL, timefetched BIGINT DEFAULT 0 NOT NULL, INDEX mdl_blogexte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'External blog links used for RSS copying of blog entries to ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_book (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, numbering SMALLINT DEFAULT 0 NOT NULL, navstyle SMALLINT DEFAULT 1 NOT NULL, customtitles TINYINT(1) DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_book_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines book' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_book_chapters (id BIGINT AUTO_INCREMENT NOT NULL, bookid BIGINT DEFAULT 0 NOT NULL, pagenum BIGINT DEFAULT 0 NOT NULL, subchapter BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, hidden TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, importsrc VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_bookchap_boo_ix (bookid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines book_chapters' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_cache_filters (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version BIGINT DEFAULT 0 NOT NULL, md5key VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rawtext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_cachfilt_filmd5_ix (filter, md5key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For keeping information about cached data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_cache_flags (id BIGINT AUTO_INCREMENT NOT NULL, flagtype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expiry BIGINT NOT NULL, INDEX mdl_cachflag_fla_ix (flagtype), INDEX mdl_cachflag_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Cache of time-sensitive flags' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_capabilities (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, captype VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextlevel BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, riskbitmask BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_capa_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines all capabilities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_chat (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, keepdays BIGINT DEFAULT 0 NOT NULL, studentlogs SMALLINT DEFAULT 0 NOT NULL, chattime BIGINT DEFAULT 0 NOT NULL, schedule SMALLINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_chat_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each of these is a chat room' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_chat_messages (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, issystem TINYINT(1) DEFAULT 0 NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timestamp BIGINT DEFAULT 0 NOT NULL, INDEX mdl_chatmess_cha_ix (chatid), INDEX mdl_chatmess_gro_ix (groupid), INDEX mdl_chatmess_timcha_ix (timestamp, chatid), INDEX mdl_chatmess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all the actual chat messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_chat_messages_current (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, issystem TINYINT(1) DEFAULT 0 NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timestamp BIGINT DEFAULT 0 NOT NULL, INDEX mdl_chatmesscurr_cha_ix (chatid), INDEX mdl_chatmesscurr_gro_ix (groupid), INDEX mdl_chatmesscurr_timcha_ix (timestamp, chatid), INDEX mdl_chatmesscurr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores current session' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_chat_users (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, version VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstping BIGINT DEFAULT 0 NOT NULL, lastping BIGINT DEFAULT 0 NOT NULL, lastmessageping BIGINT DEFAULT 0 NOT NULL, sid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_chatuser_cha_ix (chatid), INDEX mdl_chatuser_cou_ix (course), INDEX mdl_chatuser_gro_ix (groupid), INDEX mdl_chatuser_las_ix (lastping), INDEX mdl_chatuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of which users are in which chat rooms' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_choice (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, publish TINYINT(1) DEFAULT 0 NOT NULL, showresults TINYINT(1) DEFAULT 0 NOT NULL, display SMALLINT DEFAULT 0 NOT NULL, allowupdate TINYINT(1) DEFAULT 0 NOT NULL, allowmultiple TINYINT(1) DEFAULT 0 NOT NULL, showunanswered TINYINT(1) DEFAULT 0 NOT NULL, includeinactive TINYINT(1) DEFAULT 1 NOT NULL, limitanswers TINYINT(1) DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, showpreview TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, showavailable TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_choi_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Available choices are stored here' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_choice_answers (id BIGINT AUTO_INCREMENT NOT NULL, choiceid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, optionid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_choiansw_cho_ix (choiceid), INDEX mdl_choiansw_opt_ix (optionid), INDEX mdl_choiansw_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'choices performed by users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_choice_options (id BIGINT AUTO_INCREMENT NOT NULL, choiceid BIGINT DEFAULT 0 NOT NULL, text LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, maxanswers BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_choiopti_cho_ix (choiceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'available options to choice' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_cohort (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_coho_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record represents one cohort (aka site-wide group).' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_cohort_members (id BIGINT AUTO_INCREMENT NOT NULL, cohortid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, INDEX mdl_cohomemb_coh_ix (cohortid), UNIQUE INDEX mdl_cohomemb_cohuse_uix (cohortid, userid), INDEX mdl_cohomemb_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a user to a cohort.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_comments (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentarea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format TINYINT(1) DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_comm_concomite_ix (contextid, commentarea, itemid), INDEX mdl_comm_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle comments module' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_communication (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, instanceid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, instancetype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, provider VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, roomname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, avatarfilename VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, active TINYINT(1) DEFAULT 1 NOT NULL, avatarsynced TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_comm_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Communication records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_communication_customlink (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_commcust_com_ix (commid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the link associated with a custom link communication ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_communication_user (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, userid BIGINT NOT NULL, synced TINYINT(1) DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_commuser_com_ix (commid), INDEX mdl_commuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Communication user records mapping' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, competencyframeworkid BIGINT NOT NULL, parentid BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT NOT NULL, ruletype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ruleoutcome TINYINT(1) DEFAULT 0 NOT NULL, ruleconfig LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, scaleconfiguration LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_comp_comidn_uix (competencyframeworkid, idnumber), INDEX mdl_comp_rul_ix (ruleoutcome), INDEX mdl_comp_sca_ix (scaleid), INDEX mdl_comp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains the master record of each competency in ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_coursecomp (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, competencyid BIGINT NOT NULL, ruleoutcome TINYINT(1) NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT NOT NULL, INDEX mdl_compcour_com_ix (competencyid), INDEX mdl_compcour_cou2_ix (courseid), UNIQUE INDEX mdl_compcour_coucom_uix (courseid, competencyid), INDEX mdl_compcour_courul_ix (courseid, ruleoutcome), INDEX mdl_compcour_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a course.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_coursecompsetting (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, pushratingstouserplans TINYINT(1) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_compcour_cou_uix (courseid), INDEX mdl_compcour_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains the course specific settings for compete' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_evidence (id BIGINT AUTO_INCREMENT NOT NULL, usercompetencyid BIGINT NOT NULL, contextid BIGINT NOT NULL, action TINYINT(1) NOT NULL, actionuserid BIGINT DEFAULT NULL, descidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, desccomponent VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, desca LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, url VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, grade BIGINT DEFAULT NULL, note LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compevid_act_ix (actionuserid), INDEX mdl_compevid_con_ix (contextid), INDEX mdl_compevid_use2_ix (usermodified), INDEX mdl_compevid_use_ix (usercompetencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The evidence linked to a user competency' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_framework (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, scaleid BIGINT DEFAULT NULL, scaleconfiguration LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, taxonomies VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_compfram_con_ix (contextid), UNIQUE INDEX mdl_compfram_idn_uix (idnumber), INDEX mdl_compfram_sca_ix (scaleid), INDEX mdl_compfram_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of competency frameworks.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_modulecomp (id BIGINT AUTO_INCREMENT NOT NULL, cmid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT NOT NULL, competencyid BIGINT NOT NULL, ruleoutcome TINYINT(1) NOT NULL, overridegrade TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_compmodu_cmi_ix (cmid), UNIQUE INDEX mdl_compmodu_cmicom_uix (cmid, competencyid), INDEX mdl_compmodu_cmirul_ix (cmid, ruleoutcome), INDEX mdl_compmodu_com_ix (competencyid), INDEX mdl_compmodu_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a module.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_plan (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, templateid BIGINT DEFAULT NULL, origtemplateid BIGINT DEFAULT NULL, status TINYINT(1) NOT NULL, duedate BIGINT DEFAULT 0, reviewerid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compplan_stadue_ix (status, duedate), INDEX mdl_compplan_tem_ix (templateid), INDEX mdl_compplan_use_ix (usermodified), INDEX mdl_compplan_usesta_ix (userid, status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Learning plans' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_plancomp (id BIGINT AUTO_INCREMENT NOT NULL, planid BIGINT NOT NULL, competencyid BIGINT NOT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, UNIQUE INDEX mdl_compplan_placom_uix (planid, competencyid), INDEX mdl_compplan_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Plan competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_relatedcomp (id BIGINT AUTO_INCREMENT NOT NULL, competencyid BIGINT NOT NULL, relatedcompetencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_comprela_com_ix (competencyid), INDEX mdl_comprela_rel_ix (relatedcompetencyid), INDEX mdl_comprela_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Related competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_template (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, duedate BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_comptemp_con_ix (contextid), INDEX mdl_comptemp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Learning plan templates.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_templatecohort (id BIGINT AUTO_INCREMENT NOT NULL, templateid BIGINT NOT NULL, cohortid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_comptemp_tem2_ix (templateid), UNIQUE INDEX mdl_comptemp_temcoh_uix (templateid, cohortid), INDEX mdl_comptemp_use3_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_templatecomp (id BIGINT AUTO_INCREMENT NOT NULL, templateid BIGINT NOT NULL, competencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT DEFAULT NULL, INDEX mdl_comptemp_com_ix (competencyid), INDEX mdl_comptemp_tem_ix (templateid), INDEX mdl_comptemp_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a learning plan template.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_usercomp (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, competencyid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, reviewerid BIGINT DEFAULT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compuser_use_ix (usermodified), UNIQUE INDEX mdl_compuser_usecom_uix (userid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_usercompcourse (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, competencyid BIGINT NOT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compuser_use2_ix (usermodified), UNIQUE INDEX mdl_compuser_usecoucom_uix (userid, courseid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies in a course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_usercompplan (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, competencyid BIGINT NOT NULL, planid BIGINT NOT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compuser_use3_ix (usermodified), UNIQUE INDEX mdl_compuser_usecompla_uix (userid, competencyid, planid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies plans' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_userevidence (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compuser_use4_ix (userid), INDEX mdl_compuser_use5_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The evidence of prior learning' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_competency_userevidencecomp (id BIGINT AUTO_INCREMENT NOT NULL, userevidenceid BIGINT NOT NULL, competencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_compuser_use6_ix (userevidenceid), INDEX mdl_compuser_use7_ix (usermodified), UNIQUE INDEX mdl_compuser_usecom2_uix (userevidenceid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Relationship between user evidence and competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_config (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_conf_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Moodle configuration variables' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_config_log (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, timemodified BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, oldvalue LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_conflog_tim_ix (timemodified), INDEX mdl_conflog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Changes done in server configuration through admin UI' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_config_plugins (id BIGINT AUTO_INCREMENT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT 'core' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_confplug_plunam_uix (plugin, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Moodle modules and plugins configuration variables' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_contentbank_content (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contenttype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, visibility TINYINT(1) DEFAULT 1 NOT NULL, instanceid BIGINT DEFAULT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, usercreated BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0, INDEX mdl_contcont_con_ix (contextid), INDEX mdl_contcont_conconins_ix (contextid, contenttype, instanceid), INDEX mdl_contcont_nam_ix (name), INDEX mdl_contcont_use2_ix (usercreated), INDEX mdl_contcont_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores content data in the content bank.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_context (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel BIGINT DEFAULT 0 NOT NULL, instanceid BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, depth TINYINT(1) DEFAULT 0 NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_cont_conins_uix (contextlevel, instanceid), INDEX mdl_cont_ins_ix (instanceid), INDEX mdl_cont_pat_ix (path), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'one of these must be set' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_context_temp (id BIGINT NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, depth TINYINT(1) NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Used by build_context_path() in upgrade and cron to keep con' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course (id BIGINT AUTO_INCREMENT NOT NULL, category BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, format VARCHAR(21) CHARACTER SET utf8 DEFAULT 'topics' NOT NULL COLLATE `utf8_general_ci`, showgrades TINYINT(1) DEFAULT 1 NOT NULL, newsitems INT DEFAULT 1 NOT NULL, startdate BIGINT DEFAULT 0 NOT NULL, enddate BIGINT DEFAULT 0 NOT NULL, relativedatesmode TINYINT(1) DEFAULT 0 NOT NULL, marker BIGINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, showreports SMALLINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, downloadcontent TINYINT(1) DEFAULT NULL, groupmode SMALLINT DEFAULT 0 NOT NULL, groupmodeforce SMALLINT DEFAULT 0 NOT NULL, defaultgroupingid BIGINT DEFAULT 0 NOT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, calendartype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, requested TINYINT(1) DEFAULT 0 NOT NULL, enablecompletion TINYINT(1) DEFAULT 0 NOT NULL, completionnotify TINYINT(1) DEFAULT 0 NOT NULL, cacherev BIGINT DEFAULT 0 NOT NULL, originalcourseid BIGINT DEFAULT NULL, showactivitydates TINYINT(1) DEFAULT 0 NOT NULL, showcompletionconditions TINYINT(1) DEFAULT NULL, pdfexportfont VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_cour_cat_ix (category), INDEX mdl_cour_idn_ix (idnumber), INDEX mdl_cour_ori_ix (originalcourseid), INDEX mdl_cour_sho_ix (shortname), INDEX mdl_cour_sor_ix (sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Central course table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_categories (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, coursecount BIGINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_courcate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_completion_aggr_methd (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT NULL, method TINYINT(1) DEFAULT 0 NOT NULL, value NUMERIC(10, 5) DEFAULT NULL, INDEX mdl_courcompaggrmeth_cou_ix (course), UNIQUE INDEX mdl_courcompaggrmeth_coucr_uix (course, criteriatype), INDEX mdl_courcompaggrmeth_cri_ix (criteriatype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion aggregation methods for criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_completion_crit_compl (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriaid BIGINT DEFAULT 0 NOT NULL, gradefinal NUMERIC(10, 5) DEFAULT NULL, unenroled BIGINT DEFAULT NULL, timecompleted BIGINT DEFAULT NULL, INDEX mdl_courcompcritcomp_cou_ix (course), INDEX mdl_courcompcritcomp_cri_ix (criteriaid), INDEX mdl_courcompcritcomp_tim_ix (timecompleted), INDEX mdl_courcompcritcomp_use_ix (userid), UNIQUE INDEX mdl_courcompcritcomp_useco_uix (userid, course, criteriaid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion user records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_completion_criteria (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT 0 NOT NULL, module VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moduleinstance BIGINT DEFAULT NULL, courseinstance BIGINT DEFAULT NULL, enrolperiod BIGINT DEFAULT NULL, timeend BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT NULL, role BIGINT DEFAULT NULL, INDEX mdl_courcompcrit_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_completion_defaults (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, module BIGINT NOT NULL, completion TINYINT(1) DEFAULT 0 NOT NULL, completionview TINYINT(1) DEFAULT 0 NOT NULL, completionusegrade TINYINT(1) DEFAULT 0 NOT NULL, completionpassgrade TINYINT(1) DEFAULT 0 NOT NULL, completionexpected BIGINT DEFAULT 0 NOT NULL, customrules LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_courcompdefa_cou_ix (course), UNIQUE INDEX mdl_courcompdefa_coumod_uix (course, module), INDEX mdl_courcompdefa_mod_ix (module), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default settings for activities completion' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_completions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, timeenrolled BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT 0 NOT NULL, timecompleted BIGINT DEFAULT NULL, reaggregate BIGINT DEFAULT 0 NOT NULL, INDEX mdl_courcomp_cou_ix (course), INDEX mdl_courcomp_tim_ix (timecompleted), INDEX mdl_courcomp_use_ix (userid), UNIQUE INDEX mdl_courcomp_usecou_uix (userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_format_options (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, format VARCHAR(21) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sectionid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_courformopti_cou_ix (courseid), UNIQUE INDEX mdl_courformopti_couforsec_uix (courseid, format, sectionid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores format-specific options for the course or course sect' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_modules (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, module BIGINT DEFAULT 0 NOT NULL, instance BIGINT DEFAULT 0 NOT NULL, section BIGINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, added BIGINT DEFAULT 0 NOT NULL, score SMALLINT DEFAULT 0 NOT NULL, indent INT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleoncoursepage TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, groupmode SMALLINT DEFAULT 0 NOT NULL, groupingid BIGINT DEFAULT 0 NOT NULL, completion TINYINT(1) DEFAULT 0 NOT NULL, completiongradeitemnumber BIGINT DEFAULT NULL, completionview TINYINT(1) DEFAULT 0 NOT NULL, completionexpected BIGINT DEFAULT 0 NOT NULL, completionpassgrade TINYINT(1) DEFAULT 0 NOT NULL, showdescription TINYINT(1) DEFAULT 0 NOT NULL, availability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, deletioninprogress TINYINT(1) DEFAULT 0 NOT NULL, downloadcontent TINYINT(1) DEFAULT 1, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_courmodu_cou_ix (course), INDEX mdl_courmodu_gro_ix (groupingid), INDEX mdl_courmodu_idncou_ix (idnumber, course), INDEX mdl_courmodu_ins_ix (instance), INDEX mdl_courmodu_mod_ix (module), INDEX mdl_courmodu_vis_ix (visible), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'course_modules table retrofitted from MySQL' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_modules_completion (id BIGINT AUTO_INCREMENT NOT NULL, coursemoduleid BIGINT NOT NULL, userid BIGINT NOT NULL, completionstate TINYINT(1) NOT NULL, overrideby BIGINT DEFAULT NULL, timemodified BIGINT NOT NULL, INDEX mdl_courmoducomp_cou_ix (coursemoduleid), UNIQUE INDEX mdl_courmoducomp_usecou_uix (userid, coursemoduleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the completion state (completed or not completed, etc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_modules_viewed (id BIGINT AUTO_INCREMENT NOT NULL, coursemoduleid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_courmoduview_cou_ix (coursemoduleid), UNIQUE INDEX mdl_courmoduview_usecou_uix (userid, coursemoduleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks the completion viewed (viewed with cmid/userid and ot' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_published (id BIGINT AUTO_INCREMENT NOT NULL, huburl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, courseid BIGINT NOT NULL, timepublished BIGINT NOT NULL, enrollable TINYINT(1) DEFAULT 1 NOT NULL, hubcourseid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0, timechecked BIGINT DEFAULT NULL, INDEX mdl_courpubl_cou_ix (courseid), INDEX mdl_courpubl_hub_ix (hubcourseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about how and when an local courses were publish' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_request (id BIGINT AUTO_INCREMENT NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, category BIGINT DEFAULT 0 NOT NULL, reason LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, requester BIGINT DEFAULT 0 NOT NULL, password VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_courrequ_sho_ix (shortname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'course requests' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_course_sections (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, section BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, sequence LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, availability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_coursect_cousec_uix (course, section), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'to define the sections for each course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_customfield_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(400) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, area VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT NULL, INDEX mdl_custcate_comareitesor_ix (component, area, itemid, sortorder), INDEX mdl_custcate_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield category table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_customfield_data (id BIGINT AUTO_INCREMENT NOT NULL, fieldid BIGINT NOT NULL, instanceid BIGINT NOT NULL, intvalue BIGINT DEFAULT NULL, decvalue NUMERIC(10, 5) DEFAULT NULL, shortcharvalue VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, charvalue VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, valueformat BIGINT NOT NULL, valuetrust TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, INDEX mdl_custdata_con_ix (contextid), INDEX mdl_custdata_fie_ix (fieldid), INDEX mdl_custdata_fiedec_ix (fieldid, decvalue), INDEX mdl_custdata_fieint_ix (fieldid, intvalue), INDEX mdl_custdata_fiesho_ix (fieldid, shortcharvalue), UNIQUE INDEX mdl_custdata_insfie_uix (instanceid, fieldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield data table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_customfield_field (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(400) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_custfiel_cat_ix (categoryid), INDEX mdl_custfiel_catsor_ix (categoryid, sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield field table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_data (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, comments SMALLINT DEFAULT 0 NOT NULL, timeavailablefrom BIGINT DEFAULT 0 NOT NULL, timeavailableto BIGINT DEFAULT 0 NOT NULL, timeviewfrom BIGINT DEFAULT 0 NOT NULL, timeviewto BIGINT DEFAULT 0 NOT NULL, requiredentries INT DEFAULT 0 NOT NULL, requiredentriestoview INT DEFAULT 0 NOT NULL, maxentries INT DEFAULT 0 NOT NULL, rssarticles SMALLINT DEFAULT 0 NOT NULL, singletemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplateheader LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplatefooter LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, addtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rsstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rsstitletemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, csstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, jstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, asearchtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, approval SMALLINT DEFAULT 0 NOT NULL, manageapproved SMALLINT DEFAULT 1 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, defaultsort BIGINT DEFAULT 0 NOT NULL, defaultsortdir SMALLINT DEFAULT 0 NOT NULL, editany SMALLINT DEFAULT 0 NOT NULL, notification BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, config LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, completionentries BIGINT DEFAULT 0, INDEX mdl_data_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all database activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_data_content (id BIGINT AUTO_INCREMENT NOT NULL, fieldid BIGINT DEFAULT 0 NOT NULL, recordid BIGINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_datacont_fie_ix (fieldid), INDEX mdl_datacont_rec_ix (recordid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the content introduced in each record/fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_data_fields (id BIGINT AUTO_INCREMENT NOT NULL, dataid BIGINT DEFAULT 0 NOT NULL, type VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, required TINYINT(1) DEFAULT 0 NOT NULL, param1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param5 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param6 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param7 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param8 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param9 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param10 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_datafiel_dat_ix (dataid), INDEX mdl_datafiel_typdat_ix (type, dataid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'every field available' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_data_records (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, dataid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, approved SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_datareco_dat_ix (dataid), INDEX mdl_datareco_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'every record introduced' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_editor_atto_autosave (id BIGINT AUTO_INCREMENT NOT NULL, elementid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, pagehash VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, drafttext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, draftid BIGINT DEFAULT NULL, pageinstance VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_editattoauto_eleconuse_uix (elementid, contextid, userid, pagehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Draft text that is auto-saved every 5 seconds while an edito' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol (id BIGINT AUTO_INCREMENT NOT NULL, enrol VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, courseid BIGINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enrolperiod BIGINT DEFAULT 0, enrolstartdate BIGINT DEFAULT 0, enrolenddate BIGINT DEFAULT 0, expirynotify TINYINT(1) DEFAULT 0, expirythreshold BIGINT DEFAULT 0, notifyall TINYINT(1) DEFAULT 0, password VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, cost VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, currency VARCHAR(3) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, roleid BIGINT DEFAULT 0, customint1 BIGINT DEFAULT NULL, customint2 BIGINT DEFAULT NULL, customint3 BIGINT DEFAULT NULL, customint4 BIGINT DEFAULT NULL, customint5 BIGINT DEFAULT NULL, customint6 BIGINT DEFAULT NULL, customint7 BIGINT DEFAULT NULL, customint8 BIGINT DEFAULT NULL, customchar1 VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customchar2 VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customchar3 VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customdec1 NUMERIC(12, 7) DEFAULT NULL, customdec2 NUMERIC(12, 7) DEFAULT NULL, customtext1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_enro_cou_ix (courseid), INDEX mdl_enro_enr_ix (enrol), INDEX mdl_enro_rol_ix (roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Instances of enrolment plugins used in courses, fields marke' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_flatfile (id BIGINT AUTO_INCREMENT NOT NULL, action VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, roleid BIGINT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_enroflat_cou_ix (courseid), INDEX mdl_enroflat_rol_ix (roleid), INDEX mdl_enroflat_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'enrol_flatfile table retrofitted from MySQL' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_app_registration (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, clientid VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uniqueid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformclienthash VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, platformuniqueidhash VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, authenticationrequesturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, jwksurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, accesstokenurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_enroltiappregi_pla2_uix (platformuniqueidhash), UNIQUE INDEX mdl_enroltiappregi_pla_uix (platformclienthash), UNIQUE INDEX mdl_enroltiappregi_uni_uix (uniqueid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Details of each application that has been registered with th' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_context (id BIGINT AUTO_INCREMENT NOT NULL, contextid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT NOT NULL, type LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_enrolticont_lti_ix (ltideploymentid), UNIQUE INDEX mdl_enrolticont_lticon_uix (ltideploymentid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a context in the platform, where resourc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_deployment (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, deploymentid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformid BIGINT NOT NULL, legacyconsumerkey VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_enroltidepl_pla_ix (platformid), UNIQUE INDEX mdl_enroltidepl_pladep_uix (platformid, deploymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a deployment of a tool within a platform' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_consumer (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerkey256 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerkey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1024) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumername VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumerversion VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumerguid VARCHAR(1024) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, profile LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, toolproxy LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) NOT NULL, enabled TINYINT(1) NOT NULL, enablefrom BIGINT DEFAULT NULL, enableuntil BIGINT DEFAULT NULL, lastaccess BIGINT DEFAULT NULL, created BIGINT NOT NULL, updated BIGINT NOT NULL, UNIQUE INDEX mdl_enroltilti2cons_con_uix (consumerkey256), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI consumers interacting with moodle' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_context (id BIGINT AUTO_INCREMENT NOT NULL, consumerid BIGINT NOT NULL, lticontextkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_enroltilti2cont_con_ix (consumerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about a specific LTI contexts from the consumers' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_nonce (id BIGINT AUTO_INCREMENT NOT NULL, consumerid BIGINT NOT NULL, value VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT NOT NULL, INDEX mdl_enroltilti2nonc_con_ix (consumerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Nonce used for authentication between moodle and a consumer' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT DEFAULT NULL, consumerid BIGINT DEFAULT NULL, ltiresourcelinkkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, primaryresourcelinkid BIGINT DEFAULT NULL, shareapproved TINYINT(1) DEFAULT NULL, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_enroltilti2resolink_co2_ix (consumerid), INDEX mdl_enroltilti2resolink_con_ix (contextid), INDEX mdl_enroltilti2resolink_pri_ix (primaryresourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link from the consumer to the tool' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_share_key (id BIGINT AUTO_INCREMENT NOT NULL, sharekey VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, resourcelinkid BIGINT NOT NULL, autoapprove TINYINT(1) NOT NULL, expires BIGINT NOT NULL, UNIQUE INDEX mdl_enroltilti2sharkey_res_uix (resourcelinkid), UNIQUE INDEX mdl_enroltilti2sharkey_sha_uix (sharekey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Resource link share key' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_tool_proxy (id BIGINT AUTO_INCREMENT NOT NULL, toolproxykey VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerid BIGINT NOT NULL, toolproxy LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_enroltilti2toolprox_con_ix (consumerid), UNIQUE INDEX mdl_enroltilti2toolprox_to_uix (toolproxykey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A tool proxy between moodle and a consumer' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_lti2_user_result (id BIGINT AUTO_INCREMENT NOT NULL, resourcelinkid BIGINT NOT NULL, ltiuserkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltiresultsourcedid VARCHAR(1024) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_enroltilti2userresu_res_ix (resourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Results for each user for each resource link' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, resourcelinkid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT NOT NULL, resourceid BIGINT NOT NULL, lticontextid BIGINT DEFAULT NULL, lineitemsservice VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lineitemservice VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lineitemscope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultscope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scorescope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextmembershipsurl VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, nrpsserviceversions VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_enroltiresolink_lti2_ix (lticontextid), INDEX mdl_enroltiresolink_lti_ix (ltideploymentid), UNIQUE INDEX mdl_enroltiresolink_reslti_uix (resourcelinkid, ltideploymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a resource link for a platform and deplo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_tool_consumer_map (id BIGINT AUTO_INCREMENT NOT NULL, toolid BIGINT NOT NULL, consumerid BIGINT NOT NULL, INDEX mdl_enroltitoolconsmap_con_ix (consumerid), INDEX mdl_enroltitoolconsmap_too_ix (toolid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table that maps the published tool to tool consumers.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_tools (id BIGINT AUTO_INCREMENT NOT NULL, enrolid BIGINT NOT NULL, contextid BIGINT NOT NULL, ltiversion VARCHAR(15) CHARACTER SET utf8 DEFAULT 'LTI-1p3' NOT NULL COLLATE `utf8_general_ci`, institution VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT 'en' NOT NULL COLLATE `utf8_general_ci`, timezone VARCHAR(100) CHARACTER SET utf8 DEFAULT '99' NOT NULL COLLATE `utf8_general_ci`, maxenrolled BIGINT DEFAULT 0 NOT NULL, maildisplay TINYINT(1) DEFAULT 2 NOT NULL, city VARCHAR(120) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, country VARCHAR(2) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, gradesync TINYINT(1) DEFAULT 0 NOT NULL, gradesynccompletion TINYINT(1) DEFAULT 0 NOT NULL, membersync TINYINT(1) DEFAULT 0 NOT NULL, membersyncmode TINYINT(1) DEFAULT 0 NOT NULL, roleinstructor BIGINT NOT NULL, rolelearner BIGINT NOT NULL, secret LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uuid VARCHAR(36) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, provisioningmodelearner TINYINT(1) DEFAULT NULL, provisioningmodeinstructor TINYINT(1) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_enroltitool_con_ix (contextid), INDEX mdl_enroltitool_enr_ix (enrolid), UNIQUE INDEX mdl_enroltitool_uui_uix (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of tools provided to the remote system' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_user_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, ltiuserid BIGINT NOT NULL, resourcelinkid BIGINT NOT NULL, UNIQUE INDEX mdl_enroltiuserresolink_lt_uix (ltiuserid, resourcelinkid), INDEX mdl_enroltiuserresolink_lti_ix (ltiuserid), INDEX mdl_enroltiuserresolink_res_ix (resourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Join table mapping users to resource links as this is a many' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_lti_users (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, toolid BIGINT NOT NULL, serviceurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sourceid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT DEFAULT NULL, consumerkey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumersecret LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, membershipsurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, membershipsid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastgrade NUMERIC(10, 5) DEFAULT NULL, lastaccess BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_enroltiuser_lti_ix (ltideploymentid), INDEX mdl_enroltiuser_too_ix (toolid), INDEX mdl_enroltiuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User access log and gradeback data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_enrol_paypal (id BIGINT AUTO_INCREMENT NOT NULL, business VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, receiver_email VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, receiver_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, item_name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, instanceid BIGINT DEFAULT 0 NOT NULL, memo VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, tax VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_name1 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_selection1_x VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_name2 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_selection2_x VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, payment_status VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pending_reason VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, reason_code VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, txn_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent_txn_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, payment_type VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timeupdated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_enropayp_bus_ix (business), INDEX mdl_enropayp_cou_ix (courseid), INDEX mdl_enropayp_ins_ix (instanceid), INDEX mdl_enropayp_rec_ix (receiver_email), INDEX mdl_enropayp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Holds all known information about PayPal transactions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_event (id BIGINT AUTO_INCREMENT NOT NULL, name LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format SMALLINT DEFAULT 0 NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, repeatid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, modulename VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, instance BIGINT DEFAULT 0 NOT NULL, type SMALLINT DEFAULT 0 NOT NULL, eventtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timestart BIGINT DEFAULT 0 NOT NULL, timeduration BIGINT DEFAULT 0 NOT NULL, timesort BIGINT DEFAULT NULL, visible SMALLINT DEFAULT 1 NOT NULL, uuid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sequence BIGINT DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, subscriptionid BIGINT DEFAULT NULL, priority BIGINT DEFAULT NULL, location LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_even_cat_ix (categoryid), INDEX mdl_even_comeveins_ix (component, eventtype, instance), INDEX mdl_even_cou_ix (courseid), INDEX mdl_even_eve_ix (eventtype), INDEX mdl_even_grocoucatvisuse_ix (groupid, courseid, categoryid, visible, userid), INDEX mdl_even_modinseve_ix (modulename, instance, eventtype), INDEX mdl_even_sub_ix (subscriptionid), INDEX mdl_even_tim2_ix (timeduration), INDEX mdl_even_tim_ix (timestart), INDEX mdl_even_typtim_ix (type, timesort), INDEX mdl_even_use_ix (userid), INDEX mdl_even_uui_ix (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For everything with a time associated to it' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_event_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, categoryid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, eventtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pollinterval BIGINT DEFAULT 0 NOT NULL, lastupdated BIGINT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_evensubs_cou_ix (courseid), INDEX mdl_evensubs_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks subscriptions to remote calendars.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_events_handlers (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, handlerfile VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, handlerfunction LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, schedule VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, internal TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_evenhand_evecom_uix (eventname, component), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table is for storing which components requests what typ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_events_queue (id BIGINT AUTO_INCREMENT NOT NULL, eventdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, stackdump LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, INDEX mdl_evenqueu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table is for storing queued events. It stores only one ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_events_queue_handlers (id BIGINT AUTO_INCREMENT NOT NULL, queuedeventid BIGINT NOT NULL, handlerid BIGINT NOT NULL, status BIGINT DEFAULT NULL, errormessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, INDEX mdl_evenqueuhand_han_ix (handlerid), INDEX mdl_evenqueuhand_que_ix (queuedeventid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This is the list of queued handlers for processing. The even' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_external_functions (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, methodname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classpath VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, capabilities VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, services VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_extefunc_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'list of all external functions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_external_services (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, requiredcapability VARCHAR(150) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, restrictedusers TINYINT(1) NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, downloadfiles TINYINT(1) DEFAULT 0 NOT NULL, uploadfiles TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_exteserv_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'built in and custom external services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_external_services_functions (id BIGINT AUTO_INCREMENT NOT NULL, externalserviceid BIGINT NOT NULL, functionname VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_exteservfunc_ext_ix (externalserviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'lists functions available in each service group' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_external_services_users (id BIGINT AUTO_INCREMENT NOT NULL, externalserviceid BIGINT NOT NULL, userid BIGINT NOT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_exteservuser_ext_ix (externalserviceid), INDEX mdl_exteservuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'users allowed to use services with restricted users flag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_external_tokens (id BIGINT AUTO_INCREMENT NOT NULL, token VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, privatetoken VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tokentype SMALLINT NOT NULL, userid BIGINT NOT NULL, externalserviceid BIGINT NOT NULL, sid VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, creatorid BIGINT DEFAULT 1 NOT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, lastaccess BIGINT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_extetoke_con_ix (contextid), INDEX mdl_extetoke_cre_ix (creatorid), INDEX mdl_extetoke_ext_ix (externalserviceid), INDEX mdl_extetoke_sid_ix (sid), INDEX mdl_extetoke_tok_ix (token), INDEX mdl_extetoke_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Security tokens for accessing of external services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_favourite (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, contextid BIGINT NOT NULL, userid BIGINT NOT NULL, ordering BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_favo_comiteiteconuse_uix (component, itemtype, itemid, contextid, userid), INDEX mdl_favo_con_ix (contextid), INDEX mdl_favo_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the relationship between an arbitrary item (itemtype,' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, anonymous TINYINT(1) DEFAULT 1 NOT NULL, email_notification TINYINT(1) DEFAULT 1 NOT NULL, multiple_submit TINYINT(1) DEFAULT 1 NOT NULL, autonumbering TINYINT(1) DEFAULT 1 NOT NULL, site_after_submit VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, page_after_submit LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, page_after_submitformat TINYINT(1) DEFAULT 0 NOT NULL, publish_stats TINYINT(1) DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_feed_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all feedbacks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_completed (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, random_response BIGINT DEFAULT 0 NOT NULL, anonymous_response TINYINT(1) DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_feedcomp_cou_ix (courseid), INDEX mdl_feedcomp_fee_ix (feedback), INDEX mdl_feedcomp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'filled out feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_completedtmp (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, guestid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, random_response BIGINT DEFAULT 0 NOT NULL, anonymous_response TINYINT(1) DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_feedcomp_fee2_ix (feedback), INDEX mdl_feedcomp_use2_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'filled out feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_item (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, template BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, label VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, presentation LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, typ VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hasvalue TINYINT(1) DEFAULT 0 NOT NULL, position SMALLINT DEFAULT 0 NOT NULL, required TINYINT(1) DEFAULT 0 NOT NULL, dependitem BIGINT DEFAULT 0 NOT NULL, dependvalue VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_feeditem_fee_ix (feedback), INDEX mdl_feeditem_tem_ix (template), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'feedback_items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_sitecourse_map (id BIGINT AUTO_INCREMENT NOT NULL, feedbackid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_feedsitemap_cou_ix (courseid), INDEX mdl_feedsitemap_fee_ix (feedbackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'feedback sitecourse map' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_template (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, ispublic TINYINT(1) DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_feedtemp_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'templates of feedbackstructures' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_value (id BIGINT AUTO_INCREMENT NOT NULL, course_id BIGINT DEFAULT 0 NOT NULL, item BIGINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, tmp_completed BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_feedvalu_comitecou_uix (completed, item, course_id), INDEX mdl_feedvalu_cou_ix (course_id), INDEX mdl_feedvalu_ite_ix (item), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'values of the completeds' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_feedback_valuetmp (id BIGINT AUTO_INCREMENT NOT NULL, course_id BIGINT DEFAULT 0 NOT NULL, item BIGINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, tmp_completed BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_feedvalu_comitecou2_uix (completed, item, course_id), INDEX mdl_feedvalu_cou2_ix (course_id), INDEX mdl_feedvalu_ite2_ix (item), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'values of the completedstmp' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_file_conversion (id BIGINT AUTO_INCREMENT NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, sourcefileid BIGINT NOT NULL, targetformat VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0, statusmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, converter VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, destfileid BIGINT DEFAULT NULL, data LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_fileconv_des_ix (destfileid), INDEX mdl_fileconv_sou_ix (sourcefileid), INDEX mdl_fileconv_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to track file conversions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_files (id BIGINT AUTO_INCREMENT NOT NULL, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pathnamehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filearea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, filepath VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, filesize BIGINT NOT NULL, mimetype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, source LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, author VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, license VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, referencefileid BIGINT DEFAULT NULL, INDEX mdl_file_comfilconite_ix (component, filearea, contextid, itemid), INDEX mdl_file_con2_ix (contextid), INDEX mdl_file_con_ix (contenthash), INDEX mdl_file_fil_ix (filename), INDEX mdl_file_lic_ix (license), UNIQUE INDEX mdl_file_pat_uix (pathnamehash), INDEX mdl_file_ref_ix (referencefileid), INDEX mdl_file_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'description of files, content is stored in sha1 file pool' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_files_reference (id BIGINT AUTO_INCREMENT NOT NULL, repositoryid BIGINT NOT NULL, lastsync BIGINT DEFAULT NULL, reference LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, referencehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_filerefe_refrep_uix (referencehash, repositoryid), INDEX mdl_filerefe_rep_ix (repositoryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store files references' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_filter_active (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, active SMALLINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_filtacti_con_ix (contextid), UNIQUE INDEX mdl_filtacti_confil_uix (contextid, filter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about which filters are active in which c' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_filter_config (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_filtconf_con_ix (contextid), UNIQUE INDEX mdl_filtconf_confilnam_uix (contextid, filter, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores per-context configuration settings for filters which ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_folder (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, display SMALLINT DEFAULT 0 NOT NULL, showexpanded TINYINT(1) DEFAULT 1 NOT NULL, showdownloadfolder TINYINT(1) DEFAULT 1 NOT NULL, forcedownload TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_fold_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one folder resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, type VARCHAR(20) CHARACTER SET utf8 DEFAULT 'general' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, duedate BIGINT DEFAULT 0 NOT NULL, cutoffdate BIGINT DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, grade_forum BIGINT DEFAULT 0 NOT NULL, grade_forum_notify SMALLINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, maxattachments BIGINT DEFAULT 1 NOT NULL, forcesubscribe TINYINT(1) DEFAULT 0 NOT NULL, trackingtype TINYINT(1) DEFAULT 1 NOT NULL, rsstype TINYINT(1) DEFAULT 0 NOT NULL, rssarticles TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, warnafter BIGINT DEFAULT 0 NOT NULL, blockafter BIGINT DEFAULT 0 NOT NULL, blockperiod BIGINT DEFAULT 0 NOT NULL, completiondiscussions INT DEFAULT 0 NOT NULL, completionreplies INT DEFAULT 0 NOT NULL, completionposts INT DEFAULT 0 NOT NULL, displaywordcount TINYINT(1) DEFAULT 0 NOT NULL, lockdiscussionafter BIGINT DEFAULT 0 NOT NULL, INDEX mdl_foru_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Forums contain and structure discussion' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_digests (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, forum BIGINT NOT NULL, maildigest TINYINT(1) DEFAULT -1 NOT NULL, INDEX mdl_forudige_for_ix (forum), UNIQUE INDEX mdl_forudige_forusemai_uix (forum, userid, maildigest), INDEX mdl_forudige_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of user mail delivery preferences for each forum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_discussion_subs (id BIGINT AUTO_INCREMENT NOT NULL, forum BIGINT NOT NULL, userid BIGINT NOT NULL, discussion BIGINT NOT NULL, preference BIGINT DEFAULT 1 NOT NULL, INDEX mdl_forudiscsubs_dis_ix (discussion), INDEX mdl_forudiscsubs_for_ix (forum), INDEX mdl_forudiscsubs_use_ix (userid), UNIQUE INDEX mdl_forudiscsubs_usedis_uix (userid, discussion), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users may choose to subscribe and unsubscribe from specific ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_discussions (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, forum BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstpost BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT -1 NOT NULL, assessed TINYINT(1) DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, pinned TINYINT(1) DEFAULT 0 NOT NULL, timelocked BIGINT DEFAULT 0 NOT NULL, INDEX mdl_forudisc_cou_ix (course), INDEX mdl_forudisc_for_ix (forum), INDEX mdl_forudisc_use2_ix (usermodified), INDEX mdl_forudisc_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Forums are composed of discussions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_grades (id BIGINT AUTO_INCREMENT NOT NULL, forum BIGINT NOT NULL, itemnumber BIGINT NOT NULL, userid BIGINT NOT NULL, grade NUMERIC(10, 5) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_forugrad_for_ix (forum), UNIQUE INDEX mdl_forugrad_foriteuse_uix (forum, itemnumber, userid), INDEX mdl_forugrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading data for forum instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_posts (id BIGINT AUTO_INCREMENT NOT NULL, discussion BIGINT DEFAULT 0 NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, created BIGINT DEFAULT 0 NOT NULL, modified BIGINT DEFAULT 0 NOT NULL, mailed TINYINT(1) DEFAULT 0 NOT NULL, subject VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messageformat TINYINT(1) DEFAULT 0 NOT NULL, messagetrust TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, totalscore SMALLINT DEFAULT 0 NOT NULL, mailnow BIGINT DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, privatereplyto BIGINT DEFAULT 0 NOT NULL, wordcount BIGINT DEFAULT NULL, charcount BIGINT DEFAULT NULL, INDEX mdl_forupost_cre_ix (created), INDEX mdl_forupost_dis_ix (discussion), INDEX mdl_forupost_mai_ix (mailed), INDEX mdl_forupost_par_ix (parent), INDEX mdl_forupost_pri_ix (privatereplyto), INDEX mdl_forupost_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'All posts are stored in this table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_queue (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, discussionid BIGINT DEFAULT 0 NOT NULL, postid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_foruqueu_dis_ix (discussionid), INDEX mdl_foruqueu_pos_ix (postid), INDEX mdl_foruqueu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For keeping track of posts that will be mailed in digest for' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_read (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forumid BIGINT DEFAULT 0 NOT NULL, discussionid BIGINT DEFAULT 0 NOT NULL, postid BIGINT DEFAULT 0 NOT NULL, firstread BIGINT DEFAULT 0 NOT NULL, lastread BIGINT DEFAULT 0 NOT NULL, INDEX mdl_foruread_disuse_ix (discussionid, userid), INDEX mdl_foruread_foruse_ix (forumid, userid), INDEX mdl_foruread_posuse_ix (postid, userid), INDEX mdl_foruread_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks each users read posts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forum BIGINT DEFAULT 0 NOT NULL, INDEX mdl_forusubs_for_ix (forum), INDEX mdl_forusubs_use_ix (userid), UNIQUE INDEX mdl_forusubs_usefor_uix (userid, forum), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of who is subscribed to what forum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_forum_track_prefs (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forumid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_forutracpref_usefor_ix (userid, forumid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks each users untracked forums' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, allowduplicatedentries TINYINT(1) DEFAULT 0 NOT NULL, displayformat VARCHAR(50) CHARACTER SET utf8 DEFAULT 'dictionary' NOT NULL COLLATE `utf8_general_ci`, mainglossary TINYINT(1) DEFAULT 0 NOT NULL, showspecial TINYINT(1) DEFAULT 1 NOT NULL, showalphabet TINYINT(1) DEFAULT 1 NOT NULL, showall TINYINT(1) DEFAULT 1 NOT NULL, allowcomments TINYINT(1) DEFAULT 0 NOT NULL, allowprintview TINYINT(1) DEFAULT 1 NOT NULL, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, defaultapproval TINYINT(1) DEFAULT 1 NOT NULL, approvaldisplayformat VARCHAR(50) CHARACTER SET utf8 DEFAULT 'default' NOT NULL COLLATE `utf8_general_ci`, globalglossary TINYINT(1) DEFAULT 0 NOT NULL, entbypage SMALLINT DEFAULT 10 NOT NULL, editalways TINYINT(1) DEFAULT 0 NOT NULL, rsstype TINYINT(1) DEFAULT 0 NOT NULL, rssarticles TINYINT(1) DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionentries INT DEFAULT 0 NOT NULL, INDEX mdl_glos_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all glossaries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary_alias (id BIGINT AUTO_INCREMENT NOT NULL, entryid BIGINT DEFAULT 0 NOT NULL, alias VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_glosalia_ent_ix (entryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'entries alias' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary_categories (id BIGINT AUTO_INCREMENT NOT NULL, glossaryid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_gloscate_glo_ix (glossaryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all categories for glossary entries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary_entries (id BIGINT AUTO_INCREMENT NOT NULL, glossaryid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, concept VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, definition LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, definitionformat TINYINT(1) DEFAULT 0 NOT NULL, definitiontrust TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, teacherentry TINYINT(1) DEFAULT 0 NOT NULL, sourceglossaryid BIGINT DEFAULT 0 NOT NULL, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, casesensitive TINYINT(1) DEFAULT 0 NOT NULL, fullmatch TINYINT(1) DEFAULT 1 NOT NULL, approved TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_glosentr_con_ix (concept), INDEX mdl_glosentr_glo_ix (glossaryid), INDEX mdl_glosentr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all glossary entries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary_entries_categories (id BIGINT AUTO_INCREMENT NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, entryid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_glosentrcate_cat_ix (categoryid), INDEX mdl_glosentrcate_ent_ix (entryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'categories of each glossary entry' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_glossary_formats (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, popupformatname VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, showgroup TINYINT(1) DEFAULT 1 NOT NULL, showtabs VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultmode VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaulthook VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortkey VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting of the display formats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_categories (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, parent BIGINT DEFAULT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation BIGINT DEFAULT 0 NOT NULL, keephigh BIGINT DEFAULT 0 NOT NULL, droplow BIGINT DEFAULT 0 NOT NULL, aggregateonlygraded TINYINT(1) DEFAULT 0 NOT NULL, aggregateoutcomes TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, INDEX mdl_gradcate_cou_ix (courseid), INDEX mdl_gradcate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about categories, used for grou' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_categories_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT NOT NULL, parent BIGINT DEFAULT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation BIGINT DEFAULT 0 NOT NULL, keephigh BIGINT DEFAULT 0 NOT NULL, droplow BIGINT DEFAULT 0 NOT NULL, aggregateonlygraded TINYINT(1) DEFAULT 0 NOT NULL, aggregateoutcomes TINYINT(1) DEFAULT 0 NOT NULL, aggregatesubcats TINYINT(1) DEFAULT 0 NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, INDEX mdl_gradcatehist_act_ix (action), INDEX mdl_gradcatehist_cou_ix (courseid), INDEX mdl_gradcatehist_log_ix (loggeduser), INDEX mdl_gradcatehist_old_ix (oldid), INDEX mdl_gradcatehist_par_ix (parent), INDEX mdl_gradcatehist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History of grade_categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_grades (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, rawgrademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, rawgrademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, rawscaleid BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, exported BIGINT DEFAULT 0 NOT NULL, overridden BIGINT DEFAULT 0 NOT NULL, excluded BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat BIGINT DEFAULT 0 NOT NULL, information LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, informationformat BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, aggregationstatus VARCHAR(10) CHARACTER SET utf8 DEFAULT 'unknown' NOT NULL COLLATE `utf8_general_ci`, aggregationweight NUMERIC(10, 5) DEFAULT NULL, INDEX mdl_gradgrad_ite_ix (itemid), INDEX mdl_gradgrad_locloc_ix (locked, locktime), INDEX mdl_gradgrad_raw_ix (rawscaleid), INDEX mdl_gradgrad_use2_ix (usermodified), INDEX mdl_gradgrad_use_ix (userid), UNIQUE INDEX mdl_gradgrad_useite_uix (userid, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'grade_grades  This table keeps individual grades for each us' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_grades_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, rawgrademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, rawgrademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, rawscaleid BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, exported BIGINT DEFAULT 0 NOT NULL, overridden BIGINT DEFAULT 0 NOT NULL, excluded BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat BIGINT DEFAULT 0 NOT NULL, information LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, informationformat BIGINT DEFAULT 0 NOT NULL, INDEX mdl_gradgradhist_act_ix (action), INDEX mdl_gradgradhist_ite_ix (itemid), INDEX mdl_gradgradhist_log_ix (loggeduser), INDEX mdl_gradgradhist_old_ix (oldid), INDEX mdl_gradgradhist_raw_ix (rawscaleid), INDEX mdl_gradgradhist_tim_ix (timemodified), INDEX mdl_gradgradhist_use2_ix (usermodified), INDEX mdl_gradgradhist_use_ix (userid), INDEX mdl_gradgradhist_useitetim_ix (userid, itemid, timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_import_newitem (id BIGINT AUTO_INCREMENT NOT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, importcode BIGINT NOT NULL, importer BIGINT NOT NULL, INDEX mdl_gradimponewi_imp_ix (importer), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'temporary table for storing new grade_item names from grade ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_import_values (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT DEFAULT NULL, newgradeitem BIGINT DEFAULT NULL, userid BIGINT NOT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, importcode BIGINT NOT NULL, importer BIGINT DEFAULT NULL, importonlyfeedback TINYINT(1) DEFAULT 0, INDEX mdl_gradimpovalu_imp_ix (importer), INDEX mdl_gradimpovalu_ite_ix (itemid), INDEX mdl_gradimpovalu_new_ix (newgradeitem), INDEX mdl_gradimpovalu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Temporary table for importing grades' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_items (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemmodule VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iteminstance BIGINT DEFAULT NULL, itemnumber BIGINT DEFAULT NULL, iteminfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, calculation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, gradetype SMALLINT DEFAULT 1 NOT NULL, grademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, grademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, scaleid BIGINT DEFAULT NULL, outcomeid BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, multfactor NUMERIC(10, 5) DEFAULT '1.00000' NOT NULL, plusfactor NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef2 NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, display BIGINT DEFAULT 0 NOT NULL, decimals TINYINT(1) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, needsupdate BIGINT DEFAULT 0 NOT NULL, weightoverride TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_graditem_cat_ix (categoryid), INDEX mdl_graditem_cou_ix (courseid), INDEX mdl_graditem_gra_ix (gradetype), INDEX mdl_graditem_idncou_ix (idnumber, courseid), INDEX mdl_graditem_iteiteitecou_ix (itemtype, itemmodule, iteminstance, courseid), INDEX mdl_graditem_itenee_ix (itemtype, needsupdate), INDEX mdl_graditem_locloc_ix (locked, locktime), INDEX mdl_graditem_out_ix (outcomeid), INDEX mdl_graditem_sca_ix (scaleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about gradeable items (ie colum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_items_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemmodule VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iteminstance BIGINT DEFAULT NULL, itemnumber BIGINT DEFAULT NULL, iteminfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, calculation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, gradetype SMALLINT DEFAULT 1 NOT NULL, grademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, grademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, scaleid BIGINT DEFAULT NULL, outcomeid BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, multfactor NUMERIC(10, 5) DEFAULT '1.00000' NOT NULL, plusfactor NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef2 NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, needsupdate BIGINT DEFAULT 0 NOT NULL, display BIGINT DEFAULT 0 NOT NULL, decimals TINYINT(1) DEFAULT NULL, weightoverride TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_graditemhist_act_ix (action), INDEX mdl_graditemhist_cat_ix (categoryid), INDEX mdl_graditemhist_cou_ix (courseid), INDEX mdl_graditemhist_log_ix (loggeduser), INDEX mdl_graditemhist_old_ix (oldid), INDEX mdl_graditemhist_out_ix (outcomeid), INDEX mdl_graditemhist_sca_ix (scaleid), INDEX mdl_graditemhist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History of grade_items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_letters (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, lowerboundary NUMERIC(10, 5) NOT NULL, letter VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_gradlett_conlowlet_uix (contextid, lowerboundary, letter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Repository for grade letters, for courses and other moodle e' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_outcomes (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_gradoutc_cou_ix (courseid), UNIQUE INDEX mdl_gradoutc_cousho_uix (courseid, shortname), INDEX mdl_gradoutc_sca_ix (scaleid), INDEX mdl_gradoutc_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table describes the outcomes used in the system. An out' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_outcomes_courses (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, outcomeid BIGINT NOT NULL, INDEX mdl_gradoutccour_cou_ix (courseid), UNIQUE INDEX mdl_gradoutccour_couout_uix (courseid, outcomeid), INDEX mdl_gradoutccour_out_ix (outcomeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores what outcomes are used in what courses.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_outcomes_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_gradoutchist_act_ix (action), INDEX mdl_gradoutchist_cou_ix (courseid), INDEX mdl_gradoutchist_log_ix (loggeduser), INDEX mdl_gradoutchist_old_ix (oldid), INDEX mdl_gradoutchist_sca_ix (scaleid), INDEX mdl_gradoutchist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grade_settings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_gradsett_cou_ix (courseid), UNIQUE INDEX mdl_gradsett_counam_uix (courseid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'gradebook settings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grading_areas (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, areaname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, activemethod VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_gradarea_con_ix (contextid), UNIQUE INDEX mdl_gradarea_concomare_uix (contextid, component, areaname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Identifies gradable areas where advanced grading can happen.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grading_definitions (id BIGINT AUTO_INCREMENT NOT NULL, areaid BIGINT NOT NULL, method VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, status BIGINT DEFAULT 0 NOT NULL, copiedfromid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, usercreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, timecopied BIGINT DEFAULT 0, options LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_graddefi_are_ix (areaid), UNIQUE INDEX mdl_graddefi_aremet_uix (areaid, method), INDEX mdl_graddefi_use2_ix (usercreated), INDEX mdl_graddefi_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the basic information about an advanced grading for' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_grading_instances (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, raterid BIGINT NOT NULL, itemid BIGINT DEFAULT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, status BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat TINYINT(1) DEFAULT NULL, timemodified BIGINT NOT NULL, INDEX mdl_gradinst_def_ix (definitionid), INDEX mdl_gradinst_rat_ix (raterid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading form instance is an assessment record for one gradab' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_guide_comments (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, INDEX mdl_gradguidcomm_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'frequently used comments used in marking guide' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_guide_criteria (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, descriptionmarkers LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionmarkersformat TINYINT(1) DEFAULT NULL, maxscore NUMERIC(10, 5) NOT NULL, INDEX mdl_gradguidcrit_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the rows of the criteria grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_guide_fillings (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, criterionid BIGINT NOT NULL, remark LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, remarkformat TINYINT(1) DEFAULT NULL, score NUMERIC(10, 5) NOT NULL, INDEX mdl_gradguidfill_cri_ix (criterionid), INDEX mdl_gradguidfill_ins_ix (instanceid), UNIQUE INDEX mdl_gradguidfill_inscri_uix (instanceid, criterionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the data of how the guide is filled by a particular r' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_rubric_criteria (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, INDEX mdl_gradrubrcrit_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the rows of the rubric grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_rubric_fillings (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, criterionid BIGINT NOT NULL, levelid BIGINT DEFAULT NULL, remark LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, remarkformat TINYINT(1) DEFAULT NULL, INDEX mdl_gradrubrfill_cri_ix (criterionid), INDEX mdl_gradrubrfill_ins_ix (instanceid), UNIQUE INDEX mdl_gradrubrfill_inscri_uix (instanceid, criterionid), INDEX mdl_gradrubrfill_lev_ix (levelid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the data of how the rubric is filled by a particular ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_gradingform_rubric_levels (id BIGINT AUTO_INCREMENT NOT NULL, criterionid BIGINT NOT NULL, score NUMERIC(10, 5) NOT NULL, definition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, definitionformat BIGINT DEFAULT NULL, INDEX mdl_gradrubrleve_cri_ix (criterionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the columns of the rubric grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_groupings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_grou_cou2_ix (courseid), INDEX mdl_grou_idn2_ix (idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A grouping is a collection of groups. WAS: groups_groupings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_groupings_groups (id BIGINT AUTO_INCREMENT NOT NULL, groupingid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, INDEX mdl_grougrou_gro2_ix (groupid), INDEX mdl_grougrou_gro_ix (groupingid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a grouping to a group (note, groups can be in multiple ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_groups (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, enrolmentkey VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, picture BIGINT DEFAULT 0 NOT NULL, visibility TINYINT(1) DEFAULT 0 NOT NULL, participation TINYINT(1) DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_grou_cou_ix (courseid), INDEX mdl_grou_idn_ix (idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record represents a group.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_groups_members (id BIGINT AUTO_INCREMENT NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_groumemb_gro_ix (groupid), INDEX mdl_groumemb_use_ix (userid), UNIQUE INDEX mdl_groumemb_usegro_uix (userid, groupid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a user to a group.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5p (id BIGINT AUTO_INCREMENT NOT NULL, jsoncontent LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, mainlibraryid BIGINT NOT NULL, displayoptions SMALLINT DEFAULT NULL, pathnamehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filtered LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_h5p_mai_ix (mainlibraryid), INDEX mdl_h5p_pat_ix (pathnamehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores H5P content information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5p_contents_libraries (id BIGINT AUTO_INCREMENT NOT NULL, h5pid BIGINT NOT NULL, libraryid BIGINT NOT NULL, dependencytype VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dropcss TINYINT(1) NOT NULL, weight BIGINT NOT NULL, INDEX mdl_h5pcontlibr_h5p_ix (h5pid), INDEX mdl_h5pcontlibr_lib_ix (libraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store which library is used in which content.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5p_libraries (id BIGINT AUTO_INCREMENT NOT NULL, machinename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, majorversion SMALLINT NOT NULL, minorversion SMALLINT NOT NULL, patchversion SMALLINT NOT NULL, runnable TINYINT(1) NOT NULL, fullscreen TINYINT(1) DEFAULT 0 NOT NULL, embedtypes VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, preloadedjs LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, preloadedcss LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, droplibrarycss LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, semantics LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, addto LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, coremajor SMALLINT DEFAULT NULL, coreminor SMALLINT DEFAULT NULL, metadatasettings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tutorial LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, example LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1, INDEX mdl_h5plibr_macmajminpatrun_ix (machinename, majorversion, minorversion, patchversion, runnable), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about libraries used by H5P content.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5p_libraries_cachedassets (id BIGINT AUTO_INCREMENT NOT NULL, libraryid BIGINT NOT NULL, hash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_h5plibrcach_lib_ix (libraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'H5P cached library assets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5p_library_dependencies (id BIGINT AUTO_INCREMENT NOT NULL, libraryid BIGINT NOT NULL, requiredlibraryid BIGINT NOT NULL, dependencytype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_h5plibrdepe_lib_ix (libraryid), INDEX mdl_h5plibrdepe_req_ix (requiredlibraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores H5P library dependencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5pactivity (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0, displayoptions SMALLINT DEFAULT 0 NOT NULL, enabletracking TINYINT(1) DEFAULT 1 NOT NULL, grademethod SMALLINT DEFAULT 1 NOT NULL, reviewmode SMALLINT DEFAULT 1, INDEX mdl_h5pa_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the h5pactivity activity module instances.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5pactivity_attempts (id BIGINT AUTO_INCREMENT NOT NULL, h5pactivityid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, attempt INT DEFAULT 1 NOT NULL, rawscore BIGINT DEFAULT 0, maxscore BIGINT DEFAULT 0, scaled NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, duration BIGINT DEFAULT 0, completion TINYINT(1) DEFAULT NULL, success TINYINT(1) DEFAULT NULL, INDEX mdl_h5paatte_h5p_ix (h5pactivityid), INDEX mdl_h5paatte_h5ptim_ix (h5pactivityid, timecreated), INDEX mdl_h5paatte_h5puse_ix (h5pactivityid, userid), UNIQUE INDEX mdl_h5paatte_h5puseatt_uix (h5pactivityid, userid, attempt), INDEX mdl_h5paatte_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users attempts inside H5P activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_h5pactivity_attempts_results (id BIGINT AUTO_INCREMENT NOT NULL, attemptid BIGINT NOT NULL, subcontent VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, interactiontype VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctpattern LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, response LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, additionals LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rawscore BIGINT DEFAULT 0 NOT NULL, maxscore BIGINT DEFAULT 0 NOT NULL, duration BIGINT DEFAULT 0, completion TINYINT(1) DEFAULT NULL, success TINYINT(1) DEFAULT NULL, INDEX mdl_h5paatteresu_att_ix (attemptid), INDEX mdl_h5paatteresu_atttim_ix (attemptid, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'H5Pactivities_attempts tracking info' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_imscp (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, keepold BIGINT DEFAULT -1 NOT NULL, structure LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_imsc_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one imscp resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_infected_files (id BIGINT AUTO_INCREMENT NOT NULL, filename LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, quarantinedfile LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, reason LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_infefile_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store infected file details.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_label (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_labe_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines labels' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, practice SMALLINT DEFAULT 0 NOT NULL, modattempts SMALLINT DEFAULT 0 NOT NULL, usepassword SMALLINT DEFAULT 0 NOT NULL, password VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dependency BIGINT DEFAULT 0 NOT NULL, conditions LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, grade BIGINT DEFAULT 0 NOT NULL, custom SMALLINT DEFAULT 0 NOT NULL, ongoing SMALLINT DEFAULT 0 NOT NULL, usemaxgrade SMALLINT DEFAULT 0 NOT NULL, maxanswers SMALLINT DEFAULT 4 NOT NULL, maxattempts SMALLINT DEFAULT 5 NOT NULL, review SMALLINT DEFAULT 0 NOT NULL, nextpagedefault SMALLINT DEFAULT 0 NOT NULL, feedback SMALLINT DEFAULT 1 NOT NULL, minquestions SMALLINT DEFAULT 0 NOT NULL, maxpages SMALLINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, retake SMALLINT DEFAULT 1 NOT NULL, activitylink BIGINT DEFAULT 0 NOT NULL, mediafile VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mediaheight BIGINT DEFAULT 100 NOT NULL, mediawidth BIGINT DEFAULT 650 NOT NULL, mediaclose SMALLINT DEFAULT 0 NOT NULL, slideshow SMALLINT DEFAULT 0 NOT NULL, width BIGINT DEFAULT 640 NOT NULL, height BIGINT DEFAULT 480 NOT NULL, bgcolor VARCHAR(7) CHARACTER SET utf8 DEFAULT '#FFFFFF' NOT NULL COLLATE `utf8_general_ci`, displayleft SMALLINT DEFAULT 0 NOT NULL, displayleftif SMALLINT DEFAULT 0 NOT NULL, progressbar SMALLINT DEFAULT 0 NOT NULL, available BIGINT DEFAULT 0 NOT NULL, deadline BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionendreached TINYINT(1) DEFAULT 0, completiontimespent BIGINT DEFAULT 0, allowofflineattempts TINYINT(1) DEFAULT 0, INDEX mdl_less_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_answers (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, jumpto BIGINT DEFAULT 0 NOT NULL, grade SMALLINT DEFAULT 0 NOT NULL, score BIGINT DEFAULT 0 NOT NULL, flags SMALLINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, answer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, answerformat TINYINT(1) DEFAULT 0 NOT NULL, response LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responseformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_lessansw_les_ix (lessonid), INDEX mdl_lessansw_pag_ix (pageid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_answers' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_attempts (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, answerid BIGINT DEFAULT 0 NOT NULL, retry SMALLINT DEFAULT 0 NOT NULL, correct BIGINT DEFAULT 0 NOT NULL, useranswer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timeseen BIGINT DEFAULT 0 NOT NULL, INDEX mdl_lessatte_ans_ix (answerid), INDEX mdl_lessatte_les_ix (lessonid), INDEX mdl_lessatte_pag_ix (pageid), INDEX mdl_lessatte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_attempts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_branch (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, retry BIGINT DEFAULT 0 NOT NULL, flag SMALLINT DEFAULT 0 NOT NULL, timeseen BIGINT DEFAULT 0 NOT NULL, nextpageid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_lessbran_les_ix (lessonid), INDEX mdl_lessbran_pag_ix (pageid), INDEX mdl_lessbran_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'branches for each lesson/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_grades (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, grade DOUBLE PRECISION DEFAULT '0' NOT NULL, late SMALLINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, INDEX mdl_lessgrad_les_ix (lessonid), INDEX mdl_lessgrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_grades' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_overrides (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, available BIGINT DEFAULT NULL, deadline BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, review SMALLINT DEFAULT NULL, maxattempts SMALLINT DEFAULT NULL, retake SMALLINT DEFAULT NULL, password VARCHAR(32) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_lessover_gro_ix (groupid), INDEX mdl_lessover_les_ix (lessonid), INDEX mdl_lessover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to lesson settings.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_pages (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, prevpageid BIGINT DEFAULT 0 NOT NULL, nextpageid BIGINT DEFAULT 0 NOT NULL, qtype SMALLINT DEFAULT 0 NOT NULL, qoption SMALLINT DEFAULT 0 NOT NULL, layout SMALLINT DEFAULT 1 NOT NULL, display SMALLINT DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contents LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentsformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_lesspage_les_ix (lessonid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_pages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lesson_timer (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, starttime BIGINT DEFAULT 0 NOT NULL, lessontime BIGINT DEFAULT 0 NOT NULL, completed TINYINT(1) DEFAULT 0, timemodifiedoffline BIGINT DEFAULT 0 NOT NULL, INDEX mdl_lesstime_les_ix (lessonid), INDEX mdl_lesstime_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'lesson timer for each lesson' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_license (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, version BIGINT DEFAULT 0 NOT NULL, custom TINYINT(1) DEFAULT 0 NOT NULL, sortorder INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'store licenses used by moodle' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lock_db (id BIGINT AUTO_INCREMENT NOT NULL, resourcekey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT NULL, owner VARCHAR(36) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_lockdb_exp_ix (expires), INDEX mdl_lockdb_own_ix (owner), UNIQUE INDEX mdl_lockdb_res_uix (resourcekey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores active and inactive lock types for db locking method.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_log (id BIGINT AUTO_INCREMENT NOT NULL, time BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cmid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_log_act_ix (action), INDEX mdl_log_cmi_ix (cmid), INDEX mdl_log_coumodact_ix (course, module, action), INDEX mdl_log_tim_ix (time), INDEX mdl_log_usecou_ix (userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Every action is logged as far as possible' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_log_display (id BIGINT AUTO_INCREMENT NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mtable VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, field VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_logdisp_modact_uix (module, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For a particular module/action, specifies a moodle table/fie' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_log_queries (id BIGINT AUTO_INCREMENT NOT NULL, qtype INT NOT NULL, sqltext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sqlparams LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, error INT DEFAULT 0 NOT NULL, info LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, backtrace LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, exectime NUMERIC(10, 5) NOT NULL, timelogged BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Logged database queries.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_logstore_standard_log (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, target VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, objecttable VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, objectid BIGINT DEFAULT NULL, crud VARCHAR(1) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, edulevel TINYINT(1) NOT NULL, contextid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, contextinstanceid BIGINT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT DEFAULT NULL, relateduserid BIGINT DEFAULT NULL, anonymous TINYINT(1) DEFAULT 0 NOT NULL, other LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, origin VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, realuserid BIGINT DEFAULT NULL, INDEX mdl_logsstanlog_con_ix (contextid), INDEX mdl_logsstanlog_cou_ix (courseid), INDEX mdl_logsstanlog_couanotim_ix (courseid, anonymous, timecreated), INDEX mdl_logsstanlog_rea_ix (realuserid), INDEX mdl_logsstanlog_rel_ix (relateduserid), INDEX mdl_logsstanlog_tim_ix (timecreated), INDEX mdl_logsstanlog_use_ix (userid), INDEX mdl_logsstanlog_useconconcr_ix (userid, contextlevel, contextinstanceid, crud, edulevel, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Standard log table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, typeid BIGINT DEFAULT NULL, toolurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, securetoolurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructorchoicesendname TINYINT(1) DEFAULT NULL, instructorchoicesendemailaddr TINYINT(1) DEFAULT NULL, instructorchoiceallowroster TINYINT(1) DEFAULT NULL, instructorchoiceallowsetting TINYINT(1) DEFAULT NULL, instructorcustomparameters LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructorchoiceacceptgrades TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT 100 NOT NULL, launchcontainer TINYINT(1) DEFAULT 1 NOT NULL, resourcekey VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, debuglaunch TINYINT(1) DEFAULT 0 NOT NULL, showtitlelaunch TINYINT(1) DEFAULT 0 NOT NULL, showdescriptionlaunch TINYINT(1) DEFAULT 0 NOT NULL, servicesalt VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, icon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secureicon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_lti_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains Basic LTI activities instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_access_tokens (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, scope LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, token VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, validuntil BIGINT NOT NULL, timecreated BIGINT NOT NULL, lastaccess BIGINT DEFAULT NULL, UNIQUE INDEX mdl_ltiaccetoke_tok_uix (token), INDEX mdl_ltiaccetoke_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Security tokens for accessing of LTI services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_coursevisible (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, courseid BIGINT NOT NULL, coursevisible TINYINT(1) NOT NULL, INDEX mdl_lticour_cou_ix (courseid), INDEX mdl_lticour_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store coursevisible setting for site tool on course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_submission (id BIGINT AUTO_INCREMENT NOT NULL, ltiid BIGINT NOT NULL, userid BIGINT NOT NULL, datesubmitted BIGINT NOT NULL, dateupdated BIGINT NOT NULL, gradepercent NUMERIC(10, 5) NOT NULL, originalgrade NUMERIC(10, 5) NOT NULL, launchid BIGINT NOT NULL, state TINYINT(1) NOT NULL, INDEX mdl_ltisubm_lti_ix (ltiid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of individual submissions for LTI activities.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_tool_proxies (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Tool Provider' NOT NULL COLLATE `utf8_general_ci`, regurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, state TINYINT(1) DEFAULT 1 NOT NULL, guid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secret VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, vendorcode VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, capabilityoffered LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, serviceoffered LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, toolproxy LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, createdby BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_ltitoolprox_gui_uix (guid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI tool proxy registrations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_tool_settings (id BIGINT AUTO_INCREMENT NOT NULL, toolproxyid BIGINT NOT NULL, typeid BIGINT DEFAULT NULL, course BIGINT DEFAULT NULL, coursemoduleid BIGINT DEFAULT NULL, settings LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_ltitoolsett_cou2_ix (coursemoduleid), INDEX mdl_ltitoolsett_cou_ix (course), INDEX mdl_ltitoolsett_too_ix (toolproxyid), INDEX mdl_ltitoolsett_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI tool setting values' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_types (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'basiclti Activity' NOT NULL COLLATE `utf8_general_ci`, baseurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, tooldomain VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, state TINYINT(1) DEFAULT 2 NOT NULL, course BIGINT NOT NULL, coursevisible TINYINT(1) DEFAULT 0 NOT NULL, ltiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, clientid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, toolproxyid BIGINT DEFAULT NULL, enabledcapability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, parameter LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, icon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secureicon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, createdby BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_ltitype_cli_uix (clientid), INDEX mdl_ltitype_cou_ix (course), INDEX mdl_ltitype_too_ix (tooldomain), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Basic LTI pre-configured activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_types_categories (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, categoryid BIGINT NOT NULL, INDEX mdl_ltitypecate_cat_ix (categoryid), INDEX mdl_ltitypecate_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link LTI types to course categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_lti_types_config (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_ltitypeconf_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Basic LTI types configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ltiservice_gradebookservices (id BIGINT AUTO_INCREMENT NOT NULL, gradeitemid BIGINT NOT NULL, courseid BIGINT NOT NULL, toolproxyid BIGINT DEFAULT NULL, typeid BIGINT DEFAULT NULL, baseurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ltilinkid BIGINT DEFAULT NULL, resourceid VARCHAR(512) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tag VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, subreviewurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, subreviewparams LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_ltisgrad_gracou_ix (gradeitemid, courseid), INDEX mdl_ltisgrad_lti_ix (ltilinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This file records the grade items created by the LTI Gradebo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_matrix_room (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, roomid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, topic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_matrroom_com_ix (commid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the matrix room information associated with the commu' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT DEFAULT 0 NOT NULL, useridto BIGINT DEFAULT 0 NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat SMALLINT DEFAULT 0, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, notification TINYINT(1) DEFAULT 0, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timeuserfromdeleted BIGINT DEFAULT 0 NOT NULL, timeusertodeleted BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_mess_usetimnot2_ix (useridto, timeusertodeleted, notification), INDEX mdl_mess_usetimnot_ix (useridfrom, timeuserfromdeleted, notification), INDEX mdl_mess_useusetimtim_ix (useridfrom, useridto, timeuserfromdeleted, timeusertodeleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all unread messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_airnotifier_devices (id BIGINT AUTO_INCREMENT NOT NULL, userdeviceid BIGINT NOT NULL, enable TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_messairndevi_use_uix (userdeviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store information about the devices registered in Airnotifie' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_contact_requests (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, requesteduserid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_messcontrequ_req_ix (requesteduserid), INDEX mdl_messcontrequ_use_ix (userid), UNIQUE INDEX mdl_messcontrequ_usereq_uix (userid, requesteduserid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains list of contact requests between users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_contacts (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, contactid BIGINT NOT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_messcont_con_ix (contactid), INDEX mdl_messcont_use_ix (userid), UNIQUE INDEX mdl_messcont_usecon_uix (userid, contactid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains lists of contacts between users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_conversation_actions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, conversationid BIGINT NOT NULL, action BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_messconvacti_con_ix (conversationid), INDEX mdl_messconvacti_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all per-user actions on individual conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_conversation_members (id BIGINT AUTO_INCREMENT NOT NULL, conversationid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_messconvmemb_con_ix (conversationid), INDEX mdl_messconvmemb_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all members in a conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_conversations (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT DEFAULT 1 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, convhash VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, contextid BIGINT DEFAULT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_messconv_comiteitecon_ix (component, itemtype, itemid, contextid), INDEX mdl_messconv_con2_ix (contextid), INDEX mdl_messconv_con_ix (convhash), INDEX mdl_messconv_typ_ix (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all message conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_email_messages (id BIGINT AUTO_INCREMENT NOT NULL, useridto BIGINT NOT NULL, conversationid BIGINT NOT NULL, messageid BIGINT NOT NULL, INDEX mdl_messemaimess_con_ix (conversationid), INDEX mdl_messemaimess_mes_ix (messageid), INDEX mdl_messemaimess_use_ix (useridto), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of what emails to send in an email digest' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_popup (id BIGINT AUTO_INCREMENT NOT NULL, messageid BIGINT NOT NULL, isread TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_messpopu_isr_ix (isread), UNIQUE INDEX mdl_messpopu_mesisr_uix (messageid, isread), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keep state of notifications for the popup message processor' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_popup_notifications (id BIGINT AUTO_INCREMENT NOT NULL, notificationid BIGINT NOT NULL, INDEX mdl_messpopunoti_not_ix (notificationid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of notifications to display in the message output popup' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_processors (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of message output plugins' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_providers (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_messprov_comnam_uix (component, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores the message providers (modules and core sy' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_read (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT DEFAULT 0 NOT NULL, useridto BIGINT DEFAULT 0 NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat SMALLINT DEFAULT 0, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, notification TINYINT(1) DEFAULT 0, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timeread BIGINT DEFAULT 0 NOT NULL, timeuserfromdeleted BIGINT DEFAULT 0 NOT NULL, timeusertodeleted BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_messread_nottim_ix (notification, timeread), INDEX mdl_messread_usetimnot2_ix (useridto, timeusertodeleted, notification), INDEX mdl_messread_usetimnot_ix (useridfrom, timeuserfromdeleted, notification), INDEX mdl_messread_useusetimtim_ix (useridfrom, useridto, timeuserfromdeleted, timeusertodeleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all messages that have been read' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_user_actions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, messageid BIGINT NOT NULL, action BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_messuseracti_mes_ix (messageid), INDEX mdl_messuseracti_use_ix (userid), UNIQUE INDEX mdl_messuseracti_usemesact_uix (userid, messageid, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all per-user actions on individual messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_message_users_blocked (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, blockeduserid BIGINT NOT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_messuserbloc_blo_ix (blockeduserid), INDEX mdl_messuserbloc_use_ix (userid), UNIQUE INDEX mdl_messuserbloc_useblo_uix (userid, blockeduserid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains lists of blocked users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_messageinbound_datakeys (id BIGINT AUTO_INCREMENT NOT NULL, handler BIGINT NOT NULL, datavalue BIGINT NOT NULL, datakey VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, expires BIGINT DEFAULT NULL, INDEX mdl_messdata_han_ix (handler), UNIQUE INDEX mdl_messdata_handat_uix (handler, datavalue), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Inbound Message data item secret keys.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_messageinbound_handlers (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaultexpiration BIGINT DEFAULT 86400 NOT NULL, validateaddress TINYINT(1) DEFAULT 1 NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_messhand_cla_uix (classname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Inbound Message Handler definitions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_messageinbound_messagelist (id BIGINT AUTO_INCREMENT NOT NULL, messageid LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, address LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_messmess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of message IDs for existing replies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_messages (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT NOT NULL, conversationid BIGINT NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat TINYINT(1) DEFAULT 0 NOT NULL, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, fullmessagetrust TINYINT(1) DEFAULT 0 NOT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_mess_con_ix (conversationid), INDEX mdl_mess_contim_ix (conversationid, timecreated), INDEX mdl_mess_use_ix (useridfrom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_application (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, display_name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpc_server_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sso_land_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sso_jump_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about applications on remote hosts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_host (id BIGINT AUTO_INCREMENT NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, wwwroot VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ip_address VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, public_key LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, public_key_expires BIGINT DEFAULT 0 NOT NULL, transport TINYINT(1) DEFAULT 0 NOT NULL, portno INT DEFAULT 0 NOT NULL, last_connect_time BIGINT DEFAULT 0 NOT NULL, last_log_id BIGINT DEFAULT 0 NOT NULL, force_theme TINYINT(1) DEFAULT 0 NOT NULL, theme VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, applicationid BIGINT DEFAULT 1 NOT NULL, sslverification TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_mnethost_app_ix (applicationid), INDEX mdl_mnethost_las_ix (last_log_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about the local and remote hosts for RPC' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_host2service (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT DEFAULT 0 NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, publish TINYINT(1) DEFAULT 0 NOT NULL, subscribe TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_mnethost_hosser_uix (hostid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about the services for a given host' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_log (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT DEFAULT 0 NOT NULL, remoteid BIGINT DEFAULT 0 NOT NULL, time BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, coursename VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cmid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_mnetlog_hosusecou_ix (hostid, userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store session data from users migrating to other sites' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_remote_rpc (id BIGINT AUTO_INCREMENT NOT NULL, functionname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpcpath VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, plugintype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pluginname VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table describes functions that might be called remotely' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_remote_service2rpc (id BIGINT AUTO_INCREMENT NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, rpcid BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_mnetremoserv_rpcser_uix (rpcid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Group functions or methods under a service' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_rpc (id BIGINT AUTO_INCREMENT NOT NULL, functionname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpcpath VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, plugintype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pluginname VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 0 NOT NULL, help LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, profile LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, filename VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(150) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, static TINYINT(1) DEFAULT NULL, INDEX mdl_mnetrpc_enaxml_ix (enabled, xmlrpcpath), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Functions or methods that we may publish or subscribe to' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_service (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, apiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, offer TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A service is a group of functions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_service2rpc (id BIGINT AUTO_INCREMENT NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, rpcid BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_mnetserv_rpcser_uix (rpcid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Group functions or methods under a service' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_session (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, token VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mnethostid BIGINT DEFAULT 0 NOT NULL, useragent VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirm_timeout BIGINT DEFAULT 0 NOT NULL, session_id VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT 0 NOT NULL, INDEX mdl_mnetsess_mne_ix (mnethostid), UNIQUE INDEX mdl_mnetsess_tok_uix (token), INDEX mdl_mnetsess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store session data from users migrating to other sites' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnet_sso_access_control (id BIGINT AUTO_INCREMENT NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mnet_host_id BIGINT DEFAULT 0 NOT NULL, accessctrl VARCHAR(20) CHARACTER SET utf8 DEFAULT 'allow' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_mnetssoaccecont_mneuse_uix (mnet_host_id, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users by host permitted (or not) to login from a remote prov' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnetservice_enrol_courses (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT NOT NULL, remoteid BIGINT NOT NULL, categoryid BIGINT NOT NULL, categoryname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat SMALLINT DEFAULT 0, startdate BIGINT NOT NULL, roleid BIGINT NOT NULL, rolename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_mnetenrocour_hosrem_uix (hostid, remoteid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Caches the information fetched via XML-RPC about courses on ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_mnetservice_enrol_enrolments (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT NOT NULL, userid BIGINT NOT NULL, remotecourseid BIGINT NOT NULL, rolename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enroltime BIGINT DEFAULT 0 NOT NULL, enroltype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_mnetenroenro_hos_ix (hostid), INDEX mdl_mnetenroenro_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Caches the information about enrolments of our local users i' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_modules (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cron BIGINT DEFAULT 0 NOT NULL, lastcron BIGINT DEFAULT 0 NOT NULL, search VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_modu_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'modules available in the site' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_moodlenet_share_progress (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT DEFAULT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, resourceurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records MoodleNet share progress' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_my_pages (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, private TINYINT(1) DEFAULT 1 NOT NULL, sortorder INT DEFAULT 0 NOT NULL, INDEX mdl_mypage_usepri_ix (userid, private), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Extra user pages for the My Moodle system' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_notifications (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT NOT NULL, useridto BIGINT NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat TINYINT(1) DEFAULT 0 NOT NULL, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timeread BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_noti_tim2_ix (timeread), INDEX mdl_noti_tim_ix (timecreated), INDEX mdl_noti_use2_ix (useridto), INDEX mdl_noti_use_ix (useridfrom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all notifications' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_access_token (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expires BIGINT NOT NULL, scope LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_oautaccetoke_iss_uix (issuerid), INDEX mdl_oautaccetoke_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores access tokens for system accounts in order to be able' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_endpoint (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, issuerid BIGINT NOT NULL, INDEX mdl_oautendp_iss_ix (issuerid), INDEX mdl_oautendp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Describes the named endpoint for an oauth2 service.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_issuer (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, image LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, baseurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, clientid LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, clientsecret LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginscopes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginscopesoffline LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginparams LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginparamsoffline LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, alloweddomains LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scopessupported LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, showonloginpage TINYINT(1) DEFAULT 1 NOT NULL, basicauth TINYINT(1) DEFAULT 0 NOT NULL, sortorder BIGINT NOT NULL, requireconfirmation TINYINT(1) DEFAULT 1 NOT NULL, servicetype VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, loginpagename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Details for an oauth 2 connect identity issuer.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_refresh_token (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scopehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_oautrefrtoke_iss_ix (issuerid), INDEX mdl_oautrefrtoke_use_ix (userid), UNIQUE INDEX mdl_oautrefrtoke_useisssco_uix (userid, issuerid, scopehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores refresh tokens which can be exchanged for access toke' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_system_account (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, refreshtoken LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, grantedscopes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, username LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_oautsystacco_iss_uix (issuerid), INDEX mdl_oautsystacco_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stored details used to get an access token as a system user ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_oauth2_user_field_mapping (id BIGINT AUTO_INCREMENT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, externalfield VARCHAR(500) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, internalfield VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_oautuserfielmapp_iss_ix (issuerid), UNIQUE INDEX mdl_oautuserfielmapp_issin_uix (issuerid, internalfield), INDEX mdl_oautuserfielmapp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Mapping of oauth user fields to moodle fields.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, comments LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, site VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, author VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moodleversion VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, moodlerelease VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, iscore TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timeimported BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store presets data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_app (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, userid BIGINT NOT NULL, time BIGINT NOT NULL, INDEX mdl_padmiapp_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Applied presets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_app_it (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, configlogid BIGINT NOT NULL, INDEX mdl_padmiappit_adm_ix (adminpresetapplyid), INDEX mdl_padmiappit_con_ix (configlogid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets applied items. To maintain the relation with c' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_app_it_a (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, configlogid BIGINT NOT NULL, itemname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_padmiappita_adm_ix (adminpresetapplyid), INDEX mdl_padmiappita_con_ix (configlogid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Attributes of the applied items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_app_plug (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetapplyid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value SMALLINT DEFAULT 0 NOT NULL, oldvalue SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_padmiappplug_adm_ix (adminpresetapplyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets plugins applied' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_it (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_padmiit_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store settings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_it_a (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_padmiita_ite_ix (itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets items attributes. For settings with attributes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_padminpresets_plug (id BIGINT AUTO_INCREMENT NOT NULL, adminpresetid BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_padmiplug_adm_ix (adminpresetid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Admin presets plugins status, to store information about whe' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_page (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, legacyfileslast BIGINT DEFAULT NULL, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_page_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one page and its config data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_indicator_calc (id BIGINT AUTO_INCREMENT NOT NULL, starttime BIGINT NOT NULL, endtime BIGINT NOT NULL, contextid BIGINT NOT NULL, sampleorigin VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sampleid BIGINT NOT NULL, indicator VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value NUMERIC(10, 2) DEFAULT NULL, timecreated BIGINT NOT NULL, INDEX mdl_panalindicalc_con_ix (contextid), INDEX mdl_panalindicalc_staendcon_ix (starttime, endtime, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stored indicator calculations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_models (id BIGINT AUTO_INCREMENT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, trained TINYINT(1) DEFAULT 0 NOT NULL, name VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, target VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, indicators LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, predictionsprocessor VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, version BIGINT NOT NULL, contextids LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_panalmode_enatra_ix (enabled, trained), INDEX mdl_panalmode_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analytic models.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_models_log (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, version BIGINT NOT NULL, evaluationmode VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, target VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, indicators LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, score NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, info LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dir LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_panalmodelog_mod_ix (modelid), INDEX mdl_panalmodelog_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analytic models changes during evaluation.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_predict_samples (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, analysableid BIGINT NOT NULL, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rangeindex BIGINT NOT NULL, sampleids LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_panalpredsamp_mod_ix (modelid), INDEX mdl_panalpredsamp_modanatim_ix (modelid, analysableid, timesplitting, rangeindex), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Samples already used for predictions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_prediction_actions (id BIGINT AUTO_INCREMENT NOT NULL, predictionid BIGINT NOT NULL, userid BIGINT NOT NULL, actionname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_panalpredacti_pre_ix (predictionid), INDEX mdl_panalpredacti_preuseact_ix (predictionid, userid, actionname), INDEX mdl_panalpredacti_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Register of user actions over predictions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_predictions (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, contextid BIGINT NOT NULL, sampleid BIGINT NOT NULL, rangeindex INT NOT NULL, prediction NUMERIC(10, 2) NOT NULL, predictionscore NUMERIC(10, 5) NOT NULL, calculations LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timestart BIGINT DEFAULT NULL, timeend BIGINT DEFAULT NULL, INDEX mdl_panalpred_con_ix (contextid), INDEX mdl_panalpred_mod_ix (modelid), INDEX mdl_panalpred_modcon_ix (modelid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Predictions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_train_samples (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, analysableid BIGINT NOT NULL, timesplitting VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sampleids LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_panaltraisamp_mod_ix (modelid), INDEX mdl_panaltraisamp_modanatim_ix (modelid, analysableid, timesplitting), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Samples used for training' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_used_analysables (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT NOT NULL, action VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, analysableid BIGINT NOT NULL, firstanalysis BIGINT NOT NULL, timeanalysed BIGINT NOT NULL, INDEX mdl_panalusedanal_ana_ix (analysableid), INDEX mdl_panalusedanal_mod_ix (modelid), INDEX mdl_panalusedanal_modact_ix (modelid, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of analysables used by each model' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_panalytics_used_files (id BIGINT AUTO_INCREMENT NOT NULL, modelid BIGINT DEFAULT 0 NOT NULL, fileid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, time BIGINT DEFAULT 0 NOT NULL, INDEX mdl_panalusedfile_fil_ix (fileid), INDEX mdl_panalusedfile_mod_ix (modelid), INDEX mdl_panalusedfile_modactfil_ix (modelid, action, fileid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Files that have already been used for training and predictio' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, alwaysshowdescription TINYINT(1) DEFAULT 0 NOT NULL, nosubmissions TINYINT(1) DEFAULT 0 NOT NULL, submissiondrafts TINYINT(1) DEFAULT 0 NOT NULL, sendnotifications TINYINT(1) DEFAULT 0 NOT NULL, sendlatenotifications TINYINT(1) DEFAULT 0 NOT NULL, duedate BIGINT DEFAULT 0 NOT NULL, allowsubmissionsfromdate BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, requiresubmissionstatement TINYINT(1) DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, cutoffdate BIGINT DEFAULT 0 NOT NULL, gradingduedate BIGINT DEFAULT 0 NOT NULL, teamsubmission TINYINT(1) DEFAULT 0 NOT NULL, requireallteammemberssubmit TINYINT(1) DEFAULT 0 NOT NULL, teamsubmissiongroupingid BIGINT DEFAULT 0 NOT NULL, blindmarking TINYINT(1) DEFAULT 0 NOT NULL, hidegrader TINYINT(1) DEFAULT 0 NOT NULL, revealidentities TINYINT(1) DEFAULT 0 NOT NULL, attemptreopenmethod VARCHAR(10) CHARACTER SET utf8 DEFAULT 'none' NOT NULL COLLATE `utf8_general_ci`, maxattempts INT DEFAULT -1 NOT NULL, markingworkflow TINYINT(1) DEFAULT 0 NOT NULL, markingallocation TINYINT(1) DEFAULT 0 NOT NULL, markinganonymous TINYINT(1) DEFAULT 0 NOT NULL, sendstudentnotifications TINYINT(1) DEFAULT 1 NOT NULL, preventsubmissionnotingroup TINYINT(1) DEFAULT 0 NOT NULL, activity LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, activityformat SMALLINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, submissionattachments TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_passi_cou_ix (course), INDEX mdl_passi_tea_ix (teamsubmissiongroupingid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table saves information about an instance of mod_assign' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_grades (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, grader BIGINT DEFAULT 0 NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000', attemptnumber BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passigrad_ass_ix (assignment), UNIQUE INDEX mdl_passigrad_assuseatt_uix (assignment, userid, attemptnumber), INDEX mdl_passigrad_att_ix (attemptnumber), INDEX mdl_passigrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading information about a single assignment submission.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_overrides (id BIGINT AUTO_INCREMENT NOT NULL, assignid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, allowsubmissionsfromdate BIGINT DEFAULT NULL, duedate BIGINT DEFAULT NULL, cutoffdate BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, INDEX mdl_passiover_ass_ix (assignid), INDEX mdl_passiover_gro_ix (groupid), INDEX mdl_passiover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to assign settings.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_plugin_config (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, plugin VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subtype VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(28) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_passiplugconf_ass_ix (assignment), INDEX mdl_passiplugconf_nam_ix (name), INDEX mdl_passiplugconf_plu_ix (plugin), INDEX mdl_passiplugconf_sub_ix (subtype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Config data for an instance of a plugin in an assignment.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_submission (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, status VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, groupid BIGINT DEFAULT 0 NOT NULL, attemptnumber BIGINT DEFAULT 0 NOT NULL, latest TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_passisubm_ass_ix (assignment), UNIQUE INDEX mdl_passisubm_assusegroatt_uix (assignment, userid, groupid, attemptnumber), INDEX mdl_passisubm_assusegrolat_ix (assignment, userid, groupid, latest), INDEX mdl_passisubm_att_ix (attemptnumber), INDEX mdl_passisubm_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about student interactions with' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_user_flags (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, mailed SMALLINT DEFAULT 0 NOT NULL, extensionduedate BIGINT DEFAULT 0 NOT NULL, workflowstate VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, allocatedmarker BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passiuserflag_ass_ix (assignment), INDEX mdl_passiuserflag_mai_ix (mailed), INDEX mdl_passiuserflag_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of flags that can be set for a single user in a single ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passign_user_mapping (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passiusermapp_ass_ix (assignment), INDEX mdl_passiusermapp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Map an assignment specific id number to a user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_comments (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, commenttext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentformat SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_passicomm_ass_ix (assignment), INDEX mdl_passicomm_gra_ix (grade), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Text feedback for submitted assignments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_editpdf_annot (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, pageno BIGINT DEFAULT 0 NOT NULL, x BIGINT DEFAULT 0, y BIGINT DEFAULT 0, endx BIGINT DEFAULT 0, endy BIGINT DEFAULT 0, path LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, type VARCHAR(10) CHARACTER SET utf8 DEFAULT 'line' COLLATE `utf8_general_ci`, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'black' COLLATE `utf8_general_ci`, draft TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_passieditanno_gra_ix (gradeid), INDEX mdl_passieditanno_grapag_ix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores annotations added to pdfs submitted by students' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_editpdf_cmnt (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, x BIGINT DEFAULT 0, y BIGINT DEFAULT 0, width BIGINT DEFAULT 120, rawtext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pageno BIGINT DEFAULT 0 NOT NULL, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'black' COLLATE `utf8_general_ci`, draft TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_passieditcmnt_gra_ix (gradeid), INDEX mdl_passieditcmnt_grapag_ix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores comments added to pdfs' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_editpdf_quick (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, rawtext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, width BIGINT DEFAULT 120 NOT NULL, colour VARCHAR(10) CHARACTER SET utf8 DEFAULT 'yellow' COLLATE `utf8_general_ci`, INDEX mdl_passieditquic_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores teacher specified quicklist comments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_editpdf_rot (id BIGINT AUTO_INCREMENT NOT NULL, gradeid BIGINT DEFAULT 0 NOT NULL, pageno BIGINT DEFAULT 0 NOT NULL, pathnamehash LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, isrotated TINYINT(1) DEFAULT 0 NOT NULL, degree BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passieditrot_gra_ix (gradeid), UNIQUE INDEX mdl_passieditrot_grapag_uix (gradeid, pageno), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores rotation information of a page.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignfeedback_file (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0 NOT NULL, numfiles BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passifile_ass2_ix (assignment), INDEX mdl_passifile_gra_ix (grade), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores info about the number of files submitted by a student' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignsubmission_file (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, submission BIGINT DEFAULT 0 NOT NULL, numfiles BIGINT DEFAULT 0 NOT NULL, INDEX mdl_passifile_ass_ix (assignment), INDEX mdl_passifile_sub_ix (submission), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about file submissions for assignments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_passignsubmission_onlinetext (id BIGINT AUTO_INCREMENT NOT NULL, assignment BIGINT DEFAULT 0 NOT NULL, submission BIGINT DEFAULT 0 NOT NULL, onlinetext LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, onlineformat SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_passionli_ass_ix (assignment), INDEX mdl_passionli_sub_ix (submission), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about onlinetext submission' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pauth_lti_linked_login (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, issuer LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, issuer256 VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sub VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sub256 VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pauthltilinklogi_use_ix (userid), UNIQUE INDEX mdl_pauthltilinklogi_useis_uix (userid, issuer256, sub256), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Accounts linked to a users Moodle account.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pauth_oauth2_linked_login (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, username VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, email LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, confirmtoken VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirmtokenexpires BIGINT DEFAULT NULL, INDEX mdl_pauthoautlinklogi_iss_ix (issuerid), INDEX mdl_pauthoautlinklogi_issus_ix (issuerid, username), INDEX mdl_pauthoautlinklogi_use2_ix (userid), INDEX mdl_pauthoautlinklogi_use_ix (usermodified), UNIQUE INDEX mdl_pauthoautlinklogi_usei_uix (userid, issuerid, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Accounts linked to a users Moodle account.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_paygw_paypal (id BIGINT AUTO_INCREMENT NOT NULL, paymentid BIGINT NOT NULL, pp_orderid VARCHAR(255) CHARACTER SET utf8 DEFAULT 'The ID of the order in PayPal' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_paygpayp_pay_uix (paymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores PayPal related information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_payment_accounts (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, archived TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_paymacco_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Payment accounts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_payment_gateways (id BIGINT AUTO_INCREMENT NOT NULL, accountid BIGINT NOT NULL, gateway VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, config LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_paymgate_acc_ix (accountid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Configuration for one gateway for one payment account' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_payments (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, paymentarea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, amount VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, currency VARCHAR(3) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, accountid BIGINT NOT NULL, gateway VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_paym_acc_ix (accountid), INDEX mdl_paym_compayite_ix (component, paymentarea, itemid), INDEX mdl_paym_gat_ix (gateway), INDEX mdl_paym_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about payments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbackup_controllers (id BIGINT AUTO_INCREMENT NOT NULL, backupid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, operation VARCHAR(20) CHARACTER SET utf8 DEFAULT 'backup' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, format VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, interactive SMALLINT NOT NULL, purpose SMALLINT NOT NULL, userid BIGINT NOT NULL, status SMALLINT NOT NULL, execution SMALLINT NOT NULL, executiontime BIGINT NOT NULL, checksum VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, progress NUMERIC(15, 14) DEFAULT '0.00000000000000' NOT NULL, controller LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pbackcont_bac_uix (backupid), INDEX mdl_pbackcont_typite_ix (type, itemid), INDEX mdl_pbackcont_use_ix (userid), INDEX mdl_pbackcont_useite_ix (userid, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store the backup_controllers as they are used' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbackup_courses (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, laststarttime BIGINT DEFAULT 0 NOT NULL, lastendtime BIGINT DEFAULT 0 NOT NULL, laststatus VARCHAR(1) CHARACTER SET utf8 DEFAULT '5' NOT NULL COLLATE `utf8_general_ci`, nextstarttime BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pbackcour_cou_uix (courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store every course backup status' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbackup_logs (id BIGINT AUTO_INCREMENT NOT NULL, backupid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, loglevel SMALLINT NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_pbacklogs_bac_ix (backupid), UNIQUE INDEX mdl_pbacklogs_bacid_uix (backupid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To store all the logs from backup and restore operations (by' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuername VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuerurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuercontact VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expiredate BIGINT DEFAULT NULL, expireperiod BIGINT DEFAULT NULL, type TINYINT(1) DEFAULT 1 NOT NULL, courseid BIGINT DEFAULT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messagesubject LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, attachment TINYINT(1) DEFAULT 1 NOT NULL, notification TINYINT(1) DEFAULT 1 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, nextcron BIGINT DEFAULT NULL, version VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, language VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthorname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthoremail VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imageauthorurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, imagecaption LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadg_cou_ix (courseid), INDEX mdl_pbadg_typ_ix (type), INDEX mdl_pbadg_use2_ix (usercreated), INDEX mdl_pbadg_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_alignment (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, targetname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, targeturl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, targetdescription LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetframework VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetcode VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadgalig_bad_ix (badgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines alignment for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_backpack (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, email VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, backpackuid BIGINT NOT NULL, autosync TINYINT(1) DEFAULT 0 NOT NULL, password VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, externalbackpackid BIGINT DEFAULT NULL, INDEX mdl_pbadgback_ext_ix (externalbackpackid), INDEX mdl_pbadgback_use_ix (userid), UNIQUE INDEX mdl_pbadgback_useext_uix (userid, externalbackpackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines settings for connecting external backpack' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_backpack_oauth2 (id BIGINT AUTO_INCREMENT NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, externalbackpackid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, refreshtoken LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT NULL, scope LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadgbackoaut_ext_ix (externalbackpackid), INDEX mdl_pbadgbackoaut_iss_ix (issuerid), INDEX mdl_pbadgbackoaut_use2_ix (userid), INDEX mdl_pbadgbackoaut_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_criteria (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT NULL, method TINYINT(1) DEFAULT 1 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pbadgcrit_bad_ix (badgeid), UNIQUE INDEX mdl_pbadgcrit_badcri_uix (badgeid, criteriatype), INDEX mdl_pbadgcrit_cri_ix (criteriatype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines criteria for issuing badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_criteria_met (id BIGINT AUTO_INCREMENT NOT NULL, issuedid BIGINT DEFAULT NULL, critid BIGINT NOT NULL, userid BIGINT NOT NULL, datemet BIGINT NOT NULL, INDEX mdl_pbadgcritmet_cri_ix (critid), INDEX mdl_pbadgcritmet_iss_ix (issuedid), INDEX mdl_pbadgcritmet_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines criteria that were met for an issued badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_criteria_param (id BIGINT AUTO_INCREMENT NOT NULL, critid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadgcritpara_cri_ix (critid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines parameters for badges criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_endorsement (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, issuername VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issuerurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, issueremail VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, claimid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, claimcomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dateissued BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pbadgendo_bad_ix (badgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines endorsement for badge' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_external (id BIGINT AUTO_INCREMENT NOT NULL, backpackid BIGINT NOT NULL, collectionid BIGINT NOT NULL, entityid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, assertion LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadgexte_bac_ix (backpackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting for external badges display' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_external_backpack (id BIGINT AUTO_INCREMENT NOT NULL, backpackapiurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, backpackweburl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, apiversion VARCHAR(12) CHARACTER SET utf8 DEFAULT '1.0' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, oauth2_issuerid BIGINT DEFAULT NULL, UNIQUE INDEX mdl_pbadgexteback_bac2_uix (backpackweburl), UNIQUE INDEX mdl_pbadgexteback_bac_uix (backpackapiurl), INDEX mdl_pbadgexteback_oau_ix (oauth2_issuerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines settings for site level backpacks that a user can co' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_external_identifier (id BIGINT AUTO_INCREMENT NOT NULL, sitebackpackid BIGINT NOT NULL, internalid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, externalid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbadgexteiden_sit_ix (sitebackpackid), UNIQUE INDEX mdl_pbadgexteiden_sitintex_uix (sitebackpackid, internalid, externalid, type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting for external badges mappings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_issued (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, uniquehash LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, dateissued BIGINT DEFAULT 0 NOT NULL, dateexpire BIGINT DEFAULT NULL, visible TINYINT(1) DEFAULT 0 NOT NULL, issuernotified BIGINT DEFAULT NULL, INDEX mdl_pbadgissu_bad_ix (badgeid), UNIQUE INDEX mdl_pbadgissu_baduse_uix (badgeid, userid), INDEX mdl_pbadgissu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines issued badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_manual_award (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT NOT NULL, recipientid BIGINT NOT NULL, issuerid BIGINT NOT NULL, issuerrole BIGINT NOT NULL, datemet BIGINT NOT NULL, INDEX mdl_pbadgmanuawar_bad_ix (badgeid), INDEX mdl_pbadgmanuawar_iss2_ix (issuerrole), INDEX mdl_pbadgmanuawar_iss_ix (issuerid), INDEX mdl_pbadgmanuawar_rec_ix (recipientid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Track manual award criteria for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbadge_related (id BIGINT AUTO_INCREMENT NOT NULL, badgeid BIGINT DEFAULT 0 NOT NULL, relatedbadgeid BIGINT DEFAULT NULL, INDEX mdl_pbadgrela_bad_ix (badgeid), UNIQUE INDEX mdl_pbadgrela_badrel_uix (badgeid, relatedbadgeid), INDEX mdl_pbadgrela_rel_ix (relatedbadgeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines badge related for badges' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbigbluebuttonbn (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 1 NOT NULL, meetingid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, moderatorpass VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, viewerpass VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, wait TINYINT(1) DEFAULT 0 NOT NULL, record TINYINT(1) DEFAULT 0 NOT NULL, recordallfromstart TINYINT(1) DEFAULT 0 NOT NULL, recordhidebutton TINYINT(1) DEFAULT 0 NOT NULL, welcome LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, voicebridge INT DEFAULT 0 NOT NULL, openingtime BIGINT DEFAULT 0 NOT NULL, closingtime BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, presentation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, participants LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userlimit SMALLINT DEFAULT 0 NOT NULL, recordings_html TINYINT(1) DEFAULT 0 NOT NULL, recordings_deleted TINYINT(1) DEFAULT 1 NOT NULL, recordings_imported TINYINT(1) DEFAULT 0 NOT NULL, recordings_preview TINYINT(1) DEFAULT 0 NOT NULL, clienttype TINYINT(1) DEFAULT 0 NOT NULL, muteonstart TINYINT(1) DEFAULT 0 NOT NULL, disablecam TINYINT(1) DEFAULT 0 NOT NULL, disablemic TINYINT(1) DEFAULT 0 NOT NULL, disableprivatechat TINYINT(1) DEFAULT 0 NOT NULL, disablepublicchat TINYINT(1) DEFAULT 0 NOT NULL, disablenote TINYINT(1) DEFAULT 0 NOT NULL, hideuserlist TINYINT(1) DEFAULT 0 NOT NULL, completionattendance INT DEFAULT 0 NOT NULL, completionengagementchats INT DEFAULT 0 NOT NULL, completionengagementtalks INT DEFAULT 0 NOT NULL, completionengagementraisehand INT DEFAULT 0 NOT NULL, completionengagementpollvotes INT DEFAULT 0 NOT NULL, completionengagementemojis INT DEFAULT 0 NOT NULL, guestallowed TINYINT(1) DEFAULT 0, mustapproveuser TINYINT(1) DEFAULT 1, guestlinkuid VARCHAR(1024) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, guestpassword VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store information about a meeti' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbigbluebuttonbn_logs (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, bigbluebuttonbnid BIGINT NOT NULL, userid BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, meetingid VARCHAR(256) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, log VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, meta LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbigblogs_cou_ix (courseid), INDEX mdl_pbigblogs_coubig_ix (courseid, bigbluebuttonbnid), INDEX mdl_pbigblogs_coubiguselog_ix (courseid, bigbluebuttonbnid, userid, log), INDEX mdl_pbigblogs_log_ix (log), INDEX mdl_pbigblogs_uselog_ix (userid, log), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store meeting activity events' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbigbluebuttonbn_recordings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, bigbluebuttonbnid BIGINT NOT NULL, groupid BIGINT DEFAULT NULL, recordingid VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, headless TINYINT(1) DEFAULT 0 NOT NULL, imported TINYINT(1) DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, importeddata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pbigbreco_big_ix (bigbluebuttonbnid), INDEX mdl_pbigbreco_cou_ix (courseid), INDEX mdl_pbigbreco_rec_ix (recordingid), INDEX mdl_pbigbreco_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The bigbluebuttonbn table to store references to recordings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cron BIGINT DEFAULT 0 NOT NULL, lastcron BIGINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_pbloc_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'contains all installed blocks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock_instances (id BIGINT AUTO_INCREMENT NOT NULL, blockname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parentcontextid BIGINT NOT NULL, showinsubcontexts SMALLINT NOT NULL, requiredbytheme SMALLINT DEFAULT 0 NOT NULL, pagetypepattern VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subpagepattern VARCHAR(16) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultregion VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaultweight BIGINT NOT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pblocinst_blo_ix (blockname), INDEX mdl_pblocinst_par_ix (parentcontextid), INDEX mdl_pblocinst_parshopagsub_ix (parentcontextid, showinsubcontexts, pagetypepattern, subpagepattern), INDEX mdl_pblocinst_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores block instances. The type of block this is' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock_positions (id BIGINT AUTO_INCREMENT NOT NULL, blockinstanceid BIGINT NOT NULL, contextid BIGINT NOT NULL, pagetype VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subpage VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible SMALLINT NOT NULL, region VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, weight BIGINT NOT NULL, INDEX mdl_pblocposi_blo_ix (blockinstanceid), UNIQUE INDEX mdl_pblocposi_bloconpagsub_uix (blockinstanceid, contextid, pagetype, subpage), INDEX mdl_pblocposi_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the position of a sticky block_instance on a another ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock_recent_activity (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT NOT NULL, timecreated BIGINT NOT NULL, userid BIGINT NOT NULL, action TINYINT(1) NOT NULL, modname VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pblocreceacti_coutim_ix (courseid, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Recent activity block' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock_recentlyaccesseditems (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT NOT NULL, userid BIGINT NOT NULL, timeaccess BIGINT NOT NULL, INDEX mdl_pblocrece_cmi_ix (cmid), INDEX mdl_pblocrece_cou_ix (courseid), INDEX mdl_pblocrece_use_ix (userid), UNIQUE INDEX mdl_pblocrece_usecoucmi_uix (userid, courseid, cmid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Most recently accessed items accessed by a user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblock_rss_client (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, title LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, preferredtitle VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, shared TINYINT(1) DEFAULT 0 NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, skiptime BIGINT DEFAULT 0 NOT NULL, skipuntil BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Remote news feed information. Contains the news feed id, the' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblog_association (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, blogid BIGINT NOT NULL, INDEX mdl_pblogasso_blo_ix (blogid), INDEX mdl_pblogasso_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Associations of blog entries with courses and module instanc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pblog_external (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, filtertags VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, failedlastsync TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT NULL, timefetched BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pblogexte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'External blog links used for RSS copying of blog entries to ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbook (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, numbering SMALLINT DEFAULT 0 NOT NULL, navstyle SMALLINT DEFAULT 1 NOT NULL, customtitles TINYINT(1) DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pbook_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines book' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pbook_chapters (id BIGINT AUTO_INCREMENT NOT NULL, bookid BIGINT DEFAULT 0 NOT NULL, pagenum BIGINT DEFAULT 0 NOT NULL, subchapter BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, hidden TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, importsrc VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pbookchap_boo_ix (bookid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines book_chapters' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcache_filters (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version BIGINT DEFAULT 0 NOT NULL, md5key VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rawtext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pcachfilt_filmd5_ix (filter, md5key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For keeping information about cached data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcache_flags (id BIGINT AUTO_INCREMENT NOT NULL, flagtype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expiry BIGINT NOT NULL, INDEX mdl_pcachflag_fla_ix (flagtype), INDEX mdl_pcachflag_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Cache of time-sensitive flags' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcapabilities (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, captype VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextlevel BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, riskbitmask BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pcapa_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines all capabilities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchat (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, keepdays BIGINT DEFAULT 0 NOT NULL, studentlogs SMALLINT DEFAULT 0 NOT NULL, chattime BIGINT DEFAULT 0 NOT NULL, schedule SMALLINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pchat_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each of these is a chat room' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchat_messages (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, issystem TINYINT(1) DEFAULT 0 NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timestamp BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pchatmess_cha_ix (chatid), INDEX mdl_pchatmess_gro_ix (groupid), INDEX mdl_pchatmess_timcha_ix (timestamp, chatid), INDEX mdl_pchatmess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all the actual chat messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchat_messages_current (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, issystem TINYINT(1) DEFAULT 0 NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timestamp BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pchatmesscurr_cha_ix (chatid), INDEX mdl_pchatmesscurr_gro_ix (groupid), INDEX mdl_pchatmesscurr_timcha_ix (timestamp, chatid), INDEX mdl_pchatmesscurr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores current session' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchat_users (id BIGINT AUTO_INCREMENT NOT NULL, chatid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, version VARCHAR(16) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstping BIGINT DEFAULT 0 NOT NULL, lastping BIGINT DEFAULT 0 NOT NULL, lastmessageping BIGINT DEFAULT 0 NOT NULL, sid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pchatuser_cha_ix (chatid), INDEX mdl_pchatuser_cou_ix (course), INDEX mdl_pchatuser_gro_ix (groupid), INDEX mdl_pchatuser_las_ix (lastping), INDEX mdl_pchatuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of which users are in which chat rooms' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchoice (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, publish TINYINT(1) DEFAULT 0 NOT NULL, showresults TINYINT(1) DEFAULT 0 NOT NULL, display SMALLINT DEFAULT 0 NOT NULL, allowupdate TINYINT(1) DEFAULT 0 NOT NULL, allowmultiple TINYINT(1) DEFAULT 0 NOT NULL, showunanswered TINYINT(1) DEFAULT 0 NOT NULL, includeinactive TINYINT(1) DEFAULT 1 NOT NULL, limitanswers TINYINT(1) DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, showpreview TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, showavailable TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pchoi_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Available choices are stored here' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchoice_answers (id BIGINT AUTO_INCREMENT NOT NULL, choiceid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, optionid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pchoiansw_cho_ix (choiceid), INDEX mdl_pchoiansw_opt_ix (optionid), INDEX mdl_pchoiansw_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'choices performed by users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pchoice_options (id BIGINT AUTO_INCREMENT NOT NULL, choiceid BIGINT DEFAULT 0 NOT NULL, text LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, maxanswers BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pchoiopti_cho_ix (choiceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'available options to choice' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcohort (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcoho_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record represents one cohort (aka site-wide group).' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcohort_members (id BIGINT AUTO_INCREMENT NOT NULL, cohortid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pcohomemb_coh_ix (cohortid), UNIQUE INDEX mdl_pcohomemb_cohuse_uix (cohortid, userid), INDEX mdl_pcohomemb_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a user to a cohort.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcomments (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentarea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format TINYINT(1) DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pcomm_concomite_ix (contextid, commentarea, itemid), INDEX mdl_pcomm_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle comments module' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcommunication (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, instanceid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, instancetype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, provider VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, roomname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, avatarfilename VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, active TINYINT(1) DEFAULT 1 NOT NULL, avatarsynced TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pcomm_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Communication records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcommunication_customlink (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcommcust_com_ix (commid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the link associated with a custom link communication ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcommunication_user (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, userid BIGINT NOT NULL, synced TINYINT(1) DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pcommuser_com_ix (commid), INDEX mdl_pcommuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Communication user records mapping' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, competencyframeworkid BIGINT NOT NULL, parentid BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT NOT NULL, ruletype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ruleoutcome TINYINT(1) DEFAULT 0 NOT NULL, ruleconfig LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, scaleconfiguration LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_pcomp_comidn_uix (competencyframeworkid, idnumber), INDEX mdl_pcomp_rul_ix (ruleoutcome), INDEX mdl_pcomp_sca_ix (scaleid), INDEX mdl_pcomp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains the master record of each competency in ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_coursecomp (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, competencyid BIGINT NOT NULL, ruleoutcome TINYINT(1) NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT NOT NULL, INDEX mdl_pcompcour_com_ix (competencyid), INDEX mdl_pcompcour_cou2_ix (courseid), UNIQUE INDEX mdl_pcompcour_coucom_uix (courseid, competencyid), INDEX mdl_pcompcour_courul_ix (courseid, ruleoutcome), INDEX mdl_pcompcour_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a course.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_coursecompsetting (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, pushratingstouserplans TINYINT(1) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_pcompcour_cou_uix (courseid), INDEX mdl_pcompcour_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains the course specific settings for compete' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_evidence (id BIGINT AUTO_INCREMENT NOT NULL, usercompetencyid BIGINT NOT NULL, contextid BIGINT NOT NULL, action TINYINT(1) NOT NULL, actionuserid BIGINT DEFAULT NULL, descidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, desccomponent VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, desca LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, url VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, grade BIGINT DEFAULT NULL, note LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompevid_act_ix (actionuserid), INDEX mdl_pcompevid_con_ix (contextid), INDEX mdl_pcompevid_use2_ix (usermodified), INDEX mdl_pcompevid_use_ix (usercompetencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The evidence linked to a user competency' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_framework (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, scaleid BIGINT DEFAULT NULL, scaleconfiguration LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, taxonomies VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_pcompfram_con_ix (contextid), UNIQUE INDEX mdl_pcompfram_idn_uix (idnumber), INDEX mdl_pcompfram_sca_ix (scaleid), INDEX mdl_pcompfram_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of competency frameworks.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_modulecomp (id BIGINT AUTO_INCREMENT NOT NULL, cmid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT NOT NULL, competencyid BIGINT NOT NULL, ruleoutcome TINYINT(1) NOT NULL, overridegrade TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pcompmodu_cmi_ix (cmid), UNIQUE INDEX mdl_pcompmodu_cmicom_uix (cmid, competencyid), INDEX mdl_pcompmodu_cmirul_ix (cmid, ruleoutcome), INDEX mdl_pcompmodu_com_ix (competencyid), INDEX mdl_pcompmodu_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a module.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_plan (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, userid BIGINT NOT NULL, templateid BIGINT DEFAULT NULL, origtemplateid BIGINT DEFAULT NULL, status TINYINT(1) NOT NULL, duedate BIGINT DEFAULT 0, reviewerid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompplan_stadue_ix (status, duedate), INDEX mdl_pcompplan_tem_ix (templateid), INDEX mdl_pcompplan_use_ix (usermodified), INDEX mdl_pcompplan_usesta_ix (userid, status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Learning plans' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_plancomp (id BIGINT AUTO_INCREMENT NOT NULL, planid BIGINT NOT NULL, competencyid BIGINT NOT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, UNIQUE INDEX mdl_pcompplan_placom_uix (planid, competencyid), INDEX mdl_pcompplan_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Plan competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_relatedcomp (id BIGINT AUTO_INCREMENT NOT NULL, competencyid BIGINT NOT NULL, relatedcompetencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcomprela_com_ix (competencyid), INDEX mdl_pcomprela_rel_ix (relatedcompetencyid), INDEX mdl_pcomprela_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Related competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_template (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, duedate BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_pcomptemp_con_ix (contextid), INDEX mdl_pcomptemp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Learning plan templates.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_templatecohort (id BIGINT AUTO_INCREMENT NOT NULL, templateid BIGINT NOT NULL, cohortid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcomptemp_tem2_ix (templateid), UNIQUE INDEX mdl_pcomptemp_temcoh_uix (templateid, cohortid), INDEX mdl_pcomptemp_use3_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_templatecomp (id BIGINT AUTO_INCREMENT NOT NULL, templateid BIGINT NOT NULL, competencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, sortorder BIGINT DEFAULT NULL, INDEX mdl_pcomptemp_com_ix (competencyid), INDEX mdl_pcomptemp_tem_ix (templateid), INDEX mdl_pcomptemp_use2_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a competency to a learning plan template.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_usercomp (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, competencyid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, reviewerid BIGINT DEFAULT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompuser_use_ix (usermodified), UNIQUE INDEX mdl_pcompuser_usecom_uix (userid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_usercompcourse (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, competencyid BIGINT NOT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompuser_use2_ix (usermodified), UNIQUE INDEX mdl_pcompuser_usecoucom_uix (userid, courseid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies in a course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_usercompplan (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, competencyid BIGINT NOT NULL, planid BIGINT NOT NULL, proficiency TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompuser_use3_ix (usermodified), UNIQUE INDEX mdl_pcompuser_usecompla_uix (userid, competencyid, planid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User competencies plans' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_userevidence (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompuser_use4_ix (userid), INDEX mdl_pcompuser_use5_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The evidence of prior learning' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcompetency_userevidencecomp (id BIGINT AUTO_INCREMENT NOT NULL, userevidenceid BIGINT NOT NULL, competencyid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, INDEX mdl_pcompuser_use6_ix (userevidenceid), INDEX mdl_pcompuser_use7_ix (usermodified), UNIQUE INDEX mdl_pcompuser_usecom2_uix (userevidenceid, competencyid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Relationship between user evidence and competencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pconfig (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pconf_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Moodle configuration variables' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pconfig_log (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, timemodified BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, oldvalue LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pconflog_tim_ix (timemodified), INDEX mdl_pconflog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Changes done in server configuration through admin UI' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pconfig_plugins (id BIGINT AUTO_INCREMENT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT 'core' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pconfplug_plunam_uix (plugin, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Moodle modules and plugins configuration variables' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcontentbank_content (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contenttype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, visibility TINYINT(1) DEFAULT 1 NOT NULL, instanceid BIGINT DEFAULT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, usercreated BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0, INDEX mdl_pcontcont_con_ix (contextid), INDEX mdl_pcontcont_conconins_ix (contextid, contenttype, instanceid), INDEX mdl_pcontcont_nam_ix (name), INDEX mdl_pcontcont_use2_ix (usercreated), INDEX mdl_pcontcont_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores content data in the content bank.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcontext (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel BIGINT DEFAULT 0 NOT NULL, instanceid BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, depth TINYINT(1) DEFAULT 0 NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pcont_conins_uix (contextlevel, instanceid), INDEX mdl_pcont_ins_ix (instanceid), INDEX mdl_pcont_pat_ix (path), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'one of these must be set' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcontext_temp (id BIGINT NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, depth TINYINT(1) NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Used by build_context_path() in upgrade and cron to keep con' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse (id BIGINT AUTO_INCREMENT NOT NULL, category BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, format VARCHAR(21) CHARACTER SET utf8 DEFAULT 'topics' NOT NULL COLLATE `utf8_general_ci`, showgrades TINYINT(1) DEFAULT 1 NOT NULL, newsitems INT DEFAULT 1 NOT NULL, startdate BIGINT DEFAULT 0 NOT NULL, enddate BIGINT DEFAULT 0 NOT NULL, relativedatesmode TINYINT(1) DEFAULT 0 NOT NULL, marker BIGINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, showreports SMALLINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, downloadcontent TINYINT(1) DEFAULT NULL, groupmode SMALLINT DEFAULT 0 NOT NULL, groupmodeforce SMALLINT DEFAULT 0 NOT NULL, defaultgroupingid BIGINT DEFAULT 0 NOT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, calendartype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, requested TINYINT(1) DEFAULT 0 NOT NULL, enablecompletion TINYINT(1) DEFAULT 0 NOT NULL, completionnotify TINYINT(1) DEFAULT 0 NOT NULL, cacherev BIGINT DEFAULT 0 NOT NULL, originalcourseid BIGINT DEFAULT NULL, showactivitydates TINYINT(1) DEFAULT 0 NOT NULL, showcompletionconditions TINYINT(1) DEFAULT NULL, pdfexportfont VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcour_cat_ix (category), INDEX mdl_pcour_idn_ix (idnumber), INDEX mdl_pcour_ori_ix (originalcourseid), INDEX mdl_pcour_sho_ix (shortname), INDEX mdl_pcour_sor_ix (sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Central course table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_categories (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, coursecount BIGINT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcourcate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_completion_aggr_methd (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT NULL, method TINYINT(1) DEFAULT 0 NOT NULL, value NUMERIC(10, 5) DEFAULT NULL, INDEX mdl_pcourcompaggrmeth_cou_ix (course), UNIQUE INDEX mdl_pcourcompaggrmeth_couc_uix (course, criteriatype), INDEX mdl_pcourcompaggrmeth_cri_ix (criteriatype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion aggregation methods for criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_completion_crit_compl (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriaid BIGINT DEFAULT 0 NOT NULL, gradefinal NUMERIC(10, 5) DEFAULT NULL, unenroled BIGINT DEFAULT NULL, timecompleted BIGINT DEFAULT NULL, INDEX mdl_pcourcompcritcomp_cou_ix (course), INDEX mdl_pcourcompcritcomp_cri_ix (criteriaid), INDEX mdl_pcourcompcritcomp_tim_ix (timecompleted), INDEX mdl_pcourcompcritcomp_use_ix (userid), UNIQUE INDEX mdl_pcourcompcritcomp_usec_uix (userid, course, criteriaid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion user records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_completion_criteria (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, criteriatype BIGINT DEFAULT 0 NOT NULL, module VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moduleinstance BIGINT DEFAULT NULL, courseinstance BIGINT DEFAULT NULL, enrolperiod BIGINT DEFAULT NULL, timeend BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT NULL, role BIGINT DEFAULT NULL, INDEX mdl_pcourcompcrit_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion criteria' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_completion_defaults (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, module BIGINT NOT NULL, completion TINYINT(1) DEFAULT 0 NOT NULL, completionview TINYINT(1) DEFAULT 0 NOT NULL, completionusegrade TINYINT(1) DEFAULT 0 NOT NULL, completionpassgrade TINYINT(1) DEFAULT 0 NOT NULL, completionexpected BIGINT DEFAULT 0 NOT NULL, customrules LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcourcompdefa_cou_ix (course), UNIQUE INDEX mdl_pcourcompdefa_coumod_uix (course, module), INDEX mdl_pcourcompdefa_mod_ix (module), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default settings for activities completion' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_completions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, course BIGINT DEFAULT 0 NOT NULL, timeenrolled BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT 0 NOT NULL, timecompleted BIGINT DEFAULT NULL, reaggregate BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pcourcomp_cou_ix (course), INDEX mdl_pcourcomp_tim_ix (timecompleted), INDEX mdl_pcourcomp_use_ix (userid), UNIQUE INDEX mdl_pcourcomp_usecou_uix (userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Course completion records' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_format_options (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, format VARCHAR(21) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sectionid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcourformopti_cou_ix (courseid), UNIQUE INDEX mdl_pcourformopti_couforse_uix (courseid, format, sectionid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores format-specific options for the course or course sect' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_modules (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, module BIGINT DEFAULT 0 NOT NULL, instance BIGINT DEFAULT 0 NOT NULL, section BIGINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, added BIGINT DEFAULT 0 NOT NULL, score SMALLINT DEFAULT 0 NOT NULL, indent INT DEFAULT 0 NOT NULL, visible TINYINT(1) DEFAULT 1 NOT NULL, visibleoncoursepage TINYINT(1) DEFAULT 1 NOT NULL, visibleold TINYINT(1) DEFAULT 1 NOT NULL, groupmode SMALLINT DEFAULT 0 NOT NULL, groupingid BIGINT DEFAULT 0 NOT NULL, completion TINYINT(1) DEFAULT 0 NOT NULL, completiongradeitemnumber BIGINT DEFAULT NULL, completionview TINYINT(1) DEFAULT 0 NOT NULL, completionexpected BIGINT DEFAULT 0 NOT NULL, completionpassgrade TINYINT(1) DEFAULT 0 NOT NULL, showdescription TINYINT(1) DEFAULT 0 NOT NULL, availability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, deletioninprogress TINYINT(1) DEFAULT 0 NOT NULL, downloadcontent TINYINT(1) DEFAULT 1, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcourmodu_cou_ix (course), INDEX mdl_pcourmodu_gro_ix (groupingid), INDEX mdl_pcourmodu_idncou_ix (idnumber, course), INDEX mdl_pcourmodu_ins_ix (instance), INDEX mdl_pcourmodu_mod_ix (module), INDEX mdl_pcourmodu_vis_ix (visible), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'course_modules table retrofitted from MySQL' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_modules_completion (id BIGINT AUTO_INCREMENT NOT NULL, coursemoduleid BIGINT NOT NULL, userid BIGINT NOT NULL, completionstate TINYINT(1) NOT NULL, overrideby BIGINT DEFAULT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pcourmoducomp_cou_ix (coursemoduleid), UNIQUE INDEX mdl_pcourmoducomp_usecou_uix (userid, coursemoduleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the completion state (completed or not completed, etc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_modules_viewed (id BIGINT AUTO_INCREMENT NOT NULL, coursemoduleid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pcourmoduview_cou_ix (coursemoduleid), UNIQUE INDEX mdl_pcourmoduview_usecou_uix (userid, coursemoduleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks the completion viewed (viewed with cmid/userid and ot' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_published (id BIGINT AUTO_INCREMENT NOT NULL, huburl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, courseid BIGINT NOT NULL, timepublished BIGINT NOT NULL, enrollable TINYINT(1) DEFAULT 1 NOT NULL, hubcourseid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0, timechecked BIGINT DEFAULT NULL, INDEX mdl_pcourpubl_cou_ix (courseid), INDEX mdl_pcourpubl_hub_ix (hubcourseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about how and when an local courses were publish' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_request (id BIGINT AUTO_INCREMENT NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, category BIGINT DEFAULT 0 NOT NULL, reason LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, requester BIGINT DEFAULT 0 NOT NULL, password VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pcourrequ_sho_ix (shortname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'course requests' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcourse_sections (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, section BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, sequence LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, availability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pcoursect_cousec_uix (course, section), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'to define the sections for each course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcustomfield_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(400) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, area VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT NULL, INDEX mdl_pcustcate_comareitesor_ix (component, area, itemid, sortorder), INDEX mdl_pcustcate_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield category table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcustomfield_data (id BIGINT AUTO_INCREMENT NOT NULL, fieldid BIGINT NOT NULL, instanceid BIGINT NOT NULL, intvalue BIGINT DEFAULT NULL, decvalue NUMERIC(10, 5) DEFAULT NULL, shortcharvalue VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, charvalue VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, valueformat BIGINT NOT NULL, valuetrust TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, INDEX mdl_pcustdata_con_ix (contextid), INDEX mdl_pcustdata_fie_ix (fieldid), INDEX mdl_pcustdata_fiedec_ix (fieldid, decvalue), INDEX mdl_pcustdata_fieint_ix (fieldid, intvalue), INDEX mdl_pcustdata_fiesho_ix (fieldid, shortcharvalue), UNIQUE INDEX mdl_pcustdata_insfie_uix (instanceid, fieldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield data table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pcustomfield_field (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(400) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat BIGINT DEFAULT NULL, sortorder BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pcustfiel_cat_ix (categoryid), INDEX mdl_pcustfiel_catsor_ix (categoryid, sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'core_customfield field table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pdata (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, comments SMALLINT DEFAULT 0 NOT NULL, timeavailablefrom BIGINT DEFAULT 0 NOT NULL, timeavailableto BIGINT DEFAULT 0 NOT NULL, timeviewfrom BIGINT DEFAULT 0 NOT NULL, timeviewto BIGINT DEFAULT 0 NOT NULL, requiredentries INT DEFAULT 0 NOT NULL, requiredentriestoview INT DEFAULT 0 NOT NULL, maxentries INT DEFAULT 0 NOT NULL, rssarticles SMALLINT DEFAULT 0 NOT NULL, singletemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplateheader LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, listtemplatefooter LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, addtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rsstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rsstitletemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, csstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, jstemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, asearchtemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, approval SMALLINT DEFAULT 0 NOT NULL, manageapproved SMALLINT DEFAULT 1 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, defaultsort BIGINT DEFAULT 0 NOT NULL, defaultsortdir SMALLINT DEFAULT 0 NOT NULL, editany SMALLINT DEFAULT 0 NOT NULL, notification BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, config LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, completionentries BIGINT DEFAULT 0, INDEX mdl_pdata_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all database activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pdata_content (id BIGINT AUTO_INCREMENT NOT NULL, fieldid BIGINT DEFAULT 0 NOT NULL, recordid BIGINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pdatacont_fie_ix (fieldid), INDEX mdl_pdatacont_rec_ix (recordid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the content introduced in each record/fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pdata_fields (id BIGINT AUTO_INCREMENT NOT NULL, dataid BIGINT DEFAULT 0 NOT NULL, type VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, required TINYINT(1) DEFAULT 0 NOT NULL, param1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param5 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param6 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param7 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param8 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param9 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param10 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pdatafiel_dat_ix (dataid), INDEX mdl_pdatafiel_typdat_ix (type, dataid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'every field available' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pdata_records (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, dataid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, approved SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_pdatareco_dat_ix (dataid), INDEX mdl_pdatareco_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'every record introduced' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_peditor_atto_autosave (id BIGINT AUTO_INCREMENT NOT NULL, elementid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, pagehash VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, drafttext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, draftid BIGINT DEFAULT NULL, pageinstance VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_peditattoauto_eleconus_uix (elementid, contextid, userid, pagehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Draft text that is auto-saved every 5 seconds while an edito' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol (id BIGINT AUTO_INCREMENT NOT NULL, enrol VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, courseid BIGINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enrolperiod BIGINT DEFAULT 0, enrolstartdate BIGINT DEFAULT 0, enrolenddate BIGINT DEFAULT 0, expirynotify TINYINT(1) DEFAULT 0, expirythreshold BIGINT DEFAULT 0, notifyall TINYINT(1) DEFAULT 0, password VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, cost VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, currency VARCHAR(3) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, roleid BIGINT DEFAULT 0, customint1 BIGINT DEFAULT NULL, customint2 BIGINT DEFAULT NULL, customint3 BIGINT DEFAULT NULL, customint4 BIGINT DEFAULT NULL, customint5 BIGINT DEFAULT NULL, customint6 BIGINT DEFAULT NULL, customint7 BIGINT DEFAULT NULL, customint8 BIGINT DEFAULT NULL, customchar1 VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customchar2 VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customchar3 VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customdec1 NUMERIC(12, 7) DEFAULT NULL, customdec2 NUMERIC(12, 7) DEFAULT NULL, customtext1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customtext4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_penro_cou_ix (courseid), INDEX mdl_penro_enr_ix (enrol), INDEX mdl_penro_rol_ix (roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Instances of enrolment plugins used in courses, fields marke' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_flatfile (id BIGINT AUTO_INCREMENT NOT NULL, action VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, roleid BIGINT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_penroflat_cou_ix (courseid), INDEX mdl_penroflat_rol_ix (roleid), INDEX mdl_penroflat_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'enrol_flatfile table retrofitted from MySQL' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_app_registration (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, clientid VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uniqueid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformclienthash VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, platformuniqueidhash VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, authenticationrequesturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, jwksurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, accesstokenurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_penroltiappregi_pla2_uix (platformuniqueidhash), UNIQUE INDEX mdl_penroltiappregi_pla_uix (platformclienthash), UNIQUE INDEX mdl_penroltiappregi_uni_uix (uniqueid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Details of each application that has been registered with th' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_context (id BIGINT AUTO_INCREMENT NOT NULL, contextid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT NOT NULL, type LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_penrolticont_lti_ix (ltideploymentid), UNIQUE INDEX mdl_penrolticont_lticon_uix (ltideploymentid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a context in the platform, where resourc' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_deployment (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, deploymentid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platformid BIGINT NOT NULL, legacyconsumerkey VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_penroltidepl_pla_ix (platformid), UNIQUE INDEX mdl_penroltidepl_pladep_uix (platformid, deploymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a deployment of a tool within a platform' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_consumer (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerkey256 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerkey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1024) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumername VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumerversion VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumerguid VARCHAR(1024) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, profile LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, toolproxy LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) NOT NULL, enabled TINYINT(1) NOT NULL, enablefrom BIGINT DEFAULT NULL, enableuntil BIGINT DEFAULT NULL, lastaccess BIGINT DEFAULT NULL, created BIGINT NOT NULL, updated BIGINT NOT NULL, UNIQUE INDEX mdl_penroltilti2cons_con_uix (consumerkey256), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI consumers interacting with moodle' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_context (id BIGINT AUTO_INCREMENT NOT NULL, consumerid BIGINT NOT NULL, lticontextkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_penroltilti2cont_con_ix (consumerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about a specific LTI contexts from the consumers' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_nonce (id BIGINT AUTO_INCREMENT NOT NULL, consumerid BIGINT NOT NULL, value VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT NOT NULL, INDEX mdl_penroltilti2nonc_con_ix (consumerid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Nonce used for authentication between moodle and a consumer' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT DEFAULT NULL, consumerid BIGINT DEFAULT NULL, ltiresourcelinkkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, primaryresourcelinkid BIGINT DEFAULT NULL, shareapproved TINYINT(1) DEFAULT NULL, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_penroltilti2resolink_c2_ix (consumerid), INDEX mdl_penroltilti2resolink_co_ix (contextid), INDEX mdl_penroltilti2resolink_pr_ix (primaryresourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link from the consumer to the tool' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_share_key (id BIGINT AUTO_INCREMENT NOT NULL, sharekey VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, resourcelinkid BIGINT NOT NULL, autoapprove TINYINT(1) NOT NULL, expires BIGINT NOT NULL, UNIQUE INDEX mdl_penroltilti2sharkey_re_uix (resourcelinkid), UNIQUE INDEX mdl_penroltilti2sharkey_sh_uix (sharekey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Resource link share key' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_tool_proxy (id BIGINT AUTO_INCREMENT NOT NULL, toolproxykey VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, consumerid BIGINT NOT NULL, toolproxy LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_penroltilti2toolprox_co_ix (consumerid), UNIQUE INDEX mdl_penroltilti2toolprox_t_uix (toolproxykey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A tool proxy between moodle and a consumer' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_lti2_user_result (id BIGINT AUTO_INCREMENT NOT NULL, resourcelinkid BIGINT NOT NULL, ltiuserkey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltiresultsourcedid VARCHAR(1024) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, created BIGINT NOT NULL, updated BIGINT NOT NULL, INDEX mdl_penroltilti2userresu_re_ix (resourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Results for each user for each resource link' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, resourcelinkid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT NOT NULL, resourceid BIGINT NOT NULL, lticontextid BIGINT DEFAULT NULL, lineitemsservice VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lineitemservice VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lineitemscope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultscope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scorescope VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextmembershipsurl VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, nrpsserviceversions VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_penroltiresolink_lti2_ix (lticontextid), INDEX mdl_penroltiresolink_lti_ix (ltideploymentid), UNIQUE INDEX mdl_penroltiresolink_reslt_uix (resourcelinkid, ltideploymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row represents a resource link for a platform and deplo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_tool_consumer_map (id BIGINT AUTO_INCREMENT NOT NULL, toolid BIGINT NOT NULL, consumerid BIGINT NOT NULL, INDEX mdl_penroltitoolconsmap_con_ix (consumerid), INDEX mdl_penroltitoolconsmap_too_ix (toolid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table that maps the published tool to tool consumers.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_tools (id BIGINT AUTO_INCREMENT NOT NULL, enrolid BIGINT NOT NULL, contextid BIGINT NOT NULL, ltiversion VARCHAR(15) CHARACTER SET utf8 DEFAULT 'LTI-1p3' NOT NULL COLLATE `utf8_general_ci`, institution VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT 'en' NOT NULL COLLATE `utf8_general_ci`, timezone VARCHAR(100) CHARACTER SET utf8 DEFAULT '99' NOT NULL COLLATE `utf8_general_ci`, maxenrolled BIGINT DEFAULT 0 NOT NULL, maildisplay TINYINT(1) DEFAULT 2 NOT NULL, city VARCHAR(120) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, country VARCHAR(2) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, gradesync TINYINT(1) DEFAULT 0 NOT NULL, gradesynccompletion TINYINT(1) DEFAULT 0 NOT NULL, membersync TINYINT(1) DEFAULT 0 NOT NULL, membersyncmode TINYINT(1) DEFAULT 0 NOT NULL, roleinstructor BIGINT NOT NULL, rolelearner BIGINT NOT NULL, secret LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uuid VARCHAR(36) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, provisioningmodelearner TINYINT(1) DEFAULT NULL, provisioningmodeinstructor TINYINT(1) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_penroltitool_con_ix (contextid), INDEX mdl_penroltitool_enr_ix (enrolid), UNIQUE INDEX mdl_penroltitool_uui_uix (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of tools provided to the remote system' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_user_resource_link (id BIGINT AUTO_INCREMENT NOT NULL, ltiuserid BIGINT NOT NULL, resourcelinkid BIGINT NOT NULL, UNIQUE INDEX mdl_penroltiuserresolink_l_uix (ltiuserid, resourcelinkid), INDEX mdl_penroltiuserresolink_lt_ix (ltiuserid), INDEX mdl_penroltiuserresolink_re_ix (resourcelinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Join table mapping users to resource links as this is a many' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_lti_users (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, toolid BIGINT NOT NULL, serviceurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sourceid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ltideploymentid BIGINT DEFAULT NULL, consumerkey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, consumersecret LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, membershipsurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, membershipsid LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastgrade NUMERIC(10, 5) DEFAULT NULL, lastaccess BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_penroltiuser_lti_ix (ltideploymentid), INDEX mdl_penroltiuser_too_ix (toolid), INDEX mdl_penroltiuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'User access log and gradeback data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_penrol_paypal (id BIGINT AUTO_INCREMENT NOT NULL, business VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, receiver_email VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, receiver_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, item_name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, instanceid BIGINT DEFAULT 0 NOT NULL, memo VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, tax VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_name1 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_selection1_x VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_name2 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, option_selection2_x VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, payment_status VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pending_reason VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, reason_code VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, txn_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent_txn_id VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, payment_type VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timeupdated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_penropayp_bus_ix (business), INDEX mdl_penropayp_cou_ix (courseid), INDEX mdl_penropayp_ins_ix (instanceid), INDEX mdl_penropayp_rec_ix (receiver_email), INDEX mdl_penropayp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Holds all known information about PayPal transactions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pevent (id BIGINT AUTO_INCREMENT NOT NULL, name LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format SMALLINT DEFAULT 0 NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, repeatid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, modulename VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, instance BIGINT DEFAULT 0 NOT NULL, type SMALLINT DEFAULT 0 NOT NULL, eventtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timestart BIGINT DEFAULT 0 NOT NULL, timeduration BIGINT DEFAULT 0 NOT NULL, timesort BIGINT DEFAULT NULL, visible SMALLINT DEFAULT 1 NOT NULL, uuid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sequence BIGINT DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, subscriptionid BIGINT DEFAULT NULL, priority BIGINT DEFAULT NULL, location LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_peven_cat_ix (categoryid), INDEX mdl_peven_comeveins_ix (component, eventtype, instance), INDEX mdl_peven_cou_ix (courseid), INDEX mdl_peven_eve_ix (eventtype), INDEX mdl_peven_grocoucatvisuse_ix (groupid, courseid, categoryid, visible, userid), INDEX mdl_peven_modinseve_ix (modulename, instance, eventtype), INDEX mdl_peven_sub_ix (subscriptionid), INDEX mdl_peven_tim2_ix (timeduration), INDEX mdl_peven_tim_ix (timestart), INDEX mdl_peven_typtim_ix (type, timesort), INDEX mdl_peven_use_ix (userid), INDEX mdl_peven_uui_ix (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For everything with a time associated to it' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pevent_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, categoryid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, eventtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pollinterval BIGINT DEFAULT 0 NOT NULL, lastupdated BIGINT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pevensubs_cou_ix (courseid), INDEX mdl_pevensubs_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks subscriptions to remote calendars.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pevents_handlers (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, handlerfile VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, handlerfunction LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, schedule VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, internal TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_pevenhand_evecom_uix (eventname, component), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table is for storing which components requests what typ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pevents_queue (id BIGINT AUTO_INCREMENT NOT NULL, eventdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, stackdump LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pevenqueu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table is for storing queued events. It stores only one ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pevents_queue_handlers (id BIGINT AUTO_INCREMENT NOT NULL, queuedeventid BIGINT NOT NULL, handlerid BIGINT NOT NULL, status BIGINT DEFAULT NULL, errormessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, INDEX mdl_pevenqueuhand_han_ix (handlerid), INDEX mdl_pevenqueuhand_que_ix (queuedeventid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This is the list of queued handlers for processing. The even' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pexternal_functions (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, methodname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classpath VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, capabilities VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, services VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pextefunc_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'list of all external functions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pexternal_services (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, requiredcapability VARCHAR(150) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, restrictedusers TINYINT(1) NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, downloadfiles TINYINT(1) DEFAULT 0 NOT NULL, uploadfiles TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pexteserv_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'built in and custom external services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pexternal_services_functions (id BIGINT AUTO_INCREMENT NOT NULL, externalserviceid BIGINT NOT NULL, functionname VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pexteservfunc_ext_ix (externalserviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'lists functions available in each service group' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pexternal_services_users (id BIGINT AUTO_INCREMENT NOT NULL, externalserviceid BIGINT NOT NULL, userid BIGINT NOT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_pexteservuser_ext_ix (externalserviceid), INDEX mdl_pexteservuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'users allowed to use services with restricted users flag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pexternal_tokens (id BIGINT AUTO_INCREMENT NOT NULL, token VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, privatetoken VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tokentype SMALLINT NOT NULL, userid BIGINT NOT NULL, externalserviceid BIGINT NOT NULL, sid VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, creatorid BIGINT DEFAULT 1 NOT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, lastaccess BIGINT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pextetoke_con_ix (contextid), INDEX mdl_pextetoke_cre_ix (creatorid), INDEX mdl_pextetoke_ext_ix (externalserviceid), INDEX mdl_pextetoke_sid_ix (sid), INDEX mdl_pextetoke_tok_ix (token), INDEX mdl_pextetoke_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Security tokens for accessing of external services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfavourite (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, contextid BIGINT NOT NULL, userid BIGINT NOT NULL, ordering BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_pfavo_comiteiteconuse_uix (component, itemtype, itemid, contextid, userid), INDEX mdl_pfavo_con_ix (contextid), INDEX mdl_pfavo_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the relationship between an arbitrary item (itemtype,' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, anonymous TINYINT(1) DEFAULT 1 NOT NULL, email_notification TINYINT(1) DEFAULT 1 NOT NULL, multiple_submit TINYINT(1) DEFAULT 1 NOT NULL, autonumbering TINYINT(1) DEFAULT 1 NOT NULL, site_after_submit VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, page_after_submit LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, page_after_submitformat TINYINT(1) DEFAULT 0 NOT NULL, publish_stats TINYINT(1) DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pfeed_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all feedbacks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_completed (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, random_response BIGINT DEFAULT 0 NOT NULL, anonymous_response TINYINT(1) DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pfeedcomp_cou_ix (courseid), INDEX mdl_pfeedcomp_fee_ix (feedback), INDEX mdl_pfeedcomp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'filled out feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_completedtmp (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, guestid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, random_response BIGINT DEFAULT 0 NOT NULL, anonymous_response TINYINT(1) DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pfeedcomp_fee2_ix (feedback), INDEX mdl_pfeedcomp_use2_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'filled out feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_item (id BIGINT AUTO_INCREMENT NOT NULL, feedback BIGINT DEFAULT 0 NOT NULL, template BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, label VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, presentation LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, typ VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hasvalue TINYINT(1) DEFAULT 0 NOT NULL, position SMALLINT DEFAULT 0 NOT NULL, required TINYINT(1) DEFAULT 0 NOT NULL, dependitem BIGINT DEFAULT 0 NOT NULL, dependvalue VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pfeeditem_fee_ix (feedback), INDEX mdl_pfeeditem_tem_ix (template), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'feedback_items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_sitecourse_map (id BIGINT AUTO_INCREMENT NOT NULL, feedbackid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pfeedsitemap_cou_ix (courseid), INDEX mdl_pfeedsitemap_fee_ix (feedbackid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'feedback sitecourse map' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_template (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, ispublic TINYINT(1) DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pfeedtemp_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'templates of feedbackstructures' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_value (id BIGINT AUTO_INCREMENT NOT NULL, course_id BIGINT DEFAULT 0 NOT NULL, item BIGINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, tmp_completed BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pfeedvalu_comitecou_uix (completed, item, course_id), INDEX mdl_pfeedvalu_cou_ix (course_id), INDEX mdl_pfeedvalu_ite_ix (item), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'values of the completeds' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfeedback_valuetmp (id BIGINT AUTO_INCREMENT NOT NULL, course_id BIGINT DEFAULT 0 NOT NULL, item BIGINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, tmp_completed BIGINT DEFAULT 0 NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pfeedvalu_comitecou2_uix (completed, item, course_id), INDEX mdl_pfeedvalu_cou2_ix (course_id), INDEX mdl_pfeedvalu_ite2_ix (item), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'values of the completedstmp' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfile_conversion (id BIGINT AUTO_INCREMENT NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, sourcefileid BIGINT NOT NULL, targetformat VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0, statusmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, converter VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, destfileid BIGINT DEFAULT NULL, data LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pfileconv_des_ix (destfileid), INDEX mdl_pfileconv_sou_ix (sourcefileid), INDEX mdl_pfileconv_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to track file conversions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfiles (id BIGINT AUTO_INCREMENT NOT NULL, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pathnamehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filearea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, filepath VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, filesize BIGINT NOT NULL, mimetype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status BIGINT DEFAULT 0 NOT NULL, source LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, author VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, license VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, referencefileid BIGINT DEFAULT NULL, INDEX mdl_pfile_comfilconite_ix (component, filearea, contextid, itemid), INDEX mdl_pfile_con2_ix (contextid), INDEX mdl_pfile_con_ix (contenthash), INDEX mdl_pfile_fil_ix (filename), INDEX mdl_pfile_lic_ix (license), UNIQUE INDEX mdl_pfile_pat_uix (pathnamehash), INDEX mdl_pfile_ref_ix (referencefileid), INDEX mdl_pfile_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'description of files, content is stored in sha1 file pool' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfiles_reference (id BIGINT AUTO_INCREMENT NOT NULL, repositoryid BIGINT NOT NULL, lastsync BIGINT DEFAULT NULL, reference LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, referencehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pfilerefe_refrep_uix (referencehash, repositoryid), INDEX mdl_pfilerefe_rep_ix (repositoryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store files references' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfilter_active (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, active SMALLINT NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pfiltacti_con_ix (contextid), UNIQUE INDEX mdl_pfiltacti_confil_uix (contextid, filter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about which filters are active in which c' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfilter_config (id BIGINT AUTO_INCREMENT NOT NULL, filter VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pfiltconf_con_ix (contextid), UNIQUE INDEX mdl_pfiltconf_confilnam_uix (contextid, filter, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores per-context configuration settings for filters which ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pfolder (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, display SMALLINT DEFAULT 0 NOT NULL, showexpanded TINYINT(1) DEFAULT 1 NOT NULL, showdownloadfolder TINYINT(1) DEFAULT 1 NOT NULL, forcedownload TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_pfold_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one folder resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, type VARCHAR(20) CHARACTER SET utf8 DEFAULT 'general' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, duedate BIGINT DEFAULT 0 NOT NULL, cutoffdate BIGINT DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, grade_forum BIGINT DEFAULT 0 NOT NULL, grade_forum_notify SMALLINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, maxattachments BIGINT DEFAULT 1 NOT NULL, forcesubscribe TINYINT(1) DEFAULT 0 NOT NULL, trackingtype TINYINT(1) DEFAULT 1 NOT NULL, rsstype TINYINT(1) DEFAULT 0 NOT NULL, rssarticles TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, warnafter BIGINT DEFAULT 0 NOT NULL, blockafter BIGINT DEFAULT 0 NOT NULL, blockperiod BIGINT DEFAULT 0 NOT NULL, completiondiscussions INT DEFAULT 0 NOT NULL, completionreplies INT DEFAULT 0 NOT NULL, completionposts INT DEFAULT 0 NOT NULL, displaywordcount TINYINT(1) DEFAULT 0 NOT NULL, lockdiscussionafter BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforu_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Forums contain and structure discussion' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_digests (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, forum BIGINT NOT NULL, maildigest TINYINT(1) DEFAULT -1 NOT NULL, INDEX mdl_pforudige_for_ix (forum), UNIQUE INDEX mdl_pforudige_forusemai_uix (forum, userid, maildigest), INDEX mdl_pforudige_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of user mail delivery preferences for each forum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_discussion_subs (id BIGINT AUTO_INCREMENT NOT NULL, forum BIGINT NOT NULL, userid BIGINT NOT NULL, discussion BIGINT NOT NULL, preference BIGINT DEFAULT 1 NOT NULL, INDEX mdl_pforudiscsubs_dis_ix (discussion), INDEX mdl_pforudiscsubs_for_ix (forum), INDEX mdl_pforudiscsubs_use_ix (userid), UNIQUE INDEX mdl_pforudiscsubs_usedis_uix (userid, discussion), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users may choose to subscribe and unsubscribe from specific ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_discussions (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, forum BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstpost BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT -1 NOT NULL, assessed TINYINT(1) DEFAULT 1 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, pinned TINYINT(1) DEFAULT 0 NOT NULL, timelocked BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforudisc_cou_ix (course), INDEX mdl_pforudisc_for_ix (forum), INDEX mdl_pforudisc_use2_ix (usermodified), INDEX mdl_pforudisc_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Forums are composed of discussions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_grades (id BIGINT AUTO_INCREMENT NOT NULL, forum BIGINT NOT NULL, itemnumber BIGINT NOT NULL, userid BIGINT NOT NULL, grade NUMERIC(10, 5) DEFAULT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pforugrad_for_ix (forum), UNIQUE INDEX mdl_pforugrad_foriteuse_uix (forum, itemnumber, userid), INDEX mdl_pforugrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading data for forum instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_posts (id BIGINT AUTO_INCREMENT NOT NULL, discussion BIGINT DEFAULT 0 NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, created BIGINT DEFAULT 0 NOT NULL, modified BIGINT DEFAULT 0 NOT NULL, mailed TINYINT(1) DEFAULT 0 NOT NULL, subject VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messageformat TINYINT(1) DEFAULT 0 NOT NULL, messagetrust TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, totalscore SMALLINT DEFAULT 0 NOT NULL, mailnow BIGINT DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, privatereplyto BIGINT DEFAULT 0 NOT NULL, wordcount BIGINT DEFAULT NULL, charcount BIGINT DEFAULT NULL, INDEX mdl_pforupost_cre_ix (created), INDEX mdl_pforupost_dis_ix (discussion), INDEX mdl_pforupost_mai_ix (mailed), INDEX mdl_pforupost_par_ix (parent), INDEX mdl_pforupost_pri_ix (privatereplyto), INDEX mdl_pforupost_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'All posts are stored in this table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_queue (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, discussionid BIGINT DEFAULT 0 NOT NULL, postid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforuqueu_dis_ix (discussionid), INDEX mdl_pforuqueu_pos_ix (postid), INDEX mdl_pforuqueu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For keeping track of posts that will be mailed in digest for' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_read (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forumid BIGINT DEFAULT 0 NOT NULL, discussionid BIGINT DEFAULT 0 NOT NULL, postid BIGINT DEFAULT 0 NOT NULL, firstread BIGINT DEFAULT 0 NOT NULL, lastread BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforuread_disuse_ix (discussionid, userid), INDEX mdl_pforuread_foruse_ix (forumid, userid), INDEX mdl_pforuread_posuse_ix (postid, userid), INDEX mdl_pforuread_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks each users read posts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forum BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforusubs_for_ix (forum), INDEX mdl_pforusubs_use_ix (userid), UNIQUE INDEX mdl_pforusubs_usefor_uix (userid, forum), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of who is subscribed to what forum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pforum_track_prefs (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, forumid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pforutracpref_usefor_ix (userid, forumid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks each users untracked forums' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, allowduplicatedentries TINYINT(1) DEFAULT 0 NOT NULL, displayformat VARCHAR(50) CHARACTER SET utf8 DEFAULT 'dictionary' NOT NULL COLLATE `utf8_general_ci`, mainglossary TINYINT(1) DEFAULT 0 NOT NULL, showspecial TINYINT(1) DEFAULT 1 NOT NULL, showalphabet TINYINT(1) DEFAULT 1 NOT NULL, showall TINYINT(1) DEFAULT 1 NOT NULL, allowcomments TINYINT(1) DEFAULT 0 NOT NULL, allowprintview TINYINT(1) DEFAULT 1 NOT NULL, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, defaultapproval TINYINT(1) DEFAULT 1 NOT NULL, approvaldisplayformat VARCHAR(50) CHARACTER SET utf8 DEFAULT 'default' NOT NULL COLLATE `utf8_general_ci`, globalglossary TINYINT(1) DEFAULT 0 NOT NULL, entbypage SMALLINT DEFAULT 10 NOT NULL, editalways TINYINT(1) DEFAULT 0 NOT NULL, rsstype TINYINT(1) DEFAULT 0 NOT NULL, rssarticles TINYINT(1) DEFAULT 0 NOT NULL, assessed BIGINT DEFAULT 0 NOT NULL, assesstimestart BIGINT DEFAULT 0 NOT NULL, assesstimefinish BIGINT DEFAULT 0 NOT NULL, scale BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionentries INT DEFAULT 0 NOT NULL, INDEX mdl_pglos_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all glossaries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary_alias (id BIGINT AUTO_INCREMENT NOT NULL, entryid BIGINT DEFAULT 0 NOT NULL, alias VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pglosalia_ent_ix (entryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'entries alias' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary_categories (id BIGINT AUTO_INCREMENT NOT NULL, glossaryid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_pgloscate_glo_ix (glossaryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all categories for glossary entries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary_entries (id BIGINT AUTO_INCREMENT NOT NULL, glossaryid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, concept VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, definition LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, definitionformat TINYINT(1) DEFAULT 0 NOT NULL, definitiontrust TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, teacherentry TINYINT(1) DEFAULT 0 NOT NULL, sourceglossaryid BIGINT DEFAULT 0 NOT NULL, usedynalink TINYINT(1) DEFAULT 1 NOT NULL, casesensitive TINYINT(1) DEFAULT 0 NOT NULL, fullmatch TINYINT(1) DEFAULT 1 NOT NULL, approved TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_pglosentr_con_ix (concept), INDEX mdl_pglosentr_glo_ix (glossaryid), INDEX mdl_pglosentr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'all glossary entries' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary_entries_categories (id BIGINT AUTO_INCREMENT NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, entryid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pglosentrcate_cat_ix (categoryid), INDEX mdl_pglosentrcate_ent_ix (entryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'categories of each glossary entry' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pglossary_formats (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, popupformatname VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, showgroup TINYINT(1) DEFAULT 1 NOT NULL, showtabs VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultmode VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaulthook VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortkey VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Setting of the display formats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_categories (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, parent BIGINT DEFAULT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation BIGINT DEFAULT 0 NOT NULL, keephigh BIGINT DEFAULT 0 NOT NULL, droplow BIGINT DEFAULT 0 NOT NULL, aggregateonlygraded TINYINT(1) DEFAULT 0 NOT NULL, aggregateoutcomes TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgradcate_cou_ix (courseid), INDEX mdl_pgradcate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about categories, used for grou' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_categories_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT NOT NULL, parent BIGINT DEFAULT NULL, depth BIGINT DEFAULT 0 NOT NULL, path VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation BIGINT DEFAULT 0 NOT NULL, keephigh BIGINT DEFAULT 0 NOT NULL, droplow BIGINT DEFAULT 0 NOT NULL, aggregateonlygraded TINYINT(1) DEFAULT 0 NOT NULL, aggregateoutcomes TINYINT(1) DEFAULT 0 NOT NULL, aggregatesubcats TINYINT(1) DEFAULT 0 NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgradcatehist_act_ix (action), INDEX mdl_pgradcatehist_cou_ix (courseid), INDEX mdl_pgradcatehist_log_ix (loggeduser), INDEX mdl_pgradcatehist_old_ix (oldid), INDEX mdl_pgradcatehist_par_ix (parent), INDEX mdl_pgradcatehist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History of grade_categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_grades (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, rawgrademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, rawgrademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, rawscaleid BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, exported BIGINT DEFAULT 0 NOT NULL, overridden BIGINT DEFAULT 0 NOT NULL, excluded BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat BIGINT DEFAULT 0 NOT NULL, information LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, informationformat BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, aggregationstatus VARCHAR(10) CHARACTER SET utf8 DEFAULT 'unknown' NOT NULL COLLATE `utf8_general_ci`, aggregationweight NUMERIC(10, 5) DEFAULT NULL, INDEX mdl_pgradgrad_ite_ix (itemid), INDEX mdl_pgradgrad_locloc_ix (locked, locktime), INDEX mdl_pgradgrad_raw_ix (rawscaleid), INDEX mdl_pgradgrad_use2_ix (usermodified), INDEX mdl_pgradgrad_use_ix (userid), UNIQUE INDEX mdl_pgradgrad_useite_uix (userid, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'grade_grades  This table keeps individual grades for each us' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_grades_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, rawgrademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, rawgrademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, rawscaleid BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, exported BIGINT DEFAULT 0 NOT NULL, overridden BIGINT DEFAULT 0 NOT NULL, excluded BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat BIGINT DEFAULT 0 NOT NULL, information LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, informationformat BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgradgradhist_act_ix (action), INDEX mdl_pgradgradhist_ite_ix (itemid), INDEX mdl_pgradgradhist_log_ix (loggeduser), INDEX mdl_pgradgradhist_old_ix (oldid), INDEX mdl_pgradgradhist_raw_ix (rawscaleid), INDEX mdl_pgradgradhist_tim_ix (timemodified), INDEX mdl_pgradgradhist_use2_ix (usermodified), INDEX mdl_pgradgradhist_use_ix (userid), INDEX mdl_pgradgradhist_useitetim_ix (userid, itemid, timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_import_newitem (id BIGINT AUTO_INCREMENT NOT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, importcode BIGINT NOT NULL, importer BIGINT NOT NULL, INDEX mdl_pgradimponewi_imp_ix (importer), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'temporary table for storing new grade_item names from grade ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_import_values (id BIGINT AUTO_INCREMENT NOT NULL, itemid BIGINT DEFAULT NULL, newgradeitem BIGINT DEFAULT NULL, userid BIGINT NOT NULL, finalgrade NUMERIC(10, 5) DEFAULT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, importcode BIGINT NOT NULL, importer BIGINT DEFAULT NULL, importonlyfeedback TINYINT(1) DEFAULT 0, INDEX mdl_pgradimpovalu_imp_ix (importer), INDEX mdl_pgradimpovalu_ite_ix (itemid), INDEX mdl_pgradimpovalu_new_ix (newgradeitem), INDEX mdl_pgradimpovalu_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Temporary table for importing grades' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_items (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemmodule VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iteminstance BIGINT DEFAULT NULL, itemnumber BIGINT DEFAULT NULL, iteminfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, calculation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, gradetype SMALLINT DEFAULT 1 NOT NULL, grademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, grademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, scaleid BIGINT DEFAULT NULL, outcomeid BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, multfactor NUMERIC(10, 5) DEFAULT '1.00000' NOT NULL, plusfactor NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef2 NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, display BIGINT DEFAULT 0 NOT NULL, decimals TINYINT(1) DEFAULT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, needsupdate BIGINT DEFAULT 0 NOT NULL, weightoverride TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_pgraditem_cat_ix (categoryid), INDEX mdl_pgraditem_cou_ix (courseid), INDEX mdl_pgraditem_gra_ix (gradetype), INDEX mdl_pgraditem_idncou_ix (idnumber, courseid), INDEX mdl_pgraditem_iteiteitecou_ix (itemtype, itemmodule, iteminstance, courseid), INDEX mdl_pgraditem_itenee_ix (itemtype, needsupdate), INDEX mdl_pgraditem_locloc_ix (locked, locktime), INDEX mdl_pgraditem_out_ix (outcomeid), INDEX mdl_pgraditem_sca_ix (scaleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about gradeable items (ie colum' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_items_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, itemname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemmodule VARCHAR(30) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iteminstance BIGINT DEFAULT NULL, itemnumber BIGINT DEFAULT NULL, iteminfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, calculation LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, gradetype SMALLINT DEFAULT 1 NOT NULL, grademax NUMERIC(10, 5) DEFAULT '100.00000' NOT NULL, grademin NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, scaleid BIGINT DEFAULT NULL, outcomeid BIGINT DEFAULT NULL, gradepass NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, multfactor NUMERIC(10, 5) DEFAULT '1.00000' NOT NULL, plusfactor NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, aggregationcoef2 NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, hidden BIGINT DEFAULT 0 NOT NULL, locked BIGINT DEFAULT 0 NOT NULL, locktime BIGINT DEFAULT 0 NOT NULL, needsupdate BIGINT DEFAULT 0 NOT NULL, display BIGINT DEFAULT 0 NOT NULL, decimals TINYINT(1) DEFAULT NULL, weightoverride TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pgraditemhist_act_ix (action), INDEX mdl_pgraditemhist_cat_ix (categoryid), INDEX mdl_pgraditemhist_cou_ix (courseid), INDEX mdl_pgraditemhist_log_ix (loggeduser), INDEX mdl_pgraditemhist_old_ix (oldid), INDEX mdl_pgraditemhist_out_ix (outcomeid), INDEX mdl_pgraditemhist_sca_ix (scaleid), INDEX mdl_pgraditemhist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History of grade_items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_letters (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, lowerboundary NUMERIC(10, 5) NOT NULL, letter VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pgradlett_conlowlet_uix (contextid, lowerboundary, letter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Repository for grade letters, for courses and other moodle e' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_outcomes (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_pgradoutc_cou_ix (courseid), UNIQUE INDEX mdl_pgradoutc_cousho_uix (courseid, shortname), INDEX mdl_pgradoutc_sca_ix (scaleid), INDEX mdl_pgradoutc_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table describes the outcomes used in the system. An out' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_outcomes_courses (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, outcomeid BIGINT NOT NULL, INDEX mdl_pgradoutccour_cou_ix (courseid), UNIQUE INDEX mdl_pgradoutccour_couout_uix (courseid, outcomeid), INDEX mdl_pgradoutccour_out_ix (outcomeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores what outcomes are used in what courses.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_outcomes_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scaleid BIGINT DEFAULT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pgradoutchist_act_ix (action), INDEX mdl_pgradoutchist_cou_ix (courseid), INDEX mdl_pgradoutchist_log_ix (loggeduser), INDEX mdl_pgradoutchist_old_ix (oldid), INDEX mdl_pgradoutchist_sca_ix (scaleid), INDEX mdl_pgradoutchist_tim_ix (timemodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrade_settings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pgradsett_cou_ix (courseid), UNIQUE INDEX mdl_pgradsett_counam_uix (courseid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'gradebook settings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrading_areas (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, areaname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, activemethod VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pgradarea_con_ix (contextid), UNIQUE INDEX mdl_pgradarea_concomare_uix (contextid, component, areaname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Identifies gradable areas where advanced grading can happen.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrading_definitions (id BIGINT AUTO_INCREMENT NOT NULL, areaid BIGINT NOT NULL, method VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, status BIGINT DEFAULT 0 NOT NULL, copiedfromid BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, usercreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, timecopied BIGINT DEFAULT 0, options LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pgraddefi_are_ix (areaid), UNIQUE INDEX mdl_pgraddefi_aremet_uix (areaid, method), INDEX mdl_pgraddefi_use2_ix (usercreated), INDEX mdl_pgraddefi_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the basic information about an advanced grading for' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgrading_instances (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, raterid BIGINT NOT NULL, itemid BIGINT DEFAULT NULL, rawgrade NUMERIC(10, 5) DEFAULT NULL, status BIGINT DEFAULT 0 NOT NULL, feedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackformat TINYINT(1) DEFAULT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pgradinst_def_ix (definitionid), INDEX mdl_pgradinst_rat_ix (raterid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Grading form instance is an assessment record for one gradab' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_guide_comments (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, INDEX mdl_pgradguidcomm_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'frequently used comments used in marking guide' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_guide_criteria (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, descriptionmarkers LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionmarkersformat TINYINT(1) DEFAULT NULL, maxscore NUMERIC(10, 5) NOT NULL, INDEX mdl_pgradguidcrit_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the rows of the criteria grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_guide_fillings (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, criterionid BIGINT NOT NULL, remark LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, remarkformat TINYINT(1) DEFAULT NULL, score NUMERIC(10, 5) NOT NULL, INDEX mdl_pgradguidfill_cri_ix (criterionid), INDEX mdl_pgradguidfill_ins_ix (instanceid), UNIQUE INDEX mdl_pgradguidfill_inscri_uix (instanceid, criterionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the data of how the guide is filled by a particular r' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_rubric_criteria (id BIGINT AUTO_INCREMENT NOT NULL, definitionid BIGINT NOT NULL, sortorder BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, INDEX mdl_pgradrubrcrit_def_ix (definitionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the rows of the rubric grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_rubric_fillings (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, criterionid BIGINT NOT NULL, levelid BIGINT DEFAULT NULL, remark LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, remarkformat TINYINT(1) DEFAULT NULL, INDEX mdl_pgradrubrfill_cri_ix (criterionid), INDEX mdl_pgradrubrfill_ins_ix (instanceid), UNIQUE INDEX mdl_pgradrubrfill_inscri_uix (instanceid, criterionid), INDEX mdl_pgradrubrfill_lev_ix (levelid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the data of how the rubric is filled by a particular ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgradingform_rubric_levels (id BIGINT AUTO_INCREMENT NOT NULL, criterionid BIGINT NOT NULL, score NUMERIC(10, 5) NOT NULL, definition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, definitionformat BIGINT DEFAULT NULL, INDEX mdl_pgradrubrleve_cri_ix (criterionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the columns of the rubric grid.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgroupings (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, configdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgrou_cou2_ix (courseid), INDEX mdl_pgrou_idn2_ix (idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A grouping is a collection of groups. WAS: groups_groupings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgroupings_groups (id BIGINT AUTO_INCREMENT NOT NULL, groupingid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgrougrou_gro2_ix (groupid), INDEX mdl_pgrougrou_gro_ix (groupingid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a grouping to a group (note, groups can be in multiple ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgroups (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, enrolmentkey VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, picture BIGINT DEFAULT 0 NOT NULL, visibility TINYINT(1) DEFAULT 0 NOT NULL, participation TINYINT(1) DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgrou_cou_ix (courseid), INDEX mdl_pgrou_idn_ix (idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record represents a group.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pgroups_members (id BIGINT AUTO_INCREMENT NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timeadded BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pgroumemb_gro_ix (groupid), INDEX mdl_pgroumemb_use_ix (userid), UNIQUE INDEX mdl_pgroumemb_usegro_uix (userid, groupid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link a user to a group.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5p (id BIGINT AUTO_INCREMENT NOT NULL, jsoncontent LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, mainlibraryid BIGINT NOT NULL, displayoptions SMALLINT DEFAULT NULL, pathnamehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, filtered LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ph5p_mai_ix (mainlibraryid), INDEX mdl_ph5p_pat_ix (pathnamehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores H5P content information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5p_contents_libraries (id BIGINT AUTO_INCREMENT NOT NULL, h5pid BIGINT NOT NULL, libraryid BIGINT NOT NULL, dependencytype VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dropcss TINYINT(1) NOT NULL, weight BIGINT NOT NULL, INDEX mdl_ph5pcontlibr_h5p_ix (h5pid), INDEX mdl_ph5pcontlibr_lib_ix (libraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store which library is used in which content.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5p_libraries (id BIGINT AUTO_INCREMENT NOT NULL, machinename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, majorversion SMALLINT NOT NULL, minorversion SMALLINT NOT NULL, patchversion SMALLINT NOT NULL, runnable TINYINT(1) NOT NULL, fullscreen TINYINT(1) DEFAULT 0 NOT NULL, embedtypes VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, preloadedjs LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, preloadedcss LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, droplibrarycss LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, semantics LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, addto LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, coremajor SMALLINT DEFAULT NULL, coreminor SMALLINT DEFAULT NULL, metadatasettings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tutorial LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, example LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1, INDEX mdl_ph5plibr_macmajminpatru_ix (machinename, majorversion, minorversion, patchversion, runnable), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about libraries used by H5P content.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5p_libraries_cachedassets (id BIGINT AUTO_INCREMENT NOT NULL, libraryid BIGINT NOT NULL, hash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_ph5plibrcach_lib_ix (libraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'H5P cached library assets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5p_library_dependencies (id BIGINT AUTO_INCREMENT NOT NULL, libraryid BIGINT NOT NULL, requiredlibraryid BIGINT NOT NULL, dependencytype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_ph5plibrdepe_lib_ix (libraryid), INDEX mdl_ph5plibrdepe_req_ix (requiredlibraryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores H5P library dependencies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5pactivity (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, grade BIGINT DEFAULT 0, displayoptions SMALLINT DEFAULT 0 NOT NULL, enabletracking TINYINT(1) DEFAULT 1 NOT NULL, grademethod SMALLINT DEFAULT 1 NOT NULL, reviewmode SMALLINT DEFAULT 1, INDEX mdl_ph5pa_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the h5pactivity activity module instances.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5pactivity_attempts (id BIGINT AUTO_INCREMENT NOT NULL, h5pactivityid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, attempt INT DEFAULT 1 NOT NULL, rawscore BIGINT DEFAULT 0, maxscore BIGINT DEFAULT 0, scaled NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, duration BIGINT DEFAULT 0, completion TINYINT(1) DEFAULT NULL, success TINYINT(1) DEFAULT NULL, INDEX mdl_ph5paatte_h5p_ix (h5pactivityid), INDEX mdl_ph5paatte_h5ptim_ix (h5pactivityid, timecreated), INDEX mdl_ph5paatte_h5puse_ix (h5pactivityid, userid), UNIQUE INDEX mdl_ph5paatte_h5puseatt_uix (h5pactivityid, userid, attempt), INDEX mdl_ph5paatte_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users attempts inside H5P activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ph5pactivity_attempts_results (id BIGINT AUTO_INCREMENT NOT NULL, attemptid BIGINT NOT NULL, subcontent VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, interactiontype VARCHAR(128) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctpattern LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, response LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, additionals LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rawscore BIGINT DEFAULT 0 NOT NULL, maxscore BIGINT DEFAULT 0 NOT NULL, duration BIGINT DEFAULT 0, completion TINYINT(1) DEFAULT NULL, success TINYINT(1) DEFAULT NULL, INDEX mdl_ph5paatteresu_att_ix (attemptid), INDEX mdl_ph5paatteresu_atttim_ix (attemptid, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'H5Pactivities_attempts tracking info' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pimscp (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, keepold BIGINT DEFAULT -1 NOT NULL, structure LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pimsc_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one imscp resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pinfected_files (id BIGINT AUTO_INCREMENT NOT NULL, filename LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, quarantinedfile LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, reason LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pinfefile_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store infected file details.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plabel (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_plabe_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines labels' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, practice SMALLINT DEFAULT 0 NOT NULL, modattempts SMALLINT DEFAULT 0 NOT NULL, usepassword SMALLINT DEFAULT 0 NOT NULL, password VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dependency BIGINT DEFAULT 0 NOT NULL, conditions LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, grade BIGINT DEFAULT 0 NOT NULL, custom SMALLINT DEFAULT 0 NOT NULL, ongoing SMALLINT DEFAULT 0 NOT NULL, usemaxgrade SMALLINT DEFAULT 0 NOT NULL, maxanswers SMALLINT DEFAULT 4 NOT NULL, maxattempts SMALLINT DEFAULT 5 NOT NULL, review SMALLINT DEFAULT 0 NOT NULL, nextpagedefault SMALLINT DEFAULT 0 NOT NULL, feedback SMALLINT DEFAULT 1 NOT NULL, minquestions SMALLINT DEFAULT 0 NOT NULL, maxpages SMALLINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, retake SMALLINT DEFAULT 1 NOT NULL, activitylink BIGINT DEFAULT 0 NOT NULL, mediafile VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mediaheight BIGINT DEFAULT 100 NOT NULL, mediawidth BIGINT DEFAULT 650 NOT NULL, mediaclose SMALLINT DEFAULT 0 NOT NULL, slideshow SMALLINT DEFAULT 0 NOT NULL, width BIGINT DEFAULT 640 NOT NULL, height BIGINT DEFAULT 480 NOT NULL, bgcolor VARCHAR(7) CHARACTER SET utf8 DEFAULT '#FFFFFF' NOT NULL COLLATE `utf8_general_ci`, displayleft SMALLINT DEFAULT 0 NOT NULL, displayleftif SMALLINT DEFAULT 0 NOT NULL, progressbar SMALLINT DEFAULT 0 NOT NULL, available BIGINT DEFAULT 0 NOT NULL, deadline BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionendreached TINYINT(1) DEFAULT 0, completiontimespent BIGINT DEFAULT 0, allowofflineattempts TINYINT(1) DEFAULT 0, INDEX mdl_pless_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_answers (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, jumpto BIGINT DEFAULT 0 NOT NULL, grade SMALLINT DEFAULT 0 NOT NULL, score BIGINT DEFAULT 0 NOT NULL, flags SMALLINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, answer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, answerformat TINYINT(1) DEFAULT 0 NOT NULL, response LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responseformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_plessansw_les_ix (lessonid), INDEX mdl_plessansw_pag_ix (pageid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_answers' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_attempts (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, answerid BIGINT DEFAULT 0 NOT NULL, retry SMALLINT DEFAULT 0 NOT NULL, correct BIGINT DEFAULT 0 NOT NULL, useranswer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timeseen BIGINT DEFAULT 0 NOT NULL, INDEX mdl_plessatte_ans_ix (answerid), INDEX mdl_plessatte_les_ix (lessonid), INDEX mdl_plessatte_pag_ix (pageid), INDEX mdl_plessatte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_attempts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_branch (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, retry BIGINT DEFAULT 0 NOT NULL, flag SMALLINT DEFAULT 0 NOT NULL, timeseen BIGINT DEFAULT 0 NOT NULL, nextpageid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_plessbran_les_ix (lessonid), INDEX mdl_plessbran_pag_ix (pageid), INDEX mdl_plessbran_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'branches for each lesson/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_grades (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, grade DOUBLE PRECISION DEFAULT '0' NOT NULL, late SMALLINT DEFAULT 0 NOT NULL, completed BIGINT DEFAULT 0 NOT NULL, INDEX mdl_plessgrad_les_ix (lessonid), INDEX mdl_plessgrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_grades' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_overrides (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, available BIGINT DEFAULT NULL, deadline BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, review SMALLINT DEFAULT NULL, maxattempts SMALLINT DEFAULT NULL, retake SMALLINT DEFAULT NULL, password VARCHAR(32) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_plessover_gro_ix (groupid), INDEX mdl_plessover_les_ix (lessonid), INDEX mdl_plessover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to lesson settings.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_pages (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, prevpageid BIGINT DEFAULT 0 NOT NULL, nextpageid BIGINT DEFAULT 0 NOT NULL, qtype SMALLINT DEFAULT 0 NOT NULL, qoption SMALLINT DEFAULT 0 NOT NULL, layout SMALLINT DEFAULT 1 NOT NULL, display SMALLINT DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contents LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentsformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_plesspage_les_ix (lessonid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines lesson_pages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plesson_timer (id BIGINT AUTO_INCREMENT NOT NULL, lessonid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, starttime BIGINT DEFAULT 0 NOT NULL, lessontime BIGINT DEFAULT 0 NOT NULL, completed TINYINT(1) DEFAULT 0, timemodifiedoffline BIGINT DEFAULT 0 NOT NULL, INDEX mdl_plesstime_les_ix (lessonid), INDEX mdl_plesstime_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'lesson timer for each lesson' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plicense (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, version BIGINT DEFAULT 0 NOT NULL, custom TINYINT(1) DEFAULT 0 NOT NULL, sortorder INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'store licenses used by moodle' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plock_db (id BIGINT AUTO_INCREMENT NOT NULL, resourcekey VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT NULL, owner VARCHAR(36) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_plockdb_exp_ix (expires), INDEX mdl_plockdb_own_ix (owner), UNIQUE INDEX mdl_plockdb_res_uix (resourcekey), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores active and inactive lock types for db locking method.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plog (id BIGINT AUTO_INCREMENT NOT NULL, time BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cmid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_plog_act_ix (action), INDEX mdl_plog_cmi_ix (cmid), INDEX mdl_plog_coumodact_ix (course, module, action), INDEX mdl_plog_tim_ix (time), INDEX mdl_plog_usecou_ix (userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Every action is logged as far as possible' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plog_display (id BIGINT AUTO_INCREMENT NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mtable VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, field VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_plogdisp_modact_uix (module, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'For a particular module/action, specifies a moodle table/fie' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plog_queries (id BIGINT AUTO_INCREMENT NOT NULL, qtype INT NOT NULL, sqltext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sqlparams LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, error INT DEFAULT 0 NOT NULL, info LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, backtrace LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, exectime NUMERIC(10, 5) NOT NULL, timelogged BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Logged database queries.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plogstore_standard_log (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, target VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, objecttable VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, objectid BIGINT DEFAULT NULL, crud VARCHAR(1) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, edulevel TINYINT(1) NOT NULL, contextid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, contextinstanceid BIGINT NOT NULL, userid BIGINT NOT NULL, courseid BIGINT DEFAULT NULL, relateduserid BIGINT DEFAULT NULL, anonymous TINYINT(1) DEFAULT 0 NOT NULL, other LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, origin VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, realuserid BIGINT DEFAULT NULL, INDEX mdl_plogsstanlog_con_ix (contextid), INDEX mdl_plogsstanlog_cou_ix (courseid), INDEX mdl_plogsstanlog_couanotim_ix (courseid, anonymous, timecreated), INDEX mdl_plogsstanlog_rea_ix (realuserid), INDEX mdl_plogsstanlog_rel_ix (relateduserid), INDEX mdl_plogsstanlog_tim_ix (timecreated), INDEX mdl_plogsstanlog_use_ix (userid), INDEX mdl_plogsstanlog_useconconc_ix (userid, contextlevel, contextinstanceid, crud, edulevel, timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Standard log table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, typeid BIGINT DEFAULT NULL, toolurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, securetoolurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructorchoicesendname TINYINT(1) DEFAULT NULL, instructorchoicesendemailaddr TINYINT(1) DEFAULT NULL, instructorchoiceallowroster TINYINT(1) DEFAULT NULL, instructorchoiceallowsetting TINYINT(1) DEFAULT NULL, instructorcustomparameters LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructorchoiceacceptgrades TINYINT(1) DEFAULT NULL, grade BIGINT DEFAULT 100 NOT NULL, launchcontainer TINYINT(1) DEFAULT 1 NOT NULL, resourcekey VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, debuglaunch TINYINT(1) DEFAULT 0 NOT NULL, showtitlelaunch TINYINT(1) DEFAULT 0 NOT NULL, showdescriptionlaunch TINYINT(1) DEFAULT 0 NOT NULL, servicesalt VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, icon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secureicon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_plti_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains Basic LTI activities instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_access_tokens (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, scope LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, token VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, validuntil BIGINT NOT NULL, timecreated BIGINT NOT NULL, lastaccess BIGINT DEFAULT NULL, UNIQUE INDEX mdl_pltiaccetoke_tok_uix (token), INDEX mdl_pltiaccetoke_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Security tokens for accessing of LTI services' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_coursevisible (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, courseid BIGINT NOT NULL, coursevisible TINYINT(1) NOT NULL, INDEX mdl_plticour_cou_ix (courseid), INDEX mdl_plticour_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store coursevisible setting for site tool on course' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_submission (id BIGINT AUTO_INCREMENT NOT NULL, ltiid BIGINT NOT NULL, userid BIGINT NOT NULL, datesubmitted BIGINT NOT NULL, dateupdated BIGINT NOT NULL, gradepercent NUMERIC(10, 5) NOT NULL, originalgrade NUMERIC(10, 5) NOT NULL, launchid BIGINT NOT NULL, state TINYINT(1) NOT NULL, INDEX mdl_pltisubm_lti_ix (ltiid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of individual submissions for LTI activities.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_tool_proxies (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Tool Provider' NOT NULL COLLATE `utf8_general_ci`, regurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, state TINYINT(1) DEFAULT 1 NOT NULL, guid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secret VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, vendorcode VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, capabilityoffered LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, serviceoffered LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, toolproxy LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, createdby BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_pltitoolprox_gui_uix (guid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI tool proxy registrations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_tool_settings (id BIGINT AUTO_INCREMENT NOT NULL, toolproxyid BIGINT NOT NULL, typeid BIGINT DEFAULT NULL, course BIGINT DEFAULT NULL, coursemoduleid BIGINT DEFAULT NULL, settings LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pltitoolsett_cou2_ix (coursemoduleid), INDEX mdl_pltitoolsett_cou_ix (course), INDEX mdl_pltitoolsett_too_ix (toolproxyid), INDEX mdl_pltitoolsett_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'LTI tool setting values' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_types (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'basiclti Activity' NOT NULL COLLATE `utf8_general_ci`, baseurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, tooldomain VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, state TINYINT(1) DEFAULT 2 NOT NULL, course BIGINT NOT NULL, coursevisible TINYINT(1) DEFAULT 0 NOT NULL, ltiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, clientid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, toolproxyid BIGINT DEFAULT NULL, enabledcapability LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, parameter LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, icon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, secureicon LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, createdby BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pltitype_cli_uix (clientid), INDEX mdl_pltitype_cou_ix (course), INDEX mdl_pltitype_too_ix (tooldomain), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Basic LTI pre-configured activities' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_types_categories (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, categoryid BIGINT NOT NULL, INDEX mdl_pltitypecate_cat_ix (categoryid), INDEX mdl_pltitypecate_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Link LTI types to course categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_plti_types_config (id BIGINT AUTO_INCREMENT NOT NULL, typeid BIGINT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pltitypeconf_typ_ix (typeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Basic LTI types configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pltiservice_gradebookservices (id BIGINT AUTO_INCREMENT NOT NULL, gradeitemid BIGINT NOT NULL, courseid BIGINT NOT NULL, toolproxyid BIGINT DEFAULT NULL, typeid BIGINT DEFAULT NULL, baseurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ltilinkid BIGINT DEFAULT NULL, resourceid VARCHAR(512) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tag VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, subreviewurl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, subreviewparams LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pltisgrad_gracou_ix (gradeitemid, courseid), INDEX mdl_pltisgrad_lti_ix (ltilinkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This file records the grade items created by the LTI Gradebo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmatrix_room (id BIGINT AUTO_INCREMENT NOT NULL, commid BIGINT NOT NULL, roomid VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, topic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmatrroom_com_ix (commid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the matrix room information associated with the commu' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT DEFAULT 0 NOT NULL, useridto BIGINT DEFAULT 0 NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat SMALLINT DEFAULT 0, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, notification TINYINT(1) DEFAULT 0, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timeuserfromdeleted BIGINT DEFAULT 0 NOT NULL, timeusertodeleted BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmess_usetimnot2_ix (useridto, timeusertodeleted, notification), INDEX mdl_pmess_usetimnot_ix (useridfrom, timeuserfromdeleted, notification), INDEX mdl_pmess_useusetimtim_ix (useridfrom, useridto, timeuserfromdeleted, timeusertodeleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all unread messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_airnotifier_devices (id BIGINT AUTO_INCREMENT NOT NULL, userdeviceid BIGINT NOT NULL, enable TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_pmessairndevi_use_uix (userdeviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store information about the devices registered in Airnotifie' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_contact_requests (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, requesteduserid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pmesscontrequ_req_ix (requesteduserid), INDEX mdl_pmesscontrequ_use_ix (userid), UNIQUE INDEX mdl_pmesscontrequ_usereq_uix (userid, requesteduserid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains list of contact requests between users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_contacts (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, contactid BIGINT NOT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_pmesscont_con_ix (contactid), INDEX mdl_pmesscont_use_ix (userid), UNIQUE INDEX mdl_pmesscont_usecon_uix (userid, contactid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains lists of contacts between users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_conversation_actions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, conversationid BIGINT NOT NULL, action BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pmessconvacti_con_ix (conversationid), INDEX mdl_pmessconvacti_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all per-user actions on individual conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_conversation_members (id BIGINT AUTO_INCREMENT NOT NULL, conversationid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pmessconvmemb_con_ix (conversationid), INDEX mdl_pmessconvmemb_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all members in a conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_conversations (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT DEFAULT 1 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, convhash VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, contextid BIGINT DEFAULT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_pmessconv_comiteitecon_ix (component, itemtype, itemid, contextid), INDEX mdl_pmessconv_con2_ix (contextid), INDEX mdl_pmessconv_con_ix (convhash), INDEX mdl_pmessconv_typ_ix (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all message conversations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_email_messages (id BIGINT AUTO_INCREMENT NOT NULL, useridto BIGINT NOT NULL, conversationid BIGINT NOT NULL, messageid BIGINT NOT NULL, INDEX mdl_pmessemaimess_con_ix (conversationid), INDEX mdl_pmessemaimess_mes_ix (messageid), INDEX mdl_pmessemaimess_use_ix (useridto), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps track of what emails to send in an email digest' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_popup (id BIGINT AUTO_INCREMENT NOT NULL, messageid BIGINT NOT NULL, isread TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pmesspopu_isr_ix (isread), UNIQUE INDEX mdl_pmesspopu_mesisr_uix (messageid, isread), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keep state of notifications for the popup message processor' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_popup_notifications (id BIGINT AUTO_INCREMENT NOT NULL, notificationid BIGINT NOT NULL, INDEX mdl_pmesspopunoti_not_ix (notificationid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of notifications to display in the message output popup' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_processors (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(166) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of message output plugins' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_providers (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, component VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pmessprov_comnam_uix (component, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores the message providers (modules and core sy' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_read (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT DEFAULT 0 NOT NULL, useridto BIGINT DEFAULT 0 NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat SMALLINT DEFAULT 0, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, notification TINYINT(1) DEFAULT 0, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timeread BIGINT DEFAULT 0 NOT NULL, timeuserfromdeleted BIGINT DEFAULT 0 NOT NULL, timeusertodeleted BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmessread_nottim_ix (notification, timeread), INDEX mdl_pmessread_usetimnot2_ix (useridto, timeusertodeleted, notification), INDEX mdl_pmessread_usetimnot_ix (useridfrom, timeuserfromdeleted, notification), INDEX mdl_pmessread_useusetimtim_ix (useridfrom, useridto, timeuserfromdeleted, timeusertodeleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all messages that have been read' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_user_actions (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, messageid BIGINT NOT NULL, action BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_pmessuseracti_mes_ix (messageid), INDEX mdl_pmessuseracti_use_ix (userid), UNIQUE INDEX mdl_pmessuseracti_usemesac_uix (userid, messageid, action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all per-user actions on individual messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessage_users_blocked (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, blockeduserid BIGINT NOT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_pmessuserbloc_blo_ix (blockeduserid), INDEX mdl_pmessuserbloc_use_ix (userid), UNIQUE INDEX mdl_pmessuserbloc_useblo_uix (userid, blockeduserid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Maintains lists of blocked users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessageinbound_datakeys (id BIGINT AUTO_INCREMENT NOT NULL, handler BIGINT NOT NULL, datavalue BIGINT NOT NULL, datakey VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, expires BIGINT DEFAULT NULL, INDEX mdl_pmessdata_han_ix (handler), UNIQUE INDEX mdl_pmessdata_handat_uix (handler, datavalue), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Inbound Message data item secret keys.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessageinbound_handlers (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, defaultexpiration BIGINT DEFAULT 86400 NOT NULL, validateaddress TINYINT(1) DEFAULT 1 NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pmesshand_cla_uix (classname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Inbound Message Handler definitions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessageinbound_messagelist (id BIGINT AUTO_INCREMENT NOT NULL, messageid LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, address LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_pmessmess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of message IDs for existing replies' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmessages (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT NOT NULL, conversationid BIGINT NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat TINYINT(1) DEFAULT 0 NOT NULL, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, fullmessagetrust TINYINT(1) DEFAULT 0 NOT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmess_con_ix (conversationid), INDEX mdl_pmess_contim_ix (conversationid, timecreated), INDEX mdl_pmess_use_ix (useridfrom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all messages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_application (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, display_name VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpc_server_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sso_land_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sso_jump_url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about applications on remote hosts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_host (id BIGINT AUTO_INCREMENT NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, wwwroot VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ip_address VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, public_key LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, public_key_expires BIGINT DEFAULT 0 NOT NULL, transport TINYINT(1) DEFAULT 0 NOT NULL, portno INT DEFAULT 0 NOT NULL, last_connect_time BIGINT DEFAULT 0 NOT NULL, last_log_id BIGINT DEFAULT 0 NOT NULL, force_theme TINYINT(1) DEFAULT 0 NOT NULL, theme VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, applicationid BIGINT DEFAULT 1 NOT NULL, sslverification TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pmnethost_app_ix (applicationid), INDEX mdl_pmnethost_las_ix (last_log_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about the local and remote hosts for RPC' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_host2service (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT DEFAULT 0 NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, publish TINYINT(1) DEFAULT 0 NOT NULL, subscribe TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pmnethost_hosser_uix (hostid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Information about the services for a given host' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_log (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT DEFAULT 0 NOT NULL, remoteid BIGINT DEFAULT 0 NOT NULL, time BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, ip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, course BIGINT DEFAULT 0 NOT NULL, coursename VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cmid BIGINT DEFAULT 0 NOT NULL, action VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmnetlog_hosusecou_ix (hostid, userid, course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store session data from users migrating to other sites' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_remote_rpc (id BIGINT AUTO_INCREMENT NOT NULL, functionname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpcpath VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, plugintype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pluginname VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table describes functions that might be called remotely' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_remote_service2rpc (id BIGINT AUTO_INCREMENT NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, rpcid BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pmnetremoserv_rpcser_uix (rpcid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Group functions or methods under a service' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_rpc (id BIGINT AUTO_INCREMENT NOT NULL, functionname VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, xmlrpcpath VARCHAR(80) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, plugintype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pluginname VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 0 NOT NULL, help LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, profile LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, filename VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(150) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, static TINYINT(1) DEFAULT NULL, INDEX mdl_pmnetrpc_enaxml_ix (enabled, xmlrpcpath), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Functions or methods that we may publish or subscribe to' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_service (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, apiversion VARCHAR(10) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, offer TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A service is a group of functions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_service2rpc (id BIGINT AUTO_INCREMENT NOT NULL, serviceid BIGINT DEFAULT 0 NOT NULL, rpcid BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pmnetserv_rpcser_uix (rpcid, serviceid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Group functions or methods under a service' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_session (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, token VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mnethostid BIGINT DEFAULT 0 NOT NULL, useragent VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirm_timeout BIGINT DEFAULT 0 NOT NULL, session_id VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, expires BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pmnetsess_mne_ix (mnethostid), UNIQUE INDEX mdl_pmnetsess_tok_uix (token), INDEX mdl_pmnetsess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Store session data from users migrating to other sites' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnet_sso_access_control (id BIGINT AUTO_INCREMENT NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, mnet_host_id BIGINT DEFAULT 0 NOT NULL, accessctrl VARCHAR(20) CHARACTER SET utf8 DEFAULT 'allow' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pmnetssoaccecont_mneus_uix (mnet_host_id, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users by host permitted (or not) to login from a remote prov' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnetservice_enrol_courses (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT NOT NULL, remoteid BIGINT NOT NULL, categoryid BIGINT NOT NULL, categoryname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, fullname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat SMALLINT DEFAULT 0, startdate BIGINT NOT NULL, roleid BIGINT NOT NULL, rolename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pmnetenrocour_hosrem_uix (hostid, remoteid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Caches the information fetched via XML-RPC about courses on ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmnetservice_enrol_enrolments (id BIGINT AUTO_INCREMENT NOT NULL, hostid BIGINT NOT NULL, userid BIGINT NOT NULL, remotecourseid BIGINT NOT NULL, rolename VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enroltime BIGINT DEFAULT 0 NOT NULL, enroltype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pmnetenroenro_hos_ix (hostid), INDEX mdl_pmnetenroenro_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Caches the information about enrolments of our local users i' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmodules (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, cron BIGINT DEFAULT 0 NOT NULL, lastcron BIGINT DEFAULT 0 NOT NULL, search VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_pmodu_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'modules available in the site' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmoodlenet_share_progress (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) NOT NULL, courseid BIGINT NOT NULL, cmid BIGINT DEFAULT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, resourceurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records MoodleNet share progress' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pmy_pages (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0, name VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, private TINYINT(1) DEFAULT 1 NOT NULL, sortorder INT DEFAULT 0 NOT NULL, INDEX mdl_pmypage_usepri_ix (userid, private), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Extra user pages for the My Moodle system' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pnotifications (id BIGINT AUTO_INCREMENT NOT NULL, useridfrom BIGINT NOT NULL, useridto BIGINT NOT NULL, subject LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fullmessageformat TINYINT(1) DEFAULT 0 NOT NULL, fullmessagehtml LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, smallmessage LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, eventtype VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturl LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contexturlname LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timeread BIGINT DEFAULT NULL, timecreated BIGINT NOT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pnoti_tim2_ix (timeread), INDEX mdl_pnoti_tim_ix (timecreated), INDEX mdl_pnoti_use2_ix (useridto), INDEX mdl_pnoti_use_ix (useridfrom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores all notifications' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_access_token (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, expires BIGINT NOT NULL, scope LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_poautaccetoke_iss_uix (issuerid), INDEX mdl_poautaccetoke_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores access tokens for system accounts in order to be able' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_endpoint (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, issuerid BIGINT NOT NULL, INDEX mdl_poautendp_iss_ix (issuerid), INDEX mdl_poautendp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Describes the named endpoint for an oauth2 service.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_issuer (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, image LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, baseurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, clientid LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, clientsecret LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginscopes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginscopesoffline LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginparams LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, loginparamsoffline LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, alloweddomains LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scopessupported LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, showonloginpage TINYINT(1) DEFAULT 1 NOT NULL, basicauth TINYINT(1) DEFAULT 0 NOT NULL, sortorder BIGINT NOT NULL, requireconfirmation TINYINT(1) DEFAULT 1 NOT NULL, servicetype VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, loginpagename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Details for an oauth 2 connect identity issuer.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_refresh_token (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, userid BIGINT NOT NULL, issuerid BIGINT NOT NULL, token LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scopehash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_poautrefrtoke_iss_ix (issuerid), INDEX mdl_poautrefrtoke_use_ix (userid), UNIQUE INDEX mdl_poautrefrtoke_useisssc_uix (userid, issuerid, scopehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores refresh tokens which can be exchanged for access toke' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_system_account (id BIGINT AUTO_INCREMENT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, refreshtoken LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, grantedscopes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, username LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_poautsystacco_iss_uix (issuerid), INDEX mdl_poautsystacco_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stored details used to get an access token as a system user ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_poauth2_user_field_mapping (id BIGINT AUTO_INCREMENT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, issuerid BIGINT NOT NULL, externalfield VARCHAR(500) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, internalfield VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_poautuserfielmapp_iss_ix (issuerid), UNIQUE INDEX mdl_poautuserfielmapp_issi_uix (issuerid, internalfield), INDEX mdl_poautuserfielmapp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Mapping of oauth user fields to moodle fields.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_instance (id BIGINT AUTO_INCREMENT NOT NULL, plugin VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'base table (not including config data) for instances of port' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_instance_config (id BIGINT AUTO_INCREMENT NOT NULL, instance BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_portinstconf_ins_ix (instance), INDEX mdl_portinstconf_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'config for portfolio plugin instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_instance_user (id BIGINT AUTO_INCREMENT NOT NULL, instance BIGINT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_portinstuser_ins_ix (instance), INDEX mdl_portinstuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'user data for portfolio instances.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_log (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, time BIGINT NOT NULL, portfolio BIGINT NOT NULL, caller_class VARCHAR(150) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, caller_file VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, caller_component VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, caller_sha1 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, tempdataid BIGINT DEFAULT 0 NOT NULL, returnurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, continueurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_portlog_por_ix (portfolio), INDEX mdl_portlog_tem_ix (tempdataid), INDEX mdl_portlog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'log of portfolio transfers (used to later check for duplicat' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_mahara_queue (id BIGINT AUTO_INCREMENT NOT NULL, transferid BIGINT NOT NULL, token VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_portmahaqueu_tok_ix (token), INDEX mdl_portmahaqueu_tra_ix (transferid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'maps mahara tokens to transfer ids' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_portfolio_tempdata (id BIGINT AUTO_INCREMENT NOT NULL, data LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expirytime BIGINT NOT NULL, userid BIGINT NOT NULL, instance BIGINT DEFAULT 0, queued TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_porttemp_ins_ix (instance), INDEX mdl_porttemp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores temporary data for portfolio exports. the id of this ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_post (id BIGINT AUTO_INCREMENT NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, moduleid BIGINT DEFAULT 0 NOT NULL, coursemoduleid BIGINT DEFAULT 0 NOT NULL, subject VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uniquehash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rating BIGINT DEFAULT 0 NOT NULL, format BIGINT DEFAULT 0 NOT NULL, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, publishstate VARCHAR(20) CHARACTER SET utf8 DEFAULT 'draft' NOT NULL COLLATE `utf8_general_ci`, lastmodified BIGINT DEFAULT 0 NOT NULL, created BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_post_cou2_ix (coursemoduleid), INDEX mdl_post_cou_ix (courseid), UNIQUE INDEX mdl_post_iduse_uix (id, userid), INDEX mdl_post_las_ix (lastmodified), INDEX mdl_post_mod_ix (module), INDEX mdl_post_sub_ix (subject), INDEX mdl_post_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Generic post table to hold data blog entries etc in differen' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppage (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, legacyfileslast BIGINT DEFAULT NULL, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ppage_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one page and its config data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppaygw_paypal (id BIGINT AUTO_INCREMENT NOT NULL, paymentid BIGINT NOT NULL, pp_orderid VARCHAR(255) CHARACTER SET utf8 DEFAULT 'The ID of the order in PayPal' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_ppaygpayp_pay_uix (paymentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores PayPal related information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppayment_accounts (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, archived TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_ppaymacco_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Payment accounts' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppayment_gateways (id BIGINT AUTO_INCREMENT NOT NULL, accountid BIGINT NOT NULL, gateway VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, config LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_ppaymgate_acc_ix (accountid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Configuration for one gateway for one payment account' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppayments (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, paymentarea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, userid BIGINT NOT NULL, amount VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, currency VARCHAR(3) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, accountid BIGINT NOT NULL, gateway VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ppaym_acc_ix (accountid), INDEX mdl_ppaym_compayite_ix (component, paymentarea, itemid), INDEX mdl_ppaym_gat_ix (gateway), INDEX mdl_ppaym_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores information about payments' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_instance (id BIGINT AUTO_INCREMENT NOT NULL, plugin VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'base table (not including config data) for instances of port' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_instance_config (id BIGINT AUTO_INCREMENT NOT NULL, instance BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pportinstconf_ins_ix (instance), INDEX mdl_pportinstconf_nam_ix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'config for portfolio plugin instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_instance_user (id BIGINT AUTO_INCREMENT NOT NULL, instance BIGINT NOT NULL, userid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pportinstuser_ins_ix (instance), INDEX mdl_pportinstuser_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'user data for portfolio instances.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_log (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, time BIGINT NOT NULL, portfolio BIGINT NOT NULL, caller_class VARCHAR(150) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, caller_file VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, caller_component VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, caller_sha1 VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, tempdataid BIGINT DEFAULT 0 NOT NULL, returnurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, continueurl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pportlog_por_ix (portfolio), INDEX mdl_pportlog_tem_ix (tempdataid), INDEX mdl_pportlog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'log of portfolio transfers (used to later check for duplicat' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_mahara_queue (id BIGINT AUTO_INCREMENT NOT NULL, transferid BIGINT NOT NULL, token VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pportmahaqueu_tok_ix (token), INDEX mdl_pportmahaqueu_tra_ix (transferid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'maps mahara tokens to transfer ids' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pportfolio_tempdata (id BIGINT AUTO_INCREMENT NOT NULL, data LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expirytime BIGINT NOT NULL, userid BIGINT NOT NULL, instance BIGINT DEFAULT 0, queued TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pporttemp_ins_ix (instance), INDEX mdl_pporttemp_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'stores temporary data for portfolio exports. the id of this ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ppost (id BIGINT AUTO_INCREMENT NOT NULL, module VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, moduleid BIGINT DEFAULT 0 NOT NULL, coursemoduleid BIGINT DEFAULT 0 NOT NULL, subject VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, uniquehash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rating BIGINT DEFAULT 0 NOT NULL, format BIGINT DEFAULT 0 NOT NULL, summaryformat TINYINT(1) DEFAULT 0 NOT NULL, attachment VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, publishstate VARCHAR(20) CHARACTER SET utf8 DEFAULT 'draft' NOT NULL COLLATE `utf8_general_ci`, lastmodified BIGINT DEFAULT 0 NOT NULL, created BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT NULL, INDEX mdl_ppost_cou2_ix (coursemoduleid), INDEX mdl_ppost_cou_ix (courseid), UNIQUE INDEX mdl_ppost_iduse_uix (id, userid), INDEX mdl_ppost_las_ix (lastmodified), INDEX mdl_ppost_mod_ix (module), INDEX mdl_ppost_sub_ix (subject), INDEX mdl_ppost_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Generic post table to hold data blog entries etc in differen' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pprofiling (id BIGINT AUTO_INCREMENT NOT NULL, runid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, data LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, totalexecutiontime BIGINT NOT NULL, totalcputime BIGINT NOT NULL, totalcalls BIGINT NOT NULL, totalmemory BIGINT NOT NULL, runreference TINYINT(1) DEFAULT 0 NOT NULL, runcomment VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, UNIQUE INDEX mdl_pprof_run_uix (runid), INDEX mdl_pprof_timrun_ix (timecreated, runreference), INDEX mdl_pprof_urlrun_ix (url, runreference), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the results of all the profiling runs' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddimageortext (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pqtypddim_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (text or images onto a background imag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddimageortext_drags (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, draggroup BIGINT DEFAULT 0 NOT NULL, infinite SMALLINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pqtypddimdrag_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Images to drag. Actual file names are not stored here we use' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddimageortext_drops (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, xleft BIGINT DEFAULT 0 NOT NULL, ytop BIGINT DEFAULT 0 NOT NULL, choice BIGINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pqtypddimdrop_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Drop boxes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddmarker (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, showmisplaced SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_pqtypddma_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (text or images onto a background imag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddmarker_drags (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, infinite SMALLINT DEFAULT 0 NOT NULL, noofdrags BIGINT DEFAULT 1 NOT NULL, INDEX mdl_pqtypddmadrag_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Labels for markers to drag.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ddmarker_drops (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, shape VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, coords LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, choice BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pqtypddmadrop_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'drop regions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_essay_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT NOT NULL, responseformat VARCHAR(16) CHARACTER SET utf8 DEFAULT 'editor' NOT NULL COLLATE `utf8_general_ci`, responserequired TINYINT(1) DEFAULT 1 NOT NULL, responsefieldlines SMALLINT DEFAULT 15 NOT NULL, minwordlimit BIGINT DEFAULT NULL, maxwordlimit BIGINT DEFAULT NULL, attachments SMALLINT DEFAULT 0 NOT NULL, attachmentsrequired SMALLINT DEFAULT 0 NOT NULL, graderinfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, graderinfoformat SMALLINT DEFAULT 0 NOT NULL, responsetemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responsetemplateformat SMALLINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, filetypeslist LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pqtypessaopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Extra options for essay questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_match_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pqtypmatcopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines the question-type specific options for matching ques' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_match_subquestions (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, questiontext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, questiontextformat TINYINT(1) DEFAULT 0 NOT NULL, answertext VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pqtypmatcsubq_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The subquestions that make up a matching question' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_multichoice_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, layout SMALLINT DEFAULT 0 NOT NULL, single SMALLINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, answernumbering VARCHAR(10) CHARACTER SET utf8 DEFAULT 'abc' NOT NULL COLLATE `utf8_general_ci`, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, showstandardinstruction TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_pqtypmultopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for multiple choice questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_ordering_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, layouttype TINYINT(1) DEFAULT 0 NOT NULL, selecttype TINYINT(1) DEFAULT 0 NOT NULL, selectcount SMALLINT DEFAULT 2 NOT NULL, gradingtype TINYINT(1) DEFAULT 0 NOT NULL, showgrading TINYINT(1) DEFAULT 0 NOT NULL, numberingstyle VARCHAR(10) CHARACTER SET utf8 DEFAULT 'none' NOT NULL COLLATE `utf8_general_ci`, correctfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pqtypordeopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for ordering questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_randomsamatch_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, choose BIGINT DEFAULT 4 NOT NULL, subcats TINYINT(1) DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pqtyprandopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about a random short-answer matching question' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pqtype_shortanswer_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, usecase TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pqtypshoropti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for short answer questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion (id BIGINT AUTO_INCREMENT NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, questiontext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, questiontextformat TINYINT(1) DEFAULT 0 NOT NULL, generalfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, generalfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, defaultmark NUMERIC(12, 7) DEFAULT '1.0000000' NOT NULL, penalty NUMERIC(12, 7) DEFAULT '0.3333333' NOT NULL, qtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, length BIGINT DEFAULT 1 NOT NULL, stamp VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, createdby BIGINT DEFAULT NULL, modifiedby BIGINT DEFAULT NULL, INDEX mdl_pques_cre_ix (createdby), INDEX mdl_pques_mod_ix (modifiedby), INDEX mdl_pques_par_ix (parent), INDEX mdl_pques_qty_ix (qtype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores the definition of one version of a questio' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_answers (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, answerformat TINYINT(1) DEFAULT 0 NOT NULL, fraction NUMERIC(12, 7) DEFAULT '0.0000000' NOT NULL, feedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, feedbackformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pquesansw_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Answers, with a fractional grade (0-1) and feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_attempt_step_data (id BIGINT AUTO_INCREMENT NOT NULL, attemptstepid BIGINT NOT NULL, name VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesattestepdata_att_ix (attemptstepid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each question_attempt_step has an associative array of the d' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_attempt_steps (id BIGINT AUTO_INCREMENT NOT NULL, questionattemptid BIGINT NOT NULL, sequencenumber BIGINT NOT NULL, state VARCHAR(13) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fraction NUMERIC(12, 7) DEFAULT NULL, timecreated BIGINT NOT NULL, userid BIGINT DEFAULT NULL, INDEX mdl_pquesattestep_que_ix (questionattemptid), UNIQUE INDEX mdl_pquesattestep_queseq_uix (questionattemptid, sequencenumber), INDEX mdl_pquesattestep_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores one step in in a question attempt. As well as the dat' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_attempts (id BIGINT AUTO_INCREMENT NOT NULL, questionusageid BIGINT NOT NULL, slot BIGINT NOT NULL, behaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, questionid BIGINT NOT NULL, variant BIGINT DEFAULT 1 NOT NULL, maxmark NUMERIC(12, 7) NOT NULL, minfraction NUMERIC(12, 7) NOT NULL, maxfraction NUMERIC(12, 7) DEFAULT '1.0000000' NOT NULL, flagged TINYINT(1) DEFAULT 0 NOT NULL, questionsummary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rightanswer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responsesummary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, INDEX mdl_pquesatte_beh_ix (behaviour), INDEX mdl_pquesatte_que2_ix (questionusageid), INDEX mdl_pquesatte_que_ix (questionid), UNIQUE INDEX mdl_pquesatte_queslo_uix (questionusageid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row here corresponds to an attempt at one question, as ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_bank_entries (id BIGINT AUTO_INCREMENT NOT NULL, questioncategoryid BIGINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ownerid BIGINT DEFAULT NULL, INDEX mdl_pquesbankentr_own_ix (ownerid), INDEX mdl_pquesbankentr_que_ix (questioncategoryid), UNIQUE INDEX mdl_pquesbankentr_queidn_uix (questioncategoryid, idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each question bank entry. This table has one row for each qu' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_calculated (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer BIGINT DEFAULT 0 NOT NULL, tolerance VARCHAR(20) CHARACTER SET utf8 DEFAULT '0.0' NOT NULL COLLATE `utf8_general_ci`, tolerancetype BIGINT DEFAULT 1 NOT NULL, correctanswerlength BIGINT DEFAULT 2 NOT NULL, correctanswerformat BIGINT DEFAULT 2 NOT NULL, INDEX mdl_pquescalc_ans_ix (answer), INDEX mdl_pquescalc_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type calculated' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_calculated_options (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, synchronize TINYINT(1) DEFAULT 0 NOT NULL, single SMALLINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 0 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, answernumbering VARCHAR(10) CHARACTER SET utf8 DEFAULT 'abc' NOT NULL COLLATE `utf8_general_ci`, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pquescalcopti_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type calculated' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_categories (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT DEFAULT 0 NOT NULL, info LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, infoformat TINYINT(1) DEFAULT 0 NOT NULL, stamp VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 999 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquescate_con_ix (contextid), UNIQUE INDEX mdl_pquescate_conidn_uix (contextid, idnumber), UNIQUE INDEX mdl_pquescate_consta_uix (contextid, stamp), INDEX mdl_pquescate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Categories are for grouping questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_dataset_definitions (id BIGINT AUTO_INCREMENT NOT NULL, category BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type BIGINT DEFAULT 0 NOT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemcount BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pquesdatadefi_cat_ix (category), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Organises and stores properties for dataset items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_dataset_items (id BIGINT AUTO_INCREMENT NOT NULL, definition BIGINT DEFAULT 0 NOT NULL, itemnumber BIGINT DEFAULT 0 NOT NULL, value VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesdataitem_def_ix (definition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Individual dataset items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_datasets (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, datasetdefinition BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pquesdata_dat_ix (datasetdefinition), INDEX mdl_pquesdata_que_ix (question), INDEX mdl_pquesdata_quedat_ix (question, datasetdefinition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Many-many relation between questions and dataset definitions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_ddwtos (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pquesddwt_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (words into sentences) questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_gapselect (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pquesgaps_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines select missing words questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_hints (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT NOT NULL, hint LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, hintformat SMALLINT DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT NULL, clearwrong TINYINT(1) DEFAULT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pqueshint_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the the part of the question definition that gives di' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_multianswer (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, sequence LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesmult_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for multianswer questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_numerical (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer BIGINT DEFAULT 0 NOT NULL, tolerance VARCHAR(255) CHARACTER SET utf8 DEFAULT '0.0' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesnume_ans_ix (answer), INDEX mdl_pquesnume_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for numerical questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_numerical_options (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, showunits SMALLINT DEFAULT 0 NOT NULL, unitsleft SMALLINT DEFAULT 0 NOT NULL, unitgradingtype SMALLINT DEFAULT 0 NOT NULL, unitpenalty NUMERIC(12, 7) DEFAULT '0.1000000' NOT NULL, INDEX mdl_pquesnumeopti_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type numerical This table is also u' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_numerical_units (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, multiplier NUMERIC(38, 19) DEFAULT '1.0000000000000000000' NOT NULL, unit VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesnumeunit_que_ix (question), UNIQUE INDEX mdl_pquesnumeunit_queuni_uix (question, unit), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Optional unit options for numerical questions. This table is' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_references (id BIGINT AUTO_INCREMENT NOT NULL, usingcontextid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, questionarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, questionbankentryid BIGINT DEFAULT 0 NOT NULL, version BIGINT DEFAULT NULL, INDEX mdl_pquesrefe_que_ix (questionbankentryid), INDEX mdl_pquesrefe_usi_ix (usingcontextid), UNIQUE INDEX mdl_pquesrefe_usicomqueite_uix (usingcontextid, component, questionarea, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records where a specific question is used.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_response_analysis (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, whichtries VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, questionid BIGINT NOT NULL, variant BIGINT DEFAULT NULL, subqid VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aid VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, response LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, credit NUMERIC(15, 5) NOT NULL, INDEX mdl_pquesrespanal_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analysis of student responses given to questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_response_count (id BIGINT AUTO_INCREMENT NOT NULL, analysisid BIGINT NOT NULL, try BIGINT NOT NULL, rcount BIGINT NOT NULL, INDEX mdl_pquesrespcoun_ana_ix (analysisid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Count for each responses for each try at a question.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_set_references (id BIGINT AUTO_INCREMENT NOT NULL, usingcontextid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, questionarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, questionscontextid BIGINT DEFAULT 0 NOT NULL, filtercondition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquessetrefe_que_ix (questionscontextid), INDEX mdl_pquessetrefe_usi_ix (usingcontextid), UNIQUE INDEX mdl_pquessetrefe_usicomque_uix (usingcontextid, component, questionarea, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records where groups of questions are used.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_statistics (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, questionid BIGINT NOT NULL, slot BIGINT DEFAULT NULL, subquestion SMALLINT NOT NULL, variant BIGINT DEFAULT NULL, s BIGINT DEFAULT 0 NOT NULL, effectiveweight NUMERIC(15, 5) DEFAULT NULL, negcovar TINYINT(1) DEFAULT 0 NOT NULL, discriminationindex NUMERIC(15, 5) DEFAULT NULL, discriminativeefficiency NUMERIC(15, 5) DEFAULT NULL, sd NUMERIC(15, 10) DEFAULT NULL, facility NUMERIC(15, 10) DEFAULT NULL, subquestions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, maxmark NUMERIC(12, 7) DEFAULT NULL, positions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, randomguessscore NUMERIC(12, 7) DEFAULT NULL, INDEX mdl_pquesstat_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Statistics for individual questions used in an activity.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_truefalse (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, trueanswer BIGINT DEFAULT 0 NOT NULL, falseanswer BIGINT DEFAULT 0 NOT NULL, showstandardinstruction TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_pquestrue_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for True-False questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_usages (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, preferredbehaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesusag_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table''s main purpose it to assign a unique id to each a' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquestion_versions (id BIGINT AUTO_INCREMENT NOT NULL, questionbankentryid BIGINT DEFAULT 0 NOT NULL, version BIGINT DEFAULT 1 NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, status VARCHAR(10) CHARACTER SET utf8 DEFAULT 'ready' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquesvers_que2_ix (questionid), INDEX mdl_pquesvers_que_ix (questionbankentryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A join table linking the different question version definiti' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, overduehandling VARCHAR(16) CHARACTER SET utf8 DEFAULT 'autoabandon' NOT NULL COLLATE `utf8_general_ci`, graceperiod BIGINT DEFAULT 0 NOT NULL, preferredbehaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, canredoquestions SMALLINT DEFAULT 0 NOT NULL, attempts INT DEFAULT 0 NOT NULL, attemptonlast SMALLINT DEFAULT 0 NOT NULL, grademethod SMALLINT DEFAULT 1 NOT NULL, decimalpoints SMALLINT DEFAULT 2 NOT NULL, questiondecimalpoints SMALLINT DEFAULT -1 NOT NULL, reviewattempt INT DEFAULT 0 NOT NULL, reviewcorrectness INT DEFAULT 0 NOT NULL, reviewmaxmarks INT DEFAULT 0 NOT NULL, reviewmarks INT DEFAULT 0 NOT NULL, reviewspecificfeedback INT DEFAULT 0 NOT NULL, reviewgeneralfeedback INT DEFAULT 0 NOT NULL, reviewrightanswer INT DEFAULT 0 NOT NULL, reviewoverallfeedback INT DEFAULT 0 NOT NULL, questionsperpage BIGINT DEFAULT 0 NOT NULL, navmethod VARCHAR(16) CHARACTER SET utf8 DEFAULT 'free' NOT NULL COLLATE `utf8_general_ci`, shuffleanswers SMALLINT DEFAULT 0 NOT NULL, sumgrades NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, password VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subnet VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, browsersecurity VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, delay1 BIGINT DEFAULT 0 NOT NULL, delay2 BIGINT DEFAULT 0 NOT NULL, showuserpicture SMALLINT DEFAULT 0 NOT NULL, showblocks SMALLINT DEFAULT 0 NOT NULL, completionattemptsexhausted TINYINT(1) DEFAULT 0, completionminattempts BIGINT DEFAULT 0 NOT NULL, allowofflineattempts TINYINT(1) DEFAULT 0, INDEX mdl_pquiz_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The settings for each quiz.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_attempts (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, attempt INT DEFAULT 0 NOT NULL, uniqueid BIGINT DEFAULT 0 NOT NULL, layout LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, currentpage BIGINT DEFAULT 0 NOT NULL, preview SMALLINT DEFAULT 0 NOT NULL, state VARCHAR(16) CHARACTER SET utf8 DEFAULT 'inprogress' NOT NULL COLLATE `utf8_general_ci`, timestart BIGINT DEFAULT 0 NOT NULL, timefinish BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timemodifiedoffline BIGINT DEFAULT 0 NOT NULL, timecheckstate BIGINT DEFAULT 0, sumgrades NUMERIC(10, 5) DEFAULT NULL, gradednotificationsenttime BIGINT DEFAULT NULL, INDEX mdl_pquizatte_qui_ix (quiz), UNIQUE INDEX mdl_pquizatte_quiuseatt_uix (quiz, userid, attempt), INDEX mdl_pquizatte_statim_ix (state, timecheckstate), UNIQUE INDEX mdl_pquizatte_uni_uix (uniqueid), INDEX mdl_pquizatte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores users attempts at quizzes.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_feedback (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT DEFAULT 0 NOT NULL, feedbacktext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, feedbacktextformat TINYINT(1) DEFAULT 0 NOT NULL, mingrade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, maxgrade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, INDEX mdl_pquizfeed_qui_ix (quizid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Feedback given to students based on which grade band their o' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_grade_items (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT NOT NULL, sortorder BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquizgraditem_qui_ix (quizid), UNIQUE INDEX mdl_pquizgraditem_quisor_uix (quizid, sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Where a quiz supports mulitple grades, this table stores wha' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_grades (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pquizgrad_qui_ix (quiz), INDEX mdl_pquizgrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the overall grade for each user on the quiz, based on' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_overrides (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, timeopen BIGINT DEFAULT NULL, timeclose BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, attempts INT DEFAULT NULL, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pquizover_gro_ix (groupid), INDEX mdl_pquizover_qui_ix (quiz), INDEX mdl_pquizover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to quiz settings on a per-user and per-group b' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_overview_regrades (id BIGINT AUTO_INCREMENT NOT NULL, questionusageid BIGINT NOT NULL, slot BIGINT NOT NULL, newfraction NUMERIC(12, 7) DEFAULT NULL, oldfraction NUMERIC(12, 7) DEFAULT NULL, regraded SMALLINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pquizoverregr_queslo_ix (questionusageid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table records which question attempts need regrading an' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_reports (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, displayorder BIGINT NOT NULL, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pquizrepo_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Lists all the installed quiz reports and their display order' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_sections (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT NOT NULL, firstslot BIGINT NOT NULL, heading VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, shufflequestions SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_pquizsect_qui_ix (quizid), UNIQUE INDEX mdl_pquizsect_quifir_uix (quizid, firstslot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores sections of a quiz with section name (heading), from ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_slots (id BIGINT AUTO_INCREMENT NOT NULL, slot BIGINT NOT NULL, quizid BIGINT DEFAULT 0 NOT NULL, page BIGINT NOT NULL, displaynumber VARCHAR(16) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, requireprevious SMALLINT DEFAULT 0 NOT NULL, maxmark NUMERIC(12, 7) DEFAULT '0.0000000' NOT NULL, quizgradeitemid BIGINT DEFAULT NULL, INDEX mdl_pquizslot_qui2_ix (quizgradeitemid), INDEX mdl_pquizslot_qui_ix (quizid), UNIQUE INDEX mdl_pquizslot_quislo_uix (quizid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the question used in a quiz, with the order, and for ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquiz_statistics (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, whichattempts SMALLINT NOT NULL, timemodified BIGINT NOT NULL, firstattemptscount BIGINT NOT NULL, highestattemptscount BIGINT NOT NULL, lastattemptscount BIGINT NOT NULL, allattemptscount BIGINT NOT NULL, firstattemptsavg NUMERIC(15, 5) DEFAULT NULL, highestattemptsavg NUMERIC(15, 5) DEFAULT NULL, lastattemptsavg NUMERIC(15, 5) DEFAULT NULL, allattemptsavg NUMERIC(15, 5) DEFAULT NULL, median NUMERIC(15, 5) DEFAULT NULL, standarddeviation NUMERIC(15, 5) DEFAULT NULL, skewness NUMERIC(15, 10) DEFAULT NULL, kurtosis NUMERIC(15, 5) DEFAULT NULL, cic NUMERIC(15, 10) DEFAULT NULL, errorratio NUMERIC(15, 10) DEFAULT NULL, standarderror NUMERIC(15, 10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'table to cache results from analysis done in statistics repo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquizaccess_seb_quizsettings (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT NOT NULL, cmid BIGINT NOT NULL, templateid BIGINT NOT NULL, requiresafeexambrowser TINYINT(1) NOT NULL, showsebtaskbar TINYINT(1) DEFAULT NULL, showwificontrol TINYINT(1) DEFAULT NULL, showreloadbutton TINYINT(1) DEFAULT NULL, showtime TINYINT(1) DEFAULT NULL, showkeyboardlayout TINYINT(1) DEFAULT NULL, allowuserquitseb TINYINT(1) DEFAULT NULL, quitpassword LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, linkquitseb LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userconfirmquit TINYINT(1) DEFAULT NULL, enableaudiocontrol TINYINT(1) DEFAULT NULL, muteonstartup TINYINT(1) DEFAULT NULL, allowspellchecking TINYINT(1) DEFAULT NULL, allowreloadinexam TINYINT(1) DEFAULT NULL, activateurlfiltering TINYINT(1) DEFAULT NULL, filterembeddedcontent TINYINT(1) DEFAULT NULL, expressionsallowed LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, regexallowed LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expressionsblocked LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, regexblocked LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, allowedbrowserexamkeys LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, showsebdownloadlink TINYINT(1) DEFAULT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_pquizsebquiz_cmi_uix (cmid), UNIQUE INDEX mdl_pquizsebquiz_qui_uix (quizid), INDEX mdl_pquizsebquiz_tem_ix (templateid), INDEX mdl_pquizsebquiz_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the quiz level Safe Exam Browser configuration.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pquizaccess_seb_template (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, sortorder BIGINT NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pquizsebtemp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Templates for Safe Exam Browser configuration.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prating (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ratingarea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, scaleid BIGINT NOT NULL, rating BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_prati_comratconite_ix (component, ratingarea, contextid, itemid), INDEX mdl_prati_con_ix (contextid), INDEX mdl_prati_sca_ix (scaleid), INDEX mdl_prati_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle ratings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pregistration_hubs (id BIGINT AUTO_INCREMENT NOT NULL, token VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hubname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, huburl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirmed TINYINT(1) DEFAULT 0 NOT NULL, secret VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'hub where the site is registered on with their associated to' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_preportbuilder_audience (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT NOT NULL, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prepoaudi_rep_ix (reportid), INDEX mdl_prepoaudi_use2_ix (usermodified), INDEX mdl_prepoaudi_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines report audience' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_preportbuilder_column (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, uniqueidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation VARCHAR(32) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, columnorder BIGINT NOT NULL, sortenabled TINYINT(1) DEFAULT 0 NOT NULL, sortdirection TINYINT(1) NOT NULL, sortorder BIGINT DEFAULT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prepocolu_rep_ix (reportid), INDEX mdl_prepocolu_use2_ix (usermodified), INDEX mdl_prepocolu_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report column' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_preportbuilder_filter (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, uniqueidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iscondition TINYINT(1) DEFAULT 0 NOT NULL, filterorder BIGINT NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prepofilt_rep_ix (reportid), UNIQUE INDEX mdl_prepofilt_repuniisc_uix (reportid, uniqueidentifier, iscondition), INDEX mdl_prepofilt_use2_ix (usermodified), INDEX mdl_prepofilt_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report filter/condition' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_preportbuilder_report (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, source VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type TINYINT(1) DEFAULT 0 NOT NULL, uniquerows TINYINT(1) DEFAULT 0 NOT NULL, conditiondata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settingsdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, area VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_preporepo_con_ix (contextid), INDEX mdl_preporepo_use2_ix (usermodified), INDEX mdl_preporepo_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_preportbuilder_schedule (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, audiences LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subject VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messageformat BIGINT NOT NULL, userviewas BIGINT DEFAULT 0 NOT NULL, timescheduled BIGINT DEFAULT 0 NOT NULL, recurrence BIGINT DEFAULT 0 NOT NULL, reportempty BIGINT DEFAULT 0 NOT NULL, timelastsent BIGINT DEFAULT 0 NOT NULL, timenextsend BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_preposche_rep_ix (reportid), INDEX mdl_preposche_use2_ix (usercreated), INDEX mdl_preposche_use3_ix (usermodified), INDEX mdl_preposche_use_ix (userviewas), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report schedule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prepository (id BIGINT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1, sortorder BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains one entry for every configured external ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prepository_instance_config (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The config for intances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prepository_instances (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, typeid BIGINT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT NOT NULL, username VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, readonly TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_prepoinst_con_ix (contextid), INDEX mdl_prepoinst_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains one entry for every configured external ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prepository_onedrive_access (id BIGINT AUTO_INCREMENT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, permissionid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_prepoonedacce_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of temporary access grants.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_presource (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, tobemigrated SMALLINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, legacyfileslast BIGINT DEFAULT NULL, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, filterfiles SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_preso_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one resource and its config data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_presource_old (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, reference VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, alltext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, popup LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, cmid BIGINT DEFAULT NULL, newmodule VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, newid BIGINT DEFAULT NULL, migrated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_presoold_cmi_ix (cmid), UNIQUE INDEX mdl_presoold_old_uix (oldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'backup of all old resource instances from 1.9' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_profiling (id BIGINT AUTO_INCREMENT NOT NULL, runid VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, url VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, data LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, totalexecutiontime BIGINT NOT NULL, totalcputime BIGINT NOT NULL, totalcalls BIGINT NOT NULL, totalmemory BIGINT NOT NULL, runreference TINYINT(1) DEFAULT 0 NOT NULL, runcomment VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, UNIQUE INDEX mdl_prof_run_uix (runid), INDEX mdl_prof_timrun_ix (timecreated, runreference), INDEX mdl_prof_urlrun_ix (url, runreference), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the results of all the profiling runs' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, archetype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_prole_sho_uix (shortname), UNIQUE INDEX mdl_prole_sor_uix (sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle roles' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_allow_assign (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, allowassign BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prolealloassi_all_ix (allowassign), INDEX mdl_prolealloassi_rol_ix (roleid), UNIQUE INDEX mdl_prolealloassi_rolall_uix (roleid, allowassign), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines what role can assign what role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_allow_override (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, allowoverride BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prolealloover_all_ix (allowoverride), INDEX mdl_prolealloover_rol_ix (roleid), UNIQUE INDEX mdl_prolealloover_rolall_uix (roleid, allowoverride), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines what role can override what role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_allow_switch (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, allowswitch BIGINT NOT NULL, INDEX mdl_prolealloswit_all_ix (allowswitch), INDEX mdl_prolealloswit_rol_ix (roleid), UNIQUE INDEX mdl_prolealloswit_rolall_uix (roleid, allowswitch), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores which which other roles a user is allowed ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_allow_view (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, allowview BIGINT NOT NULL, INDEX mdl_prolealloview_all_ix (allowview), INDEX mdl_prolealloview_rol_ix (roleid), UNIQUE INDEX mdl_prolealloview_rolall_uix (roleid, allowview), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores which which other roles a user is allowed ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_assignments (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_proleassi_comiteuse_ix (component, itemid, userid), INDEX mdl_proleassi_con_ix (contextid), INDEX mdl_proleassi_rol_ix (roleid), INDEX mdl_proleassi_rolcon_ix (roleid, contextid), INDEX mdl_proleassi_sor_ix (sortorder), INDEX mdl_proleassi_use_ix (userid), INDEX mdl_proleassi_useconrol_ix (userid, contextid, roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'assigning roles in different context' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_capabilities (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, permission BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_prolecapa_cap_ix (capability), INDEX mdl_prolecapa_con_ix (contextid), INDEX mdl_prolecapa_mod_ix (modifierid), INDEX mdl_prolecapa_rol_ix (roleid), UNIQUE INDEX mdl_prolecapa_rolconcap_uix (roleid, contextid, capability), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'permission has to be signed, overriding a capability for a p' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_context_levels (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, UNIQUE INDEX mdl_prolecontleve_conrol_uix (contextlevel, roleid), INDEX mdl_prolecontleve_rol_ix (roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Lists which roles can be assigned at which context levels. T' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_prole_names (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_prolename_con_ix (contextid), INDEX mdl_prolename_rol_ix (roleid), UNIQUE INDEX mdl_prolename_rolcon_uix (roleid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'role names in native strings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscale (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scale LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pscal_cou_ix (courseid), INDEX mdl_pscal_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines grading scales' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscale_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scale LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pscalhist_act_ix (action), INDEX mdl_pscalhist_cou_ix (courseid), INDEX mdl_pscalhist_log_ix (loggeduser), INDEX mdl_pscalhist_old_ix (oldid), INDEX mdl_pscalhist_tim_ix (timemodified), INDEX mdl_pscalhist_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scormtype VARCHAR(50) CHARACTER SET utf8 DEFAULT 'local' NOT NULL COLLATE `utf8_general_ci`, reference VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, version VARCHAR(9) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, maxgrade DOUBLE PRECISION DEFAULT '0' NOT NULL, grademethod TINYINT(1) DEFAULT 0 NOT NULL, whatgrade BIGINT DEFAULT 0 NOT NULL, maxattempt BIGINT DEFAULT 1 NOT NULL, forcecompleted TINYINT(1) DEFAULT 0 NOT NULL, forcenewattempt TINYINT(1) DEFAULT 0 NOT NULL, lastattemptlock TINYINT(1) DEFAULT 0 NOT NULL, masteryoverride TINYINT(1) DEFAULT 1 NOT NULL, displayattemptstatus TINYINT(1) DEFAULT 1 NOT NULL, displaycoursestructure TINYINT(1) DEFAULT 0 NOT NULL, updatefreq TINYINT(1) DEFAULT 0 NOT NULL, sha1hash VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, md5hash VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, revision BIGINT DEFAULT 0 NOT NULL, launch BIGINT DEFAULT 0 NOT NULL, skipview TINYINT(1) DEFAULT 1 NOT NULL, hidebrowse TINYINT(1) DEFAULT 0 NOT NULL, hidetoc TINYINT(1) DEFAULT 0 NOT NULL, nav TINYINT(1) DEFAULT 1 NOT NULL, navpositionleft BIGINT DEFAULT -100, navpositiontop BIGINT DEFAULT -100, auto TINYINT(1) DEFAULT 0 NOT NULL, popup TINYINT(1) DEFAULT 0 NOT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, width BIGINT DEFAULT 100 NOT NULL, height BIGINT DEFAULT 600 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionstatusrequired TINYINT(1) DEFAULT NULL, completionscorerequired BIGINT DEFAULT NULL, completionstatusallscos TINYINT(1) DEFAULT NULL, autocommit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pscor_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each table is one SCORM module and its configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_aicc_session (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, scormid BIGINT DEFAULT 0 NOT NULL, hacpsession VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scoid BIGINT DEFAULT 0, scormmode VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scormstatus VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, attempt BIGINT DEFAULT NULL, lessonstatus VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sessiontime VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pscoraiccsess_sco_ix (scormid), INDEX mdl_pscoraiccsess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Used by AICC HACP to store session information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_attempt (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, scormid BIGINT NOT NULL, attempt BIGINT DEFAULT 1 NOT NULL, INDEX mdl_pscoratte_sco_ix (scormid), INDEX mdl_pscoratte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of SCORM attempts made by user.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_element (id BIGINT AUTO_INCREMENT NOT NULL, element VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pscorelem_ele_uix (element), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of scorm elements.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_scoes (id BIGINT AUTO_INCREMENT NOT NULL, scorm BIGINT DEFAULT 0 NOT NULL, manifest VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, organization VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, identifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, launch LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scormtype VARCHAR(5) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pscorscoe_sco_ix (scorm), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each SCO part of the SCORM module' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_scoes_data (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pscorscoedata_sco_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains variable data get from packages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_scoes_value (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT NOT NULL, attemptid BIGINT NOT NULL, elementid BIGINT NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pscorscoevalu_att_ix (attemptid), INDEX mdl_pscorscoevalu_ele_ix (elementid), INDEX mdl_pscorscoevalu_sco_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Values passed from SCORM package' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_mapinfo (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, objectiveid BIGINT DEFAULT 0 NOT NULL, targetobjectiveid BIGINT DEFAULT 0 NOT NULL, readsatisfiedstatus TINYINT(1) DEFAULT 1 NOT NULL, readnormalizedmeasure TINYINT(1) DEFAULT 1 NOT NULL, writesatisfiedstatus TINYINT(1) DEFAULT 0 NOT NULL, writenormalizedmeasure TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pscorseqmapi_obj_ix (objectiveid), INDEX mdl_pscorseqmapi_sco_ix (scoid), UNIQUE INDEX mdl_pscorseqmapi_scoidobj_uix (scoid, id, objectiveid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 objective mapinfo description' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_objective (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, primaryobj TINYINT(1) DEFAULT 0 NOT NULL, objectiveid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, satisfiedbymeasure TINYINT(1) DEFAULT 1 NOT NULL, minnormalizedmeasure DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, INDEX mdl_pscorseqobje_sco_ix (scoid), UNIQUE INDEX mdl_pscorseqobje_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 objective description' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_rolluprule (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, childactivityset VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, minimumcount BIGINT DEFAULT 0 NOT NULL, minimumpercent DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, conditioncombination VARCHAR(3) CHARACTER SET utf8 DEFAULT 'all' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pscorseqroll_sco_ix (scoid), UNIQUE INDEX mdl_pscorseqroll_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 sequencing rule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_rolluprulecond (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, rollupruleid BIGINT DEFAULT 0 NOT NULL, operator VARCHAR(5) CHARACTER SET utf8 DEFAULT 'noOp' NOT NULL COLLATE `utf8_general_ci`, cond VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pscorseqroll_rol_ix (rollupruleid), INDEX mdl_pscorseqroll_sco2_ix (scoid), UNIQUE INDEX mdl_pscorseqroll_scorolid_uix (scoid, rollupruleid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 sequencing rule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_rulecond (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, ruleconditionsid BIGINT DEFAULT 0 NOT NULL, refrencedobjective VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, measurethreshold DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, operator VARCHAR(5) CHARACTER SET utf8 DEFAULT 'noOp' NOT NULL COLLATE `utf8_general_ci`, cond VARCHAR(30) CHARACTER SET utf8 DEFAULT 'always' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pscorseqrule_idscorul_uix (id, scoid, ruleconditionsid), INDEX mdl_pscorseqrule_rul_ix (ruleconditionsid), INDEX mdl_pscorseqrule_sco2_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 rule condition' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pscorm_seq_ruleconds (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, conditioncombination VARCHAR(3) CHARACTER SET utf8 DEFAULT 'all' NOT NULL COLLATE `utf8_general_ci`, ruletype TINYINT(1) DEFAULT 0 NOT NULL, action VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pscorseqrule_sco_ix (scoid), UNIQUE INDEX mdl_pscorseqrule_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 rule conditions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psearch_index_requests (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, searcharea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timerequested BIGINT NOT NULL, partialarea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, partialtime BIGINT NOT NULL, indexpriority BIGINT NOT NULL, INDEX mdl_psearinderequ_con_ix (contextid), INDEX mdl_psearinderequ_indtim_ix (indexpriority, timerequested), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records requests for (re)indexing of specific contexts. Entr' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psearch_simpledb_index (id BIGINT AUTO_INCREMENT NOT NULL, docid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, title LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, areaid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type TINYINT(1) NOT NULL, courseid BIGINT NOT NULL, owneruserid BIGINT DEFAULT NULL, modified BIGINT NOT NULL, userid BIGINT DEFAULT NULL, description1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, FULLTEXT INDEX mdl_psearch_simpledb_index_index (title, content, description1, description2), INDEX mdl_psearsimpinde_are_ix (areaid), INDEX mdl_psearsimpinde_con_ix (contextid), INDEX mdl_psearsimpinde_cou_ix (courseid), UNIQUE INDEX mdl_psearsimpinde_doc_uix (docid), INDEX mdl_psearsimpinde_owncon_ix (owneruserid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'search_simpledb table containing the index data.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psessions (id BIGINT AUTO_INCREMENT NOT NULL, state BIGINT DEFAULT 0 NOT NULL, sid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, sessdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, firstip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_psess_sid_uix (sid), INDEX mdl_psess_sta_ix (state), INDEX mdl_psess_tim2_ix (timemodified), INDEX mdl_psess_tim_ix (timecreated), INDEX mdl_psess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Database based session storage - now recommended' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_daily (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pstatdail_cou_ix (courseid), INDEX mdl_pstatdail_rol_ix (roleid), INDEX mdl_pstatdail_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'to accumulate daily stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_monthly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pstatmont_cou_ix (courseid), INDEX mdl_pstatmont_rol_ix (roleid), INDEX mdl_pstatmont_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate monthly stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_user_daily (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pstatuserdail_cou_ix (courseid), INDEX mdl_pstatuserdail_rol_ix (roleid), INDEX mdl_pstatuserdail_tim_ix (timeend), INDEX mdl_pstatuserdail_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate daily stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_user_monthly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pstatusermont_cou_ix (courseid), INDEX mdl_pstatusermont_rol_ix (roleid), INDEX mdl_pstatusermont_tim_ix (timeend), INDEX mdl_pstatusermont_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate monthly stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_user_weekly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_pstatuserweek_cou_ix (courseid), INDEX mdl_pstatuserweek_rol_ix (roleid), INDEX mdl_pstatuserweek_tim_ix (timeend), INDEX mdl_pstatuserweek_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate weekly stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pstats_weekly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pstatweek_cou_ix (courseid), INDEX mdl_pstatweek_rol_ix (roleid), INDEX mdl_pstatweek_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate weekly stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psurvey (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, template BIGINT DEFAULT 0 NOT NULL, days INT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, questions VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_psurv_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one SURVEY module with its configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psurvey_analysis (id BIGINT AUTO_INCREMENT NOT NULL, survey BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, notes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_psurvanal_sur_ix (survey), INDEX mdl_psurvanal_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'text about each survey submission' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psurvey_answers (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, survey BIGINT DEFAULT 0 NOT NULL, question BIGINT DEFAULT 0 NOT NULL, time BIGINT DEFAULT 0 NOT NULL, answer1 LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, answer2 LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_psurvansw_que_ix (question), INDEX mdl_psurvansw_sur_ix (survey), INDEX mdl_psurvansw_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the answers to each questions filled by the users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_psurvey_questions (id BIGINT AUTO_INCREMENT NOT NULL, text VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shorttext VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, multi VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type SMALLINT DEFAULT 0 NOT NULL, options LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the questions conforming one survey' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptag (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, tagcollid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rawname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, isstandard TINYINT(1) DEFAULT 0 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, flag SMALLINT DEFAULT 0, timemodified BIGINT DEFAULT NULL, INDEX mdl_ptag_tag_ix (tagcollid), INDEX mdl_ptag_tagiss_ix (tagcollid, isstandard), UNIQUE INDEX mdl_ptag_tagnam_uix (tagcollid, name), INDEX mdl_ptag_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tag table - this generic table will replace the old "tags" t' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptag_area (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, tagcollid BIGINT NOT NULL, callback VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, callbackfile VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, showstandard TINYINT(1) DEFAULT 0 NOT NULL, multiplecontexts TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_ptagarea_comite_uix (component, itemtype), INDEX mdl_ptagarea_tag_ix (tagcollid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines various tag areas, one area is identified by compone' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptag_coll (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, isdefault TINYINT(1) DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sortorder INT DEFAULT 0 NOT NULL, searchable TINYINT(1) DEFAULT 1 NOT NULL, customurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines different set of tags' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptag_correlation (id BIGINT AUTO_INCREMENT NOT NULL, tagid BIGINT NOT NULL, correlatedtags LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_ptagcorr_tag_ix (tagid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The rationale for the ''tag_correlation'' table is performance' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptag_instance (id BIGINT AUTO_INCREMENT NOT NULL, tagid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, tiuserid BIGINT DEFAULT 0 NOT NULL, ordering BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_ptaginst_comiteitecont_uix (component, itemtype, itemid, contextid, tiuserid, tagid), INDEX mdl_ptaginst_con_ix (contextid), INDEX mdl_ptaginst_itecomtagcon_ix (itemtype, component, tagid, contextid), INDEX mdl_ptaginst_tag_ix (tagid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'tag_instance table holds the information of associations bet' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptask_adhoc (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, nextruntime BIGINT NOT NULL, faildelay BIGINT DEFAULT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, attemptsavailable TINYINT(1) DEFAULT NULL, firststartingtime BIGINT DEFAULT NULL, INDEX mdl_ptaskadho_nex_ix (nextruntime), INDEX mdl_ptaskadho_tim_ix (timestarted), INDEX mdl_ptaskadho_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of adhoc tasks waiting to run.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptask_log (id BIGINT AUTO_INCREMENT NOT NULL, type SMALLINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, timestart NUMERIC(20, 10) NOT NULL, timeend NUMERIC(20, 10) NOT NULL, dbreads BIGINT NOT NULL, dbwrites BIGINT NOT NULL, result TINYINT(1) NOT NULL, output LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, INDEX mdl_ptasklog_cla_ix (classname), INDEX mdl_ptasklog_tim_ix (timestart), INDEX mdl_ptasklog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The log table for all tasks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptask_scheduled (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lastruntime BIGINT DEFAULT NULL, nextruntime BIGINT DEFAULT NULL, minute VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hour VARCHAR(70) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, day VARCHAR(90) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, month VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dayofweek VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, faildelay BIGINT DEFAULT NULL, customised TINYINT(1) DEFAULT 0 NOT NULL, disabled TINYINT(1) DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, UNIQUE INDEX mdl_ptasksche_cla_uix (classname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of scheduled tasks to be run by cron.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptiny_autosave (id BIGINT AUTO_INCREMENT NOT NULL, elementid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, pagehash VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, drafttext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, draftid BIGINT DEFAULT NULL, pageinstance VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_ptinyauto_eleconusepag_uix (elementid, contextid, userid, pagehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The content of the textarea saved during autosave operations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_areas (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tablename VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fieldorarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, filename VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, reftable VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, refid BIGINT DEFAULT NULL, cmid BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, INDEX mdl_ptoolbricarea_cat_ix (categoryid), INDEX mdl_ptoolbricarea_cmi_ix (cmid), INDEX mdl_ptoolbricarea_con_ix (contextid), INDEX mdl_ptoolbricarea_cou_ix (courseid), INDEX mdl_ptoolbricarea_coucmi_ix (courseid, cmid), INDEX mdl_ptoolbricarea_refreftyp_ix (reftable, refid, type), INDEX mdl_ptoolbricarea_typconcom_ix (type, contextid, component, fieldorarea, itemid), INDEX mdl_ptoolbricarea_typtabite_ix (type, tablename, itemid, fieldorarea), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Areas that have been checked for accessibility problems' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_cache_acts (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, component VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, totalactivities BIGINT DEFAULT NULL, failedactivities BIGINT DEFAULT NULL, passedactivities BIGINT DEFAULT NULL, errorcount BIGINT DEFAULT NULL, INDEX mdl_ptoolbriccachacts_cou_ix (courseid), INDEX mdl_ptoolbriccachacts_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility summary information per activity.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_cache_check (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, checkid BIGINT DEFAULT NULL, checkcount BIGINT DEFAULT NULL, errorcount BIGINT DEFAULT NULL, INDEX mdl_ptoolbriccachchec_cou_ix (courseid), INDEX mdl_ptoolbriccachchec_err_ix (errorcount), INDEX mdl_ptoolbriccachchec_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility summary information per check.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_checks (id BIGINT AUTO_INCREMENT NOT NULL, checktype VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, checkgroup BIGINT DEFAULT 0, status SMALLINT NOT NULL, severity TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_ptoolbricchec_che2_ix (checkgroup), INDEX mdl_ptoolbricchec_che_ix (checktype), INDEX mdl_ptoolbricchec_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Checks details' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_content (id BIGINT AUTO_INCREMENT NOT NULL, areaid BIGINT NOT NULL, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, iscurrent TINYINT(1) DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timechecked BIGINT DEFAULT NULL, INDEX mdl_ptoolbriccont_are_ix (areaid), INDEX mdl_ptoolbriccont_iscare_ix (iscurrent, areaid), INDEX mdl_ptoolbriccont_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Content of an area at a particular time (recognised by a has' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_errors (id BIGINT AUTO_INCREMENT NOT NULL, resultid BIGINT NOT NULL, linenumber BIGINT DEFAULT 0 NOT NULL, errordata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, htmlcode LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_ptoolbricerro_res_ix (resultid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Errors during the accessibility checks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_process (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, item VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT DEFAULT NULL, innercontextid BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, timecompleted BIGINT DEFAULT NULL, INDEX mdl_ptoolbricproc_tim_ix (timecompleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Queued records to initiate new processing of specific target' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_results (id BIGINT AUTO_INCREMENT NOT NULL, contentid BIGINT DEFAULT NULL, checkid BIGINT NOT NULL, errorcount BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptoolbricresu_che_ix (checkid), INDEX mdl_ptoolbricresu_con_ix (contentid), INDEX mdl_ptoolbricresu_conche_ix (contentid, checkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Results of the accessibility checks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_schedule (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel BIGINT DEFAULT 50 NOT NULL, instanceid BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timeanalyzed BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0, UNIQUE INDEX mdl_ptoolbricsche_conins_uix (contextlevel, instanceid), INDEX mdl_ptoolbricsche_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps the per course content analysis schedule.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_brickfield_summary (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, activities BIGINT DEFAULT NULL, activitiespassed BIGINT DEFAULT NULL, activitiesfailed BIGINT DEFAULT NULL, errorschecktype1 BIGINT DEFAULT NULL, errorschecktype2 BIGINT DEFAULT NULL, errorschecktype3 BIGINT DEFAULT NULL, errorschecktype4 BIGINT DEFAULT NULL, errorschecktype5 BIGINT DEFAULT NULL, errorschecktype6 BIGINT DEFAULT NULL, errorschecktype7 BIGINT DEFAULT NULL, failedchecktype1 BIGINT DEFAULT NULL, failedchecktype2 BIGINT DEFAULT NULL, failedchecktype3 BIGINT DEFAULT NULL, failedchecktype4 BIGINT DEFAULT NULL, failedchecktype5 BIGINT DEFAULT NULL, failedchecktype6 BIGINT DEFAULT NULL, failedchecktype7 BIGINT DEFAULT NULL, percentchecktype1 BIGINT DEFAULT NULL, percentchecktype2 BIGINT DEFAULT NULL, percentchecktype3 BIGINT DEFAULT NULL, percentchecktype4 BIGINT DEFAULT NULL, percentchecktype5 BIGINT DEFAULT NULL, percentchecktype6 BIGINT DEFAULT NULL, percentchecktype7 BIGINT DEFAULT NULL, INDEX mdl_ptoolbricsumm_cou_ix (courseid), INDEX mdl_ptoolbricsumm_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility check results summary information.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_cohortroles (id BIGINT AUTO_INCREMENT NOT NULL, cohortid BIGINT NOT NULL, roleid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_ptoolcoho_cohroluse_uix (cohortid, roleid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Mapping of users to cohort role assignments.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_customlang (id BIGINT AUTO_INCREMENT NOT NULL, lang VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, componentid BIGINT NOT NULL, stringid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, original LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, master LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, local LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, timecustomized BIGINT DEFAULT NULL, outdated SMALLINT DEFAULT 0, modified SMALLINT DEFAULT 0, INDEX mdl_ptoolcust_com_ix (componentid), UNIQUE INDEX mdl_ptoolcust_lancomstr_uix (lang, componentid, stringid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the working checkout of all strings and their custo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_customlang_components (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the list of all installed plugins that provide thei' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_contextlist (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of contexts for a component' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_ctxexpired (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, unexpiredroles LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expiredroles LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultexpired TINYINT(1) NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_ptooldatactxe_con_uix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_ctxinstance (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, purposeid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_ptooldatactxi_cat_ix (categoryid), UNIQUE INDEX mdl_ptooldatactxi_con_uix (contextid), INDEX mdl_ptooldatactxi_pur_ix (purposeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_ctxlevel (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel SMALLINT NOT NULL, purposeid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_ptooldatactxl_cat_ix (categoryid), UNIQUE INDEX mdl_ptooldatactxl_con_uix (contextlevel), INDEX mdl_ptooldatactxl_pur_ix (purposeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_ctxlst_ctx (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, contextlistid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptooldatactxlctx_con_ix (contextlistid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A contextlist context item' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_purpose (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, lawfulbases LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sensitivedatareasons LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, retentionperiod VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data purposes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_purposerole (id BIGINT AUTO_INCREMENT NOT NULL, purposeid BIGINT NOT NULL, roleid BIGINT NOT NULL, lawfulbases LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sensitivedatareasons LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, retentionperiod VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_ptooldatapurp_pur_ix (purposeid), UNIQUE INDEX mdl_ptooldatapurp_purrol_uix (purposeid, roleid), INDEX mdl_ptooldatapurp_rol_ix (roleid), INDEX mdl_ptooldatapurp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data purpose overrides for a specific role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_request (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT DEFAULT 0 NOT NULL, comments LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentsformat TINYINT(1) DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, requestedby BIGINT DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, dpo BIGINT DEFAULT 0, dpocomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dpocommentformat TINYINT(1) DEFAULT 0 NOT NULL, systemapproved SMALLINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, creationmethod BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptooldatarequ_dpo_ix (dpo), INDEX mdl_ptooldatarequ_req_ix (requestedby), INDEX mdl_ptooldatarequ_use2_ix (usermodified), INDEX mdl_ptooldatarequ_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table for data requests' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_dataprivacy_rqst_ctxlst (id BIGINT AUTO_INCREMENT NOT NULL, requestid BIGINT NOT NULL, contextlistid BIGINT NOT NULL, INDEX mdl_ptooldatarqstctxl_con_ix (contextlistid), INDEX mdl_ptooldatarqstctxl_req_ix (requestid), UNIQUE INDEX mdl_ptooldatarqstctxl_reqc_uix (requestid, contextlistid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Association table joining requests and contextlists' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_mfa (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, factor VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, label VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, createdfromip VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, lastverified BIGINT DEFAULT NULL, revoked TINYINT(1) DEFAULT 0 NOT NULL, lockcounter INT DEFAULT 0 NOT NULL, INDEX mdl_ptoolmfa_fac_ix (factor), INDEX mdl_ptoolmfa_use_ix (userid), INDEX mdl_ptoolmfa_usefacloc_ix (userid, factor, lockcounter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store factor configurations for users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_mfa_auth (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, lastverified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptoolmfaauth_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the last time a successful MFA auth was registered fo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_mfa_secrets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, factor VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, expiry BIGINT NOT NULL, revoked TINYINT(1) DEFAULT 0 NOT NULL, sessionid VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_ptoolmfasecr_exp_ix (expiry), INDEX mdl_ptoolmfasecr_fac_ix (factor), INDEX mdl_ptoolmfasecr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store factor secrets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_monitor_events (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, contextinstanceid BIGINT NOT NULL, link VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, courseid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_ptoolmonieven_con2_ix (contextinstanceid), INDEX mdl_ptoolmonieven_con_ix (contextid), INDEX mdl_ptoolmonieven_cou_ix (courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A table that keeps a log of events related to subscriptions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_monitor_history (id BIGINT AUTO_INCREMENT NOT NULL, sid BIGINT NOT NULL, userid BIGINT NOT NULL, timesent BIGINT NOT NULL, INDEX mdl_ptoolmonihist_sid_ix (sid), UNIQUE INDEX mdl_ptoolmonihist_siduseti_uix (sid, userid, timesent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store history of message notifications sent' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_monitor_rules (id BIGINT AUTO_INCREMENT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, plugin VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, eventname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, template LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, templateformat TINYINT(1) NOT NULL, frequency SMALLINT NOT NULL, timewindow INT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_ptoolmonirule_couuse_ix (courseid, userid), INDEX mdl_ptoolmonirule_eve_ix (eventname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store rules' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_monitor_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, ruleid BIGINT NOT NULL, cmid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, lastnotificationsent BIGINT DEFAULT 0 NOT NULL, inactivedate BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptoolmonisubs_couuse_ix (courseid, userid), INDEX mdl_ptoolmonisubs_rul_ix (ruleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store user subscriptions to various rules' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_policy (id BIGINT AUTO_INCREMENT NOT NULL, sortorder INT DEFAULT 999 NOT NULL, currentversionid BIGINT DEFAULT NULL, INDEX mdl_ptoolpoli_cur_ix (currentversionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the list of policy documents defined on the site.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_policy_acceptances (id BIGINT AUTO_INCREMENT NOT NULL, policyversionid BIGINT NOT NULL, userid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, note LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_ptoolpoliacce_pol_ix (policyversionid), UNIQUE INDEX mdl_ptoolpoliacce_poluse_uix (policyversionid, userid), INDEX mdl_ptoolpoliacce_use2_ix (usermodified), INDEX mdl_ptoolpoliacce_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks users accepting the policy versions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_policy_versions (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type SMALLINT DEFAULT 0 NOT NULL, audience SMALLINT DEFAULT 0 NOT NULL, archived SMALLINT DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, policyid BIGINT NOT NULL, agreementstyle SMALLINT DEFAULT 0 NOT NULL, optional SMALLINT DEFAULT 0 NOT NULL, revision VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat SMALLINT NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT NOT NULL, INDEX mdl_ptoolpolivers_pol_ix (policyid), INDEX mdl_ptoolpolivers_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Holds versions of the policy documents' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_recyclebin_category (id BIGINT AUTO_INCREMENT NOT NULL, categoryid BIGINT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_ptoolrecycate_cat_ix (categoryid), INDEX mdl_ptoolrecycate_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of items in the category recycle bin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_recyclebin_course (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, section BIGINT NOT NULL, module BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_ptoolrecycour_cou_ix (courseid), INDEX mdl_ptoolrecycour_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of items in the course recycle bin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_usertours_steps (id BIGINT AUTO_INCREMENT NOT NULL, tourid BIGINT NOT NULL, title LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, targettype TINYINT(1) NOT NULL, targetvalue LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_ptooluserstep_tou_ix (tourid), INDEX mdl_ptooluserstep_tousor_ix (tourid, sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Steps in an tour' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_ptool_usertours_tours (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pathmatch VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, endtourlabel VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, displaystepnumbers TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of tours' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pupgrade_log (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, version VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetversion VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, details LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, backtrace LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_pupgrlog_tim_ix (timemodified), INDEX mdl_pupgrlog_typtim_ix (type, timemodified), INDEX mdl_pupgrlog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Upgrade logging' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_purl (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, externalurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, parameters LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_purl_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one url resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser (id BIGINT AUTO_INCREMENT NOT NULL, auth VARCHAR(20) CHARACTER SET utf8 DEFAULT 'manual' NOT NULL COLLATE `utf8_general_ci`, confirmed TINYINT(1) DEFAULT 0 NOT NULL, policyagreed TINYINT(1) DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, suspended TINYINT(1) DEFAULT 0 NOT NULL, mnethostid BIGINT DEFAULT 0 NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lastname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, email VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, emailstop TINYINT(1) DEFAULT 0 NOT NULL, phone1 VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, phone2 VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, institution VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, department VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, address VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, city VARCHAR(120) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, country VARCHAR(2) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT 'en' NOT NULL COLLATE `utf8_general_ci`, calendartype VARCHAR(30) CHARACTER SET utf8 DEFAULT 'gregorian' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timezone VARCHAR(100) CHARACTER SET utf8 DEFAULT '99' NOT NULL COLLATE `utf8_general_ci`, firstaccess BIGINT DEFAULT 0 NOT NULL, lastaccess BIGINT DEFAULT 0 NOT NULL, lastlogin BIGINT DEFAULT 0 NOT NULL, currentlogin BIGINT DEFAULT 0 NOT NULL, lastip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, picture BIGINT DEFAULT 0 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 1 NOT NULL, mailformat TINYINT(1) DEFAULT 1 NOT NULL, maildigest TINYINT(1) DEFAULT 0 NOT NULL, maildisplay TINYINT(1) DEFAULT 2 NOT NULL, autosubscribe TINYINT(1) DEFAULT 1 NOT NULL, trackforums TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, trustbitmask BIGINT DEFAULT 0 NOT NULL, imagealt VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastnamephonetic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, firstnamephonetic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, middlename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, alternatename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moodlenetprofile VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_puser_alt_ix (alternatename), INDEX mdl_puser_aut_ix (auth), INDEX mdl_puser_cit_ix (city), INDEX mdl_puser_con_ix (confirmed), INDEX mdl_puser_cou_ix (country), INDEX mdl_puser_del_ix (deleted), INDEX mdl_puser_ema_ix (email), INDEX mdl_puser_fir2_ix (firstnamephonetic), INDEX mdl_puser_fir_ix (firstname), INDEX mdl_puser_idn_ix (idnumber), INDEX mdl_puser_las2_ix (lastaccess), INDEX mdl_puser_las3_ix (lastnamephonetic), INDEX mdl_puser_las_ix (lastname), INDEX mdl_puser_mid_ix (middlename), UNIQUE INDEX mdl_puser_mneuse_uix (mnethostid, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'One record for each person' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_devices (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, appid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, model VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platform VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pushid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, uuid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, publickey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_puserdevi_pususe_uix (pushid, userid), INDEX mdl_puserdevi_use_ix (userid), INDEX mdl_puserdevi_uuiuse_ix (uuid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores user''s mobile devices information in order' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_enrolments (id BIGINT AUTO_INCREMENT NOT NULL, status BIGINT DEFAULT 0 NOT NULL, enrolid BIGINT NOT NULL, userid BIGINT NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 2147483647 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_puserenro_enr_ix (enrolid), UNIQUE INDEX mdl_puserenro_enruse_uix (enrolid, userid), INDEX mdl_puserenro_mod_ix (modifierid), INDEX mdl_puserenro_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users participating in courses (aka enrolled users) - everyb' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_info_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Customisable fields categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_info_data (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, fieldid BIGINT DEFAULT 0 NOT NULL, data LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, dataformat TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_puserinfodata_usefie_uix (userid, fieldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data for the customisable user fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_info_field (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT 'shortname' NOT NULL COLLATE `utf8_general_ci`, name LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, datatype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, required TINYINT(1) DEFAULT 0 NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, visible SMALLINT DEFAULT 0 NOT NULL, forceunique TINYINT(1) DEFAULT 0 NOT NULL, signup TINYINT(1) DEFAULT 0 NOT NULL, defaultdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultdataformat TINYINT(1) DEFAULT 0 NOT NULL, param1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param5 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Customisable user profile fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_lastaccess (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeaccess BIGINT DEFAULT 0 NOT NULL, INDEX mdl_puserlast_cou_ix (courseid), INDEX mdl_puserlast_use_ix (userid), UNIQUE INDEX mdl_puserlast_usecou_uix (userid, courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To keep track of course page access times, used in online pa' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_password_history (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, hash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_puserpasshist_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A rotating log of hashes of previously used passwords for ea' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_password_resets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, timerequested BIGINT NOT NULL, timererequested BIGINT DEFAULT 0 NOT NULL, token VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_puserpassrese_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'table tracking password reset confirmation tokens' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_preferences (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_puserpref_nam_ix (name), UNIQUE INDEX mdl_puserpref_usenam_uix (userid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Allows modules to store arbitrary user preferences' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_puser_private_key (id BIGINT AUTO_INCREMENT NOT NULL, script VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, instance BIGINT DEFAULT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_puserprivkey_scrval_ix (script, value), INDEX mdl_puserprivkey_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'access keys used in cookieless scripts - rss, etc.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Wiki' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, firstpagetitle VARCHAR(255) CHARACTER SET utf8 DEFAULT 'First Page' NOT NULL COLLATE `utf8_general_ci`, wikimode VARCHAR(20) CHARACTER SET utf8 DEFAULT 'collaborative' NOT NULL COLLATE `utf8_general_ci`, defaultformat VARCHAR(20) CHARACTER SET utf8 DEFAULT 'creole' NOT NULL COLLATE `utf8_general_ci`, forceformat TINYINT(1) DEFAULT 1 NOT NULL, editbegin BIGINT DEFAULT 0 NOT NULL, editend BIGINT DEFAULT 0, INDEX mdl_pwiki_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores Wiki activity configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_links (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, frompageid BIGINT DEFAULT 0 NOT NULL, topageid BIGINT DEFAULT 0 NOT NULL, tomissingpage VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_pwikilink_fro_ix (frompageid), INDEX mdl_pwikilink_sub_ix (subwikiid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Page wiki links' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_locks (id BIGINT AUTO_INCREMENT NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, sectionname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT 0 NOT NULL, lockedat BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Manages page locks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_pages (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT 'title' NOT NULL COLLATE `utf8_general_ci`, cachedcontent LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timerendered BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, pageviews BIGINT DEFAULT 0 NOT NULL, readonly TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pwikipage_sub_ix (subwikiid), UNIQUE INDEX mdl_pwikipage_subtituse_uix (subwikiid, title, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki pages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_subwikis (id BIGINT AUTO_INCREMENT NOT NULL, wikiid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pwikisubw_wik_ix (wikiid), UNIQUE INDEX mdl_pwikisubw_wikgrouse_uix (wikiid, groupid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores subwiki instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_synonyms (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, pagesynonym VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Pagesynonym' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pwikisyno_pagpag_uix (pageid, pagesynonym), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki pages synonyms' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pwiki_versions (id BIGINT AUTO_INCREMENT NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat VARCHAR(20) CHARACTER SET utf8 DEFAULT 'creole' NOT NULL COLLATE `utf8_general_ci`, version INT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_pwikivers_pag_ix (pageid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki page history' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshop (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, instructauthors LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructauthorsformat SMALLINT DEFAULT 0 NOT NULL, instructreviewers LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructreviewersformat SMALLINT DEFAULT 0 NOT NULL, timemodified BIGINT NOT NULL, phase SMALLINT DEFAULT 0, useexamples TINYINT(1) DEFAULT 0, usepeerassessment TINYINT(1) DEFAULT 0, useselfassessment TINYINT(1) DEFAULT 0, grade NUMERIC(10, 5) DEFAULT '80.00000', gradinggrade NUMERIC(10, 5) DEFAULT '20.00000', strategy VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, evaluation VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, gradedecimals SMALLINT DEFAULT 0, submissiontypetext TINYINT(1) DEFAULT 1 NOT NULL, submissiontypefile TINYINT(1) DEFAULT 1 NOT NULL, nattachments SMALLINT DEFAULT 1, submissionfiletypes VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, latesubmissions TINYINT(1) DEFAULT 0, maxbytes BIGINT DEFAULT 100000, examplesmode SMALLINT DEFAULT 0, submissionstart BIGINT DEFAULT 0, submissionend BIGINT DEFAULT 0, assessmentstart BIGINT DEFAULT 0, assessmentend BIGINT DEFAULT 0, phaseswitchassessment TINYINT(1) DEFAULT 0 NOT NULL, conclusion LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, conclusionformat SMALLINT DEFAULT 1 NOT NULL, overallfeedbackmode SMALLINT DEFAULT 1, overallfeedbackfiles SMALLINT DEFAULT 0, overallfeedbackfiletypes VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, overallfeedbackmaxbytes BIGINT DEFAULT 100000, INDEX mdl_pwork_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about the module instances and ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshop_aggregations (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, userid BIGINT NOT NULL, gradinggrade NUMERIC(10, 5) DEFAULT NULL, timegraded BIGINT DEFAULT NULL, INDEX mdl_pworkaggr_use_ix (userid), INDEX mdl_pworkaggr_wor_ix (workshopid), UNIQUE INDEX mdl_pworkaggr_woruse_uix (workshopid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Aggregated grades for assessment are stored here. The aggreg' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshop_assessments (id BIGINT AUTO_INCREMENT NOT NULL, submissionid BIGINT NOT NULL, reviewerid BIGINT NOT NULL, weight BIGINT DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0, grade NUMERIC(10, 5) DEFAULT NULL, gradinggrade NUMERIC(10, 5) DEFAULT NULL, gradinggradeover NUMERIC(10, 5) DEFAULT NULL, gradinggradeoverby BIGINT DEFAULT NULL, feedbackauthor LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackauthorformat SMALLINT DEFAULT 0, feedbackauthorattachment SMALLINT DEFAULT 0, feedbackreviewer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackreviewerformat SMALLINT DEFAULT 0, INDEX mdl_pworkasse_gra_ix (gradinggradeoverby), INDEX mdl_pworkasse_rev_ix (reviewerid), INDEX mdl_pworkasse_sub_ix (submissionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about the made assessment and automatically calculated ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshop_grades (id BIGINT AUTO_INCREMENT NOT NULL, assessmentid BIGINT NOT NULL, strategy VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dimensionid BIGINT NOT NULL, grade NUMERIC(10, 5) DEFAULT NULL, peercomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, peercommentformat SMALLINT DEFAULT 0, INDEX mdl_pworkgrad_ass_ix (assessmentid), UNIQUE INDEX mdl_pworkgrad_assstrdim_uix (assessmentid, strategy, dimensionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'How the reviewers filled-up the grading forms, given grades ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshop_submissions (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, example TINYINT(1) DEFAULT 0, authorid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, contenttrust SMALLINT DEFAULT 0 NOT NULL, attachment TINYINT(1) DEFAULT 0, grade NUMERIC(10, 5) DEFAULT NULL, gradeover NUMERIC(10, 5) DEFAULT NULL, gradeoverby BIGINT DEFAULT NULL, feedbackauthor LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackauthorformat SMALLINT DEFAULT 0, timegraded BIGINT DEFAULT NULL, published TINYINT(1) DEFAULT 0, late TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_pworksubm_aut_ix (authorid), INDEX mdl_pworksubm_gra_ix (gradeoverby), INDEX mdl_pworksubm_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about the submission and the aggregation of the grade f' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopallocation_scheduled (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, submissionend BIGINT NOT NULL, timeallocated BIGINT DEFAULT NULL, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultstatus BIGINT DEFAULT NULL, resultmessage VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultlog LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pworksche_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the allocation settings for the scheduled allocator' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopeval_best_settings (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, comparison SMALLINT DEFAULT 5, UNIQUE INDEX mdl_pworkbestsett_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Settings for the grading evaluation subplugin Comparison wit' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_accumulative (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, grade BIGINT NOT NULL, weight INT DEFAULT 1, INDEX mdl_pworkaccu_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Accumulative gradin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_comments (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, INDEX mdl_pworkcomm_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Comments strategy f' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_numerrors (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, descriptiontrust BIGINT DEFAULT NULL, grade0 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, grade1 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, weight INT DEFAULT 1, INDEX mdl_pworknume_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Number of errors gr' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_numerrors_map (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, nonegative BIGINT NOT NULL, grade NUMERIC(10, 5) NOT NULL, INDEX mdl_pworknumemap_wor_ix (workshopid), UNIQUE INDEX mdl_pworknumemap_wornon_uix (workshopid, nonegative), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This maps the number of errors to a percentual grade for sub' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_rubric (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, INDEX mdl_pworkrubr_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Rubric grading stra' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_rubric_config (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, layout VARCHAR(30) CHARACTER SET utf8 DEFAULT 'list' COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_pworkrubrconf_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Configuration table for the Rubric grading strategy' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pworkshopform_rubric_levels (id BIGINT AUTO_INCREMENT NOT NULL, dimensionid BIGINT NOT NULL, grade NUMERIC(10, 5) NOT NULL, definition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, definitionformat SMALLINT DEFAULT 0, INDEX mdl_pworkrubrleve_dim_ix (dimensionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The definition of rubric rating scales' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_pxapi_states (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, itemid BIGINT NOT NULL, stateid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, statedata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, registration VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_pxapistat_comite_ix (component, itemid), INDEX mdl_pxapistat_tim_ix (timemodified), INDEX mdl_pxapistat_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The stored xAPI states' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddimageortext (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_qtypddim_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (text or images onto a background imag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddimageortext_drags (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, draggroup BIGINT DEFAULT 0 NOT NULL, infinite SMALLINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_qtypddimdrag_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Images to drag. Actual file names are not stored here we use' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddimageortext_drops (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, xleft BIGINT DEFAULT 0 NOT NULL, ytop BIGINT DEFAULT 0 NOT NULL, choice BIGINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_qtypddimdrop_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Drop boxes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddmarker (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, showmisplaced SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_qtypddma_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (text or images onto a background imag' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddmarker_drags (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, label LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, infinite SMALLINT DEFAULT 0 NOT NULL, noofdrags BIGINT DEFAULT 1 NOT NULL, INDEX mdl_qtypddmadrag_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Labels for markers to drag.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ddmarker_drops (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, no BIGINT DEFAULT 0 NOT NULL, shape VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, coords LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, choice BIGINT DEFAULT 0 NOT NULL, INDEX mdl_qtypddmadrop_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'drop regions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_essay_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT NOT NULL, responseformat VARCHAR(16) CHARACTER SET utf8 DEFAULT 'editor' NOT NULL COLLATE `utf8_general_ci`, responserequired TINYINT(1) DEFAULT 1 NOT NULL, responsefieldlines SMALLINT DEFAULT 15 NOT NULL, minwordlimit BIGINT DEFAULT NULL, maxwordlimit BIGINT DEFAULT NULL, attachments SMALLINT DEFAULT 0 NOT NULL, attachmentsrequired SMALLINT DEFAULT 0 NOT NULL, graderinfo LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, graderinfoformat SMALLINT DEFAULT 0 NOT NULL, responsetemplate LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responsetemplateformat SMALLINT DEFAULT 0 NOT NULL, maxbytes BIGINT DEFAULT 0 NOT NULL, filetypeslist LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_qtypessaopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Extra options for essay questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_match_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_qtypmatcopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines the question-type specific options for matching ques' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_match_subquestions (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, questiontext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, questiontextformat TINYINT(1) DEFAULT 0 NOT NULL, answertext VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_qtypmatcsubq_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The subquestions that make up a matching question' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_multichoice_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, layout SMALLINT DEFAULT 0 NOT NULL, single SMALLINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, answernumbering VARCHAR(10) CHARACTER SET utf8 DEFAULT 'abc' NOT NULL COLLATE `utf8_general_ci`, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, showstandardinstruction TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX mdl_qtypmultopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for multiple choice questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_ordering_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, layouttype TINYINT(1) DEFAULT 0 NOT NULL, selecttype TINYINT(1) DEFAULT 0 NOT NULL, selectcount SMALLINT DEFAULT 2 NOT NULL, gradingtype TINYINT(1) DEFAULT 0 NOT NULL, showgrading TINYINT(1) DEFAULT 0 NOT NULL, numberingstyle VARCHAR(10) CHARACTER SET utf8 DEFAULT 'none' NOT NULL COLLATE `utf8_general_ci`, correctfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_qtypordeopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for ordering questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_randomsamatch_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, choose BIGINT DEFAULT 4 NOT NULL, subcats TINYINT(1) DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_qtyprandopti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about a random short-answer matching question' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_qtype_shortanswer_options (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, usecase TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_qtypshoropti_que_uix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for short answer questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question (id BIGINT AUTO_INCREMENT NOT NULL, parent BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, questiontext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, questiontextformat TINYINT(1) DEFAULT 0 NOT NULL, generalfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, generalfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, defaultmark NUMERIC(12, 7) DEFAULT '1.0000000' NOT NULL, penalty NUMERIC(12, 7) DEFAULT '0.3333333' NOT NULL, qtype VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, length BIGINT DEFAULT 1 NOT NULL, stamp VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, createdby BIGINT DEFAULT NULL, modifiedby BIGINT DEFAULT NULL, INDEX mdl_ques_cre_ix (createdby), INDEX mdl_ques_mod_ix (modifiedby), INDEX mdl_ques_par_ix (parent), INDEX mdl_ques_qty_ix (qtype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores the definition of one version of a questio' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_answers (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, answerformat TINYINT(1) DEFAULT 0 NOT NULL, fraction NUMERIC(12, 7) DEFAULT '0.0000000' NOT NULL, feedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, feedbackformat TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_quesansw_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Answers, with a fractional grade (0-1) and feedback' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_attempt_step_data (id BIGINT AUTO_INCREMENT NOT NULL, attemptstepid BIGINT NOT NULL, name VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesattestepdata_att_ix (attemptstepid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each question_attempt_step has an associative array of the d' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_attempt_steps (id BIGINT AUTO_INCREMENT NOT NULL, questionattemptid BIGINT NOT NULL, sequencenumber BIGINT NOT NULL, state VARCHAR(13) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fraction NUMERIC(12, 7) DEFAULT NULL, timecreated BIGINT NOT NULL, userid BIGINT DEFAULT NULL, INDEX mdl_quesattestep_que_ix (questionattemptid), UNIQUE INDEX mdl_quesattestep_queseq_uix (questionattemptid, sequencenumber), INDEX mdl_quesattestep_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores one step in in a question attempt. As well as the dat' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_attempts (id BIGINT AUTO_INCREMENT NOT NULL, questionusageid BIGINT NOT NULL, slot BIGINT NOT NULL, behaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, questionid BIGINT NOT NULL, variant BIGINT DEFAULT 1 NOT NULL, maxmark NUMERIC(12, 7) NOT NULL, minfraction NUMERIC(12, 7) NOT NULL, maxfraction NUMERIC(12, 7) DEFAULT '1.0000000' NOT NULL, flagged TINYINT(1) DEFAULT 0 NOT NULL, questionsummary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, rightanswer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, responsesummary LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, INDEX mdl_quesatte_beh_ix (behaviour), INDEX mdl_quesatte_que2_ix (questionusageid), INDEX mdl_quesatte_que_ix (questionid), UNIQUE INDEX mdl_quesatte_queslo_uix (questionusageid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each row here corresponds to an attempt at one question, as ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_bank_entries (id BIGINT AUTO_INCREMENT NOT NULL, questioncategoryid BIGINT DEFAULT 0 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ownerid BIGINT DEFAULT NULL, INDEX mdl_quesbankentr_own_ix (ownerid), INDEX mdl_quesbankentr_que_ix (questioncategoryid), UNIQUE INDEX mdl_quesbankentr_queidn_uix (questioncategoryid, idnumber), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each question bank entry. This table has one row for each qu' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_calculated (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer BIGINT DEFAULT 0 NOT NULL, tolerance VARCHAR(20) CHARACTER SET utf8 DEFAULT '0.0' NOT NULL COLLATE `utf8_general_ci`, tolerancetype BIGINT DEFAULT 1 NOT NULL, correctanswerlength BIGINT DEFAULT 2 NOT NULL, correctanswerformat BIGINT DEFAULT 2 NOT NULL, INDEX mdl_quescalc_ans_ix (answer), INDEX mdl_quescalc_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type calculated' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_calculated_options (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, synchronize TINYINT(1) DEFAULT 0 NOT NULL, single SMALLINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 0 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, answernumbering VARCHAR(10) CHARACTER SET utf8 DEFAULT 'abc' NOT NULL COLLATE `utf8_general_ci`, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_quescalcopti_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type calculated' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_categories (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT DEFAULT 0 NOT NULL, info LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, infoformat TINYINT(1) DEFAULT 0 NOT NULL, stamp VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 999 NOT NULL, idnumber VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_quescate_con_ix (contextid), UNIQUE INDEX mdl_quescate_conidn_uix (contextid, idnumber), UNIQUE INDEX mdl_quescate_consta_uix (contextid, stamp), INDEX mdl_quescate_par_ix (parent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Categories are for grouping questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_dataset_definitions (id BIGINT AUTO_INCREMENT NOT NULL, category BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type BIGINT DEFAULT 0 NOT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemcount BIGINT DEFAULT 0 NOT NULL, INDEX mdl_quesdatadefi_cat_ix (category), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Organises and stores properties for dataset items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_dataset_items (id BIGINT AUTO_INCREMENT NOT NULL, definition BIGINT DEFAULT 0 NOT NULL, itemnumber BIGINT DEFAULT 0 NOT NULL, value VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesdataitem_def_ix (definition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Individual dataset items' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_datasets (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, datasetdefinition BIGINT DEFAULT 0 NOT NULL, INDEX mdl_quesdata_dat_ix (datasetdefinition), INDEX mdl_quesdata_que_ix (question), INDEX mdl_quesdata_quedat_ix (question, datasetdefinition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Many-many relation between questions and dataset definitions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_ddwtos (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_quesddwt_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines drag and drop (words into sentences) questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_gapselect (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, shuffleanswers SMALLINT DEFAULT 1 NOT NULL, correctfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, correctfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, partiallycorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, partiallycorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, incorrectfeedback LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, incorrectfeedbackformat TINYINT(1) DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_quesgaps_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines select missing words questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_hints (id BIGINT AUTO_INCREMENT NOT NULL, questionid BIGINT NOT NULL, hint LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, hintformat SMALLINT DEFAULT 0 NOT NULL, shownumcorrect TINYINT(1) DEFAULT NULL, clearwrong TINYINT(1) DEFAULT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_queshint_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the the part of the question definition that gives di' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_multianswer (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, sequence LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesmult_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for multianswer questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_numerical (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, answer BIGINT DEFAULT 0 NOT NULL, tolerance VARCHAR(255) CHARACTER SET utf8 DEFAULT '0.0' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesnume_ans_ix (answer), INDEX mdl_quesnume_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for numerical questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_numerical_options (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, showunits SMALLINT DEFAULT 0 NOT NULL, unitsleft SMALLINT DEFAULT 0 NOT NULL, unitgradingtype SMALLINT DEFAULT 0 NOT NULL, unitpenalty NUMERIC(12, 7) DEFAULT '0.1000000' NOT NULL, INDEX mdl_quesnumeopti_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for questions of type numerical This table is also u' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_numerical_units (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, multiplier NUMERIC(38, 19) DEFAULT '1.0000000000000000000' NOT NULL, unit VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesnumeunit_que_ix (question), UNIQUE INDEX mdl_quesnumeunit_queuni_uix (question, unit), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Optional unit options for numerical questions. This table is' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_references (id BIGINT AUTO_INCREMENT NOT NULL, usingcontextid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, questionarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, questionbankentryid BIGINT DEFAULT 0 NOT NULL, version BIGINT DEFAULT NULL, INDEX mdl_quesrefe_que_ix (questionbankentryid), INDEX mdl_quesrefe_usi_ix (usingcontextid), UNIQUE INDEX mdl_quesrefe_usicomqueite_uix (usingcontextid, component, questionarea, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records where a specific question is used.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_response_analysis (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, whichtries VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, questionid BIGINT NOT NULL, variant BIGINT DEFAULT NULL, subqid VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aid VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, response LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, credit NUMERIC(15, 5) NOT NULL, INDEX mdl_quesrespanal_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Analysis of student responses given to questions.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_response_count (id BIGINT AUTO_INCREMENT NOT NULL, analysisid BIGINT NOT NULL, try BIGINT NOT NULL, rcount BIGINT NOT NULL, INDEX mdl_quesrespcoun_ana_ix (analysisid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Count for each responses for each try at a question.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_set_references (id BIGINT AUTO_INCREMENT NOT NULL, usingcontextid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, questionarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, questionscontextid BIGINT DEFAULT 0 NOT NULL, filtercondition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_quessetrefe_que_ix (questionscontextid), INDEX mdl_quessetrefe_usi_ix (usingcontextid), UNIQUE INDEX mdl_quessetrefe_usicomquei_uix (usingcontextid, component, questionarea, itemid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records where groups of questions are used.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_statistics (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, questionid BIGINT NOT NULL, slot BIGINT DEFAULT NULL, subquestion SMALLINT NOT NULL, variant BIGINT DEFAULT NULL, s BIGINT DEFAULT 0 NOT NULL, effectiveweight NUMERIC(15, 5) DEFAULT NULL, negcovar TINYINT(1) DEFAULT 0 NOT NULL, discriminationindex NUMERIC(15, 5) DEFAULT NULL, discriminativeefficiency NUMERIC(15, 5) DEFAULT NULL, sd NUMERIC(15, 10) DEFAULT NULL, facility NUMERIC(15, 10) DEFAULT NULL, subquestions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, maxmark NUMERIC(12, 7) DEFAULT NULL, positions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, randomguessscore NUMERIC(12, 7) DEFAULT NULL, INDEX mdl_quesstat_que_ix (questionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Statistics for individual questions used in an activity.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_truefalse (id BIGINT AUTO_INCREMENT NOT NULL, question BIGINT DEFAULT 0 NOT NULL, trueanswer BIGINT DEFAULT 0 NOT NULL, falseanswer BIGINT DEFAULT 0 NOT NULL, showstandardinstruction TINYINT(1) DEFAULT 1 NOT NULL, INDEX mdl_questrue_que_ix (question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Options for True-False questions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_usages (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, preferredbehaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesusag_con_ix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table''s main purpose it to assign a unique id to each a' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_question_versions (id BIGINT AUTO_INCREMENT NOT NULL, questionbankentryid BIGINT DEFAULT 0 NOT NULL, version BIGINT DEFAULT 1 NOT NULL, questionid BIGINT DEFAULT 0 NOT NULL, status VARCHAR(10) CHARACTER SET utf8 DEFAULT 'ready' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_quesvers_que2_ix (questionid), INDEX mdl_quesvers_que_ix (questionbankentryid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A join table linking the different question version definiti' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timelimit BIGINT DEFAULT 0 NOT NULL, overduehandling VARCHAR(16) CHARACTER SET utf8 DEFAULT 'autoabandon' NOT NULL COLLATE `utf8_general_ci`, graceperiod BIGINT DEFAULT 0 NOT NULL, preferredbehaviour VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, canredoquestions SMALLINT DEFAULT 0 NOT NULL, attempts INT DEFAULT 0 NOT NULL, attemptonlast SMALLINT DEFAULT 0 NOT NULL, grademethod SMALLINT DEFAULT 1 NOT NULL, decimalpoints SMALLINT DEFAULT 2 NOT NULL, questiondecimalpoints SMALLINT DEFAULT -1 NOT NULL, reviewattempt INT DEFAULT 0 NOT NULL, reviewcorrectness INT DEFAULT 0 NOT NULL, reviewmaxmarks INT DEFAULT 0 NOT NULL, reviewmarks INT DEFAULT 0 NOT NULL, reviewspecificfeedback INT DEFAULT 0 NOT NULL, reviewgeneralfeedback INT DEFAULT 0 NOT NULL, reviewrightanswer INT DEFAULT 0 NOT NULL, reviewoverallfeedback INT DEFAULT 0 NOT NULL, questionsperpage BIGINT DEFAULT 0 NOT NULL, navmethod VARCHAR(16) CHARACTER SET utf8 DEFAULT 'free' NOT NULL COLLATE `utf8_general_ci`, shuffleanswers SMALLINT DEFAULT 0 NOT NULL, sumgrades NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, password VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subnet VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, browsersecurity VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, delay1 BIGINT DEFAULT 0 NOT NULL, delay2 BIGINT DEFAULT 0 NOT NULL, showuserpicture SMALLINT DEFAULT 0 NOT NULL, showblocks SMALLINT DEFAULT 0 NOT NULL, completionattemptsexhausted TINYINT(1) DEFAULT 0, completionminattempts BIGINT DEFAULT 0 NOT NULL, allowofflineattempts TINYINT(1) DEFAULT 0, INDEX mdl_quiz_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The settings for each quiz.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_attempts (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, attempt INT DEFAULT 0 NOT NULL, uniqueid BIGINT DEFAULT 0 NOT NULL, layout LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, currentpage BIGINT DEFAULT 0 NOT NULL, preview SMALLINT DEFAULT 0 NOT NULL, state VARCHAR(16) CHARACTER SET utf8 DEFAULT 'inprogress' NOT NULL COLLATE `utf8_general_ci`, timestart BIGINT DEFAULT 0 NOT NULL, timefinish BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timemodifiedoffline BIGINT DEFAULT 0 NOT NULL, timecheckstate BIGINT DEFAULT 0, sumgrades NUMERIC(10, 5) DEFAULT NULL, gradednotificationsenttime BIGINT DEFAULT NULL, INDEX mdl_quizatte_qui_ix (quiz), UNIQUE INDEX mdl_quizatte_quiuseatt_uix (quiz, userid, attempt), INDEX mdl_quizatte_statim_ix (state, timecheckstate), UNIQUE INDEX mdl_quizatte_uni_uix (uniqueid), INDEX mdl_quizatte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores users attempts at quizzes.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_feedback (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT DEFAULT 0 NOT NULL, feedbacktext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, feedbacktextformat TINYINT(1) DEFAULT 0 NOT NULL, mingrade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, maxgrade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, INDEX mdl_quizfeed_qui_ix (quizid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Feedback given to students based on which grade band their o' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_grades (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, grade NUMERIC(10, 5) DEFAULT '0.00000' NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_quizgrad_qui_ix (quiz), INDEX mdl_quizgrad_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the overall grade for each user on the quiz, based on' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_overrides (id BIGINT AUTO_INCREMENT NOT NULL, quiz BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT NULL, userid BIGINT DEFAULT NULL, timeopen BIGINT DEFAULT NULL, timeclose BIGINT DEFAULT NULL, timelimit BIGINT DEFAULT NULL, attempts INT DEFAULT NULL, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_quizover_gro_ix (groupid), INDEX mdl_quizover_qui_ix (quiz), INDEX mdl_quizover_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The overrides to quiz settings on a per-user and per-group b' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_overview_regrades (id BIGINT AUTO_INCREMENT NOT NULL, questionusageid BIGINT NOT NULL, slot BIGINT NOT NULL, newfraction NUMERIC(12, 7) DEFAULT NULL, oldfraction NUMERIC(12, 7) DEFAULT NULL, regraded SMALLINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_quizoverregr_queslo_ix (questionusageid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table records which question attempts need regrading an' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_reports (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, displayorder BIGINT NOT NULL, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_quizrepo_nam_uix (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Lists all the installed quiz reports and their display order' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_sections (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT NOT NULL, firstslot BIGINT NOT NULL, heading VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, shufflequestions SMALLINT DEFAULT 0 NOT NULL, INDEX mdl_quizsect_qui_ix (quizid), UNIQUE INDEX mdl_quizsect_quifir_uix (quizid, firstslot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores sections of a quiz with section name (heading), from ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_slots (id BIGINT AUTO_INCREMENT NOT NULL, slot BIGINT NOT NULL, quizid BIGINT DEFAULT 0 NOT NULL, page BIGINT NOT NULL, displaynumber VARCHAR(16) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, requireprevious SMALLINT DEFAULT 0 NOT NULL, maxmark NUMERIC(12, 7) DEFAULT '0.0000000' NOT NULL, INDEX mdl_quizslot_qui_ix (quizid), UNIQUE INDEX mdl_quizslot_quislo_uix (quizid, slot), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the question used in a quiz, with the order, and for ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quiz_statistics (id BIGINT AUTO_INCREMENT NOT NULL, hashcode VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, whichattempts SMALLINT NOT NULL, timemodified BIGINT NOT NULL, firstattemptscount BIGINT NOT NULL, highestattemptscount BIGINT NOT NULL, lastattemptscount BIGINT NOT NULL, allattemptscount BIGINT NOT NULL, firstattemptsavg NUMERIC(15, 5) DEFAULT NULL, highestattemptsavg NUMERIC(15, 5) DEFAULT NULL, lastattemptsavg NUMERIC(15, 5) DEFAULT NULL, allattemptsavg NUMERIC(15, 5) DEFAULT NULL, median NUMERIC(15, 5) DEFAULT NULL, standarddeviation NUMERIC(15, 5) DEFAULT NULL, skewness NUMERIC(15, 10) DEFAULT NULL, kurtosis NUMERIC(15, 5) DEFAULT NULL, cic NUMERIC(15, 10) DEFAULT NULL, errorratio NUMERIC(15, 10) DEFAULT NULL, standarderror NUMERIC(15, 10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'table to cache results from analysis done in statistics repo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quizaccess_seb_quizsettings (id BIGINT AUTO_INCREMENT NOT NULL, quizid BIGINT NOT NULL, cmid BIGINT NOT NULL, templateid BIGINT NOT NULL, requiresafeexambrowser TINYINT(1) NOT NULL, showsebtaskbar TINYINT(1) DEFAULT NULL, showwificontrol TINYINT(1) DEFAULT NULL, showreloadbutton TINYINT(1) DEFAULT NULL, showtime TINYINT(1) DEFAULT NULL, showkeyboardlayout TINYINT(1) DEFAULT NULL, allowuserquitseb TINYINT(1) DEFAULT NULL, quitpassword LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, linkquitseb LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userconfirmquit TINYINT(1) DEFAULT NULL, enableaudiocontrol TINYINT(1) DEFAULT NULL, muteonstartup TINYINT(1) DEFAULT NULL, allowspellchecking TINYINT(1) DEFAULT NULL, allowreloadinexam TINYINT(1) DEFAULT NULL, activateurlfiltering TINYINT(1) DEFAULT NULL, filterembeddedcontent TINYINT(1) DEFAULT NULL, expressionsallowed LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, regexallowed LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expressionsblocked LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, regexblocked LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, allowedbrowserexamkeys LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, showsebdownloadlink TINYINT(1) DEFAULT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_quizsebquiz_cmi_uix (cmid), UNIQUE INDEX mdl_quizsebquiz_qui_uix (quizid), INDEX mdl_quizsebquiz_tem_ix (templateid), INDEX mdl_quizsebquiz_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the quiz level Safe Exam Browser configuration.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_quizaccess_seb_template (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) NOT NULL, sortorder BIGINT NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_quizsebtemp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Templates for Safe Exam Browser configuration.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_rating (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, ratingarea VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, scaleid BIGINT NOT NULL, rating BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_rati_comratconite_ix (component, ratingarea, contextid, itemid), INDEX mdl_rati_con_ix (contextid), INDEX mdl_rati_sca_ix (scaleid), INDEX mdl_rati_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle ratings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_registration_hubs (id BIGINT AUTO_INCREMENT NOT NULL, token VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hubname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, huburl VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, confirmed TINYINT(1) DEFAULT 0 NOT NULL, secret VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'hub where the site is registered on with their associated to' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_reportbuilder_audience (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT NOT NULL, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_repoaudi_rep_ix (reportid), INDEX mdl_repoaudi_use2_ix (usermodified), INDEX mdl_repoaudi_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines report audience' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_reportbuilder_column (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, uniqueidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, aggregation VARCHAR(32) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, columnorder BIGINT NOT NULL, sortenabled TINYINT(1) DEFAULT 0 NOT NULL, sortdirection TINYINT(1) NOT NULL, sortorder BIGINT DEFAULT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_repocolu_rep_ix (reportid), INDEX mdl_repocolu_use2_ix (usermodified), INDEX mdl_repocolu_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report column' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_reportbuilder_filter (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, uniqueidentifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, heading VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iscondition TINYINT(1) DEFAULT 0 NOT NULL, filterorder BIGINT NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_repofilt_rep_ix (reportid), UNIQUE INDEX mdl_repofilt_repuniisc_uix (reportid, uniqueidentifier, iscondition), INDEX mdl_repofilt_use2_ix (usermodified), INDEX mdl_repofilt_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report filter/condition' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_reportbuilder_report (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, source VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type TINYINT(1) DEFAULT 0 NOT NULL, uniquerows TINYINT(1) DEFAULT 0 NOT NULL, conditiondata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, settingsdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, area VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_reporepo_con_ix (contextid), INDEX mdl_reporepo_use2_ix (usermodified), INDEX mdl_reporepo_use_ix (usercreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_reportbuilder_schedule (id BIGINT AUTO_INCREMENT NOT NULL, reportid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, audiences LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, format VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, subject VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, messageformat BIGINT NOT NULL, userviewas BIGINT DEFAULT 0 NOT NULL, timescheduled BIGINT DEFAULT 0 NOT NULL, recurrence BIGINT DEFAULT 0 NOT NULL, reportempty BIGINT DEFAULT 0 NOT NULL, timelastsent BIGINT DEFAULT 0 NOT NULL, timenextsend BIGINT DEFAULT 0 NOT NULL, usercreated BIGINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_reposche_rep_ix (reportid), INDEX mdl_reposche_use2_ix (usercreated), INDEX mdl_reposche_use3_ix (usermodified), INDEX mdl_reposche_use_ix (userviewas), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to represent a report schedule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_repository (id BIGINT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, visible TINYINT(1) DEFAULT 1, sortorder BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains one entry for every configured external ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_repository_instance_config (id BIGINT AUTO_INCREMENT NOT NULL, instanceid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The config for intances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_repository_instances (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, typeid BIGINT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT NOT NULL, username VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, timemodified BIGINT DEFAULT NULL, readonly TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_repoinst_con_ix (contextid), INDEX mdl_repoinst_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table contains one entry for every configured external ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_repository_onedrive_access (id BIGINT AUTO_INCREMENT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, usermodified BIGINT NOT NULL, permissionid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_repoonedacce_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of temporary access grants.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_resource (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, tobemigrated SMALLINT DEFAULT 0 NOT NULL, legacyfiles SMALLINT DEFAULT 0 NOT NULL, legacyfileslast BIGINT DEFAULT NULL, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, filterfiles SMALLINT DEFAULT 0 NOT NULL, revision BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_reso_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one resource and its config data' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_resource_old (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, reference VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, alltext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, popup LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, cmid BIGINT DEFAULT NULL, newmodule VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, newid BIGINT DEFAULT NULL, migrated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_resoold_cmi_ix (cmid), UNIQUE INDEX mdl_resoold_old_uix (oldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'backup of all old resource instances from 1.9' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, archetype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_role_sho_uix (shortname), UNIQUE INDEX mdl_role_sor_uix (sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'moodle roles' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_allow_assign (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, allowassign BIGINT DEFAULT 0 NOT NULL, INDEX mdl_rolealloassi_all_ix (allowassign), INDEX mdl_rolealloassi_rol_ix (roleid), UNIQUE INDEX mdl_rolealloassi_rolall_uix (roleid, allowassign), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines what role can assign what role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_allow_override (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, allowoverride BIGINT DEFAULT 0 NOT NULL, INDEX mdl_rolealloover_all_ix (allowoverride), INDEX mdl_rolealloover_rol_ix (roleid), UNIQUE INDEX mdl_rolealloover_rolall_uix (roleid, allowoverride), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'this defines what role can override what role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_allow_switch (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, allowswitch BIGINT NOT NULL, INDEX mdl_rolealloswit_all_ix (allowswitch), INDEX mdl_rolealloswit_rol_ix (roleid), UNIQUE INDEX mdl_rolealloswit_rolall_uix (roleid, allowswitch), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores which which other roles a user is allowed ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_allow_view (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, allowview BIGINT NOT NULL, INDEX mdl_rolealloview_all_ix (allowview), INDEX mdl_rolealloview_rol_ix (roleid), UNIQUE INDEX mdl_rolealloview_rolall_uix (roleid, allowview), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores which which other roles a user is allowed ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_assignments (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_roleassi_comiteuse_ix (component, itemid, userid), INDEX mdl_roleassi_con_ix (contextid), INDEX mdl_roleassi_rol_ix (roleid), INDEX mdl_roleassi_rolcon_ix (roleid, contextid), INDEX mdl_roleassi_sor_ix (sortorder), INDEX mdl_roleassi_use_ix (userid), INDEX mdl_roleassi_useconrol_ix (userid, contextid, roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'assigning roles in different context' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_capabilities (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, capability VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, permission BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_rolecapa_cap_ix (capability), INDEX mdl_rolecapa_con_ix (contextid), INDEX mdl_rolecapa_mod_ix (modifierid), INDEX mdl_rolecapa_rol_ix (roleid), UNIQUE INDEX mdl_rolecapa_rolconcap_uix (roleid, contextid, capability), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'permission has to be signed, overriding a capability for a p' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_context_levels (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, UNIQUE INDEX mdl_rolecontleve_conrol_uix (contextlevel, roleid), INDEX mdl_rolecontleve_rol_ix (roleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Lists which roles can be assigned at which context levels. T' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_role_names (id BIGINT AUTO_INCREMENT NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_rolename_con_ix (contextid), INDEX mdl_rolename_rol_ix (roleid), UNIQUE INDEX mdl_rolename_rolcon_uix (roleid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'role names in native strings' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scale (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scale LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_scal_cou_ix (courseid), INDEX mdl_scal_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines grading scales' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scale_history (id BIGINT AUTO_INCREMENT NOT NULL, action BIGINT DEFAULT 0 NOT NULL, oldid BIGINT NOT NULL, source VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, loggeduser BIGINT DEFAULT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scale LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_scalhist_act_ix (action), INDEX mdl_scalhist_cou_ix (courseid), INDEX mdl_scalhist_log_ix (loggeduser), INDEX mdl_scalhist_old_ix (oldid), INDEX mdl_scalhist_tim_ix (timemodified), INDEX mdl_scalhist_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'History table' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scormtype VARCHAR(50) CHARACTER SET utf8 DEFAULT 'local' NOT NULL COLLATE `utf8_general_ci`, reference VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, version VARCHAR(9) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, maxgrade DOUBLE PRECISION DEFAULT '0' NOT NULL, grademethod TINYINT(1) DEFAULT 0 NOT NULL, whatgrade BIGINT DEFAULT 0 NOT NULL, maxattempt BIGINT DEFAULT 1 NOT NULL, forcecompleted TINYINT(1) DEFAULT 0 NOT NULL, forcenewattempt TINYINT(1) DEFAULT 0 NOT NULL, lastattemptlock TINYINT(1) DEFAULT 0 NOT NULL, masteryoverride TINYINT(1) DEFAULT 1 NOT NULL, displayattemptstatus TINYINT(1) DEFAULT 1 NOT NULL, displaycoursestructure TINYINT(1) DEFAULT 0 NOT NULL, updatefreq TINYINT(1) DEFAULT 0 NOT NULL, sha1hash VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, md5hash VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, revision BIGINT DEFAULT 0 NOT NULL, launch BIGINT DEFAULT 0 NOT NULL, skipview TINYINT(1) DEFAULT 1 NOT NULL, hidebrowse TINYINT(1) DEFAULT 0 NOT NULL, hidetoc TINYINT(1) DEFAULT 0 NOT NULL, nav TINYINT(1) DEFAULT 1 NOT NULL, navpositionleft BIGINT DEFAULT -100, navpositiontop BIGINT DEFAULT -100, auto TINYINT(1) DEFAULT 0 NOT NULL, popup TINYINT(1) DEFAULT 0 NOT NULL, options VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, width BIGINT DEFAULT 100 NOT NULL, height BIGINT DEFAULT 600 NOT NULL, timeopen BIGINT DEFAULT 0 NOT NULL, timeclose BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, completionstatusrequired TINYINT(1) DEFAULT NULL, completionscorerequired BIGINT DEFAULT NULL, completionstatusallscos TINYINT(1) DEFAULT NULL, autocommit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_scor_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each table is one SCORM module and its configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_aicc_session (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, scormid BIGINT DEFAULT 0 NOT NULL, hacpsession VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, scoid BIGINT DEFAULT 0, scormmode VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, scormstatus VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, attempt BIGINT DEFAULT NULL, lessonstatus VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sessiontime VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_scoraiccsess_sco_ix (scormid), INDEX mdl_scoraiccsess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Used by AICC HACP to store session information' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_attempt (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, scormid BIGINT NOT NULL, attempt BIGINT DEFAULT 1 NOT NULL, INDEX mdl_scoratte_sco_ix (scormid), INDEX mdl_scoratte_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of SCORM attempts made by user.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_element (id BIGINT AUTO_INCREMENT NOT NULL, element VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_scorelem_ele_uix (element), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of scorm elements.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_scoes (id BIGINT AUTO_INCREMENT NOT NULL, scorm BIGINT DEFAULT 0 NOT NULL, manifest VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, organization VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, parent VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, identifier VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, launch LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, scormtype VARCHAR(5) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, INDEX mdl_scorscoe_sco_ix (scorm), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each SCO part of the SCORM module' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_scoes_data (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_scorscoedata_sco_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains variable data get from packages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_scoes_value (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT NOT NULL, attemptid BIGINT NOT NULL, elementid BIGINT NOT NULL, value LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_scorscoevalu_att_ix (attemptid), INDEX mdl_scorscoevalu_ele_ix (elementid), INDEX mdl_scorscoevalu_sco_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Values passed from SCORM package' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_mapinfo (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, objectiveid BIGINT DEFAULT 0 NOT NULL, targetobjectiveid BIGINT DEFAULT 0 NOT NULL, readsatisfiedstatus TINYINT(1) DEFAULT 1 NOT NULL, readnormalizedmeasure TINYINT(1) DEFAULT 1 NOT NULL, writesatisfiedstatus TINYINT(1) DEFAULT 0 NOT NULL, writenormalizedmeasure TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_scorseqmapi_obj_ix (objectiveid), INDEX mdl_scorseqmapi_sco_ix (scoid), UNIQUE INDEX mdl_scorseqmapi_scoidobj_uix (scoid, id, objectiveid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 objective mapinfo description' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_objective (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, primaryobj TINYINT(1) DEFAULT 0 NOT NULL, objectiveid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, satisfiedbymeasure TINYINT(1) DEFAULT 1 NOT NULL, minnormalizedmeasure DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, INDEX mdl_scorseqobje_sco_ix (scoid), UNIQUE INDEX mdl_scorseqobje_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 objective description' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_rolluprule (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, childactivityset VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, minimumcount BIGINT DEFAULT 0 NOT NULL, minimumpercent DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, conditioncombination VARCHAR(3) CHARACTER SET utf8 DEFAULT 'all' NOT NULL COLLATE `utf8_general_ci`, action VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_scorseqroll_sco_ix (scoid), UNIQUE INDEX mdl_scorseqroll_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 sequencing rule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_rolluprulecond (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, rollupruleid BIGINT DEFAULT 0 NOT NULL, operator VARCHAR(5) CHARACTER SET utf8 DEFAULT 'noOp' NOT NULL COLLATE `utf8_general_ci`, cond VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_scorseqroll_rol_ix (rollupruleid), INDEX mdl_scorseqroll_sco2_ix (scoid), UNIQUE INDEX mdl_scorseqroll_scorolid_uix (scoid, rollupruleid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 sequencing rule' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_rulecond (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, ruleconditionsid BIGINT DEFAULT 0 NOT NULL, refrencedobjective VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, measurethreshold DOUBLE PRECISION DEFAULT '0.0000' NOT NULL, operator VARCHAR(5) CHARACTER SET utf8 DEFAULT 'noOp' NOT NULL COLLATE `utf8_general_ci`, cond VARCHAR(30) CHARACTER SET utf8 DEFAULT 'always' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_scorseqrule_idscorul_uix (id, scoid, ruleconditionsid), INDEX mdl_scorseqrule_rul_ix (ruleconditionsid), INDEX mdl_scorseqrule_sco2_ix (scoid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 rule condition' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_scorm_seq_ruleconds (id BIGINT AUTO_INCREMENT NOT NULL, scoid BIGINT DEFAULT 0 NOT NULL, conditioncombination VARCHAR(3) CHARACTER SET utf8 DEFAULT 'all' NOT NULL COLLATE `utf8_general_ci`, ruletype TINYINT(1) DEFAULT 0 NOT NULL, action VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_scorseqrule_sco_ix (scoid), UNIQUE INDEX mdl_scorseqrule_scoid_uix (scoid, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'SCORM2004 rule conditions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_search_index_requests (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, searcharea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timerequested BIGINT NOT NULL, partialarea VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, partialtime BIGINT NOT NULL, indexpriority BIGINT NOT NULL, INDEX mdl_searinderequ_con_ix (contextid), INDEX mdl_searinderequ_indtim_ix (indexpriority, timerequested), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Records requests for (re)indexing of specific contexts. Entr' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_search_simpledb_index (id BIGINT AUTO_INCREMENT NOT NULL, docid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, title LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, areaid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type TINYINT(1) NOT NULL, courseid BIGINT NOT NULL, owneruserid BIGINT DEFAULT NULL, modified BIGINT NOT NULL, userid BIGINT DEFAULT NULL, description1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, description2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, FULLTEXT INDEX mdl_search_simpledb_index_index (title, content, description1, description2), INDEX mdl_searsimpinde_are_ix (areaid), INDEX mdl_searsimpinde_con_ix (contextid), INDEX mdl_searsimpinde_cou_ix (courseid), UNIQUE INDEX mdl_searsimpinde_doc_uix (docid), INDEX mdl_searsimpinde_owncon_ix (owneruserid, contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'search_simpledb table containing the index data.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_sessions (id BIGINT AUTO_INCREMENT NOT NULL, state BIGINT DEFAULT 0 NOT NULL, sid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, sessdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, firstip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastip VARCHAR(45) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_sess_sid_uix (sid), INDEX mdl_sess_sta_ix (state), INDEX mdl_sess_tim2_ix (timemodified), INDEX mdl_sess_tim_ix (timecreated), INDEX mdl_sess_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Database based session storage - now recommended' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_daily (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_statdail_cou_ix (courseid), INDEX mdl_statdail_rol_ix (roleid), INDEX mdl_statdail_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'to accumulate daily stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_monthly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_statmont_cou_ix (courseid), INDEX mdl_statmont_rol_ix (roleid), INDEX mdl_statmont_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate monthly stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_user_daily (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_statuserdail_cou_ix (courseid), INDEX mdl_statuserdail_rol_ix (roleid), INDEX mdl_statuserdail_tim_ix (timeend), INDEX mdl_statuserdail_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate daily stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_user_monthly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_statusermont_cou_ix (courseid), INDEX mdl_statusermont_rol_ix (roleid), INDEX mdl_statusermont_tim_ix (timeend), INDEX mdl_statusermont_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate monthly stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_user_weekly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, statsreads BIGINT DEFAULT 0 NOT NULL, statswrites BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_statuserweek_cou_ix (courseid), INDEX mdl_statuserweek_rol_ix (roleid), INDEX mdl_statuserweek_tim_ix (timeend), INDEX mdl_statuserweek_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate weekly stats per course/user' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_stats_weekly (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 0 NOT NULL, roleid BIGINT DEFAULT 0 NOT NULL, stattype VARCHAR(20) CHARACTER SET utf8 DEFAULT 'activity' NOT NULL COLLATE `utf8_general_ci`, stat1 BIGINT DEFAULT 0 NOT NULL, stat2 BIGINT DEFAULT 0 NOT NULL, INDEX mdl_statweek_cou_ix (courseid), INDEX mdl_statweek_rol_ix (roleid), INDEX mdl_statweek_tim_ix (timeend), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To accumulate weekly stats' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_survey (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, template BIGINT DEFAULT 0 NOT NULL, days INT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, questions VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, completionsubmit TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_surv_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Each record is one SURVEY module with its configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_survey_analysis (id BIGINT AUTO_INCREMENT NOT NULL, survey BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, notes LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_survanal_sur_ix (survey), INDEX mdl_survanal_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'text about each survey submission' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_survey_answers (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, survey BIGINT DEFAULT 0 NOT NULL, question BIGINT DEFAULT 0 NOT NULL, time BIGINT DEFAULT 0 NOT NULL, answer1 LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, answer2 LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_survansw_que_ix (question), INDEX mdl_survansw_sur_ix (survey), INDEX mdl_survansw_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the answers to each questions filled by the users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_survey_questions (id BIGINT AUTO_INCREMENT NOT NULL, text VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, shorttext VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, multi VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type SMALLINT DEFAULT 0 NOT NULL, options LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'the questions conforming one survey' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tag (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, tagcollid BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, rawname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, isstandard TINYINT(1) DEFAULT 0 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, flag SMALLINT DEFAULT 0, timemodified BIGINT DEFAULT NULL, INDEX mdl_tag_tag_ix (tagcollid), INDEX mdl_tag_tagiss_ix (tagcollid, isstandard), UNIQUE INDEX mdl_tag_tagnam_uix (tagcollid, name), INDEX mdl_tag_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tag table - this generic table will replace the old "tags" t' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tag_area (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1 NOT NULL, tagcollid BIGINT NOT NULL, callback VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, callbackfile VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, showstandard TINYINT(1) DEFAULT 0 NOT NULL, multiplecontexts TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_tagarea_comite_uix (component, itemtype), INDEX mdl_tagarea_tag_ix (tagcollid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines various tag areas, one area is identified by compone' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tag_coll (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, isdefault TINYINT(1) DEFAULT 0 NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sortorder INT DEFAULT 0 NOT NULL, searchable TINYINT(1) DEFAULT 1 NOT NULL, customurl VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Defines different set of tags' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tag_correlation (id BIGINT AUTO_INCREMENT NOT NULL, tagid BIGINT NOT NULL, correlatedtags LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_tagcorr_tag_ix (tagid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The rationale for the ''tag_correlation'' table is performance' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tag_instance (id BIGINT AUTO_INCREMENT NOT NULL, tagid BIGINT NOT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemtype VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, itemid BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, tiuserid BIGINT DEFAULT 0 NOT NULL, ordering BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_taginst_comiteiteconti_uix (component, itemtype, itemid, contextid, tiuserid, tagid), INDEX mdl_taginst_con_ix (contextid), INDEX mdl_taginst_itecomtagcon_ix (itemtype, component, tagid, contextid), INDEX mdl_taginst_tag_ix (tagid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'tag_instance table holds the information of associations bet' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_task_adhoc (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, nextruntime BIGINT NOT NULL, faildelay BIGINT DEFAULT NULL, customdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, blocking TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, attemptsavailable TINYINT(1) DEFAULT NULL, firststartingtime BIGINT DEFAULT NULL, INDEX mdl_taskadho_nex_ix (nextruntime), INDEX mdl_taskadho_tim_ix (timestarted), INDEX mdl_taskadho_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of adhoc tasks waiting to run.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_task_log (id BIGINT AUTO_INCREMENT NOT NULL, type SMALLINT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, timestart NUMERIC(20, 10) NOT NULL, timeend NUMERIC(20, 10) NOT NULL, dbreads BIGINT NOT NULL, dbwrites BIGINT NOT NULL, result TINYINT(1) NOT NULL, output LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, INDEX mdl_tasklog_cla_ix (classname), INDEX mdl_tasklog_tim_ix (timestart), INDEX mdl_tasklog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The log table for all tasks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_task_scheduled (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, classname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lastruntime BIGINT DEFAULT NULL, nextruntime BIGINT DEFAULT NULL, blocking TINYINT(1) DEFAULT 0 NOT NULL, minute VARCHAR(200) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, hour VARCHAR(70) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, day VARCHAR(90) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, month VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dayofweek VARCHAR(25) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, faildelay BIGINT DEFAULT NULL, customised TINYINT(1) DEFAULT 0 NOT NULL, disabled TINYINT(1) DEFAULT 0 NOT NULL, timestarted BIGINT DEFAULT NULL, hostname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pid BIGINT DEFAULT NULL, UNIQUE INDEX mdl_tasksche_cla_uix (classname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of scheduled tasks to be run by cron.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tiny_autosave (id BIGINT AUTO_INCREMENT NOT NULL, elementid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, pagehash VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, drafttext LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, draftid BIGINT DEFAULT NULL, pageinstance VARCHAR(64) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_tinyauto_eleconusepag_uix (elementid, contextid, userid, pagehash), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The content of the textarea saved during autosave operations' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_areas (id BIGINT AUTO_INCREMENT NOT NULL, type TINYINT(1) DEFAULT 0 NOT NULL, contextid BIGINT DEFAULT NULL, component VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tablename VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, fieldorarea VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, itemid BIGINT DEFAULT NULL, filename VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, reftable VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, refid BIGINT DEFAULT NULL, cmid BIGINT DEFAULT NULL, courseid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, INDEX mdl_toolbricarea_cat_ix (categoryid), INDEX mdl_toolbricarea_cmi_ix (cmid), INDEX mdl_toolbricarea_con_ix (contextid), INDEX mdl_toolbricarea_cou_ix (courseid), INDEX mdl_toolbricarea_coucmi_ix (courseid, cmid), INDEX mdl_toolbricarea_refreftyp_ix (reftable, refid, type), INDEX mdl_toolbricarea_typconcomf_ix (type, contextid, component, fieldorarea, itemid), INDEX mdl_toolbricarea_typtabitef_ix (type, tablename, itemid, fieldorarea), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Areas that have been checked for accessibility problems' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_cache_acts (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, component VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, totalactivities BIGINT DEFAULT NULL, failedactivities BIGINT DEFAULT NULL, passedactivities BIGINT DEFAULT NULL, errorcount BIGINT DEFAULT NULL, INDEX mdl_toolbriccachacts_cou_ix (courseid), INDEX mdl_toolbriccachacts_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility summary information per activity.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_cache_check (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, checkid BIGINT DEFAULT NULL, checkcount BIGINT DEFAULT NULL, errorcount BIGINT DEFAULT NULL, INDEX mdl_toolbriccachchec_cou_ix (courseid), INDEX mdl_toolbriccachchec_err_ix (errorcount), INDEX mdl_toolbriccachchec_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility summary information per check.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_checks (id BIGINT AUTO_INCREMENT NOT NULL, checktype VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, shortname VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, checkgroup BIGINT DEFAULT 0, status SMALLINT NOT NULL, severity TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_toolbricchec_che2_ix (checkgroup), INDEX mdl_toolbricchec_che_ix (checktype), INDEX mdl_toolbricchec_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Checks details' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_content (id BIGINT AUTO_INCREMENT NOT NULL, areaid BIGINT NOT NULL, contenthash VARCHAR(40) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, iscurrent TINYINT(1) DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT NOT NULL, timechecked BIGINT DEFAULT NULL, INDEX mdl_toolbriccont_are_ix (areaid), INDEX mdl_toolbriccont_iscare_ix (iscurrent, areaid), INDEX mdl_toolbriccont_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Content of an area at a particular time (recognised by a has' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_errors (id BIGINT AUTO_INCREMENT NOT NULL, resultid BIGINT NOT NULL, linenumber BIGINT DEFAULT 0 NOT NULL, errordata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, htmlcode LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_toolbricerro_res_ix (resultid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Errors during the accessibility checks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_process (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, item VARCHAR(64) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contextid BIGINT DEFAULT NULL, innercontextid BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, timecompleted BIGINT DEFAULT NULL, INDEX mdl_toolbricproc_tim_ix (timecompleted), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Queued records to initiate new processing of specific target' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_results (id BIGINT AUTO_INCREMENT NOT NULL, contentid BIGINT DEFAULT NULL, checkid BIGINT NOT NULL, errorcount BIGINT DEFAULT 0 NOT NULL, INDEX mdl_toolbricresu_che_ix (checkid), INDEX mdl_toolbricresu_con_ix (contentid), INDEX mdl_toolbricresu_conche_ix (contentid, checkid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Results of the accessibility checks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_schedule (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel BIGINT DEFAULT 50 NOT NULL, instanceid BIGINT NOT NULL, contextid BIGINT DEFAULT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timeanalyzed BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0, UNIQUE INDEX mdl_toolbricsche_conins_uix (contextlevel, instanceid), INDEX mdl_toolbricsche_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Keeps the per course content analysis schedule.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_brickfield_summary (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, activities BIGINT DEFAULT NULL, activitiespassed BIGINT DEFAULT NULL, activitiesfailed BIGINT DEFAULT NULL, errorschecktype1 BIGINT DEFAULT NULL, errorschecktype2 BIGINT DEFAULT NULL, errorschecktype3 BIGINT DEFAULT NULL, errorschecktype4 BIGINT DEFAULT NULL, errorschecktype5 BIGINT DEFAULT NULL, errorschecktype6 BIGINT DEFAULT NULL, errorschecktype7 BIGINT DEFAULT NULL, failedchecktype1 BIGINT DEFAULT NULL, failedchecktype2 BIGINT DEFAULT NULL, failedchecktype3 BIGINT DEFAULT NULL, failedchecktype4 BIGINT DEFAULT NULL, failedchecktype5 BIGINT DEFAULT NULL, failedchecktype6 BIGINT DEFAULT NULL, failedchecktype7 BIGINT DEFAULT NULL, percentchecktype1 BIGINT DEFAULT NULL, percentchecktype2 BIGINT DEFAULT NULL, percentchecktype3 BIGINT DEFAULT NULL, percentchecktype4 BIGINT DEFAULT NULL, percentchecktype5 BIGINT DEFAULT NULL, percentchecktype6 BIGINT DEFAULT NULL, percentchecktype7 BIGINT DEFAULT NULL, INDEX mdl_toolbricsumm_cou_ix (courseid), INDEX mdl_toolbricsumm_sta_ix (status), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains accessibility check results summary information.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_cohortroles (id BIGINT AUTO_INCREMENT NOT NULL, cohortid BIGINT NOT NULL, roleid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, usermodified BIGINT DEFAULT NULL, UNIQUE INDEX mdl_toolcoho_cohroluse_uix (cohortid, roleid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Mapping of users to cohort role assignments.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_customlang (id BIGINT AUTO_INCREMENT NOT NULL, lang VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, componentid BIGINT NOT NULL, stringid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, original LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, master LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, local LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT NOT NULL, timecustomized BIGINT DEFAULT NULL, outdated SMALLINT DEFAULT 0, modified SMALLINT DEFAULT 0, INDEX mdl_toolcust_com_ix (componentid), UNIQUE INDEX mdl_toolcust_lancomstr_uix (lang, componentid, stringid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the working checkout of all strings and their custo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_customlang_components (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the list of all installed plugins that provide thei' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_contextlist (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of contexts for a component' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_ctxexpired (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, unexpiredroles LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, expiredroles LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultexpired TINYINT(1) NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_tooldatactxe_con_uix (contextid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_ctxinstance (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, purposeid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_tooldatactxi_cat_ix (categoryid), UNIQUE INDEX mdl_tooldatactxi_con_uix (contextid), INDEX mdl_tooldatactxi_pur_ix (purposeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_ctxlevel (id BIGINT AUTO_INCREMENT NOT NULL, contextlevel SMALLINT NOT NULL, purposeid BIGINT DEFAULT NULL, categoryid BIGINT DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_tooldatactxl_cat_ix (categoryid), UNIQUE INDEX mdl_tooldatactxl_con_uix (contextlevel), INDEX mdl_tooldatactxl_pur_ix (purposeid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Default comment for the table, please edit me' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_ctxlst_ctx (id BIGINT AUTO_INCREMENT NOT NULL, contextid BIGINT NOT NULL, contextlistid BIGINT NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_tooldatactxlctx_con_ix (contextlistid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A contextlist context item' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_purpose (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT NULL, lawfulbases LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sensitivedatareasons LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, retentionperiod VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data purposes' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_purposerole (id BIGINT AUTO_INCREMENT NOT NULL, purposeid BIGINT NOT NULL, roleid BIGINT NOT NULL, lawfulbases LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, sensitivedatareasons LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, retentionperiod VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, protected TINYINT(1) DEFAULT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_tooldatapurp_pur_ix (purposeid), UNIQUE INDEX mdl_tooldatapurp_purrol_uix (purposeid, roleid), INDEX mdl_tooldatapurp_rol_ix (roleid), INDEX mdl_tooldatapurp_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data purpose overrides for a specific role' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_request (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT DEFAULT 0 NOT NULL, comments LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, commentsformat TINYINT(1) DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, requestedby BIGINT DEFAULT 0 NOT NULL, status TINYINT(1) DEFAULT 0 NOT NULL, dpo BIGINT DEFAULT 0, dpocomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, dpocommentformat TINYINT(1) DEFAULT 0 NOT NULL, systemapproved SMALLINT DEFAULT 0 NOT NULL, usermodified BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, creationmethod BIGINT DEFAULT 0 NOT NULL, INDEX mdl_tooldatarequ_dpo_ix (dpo), INDEX mdl_tooldatarequ_req_ix (requestedby), INDEX mdl_tooldatarequ_use2_ix (usermodified), INDEX mdl_tooldatarequ_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table for data requests' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_dataprivacy_rqst_ctxlst (id BIGINT AUTO_INCREMENT NOT NULL, requestid BIGINT NOT NULL, contextlistid BIGINT NOT NULL, INDEX mdl_tooldatarqstctxl_con_ix (contextlistid), INDEX mdl_tooldatarqstctxl_req_ix (requestid), UNIQUE INDEX mdl_tooldatarqstctxl_reqco_uix (requestid, contextlistid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Association table joining requests and contextlists' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_mfa (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, factor VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, label VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT NULL, createdfromip VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT NULL, lastverified BIGINT DEFAULT NULL, revoked TINYINT(1) DEFAULT 0 NOT NULL, lockcounter INT DEFAULT 0 NOT NULL, INDEX mdl_toolmfa_fac_ix (factor), INDEX mdl_toolmfa_use_ix (userid), INDEX mdl_toolmfa_usefacloc_ix (userid, factor, lockcounter), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store factor configurations for users' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_mfa_auth (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, lastverified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_toolmfaauth_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the last time a successful MFA auth was registered fo' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_mfa_secrets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, factor VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, expiry BIGINT NOT NULL, revoked TINYINT(1) DEFAULT 0 NOT NULL, sessionid VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_toolmfasecr_exp_ix (expiry), INDEX mdl_toolmfasecr_fac_ix (factor), INDEX mdl_toolmfasecr_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store factor secrets' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_monitor_events (id BIGINT AUTO_INCREMENT NOT NULL, eventname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, contextid BIGINT NOT NULL, contextlevel BIGINT NOT NULL, contextinstanceid BIGINT NOT NULL, link VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, courseid BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_toolmonieven_con2_ix (contextinstanceid), INDEX mdl_toolmonieven_con_ix (contextid), INDEX mdl_toolmonieven_cou_ix (courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A table that keeps a log of events related to subscriptions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_monitor_history (id BIGINT AUTO_INCREMENT NOT NULL, sid BIGINT NOT NULL, userid BIGINT NOT NULL, timesent BIGINT NOT NULL, INDEX mdl_toolmonihist_sid_ix (sid), UNIQUE INDEX mdl_toolmonihist_sidusetim_uix (sid, userid, timesent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store history of message notifications sent' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_monitor_rules (id BIGINT AUTO_INCREMENT NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) NOT NULL, name VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, courseid BIGINT NOT NULL, plugin VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, eventname VARCHAR(254) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, template LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, templateformat TINYINT(1) NOT NULL, frequency SMALLINT NOT NULL, timewindow INT NOT NULL, timemodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, INDEX mdl_toolmonirule_couuse_ix (courseid, userid), INDEX mdl_toolmonirule_eve_ix (eventname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store rules' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_monitor_subscriptions (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, ruleid BIGINT NOT NULL, cmid BIGINT NOT NULL, userid BIGINT NOT NULL, timecreated BIGINT NOT NULL, lastnotificationsent BIGINT DEFAULT 0 NOT NULL, inactivedate BIGINT DEFAULT 0 NOT NULL, INDEX mdl_toolmonisubs_couuse_ix (courseid, userid), INDEX mdl_toolmonisubs_rul_ix (ruleid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Table to store user subscriptions to various rules' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_policy (id BIGINT AUTO_INCREMENT NOT NULL, sortorder INT DEFAULT 999 NOT NULL, currentversionid BIGINT DEFAULT NULL, INDEX mdl_toolpoli_cur_ix (currentversionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Contains the list of policy documents defined on the site.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_policy_acceptances (id BIGINT AUTO_INCREMENT NOT NULL, policyversionid BIGINT NOT NULL, userid BIGINT NOT NULL, status TINYINT(1) DEFAULT NULL, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, note LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_toolpoliacce_pol_ix (policyversionid), UNIQUE INDEX mdl_toolpoliacce_poluse_uix (policyversionid, userid), INDEX mdl_toolpoliacce_use2_ix (usermodified), INDEX mdl_toolpoliacce_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Tracks users accepting the policy versions' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_policy_versions (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, type SMALLINT DEFAULT 0 NOT NULL, audience SMALLINT DEFAULT 0 NOT NULL, archived SMALLINT DEFAULT 0 NOT NULL, usermodified BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, policyid BIGINT NOT NULL, agreementstyle SMALLINT DEFAULT 0 NOT NULL, optional SMALLINT DEFAULT 0 NOT NULL, revision VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, summary LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, summaryformat SMALLINT NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT NOT NULL, INDEX mdl_toolpolivers_pol_ix (policyid), INDEX mdl_toolpolivers_use_ix (usermodified), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Holds versions of the policy documents' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_recyclebin_category (id BIGINT AUTO_INCREMENT NOT NULL, categoryid BIGINT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, fullname VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_toolrecycate_cat_ix (categoryid), INDEX mdl_toolrecycate_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of items in the category recycle bin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_recyclebin_course (id BIGINT AUTO_INCREMENT NOT NULL, courseid BIGINT NOT NULL, section BIGINT NOT NULL, module BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, INDEX mdl_toolrecycour_cou_ix (courseid), INDEX mdl_toolrecycour_tim_ix (timecreated), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A list of items in the course recycle bin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_usertours_steps (id BIGINT AUTO_INCREMENT NOT NULL, tourid BIGINT NOT NULL, title LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, targettype TINYINT(1) NOT NULL, targetvalue LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_tooluserstep_tou_ix (tourid), INDEX mdl_tooluserstep_tousor_ix (tourid, sortorder), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Steps in an tour' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_tool_usertours_tours (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, pathmatch VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, endtourlabel VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, configdata LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, displaystepnumbers TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'List of tours' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_upgrade_log (id BIGINT AUTO_INCREMENT NOT NULL, type BIGINT NOT NULL, plugin VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, version VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, targetversion VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, info VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, details LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, backtrace LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, timemodified BIGINT NOT NULL, INDEX mdl_upgrlog_tim_ix (timemodified), INDEX mdl_upgrlog_typtim_ix (type, timemodified), INDEX mdl_upgrlog_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Upgrade logging' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_url (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, externalurl LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, display SMALLINT DEFAULT 0 NOT NULL, displayoptions LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, parameters LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_url_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'each record is one url resource' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user (id BIGINT AUTO_INCREMENT NOT NULL, auth VARCHAR(20) CHARACTER SET utf8 DEFAULT 'manual' NOT NULL COLLATE `utf8_general_ci`, confirmed TINYINT(1) DEFAULT 0 NOT NULL, policyagreed TINYINT(1) DEFAULT 0 NOT NULL, deleted TINYINT(1) DEFAULT 0 NOT NULL, suspended TINYINT(1) DEFAULT 0 NOT NULL, mnethostid BIGINT DEFAULT 0 NOT NULL, username VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, idnumber VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, firstname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lastname VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, email VARCHAR(100) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, emailstop TINYINT(1) DEFAULT 0 NOT NULL, phone1 VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, phone2 VARCHAR(20) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, institution VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, department VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, address VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, city VARCHAR(120) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, country VARCHAR(2) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, lang VARCHAR(30) CHARACTER SET utf8 DEFAULT 'en' NOT NULL COLLATE `utf8_general_ci`, calendartype VARCHAR(30) CHARACTER SET utf8 DEFAULT 'gregorian' NOT NULL COLLATE `utf8_general_ci`, theme VARCHAR(50) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timezone VARCHAR(100) CHARACTER SET utf8 DEFAULT '99' NOT NULL COLLATE `utf8_general_ci`, firstaccess BIGINT DEFAULT 0 NOT NULL, lastaccess BIGINT DEFAULT 0 NOT NULL, lastlogin BIGINT DEFAULT 0 NOT NULL, currentlogin BIGINT DEFAULT 0 NOT NULL, lastip VARCHAR(45) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, secret VARCHAR(15) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, picture BIGINT DEFAULT 0 NOT NULL, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 1 NOT NULL, mailformat TINYINT(1) DEFAULT 1 NOT NULL, maildigest TINYINT(1) DEFAULT 0 NOT NULL, maildisplay TINYINT(1) DEFAULT 2 NOT NULL, autosubscribe TINYINT(1) DEFAULT 1 NOT NULL, trackforums TINYINT(1) DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, trustbitmask BIGINT DEFAULT 0 NOT NULL, imagealt VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastnamephonetic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, firstnamephonetic VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, middlename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, alternatename VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, moodlenetprofile VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_user_alt_ix (alternatename), INDEX mdl_user_aut_ix (auth), INDEX mdl_user_cit_ix (city), INDEX mdl_user_con_ix (confirmed), INDEX mdl_user_cou_ix (country), INDEX mdl_user_del_ix (deleted), INDEX mdl_user_ema_ix (email), INDEX mdl_user_fir2_ix (firstnamephonetic), INDEX mdl_user_fir_ix (firstname), INDEX mdl_user_idn_ix (idnumber), INDEX mdl_user_las2_ix (lastaccess), INDEX mdl_user_las3_ix (lastnamephonetic), INDEX mdl_user_las_ix (lastname), INDEX mdl_user_mid_ix (middlename), UNIQUE INDEX mdl_user_mneuse_uix (mnethostid, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'One record for each person' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_devices (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, appid VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, model VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, platform VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, version VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, pushid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, uuid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, publickey LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, UNIQUE INDEX mdl_userdevi_pususe_uix (pushid, userid), INDEX mdl_userdevi_use_ix (userid), INDEX mdl_userdevi_uuiuse_ix (uuid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table stores user''s mobile devices information in order' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_enrolments (id BIGINT AUTO_INCREMENT NOT NULL, status BIGINT DEFAULT 0 NOT NULL, enrolid BIGINT NOT NULL, userid BIGINT NOT NULL, timestart BIGINT DEFAULT 0 NOT NULL, timeend BIGINT DEFAULT 2147483647 NOT NULL, modifierid BIGINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, INDEX mdl_userenro_enr_ix (enrolid), UNIQUE INDEX mdl_userenro_enruse_uix (enrolid, userid), INDEX mdl_userenro_mod_ix (modifierid), INDEX mdl_userenro_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Users participating in courses (aka enrolled users) - everyb' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_info_category (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, sortorder BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Customisable fields categories' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_info_data (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, fieldid BIGINT DEFAULT 0 NOT NULL, data LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, dataformat TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX mdl_userinfodata_usefie_uix (userid, fieldid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Data for the customisable user fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_info_field (id BIGINT AUTO_INCREMENT NOT NULL, shortname VARCHAR(255) CHARACTER SET utf8 DEFAULT 'shortname' NOT NULL COLLATE `utf8_general_ci`, name LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, datatype VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat TINYINT(1) DEFAULT 0 NOT NULL, categoryid BIGINT DEFAULT 0 NOT NULL, sortorder BIGINT DEFAULT 0 NOT NULL, required TINYINT(1) DEFAULT 0 NOT NULL, locked TINYINT(1) DEFAULT 0 NOT NULL, visible SMALLINT DEFAULT 0 NOT NULL, forceunique TINYINT(1) DEFAULT 0 NOT NULL, signup TINYINT(1) DEFAULT 0 NOT NULL, defaultdata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, defaultdataformat TINYINT(1) DEFAULT 0 NOT NULL, param1 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param2 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param3 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param4 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, param5 LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Customisable user profile fields' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_lastaccess (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, courseid BIGINT DEFAULT 0 NOT NULL, timeaccess BIGINT DEFAULT 0 NOT NULL, INDEX mdl_userlast_cou_ix (courseid), INDEX mdl_userlast_use_ix (userid), UNIQUE INDEX mdl_userlast_usecou_uix (userid, courseid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'To keep track of course page access times, used in online pa' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_password_history (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, hash VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, INDEX mdl_userpasshist_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'A rotating log of hashes of previously used passwords for ea' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_password_resets (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT NOT NULL, timerequested BIGINT NOT NULL, timererequested BIGINT DEFAULT 0 NOT NULL, token VARCHAR(32) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_userpassrese_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'table tracking password reset confirmation tokens' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_preferences (id BIGINT AUTO_INCREMENT NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(1333) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, INDEX mdl_userpref_nam_ix (name), UNIQUE INDEX mdl_userpref_usenam_uix (userid, name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Allows modules to store arbitrary user preferences' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_user_private_key (id BIGINT AUTO_INCREMENT NOT NULL, script VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(128) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT NOT NULL, instance BIGINT DEFAULT NULL, iprestriction VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, validuntil BIGINT DEFAULT NULL, timecreated BIGINT DEFAULT NULL, INDEX mdl_userprivkey_scrval_ix (script, value), INDEX mdl_userprivkey_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'access keys used in cookieless scripts - rss, etc.' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Wiki' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, firstpagetitle VARCHAR(255) CHARACTER SET utf8 DEFAULT 'First Page' NOT NULL COLLATE `utf8_general_ci`, wikimode VARCHAR(20) CHARACTER SET utf8 DEFAULT 'collaborative' NOT NULL COLLATE `utf8_general_ci`, defaultformat VARCHAR(20) CHARACTER SET utf8 DEFAULT 'creole' NOT NULL COLLATE `utf8_general_ci`, forceformat TINYINT(1) DEFAULT 1 NOT NULL, editbegin BIGINT DEFAULT 0 NOT NULL, editend BIGINT DEFAULT 0, INDEX mdl_wiki_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores Wiki activity configuration' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_links (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, frompageid BIGINT DEFAULT 0 NOT NULL, topageid BIGINT DEFAULT 0 NOT NULL, tomissingpage VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, INDEX mdl_wikilink_fro_ix (frompageid), INDEX mdl_wikilink_sub_ix (subwikiid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Page wiki links' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_locks (id BIGINT AUTO_INCREMENT NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, sectionname VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT 0 NOT NULL, lockedat BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Manages page locks' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_pages (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT 'title' NOT NULL COLLATE `utf8_general_ci`, cachedcontent LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, timecreated BIGINT DEFAULT 0 NOT NULL, timemodified BIGINT DEFAULT 0 NOT NULL, timerendered BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, pageviews BIGINT DEFAULT 0 NOT NULL, readonly TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_wikipage_sub_ix (subwikiid), UNIQUE INDEX mdl_wikipage_subtituse_uix (subwikiid, title, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki pages' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_subwikis (id BIGINT AUTO_INCREMENT NOT NULL, wikiid BIGINT DEFAULT 0 NOT NULL, groupid BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_wikisubw_wik_ix (wikiid), UNIQUE INDEX mdl_wikisubw_wikgrouse_uix (wikiid, groupid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores subwiki instances' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_synonyms (id BIGINT AUTO_INCREMENT NOT NULL, subwikiid BIGINT DEFAULT 0 NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, pagesynonym VARCHAR(255) CHARACTER SET utf8 DEFAULT 'Pagesynonym' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_wikisyno_pagpag_uix (pageid, pagesynonym), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki pages synonyms' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_wiki_versions (id BIGINT AUTO_INCREMENT NOT NULL, pageid BIGINT DEFAULT 0 NOT NULL, content LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, contentformat VARCHAR(20) CHARACTER SET utf8 DEFAULT 'creole' NOT NULL COLLATE `utf8_general_ci`, version INT DEFAULT 0 NOT NULL, timecreated BIGINT DEFAULT 0 NOT NULL, userid BIGINT DEFAULT 0 NOT NULL, INDEX mdl_wikivers_pag_ix (pageid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores wiki page history' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshop (id BIGINT AUTO_INCREMENT NOT NULL, course BIGINT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, intro LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, introformat SMALLINT DEFAULT 0 NOT NULL, instructauthors LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructauthorsformat SMALLINT DEFAULT 0 NOT NULL, instructreviewers LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, instructreviewersformat SMALLINT DEFAULT 0 NOT NULL, timemodified BIGINT NOT NULL, phase SMALLINT DEFAULT 0, useexamples TINYINT(1) DEFAULT 0, usepeerassessment TINYINT(1) DEFAULT 0, useselfassessment TINYINT(1) DEFAULT 0, grade NUMERIC(10, 5) DEFAULT '80.00000', gradinggrade NUMERIC(10, 5) DEFAULT '20.00000', strategy VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, evaluation VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, gradedecimals SMALLINT DEFAULT 0, submissiontypetext TINYINT(1) DEFAULT 1 NOT NULL, submissiontypefile TINYINT(1) DEFAULT 1 NOT NULL, nattachments SMALLINT DEFAULT 1, submissionfiletypes VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, latesubmissions TINYINT(1) DEFAULT 0, maxbytes BIGINT DEFAULT 100000, examplesmode SMALLINT DEFAULT 0, submissionstart BIGINT DEFAULT 0, submissionend BIGINT DEFAULT 0, assessmentstart BIGINT DEFAULT 0, assessmentend BIGINT DEFAULT 0, phaseswitchassessment TINYINT(1) DEFAULT 0 NOT NULL, conclusion LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, conclusionformat SMALLINT DEFAULT 1 NOT NULL, overallfeedbackmode SMALLINT DEFAULT 1, overallfeedbackfiles SMALLINT DEFAULT 0, overallfeedbackfiletypes VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, overallfeedbackmaxbytes BIGINT DEFAULT 100000, INDEX mdl_work_cou_ix (course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This table keeps information about the module instances and ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshop_aggregations (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, userid BIGINT NOT NULL, gradinggrade NUMERIC(10, 5) DEFAULT NULL, timegraded BIGINT DEFAULT NULL, INDEX mdl_workaggr_use_ix (userid), INDEX mdl_workaggr_wor_ix (workshopid), UNIQUE INDEX mdl_workaggr_woruse_uix (workshopid, userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Aggregated grades for assessment are stored here. The aggreg' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshop_assessments (id BIGINT AUTO_INCREMENT NOT NULL, submissionid BIGINT NOT NULL, reviewerid BIGINT NOT NULL, weight BIGINT DEFAULT 1 NOT NULL, timecreated BIGINT DEFAULT 0, timemodified BIGINT DEFAULT 0, grade NUMERIC(10, 5) DEFAULT NULL, gradinggrade NUMERIC(10, 5) DEFAULT NULL, gradinggradeover NUMERIC(10, 5) DEFAULT NULL, gradinggradeoverby BIGINT DEFAULT NULL, feedbackauthor LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackauthorformat SMALLINT DEFAULT 0, feedbackauthorattachment SMALLINT DEFAULT 0, feedbackreviewer LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackreviewerformat SMALLINT DEFAULT 0, INDEX mdl_workasse_gra_ix (gradinggradeoverby), INDEX mdl_workasse_rev_ix (reviewerid), INDEX mdl_workasse_sub_ix (submissionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about the made assessment and automatically calculated ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshop_grades (id BIGINT AUTO_INCREMENT NOT NULL, assessmentid BIGINT NOT NULL, strategy VARCHAR(30) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, dimensionid BIGINT NOT NULL, grade NUMERIC(10, 5) DEFAULT NULL, peercomment LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, peercommentformat SMALLINT DEFAULT 0, INDEX mdl_workgrad_ass_ix (assessmentid), UNIQUE INDEX mdl_workgrad_assstrdim_uix (assessmentid, strategy, dimensionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'How the reviewers filled-up the grading forms, given grades ' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshop_submissions (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, example TINYINT(1) DEFAULT 0, authorid BIGINT NOT NULL, timecreated BIGINT NOT NULL, timemodified BIGINT NOT NULL, title VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, content LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, contentformat SMALLINT DEFAULT 0 NOT NULL, contenttrust SMALLINT DEFAULT 0 NOT NULL, attachment TINYINT(1) DEFAULT 0, grade NUMERIC(10, 5) DEFAULT NULL, gradeover NUMERIC(10, 5) DEFAULT NULL, gradeoverby BIGINT DEFAULT NULL, feedbackauthor LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, feedbackauthorformat SMALLINT DEFAULT 0, timegraded BIGINT DEFAULT NULL, published TINYINT(1) DEFAULT 0, late TINYINT(1) DEFAULT 0 NOT NULL, INDEX mdl_worksubm_aut_ix (authorid), INDEX mdl_worksubm_gra_ix (gradeoverby), INDEX mdl_worksubm_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Info about the submission and the aggregation of the grade f' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopallocation_scheduled (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, enabled TINYINT(1) DEFAULT 0 NOT NULL, submissionend BIGINT NOT NULL, timeallocated BIGINT DEFAULT NULL, settings LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultstatus BIGINT DEFAULT NULL, resultmessage VARCHAR(1333) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, resultlog LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_worksche_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Stores the allocation settings for the scheduled allocator' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopeval_best_settings (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, comparison SMALLINT DEFAULT 5, UNIQUE INDEX mdl_workbestsett_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Settings for the grading evaluation subplugin Comparison wit' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_accumulative (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, grade BIGINT NOT NULL, weight INT DEFAULT 1, INDEX mdl_workaccu_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Accumulative gradin' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_comments (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, INDEX mdl_workcomm_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Comments strategy f' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_numerrors (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, descriptiontrust BIGINT DEFAULT NULL, grade0 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, grade1 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, weight INT DEFAULT 1, INDEX mdl_worknume_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Number of errors gr' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_numerrors_map (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, nonegative BIGINT NOT NULL, grade NUMERIC(10, 5) NOT NULL, INDEX mdl_worknumemap_wor_ix (workshopid), UNIQUE INDEX mdl_worknumemap_wornon_uix (workshopid, nonegative), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'This maps the number of errors to a percentual grade for sub' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_rubric (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, sort BIGINT DEFAULT 0, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, descriptionformat SMALLINT DEFAULT 0, INDEX mdl_workrubr_wor_ix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The assessment dimensions definitions of Rubric grading stra' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_rubric_config (id BIGINT AUTO_INCREMENT NOT NULL, workshopid BIGINT NOT NULL, layout VARCHAR(30) CHARACTER SET utf8 DEFAULT 'list' COLLATE `utf8_general_ci`, UNIQUE INDEX mdl_workrubrconf_wor_uix (workshopid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'Configuration table for the Rubric grading strategy' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_workshopform_rubric_levels (id BIGINT AUTO_INCREMENT NOT NULL, dimensionid BIGINT NOT NULL, grade NUMERIC(10, 5) NOT NULL, definition LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, definitionformat SMALLINT DEFAULT 0, INDEX mdl_workrubrleve_dim_ix (dimensionid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The definition of rubric rating scales' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mdl_xapi_states (id BIGINT AUTO_INCREMENT NOT NULL, component VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, userid BIGINT DEFAULT NULL, itemid BIGINT NOT NULL, stateid VARCHAR(255) CHARACTER SET utf8 DEFAULT '' NOT NULL COLLATE `utf8_general_ci`, statedata LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, registration VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, timecreated BIGINT NOT NULL, timemodified BIGINT DEFAULT NULL, INDEX mdl_xapistat_comite_ix (component, itemid), INDEX mdl_xapistat_tim_ix (timemodified), INDEX mdl_xapistat_use_ix (userid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = 'The stored xAPI states' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users CHANGE roles roles JSON NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users RENAME INDEX uniq_1483a5e9e7927c74 TO email_idx
        SQL);
    }
}
