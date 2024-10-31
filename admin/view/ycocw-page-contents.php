<?php

/**
 * Columns settings contents
 */

defined( 'ABSPATH' ) or exit;
?>
<style>.notice{display:none;}</style>
<div class="wrap">
    <span class="ycombox">
        <span class="ycrecboard"></span><span class="ycrecboard"></span><span class="ycrecboard"></span>
    </span>
    <h1 class="wp-heading-inline"><?php esc_attr_e( 'New custom order columns', 'new-custom-order-columns' );?></h1>
    <?php $this->ycocw_save_message(); ?>
    <div class="ycmdatac">
        <p><?php esc_html_e('Enter column title and order meta key to show new columns in shop order list.', 'new-custom-order-columns' );?></p>
        <form id="ycocw-form" method="post">
        <table class="yc-col-tbl">
        <thead>
            <tr valign="top">
                <th class="titledesc ycmflat ycthtd"><?php esc_attr_e( 'Column title','new-custom-order-columns' );?></th><th class="titledesc ycmflat ycthtd"><?php esc_attr_e( 'Column meta key (for value)', 'new-custom-order-columns' );?></th>
            </tr>
        </thead>
        <tbody>
            <?php if ( ! empty( $cols ) ) :?>
                <?php foreach( $cols as $k => $d ) :?>
                    <tr class="nccols">
                        <td class="ycthtd">
                            <input type="text" name="col_title[]" value="<?php echo esc_attr( $d['col_title'] );?>" />
                                </td>
                                    <td class="ycthtd">
                                    <input type="text" name="col_meta[]" value="<?php echo esc_attr( $d['col_meta'] );?>" />
                                </td>
                                <td class="ycthtd yc-btn-com" width="14%">
                                    <button type="button" name="ryc_cols" class="button button-primary ycrb" title="<?php esc_attr_e( 'Remove','new-custom-order-columns' );?>"><span class="dashicons dashicons-minus ycobtm"></span></button>
                                    <button type="button" name="ayc_cols" class="button button-primary ycnb" title="<?php esc_attr_e( 'Add new','new-custom-order-columns' );?>"><span class="dashicons dashicons-plus ycobt"></span></button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
            <tr valign="top" class="nccols active">
                <td class="ycthtd">
                    <input type="text" name="col_title[]" placeholder="<?php esc_attr_e( 'Ex: First name', 'new-custom-order-columns' );?>" />
                </td>
                <td class="ycthtd">
                    <input type="text" name="col_meta[]" placeholder="<?php echo esc_attr( 'Ex: billing_first_name' );?>" />
                </td>
                <td class="yc-btn-com" width="">
                    <button type="button" name="ryc_cols" class="button button-primary ycrb" title="<?php esc_attr_e( 'Remove','new-custom-order-columns' );?>"><span class="dashicons dashicons-minus ycobtm"></span></button>
                    <button type="button" name="ayc_cols" class="button button-primary ycnb" title="<?php esc_attr_e( 'Add new','new-custom-order-columns' );?>"><span class="dashicons dashicons-plus ycobt"></span></button>
                </td>
            </tr>
        </tbody>
        </table>
        <div class="ycocw-submit">
            <?php wp_nonce_field('ycocw-nonce');?>
            <input type="submit" name="ycocw_save" id="ycocw_submit" value="<?php esc_attr_e( 'Save changes', 'new-custom-order-columns' ); ?>" class="button button-primary" />
        </div>
        </form>
    </div>
    <h4 class="ycocw-meta-sam"><?php esc_html_e( 'Some WooCommerce default order meta keys ( OR can use own custom order meta keys )', 'new-custom-order-columns' );?></h4>
    <div class="ycocw-billing"><b><?php esc_html_e( 'Billing', 'new-custom-order-columns' );?></b>
        <ul class="ycocw-ul">
            <?php foreach( $meta_keys as $meta_key ):?>
            <li class="ycocw-li-box"><?php echo 'billing_'.esc_html( $meta_key );?>
            <?php endforeach;?>
        </ul>
    </div>
        <div class="ycocw-shipping"><b><?php esc_html_e( 'Shipping', 'new-custom-order-columns' );?></b>
        <ul class="ycocw-ul">
            <?php foreach( $meta_keys as $meta_key ):?>
            <li class="ycocw-li-box"><?php echo 'shipping_'.esc_html( $meta_key );?>
            <?php endforeach;?>
        </ul>
    </div>
</div>



