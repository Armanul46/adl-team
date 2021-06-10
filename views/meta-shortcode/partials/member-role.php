<?php
$member_role = (array_key_exists('member_role', $args)) ? $args['member_role'] : array();
?>

<div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">

    <div class="cmb-row">
        <div class="cmb-th st">
            <label><?php esc_html_e('Select Member Role', ADL_TEAM_TEXTDOMAIN); ?></label>
        </div>
        <?php
        $member_role = (!empty($member_role)) ? $member_role : '' ;
        global $wp_roles;
        $all_roles = $wp_roles->roles;
        
        ?>
        <div class="cmb-td">
            <select name="gs[member_role]">
                <?php
                $values = [
                    'all'      => __('All', ADL_TEAM_TEXTDOMAIN),
                ];
                if( ! empty( $all_roles ) ) {
                    foreach( $all_roles as $key => $value ) {
                        $values[$key] = $value['name'];
                    }
                }
               
                foreach ( $values as $key => $val  ) {
                    echo '<option value="' . esc_attr($key) . '"';

                    selected($member_role, $key);

                    echo '>' . esc_attr($val) . '</option>';
                }

                ?>
            </select>
        </div>
    </div>


</div> <!-- end cmb2-metabox -->
