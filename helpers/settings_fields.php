<?php
add_action( 'admin_menu', 'audent_add_admin_menu' );
add_action( 'admin_init', 'audent_settings_init' );


function audent_add_admin_menu(  ) {

    add_submenu_page( 'options-general.php', 'Доп. настройки', 'Доп. настройки сайта', 'manage_options', 'additional_settings', 'audent_options_page' );

}


function audent_settings_init(  ) {

    register_setting( 'pluginPage', 'audent_settings' );

    add_settings_section(
        'audent_pluginPage_section',
        __( '', 'audent' ),
        'audent_settings_section_callback',
        'pluginPage'
    );

    add_settings_field(
        'audent_text_field_0',
        __( 'Адрес', 'audent' ),
        'audent_text_field_0_render',
        'pluginPage',
        'audent_pluginPage_section'
    );

    add_settings_field(
        'audent_text_field_1',
        __( 'Номер телефона', 'audent' ),
        'audent_text_field_1_render',
        'pluginPage',
        'audent_pluginPage_section'
    );

    add_settings_field(
        'audent_text_field_2',
        __( 'Номер телефона', 'audent' ),
        'audent_text_field_2_render',
        'pluginPage',
        'audent_pluginPage_section'
    );


}


function audent_text_field_0_render(  ) {

    $options = get_option( 'audent_settings' );
    ?>
    <input type='text' name='audent_settings[audent_text_field_0]' value='<?php echo $options['audent_text_field_0']; ?>'>
    <?php

}


function audent_text_field_1_render(  ) {

    $options = get_option( 'audent_settings' );
    ?>
    <input type='text' name='audent_settings[audent_text_field_1]' value='<?php echo $options['audent_text_field_1']; ?>'>
    <?php

}


function audent_text_field_2_render(  ) {

    $options = get_option( 'audent_settings' );
    ?>
    <input type='text' name='audent_settings[audent_text_field_2]' value='<?php echo $options['audent_text_field_2']; ?>'>
    <?php

}


function audent_settings_section_callback(  ) {

    //echo __( 'This section description', 'audent' );

}


function audent_options_page(  ) {

    ?>
    <form action='options.php' method='post'>

        <h2>Доп. настройки</h2>

        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

    </form>
    <?php

}

?>