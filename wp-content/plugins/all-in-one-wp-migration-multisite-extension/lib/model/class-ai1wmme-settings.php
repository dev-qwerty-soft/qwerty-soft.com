<?php
/**
 * Copyright (C) 2014-2020 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}

class Ai1wmme_Settings {

	public function set_backups( $number ) {
		return update_option( 'ai1wmme_backups', $number );
	}

	public function get_backups() {
		return get_option( 'ai1wmme_backups', false );
	}

	public function set_total( $size ) {
		return update_option( 'ai1wmme_total', $size );
	}

	public function get_total() {
		return get_option( 'ai1wmme_total', false );
	}

	public function set_days( $days ) {
		return update_option( 'ai1wmme_days', $days );
	}

	public function get_days() {
		return get_option( 'ai1wmme_days', false );
	}

	public function get_backups_path() {
		return get_option( AI1WM_BACKUPS_PATH_OPTION, AI1WM_DEFAULT_BACKUPS_PATH );
	}

	public function set_backups_path( $path ) {
		if ( realpath( $path ) !== realpath( ABSPATH ) ) {
			return update_option( AI1WM_BACKUPS_PATH_OPTION, $path );
		}

		return false;
	}

	public function reset_backups_path() {
		return delete_option( AI1WM_BACKUPS_PATH_OPTION );
	}
}
