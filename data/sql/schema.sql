CREATE TABLE activity (id INT UNSIGNED AUTO_INCREMENT, num INT UNSIGNED NOT NULL, activitytype_id VARCHAR(3) NOT NULL, name VARCHAR(8) NOT NULL, longname VARCHAR(60) NOT NULL, description TEXT, homepage_url VARCHAR(200), INDEX activitytype_id_idx (activitytype_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE activityitem (id INT UNSIGNED AUTO_INCREMENT, num INT UNSIGNED NOT NULL, activity_id INT UNSIGNED NOT NULL, name VARCHAR(50) NOT NULL, INDEX activity_id_idx (activity_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE activitytype (id VARCHAR(3), name VARCHAR(80) NOT NULL, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE country (id CHAR(2), name VARCHAR(60) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE doc (id INT UNSIGNED AUTO_INCREMENT, person_provider_id INT UNSIGNED, person_author_id INT UNSIGNED, docot_id CHAR(5), ref VARCHAR(45), name VARCHAR(100) NOT NULL, filename VARCHAR(150) NOT NULL, description VARCHAR(200), is_public TINYINT(1) DEFAULT '1' NOT NULL, is_enabled TINYINT(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX docot_id_idx (docot_id), INDEX person_author_id_idx (person_author_id), INDEX person_provider_id_idx (person_provider_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE doc_doctype (doc_id INT UNSIGNED, doctype_id INT UNSIGNED, PRIMARY KEY(doc_id, doctype_id)) ENGINE = INNODB;
CREATE TABLE docot (id CHAR(5), name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE doctype (id INT UNSIGNED AUTO_INCREMENT, num INT UNSIGNED NOT NULL, activityitem_id INT UNSIGNED NOT NULL, name VARCHAR(100) NOT NULL, INDEX activityitem_id_idx (activityitem_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE domain (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(50) NOT NULL, type ENUM('News', 'Call', 'Meeting') DEFAULT 'News', activity_id INT UNSIGNED, person_responsible_id INT UNSIGNED, purpose VARCHAR(200), description TEXT, institute_id INT UNSIGNED, place VARCHAR(60), date DATE, duration INT UNSIGNED, registration_open_time DATETIME, registration_close_time DATETIME, nice_name_1 VARCHAR(50), host_website_1 VARCHAR(200), nice_name_2 VARCHAR(50), host_website_2 VARCHAR(200), is_news TINYINT(1) DEFAULT '1', is_important TINYINT(1) DEFAULT '0', INDEX activity_id_idx (activity_id), INDEX institute_id_idx (institute_id), INDEX person_responsible_id_idx (person_responsible_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event_person (event_id INT UNSIGNED, person_id INT UNSIGNED, PRIMARY KEY(event_id, person_id)) ENGINE = INNODB;
CREATE TABLE expertise (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(40) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE institute (id INT UNSIGNED AUTO_INCREMENT, node_id INT UNSIGNED, is_node_leader TINYINT(1), participant_status ENUM('Participant', 'Lab non EPN', 'Associate') DEFAULT 'Lab non EPN' NOT NULL, participant_num VARCHAR(6), institute_id INT UNSIGNED, name VARCHAR(10) NOT NULL, fullname VARCHAR(80) DEFAULT '' NOT NULL, country_id CHAR(2) DEFAULT 'FR' NOT NULL, address VARCHAR(120), postcode VARCHAR(10), city VARCHAR(30) DEFAULT '' NOT NULL, cedex VARCHAR(10), excellence_fields TEXT NOT NULL, labos TEXT, specific_role TEXT, homepage VARCHAR(120), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX country_id_idx (country_id), INDEX node_id_idx (node_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE institute_activity (activity_id INT UNSIGNED, institute_id INT UNSIGNED, special_status ENUM('Coordinator'), PRIMARY KEY(activity_id, institute_id)) ENGINE = INNODB;
CREATE TABLE institute_keyword (institute_id INT UNSIGNED, keyword_id INT UNSIGNED, PRIMARY KEY(institute_id, keyword_id)) ENGINE = INNODB;
CREATE TABLE job (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(200) NOT NULL, institute VARCHAR(200) NOT NULL, location VARCHAR(100) NOT NULL, duration VARCHAR(200), qualification TEXT, duties TEXT NOT NULL, website VARCHAR(200), contact VARCHAR(60), how_to_apply TEXT NOT NULL, closing_date VARCHAR(200), is_valid TINYINT(1) DEFAULT '1' NOT NULL, sort_date DATE NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE keyword (id INT UNSIGNED AUTO_INCREMENT, keywordtype_id INT UNSIGNED DEFAULT '0' NOT NULL, keyword_id INT UNSIGNED, family VARCHAR(100), name VARCHAR(100) DEFAULT '' NOT NULL, description VARCHAR(200), INDEX keywordtype_id_idx (keywordtype_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE keywordtype (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(30) DEFAULT '' NOT NULL, card_min INT UNSIGNED DEFAULT '0' NOT NULL, card_max INT UNSIGNED DEFAULT '0' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE n2dwg (id INT UNSIGNED AUTO_INCREMENT, num CHAR(3) NOT NULL, name VARCHAR(100) NOT NULL, description TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE n2dwg_sciencecase (n2dwg_id INT UNSIGNED, sciencecase_id INT UNSIGNED, PRIMARY KEY(n2dwg_id, sciencecase_id)) ENGINE = INNODB;
CREATE TABLE node (id INT UNSIGNED AUTO_INCREMENT, num INT UNSIGNED NOT NULL, name VARCHAR(60) NOT NULL, url VARCHAR(150) DEFAULT 'http://', PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE node_pdsnode (node_id INT UNSIGNED, pdsnode_id INT UNSIGNED, PRIMARY KEY(node_id, pdsnode_id)) ENGINE = INNODB;
CREATE TABLE node_sciencecase (node_id INT UNSIGNED, sciencecase_id INT UNSIGNED, PRIMARY KEY(node_id, sciencecase_id)) ENGINE = INNODB;
CREATE TABLE pdsnode (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(60) NOT NULL, url VARCHAR(150) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE person (id INT UNSIGNED AUTO_INCREMENT, institute_id INT UNSIGNED, institute_other VARCHAR(100), n2dwg_id INT UNSIGNED, node_id INT UNSIGNED, domain_id INT UNSIGNED, other_node_thematic VARCHAR(60), node_leading_id INT UNSIGNED, node_leading_status ENUM('scientific', 'technical'), profile ENUM('normal', 'priviledged', 'admin', 'dev') DEFAULT 'normal' NOT NULL, is_enabled TINYINT(1) DEFAULT '0' NOT NULL, is_epn_contact TINYINT(1) DEFAULT '0', name VARCHAR(30) NOT NULL, firstname VARCHAR(30) DEFAULT '' NOT NULL, email VARCHAR(60) NOT NULL, pass VARCHAR(41) NOT NULL, tel VARCHAR(30), fax VARCHAR(30), department VARCHAR(100), role VARCHAR(60) NOT NULL, title VARCHAR(50), url VARCHAR(200), sf_guard_user_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sf_guard_user_id_idx (sf_guard_user_id), INDEX domain_id_idx (domain_id), INDEX institute_id_idx (institute_id), INDEX n2dwg_id_idx (n2dwg_id), INDEX node_id_idx (node_id), INDEX node_leading_id_idx (node_leading_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE person_activity (person_id INT UNSIGNED, activity_id INT UNSIGNED, special_status ENUM('Coordinator', 'Deputy Coordinator', 'Task Leader', 'Science Manager', 'Technical Manager', 'Expert'), PRIMARY KEY(person_id, activity_id)) ENGINE = INNODB;
CREATE TABLE person_domain (person_id INT UNSIGNED, domain_id INT UNSIGNED, PRIMARY KEY(person_id, domain_id)) ENGINE = INNODB;
CREATE TABLE person_expertise (person_id INT UNSIGNED, expertise_id INT UNSIGNED, PRIMARY KEY(person_id, expertise_id)) ENGINE = INNODB;
CREATE TABLE person_keyword (person_id INT UNSIGNED, keyword_id INT UNSIGNED, PRIMARY KEY(person_id, keyword_id)) ENGINE = INNODB;
CREATE TABLE person_n2dwg (person_id INT UNSIGNED, n2dwg_id INT UNSIGNED, special_status ENUM('Leader', 'Co-Leader'), PRIMARY KEY(person_id, n2dwg_id)) ENGINE = INNODB;
CREATE TABLE person_sciencecase (person_id INT UNSIGNED, sciencecase_id INT UNSIGNED, special_status ENUM('Proposer', 'Contact') DEFAULT 'Contact' NOT NULL, PRIMARY KEY(person_id, sciencecase_id)) ENGINE = INNODB;
CREATE TABLE resource (id INT UNSIGNED AUTO_INCREMENT, node_id INT UNSIGNED NOT NULL, resourcetype_id INT UNSIGNED DEFAULT '0' NOT NULL, person_id INT UNSIGNED DEFAULT '0' NOT NULL, person_updater_id INT UNSIGNED, person_responsible_id INT UNSIGNED, person_contact_id INT UNSIGNED, institute_id INT UNSIGNED, resource_repository_id INT UNSIGNED, name VARCHAR(80) NOT NULL, url VARCHAR(200) DEFAULT 'http://' NOT NULL, is_restricted TINYINT(1) DEFAULT '0' NOT NULL, access_comment TEXT, brief VARCHAR(140) DEFAULT '' NOT NULL, description TEXT, non_epn_location VARCHAR(130), howto TEXT, howto_url1 VARCHAR(150), howto_url2 VARCHAR(150), howto_url3 VARCHAR(150), biblio_ref1 VARCHAR(150), biblio_ref2 VARCHAR(150), associated_url1 VARCHAR(150), associated_url2 VARCHAR(150), associated_url3 VARCHAR(150), associated_url4 VARCHAR(150), start_date DATE, stop_date DATE, is_english TINYINT(1) DEFAULT '1' NOT NULL, non_english_language ENUM('Chinese', 'Danish', 'Dutch', 'Finnish', 'French', 'German', 'Italian', 'Japanese', 'Spanish', 'Russian', 'Other'), language ENUM('English', 'French', 'German', 'Italian', 'Spanish') DEFAULT 'English', responsible_name VARCHAR(60), responsible_email VARCHAR(60), contact_name VARCHAR(60), contact_email VARCHAR(60), resourceformat_id INT UNSIGNED, size TEXT, process_level TEXT, status TEXT, format_comment TEXT, is_copy TINYINT(1) DEFAULT '0' NOT NULL, associated_url_comment TEXT, other_node_thematic VARCHAR(60), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX institute_id_idx (institute_id), INDEX node_id_idx (node_id), INDEX person_id_idx (person_id), INDEX person_contact_id_idx (person_contact_id), INDEX person_responsible_id_idx (person_responsible_id), INDEX person_updater_id_idx (person_updater_id), INDEX resourceformat_id_idx (resourceformat_id), INDEX resourcetype_id_idx (resourcetype_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE resource_expertise (resource_id INT UNSIGNED, expertise_id INT UNSIGNED, PRIMARY KEY(resource_id, expertise_id)) ENGINE = INNODB;
CREATE TABLE resource_keyword (keyword_id INT UNSIGNED, resource_id INT UNSIGNED, PRIMARY KEY(keyword_id, resource_id)) ENGINE = INNODB;
CREATE TABLE resource_node (node_id INT UNSIGNED, resource_id INT UNSIGNED, PRIMARY KEY(node_id, resource_id)) ENGINE = INNODB;
CREATE TABLE resource_sciencecase (resource_id INT UNSIGNED, sciencecase_id INT UNSIGNED, PRIMARY KEY(resource_id, sciencecase_id)) ENGINE = INNODB;
CREATE TABLE resourceformat (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(30) DEFAULT '' NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE resourcetype (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(60), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sciencecase (id INT UNSIGNED AUTO_INCREMENT, node_id INT UNSIGNED NOT NULL, num CHAR(5) NOT NULL, name VARCHAR(100) DEFAULT '' NOT NULL, description TEXT, url VARCHAR(150) DEFAULT 'http://', INDEX node_id_idx (node_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE task (id INT UNSIGNED AUTO_INCREMENT, person_id INT UNSIGNED DEFAULT '0' NOT NULL, name VARCHAR(60) DEFAULT '' NOT NULL, description TEXT, is_public TINYINT(1) DEFAULT '0' NOT NULL, priority INT UNSIGNED DEFAULT '1' NOT NULL, priority_old ENUM('very high', 'high', 'medium', 'low', 'very low') DEFAULT 'very high' NOT NULL, is_done TINYINT(1) DEFAULT '0' NOT NULL, done DATE, category ENUM('bug fix', 'modification', 'new addition') DEFAULT 'new addition' NOT NULL, topic ENUM('framework', 'project') DEFAULT 'project' NOT NULL, level ENUM('structure', 'presentation', 'data') DEFAULT 'structure' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX person_id_idx (person_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_profile (id BIGINT AUTO_INCREMENT, user_id BIGINT UNIQUE NOT NULL, email_new VARCHAR(255) UNIQUE, firstname VARCHAR(255), lastname VARCHAR(255), validate_at DATETIME, validate VARCHAR(33), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX validate_idx (validate), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE activity ADD CONSTRAINT activity_activitytype_id_activitytype_id FOREIGN KEY (activitytype_id) REFERENCES activitytype(id);
ALTER TABLE activityitem ADD CONSTRAINT activityitem_activity_id_activity_id FOREIGN KEY (activity_id) REFERENCES activity(id);
ALTER TABLE doc ADD CONSTRAINT doc_person_provider_id_person_id FOREIGN KEY (person_provider_id) REFERENCES person(id);
ALTER TABLE doc ADD CONSTRAINT doc_person_author_id_person_id FOREIGN KEY (person_author_id) REFERENCES person(id);
ALTER TABLE doc ADD CONSTRAINT doc_docot_id_docot_id FOREIGN KEY (docot_id) REFERENCES docot(id);
ALTER TABLE doc_doctype ADD CONSTRAINT doc_doctype_doctype_id_doctype_id FOREIGN KEY (doctype_id) REFERENCES doctype(id);
ALTER TABLE doc_doctype ADD CONSTRAINT doc_doctype_doc_id_doc_id FOREIGN KEY (doc_id) REFERENCES doc(id);
ALTER TABLE doctype ADD CONSTRAINT doctype_activityitem_id_activityitem_id FOREIGN KEY (activityitem_id) REFERENCES activityitem(id);
ALTER TABLE event ADD CONSTRAINT event_person_responsible_id_person_id FOREIGN KEY (person_responsible_id) REFERENCES person(id);
ALTER TABLE event ADD CONSTRAINT event_institute_id_institute_id FOREIGN KEY (institute_id) REFERENCES institute(id);
ALTER TABLE event ADD CONSTRAINT event_activity_id_activity_id FOREIGN KEY (activity_id) REFERENCES activity(id);
ALTER TABLE event_person ADD CONSTRAINT event_person_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE event_person ADD CONSTRAINT event_person_event_id_event_id FOREIGN KEY (event_id) REFERENCES event(id);
ALTER TABLE institute ADD CONSTRAINT institute_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE institute ADD CONSTRAINT institute_country_id_country_id FOREIGN KEY (country_id) REFERENCES country(id);
ALTER TABLE institute_activity ADD CONSTRAINT institute_activity_institute_id_institute_id FOREIGN KEY (institute_id) REFERENCES institute(id);
ALTER TABLE institute_activity ADD CONSTRAINT institute_activity_activity_id_activity_id FOREIGN KEY (activity_id) REFERENCES activity(id);
ALTER TABLE institute_keyword ADD CONSTRAINT institute_keyword_keyword_id_keyword_id FOREIGN KEY (keyword_id) REFERENCES keyword(id);
ALTER TABLE institute_keyword ADD CONSTRAINT institute_keyword_institute_id_institute_id FOREIGN KEY (institute_id) REFERENCES institute(id);
ALTER TABLE keyword ADD CONSTRAINT keyword_keywordtype_id_keywordtype_id FOREIGN KEY (keywordtype_id) REFERENCES keywordtype(id);
ALTER TABLE n2dwg_sciencecase ADD CONSTRAINT n2dwg_sciencecase_sciencecase_id_sciencecase_id FOREIGN KEY (sciencecase_id) REFERENCES sciencecase(id);
ALTER TABLE n2dwg_sciencecase ADD CONSTRAINT n2dwg_sciencecase_n2dwg_id_n2dwg_id FOREIGN KEY (n2dwg_id) REFERENCES n2dwg(id);
ALTER TABLE node_pdsnode ADD CONSTRAINT node_pdsnode_pdsnode_id_pdsnode_id FOREIGN KEY (pdsnode_id) REFERENCES pdsnode(id);
ALTER TABLE node_pdsnode ADD CONSTRAINT node_pdsnode_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE node_sciencecase ADD CONSTRAINT node_sciencecase_sciencecase_id_sciencecase_id FOREIGN KEY (sciencecase_id) REFERENCES sciencecase(id);
ALTER TABLE node_sciencecase ADD CONSTRAINT node_sciencecase_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE person ADD CONSTRAINT person_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id);
ALTER TABLE person ADD CONSTRAINT person_node_leading_id_node_id FOREIGN KEY (node_leading_id) REFERENCES node(id);
ALTER TABLE person ADD CONSTRAINT person_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE person ADD CONSTRAINT person_n2dwg_id_n2dwg_id FOREIGN KEY (n2dwg_id) REFERENCES n2dwg(id);
ALTER TABLE person ADD CONSTRAINT person_institute_id_institute_id FOREIGN KEY (institute_id) REFERENCES institute(id);
ALTER TABLE person ADD CONSTRAINT person_domain_id_domain_id FOREIGN KEY (domain_id) REFERENCES domain(id);
ALTER TABLE person_activity ADD CONSTRAINT person_activity_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_activity ADD CONSTRAINT person_activity_activity_id_activity_id FOREIGN KEY (activity_id) REFERENCES activity(id);
ALTER TABLE person_domain ADD CONSTRAINT person_domain_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_domain ADD CONSTRAINT person_domain_domain_id_domain_id FOREIGN KEY (domain_id) REFERENCES domain(id);
ALTER TABLE person_expertise ADD CONSTRAINT person_expertise_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_expertise ADD CONSTRAINT person_expertise_expertise_id_expertise_id FOREIGN KEY (expertise_id) REFERENCES expertise(id);
ALTER TABLE person_keyword ADD CONSTRAINT person_keyword_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_keyword ADD CONSTRAINT person_keyword_keyword_id_keyword_id FOREIGN KEY (keyword_id) REFERENCES keyword(id);
ALTER TABLE person_n2dwg ADD CONSTRAINT person_n2dwg_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE person_n2dwg ADD CONSTRAINT person_n2dwg_n2dwg_id_n2dwg_id FOREIGN KEY (n2dwg_id) REFERENCES n2dwg(id);
ALTER TABLE person_sciencecase ADD CONSTRAINT person_sciencecase_sciencecase_id_sciencecase_id FOREIGN KEY (sciencecase_id) REFERENCES sciencecase(id);
ALTER TABLE person_sciencecase ADD CONSTRAINT person_sciencecase_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE resource ADD CONSTRAINT resource_resourcetype_id_resourcetype_id FOREIGN KEY (resourcetype_id) REFERENCES resourcetype(id);
ALTER TABLE resource ADD CONSTRAINT resource_resourceformat_id_resourceformat_id FOREIGN KEY (resourceformat_id) REFERENCES resourceformat(id);
ALTER TABLE resource ADD CONSTRAINT resource_person_updater_id_person_id FOREIGN KEY (person_updater_id) REFERENCES person(id);
ALTER TABLE resource ADD CONSTRAINT resource_person_responsible_id_person_id FOREIGN KEY (person_responsible_id) REFERENCES person(id);
ALTER TABLE resource ADD CONSTRAINT resource_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE resource ADD CONSTRAINT resource_person_contact_id_person_id FOREIGN KEY (person_contact_id) REFERENCES person(id);
ALTER TABLE resource ADD CONSTRAINT resource_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE resource ADD CONSTRAINT resource_institute_id_institute_id FOREIGN KEY (institute_id) REFERENCES institute(id);
ALTER TABLE resource_expertise ADD CONSTRAINT resource_expertise_resource_id_resource_id FOREIGN KEY (resource_id) REFERENCES resource(id);
ALTER TABLE resource_expertise ADD CONSTRAINT resource_expertise_expertise_id_expertise_id FOREIGN KEY (expertise_id) REFERENCES expertise(id);
ALTER TABLE resource_keyword ADD CONSTRAINT resource_keyword_resource_id_resource_id FOREIGN KEY (resource_id) REFERENCES resource(id);
ALTER TABLE resource_keyword ADD CONSTRAINT resource_keyword_keyword_id_keyword_id FOREIGN KEY (keyword_id) REFERENCES keyword(id);
ALTER TABLE resource_node ADD CONSTRAINT resource_node_resource_id_resource_id FOREIGN KEY (resource_id) REFERENCES resource(id);
ALTER TABLE resource_node ADD CONSTRAINT resource_node_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE resource_sciencecase ADD CONSTRAINT resource_sciencecase_sciencecase_id_sciencecase_id FOREIGN KEY (sciencecase_id) REFERENCES sciencecase(id);
ALTER TABLE resource_sciencecase ADD CONSTRAINT resource_sciencecase_resource_id_resource_id FOREIGN KEY (resource_id) REFERENCES resource(id);
ALTER TABLE sciencecase ADD CONSTRAINT sciencecase_node_id_node_id FOREIGN KEY (node_id) REFERENCES node(id);
ALTER TABLE task ADD CONSTRAINT task_person_id_person_id FOREIGN KEY (person_id) REFERENCES person(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;