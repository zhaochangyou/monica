<?php

return [
    'yes' => 'Sim',
    'no' => 'Não',
    'update' => 'Atualizar',
    'save' => 'Salvar',
    'add' => 'Adicionar',
    'cancel' => 'Cancelar',
    'confirm' => 'Confirm',
    'delete_confirm' => 'Tem certeza?',
    'delete' => 'Excluir',
    'edit' => 'Editar',
    'upload' => 'Upload',
    'download' => 'Baixar',
    'save_close' => 'Salvar e fechar',
    'close' => 'Fechar',
    'copy' => 'Copiar',
    'create' => 'Criar',
    'remove' => 'Remover',
    'revoke' => 'Revogar',
    'done' => 'Concluído',
    'back' => 'Voltar',
    'verify' => 'Verificar',
    'new' => 'novo',
    'unknown' => 'Eu não sei',
    'load_more' => 'Carregar mais',
    'loading' => 'Carregando...',
    'with' => 'com',
    'today' => 'hoje',
    'yesterday' => 'ontem',
    'another_day' => 'outro dia',
    'date' => 'Data',
    'type' => 'Tipo',
    'zoom' => 'Zoom',
    'upgrade' => 'Assine para desbloquear',
    'percent_uploaded' => '{percent}% enviado',
    'retry' => 'Tentar novamente',
    'filter' => 'Filtrar lista',
    'go_back' => 'Voltar',
    'file_selected' => '1 file selected...|{count} files selected...',

    'application_title' => 'Monica – Gerenciador de relacionamento pessoal',
    'application_description' => 'Monica é uma ferramenta para gerenciar suas interações com seus amigos, familiares e pessoas queridas.',
    'application_og_title' => 'Have better relations with your loved ones. Free Online CRM for friends and family.',

    'markdown_description' => 'Want to format your text in a nice way? We support Markdown to add bold, italic, lists and more.',
    'markdown_link' => 'Ler documentação',

    'header_settings_link' => 'Configurações',
    'header_logout_link' => 'Sair',
    'header_changelog_link' => 'Atualizações de produtos',

    'main_nav_cta' => 'Adicionar contatos',
    'main_nav_dashboard' => 'Dashboard',
    'main_nav_family' => 'Contatos',
    'main_nav_journal' => 'Diário',
    'main_nav_activities' => 'Atividades',
    'main_nav_tasks' => 'Tarefas',

    'footer_remarks' => 'Alguma sugestão?',
    'footer_send_email' => 'Me envie um e-mail',
    'footer_privacy' => 'Política de Privacidade',
    'footer_release' => 'Notas da versão',
    'footer_newsletter' => 'Newsletter',
    'footer_source_code' => 'Contribuir',
    'footer_version' => 'Versão: :version',
    'footer_new_version' => 'Uma nova versão está disponível',

    'footer_modal_version_whats_new' => 'Novidades',
    'footer_modal_version_release_away' => 'Sua instalação está 1 versão atrás da versão mais recente. Atualize para aproveitar as novidades.|Sua instalação está :number versões atrás da versão mais recente. Atualize para aproveitar as novidades.',

    'breadcrumb_dashboard' => 'Dashboard',
    'breadcrumb_list_contacts' => 'Lista de contatos',
    'breadcrumb_archived_contacts' => 'Contatos arquivados',
    'breadcrumb_journal' => 'Diário',
    'breadcrumb_settings' => 'Configurações',
    'breadcrumb_settings_export' => 'Exportar',
    'breadcrumb_settings_users' => 'Usuários',
    'breadcrumb_settings_users_add' => 'Adicionar usuário',
    'breadcrumb_settings_subscriptions' => 'Assinatura',
    'breadcrumb_settings_import' => 'Importar',
    'breadcrumb_settings_import_report' => 'Relatório de importação',
    'breadcrumb_settings_import_upload' => 'Enviar',
    'breadcrumb_settings_tags' => 'Etiquetas',
    'breadcrumb_add_significant_other' => 'Adicionar companheiro(a)',
    'breadcrumb_edit_significant_other' => 'Editar companheiro(a)',
    'breadcrumb_add_note' => 'Adicionar nota',
    'breadcrumb_edit_note' => 'Editar nota',
    'breadcrumb_api' => 'API',
    'breadcrumb_dav' => 'DAV Resources',
    'breadcrumb_edit_introductions' => 'Como se conheceram',
    'breadcrumb_settings_personalization' => 'Personalização',
    'breadcrumb_settings_security' => 'Segurança',
    'breadcrumb_settings_security_2fa' => 'Autenticação de dois fatores',
    'breadcrumb_profile' => 'Perfil de :name',

    'gender_male' => 'Homem',
    'gender_female' => 'Mulher',
    'gender_none' => 'Prefiro não dizer',
    'gender_no_gender' => 'Sem gênero',

    'error_title' => 'Ops! Algo deu errado.',
    'error_unauthorized' => 'Você não tem permissão para editar este recurso.',
    'error_user_account' => 'This user does not belong to the given account.',
    'error_save' => 'Ocorreu um erro ao tentar salvar os dados.',
    'error_try_again' => 'Algo deu errado. Por favor, tente novamente.',
    'error_id' => 'Error ID: :id',
    'error_unavailable' => 'Service unavailable',
    'error_maintenance' => 'Manutenção em andamento. Voltaremos em breve.',
    'error_help' => 'Voltaremos em breve.',
    'error_twitter' => 'Siga-nos <a href="https://twitter.com/:twitter">no Twitter </a> para saber quando voltamos.',
    'error_no_term' => 'There is no policy for this instance yet.',

    'default_save_success' => 'Dados salvos com sucesso!',

    'compliance_title' => 'Desculpa pelo incômodo.',
    'compliance_desc' => 'Alteramos nossos <a href=":urlterm" hreflang=":hreflang">Termos de Uso</a> e <a href=":url" hreflang=":hreflang">Política de Privacidade</a>. Por lei, solicitamos que você os revise e aceite ambos para que possa continuar usando sua conta.',
    'compliance_desc_end' => 'We don’t do anything nasty with your data or account and will never do.',
    'compliance_terms' => 'Aceitar os novos Termos e Política de Privacidade',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'Relacionamentos amorosos',
    'relationship_type_group_family' => 'Relacionamentos familiares',
    'relationship_type_group_friend' => 'Relacionamentos de amizade',
    'relationship_type_group_work' => 'Relacionamentos profissionais',
    'relationship_type_group_other' => 'Other kind of relationships',

    'relationship_type_partner' => 'companheiro',
    'relationship_type_partner_female' => 'companheira',
    'relationship_type_partner_with_name' => 'companheiro de :name',
    'relationship_type_partner_female_with_name' => 'companheira de :name',

    'relationship_type_spouse' => 'esposo',
    'relationship_type_spouse_female' => 'esposa',
    'relationship_type_spouse_with_name' => 'esposo de :name',
    'relationship_type_spouse_female_with_name' => 'esposa de :name',

    'relationship_type_date' => 'namorado',
    'relationship_type_date_female' => 'namorada',
    'relationship_type_date_with_name' => 'namorado de :name',
    'relationship_type_date_female_with_name' => 'namorada de :name',

    'relationship_type_lover' => 'amante',
    'relationship_type_lover_female' => 'amante',
    'relationship_type_lover_with_name' => 'amante de :name',
    'relationship_type_lover_female_with_name' => 'amante de :name',

    'relationship_type_inlovewith' => 'apaixonado por',
    'relationship_type_inlovewith_female' => 'apaixonada por',
    'relationship_type_inlovewith_with_name' => 'alguém que :name está apaixonado',
    'relationship_type_inlovewith_female_with_name' => 'alguém que :name está apaixonada',

    'relationship_type_lovedby' => 'amado por',
    'relationship_type_lovedby_female' => 'amada por',
    'relationship_type_lovedby_with_name' => 'amor secreto de :name',
    'relationship_type_lovedby_female_with_name' => 'amor secreto de :name',

    'relationship_type_ex' => 'ex-namorado',
    'relationship_type_ex_female' => 'ex-namorada',
    'relationship_type_ex_with_name' => 'ex-namorado de :name',
    'relationship_type_ex_female_with_name' => 'ex-namorada de :name',

    'relationship_type_parent' => 'pai',
    'relationship_type_parent_female' => 'mãe',
    'relationship_type_parent_with_name' => 'pai de :name',
    'relationship_type_parent_female_with_name' => 'mãe de :name',

    'relationship_type_child' => 'filho',
    'relationship_type_child_female' => 'filha',
    'relationship_type_child_with_name' => 'filho de :name',
    'relationship_type_child_female_with_name' => 'filha de :name',

    'relationship_type_stepparent' => 'padrasto',
    'relationship_type_stepparent_female' => 'madrasta',
    'relationship_type_stepparent_with_name' => 'padrasto de :name',
    'relationship_type_stepparent_female_with_name' => 'madrasta de :name',

    'relationship_type_stepchild' => 'enteado',
    'relationship_type_stepchild_female' => 'enteada',
    'relationship_type_stepchild_with_name' => 'enteado de :name',
    'relationship_type_stepchild_female_with_name' => 'enteada de :name',

    'relationship_type_sibling' => 'irmão',
    'relationship_type_sibling_female' => 'irmã',
    'relationship_type_sibling_with_name' => 'irmão de :name',
    'relationship_type_sibling_female_with_name' => 'irmã de :name',

    'relationship_type_grandparent' => 'avô',
    'relationship_type_grandparent_female' => 'avó',
    'relationship_type_grandparent_with_name' => 'avô de :name',
    'relationship_type_grandparent_female_with_name' => 'avó de :name',

    'relationship_type_grandchild' => 'neto',
    'relationship_type_grandchild_female' => 'neta',
    'relationship_type_grandchild_with_name' => 'neto de :name',
    'relationship_type_grandchild_female_with_name' => 'neta de :name',

    'relationship_type_uncle' => 'tio',
    'relationship_type_uncle_female' => 'tia',
    'relationship_type_uncle_with_name' => 'tio de :name',
    'relationship_type_uncle_female_with_name' => 'tia de :name',

    'relationship_type_nephew' => 'sobrinho',
    'relationship_type_nephew_female' => 'sobrinha',
    'relationship_type_nephew_with_name' => 'sobrinho de :name',
    'relationship_type_nephew_female_with_name' => 'sobrinha de :name',

    'relationship_type_cousin' => 'primo',
    'relationship_type_cousin_female' => 'prima',
    'relationship_type_cousin_with_name' => 'primo de :name',
    'relationship_type_cousin_female_with_name' => 'prima de :name',

    'relationship_type_godfather' => 'padrinho',
    'relationship_type_godfather_female' => 'madrinha',
    'relationship_type_godfather_with_name' => 'padrinho de :name',
    'relationship_type_godfather_female_with_name' => 'madrinha de :name',

    'relationship_type_godson' => 'afilhado',
    'relationship_type_godson_female' => 'afilhada',
    'relationship_type_godson_with_name' => 'afilhado de :name',
    'relationship_type_godson_female_with_name' => 'afilhada de :name',

    'relationship_type_friend' => 'amigo',
    'relationship_type_friend_female' => 'amiga',
    'relationship_type_friend_with_name' => 'amigo de :name',
    'relationship_type_friend_female_with_name' => 'amiga de :name',

    'relationship_type_bestfriend' => 'melhor amigo',
    'relationship_type_bestfriend_female' => 'melhor amiga',
    'relationship_type_bestfriend_with_name' => 'melhor amigo de :name',
    'relationship_type_bestfriend_female_with_name' => 'melhor amiga de :name',

    'relationship_type_colleague' => 'colega',
    'relationship_type_colleague_female' => 'colega',
    'relationship_type_colleague_with_name' => 'colega de :name',
    'relationship_type_colleague_female_with_name' => 'colega de :name',

    'relationship_type_boss' => 'chefe',
    'relationship_type_boss_female' => 'chefa',
    'relationship_type_boss_with_name' => 'chefe de :name',
    'relationship_type_boss_female_with_name' => ':name’s boss',

    'relationship_type_subordinate' => 'subordinate',
    'relationship_type_subordinate_female' => 'subordinate',
    'relationship_type_subordinate_with_name' => ':name’s subordinate',
    'relationship_type_subordinate_female_with_name' => ':name’s subordinate',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentora',
    'relationship_type_mentor_with_name' => 'mentor de :name',
    'relationship_type_mentor_female_with_name' => 'mentora de :name',

    'relationship_type_protege' => 'protege',
    'relationship_type_protege_female' => 'protege',
    'relationship_type_protege_with_name' => ':name’s protege',
    'relationship_type_protege_female_with_name' => ':name’s protege',

    'relationship_type_ex_husband' => 'ex husband',
    'relationship_type_ex_husband_female' => 'ex wife',
    'relationship_type_ex_husband_with_name' => ':name’s ex husband',
    'relationship_type_ex_husband_female_with_name' => ':name’s ex wife',

    // emotions
    'emotion_primary_love' => 'Amor',
    'emotion_primary_joy' => 'Alegria',
    'emotion_primary_surprise' => 'Surpresa',
    'emotion_primary_anger' => 'Raiva',
    'emotion_primary_sadness' => 'Tristeza',
    'emotion_primary_fear' => 'Medo',

    'emotion_secondary_affection' => 'Afeição',
    'emotion_secondary_lust' => 'Cobiça',
    'emotion_secondary_longing' => 'Desejo',
    'emotion_secondary_cheerfulness' => 'Felicidade',
    'emotion_secondary_zest' => 'Entusiasmo',
    'emotion_secondary_contentment' => 'Satisfação',
    'emotion_secondary_pride' => 'Orgulho',
    'emotion_secondary_optimism' => 'Otimismo',
    'emotion_secondary_enthrallment' => 'Encantado',
    'emotion_secondary_relief' => 'Alívio',
    'emotion_secondary_surprise' => 'Surpreso',
    'emotion_secondary_irritation' => 'Irritação',
    'emotion_secondary_exasperation' => 'Fúria',
    'emotion_secondary_rage' => 'Raiva',
    'emotion_secondary_disgust' => 'Nojo',
    'emotion_secondary_envy' => 'Inveja',
    'emotion_secondary_suffering' => 'Dor',
    'emotion_secondary_sadness' => 'Tristeza',
    'emotion_secondary_disappointment' => 'Desapontado',
    'emotion_secondary_shame' => 'Vergonha',
    'emotion_secondary_neglect' => 'Esquecido',
    'emotion_secondary_sympathy' => 'Simpatia',
    'emotion_secondary_horror' => 'Repúdio',
    'emotion_secondary_nervousness' => 'Nervosismo',

    'emotion_adoration' => 'Adorado',
    'emotion_affection' => 'Afeição',
    'emotion_love' => 'Amor',
    'emotion_fondness' => 'Apreço',
    'emotion_liking' => 'Carinho',
    'emotion_attraction' => 'Atração',
    'emotion_caring' => 'Cuidado',
    'emotion_tenderness' => 'Ternura',
    'emotion_compassion' => 'Compaixão',
    'emotion_sentimentality' => 'Sentimental',
    'emotion_arousal' => 'Agitação',
    'emotion_desire' => 'Desejo',
    'emotion_lust' => 'Cobiça',
    'emotion_passion' => 'Paixão',
    'emotion_infatuation' => 'Fascínio',
    'emotion_longing' => 'Desejo',
    'emotion_amusement' => 'Diversão',
    'emotion_bliss' => 'Euforia',
    'emotion_cheerfulness' => 'Felicidade',
    'emotion_gaiety' => 'Alegria',
    'emotion_glee' => 'Alegria',
    'emotion_jolliness' => 'Jolliness',
    'emotion_joviality' => 'Joviality',
    'emotion_joy' => 'Joy',
    'emotion_delight' => 'Delight',
    'emotion_enjoyment' => 'Enjoyment',
    'emotion_gladness' => 'Gladness',
    'emotion_happiness' => 'Happiness',
    'emotion_jubilation' => 'Jubilation',
    'emotion_elation' => 'Elation',
    'emotion_satisfaction' => 'Satisfaction',
    'emotion_ecstasy' => 'Ecstasy',
    'emotion_euphoria' => 'Euphoria',
    'emotion_enthusiasm' => 'Enthusiasm',
    'emotion_zeal' => 'Zeal',
    'emotion_zest' => 'Zest',
    'emotion_excitement' => 'Excitement',
    'emotion_thrill' => 'Thrill',
    'emotion_exhilaration' => 'Exhilaration',
    'emotion_contentment' => 'Contentment',
    'emotion_pleasure' => 'Pleasure',
    'emotion_pride' => 'Pride',
    'emotion_eagerness' => 'Eagerness',
    'emotion_hope' => 'Hope',
    'emotion_optimism' => 'Optimism',
    'emotion_enthrallment' => 'Enthrallment',
    'emotion_rapture' => 'Rapture',
    'emotion_relief' => 'Relief',
    'emotion_amazement' => 'Amazement',
    'emotion_surprise' => 'Surprise',
    'emotion_astonishment' => 'Astonishment',
    'emotion_aggravation' => 'Aggravation',
    'emotion_irritation' => 'Irritation',
    'emotion_agitation' => 'Agitation',
    'emotion_annoyance' => 'Annoyance',
    'emotion_grouchiness' => 'Grouchiness',
    'emotion_grumpiness' => 'Grumpiness',
    'emotion_exasperation' => 'Exasperation',
    'emotion_frustration' => 'Frustration',
    'emotion_anger' => 'Anger',
    'emotion_rage' => 'Rage',
    'emotion_outrage' => 'Outrage',
    'emotion_fury' => 'Fury',
    'emotion_wrath' => 'Wrath',
    'emotion_hostility' => 'Hostility',
    'emotion_ferocity' => 'Ferocity',
    'emotion_bitterness' => 'Bitterness',
    'emotion_hate' => 'Hate',
    'emotion_loathing' => 'Loathing',
    'emotion_scorn' => 'Scorn',
    'emotion_spite' => 'Spite',
    'emotion_vengefulness' => 'Vengefulness',
    'emotion_dislike' => 'Dislike',
    'emotion_resentment' => 'Resentment',
    'emotion_disgust' => 'Disgust',
    'emotion_revulsion' => 'Revulsion',
    'emotion_contempt' => 'Contempt',
    'emotion_envy' => 'Envy',
    'emotion_jealousy' => 'Jealousy',
    'emotion_agony' => 'Agony',
    'emotion_suffering' => 'Suffering',
    'emotion_hurt' => 'Hurt',
    'emotion_anguish' => 'Anguish',
    'emotion_depression' => 'Depression',
    'emotion_despair' => 'Despair',
    'emotion_hopelessness' => 'Hopelessness',
    'emotion_gloom' => 'Gloom',
    'emotion_glumness' => 'Glumness',
    'emotion_sadness' => 'Sadness',
    'emotion_unhappiness' => 'Unhappiness',
    'emotion_grief' => 'Grief',
    'emotion_sorrow' => 'Sorrow',
    'emotion_woe' => 'Woe',
    'emotion_misery' => 'Misery',
    'emotion_melancholy' => 'Melancholy',
    'emotion_dismay' => 'Dismay',
    'emotion_disappointment' => 'Disappointment',
    'emotion_displeasure' => 'Displeasure',
    'emotion_guilt' => 'Guilt',
    'emotion_shame' => 'Shame',
    'emotion_regret' => 'Regret',
    'emotion_remorse' => 'Remorse',
    'emotion_alienation' => 'Alienation',
    'emotion_isolation' => 'Isolation',
    'emotion_neglect' => 'Neglect',
    'emotion_loneliness' => 'Loneliness',
    'emotion_rejection' => 'Rejection',
    'emotion_homesickness' => 'Homesickness',
    'emotion_defeat' => 'Defeat',
    'emotion_dejection' => 'Dejection',
    'emotion_insecurity' => 'Insecurity',
    'emotion_embarrassment' => 'Embarrassment',
    'emotion_humiliation' => 'Humiliation',
    'emotion_insult' => 'Insult',
    'emotion_pity' => 'Pity',
    'emotion_sympathy' => 'Sympathy',
    'emotion_alarm' => 'Alarm',
    'emotion_shock' => 'Shock',
    'emotion_fear' => 'Fear',
    'emotion_fright' => 'Fright',
    'emotion_horror' => 'Horror',
    'emotion_terror' => 'Terror',
    'emotion_panic' => 'Panic',
    'emotion_hysteria' => 'Hysteria',
    'emotion_mortification' => 'Mortification',
    'emotion_anxiety' => 'Anxiety',
    'emotion_nervousness' => 'Nervousness',
    'emotion_tenseness' => 'Tenseness',
    'emotion_uneasiness' => 'Uneasiness',
    'emotion_apprehension' => 'Apprehension',
    'emotion_worry' => 'Worry',
    'emotion_distress' => 'Distress',
    'emotion_dread' => 'Dread',

    // weather
    'weather_clear-day' => 'Clear day',
    'weather_clear-night' => 'Clear night',
    'weather_rain' => 'Rain',
    'weather_snow' => 'Snow',
    'weather_sleet' => 'Sleet',
    'weather_wind' => 'Wind',
    'weather_fog' => 'Fog',
    'weather_cloudy' => 'Cloudy',
    'weather_partly-cloudy-day' => 'Parcialmente nublado (Dia)',
    'weather_partly-cloudy-night' => 'Parcialmente nublado (Noite)',
    'weather_current_temperature_celsius' => ':temperature °C',
    'weather_current_temperature_fahrenheit' => ':temperature °F',
    'weather_current_title' => 'Tempo atual',

    // dav
    'dav_contacts' => 'Contatos',
    'dav_contacts_description' => 'Contatos de :name',
    'dav_birthdays' => 'Aniversários',
    'dav_birthdays_description' => ':name’s contact’s birthdays',
    'dav_tasks' => 'Tarefas',
    'dav_tasks_description' => 'tarefas de :name',

    // audit log
    'log_contact_created' => 'Created the contact',
    'log_contact_created_with_name' => 'Added :name as a contact.',
    'log_contact_created_with_name_with_link' => 'Added <a href=":link">:name</a> as a contact.',
];
