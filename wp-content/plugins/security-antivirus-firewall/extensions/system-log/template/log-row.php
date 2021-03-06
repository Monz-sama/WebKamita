<?php
/*  
 * Security Antivirus Firewall (wpTools S.A.F.)
 * http://wptools.co/wordpress-security-antivirus-firewall
 * Version:           	2.3.1
 * Build:             	84880
 * Author:            	WpTools
 * Author URI:        	http://wptools.co
 * License:           	License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * Date:              	Mon, 16 Oct 2017 18:22:24 GMT
 */

if ( ! defined( 'WPINC' ) )  die;
if ( ! defined( 'ABSPATH' ) ) exit;

?>
<div class="row <?php echo $extensionName; ?>">
	<div class="col-md-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><?php echo $extensionTitle . ': ' . sprintf(__('Log row #%d', 'wptsaf_security'), $row['id']); ?>
				</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="log table table-striped table-bordered">
					<thead>
						<tr>
							<?php foreach ($header as $title) : ?>
								<th>
									<?php echo __($title, 'wptsaf_security'); ?>
								</th>
							<?php endforeach; ?>
						</tr>
					</thead>
					<tbody>
						<?php $columns = array_keys($header); ?>
						<?php $row['type'] = "<span class='label label-{$row['type']}'>" . __( wpToolsSAFHelperClass::getTypeLabel( $row['type'] ), 'wptsaf_security') . "</span>"; ?>
						<tr>
							<?php foreach ($columns as $column) : ?>
								<td class="<?php echo $column; ?>"><?php echo $row[$column]; ?></td>
							<?php endforeach; ?>
						</tr>
					</tbody>
				</table>

				<div class="ln_solid"></div>
				<div class="buttons">
					<button class="btn btn-default pull-right btn-popup-close">
						<?php _e('Close', 'wptsaf_security'); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
