
function db_table_generation()
{
    require_once(TEMPLATE_PATH . 'public/admin/functionality/db-table.php');
}
register_activation_hook(__FILE__, 'dkr_db_table_generate');

$srt_application            = $wpdb->prefix . 'srt_application';
$srt_application_table_query = "CREATE TABLE {$srt_application} (
    id INT (11) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR (255),
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
    updated_at datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (id)
)";

require_once(ABSPATH . "wp-admin/includes/upgrade.php");
dbDelta($srt_application_table_query);
