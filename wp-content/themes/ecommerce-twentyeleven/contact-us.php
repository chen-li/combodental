<?php
/*
Template Name: Contact Us
*/

get_header(); ?>

        <?php
            $sent = false;
            if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
                $validation_errors = array();

                foreach ( $_POST as $field => $value ) {
                    if ( get_magic_quotes_gpc() ) {
                        $value = stripslashes( $value );
                    }
                    $form_data[$field] = strip_tags( $value );
                }
                $required_fields = array(
                    "wpcu_name" => 'Please enter a name.',
                    "wpcu_message" => 'Please enter a message.'
                );
                foreach ( $required_fields as $required_field => $error_message ) {
                    $value = trim( $form_data[$required_field] );
                    if ( empty( $value ) ) {
                        $validation_errors[$required_field] = $error_message;
                    }
                }
                if (!filter_var(trim($form_data['wpcu_email']), FILTER_VALIDATE_EMAIL)) {
                    $validation_errors['wpcu_email'] = 'Please enter a valid email address.';
                }

                if ( empty($validation_errors) ) {
                    $email = 'info@combodental.com.au';
                    $email_subject = "[" . get_bloginfo( 'name' ) . "] Contact Us Form.";
                    $email_message = $form_data['wpcu_message'] . "\n\nFrom: " . $form_data['wpcu_name'] . " <" . $form_data['wpcu_email'] .">\n\nIP: " . wptuts_get_the_ip();
                    $headers  = "From: " . $form_data['wpcu_name'] . " <" . $form_data['wpcu_email'] . ">\n";
                    $headers .= "Content-Type: text/plain; charset=UTF-8\n";
                    $headers .= "Content-Transfer-Encoding: 8bit\n";
                    wp_mail( $email, $email_subject, $email_message, $headers );
                    $sent = true;
                } else {
				    $sent = false;
				}
            }
        ?>

		<div id="primary">
			<div id="content" role="main">

				<article>
                    <header class="entry-header">
                        <h1 class="entry-title">Contact Us</h1>
                    </header>
                    <div class="entry-content contact-us">
                        <div class="contact-form">
                            <?php if ( $sent ) : ?>
                                <div class="thank-you">
                                    <h3>Thanks for your message</h3>
                                    <p>We do our best to respond within 24 hours to all enquiries. One of our team will be in touch shortly.</p>
                                    <div class="green-tick"><img src="<?php bloginfo('template_directory'); ?>/images/green-tick.png"/></div>
                                </div>
							<?php else : ?>
                            <form method="post" action="/contact-us/">
                                <div class="input <?php echo empty($validation_errors['wpcu_name']) ? '' : 'error' ?>">
                                    <label for="wpcu_name" style="<?php echo empty($_POST['wpcu_name']) ? '' : 'display: none;'; ?>">Name</label>
                                    <input type="text" name="wpcu_name" id="wpcu_name" class="<?php echo empty($_POST['wpcu_name']) ? '' : 'no-text-indent'; ?>" value="<?php echo empty($_POST['wpcu_name']) ? '' : $_POST['wpcu_name']; ?>" />
                                    <?php if (!empty($validation_errors['wpcu_name'])) : ?><p class="error_message"><?php echo $validation_errors['wpcu_name']; ?></p><?php endif; ?>
                                </div>
                                <div class="input <?php echo empty($validation_errors['wpcu_email']) ? '' : 'error' ?>">
                                    <label for="wpcu_email" style="<?php echo empty($_POST['wpcu_email']) ? '' : 'display: none;'; ?>">Email</label>
                                    <input type="text" name="wpcu_email" id="wpcu_email" class="<?php echo empty($_POST['wpcu_email']) ? '' : 'no-text-indent'; ?>" value="<?php echo empty($_POST['wpcu_email']) ? '' : $_POST['wpcu_email']; ?>" />
                                    <?php if (!empty($validation_errors['wpcu_email'])) : ?><p class="error_message"><?php echo $validation_errors['wpcu_email']; ?></p><?php endif; ?>
                                </div>
                                <div class="input <?php echo empty($validation_errors['wpcu_message']) ? '' : 'error' ?>">
                                    <label for="wpcu_message" style="<?php echo empty($_POST['wpcu_message']) ? '' : 'display: none;'; ?>">Message</label>
                                    <textarea name="wpcu_message" id="wpcu_message" class="<?php echo empty($_POST['wpcu_message']) ? '' : 'no-text-indent'; ?>"><?php echo empty($_POST['wpcu_message']) ? '' : $_POST['wpcu_message']; ?></textarea>
                                    <?php if (!empty($validation_errors['wpcu_message'])) : ?><p class="error_message"><?php echo $validation_errors['wpcu_message']; ?></p><?php endif; ?>
                                </div>
                                <div class="submit">
                                    <input type="submit" value="send" name="Send" id="wpcu_send" class="btn btn-primary" />
                                </div>
                            </form>
                            <?php endif; ?>
                        </div>
                        <div class="company">
                            <dl>
                                <dt>Company:</dt>
                                <dd>Combo Dental Supplies Pty Ltd</dd>
                            </dl>
                            <dl>
                                <dt>Address:</dt>
                                <dd>Shangyu City Chapter Town Industrial Park</dd>
                            </dl>
                            <dl>
                                <dt>Telephone:</dt>
                                <dd>0575-82097708<br />0575-82097288</dd>
                            </dl>
                            <dl>
                                <dt>Fax:</dt>
                                <dd>0575-82097700</dd>
                            </dl>
                        </div>
                        <div style="clear: both;"></div>
                        <?php // comments_template( '', true ); ?>
                    </div>
				</article>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>