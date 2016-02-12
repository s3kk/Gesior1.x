<?PHP
$config['site']['worlds'] = array(0 => 'Forgotten Server'); #! NOME DO SERVIDOR !#
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/Casarin/Desktop/Eu/Tibia/New/Master/";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(1 => 'Forgotten Town');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/outfit.php';
$config['site']['addons_images_url'] = 'images/addons/';
$config['site']['addons_images_extension'] = '.gif';
$config['site']['mounts_images_url'] = 'images/mounts/';
$config['site']['mounts_images_extension'] = '.gif';
$config['site']['item_images_url'] = 'images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'images';
$config['site']['flag_images_extension'] = '.png';

# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = false;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 3;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'] = array(1);
$config['site']['max_players_per_account'] = 10;


# Emails Config
$config['site']['send_emails'] = false;
$config['site']['mail_address'] = "@gmx.com";
$config['site']['smtp_enabled'] = false;
$config['site']['smtp_host'] = "mail.gmx.com";
$config['site']['smtp_port'] = 465;
$config['site']['smtp_auth'] = false;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "";

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 20;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 60;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 250;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 50;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiarl';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = true;
$config['site']['serverinfo_page'] = true;

############################
## PagSeguro/Paypal Email ##
############################
#PAGSEGURO SISTEMA AUTOMATICO
$config['pagseguro']['email'] = 'seuemail@algumacoisa.com'; //E-mail da sua conta PagSeguro
$config['pagseguro']['produtoNome'] = 'Premium Points'; //Identificação do Pontos
$config['pagseguro']['produtoValor'] = '100'; //100 = R$ 1,00 - 250 = R$ 2,50

#####################
## Nome do Produto ##
#####################
$config['pagseguro']['produtoNome'] = 'Premium Points';

#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#
$config['site']['CaixaCont'] = "
Conta/Corrente: NUMERO
Ag: NUMERO
Favorecido: NOME
OP: NUMERO
"; 
